<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание взаимоисключающих чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ExcludedField[excluded_field_id]' => '2',
                'ExcludedField[field_id]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "excluded_fields" => [
                        [
                            "field_id" => 1,
                            "excluded_field_id" => 2
                        ],
                    ],
                ],
            ]
        ]
    ],

];
