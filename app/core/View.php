<?php
/**
 * Created by PhpStorm.
 * User: Eugene
 * Date: 04.10.14
 * Time: 20:58
 */

class View
{
    static public function render($view = '', $args = [])
    {
        foreach($args as $key => $arg)
            $$key = $arg;
        $content = __DIR__ . '/../views/' . $view . '.php';
        include __DIR__ . "/../views/layout/layout.php";
    }
}