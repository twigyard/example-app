<?php

use TwigYard\Component\Application;
use Monolog\Logger;

$appRoot = __DIR__ . '/..';
$config = $appRoot . '/app/config/config.yml';
$cacheEnabled = true;
$showErrors = false;
$trackingEnabled = true;
$debugEmailEnabled = false;

require_once($appRoot . '/vendor/autoload.php');

$logOnLevel = Logger::CRITICAL;

$app = new Application(
    $appRoot,
    $cacheEnabled,
    $showErrors,
    $trackingEnabled,
    $logOnLevel,
    $debugEmailEnabled,
    (new \Symfony\Component\Yaml\Yaml)->parse(file_get_contents($config))
);

$app->run();
