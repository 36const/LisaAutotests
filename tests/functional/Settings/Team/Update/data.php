<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение статуса с Активный на Заблокированный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '1',
                'Team[name]' => 'Управление отделом',
                'Team[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Управление отделом",
                            "direction" => 1,
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "name" => "Заявки Маркетплейс",
                            "direction" => 2,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение статуса с Заблокированный на Активный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
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
                        [
                            "id" => 2,
                            "name" => "Заявки Маркетплейс",
                            "direction" => 2,
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '3',
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
                            "direction" => 3,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "name" => "Заявки Маркетплейс",
                            "direction" => 2,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '1',
                'Team[name]' => 'Управление отделом new',
                'Team[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Управление отделом new",
                            "direction" => 1,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "name" => "Заявки Маркетплейс",
                            "direction" => 2,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение направления, названия и статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Team[direction]' => '4',
                'Team[name]' => 'Управление отделом new',
                'Team[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Управление отделом new",
                            "direction" => 4,
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "name" => "Заявки Маркетплейс",
                            "direction" => 2,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

];
