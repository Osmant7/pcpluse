<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Page extends \App\Entity\Page implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'content' => [parent::class, 'content', null],
        "\0".parent::class."\0".'created_at' => [parent::class, 'created_at', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isFooter' => [parent::class, 'isFooter', null],
        "\0".parent::class."\0".'isHeader' => [parent::class, 'isHeader', null],
        "\0".parent::class."\0".'slug' => [parent::class, 'slug', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        "\0".parent::class."\0".'updated_at' => [parent::class, 'updated_at', null],
        'content' => [parent::class, 'content', null],
        'created_at' => [parent::class, 'created_at', null],
        'id' => [parent::class, 'id', null],
        'isFooter' => [parent::class, 'isFooter', null],
        'isHeader' => [parent::class, 'isHeader', null],
        'slug' => [parent::class, 'slug', null],
        'title' => [parent::class, 'title', null],
        'updated_at' => [parent::class, 'updated_at', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
