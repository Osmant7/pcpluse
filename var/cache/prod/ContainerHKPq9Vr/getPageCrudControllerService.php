<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\PageCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PageCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\PageCrudController'] = $instance = new \App\Controller\Admin\PageCrudController();

        $instance->setContainer(($container->privates['.service_locator.3YFBJbt'] ?? $container->load('get_ServiceLocator_3YFBJbtService'))->withContext('App\\Controller\\Admin\\PageCrudController', $container));

        return $instance;
    }
}
