<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Переход на страницу оплаты',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Переход на страницу оплаты и совершение оплаты',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    //если бы был доступ к тестовой БД, здесь находились бы массивы для сравнения)
                ]
            ]
        ]
    ],

];
