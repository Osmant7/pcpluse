<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Settings extends \App\Entity\Settings implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'copyright' => [parent::class, 'copyright', null],
        "\0".parent::class."\0".'created_at' => [parent::class, 'created_at', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'facebook' => [parent::class, 'facebook', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'instagram' => [parent::class, 'instagram', null],
        "\0".parent::class."\0".'logo' => [parent::class, 'logo', null],
        "\0".parent::class."\0".'phone' => [parent::class, 'phone', null],
        "\0".parent::class."\0".'street' => [parent::class, 'street', null],
        "\0".parent::class."\0".'taxe' => [parent::class, 'taxe', null],
        "\0".parent::class."\0".'updated_at' => [parent::class, 'updated_at', null],
        "\0".parent::class."\0".'websiteName' => [parent::class, 'websiteName', null],
        "\0".parent::class."\0".'youtube' => [parent::class, 'youtube', null],
        'city' => [parent::class, 'city', null],
        'copyright' => [parent::class, 'copyright', null],
        'created_at' => [parent::class, 'created_at', null],
        'description' => [parent::class, 'description', null],
        'email' => [parent::class, 'email', null],
        'facebook' => [parent::class, 'facebook', null],
        'id' => [parent::class, 'id', null],
        'instagram' => [parent::class, 'instagram', null],
        'logo' => [parent::class, 'logo', null],
        'phone' => [parent::class, 'phone', null],
        'street' => [parent::class, 'street', null],
        'taxe' => [parent::class, 'taxe', null],
        'updated_at' => [parent::class, 'updated_at', null],
        'websiteName' => [parent::class, 'websiteName', null],
        'youtube' => [parent::class, 'youtube', null],
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
