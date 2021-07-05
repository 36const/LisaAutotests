<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление новой розетовской категории из стора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":4326656,"mpath":".84625.4326572.","title":"Учебники","status":"active","status_inherited":"active","order":16777215,"ext_id":"","name":"uchebniki-nauchno-metodicheskaya-literatura","titles_mode":"inherited","kits_show":"inherited","parent_id":4326572,"left_key":8044,"right_key":8045,"level":0,"created_at":"2015-08-28T10:02:42Z","href":"https://rozetka.com.ua/uchebniki-nauchno-metodicheskaya-literatura/c4326656/","allow_index_three_parameters":false,"on_subdomain":"none","oversized":"default","is_subdomain":false,"disable_kit_ratio":false,"is_rozetka_top":true,"uk":{"id":4326656,"title":""},"use_group_links":""},"changed":["mpath", "status_inherited"], "time": "2021-06-25T07:11:02.333270217Z","request_id":"MessageBus_Modules_RozetkaCLIController::sendRecordsDataByWhere"}',
            'routing_key' => 'create.category.entity.SLR.DVR.CMT.CTT.SEO.BI.LLT.1C.MRK.CTL.DBA.EBQ.GML.SMD.SSH.LIS',
            'db' => [
                "lisa_fixtures" => [
                    "rozetka_categories" => [
                        [
                            'id' => 4326656,
                            'title' => 'Учебники',
                            'mpath' => '.84625.4326572.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4326572,
                            'lisa_category_id' => 474,
                        ],
                        [
                            "id" => 80022,
                            "title" => "Диктофоны",
                            "mpath" => ".4627949.80257.4627865.",
                            "status" => "active",
                            "deleted" => null,
                            "parent_id" => 4627865,
                            "lisa_category_id" => null,
                        ]
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => null,
                            'priority' => null,
                            'amount_to_work' => 0,
                            'request_subject' => null,
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Администратор',
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
                ]
            ]
        ]
    ],

];
