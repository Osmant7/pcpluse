<?php

namespace App\Controller;

use App\Services\CartService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CheckoutController extends AbstractController
{

    // injecte le service Cart
    public function __construct(
    private CartService $cartService,
    ) {
        $this->cartService = $cartService;
    }

    #[Route('/checkout', name: 'app_checkout')]
    public function index(): Response
    {
        $cart = $this->cartService->getCartDetails();

        // on compte, si quelque chose existe dans le panier
        if(!count($cart["items"])){
            return $this->redirectToRoute('app_home');
        }

        return $this->render('checkout/index.html.twig', [
            'controller_name' => 'CheckoutController',
            'cart' => $cart
        ]);
    }
}
