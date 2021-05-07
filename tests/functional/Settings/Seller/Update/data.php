<?php

return [
//    есть аналогичный UI-тест
//    'case1' => [
//        'setting' => [
//            'description' => 'Изменение супервайзера у одного магазина',
//        ],
//        'fixture_data' => include __DIR__ . '/fixture/case1.php',
//        'provider_data' => [
//            'requestParameter' => 'update?id=83',
//            'requestBody' => [
//                'MarketSupervisor[supervisor_id]' => '10',
//            ],
//            'db' => [
//                "lisa_fixtures" => [
//                    "markets_supervisors" => [
//                        [
//                            "owox_id" => 0,
//                            "supervisor_id" => 5
//                        ],
//                        [
//                            "owox_id" => 5,
//                            "supervisor_id" => 6
//                        ],
//                        [
//                            "owox_id" => 83,
//                            "supervisor_id" => 10
//                        ],
//                        [
//                            "owox_id" => 9423,
//                            "supervisor_id" => 10
//                        ],
//                        [
//                            "owox_id" => 67757,
//                            "supervisor_id" => 10
//                        ],
//                    ],
//                ],
//            ]
//        ]
//    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение супервайзера у нескольких магазинов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => 'appoint-supervisor?model=gomer\bpm\models\references\MarketSupervisor',
            'requestBody' => [
                'MarketSupervisor[supervisor_id]' => '10',
                'keys' => '0,5,83',
                'keys' => '0,5,83',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "markets_supervisors" => [
                        [
                            'owox_id' => -2,
                            'supervisor_id' => 5,
                            'title' => 'Все продавцы',
                            'status' => null
                        ],
                        [
                            'owox_id' => 0,
                            'supervisor_id' => 10,
                            'title' => 'Маркетплейс (общий)',
                            'status' => null
                        ],
                        [
                            'owox_id' => 5,
                            'supervisor_id' => 10,
                            'title' => 'Rozetka',
                            'status' => null
                        ],
                        [
                            'owox_id' => 83,
                            'supervisor_id' => 10,
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
                    ],
                ],
            ]
        ]
    ],
];
