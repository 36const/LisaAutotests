<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание команды',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                "lisa_fixtures" => [
                    "teams" => [
                        [
                            "id" => 1,
                            "name" => "Маркетплейс 1",
                            "direction" => 2,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "name" => "Маркетплейс 2",
                            "direction" => 2,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "name" => "Маркетплейс 2-",
                            "direction" => 2,
                            "status" => 1
                        ],
                    ],
                ],
            ],
        ]
    ],
];
