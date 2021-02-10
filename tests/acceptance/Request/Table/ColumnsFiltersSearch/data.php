<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра создателя',
            'column' => 'author_id',
            'value' => 'Константин Куцан',
            'amount' => 23,
            'symbol_1' => 'К',
            'symbol_2' => 'у',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case2' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра супервайзера',
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
            'description' => 'Установка и изменение фильтра менеджера',
            'column' => 'manager_id',
            'value' => 'Менеджер Контентович 1А',
            'amount' => 5,
            'symbol_1' => 'м',
            'symbol_2' => 'е',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case4' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра кросс-чек менеджера',
            'column' => 'cross_check_manager_id',
            'value' => 'Менеджер Контентович 1Б',
            'amount' => 1,
            'symbol_1' => 'р',
            'symbol_2' => ' ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],

    'case5' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра категории',
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
            'description' => 'Установка и изменение фильтра продавца',
            'column' => 'seller_id',
            'value' => 'anytech',
            'amount' => 3,
            'symbol_1' => 'a',
            'symbol_2' => 'n',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],
];
