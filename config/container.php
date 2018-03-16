<?php

declare(strict_types=1);

use Zend\ServiceManager\ServiceManager;

// Load configuration
$config = require __DIR__ . '/config.php';

$dependencies = $config['dependencies'];
$dependencies['services']['config']   = $config;
$dependencies['services']['doctrine'] = include __DIR__ . '/doctrine.config.php';

// Build container
return new ServiceManager($dependencies);
