<?php

/**
 * Created by PhpStorm.
 * User: voskresenskyev
 * Date: 01.10.14
 * Time: 16:28
 */
class Route
{

    private static $uri;

    private static $routes;

    /**
     * @return array
     */
    public function getRoutes()
    {
        return self::$uri;
    }

    public static function add($route)
    {
        self::$routes[] = $route;

    }

    private static function controllerFromPath($path)
    {
        $arr = explode('@', $path);
        return $arr;
    }


    public static function run()
    {
        self::$uri = explode('/', $_SERVER['REQUEST_URI']);
        if (empty(self::$uri[1]))
            self::$uri[1] = '/';

        self::add(array('/' => 'home@index'));
        self::add(array('contact' => 'home@contact'));
        self::add(array('controller@action' => 'controller@action'));

        foreach (self::$routes as $key => $route) {
            $path = array_keys($route);
            $stroute = self::controllerFromPath(array_values($route)[0]);
            if($stroute[0] == 'controller'){
                if($stroute[1] == 'action'){
                    return self::callController(array_slice(self::$uri, 1));
                }
            }
            if (self::$uri[1] == $path[0]) {
                return self::callController($stroute);
            }

        }
        return "404 error";

    }

    private static function callController($arr)
    {
        $_controller = self::getControllerName($arr[0]);

        if (class_exists($_controller)) {
            $controller = new $_controller;

            if (!empty($arr[1])) {
                $_action = $arr[1];

            } else $_action = 'action' . ucfirst($controller->getDefaultAction());
            return $controller->$_action();
        }
        return false;
    }

    private static function getControllerName($name)
    {
        return ucfirst($name . 'Controller');
    }


} 