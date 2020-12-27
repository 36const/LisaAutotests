<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание значения поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 21,
                            "value" => "Предоставлены продактом",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "field_id" => 21,
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска.",
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "field_id" => 21,
                            "value" => "Предоставлены продактом частично. С дополнительным поиском.",
                            "status" => 1
                        ],
                        [
                            "id" => 4,
                            "field_id" => 21,
                            "value" => "Не предоставлены продактом. Выполнен поиск.",
                            "status" => 1
                        ],
                        [
                            "id" => 5,
                            "field_id" => 21,
                            "value" => "Характеристики добавлены с обновлением фото/описания",
                            "status" => 0
                        ],
                        [
                            "id" => 6,
                            "field_id" => 22,
                            "value" => "Предоставлены продактом",
                            "status" => 1
                        ],
                        [
                            "id" => 7,
                            "field_id" => 21,
                            "value" => "Предоставлены продактом",
                            "status" => 1
                        ],
                    ],
                ],
            ],
        ]
    ],
];
