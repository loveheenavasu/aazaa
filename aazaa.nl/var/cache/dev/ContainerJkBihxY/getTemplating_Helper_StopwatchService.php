<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.stopwatch' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/HelperInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/templating/Helper/Helper.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Helper/StopwatchHelper.php';

return $this->privates['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
