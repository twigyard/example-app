<?php

use Monolog\Logger;
use TwigYard\Component\Application;
use TwigYard\Component\ApplicationConfig;
use Symfony\Component\Yaml\Yaml;

$appRoot = __DIR__ . '/..';
$config = $appRoot . '/app/config/config.yml';
$cacheEnabled = true;
$showErrors = false;
$trackingEnabled = true;

require_once($appRoot . '/vendor/autoload.php');

$logOnLevel = Logger::CRITICAL;

$app = new Application(
    $appRoot,
    $cacheEnabled,
    $showErrors,
    $trackingEnabled,
    $logOnLevel,
    new ApplicationConfig((new Yaml())->parse(file_get_contents($config)))
);

$app->run();
