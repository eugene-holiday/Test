<?php
/**
 * Created by PhpStorm.
 * User: Eugene
 * Date: 05.10.14
 * Time: 17:05
 */

class Database {

    protected $config;

    private $connection;

    function __construct(array $config){
        $this->config = $config;
    }

    public function query($query){
        return $this->getConnection()->query($query);
    }

    private function getConnection(){
        if($this->connection === null){
            $driver = $this->config['connect'];
            $dsn = $this->config['connections'][$driver]['database'];
            try {
                $db = new PDO($dsn);
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        return $this->connection;
    }
} 