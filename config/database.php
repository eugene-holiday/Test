<?php

return array(

    'connect'=>'sqlite',

    'connections' => array(
        'sqlite' => array(
            'database' => '../app/database/database.sqlite',
            'prefix'   => '',
        ),

        'mysql' => array(
            'host' => 'localhost',
            'user' => 'mysql',
            'password' => 'mysql',
            'dbname' => 'framework',
            'prefix'   => '',
        )
    )
);
