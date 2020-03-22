<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров',
        ],
//        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [

            'responseCode' => 200,

            "fields" => [
                "data" => [
                    "status" => 200,
                    "result" => [
                        "id" => 600
                    ]
                ]
            ]
        ]
    ],

/*    'case2' => [
        'setting' => [
            // mc-3523, по сути это апишка для добавления очереди uploader_update_custom_data
            'description' => 'case2 негативный, ожидаем 400. НЕпередаем обязательный парметр: marketId',
            'scenario' => 'negaitive',
        ],
//        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'query_params' => [
                "slaId" => 4321,
            ],
            'responseCode' => 400,
            "fields" => [
                "errors" => [
                    "code" => 0,
                    "message" => "Отсутствуют обязательные параметры: marketId",
//                    "error_guid" => "f97cc78e-6a8f-4db0-8e52-86bf19a214ad",
                    "exception_message" => "Отсутствуют обязательные параметры: marketId",
//                    "exception_file" => "/var/www/gomer.local/www/vendor/yiisoft/yii2/web/Controller.php",
                    "exception_line" => 170,
//                    "trace" => "trace...."
                ]
            ],
        ],
    ],*/
];