<?php

use TwigYard\Component\Application;
use Monolog\Logger;

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
    (new \Symfony\Component\Yaml\Yaml)->parse(file_get_contents($config))
);

$app->run();
