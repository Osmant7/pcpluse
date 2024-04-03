<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDatabaseActivitySubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventSubscriber\DatabaseActivitySubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\DatabaseActivitySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\EventSubscriber\\DatabaseActivitySubscriber'] = new \App\EventSubscriber\DatabaseActivitySubscriber(($container->services['kernel'] ?? $container->get('kernel', 1)));
    }
}
