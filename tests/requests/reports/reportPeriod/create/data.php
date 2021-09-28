<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание отчётного периода',
            'positive' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_periods3e29485f645ec91800b2087082689a4b',
            ],
            'requestBody' => [
                'id' => NULL,
                'begin' => '2020-05-01T00:00:00.000Z',
                'end' => '2020-05-31T00:00:00.000Z',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            'responseBody' => [
                'model' => [
                    'begin' => '2020-05-01T00:00:00.000Z',
                    'end' => '2020-05-31T00:00:00.000Z',
                    'created_at >=' => date('Y-m-d'),
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'report_periods' => [
                        [
                            'id' => 1,
                            'begin' => '2020-01-01 00:00:00',
                            'end' => '2020-02-01 00:00:00',
                            'created_at' => '2020-01-01 00:00:00',
                            'updated_at' => null,
                        ],
                        [
                            'id' => 2,
                            'begin' => '2020-05-01 00:00:00',
                            'end' => '2020-05-31 00:00:00',
                            'created_at >=' => date('Y-m-d'),
                            'updated_at' => null
                        ]
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.report_periods.all' => [
                        '{"action":"create","entity":"report_periods","fields_data":{"id":2,"begin":"2020-05-01T00:00:00.000Z","end":"2020-05-31T00:00:00.000Z","created_at":"' . date('Y-m-d'),
                        '"updated_at":null},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания отчётного периода без дат',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'begin' => NULL,
                'end' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            'responseBody' => [
                'errors' => [
                    'begin' => [
                        0 => 'Необходимо заполнить «Начало отчетного периода».',
                    ],
                    'end' => [
                        0 => 'Необходимо заполнить «Конец отчетного периода».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'report_periods' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['report_periods'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания отчётного периода без начальной даты',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'begin' => NULL,
                'end' => '2021-06-01T00:00:00.000Z',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            'responseBody' => [
                'errors' => [
                    'begin' => [
                        0 => 'Необходимо заполнить «Начало отчетного периода».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'report_periods' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['report_periods'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность создания отчётного периода без конечной даты',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'begin' => '2021-06-01T00:00:00.000Z',
                'end' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            'responseBody' => [
                'errors' => [
                    'end' => [
                        0 => 'Необходимо заполнить «Конец отчетного периода».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'report_periods' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['report_periods'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

];
