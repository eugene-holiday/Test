<?php

define('FRAMEWORK_START', microtime(true));

ini_set("display_errors",1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';


$app = new Application();
$app->run();

//echo FRAMEWORK_START;