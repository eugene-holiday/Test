<?php
/**
 * Created by PhpStorm.
 * User: voskresenskyev
 * Date: 01.10.14
 * Time: 16:42
 */

abstract class Controller {

    private $layout = "/layout";

    private $action = "index";

    /**
     * @return string
     */
    public function getDefaultAction()
    {
        return $this->action;
    }
}