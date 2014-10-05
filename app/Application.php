<?php
/**
 * Created by PhpStorm.
 * User: Eugene
 * Date: 02.10.14
 * Time: 19:27
 */

class Application
{
    private $dbConfig;

    function __construct()
    {
        $this->dbConfig = $this->readConfig();
    }

    public function run()
    {
        //print_r($this->dbConfig);
        $db = new Database($this->dbConfig);
        Route::run();
    }

    private function readConfig(){
        $ret = include(__DIR__ . '/../config/database.php');
        return $ret;
    }

} 