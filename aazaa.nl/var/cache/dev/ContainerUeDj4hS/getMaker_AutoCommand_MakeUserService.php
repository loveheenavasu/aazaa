<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_user' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/MakeUser.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

$a = ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php'));

$this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($this->privates['maker.entity_class_generator'] ?? $this->load('getMaker_EntityClassGeneratorService.php'))), $a, ($this->privates['maker.generator'] ?? $this->load('getMaker_GeneratorService.php')));

$instance->setDescription('Creates a new security user class');
$instance->setName('make:user');

return $instance;
