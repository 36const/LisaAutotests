<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание активной команды направления "Управление отделом"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '1',
                'Team[name]' => 'Управление отделом',
                'Team[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Управление отделом",
                            "direction" => 1,
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание заблокированниой команды направления Маркетплейс',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '2',
                'Team[name]' => 'Заявки Маркетплейс',
                'Team[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Заявки Маркетплейс",
                            "direction" => 2,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание активной команды направления Rozetka',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '3',
                'Team[name]' => 'Заявки Rozetka',
                'Team[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Заявки Rozetka",
                            "direction" => 3,
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание заблокированниой команды направления "Работа с группами"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '4',
                'Team[name]' => 'Работа с группами',
                'Team[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Работа с группами",
                            "direction" => 4,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание активной команды направления "Работа с проектированием структур + фильтрами"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '5',
                'Team[name]' => 'Работа с проектированием структур + фильтрами',
                'Team[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Работа с проектированием структур + фильтрами",
                            "direction" => 5,
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание заблокированниой команды направления "Работа с порталами, фат-меню, категориями"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '6',
                'Team[name]' => 'Работа с порталами, фат-меню, категориями',
                'Team[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Работа с порталами, фат-меню, категориями",
                            "direction" => 6,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],
];
