<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPnIj9Yy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPnIj9Yy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPnIj9Yy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPnIj9Yy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPnIj9Yy\App_KernelDevDebugContainer([
    'container.build_hash' => 'PnIj9Yy',
    'container.build_id' => 'e5eaef1f',
    'container.build_time' => 1711994185,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPnIj9Yy');
