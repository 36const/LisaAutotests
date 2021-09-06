<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => include __DIR__ . '/response/case1.php',
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список пользователей с сортировкой по id и фильтром по имени',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-id',
                'filter[name]' => 'суп'
            ],
            'responseBody' => include __DIR__ . '/response/case2.php',
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список пользователей с сортировкой по роли и фильтрами по логину и команде',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[login]' => '_1',
                'filter[team]' => '1',
                'sort' => 'position',
            ],
            'responseBody' => include __DIR__ . '/response/case3.php',
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить список пользователей с сортировкой по дрфо и фильтрами по дате создания и руководителю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[create_ts]' => '2020-04-13 00:00:00to2020-04-19 23:59:59',
                'filter[parent_id]' => '4',
                'sort' => 'drfo',
            ],
            'responseBody' => include __DIR__ . '/response/case4.php',
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Получить список пользователей с сортировкой по дате последнего обновления и фильтрами по статусу и дрфо',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => '1',
                'sort' => '-change_date',
                'filter[drfo]' => '01',
            ],
            'responseBody' => include __DIR__ . '/response/case5.php',
        ]
    ],

];
