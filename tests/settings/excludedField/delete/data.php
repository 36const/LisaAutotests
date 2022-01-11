<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление взаимоисключающих чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_excluded_fields280d3acd22e0ce237b19d4aea2c1d44b',
            ],
            'requestParameters' => [
                'field_id' => 10,
                'excluded_field_id' => 11,
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'excluded_fields' => [
                        [
                            'field_id' => 1,
                            'excluded_field_id' => 2
                        ],
                        [
                            'field_id' => 10,
                            'excluded_field_id' => 5
                        ],
                        [
                            'field_id' => 10,
                            'excluded_field_id' => 6
                        ],
                    ],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'excluded_fields',
                            'entity_id' => 0,
                            'old_value' => '{"field_id": 10, "excluded_field_id": 11}',
                            'new_value' => '[]',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 0,
                        ]
                    ],
                ],
            ]
        ]
    ],
];
