<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.lqcETDE' shared service.

return $this->privates['.service_locator.lqcETDE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'workshop' => ['privates', '.errored..service_locator.lqcETDE.App\\Entity\\Workshop', NULL, 'Cannot autowire service ".service_locator.lqcETDE": it references class "App\\Entity\\Workshop" but no such service exists.'],
]);
