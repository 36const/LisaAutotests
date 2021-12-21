<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить модель полей для создания категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'title' => NULL,
                    'difficulty' => NULL,
                    'supervisor_id' => NULL,
                    'status' => 1,
                    'boundRzCategories' => [
                    ],
                ],
                'initialValues' => [
                    'namesOfBoundCategories' => '',
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить модель поля для редактирования категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 2,
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'title' => 'Видео к товару',
                    'difficulty' => 3,
                    'supervisor_id' => 10,
                    'status' => 1,
                    'boundRzCategories' => [
                        0 => 2514857,
                        1 => 2514867,
                        2 => 2514872,
                        3 => 2560747,
                        4 => 2581722,
                        5 => 2514862,
                        6 => 2581727,
                        7 => 2581732,
                        8 => 2581737,
                        9 => 2581742,
                        10 => 2595767,
                        11 => 2666302,
                        12 => 4626584,
                    ],
                ],
                'initialValues' => [
                    'namesOfBoundCategories' => 'Файлы (<b>2514857</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Папки, регистраторы (<b>2581722</b>) | Папки пластиковые (<b>2514862</b>) | Папки-портфели, папки-боксы (<b>2581727</b>) | Папки-регистраторы (<b>2581732</b>) | Папки-планшеты (<b>2581737</b>) | Папки и файлы подвесные (<b>2581742</b>) | Папки с файлами (<b>2595767</b>) | Архивные короба и боксы (<b>2666302</b>) | Папки специальные (<b>4626584</b>)',
                ],
            ]
        ]
    ],

];
