<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStripeServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Services\StripeService' shared autowired service.
     *
     * @return \App\Services\StripeService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Services\\StripeService'] = new \App\Services\StripeService(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\Repository\\PaymentMethodRepository'] ?? $container->load('getPaymentMethodRepositoryService')));
    }
}
