<?php

$config = [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,

        'logger' => [
            'name' => 'slim-app',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/../logs/app.log',
        ],

        'db' =>[
        	'host' => 'localhost',
        	'user' => 'root',
        	'pass' => '',
        	'dbname' => 'rumah'
        ],
    ],
];


?>