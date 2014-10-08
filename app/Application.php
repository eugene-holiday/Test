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
        $sql = 'select * from post';
        foreach($db->query($sql) as $row)
            print_r ($row);
        $router = new Router();
//        $router->add(array('/' => 'home@index'));
//        $router->add(array('contact' => 'home@contact'));
//        $router->add(array('controller@action' => 'controller@action'));

        $request = new Request();
        try{
            $router->route($request);
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }

    private function readConfig()
    {
        $ret = include(__DIR__ . '/../config/database.php');
        return $ret;
    }

} 