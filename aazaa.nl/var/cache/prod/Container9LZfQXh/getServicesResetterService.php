<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['cache.app'])) {
        yield 'cache.app' => ($this->services['cache.app'] ?? null);
    }
    if (isset($this->services['cache.system'])) {
        yield 'cache.system' => ($this->services['cache.system'] ?? null);
    }
    if (isset($this->privates['cache.validator'])) {
        yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
    }
    if (isset($this->privates['cache.serializer'])) {
        yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
    }
    if (isset($this->privates['cache.annotations'])) {
        yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
    }
    if (isset($this->privates['form.choice_list_factory.cached'])) {
        yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
    }
    if (isset($this->privates['doctrine.result_cache_pool'])) {
        yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? null);
    }
    if (isset($this->privates['doctrine.system_cache_pool'])) {
        yield 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? null);
    }
    if (isset($this->privates['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
    }
    if (isset($this->privates['form.type.entity'])) {
        yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
    }
    if (isset($this->privates['cache.security_expression_language'])) {
        yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
    }
    if (isset($this->privates['swiftmailer.email_sender.listener'])) {
        yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
    }
    if (isset($this->privates['monolog.handler.main'])) {
        yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
    }
    if (isset($this->privates['monolog.handler.console'])) {
        yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
    }
}, function () {
    return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['doctrine.result_cache_pool'])) + (int) (isset($this->privates['doctrine.system_cache_pool'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console']));
}), ['cache.app' => 'reset', 'cache.system' => 'reset', 'cache.validator' => 'reset', 'cache.serializer' => 'reset', 'cache.annotations' => 'reset', 'form.choice_list_factory.cached' => 'reset', 'doctrine.result_cache_pool' => 'reset', 'doctrine.system_cache_pool' => 'reset', 'debug.stopwatch' => 'reset', 'form.type.entity' => 'reset', 'security.token_storage' => 'setToken', 'cache.security_expression_language' => 'reset', 'swiftmailer.email_sender.listener' => 'reset', 'monolog.handler.main' => 'reset', 'monolog.handler.console' => 'reset']);
