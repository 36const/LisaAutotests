<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    'categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'categories' => [
                        [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 10,
                            'status' => 1
                        ],
                        [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 4,
                            'title' => 'Авиабилеты-',
                            'difficulty' => 1.3,
                            'supervisor_id' => 4,
                            'status' => 1
                        ]
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ]
        ]
    ],
];
