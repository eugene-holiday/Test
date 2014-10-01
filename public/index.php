<?php

define('FRAMEWORK_START', microtime(true));
require __DIR__.'/../vendor/autoload.php';
require "Router.php";

$router = new Router();

$contr = new HomeController();
echo $contr->actionIndex();

print_r($router->getPathArray());
echo FRAMEWORK_START;