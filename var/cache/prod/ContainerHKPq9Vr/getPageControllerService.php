<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PageController' shared autowired service.
     *
     * @return \App\Controller\PageController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PageController'] = $instance = new \App\Controller\PageController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PageController', $container));

        return $instance;
    }
}
