<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение порядка показа значений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'sort' => [4, 2, 3, 1, 5]
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 21,
                            "value" => "Предоставлены продактом",
                            "status" => 1,
                            "order" => 3
                        ],
                        [
                            "id" => 2,
                            "field_id" => 21,
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска.",
                            "status" => 1,
                            "order" => 1
                        ],
                        [
                            "id" => 3,
                            "field_id" => 21,
                            "value" => "Предоставлены продактом частично. С дополнительным поиском.",
                            "status" => 1,
                            "order" => 2
                        ],
                        [
                            "id" => 4,
                            "field_id" => 21,
                            "value" => "Не предоставлены продактом. Выполнен поиск.",
                            "status" => 1,
                            "order" => 0
                        ],
                        [
                            "id" => 5,
                            "field_id" => 21,
                            "value" => "Характеристики добавлены с обновлением фото/описания",
                            "status" => 0,
                            "order" => 4
                        ],
                        [
                            "id" => 6,
                            "field_id" => 22,
                            "value" => "Предоставлены продактом",
                            "status" => 1,
                            "order" => 0
                        ],
                        [
                            "id" => 7,
                            "field_id" => 22,
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска.",
                            "status" => 1,
                            "order" => 0
                        ],
                        [
                            "id" => 8,
                            "field_id" => 22,
                            "value" => "Предоставлены продактом частично. С дополнительным поиском.",
                            "status" => 1,
                            "order" => 0
                        ],
                        [
                            "id" => 9,
                            "field_id" => 22,
                            "value" => "Не предоставлены продактом. Выполнен поиск.",
                            "status" => 1,
                            "order" => 0
                        ],
                        [
                            "id" => 10,
                            "field_id" => 22,
                            "value" => "Фото предоставлены фотостудией",
                            "status" => 0,
                            "order" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

];
