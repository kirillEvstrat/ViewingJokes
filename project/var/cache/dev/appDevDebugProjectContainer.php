<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPgsah4z\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPgsah4z/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerPgsah4z.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerPgsah4z\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerPgsah4z\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Pgsah4z',
    'container.build_id' => '272a5b0b',
    'container.build_time' => 1542531376,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerPgsah4z');
