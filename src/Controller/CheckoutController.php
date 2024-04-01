<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderDetails;
use App\Services\CartService;
use App\Services\StripeService;
use App\Repository\AddressRepository;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CheckoutController extends AbstractController
{

    // injecte le service Cart
    public function __construct(private CartService $cartService, 
    private RequestStack $requestStack,
    EntityManagerInterface $em,
    OrderRepository $orderRepo
    ) {
        $this->cartService = $cartService;
        $this->session = $requestStack->getSession();
        $this->em = $em;
        $this->orderRepo = $orderRepo;
    }

    #[Route('/checkout', name: 'app_checkout')]
    public function index(
        AddressRepository $addressRepository,
        StripeService $stripeService
        ,): Response
    {

        
        $cart = $this->cartService->getCartDetails();
        
        // on compte, si quelque chose existe dans le panier
        if(!count($cart["items"])){
            return $this->redirectToRoute('app_home');
        }

        // si l'utilisateur n'est pas connecté et qu'il veut accèder a
        // la page paiement alors on redirige sur la page de connexion
        // et si il se connecte alors on le redirige sur la page paiement qu'il souhaité
        // ( les modifs on du étre appliqué dans Security/AppCustomAuthenticator.php aussi)
        $user = $this->getUser();

        if(!$user){
            $this->session->set("next", "app_checkout");
            return $this->redirectToRoute("app_login");
        }

        $addresses = $addressRepository->findByUser($user);
        $cart_json = json_encode($cart);

        $orderId = $this->createOrder($cart);

        $publicKey = $stripeService->getPublicKey();

        return $this->render('checkout/index.html.twig', [
            'controller_name' => 'CheckoutController',
            'cart' => $cart,
            'orderId' => $orderId,
            'cart_json' => $cart_json,
            'public_key' => $publicKey,
            'addresses' => $addresses
        ]);
    }

     #[Route('/stripe/payment/success', name: 'app_stripe_payment_success')]
     public function paymentSuccess(Request $req, OrderRepository $orderRepo, EntityManagerInterface $em){

        $stripeClientSecret = $req->query->get("payment_intent_client_secret");
        // dd($req->query->get("payment_intent_client_secret"));

        $order = $orderRepo->findOneByStripeClientSecret($stripeClientSecret);

        if(!$order){
            return $this->redirectToRoute("app_error");
        }
        // dd($order);
        
        $order->setIsPayed(true);
        $em->persist($order);
        $em->flush();

         return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController'
        ]);
     }

    public function createOrder($cart){
        $user = $this->getUser();

        $oldOrder = $this->orderRepo->findOneBy([
            "client_name" => $user->getFullName(),
            "order_cost" => $cart["sub_total"],
            "taxe" => $cart["taxe"],
            "isPayed" => false,
            "order_cost_ttc" => $cart["sub_total"],
            "quantity" => $cart['quantity']
        ]);

        if($oldOrder){
            return $oldOrder->getId();
        }


        $order = new Order();
        $order->setClientName($user->getFullName())
              ->setBillingAddress("")
              ->setShippingAddress("")
              ->setOrderCost($cart["sub_total"])
              ->setTaxe($cart["taxe"])
              ->setOrderCostTtc($cart["sub_total"])
              ->setQuantity($cart['quantity'])
              ->setIsPayed(false)
              ->setStatus("En cours")
        ;
        $this->em->persist($order);

        foreach ($cart["items"] as $key => $item) {
            $product = $item["product"];
            $orderDetails = new OrderDetails();
            $orderDetails->setProductName($product['name'])
                         ->setProductDescription($product['description'])
                         ->setProductSoldePrice($product['soldePrice'])
                         ->setProductRegularPrice($product['regularPrice'])
                         ->setQuantity($item['quantity'])
                         ->setSubTotal($item['sub_total'])
                         ->setTaxe($item['taxe'])
                         ->setMyOrder($order)
                         ;
            $this->em->persist($orderDetails);

        }

        $this->em->flush();

        return $order->getId();

    }
}
