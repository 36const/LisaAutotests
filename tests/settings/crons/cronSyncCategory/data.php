<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление новой розетовской категории из стора, не связанной с существующей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":4326656,"mpath":".84625.4326572.","title":"Учебники","status":"active","status_inherited":"active","order":16777215,"ext_id":"","name":"uchebniki-nauchno-metodicheskaya-literatura","titles_mode":"inherited","kits_show":"inherited","parent_id":4326572,"left_key":8044,"right_key":8045,"level":0,"created_at":"2015-08-28T10:02:42Z","href":"https://rozetka.com.ua/uchebniki-nauchno-metodicheskaya-literatura/c4326656/","allow_index_three_parameters":false,"on_subdomain":"none","oversized":"default","is_subdomain":false,"disable_kit_ratio":false,"is_rozetka_top":true,"uk":{"id":4326656,"title":""},"use_group_links":""},"changed":["mpath", "status_inherited"], "time": "2021-06-25T07:11:02.333270217Z","request_id":"MessageBus_Modules_RozetkaCLIController::sendRecordsDataByWhere"}',
            'routing_key' => 'create.category.entity.SLR.DVR.CMT.CTT.SEO.BI.LLT.1C.MRK.CTL.DBA.EBQ.GML.SMD.SSH.LIS',
            'excludedRedisKeys' => [
                'rozetka_categories_names04b50846f22b55d74fd96f1ab0847b52',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'rozetka_categories' => [
                        [
                            'id' => 4326656,
                            'title' => 'Учебники',
                            'mpath' => '.84625.4326572.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4326572,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 80022,
                            'title' => 'Диктофоны',
                            'mpath' => '.4627949.80257.4627865.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4627865,
                            'lisa_category_id' => null,
                            'children' => 0,
                        ]
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => null,
                            'priority' => null,
                            'amount_to_work' => 0,
                            'request_subject' => null,
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'new_category',
                            'changed_fields' => '{"newValue": "Учебники (4326656)", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'goods-lisa' => [],
                'lisa_rzCategoriesExport' => [
                    '["export"]'
                ],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] В LISA добавилась новая категория: Учебники (4326656)","notification":"В базу данных LISA добавилась новая категория Rozetka: <b>Учебники (4326656)</b> .\n        Привязать её к категории LISA можно по <a href=\"http://gomer.local/lisa/#/category/list\">ссылке</a>","requestId":null}'
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Добавление новой розетовской категории из стора, связанной с существующей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":4326656,"mpath":".4627949.80257.4627865.80022.","title":"Учебники","status":"active","status_inherited":"active","order":16777215,"ext_id":"","name":"uchebniki-nauchno-metodicheskaya-literatura","titles_mode":"inherited","kits_show":"inherited","parent_id":4326572,"left_key":8044,"right_key":8045,"level":0,"created_at":"2015-08-28T10:02:42Z","href":"https://rozetka.com.ua/uchebniki-nauchno-metodicheskaya-literatura/c4326656/","allow_index_three_parameters":false,"on_subdomain":"none","oversized":"default","is_subdomain":false,"disable_kit_ratio":false,"is_rozetka_top":true,"uk":{"id":4326656,"title":""},"use_group_links":""},"changed":["mpath", "status_inherited"], "time": "2021-06-25T07:11:02.333270217Z","request_id":"MessageBus_Modules_RozetkaCLIController::sendRecordsDataByWhere"}',
            'routing_key' => 'create.category.entity.SLR.DVR.CMT.CTT.SEO.BI.LLT.1C.MRK.CTL.DBA.EBQ.GML.SMD.SSH.LIS',
            'excludedRedisKeys' => [
                'rozetka_categories_names04b50846f22b55d74fd96f1ab0847b52',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'rozetka_categories' => [
                        [
                            'id' => 4326656,
                            'title' => 'Учебники',
                            'mpath' => '.4627949.80257.4627865.80022.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 80022,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 80022,
                            'title' => 'Диктофоны',
                            'mpath' => '.4627949.80257.4627865.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4627865,
                            'lisa_category_id' => 474,
                            'children' => 1,
                        ]
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => null,
                            'priority' => null,
                            'amount_to_work' => 0,
                            'request_subject' => null,
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'new_category',
                            'changed_fields' => '{"newValue": "Учебники (4326656)", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'goods-lisa' => [],
                'lisa_rzCategoriesExport' => [
                    '["export"]'
                ],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] В LISA добавилась новая категория: Учебники (4326656)","notification":"В базу данных LISA добавилась новая категория Rozetka: <b>Учебники (4326656)</b> .\n        Привязать её к категории LISA можно по <a href=\"http://gomer.local/lisa/#/category/list\">ссылке</a>","requestId":null}'
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение существующей розетовской категории из стора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":80022,"mpath":".4627949.80257.4627865.","title":"Диктофоны","status":"active","status_inherited":"active","order":16777215,"ext_id":"","name":"Diktofony","titles_mode":"inherited","kits_show":"inherited","parent_id":4627865,"left_key":8044,"right_key":8045,"level":0,"created_at":"2015-08-28T10:02:42Z","href":"https://rozetka.com.ua/dictofony/c80022/","allow_index_three_parameters":false,"on_subdomain":"none","oversized":"default","is_subdomain":false,"disable_kit_ratio":false,"is_rozetka_top":true,"uk":{"id":4326656,"title":""},"use_group_links":""},"changed":["mpath", "status_inherited"], "time": "2021-06-25T07:11:02.333270217Z","request_id":"MessageBus_Modules_RozetkaCLIController::sendRecordsDataByWhere"}',
            'routing_key' => 'update.category.entity.SLR.DVR.CMT.CTT.SEO.BI.LLT.1C.MRK.CTL.DBA.EBQ.GML.SMD.SSH.LIS',
            'excludedRedisKeys' => [
                'rozetka_categories_names04b50846f22b55d74fd96f1ab0847b52',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'rozetka_categories' => [
                        [
                            'id' => 80022,
                            'title' => 'Диктофоны',
                            'mpath' => '.4627949.80257.4627865.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4627865,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ]
                    ],
                    'user_notifications' => [],
                ]
            ],
            'RabbitMQ' => [
                'goods-lisa' => [],
                'lisa_rzCategoriesExport' => [
                    '["export"]'
                ],
                'lisa_sendMailNotifications' => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение существующей розетовской категории из стора c перепривязкой к другой категории стора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'message' => '{"data":{"id":4326656,"mpath":".4627949.80257.4627865.4655272.","title":"Учебники","status":"active","status_inherited":"active","order":16777215,"ext_id":"","name":"uchebniki-nauchno-metodicheskaya-literatura","titles_mode":"inherited","kits_show":"inherited","parent_id":4655272,"left_key":8044,"right_key":8045,"level":0,"created_at":"2015-08-28T10:02:42Z","href":"https://rozetka.com.ua/uchebniki-nauchno-metodicheskaya-literatura/c4326656/","allow_index_three_parameters":false,"on_subdomain":"none","oversized":"default","is_subdomain":false,"disable_kit_ratio":false,"is_rozetka_top":true,"uk":{"id":4326656,"title":""},"use_group_links":""},"changed":["mpath", "status_inherited"], "time": "2021-06-25T07:11:02.333270217Z","request_id":"MessageBus_Modules_RozetkaCLIController::sendRecordsDataByWhere"}',
            'routing_key' => 'update.category.entity.SLR.DVR.CMT.CTT.SEO.BI.LLT.1C.MRK.CTL.DBA.EBQ.GML.SMD.SSH.LIS',
            'excludedRedisKeys' => [
                'rozetka_categories_names04b50846f22b55d74fd96f1ab0847b52',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'rozetka_categories' => [
                        [
                            'id' => 4326656,
                            'title' => 'Учебники',
                            'mpath' => '.4627949.80257.4627865.4655272.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4655272,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 80022,
                            'title' => 'Диктофоны',
                            'mpath' => '.4627949.80257.4627865.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4627865,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4655272,
                            'title' => 'Досточки для оттиска',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 1,
                        ],
                    ],
                    'user_notifications' => [],
                ]
            ],
            'RabbitMQ' => [
                'goods-lisa' => [],
                'lisa_rzCategoriesExport' => [
                    '["export"]'
                ],
                'lisa_sendMailNotifications' => []
            ]
        ]
    ],

];
