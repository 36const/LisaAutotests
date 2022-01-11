<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление 18 новых магазинов с условиями распределения',
            'multi' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'routing_key' => 'market.create',
            'response' => 'Магазин сохранен.Array
(
    [owox_id] => ',
            'numberOfRecords' => [
                5 => 2,
                6 => 2,
                10 => 6,
                16 => 3,
                23 => 3,
                24 => 3,
                25 => 3,
                26 => 3,
                37 => 3,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => array_merge_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                        [
                            0 => [
                                'owox_id' => 134801,
                                //'supervisor_id' => 16,
                                'title' => 'Soska1',
                                'status' => 1,
                            ],
                            1 => [
                                'owox_id' => 134802,
                                //'supervisor_id' => 23,
                                'title' => 'Soska2',
                                'status' => 1,
                            ],
                            2 => [
                                'owox_id' => 134803,
                                //'supervisor_id' => 24,
                                'title' => 'Soska3',
                                'status' => 1,
                            ],
                            3 => [
                                'owox_id' => 134804,
                                //'supervisor_id' => 25,
                                'title' => 'Soska4',
                                'status' => 1,
                            ],
                            4 => [
                                'owox_id' => 134805,
                                //'supervisor_id' => 26,
                                'title' => 'Soska5',
                                'status' => 1,
                            ],
                            5 => [
                                'owox_id' => 134806,
                                //'supervisor_id' => 37,
                                'title' => 'Soska6',
                                'status' => 1,
                            ],
                            6 => [
                                'owox_id' => 134807,
                                //'supervisor_id' => 23,
                                'title' => 'Soska7',
                                'status' => 1,
                            ],
                            7 => [
                                'owox_id' => 134808,
                                //'supervisor_id' => 26,
                                'title' => 'Soska8',
                                'status' => 1,
                            ],
                            8 => [
                                'owox_id' => 134809,
                                //'supervisor_id' => 37,
                                'title' => 'Soska9',
                                'status' => 1,
                            ],
                            9 => [
                                'owox_id' => 1348010,
                                //'supervisor_id' => 16,
                                'title' => 'Soska10',
                                'status' => 1,
                            ],
                            10 => [
                                'owox_id' => 1348011,
                                //'supervisor_id' => 24,
                                'title' => 'Soska11',
                                'status' => 1,
                            ],
                            11 => [
                                'owox_id' => 1348012,
                                //'supervisor_id' => 25,
                                'title' => 'Soska12',
                                'status' => 1,
                            ],
                            12 => [
                                'owox_id' => 1348013,
                                //'supervisor_id' => 23,
                                'title' => 'Soska13',
                                'status' => 1,
                            ],
                            13 => [
                                'owox_id' => 1348014,
                                //'supervisor_id' => 26,
                                'title' => 'Soska14',
                                'status' => 1,
                            ],
                            14 => [
                                'owox_id' => 1348015,
                                //'supervisor_id' => 37,
                                'title' => 'Soska15',
                                'status' => 1,
                            ],
                            15 => [
                                'owox_id' => 1348016,
                                //'supervisor_id' => 16,
                                'title' => 'Soska16',
                                'status' => 1,
                            ],
                            16 => [
                                'owox_id' => 1348017,
                                //'supervisor_id' => 24,
                                'title' => 'Soska17',
                                'status' => 1,
                            ],
                            17 => [
                                'owox_id' => 1348018,
                                //'supervisor_id' => 25,
                                'title' => 'Soska18',
                                'status' => 1,
                            ],
                        ]
                    ),
                    'common_log' => [
                        0 => [
                            'id' => 1,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134801,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska1", "status": "1", "owox_id": 134801, "supervisor_id": 16}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        1 => [
                            'id' => 2,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134802,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska2", "status": "1", "owox_id": 134802, "supervisor_id": 23}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        2 => [
                            'id' => 3,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134803,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska3", "status": "1", "owox_id": 134803, "supervisor_id": 24}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        3 => [
                            'id' => 4,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134804,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska4", "status": "1", "owox_id": 134804, "supervisor_id": 25}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        4 => [
                            'id' => 5,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134805,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska5", "status": "1", "owox_id": 134805, "supervisor_id": 26}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        5 => [
                            'id' => 6,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134806,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska6", "status": "1", "owox_id": 134806, "supervisor_id": 37}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        6 => [
                            'id' => 7,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134807,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska7", "status": "1", "owox_id": 134807, "supervisor_id": 16}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        7 => [
                            'id' => 8,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134808,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska8", "status": "1", "owox_id": 134808, "supervisor_id": 23}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        8 => [
                            'id' => 9,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134809,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska9", "status": "1", "owox_id": 134809, "supervisor_id": 24}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        9 => [
                            'id' => 10,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348010,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska10", "status": "1", "owox_id": 1348010, "supervisor_id": 25}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        10 => [
                            'id' => 11,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348011,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska11", "status": "1", "owox_id": 1348011, "supervisor_id": 26}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        11 => [
                            'id' => 12,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348012,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska12", "status": "1", "owox_id": 1348012, "supervisor_id": 37}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        12 => [
                            'id' => 13,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348013,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska13", "status": "1", "owox_id": 1348013, "supervisor_id": 16}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        13 => [
                            'id' => 14,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348014,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska14", "status": "1", "owox_id": 1348014, "supervisor_id": 23}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        14 => [
                            'id' => 15,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348015,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska15", "status": "1", "owox_id": 1348015, "supervisor_id": 24}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        15 => [
                            'id' => 16,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348016,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska16", "status": "1", "owox_id": 1348016, "supervisor_id": 25}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        16 => [
                            'id' => 17,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348017,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska17", "status": "1", "owox_id": 1348017, "supervisor_id": 26}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        17 => [
                            'id' => 18,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 1348018,
                            'old_value' => '[]',
                            //'new_value' => '{"title": "Soska18", "status": "1", "owox_id": 1348018, "supervisor_id": 37}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                    ],
                ]
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Добавление магазина при попытке обновить несуществующий у нас в базе магазин',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":21567,"owox_id":134802,"title_translit":"soska","business_model":"b2c","title":"Soska","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":"1","logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}',
            'routing_key' => 'market.update',
            'response' => 'Магазин сохранен.Array
(
    [owox_id] => 134802
    [supervisor_id] => 24
    [title] => Soska
    [status] => 1
)',
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => array_merge_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                        [
                            [
                                'owox_id' => 134802,
                                'supervisor_id' => 24,
                                'title' => 'Soska',
                                'status' => 1
                            ]
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 134802,
                            'old_value' => '[]',
                            'new_value' => '{"title": "Soska", "status": "1", "owox_id": 134802, "supervisor_id": 24}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ]
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность добавления магазина без owox_id',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":21567,"owox_id":null,"title_translit":"soska","business_model":"b2c","title":"Soska","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":"1","logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}',
            'routing_key' => 'market.create',
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                ]
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность добавления магазина без owox_id при попытке обновить несуществующий у нас в базе магазин',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":21567,"owox_id":null,"title_translit":"soska","business_model":"b2c","title":"Soska","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":"1","logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}',
            'routing_key' => 'market.update',
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                ]
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Обновление статуса магазина',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":11,"owox_id":121212,"title_translit":"mogo zin-chik","business_model":"b2c","title":"Mogo zin-chik","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":5,"logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}',
            'routing_key' => 'market.update',
            'response' => 'Магазин обновлен.Array
(
    [owox_id] => 121212
    [supervisor_id] => 10
    [title] => Mogo zin-chik
    [status] => 5
)',
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => array_replace_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                        [
                            9 => [
                                'owox_id' => 121212,
                                'supervisor_id' => 10,
                                'title' => 'Mogo zin-chik',
                                'status' => 5
                            ]
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 121212,
                            'old_value' => '{"status": 6}',
                            'new_value' => '{"status": 5}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ]
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Обновление названия магазина',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":11,"owox_id":121212,"title_translit":"sososka","business_model":"b2c","title":"Sososka","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":"6","logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}',
            'routing_key' => 'market.update',
            'response' => 'Магазин обновлен.Array
(
    [owox_id] => 121212
    [supervisor_id] => 10
    [title] => Sososka
    [status] => 6
)',
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => array_replace_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                        [
                            9 => [
                                'owox_id' => 121212,
                                'supervisor_id' => 10,
                                'title' => 'Sososka',
                                'status' => 6
                            ]
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 121212,
                            'old_value' => '{"title": "Mogo zin-chik"}',
                            'new_value' => '{"title": "Sososka"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ]
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Обновление статуса и названия магазина',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":11,"owox_id":121212,"title_translit":"sososka","business_model":"b2c","title":"Sososka","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":5,"logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}',
            'routing_key' => 'market.update',
            'response' => 'Магазин обновлен.Array
(
    [owox_id] => 121212
    [supervisor_id] => 10
    [title] => Sososka
    [status] => 5
)',
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => array_replace_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                        [
                            9 => [
                                'owox_id' => 121212,
                                'supervisor_id' => 10,
                                'title' => 'Sososka',
                                'status' => 5
                            ]
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'markets_supervisors',
                            'entity_id' => 121212,
                            'old_value' => '{"title": "Mogo zin-chik", "status": 6}',
                            'new_value' => '{"title": "Sososka", "status": 5}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ]
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Невозможность обновления магазина без owox_id',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":21567,"owox_id":null,"title_translit":"sososka","business_model":"b2c","title":"Sososka","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":5,"logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}',
            'routing_key' => 'market.update',
            'db' => [
                'lisa_fixtures' => [
                    'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
                ]
            ],
        ]
    ],

];
