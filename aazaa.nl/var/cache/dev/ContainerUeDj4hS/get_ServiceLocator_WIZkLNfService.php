<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.wIZkLNf' shared service.

return $this->privates['.service_locator.wIZkLNf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'userWorkshop' => ['privates', '.errored..service_locator.wIZkLNf.App\\Entity\\UserWorkshop', NULL, 'Cannot autowire service ".service_locator.wIZkLNf": it references class "App\\Entity\\UserWorkshop" but no such service exists.'],
]);