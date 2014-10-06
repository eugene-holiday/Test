<?php

/**
 * Created by PhpStorm.
 * User: voskresenskyev
 * Date: 06.10.14
 * Time: 12:15
 */
class Request
{
    private $_controller;

    private $_action;

    private $_args;

    public function __construct()
    {
        $route = explode('?', $_SERVER['REQUEST_URI']);
        $route = explode('/', $route[0]);
        array_shift($route);
        $this->_controller = ($temp = array_shift($route)) ? $temp : 'home';
        $this->_action = ($temp = array_shift($route)) ? $temp : 'index';
        //$this->_args['args'] = (isset($route[0]))? $route: array();
        //$this->_args['get'] = $_GET;
        $temp = (isset($route[0]))? $route: array();
        $temp['get'] = $_GET;
        $this->_args = $temp;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->_controller;
    }


    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->_action;
    }

    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->_args;
    }


} 