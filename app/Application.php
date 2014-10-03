<?php
/**
 * Created by PhpStorm.
 * User: Eugene
 * Date: 02.10.14
 * Time: 19:27
 */

class Application
{
    function __construct()
    {

    }

    public function run()
    {
        $router = new Route();
        $router->runControllerAction();
    }

} 