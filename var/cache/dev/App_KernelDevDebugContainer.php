<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRZJ3Dsx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRZJ3Dsx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRZJ3Dsx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRZJ3Dsx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRZJ3Dsx\App_KernelDevDebugContainer([
    'container.build_hash' => 'RZJ3Dsx',
    'container.build_id' => '1f08a733',
    'container.build_time' => 1583230231,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRZJ3Dsx');
