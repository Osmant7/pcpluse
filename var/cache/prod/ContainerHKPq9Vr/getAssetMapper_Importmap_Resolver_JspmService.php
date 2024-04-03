<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Resolver_JspmService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.importmap.resolver.jspm' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\Resolver\JspmResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.importmap.resolver.jspm'] = new \Symfony\Component\AssetMapper\ImportMap\Resolver\JspmResolver(($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')), 'jspm');
    }
}
