<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность редактирования отчётных периодов КМ (статусы 1,2)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 1,
                    1 => 2,
                    2 => 3,
                    3 => 8,
                    4 => 9,
                ],
                'data' => [
                    'report_period_id' => 1,
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Отчетный период КМ в статусе Готова для распределения. Номер заявки 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Отчетный период КМ в статусе Готова для распределения. Номер заявки 1',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность редактирования отчётных периодов СВ (статусы 5,6)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 3,
                    1 => 4,
                ],
                'data' => [
                    1 => '1',
                    'sv_report_periods' => [
                        0 => 1,
                    ],
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Отчетные периоды СВ в статусе Ожидает взятия в работу. Номер заявки 3',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Отчетные периоды СВ в статусе Ожидает взятия в работу. Номер заявки 3',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность редактирования визы (статусы 7,8,11)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 5,
                    1 => 6,
                    2 => 7,
                ],
                'data' => [
                    3 => '0',
                    30 => 47,
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Виза супервайзера в статусе Закрыта. Номер заявки 7',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Виза супервайзера в статусе Закрыта. Номер заявки 7',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность редактирования Пакетной загрузки (статусы 2,3,4)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 1,
                    1 => 2,
                    2 => 8,
                ],
                'data' => [
                    2 => '1',
                    3 => NULL,
                    30 => 41,
                    'supervisor_comment' => 'Пакетное редактирование',
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Пакетная загрузка в статусе Отменена. Номер заявки 8',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Пакетная загрузка в статусе Отменена. Номер заявки 8',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность редактирования Ручной загрузки (статусы 3,5,11)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 2,
                    1 => 3,
                    2 => 7,
                ],
                'data' => [
                    1 => '1',
                    160 => '0',
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Ручная загрузка в статусе Закрыта. Номер заявки 7',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Ручная загрузка в статусе Закрыта. Номер заявки 7',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность редактирования Вид структуры (статусы 5,7,11)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 3,
                    1 => 5,
                    2 => 7,
                ],
                'data' => [
                    29 => 32,
                    30 => 41,
                    32 => 254,
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Вид структуры в статусе Закрыта. Номер заявки 7',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Вид структуры в статусе Закрыта. Номер заявки 7',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Невозможность редактирования Сложность структуры (статусы 5,7,11)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 3,
                    1 => 5,
                    2 => 7,
                ],
                'data' => [
                    30 => 40,
                    160 => '1',
                    'supervisor_comment' => 'http://splitter.docker/lisa/#/request/list/all',
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Сложность структуры в статусе Закрыта. Номер заявки 7',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Сложность структуры в статусе Закрыта. Номер заявки 7',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Невозможность редактирования Сложность группировки в заявках (статусы 5,7,11)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 3,
                    1 => 5,
                    2 => 7,
                ],
                'data' => [
                    32 => 253,
                    'supervisor_comment' => 'Пакетное редактирование',
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Сложность группировки в заявках в статусе Закрыта. Номер заявки 7',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Сложность группировки в заявках в статусе Закрыта. Номер заявки 7',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Невозможность редактирования Уровень сложности в заявках (статусы 2,6,4)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ids' => [
                    0 => 1,
                    1 => 4,
                    2 => 8,
                ],
                'data' => [
                    20 => 64,
                    30 => 40,
                    160 => '1',
                ],
            ],
            'responseBody' => [
                'errors' => 'У вас нет прав редактировать поле Уровень сложности задачи в статусе Отменена. Номер заявки 8',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => 'У вас нет прав редактировать поле Уровень сложности задачи в статусе Отменена. Номер заявки 8',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

];
