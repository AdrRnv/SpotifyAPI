<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLEFF9xQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLEFF9xQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLEFF9xQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLEFF9xQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLEFF9xQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'LEFF9xQ',
    'container.build_id' => '8241d563',
    'container.build_time' => 1726480299,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLEFF9xQ');
