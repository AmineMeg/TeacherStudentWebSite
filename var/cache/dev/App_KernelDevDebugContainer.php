<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFWZApLz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFWZApLz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFWZApLz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFWZApLz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFWZApLz\App_KernelDevDebugContainer([
    'container.build_hash' => 'FWZApLz',
    'container.build_id' => 'f6d11fca',
    'container.build_time' => 1589646427,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFWZApLz');
