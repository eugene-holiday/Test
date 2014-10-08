<?php

/**
 * Created by PhpStorm.
 * User: Eugene
 * Date: 05.10.14
 * Time: 17:05
 */
class Database
{

    const PDO_FETCH = PDO::FETCH_ASSOC;

    protected $config;

    private $connection;

    function __construct(array $config)
    {
        $this->config = $config;
    }

    public function query($query)
    {
        return $this->getConnection()->query($query, self::PDO_FETCH);
    }

    private function getConnection()
    {
        if ($this->connection == null) {
            $driver = $this->config['connect'];
            $dsn = $driver . ':' . $this->config['connections'][$driver]['database'];
            try {
                $db = new PDO($dsn);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection = $db;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $this->connection;
    }
} 