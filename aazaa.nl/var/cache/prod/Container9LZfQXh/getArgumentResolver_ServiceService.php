<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\Account\\DefaultController::startVideoSession' => ['privates', '.service_locator.wIZkLNf', 'get_ServiceLocator_WIZkLNfService.php', true],
    'App\\Controller\\Admin\\UserController::detail' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\UserController::disable' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\UserController::enable' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\VideoController::close' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
    'App\\Controller\\Admin\\VideoController::create' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
    'App\\Controller\\Admin\\VideoController::open' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
    'App\\Controller\\WorkshopController::subscribe' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
    'App\\Controller\\Account\\DefaultController:startVideoSession' => ['privates', '.service_locator.wIZkLNf', 'get_ServiceLocator_WIZkLNfService.php', true],
    'App\\Controller\\Admin\\UserController:detail' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\UserController:disable' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\UserController:enable' => ['privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true],
    'App\\Controller\\Admin\\VideoController:close' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
    'App\\Controller\\Admin\\VideoController:create' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
    'App\\Controller\\Admin\\VideoController:open' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
    'App\\Controller\\WorkshopController:subscribe' => ['privates', '.service_locator.lqcETDE', 'get_ServiceLocator_LqcETDEService.php', true],
]));
