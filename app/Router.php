<?php

/**
 * Created by PhpStorm.
 * User: voskresenskyev
 * Date: 01.10.14
 * Time: 16:28
 */
class Router
{

    private static $_routes;

    public static function add($path, $route)
    {
        self::$_routes[] = $route;
    }

    public static function route(Request $request)
    {
        $controller = self::getControllerName($request->getController());
        $action = $request->getAction();
        $params = $request->getArgs();
        $safe = self::getSafe(__DIR__.'/controllers');
        if(!in_array($controller, $safe)){
            throw new Exception('404 '. $controller . ' not found');
        }
        $controller = new $controller;
        call_user_func_array(array($controller, $action), $params);
    }

    private static function getControllerName($name)
    {
        return ucfirst($name . 'Controller');
    }

    private static function getSafe($directory){
        $safe = array();
        foreach(glob($directory.'/*.*') as $file) {
            $safe[] = basename($file, ".php");
        }
        return $safe;
    }


} 