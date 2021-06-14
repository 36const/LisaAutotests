<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание активной категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'Category[difficulty]' => '5',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Котикгория',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару",
                            "difficulty" => 3,
                            "supervisor_id" => 10,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                        [
                            "id" => 4,
                            "title" => "Котикгория",
                            "difficulty" => 5,
                            "supervisor_id" => 10,
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание заблокированной категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'Category[difficulty]' => '5',
                'Category[status]' => '0',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Котикгория',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару",
                            "difficulty" => 3,
                            "supervisor_id" => 10,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                        [
                            "id" => 4,
                            "title" => "Котикгория",
                            "difficulty" => 5,
                            "supervisor_id" => 10,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],
];
