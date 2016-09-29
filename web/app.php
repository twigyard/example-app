<?php

use TwigYard\Component\Application;
use Monolog\Logger;

$appRoot = __DIR__ . '/..';
$localAccessAllowed = false;
$cacheEnabled = true;
$showErrors = false;
$trackingEnabled = true;
$debugEmailEnabled = false;

require_once($appRoot . '/vendor/autoload.php');

$logOnLevel = Logger::CRITICAL;

$app = new Application(
    $appRoot,
    $localAccessAllowed,
    $cacheEnabled,
    $showErrors,
    $trackingEnabled,
    $logOnLevel,
    $debugEmailEnabled
);

$app->run();
