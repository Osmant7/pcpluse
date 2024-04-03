<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\CartController' shared autowired service.
     *
     * @return \App\Controller\CartController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CartController'] = $instance = new \App\Controller\CartController(($container->privates['App\\Services\\CartService'] ?? $container->load('getCartServiceService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\CartController', $container));

        return $instance;
    }
}
