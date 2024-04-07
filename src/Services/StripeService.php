<?php

namespace App\Services;

use App\Repository\PaymentMethodRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class StripeService {

    public function __construct(
        private RequestStack $requestStack,
        private PaymentMethodRepository $paymentMethodRepo,
    ) {
        // Accessing the session in the constructor is *NOT* recommended, since
        // it might not be accessible yet or lead to unwanted side-effects
        $this->session = $requestStack->getSession();
    }


    public function getPublicKey(){
        $config = $this->paymentMethodRepo->findOneByName("Stripe");

        if($_ENV['APP_ENV'] === 'dev'){
            // mode développement
            return $config->getTestPublicApiKey();
        } else {
            // mode production
            // return $config->getTestPublicApiKey();
            // a décommenter la ligne 28 et commenter la ligne 29 pour pouvoir payer avec de reel carte en mode prod
            return $config->getProdPublicApiKey();
        }
    }

    public function getPrivateKey(){
        $config = $this->paymentMethodRepo->findOneByName("Stripe");

        if($_ENV['APP_ENV'] === 'dev'){
            // mode développement
            return $config->getTestPrivateApiKey();
        } else {
            // mode production
            // return $config->getTestPrivateApiKey();
            // a décommenter la ligne 42 et commenter la ligne 44 pour pouvoir payer avec de reel carte en mode prod
            return $config->getProdPrivateApiKey();
        }
    }


}