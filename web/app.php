<?php

use Monolog\Logger;
use TwigYard\Component\Application;
use TwigYard\Component\ApplicationConfig;
use Symfony\Component\Yaml\Yaml;

$appRoot = __DIR__ . '/..';
$config = $appRoot . '/app/config/config.yml';

require_once($appRoot . '/vendor/autoload.php');

(new Application($appRoot, new ApplicationConfig((new Yaml())->parse(file_get_contents($config)))))->run();
