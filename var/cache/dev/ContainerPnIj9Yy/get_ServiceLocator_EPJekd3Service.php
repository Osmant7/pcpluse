<?php

namespace ContainerPnIj9Yy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EPJekd3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ePJekd3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ePJekd3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'addressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', true],
            'stripeService' => ['privates', 'App\\Services\\StripeService', 'getStripeServiceService', true],
        ], [
            'addressRepository' => 'App\\Repository\\AddressRepository',
            'stripeService' => 'App\\Services\\StripeService',
        ]);
    }
}
