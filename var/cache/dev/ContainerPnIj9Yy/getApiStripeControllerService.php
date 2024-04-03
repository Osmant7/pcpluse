<?php

namespace ContainerPnIj9Yy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiStripeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\ApiStripeController' shared autowired service.
     *
     * @return \App\Controller\Api\ApiStripeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'ApiStripeController.php';

        $container->services['App\\Controller\\Api\\ApiStripeController'] = $instance = new \App\Controller\Api\ApiStripeController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Api\\ApiStripeController', $container));

        return $instance;
    }
}