<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YBQUGDcService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.yBQUGDc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yBQUGDc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'address' => ['privates', '.errored..service_locator.yBQUGDc.App\\Entity\\Address', NULL, 'Cannot autowire service ".service_locator.yBQUGDc": it needs an instance of "App\\Entity\\Address" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'address' => 'App\\Entity\\Address',
            'entityManager' => '?',
        ]);
    }
}