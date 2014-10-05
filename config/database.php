<?php

return array(

    'connect'=>'sqlite',

    'connections' => array(
        'sqlite' => array(
            'database' => __DIR__.'/../database/database.sqlite',
            'prefix'   => '',
        )
    )
);
