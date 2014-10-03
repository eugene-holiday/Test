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
        $_controller = ucfirst($this->pathArray[1]).'Controller';
        $_action = 'action' . ucfirst($this->pathArray[2]);

        echo $_controller."/".$_action;
        $controller = new $_controller;
        echo $controller->$_action();


    }


} 