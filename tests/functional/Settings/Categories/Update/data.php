<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение всех полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '10',
                'Category[status]' => '0',
                'Category[supervisor_id]' => '6',
                'Category[title]' => 'Видео к товару - new',
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
                            "title" => "Видео к товару - new",
                            "difficulty" => 10,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение коэффициента сложности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '10',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Видео к товару',
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
                            "difficulty" => 10,
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
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение статуса с активного на заблокированный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '3',
                'Category[status]' => '0',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Видео к товару',
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
                            "status" => 0
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '3',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '6',
                'Category[title]' => 'Видео к товару',
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
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '3',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Видео к товару - new',
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
                            "title" => "Видео к товару - new",
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
                    ],
                ],
            ]
        ]
    ],
];
