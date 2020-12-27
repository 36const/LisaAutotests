<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                "lisa_fixtures" => [
                    "priorities" => [
                        [
                            "id" => 1,
                            "name" => "Информация необходима для склада",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "name" => "Товар-новинка/эксклюзив (трафикообразующий)",
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "name" => "Исправление критичной ошибки",
                            "status" => 0
                        ],
                        [
                            "id" => 4,
                            "name" => "Исправление критичной ошибки-",
                            "status" => 1
                        ]
                    ],
                ],
            ],
        ]
    ],
];
