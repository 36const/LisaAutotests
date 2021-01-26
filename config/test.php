<?php

$config = [
    'id' => 'lisa-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'redis',
            'port' => 6379,
            'database' => '0',
            'password' => '960c3dac4fa81b4204779fd16ad7c954f95942876b9c4fb1a255667a9dbe389d'
        ]
    ]
];

return $config;
