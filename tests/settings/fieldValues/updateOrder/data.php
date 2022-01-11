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
                'fieldId' => 21,
                'items' => [
                    0 => [
                        'order' => 0,
                        'valueId' => 4,
                    ],
                    1 => [
                        'order' => 1,
                        'valueId' => 2,
                    ],
                    2 => [
                        'order' => 2,
                        'valueId' => 3,
                    ],
                    3 => [
                        'order' => 3,
                        'valueId' => 1,
                    ],
                    4 => [
                        'order' => 4,
                        'valueId' => 5,
                    ],
                ],
            ],
            'responseBody' => [
                'status' => 200
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => [
                        [
                            'id' => 1,
                            'field_id' => 21,
                            'value' => 'Предоставлены продактом',
                            'status' => 1,
                            'order' => 3
                        ],
                        [
                            'id' => 2,
                            'field_id' => 21,
                            'value' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                            'status' => 1,
                            'order' => 1
                        ],
                        [
                            'id' => 3,
                            'field_id' => 21,
                            'value' => 'Предоставлены продактом частично. С дополнительным поиском.',
                            'status' => 1,
                            'order' => 2
                        ],
                        [
                            'id' => 4,
                            'field_id' => 21,
                            'value' => 'Не предоставлены продактом. Выполнен поиск.',
                            'status' => 1,
                            'order' => 0
                        ],
                        [
                            'id' => 5,
                            'field_id' => 21,
                            'value' => 'Характеристики добавлены с обновлением фото/описания',
                            'status' => 0,
                            'order' => 4
                        ],
                        [
                            'id' => 6,
                            'field_id' => 22,
                            'value' => 'Предоставлены продактом',
                            'status' => 1,
                            'order' => 0
                        ],
                        [
                            'id' => 7,
                            'field_id' => 22,
                            'value' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                            'status' => 1,
                            'order' => 0
                        ],
                        [
                            'id' => 8,
                            'field_id' => 22,
                            'value' => 'Предоставлены продактом частично. С дополнительным поиском.',
                            'status' => 1,
                            'order' => 0
                        ],
                        [
                            'id' => 9,
                            'field_id' => 22,
                            'value' => 'Не предоставлены продактом. Выполнен поиск.',
                            'status' => 1,
                            'order' => 0
                        ],
                        [
                            'id' => 10,
                            'field_id' => 22,
                            'value' => 'Фото предоставлены фотостудией',
                            'status' => 0,
                            'order' => 0
                        ],
                    ],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'field_values',
                            'entity_id' => 2,
                            'old_value' => '{"order": 0}',
                            'new_value' => '{"order": 1}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                        [
                            'id' => 2,
                            'entity' => 'field_values',
                            'entity_id' => 3,
                            'old_value' => '{"order": 0}',
                            'new_value' => '{"order": 2}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                        [
                            'id' => 3,
                            'entity' => 'field_values',
                            'entity_id' => 1,
                            'old_value' => '{"order": 0}',
                            'new_value' => '{"order": 3}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                        [
                            'id' => 4,
                            'entity' => 'field_values',
                            'entity_id' => 5,
                            'old_value' => '{"order": 0}',
                            'new_value' => '{"order": 4}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    '{"action":"update","entity":"field_values","fields_data":{"id":2,"field_id":21,"value":"Предоставлены продактом частично. Без дополнительного поиска.","status":"1","order":"1"},"changed_fields_names":["order"]}',
                    '{"action":"update","entity":"field_values","fields_data":{"id":3,"field_id":21,"value":"Предоставлены продактом частично. С дополнительным поиском.","status":"1","order":"2"},"changed_fields_names":["order"]}',
                    '{"action":"update","entity":"field_values","fields_data":{"id":1,"field_id":21,"value":"Предоставлены продактом","status":"1","order":"3"},"changed_fields_names":["order"]}',
                    '{"action":"update","entity":"field_values","fields_data":{"id":5,"field_id":21,"value":"Характеристики добавлены с обновлением фото/описания","status":0,"order":"4"},"changed_fields_names":["order"]}',
                ],
            ],
        ]
    ],

];
