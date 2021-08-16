<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'owox_id' => 0,
                'supervisor_id' => 10,
                'title' => 'Маркетплейс (общий)',
                'status' => NULL,
            ],
            'responseBody' => [
                'model' => [
                    'owox_id' => 0,
                    'supervisor_id' => 'Супервайзер Начальникович 2',
                    'title' => 'Маркетплейс (общий)',
                    'status' => NULL,
                ]
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
                            'owox_id' => 5,
                            'supervisor_id' => 6,
                            'title' => 'Rozetka',
                            'status' => null
                        ],
                        [
                            'owox_id' => 83,
                            'supervisor_id' => 6,
                            'title' => 'Euromart',
                            'status' => 6
                        ],
                        [
                            'owox_id' => 9423,
                            'supervisor_id' => 10,
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
                            'owox_id' => 0,
                            'supervisor_id' => 10,
                            'title' => 'Маркетплейс (общий)',
                            'status' => null
                        ]
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.markets_supervisors.all' => '{"action":"update","entity":"markets_supervisors","fields_data":{"owox_id":0,"supervisor_id":"10","title":"Маркетплейс (общий)","status":null},"changed_fields_names":["supervisor_id"]}'
                ],
            ],
        ]
    ],

];
