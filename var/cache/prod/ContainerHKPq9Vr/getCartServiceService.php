<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Services\CartService' shared autowired service.
     *
     * @return \App\Services\CartService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Services\\CartService'] = new \App\Services\CartService(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')));
    }
}
