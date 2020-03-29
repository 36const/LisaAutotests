<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Существующий тип 1 в статусе 1 при наличии типов 2, 3 и 6 в статусах 2, 3 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 1
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 2
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Существующий тип 2 в статусе 2 при наличии типов 1, 3 и 6 в статусах 1, 3 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 2
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 3
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Существующий тип 3 в статусе 3 при наличии типов 1, 2 и 6 в статусах 1, 2 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 3
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 4
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Существующий тип 6 в статусе 3 при наличии типов 1, 2 и 3 в статусах 1, 2 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 6
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 5
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Отсутствующий тип 1 в статусе 1 при наличии типов 2, 3 и 6 в статусах 2, 3 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 1
            ],
            "responseCode" => 404,
            "responseBody" => [
                "name" => "Not Found",
                "message" => "",
                "code" => 0,
                "status" => 404,
                "type" => "yii\\web\\NotFoundHttpException"
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Отсутствующий тип 2 в статусе 2 при наличии типов 1, 3 и 6 в статусах 1, 3 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 2
            ],
            "responseCode" => 404,
            "responseBody" => [
                "name" => "Not Found",
                "message" => "",
                "code" => 0,
                "status" => 404,
                "type" => "yii\\web\\NotFoundHttpException"
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Отсутствующий тип 3 в статусе 3 при наличии типов 1, 2 и 6 в статусах 1, 2 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 3
            ],
            "responseCode" => 404,
            "responseBody" => [
                "name" => "Not Found",
                "message" => "",
                "code" => 0,
                "status" => 404,
                "type" => "yii\\web\\NotFoundHttpException"
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Отсутствующий тип 6 в статусе 3 при наличии типов 1, 2 и 3 в статусах 1, 2 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => 6
            ],
            "responseCode" => 404,
            "responseBody" => [
                "name" => "Not Found",
                "message" => "",
                "code" => 0,
                "status" => 404,
                "type" => "yii\\web\\NotFoundHttpException"
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Несуществующий sync_source_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 99999,
                "type_id" => 6
            ],
            "responseCode" => 404,
            "responseBody" => [
                "name" => "Not Found",
                "message" => "",
                "code" => 0,
                "status" => 404,
                "type" => "yii\\web\\NotFoundHttpException"
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Запрос без параметров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [],
            "responseCode" => 400,
            "responseBody" => [
                "name" => "Bad Request",
                "message" => "Отсутствуют обязательные параметры =>  sync_source_id, type_id",
                "code" => 0,
                "status" => 400,
                "type" => "yii\\web\\BadRequestHttpException"
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Нечисловой sync_source_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => "q",
                "type_id" => 6
            ],
            "responseCode" => 400,
            "responseBody" => [
                "name" => "Bad Request",
                "message" => "Неправильное значение параметра \"sync_source_id\".",
                "code" => 0,
                "status" => 400,
                "type" => "yii\\web\\BadRequestHttpException"
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Нечисловой type_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "sync_source_id" => 1,
                "type_id" => "q"
            ],
            "responseCode" => 400,
            "responseBody" => [
                "name" => "Bad Request",
                "message" => "Неправильное значение параметра \"type_id\".",
                "code" => 0,
                "status" => 400,
                "type" => "yii\\web\\BadRequestHttpException"
            ]
        ]
    ]
];