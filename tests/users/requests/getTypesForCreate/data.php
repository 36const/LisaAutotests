<?php

use lisa\Constants;

$types = [
    0 => [
        'id' => 1,
        'name' => 'Добавление новых товаров',
    ],
    1 => [
        'id' => 2,
        'name' => 'Добавление/изменение информации в существующих товарах',
    ],
    2 => [
        'id' => 3,
        'name' => 'Перенос товаров',
    ],
    3 => [
        'id' => 4,
        'name' => 'Группировка товаров',
    ],
    4 => [
        'id' => 5,
        'name' => 'Заливка фото с фотостудии',
    ],
    5 => [
        'id' => 6,
        'name' => 'Проверка скрытых товаров',
    ],
    6 => [
        'id' => 7,
        'name' => 'Добавление нового портала/раздела фат-меню/категории товаров',
    ],
    7 => [
        'id' => 8,
        'name' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
    ],
    8 => [
        'id' => 9,
        'name' => 'Добавление параметров/значений',
    ],
    9 => [
        'id' => 10,
        'name' => 'Изменение существующих параметров/значений',
    ],
    10 => [
        'id' => 11,
        'name' => 'Проектирование структуры',
    ],
    11 => [
        'id' => 12,
        'name' => 'Добавление новых СЦ/изменение существующих СЦ',
    ],
    12 => [
        'id' => 13,
        'name' => 'Добавление/изменение видео',
    ],
    13 => [
        'id' => 14,
        'name' => 'Добавление/изменение размерной сетки',
    ],
    14 => [
        'id' => 15,
        'name' => 'Добавление/изменение тегов',
    ],
];

$distributionPaths = [
    1 => 4,
    2 => 4,
    3 => 4,
    4 => 1,
    5 => 3,
    6 => 2,
    7 => 1,
    8 => 1,
    9 => 1,
    10 => 1,
    11 => 1,
    12 => 3,
    13 => 1,
    14 => 1,
    15 => 1,
];

$directionItems = [
    1 => [
        0 => 0,
    ],
    3 => [
        0 => 1,
    ],
    2 => [
        0 => 2,
    ],
    4 => [
        0 => 1,
        1 => 2,
    ],
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Модалка создания заявки для СВ направления Маркетплейс',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'types' => $types,
                'distributionPaths' => $distributionPaths,
                'directionItems' => $directionItems,
                'checkedDefault' => 2,
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Модалка создания заявки для СВ направления Rozetka',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'responseBody' => [
                'types' => $types,
                'distributionPaths' => $distributionPaths,
                'directionItems' => $directionItems,
                'checkedDefault' => 1,
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Модалка создания заявки для СВ направления Определяется типом (Работа с группами)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'responseBody' => [
                'types' => $types,
                'distributionPaths' => $distributionPaths,
                'directionItems' => $directionItems,
                'checkedDefault' => 2,
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Модалка создания заявки для СВ направления Определяется типом (Работа с порталами, фат-меню, категориями)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'responseBody' => [
                'types' => $types,
                'distributionPaths' => $distributionPaths,
                'directionItems' => $directionItems,
                'checkedDefault' => 2,
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Модалка создания заявки для СВ направления Определяется типом (Работа с  проектированием структур + фильтрами)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'responseBody' => [
                'types' => $types,
                'distributionPaths' => $distributionPaths,
                'directionItems' => $directionItems,
                'checkedDefault' => 2,
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Модалка создания заявки для продакта (+ недоступны типы 1/2/6)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'responseBody' => [
                'types' => [
//                    [
//                        'id' => 1,
//                        'name' => 'Добавление новых товаров',
//                    ],
//                    [
//                        'id' => 2,
//                        'name' => 'Добавление/изменение информации в существующих товарах',
//                    ],
                    [
                        'id' => 3,
                        'name' => 'Перенос товаров',
                    ],
                    [
                        'id' => 4,
                        'name' => 'Группировка товаров',
                    ],
                    [
                        'id' => 5,
                        'name' => 'Заливка фото с фотостудии',
                    ],
//                    [
//                        'id' => 6,
//                        'name' => 'Проверка скрытых товаров',
//                    ],
                    [
                        'id' => 7,
                        'name' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    ],
                    [
                        'id' => 8,
                        'name' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                    ],
                    [
                        'id' => 9,
                        'name' => 'Добавление параметров/значений',
                    ],
                    [
                        'id' => 10,
                        'name' => 'Изменение существующих параметров/значений',
                    ],
                    [
                        'id' => 11,
                        'name' => 'Проектирование структуры',
                    ],
                    [
                        'id' => 12,
                        'name' => 'Добавление новых СЦ/изменение существующих СЦ',
                    ],
                    [
                        'id' => 13,
                        'name' => 'Добавление/изменение видео',
                    ],
                    [
                        'id' => 14,
                        'name' => 'Добавление/изменение размерной сетки',
                    ],
                    [
                        'id' => 15,
                        'name' => 'Добавление/изменение тегов',
                    ],
                ],
                'distributionPaths' => $distributionPaths,
                'directionItems' => $directionItems,
                'checkedDefault' => 2,
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Модалка создания заявки для администратора/руководителя СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'responseBody' => [
                'types' => $types,
                'distributionPaths' => $distributionPaths,
                'directionItems' => $directionItems,
                'checkedDefault' => 2,
            ],
        ]
    ],

];
