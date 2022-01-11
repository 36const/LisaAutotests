<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Групповое изменение супервайзера у нескольких магазинов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'userId' => 23,
                'items' => [
                    0 => 83,
                    1 => 9423,
                ],
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'redisValueAfter' => [
                'SellerDistribution' => [
                    'positions' => '["supervisor"]',
                    'teamDirections' => '[2]',
                    'includedUsers' => '[]',
                    'excludedUsers' => '[]',
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => [
                        [
                            'owox_id' => -2,
                            'supervisor_id' => 5,
                            'title' => 'Все продавцы',
                            'status' => null
                        ],
                        [
                            'owox_id' => 0,
                            'supervisor_id' => 5,
                            'title' => 'Маркетплейс (общий)',
                            'status' => null
                        ],
                        [
                            'owox_id' => 5,
                            'supervisor_id' => 6,
                            'title' => 'Rozetka',
                            'status' => null
                        ],
                        [
                            'owox_id' => 83,
                            'supervisor_id' => 23,
                            'title' => 'Euromart',
                            'status' => 6
                        ],
                        [
                            'owox_id' => 9423,
                            'supervisor_id' => 23,
                            'title' => 'anytech',
                            'status' => 6
                        ],
                        [
                            'owox_id' => 67757,
                            'supervisor_id' => 10,
                            'title' => 'iTook',
                            'status' => 3
                        ],
                        [
                            'owox_id' => 72141,
                            'supervisor_id' => 10,
                            'title' => 'Rozetka.md',
                            'status' => 3
                        ],
                        [
                            'owox_id' => 128603,
                            'supervisor_id' => 10,
                            'title' => 'RozetkaEU',
                            'status' => 3
                        ],
                        [
                            'owox_id' => 124276,
                            'supervisor_id' => 10,
                            'title' => 'Rozetka.uz',
                            'status' => 3
                        ],
                        [
                            'owox_id' => 121212,
                            'supervisor_id' => 10,
                            'title' => 'Mogo zin-chik',
                            'status' => 6
                        ],
                    ],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 83,
                            'old_value' => '{"supervisor_id": 6}',
                            'new_value' => '{"supervisor_id": 23}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                        [
                            'id' => 2,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 9423,
                            'old_value' => '{"supervisor_id": 10}',
                            'new_value' => '{"supervisor_id": 23}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    '{"action":"update","entity":"markets_supervisors","fields_data":{"owox_id":83,"supervisor_id":"23","title":"Euromart","status":6},"changed_fields_names":["supervisor_id"]}',
                    '{"action":"update","entity":"markets_supervisors","fields_data":{"owox_id":9423,"supervisor_id":"23","title":"anytech","status":6},"changed_fields_names":["supervisor_id"]}',
                ],
            ],
        ],
    ],

];
