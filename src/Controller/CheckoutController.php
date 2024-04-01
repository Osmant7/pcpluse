<?php

namespace App\Controller;

use App\Services\CartService;
use App\Repository\AddressRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CheckoutController extends AbstractController
{

    // injecte le service Cart
    public function __construct(private CartService $cartService, private RequestStack $requestStack,
    ) {
        $this->cartService = $cartService;
        $this->session = $requestStack->getSession();
    }

    #[Route('/checkout', name: 'app_checkout')]
    public function index(AddressRepository $addressRepository,): Response
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

        return $this->render('checkout/index.html.twig', [
            'controller_name' => 'CheckoutController',
            'cart' => $cart,
            'addresses' => $addresses
        ]);
    }
}
