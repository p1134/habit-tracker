<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SelectedHabits extends \App\Entity\SelectedHabits implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'DeleteDate' => [parent::class, 'DeleteDate', null, 16],
        "\0".parent::class."\0".'date' => [parent::class, 'date', null, 16],
        "\0".parent::class."\0".'habit' => [parent::class, 'habit', null, 16],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null, 16],
        "\0".parent::class."\0".'isDeleted' => [parent::class, 'isDeleted', null, 16],
        "\0".parent::class."\0".'ownHabit' => [parent::class, 'ownHabit', null, 16],
        "\0".parent::class."\0".'tracking' => [parent::class, 'tracking', null, 16],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null, 16],
        'DeleteDate' => [parent::class, 'DeleteDate', null, 16],
        'date' => [parent::class, 'date', null, 16],
        'habit' => [parent::class, 'habit', null, 16],
        'id' => [parent::class, 'id', null, 16],
        'isDeleted' => [parent::class, 'isDeleted', null, 16],
        'ownHabit' => [parent::class, 'ownHabit', null, 16],
        'tracking' => [parent::class, 'tracking', null, 16],
        'user' => [parent::class, 'user', null, 16],
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
