<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJbcIi6h\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJbcIi6h/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJbcIi6h.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJbcIi6h\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJbcIi6h\App_KernelDevDebugContainer([
    'container.build_hash' => 'JbcIi6h',
    'container.build_id' => '71834239',
    'container.build_time' => 1695861701,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJbcIi6h');
