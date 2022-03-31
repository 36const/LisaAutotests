<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Переход на страницу оплаты (с негативными кейсами модалки email)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Переход на страницу оплаты и совершение оплаты (с негативными кейсами оплаты)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    //если бы был доступ к тестовой БД, здесь находились бы массивы для сравнения)
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Переход на страницу оплаты и совершение оплаты через нижние ссылки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    //если бы был доступ к тестовой БД, здесь находились бы массивы для сравнения)
                ]
            ]
        ]
    ],

];
