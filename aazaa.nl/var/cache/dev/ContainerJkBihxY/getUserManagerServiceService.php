<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'user_manager_service' shared service.

include_once $this->targetDirs[3].'/src/Service/UserManagerService.php';

return $this->services['user_manager_service'] = new \App\Service\UserManagerService(($this->services['fos_user.user_manager'] ?? $this->load('getFosUser_UserManagerService.php')), $this, ($this->privates['security.encoder_factory.generic'] ?? $this->load('getSecurity_EncoderFactory_GenericService.php')));
