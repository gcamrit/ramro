<?php

use App\Providers\AppServiceProvider;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Ramro\Application;

// @TODO create a config class which contains all the service provider which needs to be registered.
$app->getContainer()->addServiceProvider(AppServiceProvider::class);

$app->run();
