<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение отчётного периода',
            'positive' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_periods3e29485f645ec91800b2087082689a4b',
            ],
            'requestBody' => [
                'id' => 4,
                'begin' => '2021-04-02T21:00:00.000Z',
                'end' => '2021-04-28T21:00:00.000Z',
                'created_at' => '2021-03-01 00:00:00',
                'updated_at' => '2021-09-01 19:01:01',
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'begin' => '2021-04-02T21:00:00.000Z',
                    'end' => '2021-04-28T21:00:00.000Z',
                    'created_at' => '2021-03-01 00:00:00',
                    'updated_at >=' => date('Y-m-d'),
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'report_periods' => [
                        [
                            'id' => 1,
                            'begin' => '2021-01-01 00:00:00',
                            'end' => '2021-01-31 00:00:00',
                            'created_at' => '2021-01-01 00:00:00',
                            'updated_at' => null,
                        ],
                        [
                            'id' => 2,
                            'begin' => '2021-02-01 00:00:00',
                            'end' => '2021-02-28 00:00:00',
                            'created_at' => '2021-01-01 00:00:00',
                            'updated_at' => null,
                        ],
                        [
                            'id' => 3,
                            'begin' => '2021-03-01 00:00:00',
                            'end' => '2021-03-31 00:00:00',
                            'created_at' => '2021-02-01 00:00:00',
                            'updated_at' => '2021-07-01 17:01:01',
                        ],
                        [
                            'id' => 4,
                            'begin' => '2021-04-02 21:00:00',
                            'end' => '2021-04-28 21:00:00',
                            'created_at' => '2021-03-01 00:00:00',
                            'updated_at >=' => date('Y-m-d'),
                        ],
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.report_periods.all' => [
                        '{"action":"update","entity":"report_periods","fields_data":{"id":4,"begin":"2021-04-02T21:00:00.000Z","end":"2021-04-28T21:00:00.000Z","created_at":"2021-03-01 00:00:00","updated_at":',
                        '},"changed_fields_names":["begin","end","updated_at"]}',
                    ]
                ],
            ],
        ]
    ],
];
