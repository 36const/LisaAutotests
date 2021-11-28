<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка и сброс фильтра автора',
            'case' => '1_',
            'column' => 'author_id',
            'value' => 'Менеджер Продактович 1',
            'amount' => 4,
            'symbol_1' => 'п',
            'symbol_2' => 'р',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case2' => [
        'setting' => [
            'description' => 'Установка и сброс фильтра супервайзера',
            'case' => '2_',
            'column' => 'supervisor_id',
            'value' => 'Супервайзер Категоркин 18',
            'amount' => 3,
            'symbol_1' => '1',
            'symbol_2' => '8',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case3' => [
        'setting' => [
            'description' => 'Установка и сброс фильтра менеджера',
            'case' => '3_',
            'column' => 'manager_id',
            'value' => 'Менеджер Контентович 1А',
            'amount' => 5,
            'symbol_1' => '1',
            'symbol_2' => 'А',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case4' => [
        'setting' => [
            'description' => 'Установка и сброс фильтра кросс-чек менеджера',
            'case' => '4_',
            'column' => 'cross_check_manager_id',
            'value' => 'Менеджер Контентович 1Б',
            'amount' => 1,
            'symbol_1' => '1',
            'symbol_2' => 'Б',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case5' => [
        'setting' => [
            'description' => 'Установка и сброс фильтра категории',
            'case' => '5_',
            'column' => 'category_id',
            'value' => 'Видео к товару',
            'amount' => 4,
            'symbol_1' => 'в',
            'symbol_2' => 'и',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case6' => [
        'setting' => [
            'description' => 'Установка и сброс фильтра категории Rozetka',
            'case' => '6_',
            'column' => 'rz_category_id',
            'value' => 'Архивные короба и боксы (2666302)',
            'amount' => 1,
            'symbol_1' => 'а',
            'symbol_2' => 'р',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case7' => [
        'setting' => [
            'description' => 'Установка и сброс фильтра продавца',
            'case' => '7_',
            'column' => 'seller_id',
            'value' => 'Маркетплейс (общий)',
            'amount' => 7,
            'symbol_1' => 'м',
            'symbol_2' => 'а',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

];
