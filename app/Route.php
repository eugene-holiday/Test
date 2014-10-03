<?php

/**
 * Created by PhpStorm.
 * User: voskresenskyev
 * Date: 01.10.14
 * Time: 16:28
 */
class Route
{
    private $path;

    private $pathArray;

    /**
     * @return array
     */
    public function getPathArray()
    {
        return $this->pathArray;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    function __construct()
    {
        //echo "router __construct " . $_SERVER['REQUEST_URI'];
        $this->path = $_SERVER['REQUEST_URI'];
        $this->pathArray = explode('/', $this->path);
    }

    public function runControllerAction()
    {
        if ($this->pathArray[1]) {
            $_controller = ucfirst($this->pathArray[1]) . 'Controller';
            $controller = new $_controller;

            if (isset($this->pathArray[2])){
                $_action = 'action' . ucfirst($this->pathArray[2]);

            }
            else $_action = 'action' . ucfirst($controller->getDefaultAction());
            return $controller->$_action();
        }
        else return "404 error";

    }


} 