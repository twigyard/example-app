<?php

use TwigYard\Component\Application;
use Monolog\Logger;

$appRoot = __DIR__ . '/..';
$localAccessAllowed = true;
$cacheEnabled = false;
$showErrors = true;
$trackingEnabled = false;
$debugEmailEnabled = true;

require_once($appRoot . '/vendor/autoload.php');

$logOnLevel = Logger::DEBUG;

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
