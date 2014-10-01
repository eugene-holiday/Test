<?php

/**
 * Created by PhpStorm.
 * User: voskresenskyev
 * Date: 01.10.14
 * Time: 16:28
 */
class Router
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

    function _construct()
    {
        $this->path = $_SERVER['REQUEST_URI'];
        $this->pathArray = explode('/',$this->path);
    }


} 