<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'httplug.client' shared service.

include_once $this->targetDirs[3].'/vendor/php-http/httplug/src/HttpClient.php';
include_once $this->targetDirs[3].'/vendor/php-http/client-common/src/HttpMethodsClient.php';
include_once $this->targetDirs[3].'/vendor/php-http/httplug/src/HttpAsyncClient.php';
include_once $this->targetDirs[3].'/vendor/php-http/client-common/src/PluginClient.php';
include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/ClientFactory/ClientFactory.php';
include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/ClientFactory/AutoDiscoveryFactory.php';
include_once $this->targetDirs[3].'/vendor/php-http/client-common/src/Plugin.php';
include_once $this->targetDirs[3].'/vendor/php-http/client-common/src/Plugin/ContentLengthPlugin.php';
include_once $this->targetDirs[3].'/vendor/php-http/client-common/src/Plugin/RedirectPlugin.php';
include_once $this->targetDirs[3].'/vendor/php-http/client-common/src/PluginClientFactory.php';

return $this->services['httplug.client'] = new \Http\Client\Common\HttpMethodsClient((new \Http\Client\Common\PluginClientFactory())->createClient((new \Http\HttplugBundle\ClientFactory\AutoDiscoveryFactory())->createClient([]), [0 => new \Http\Client\Common\Plugin\ContentLengthPlugin(), 1 => new \Http\Client\Common\Plugin\RedirectPlugin(['preserve_header' => true, 'use_default_for_multiple' => true])], ['client_name' => 'app']), ($this->services['httplug.message_factory'] ?? $this->load('getHttplug_MessageFactoryService.php')));
