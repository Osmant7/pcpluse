<?php

namespace ContainerHKPq9Vr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper' shared service.
     *
     * @return \Symfony\Component\AssetMapper\AssetMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['asset_mapper.public_assets_path_resolver'] ??= new \Symfony\Component\AssetMapper\Path\PublicAssetsPathResolver(\dirname(__DIR__, 4), '/assets/', 'public'));

        return $container->privates['asset_mapper'] = new \Symfony\Component\AssetMapper\AssetMapper(($container->privates['asset_mapper.repository'] ?? $container->load('getAssetMapper_RepositoryService')), new \Symfony\Component\AssetMapper\Factory\CachedMappedAssetFactory(new \Symfony\Component\AssetMapper\Factory\MappedAssetFactory($a, new \Symfony\Component\AssetMapper\AssetMapperCompiler(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['stimulus.asset_mapper.loader_javascript_compiler'] ?? $container->load('getStimulus_AssetMapper_LoaderJavascriptCompilerService'));
            yield 1 => ($container->privates['asset_mapper.compiler.css_asset_url_compiler'] ?? $container->load('getAssetMapper_Compiler_CssAssetUrlCompilerService'));
            yield 2 => ($container->privates['asset_mapper.compiler.source_mapping_urls_compiler'] ??= new \Symfony\Component\AssetMapper\Compiler\SourceMappingUrlsCompiler());
            yield 3 => ($container->privates['asset_mapper.compiler.javascript_import_path_compiler'] ?? $container->load('getAssetMapper_Compiler_JavascriptImportPathCompilerService'));
        }, 4), #[\Closure(name: 'asset_mapper', class: 'Symfony\\Component\\AssetMapper\\AssetMapper')] fn () => ($container->privates['asset_mapper'] ?? $container->load('getAssetMapperService')))), ($container->targetDir.''.'/asset_mapper'), false), $a);
    }
}
