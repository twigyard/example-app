<?php

use Monolog\Logger;
use TwigYard\Component\Application;
use TwigYard\Component\ApplicationConfig;
use Symfony\Component\Yaml\Yaml;

$appRoot = __DIR__ . '/..';
$config = $appRoot . '/app/config/config.yml';
$cacheEnabled = false;
$showErrors = true;
$trackingEnabled = false;
$debugEmailEnabled = true;

require_once($appRoot . '/vendor/autoload.php');

$logOnLevel = Logger::DEBUG;

$app = new Application(
    $appRoot,
    $cacheEnabled,
    $showErrors,
    $trackingEnabled,
    $logOnLevel,
    $debugEmailEnabled,
    new ApplicationConfig((new Yaml())->parse(file_get_contents($config)))
);

$app->run();
