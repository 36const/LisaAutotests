<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Существующий тип 1 в статусе 1 при наличии типов 2, 3 и 6 в статусах 2, 1 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 1
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    'id' => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Существующий тип 2 в статусе 2 при наличии типов 1, 3 и 6 в статусах 1, 1 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 2
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    'id' => 2
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Существующий тип 3 в статусе 1 при наличии типов 1, 2 и 6 в статусах 1, 2 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 3
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    'id' => 3
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Существующий тип 6 в статусе 2 при наличии типов 1, 2 и 3 в статусах 1, 2 и 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 6
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    'id' => 4
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Отсутствующий тип 1 в статусе 1 при наличии типов 2, 3 и 6 в статусах 2, 1 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 1
            ],
            'responseCode' => 404,
            'responseBody' => [
                'name' => 'Not Found',
                'message' => '',
                'code' => 0,
                'status' => 404,
                'type' => "app\\infra\\exceptions\\NotFoundHttpException"
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Отсутствующий тип 2 в статусе 2 при наличии типов 1, 3 и 6 в статусах 1, 1 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 2
            ],
            'responseCode' => 404,
            'responseBody' => [
                'name' => 'Not Found',
                'message' => '',
                'code' => 0,
                'status' => 404,
                'type' => "app\\infra\\exceptions\\NotFoundHttpException"
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Отсутствующий тип 3 в статусе 3 при наличии типов 1, 2 и 6 в статусах 1, 2 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 3
            ],
            'responseCode' => 404,
            'responseBody' => [
                'name' => 'Not Found',
                'message' => '',
                'code' => 0,
                'status' => 404,
                'type' => "app\\infra\\exceptions\\NotFoundHttpException"
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Отсутствующий тип 6 в статусе 3 при наличии типов 1, 2 и 3 в статусах 1, 2 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 6
            ],
            'responseCode' => 404,
            'responseBody' => [
                'name' => 'Not Found',
                'message' => '',
                'code' => 0,
                'status' => 404,
                'type' => "app\\infra\\exceptions\\NotFoundHttpException"
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Несуществующий sync_source_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 99999,
                'type_id' => 6
            ],
            'responseCode' => 404,
            'responseBody' => [
                'name' => 'Not Found',
                'message' => '',
                'code' => 0,
                'status' => 404,
                'type' => "app\\infra\\exceptions\\NotFoundHttpException"
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Запрос без параметров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseCode' => 400,
            'responseBody' => [
                'name' => 'Bad Request',
                'message' => 'Отсутствуют обязательные параметры: sync_source_id, type_id',
                'code' => 0,
                'status' => 400,
                'type' => "yii\\web\\BadRequestHttpException"
            ],
            'db' => [
                'lisa_fixtures' => [
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\web\\BadRequestHttpException',
                            'message' => 'Отсутствуют обязательные параметры: sync_source_id, type_id',
                            'name' => 'Bad Request',
                            'code' => 0,
                            'user' => '4',
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Нечисловой sync_source_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 'q',
                'type_id' => 6
            ],
            'responseCode' => 400,
            'responseBody' => [
                'name' => 'Bad Request',
                'message' => "Неправильное значение параметра \"sync_source_id\".",
                'code' => 0,
                'status' => 400,
                'type' => "yii\\web\\BadRequestHttpException"
            ],
            'db' => [
                'lisa_fixtures' => [
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\web\\BadRequestHttpException',
                            'message' => 'Неправильное значение параметра "sync_source_id".',
                            'name' => 'Bad Request',
                            'code' => 0,
                            'user' => '4',
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Нечисловой type_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sync_source_id' => 1,
                'type_id' => 'q'
            ],
            'responseCode' => 400,
            'responseBody' => [
                'name' => 'Bad Request',
                'message' => "Неправильное значение параметра \"type_id\".",
                'code' => 0,
                'status' => 400,
                'type' => "yii\\web\\BadRequestHttpException"
            ],
            'db' => [
                'lisa_fixtures' => [
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\web\\BadRequestHttpException',
                            'message' => 'Неправильное значение параметра "type_id".',
                            'name' => 'Bad Request',
                            'code' => 0,
                            'user' => '4',
                        ]
                    ]
                ]
            ]
        ]
    ]
];