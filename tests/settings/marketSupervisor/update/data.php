<?php

use Codeception\Module\TestHelper;

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
                    'markets_supervisors' => array_replace_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                        [
                            1 => [
                                'owox_id' => 0,
                                'supervisor_id' => 10,
                                'title' => 'Маркетплейс (общий)',
                                'status' => null
                            ],
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 0,
                            'old_value' => '{"supervisor_id": 5}',
                            'new_value' => '{"supervisor_id": "10"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
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
