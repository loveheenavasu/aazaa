<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9LZfQXh\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9LZfQXh/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/Container9LZfQXh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\Container9LZfQXh\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \Container9LZfQXh\srcApp_KernelProdContainer([
    'container.build_hash' => '9LZfQXh',
    'container.build_id' => '8f96842c',
    'container.build_time' => 1627998254,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9LZfQXh');
