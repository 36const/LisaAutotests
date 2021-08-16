<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Связанная заявка тип 3/2 статус 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                8 => true,
                15 => true,
                19 => true,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => NULL,
                'seller_id' => 83,
                'supervisor_id' => 6,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 3,
                'direction' => 2,
                'parent_id' => '1',
                'observers' => [
                    0 => 15,
                    1 => 17,
                ],
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                    'description' => 'Описание',
                    'category_id' => NULL,
                    'seller_id' => '83',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '3',
                    'direction' => '2',
                    'parent_id' => '1',
                    'supervisor_id' => 6,
                    'team_direction' => 2,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 3,
                                'supervisor_id' => 6,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 2,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                                'description' => 'Описание',
                                'category_id' => null,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 2,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'employee_code_1c' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ]
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 2,
                                'field_id' => 8,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 15,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 19,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 49,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 50,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 51,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 53,
                                'value' => 3
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 60,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 64,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 114,
                                'value' => 3
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 142,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 143,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 146,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 158,
                                'value' => 0,
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [
                        [
                            'request_id' => 1,
                            'user_id' => 15
                        ],
                        [
                            'request_id' => 1,
                            'user_id' => 17
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 15
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 17
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [
                    '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":3,"supervisor_id":6,"manager_id":null,"status":2,"direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Перенос товаров (Работа с товарами Маркетплейса)","description":"Описание","category_id":null,"seller_id":83,"recommendations":null,"reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"2020-01-01 00:00:01","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"1\": 1}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":1,"photo_load_status":0,"previous_status":1,"supplier_cabinet_id":null,"payload":"[]"},"changed_fields_names":["child_count"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":8,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":15,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":19,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":49,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":50,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":64,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":51,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":142,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":60,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":143,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":114,"value":"3"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":101,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":146,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":122,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":158,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":2,"field_id":53,"value":"3"},"changed_fields_names":[]}',
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.requests.all' => [
                        '{"action":"create","entity":"requests","fields_data":{"id":2,"author_id":4,"type_id":"3","supervisor_id":6,"manager_id":null,"status":1,"direction":"2","priority":"2","awaiting_correction":0,"created_at":"' . date('Y-m-d'),
                        '","correction_comment":null,"amount_to_work":"10","subject":"Перенос товаров (Работа с товарами Маркетплейса)","description":"Описание","category_id":null,"seller_id":"83","recommendations":null,"reason":null,"parent_id":"1","planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":null,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":null,"previous_status":null,"supplier_cabinet_id":null,"payload":null},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Связанная заявка тип 5 статус 3 с добавлением наблюдателей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                1 => true,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 5,
                'supervisor_id' => 6,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 5,
                'direction' => 1,
                'parent_id' => '1',
                'observers' => [
                    0 => 15,
                    1 => 17,
                ],
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                    'description' => 'Описание',
                    'category_id' => '1',
                    'seller_id' => '5',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '5',
                    'direction' => '1',
                    'parent_id' => '1',
                    'supervisor_id' => 6,
                    'team_direction' => 3,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 5,
                                'supervisor_id' => 6,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 1,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                                'description' => 'Описание',
                                'category_id' => 1,
                                'seller_id' => 5,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 3,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'employee_code_1c' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 2,
                                'field_id' => 1,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 49,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 50,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 51,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 52,
                                'value' => 2
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 53,
                                'value' => 0.5
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 60,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 64,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 142,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 143,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 146,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 158,
                                'value' => 0,
                            ],
                        ],
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [
                        [
                            'request_id' => 2,
                            'user_id' => 15
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 17
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Связанная заявка тип 7 статус 5 с изменённым описанием',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                1 => true,
                6 => true,
                7 => true,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                'category_id' => 1,
                'seller_id' => 83,
                'supervisor_id' => 35,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 7,
                'direction' => 0,
                'parent_id' => '1',
                'observers' => [],
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                    'description' => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                    'category_id' => '1',
                    'seller_id' => '83',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '7',
                    'direction' => '0',
                    'parent_id' => '1',
                    'supervisor_id' => 35,
                    'team_direction' => 6,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 7,
                                'supervisor_id' => 35,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 0,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                                'description' => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                                'category_id' => 1,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 6,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'employee_code_1c' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 2,
                                'field_id' => 1,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 6,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 7,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 53,
                                'value' => 3
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 55,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 146,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 158,
                                'value' => 0,
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Связанная заявка тип 9 статус 6 + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'requestBody' => [
                1 => true,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'supervisor_id' => 34,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 9,
                'direction' => 0,
                'parent_id' => '1',
                'observers' => [
                    0 => 15,
                    1 => 17,
                ],
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                    'description' => 'Описание',
                    'category_id' => '1',
                    'seller_id' => '83',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '9',
                    'direction' => '0',
                    'parent_id' => '1',
                    'supervisor_id' => 34,
                    'team_direction' => 5,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 9,
                                'supervisor_id' => 34,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 0,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                                'description' => 'Описание',
                                'category_id' => 1,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 5,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'employee_code_1c' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 2,
                                'field_id' => 1,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 53,
                                'value' => 0.5
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 59,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 146,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 158,
                                'value' => 0,
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [
                        [
                            'request_id' => 1,
                            'user_id' => 15
                        ],
                        [
                            'request_id' => 1,
                            'user_id' => 17
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 15
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 17
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Создана новая заявка №2 `Добавление параметров/значений (Определяется типом задачи)`","notification":"Константин Куцан <b>создал(а) связанную заявку</b> <a href=\"http://gomer.local/lisa/#/request/view/2?notifyId=1\">№2 Добавление параметров/значений (Определяется типом задачи)</a>\n [Товар-новинка/эксклюзив (трафикообразующий)]\n</br><b>Количество в работу:</b> 10</br> из заявки <a href=\"http://gomer.local/lisa/#/request/view/1\">№1</a>","requestId":2}',
                    '{"notificationId":2,"userId":34,"attachments":"[]","subject":"[LISA] Создана новая заявка №2 `Добавление параметров/значений (Определяется типом задачи)`","notification":"Константин Куцан <b>создал(а) связанную заявку</b> <a href=\"http://gomer.local/lisa/#/request/view/2?notifyId=2\">№2 Добавление параметров/значений (Определяется типом задачи)</a>\n [Товар-новинка/эксклюзив (трафикообразующий)]\n</br><b>Количество в работу:</b> 10</br> из заявки <a href=\"http://gomer.local/lisa/#/request/view/1\">№1</a>","requestId":2}',
                    '{"notificationId":4,"userId":17,"attachments":"[]","subject":"[LISA] Создана новая заявка №2 `Добавление параметров/значений (Определяется типом задачи)`","notification":"Константин Куцан <b>создал(а) связанную заявку</b> <a href=\"http://gomer.local/lisa/#/request/view/2?notifyId=4\">№2 Добавление параметров/значений (Определяется типом задачи)</a>\n [Товар-новинка/эксклюзив (трафикообразующий)]\n</br><b>Количество в работу:</b> 10</br> из заявки <a href=\"http://gomer.local/lisa/#/request/view/1\">№1</a>","requestId":2}',
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Связанная заявка тип 10 статус 7 с изменёнными приоритетом и чек-боксом',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestBody' => [
                1 => true,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'supervisor_id' => 37,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 1,
                'type_id' => 10,
                'direction' => 0,
                'parent_id' => '1',
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                    'description' => 'Описание',
                    'category_id' => '1',
                    'seller_id' => '83',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '1',
                    'type_id' => '10',
                    'direction' => '0',
                    'parent_id' => '1',
                    'supervisor_id' => 37,
                    'team_direction' => 5,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 10,
                                'supervisor_id' => 37,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 0,
                                'priority' => 1,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                                'description' => 'Описание',
                                'category_id' => 1,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 5,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 2,
                                'field_id' => 1,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 53,
                                'value' => 0.5
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 59,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 146,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 158,
                                'value' => 0,
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 1,
                            'amount_to_work' => 10,
                            'request_subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 37,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 1,
                            'amount_to_work' => 10,
                            'request_subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 5,
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Связанная заявка тип 13 статус 8 с изменёнными категорией, продавцом и наблюдателем',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestBody' => [
                2 => true,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => -2,
                'supervisor_id' => 38,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 13,
                'direction' => 0,
                'parent_id' => '1',
                'observers' => [
                    0 => 19,
                ]
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                    'description' => 'Описание',
                    'category_id' => '2',
                    'seller_id' => '-2',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '13',
                    'direction' => '0',
                    'parent_id' => '1',
                    'supervisor_id' => 38,
                    'team_direction' => 6,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case6.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 13,
                                'supervisor_id' => 38,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 0,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                                'description' => 'Описание',
                                'category_id' => 2,
                                'seller_id' => -2,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 6,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case6.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 2,
                                'field_id' => 2,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 53,
                                'value' => 2
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 56,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 146,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 158,
                                'value' => 0,
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 19,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 38,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [
                        [
                            'request_id' => 2,
                            'user_id' => 19
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Связанная заявка тип 15 статус 9 с изменённым типом, направлением, заголовком, кол-вом в работу и чек-боксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestBody' => [
                2 => true,
                123 => true,
                124 => true,
                125 => true,
                'subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'supervisor_id' => 6,
                'amount_to_work' => 20,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 2,
                'direction' => 1,
                'parent_id' => '1',
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'description' => 'Описание',
                    'category_id' => '1',
                    'seller_id' => '83',
                    'amount_to_work' => '20',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '2',
                    'direction' => '1',
                    'parent_id' => '1',
                    'supervisor_id' => 6,
                    'team_direction' => 3,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case7.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 2,
                                'supervisor_id' => 6,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 1,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 20,
                                'subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                                'description' => 'Описание',
                                'category_id' => 1,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 3,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case7.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 2,
                                'field_id' => 2,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 49,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 50,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 51,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 52,
                                'value' => 2
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 53,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 60,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 64,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 123,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 124,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 125,
                                'value' => 1
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 142,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 143,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 146,
                                'value' => 0,
                            ],
                            [
                                'request_id' => 2,
                                'field_id' => 158,
                                'value' => 0,
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 20,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 20,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Вторая связанная заявка тип 15 статус 9 с изменённым типом и темой',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestBody' => [
                2 => true,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'supervisor_id' => 35,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 7,
                'direction' => 0,
                'parent_id' => '1',
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                    'description' => 'Описание',
                    'category_id' => '1',
                    'seller_id' => '83',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '7',
                    'direction' => '0',
                    'parent_id' => '1',
                    'supervisor_id' => 35,
                    'team_direction' => 6,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 3,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case8.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 2,
                            ],
                            [],
                            [
                                'id' => 3,
                                'author_id' => 4,
                                'type_id' => 7,
                                'supervisor_id' => 35,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 0,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                                'description' => 'Описание',
                                'category_id' => 1,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 6,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'employee_code_1c' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case8.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 3,
                                'field_id' => 2,
                                'value' => 1
                            ],
                            [
                                'request_id' => 3,
                                'field_id' => 53,
                                'value' => 2
                            ],
                            [
                                'request_id' => 3,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 3,
                                'field_id' => 55,
                                'value' => 0
                            ],
                            [
                                'request_id' => 3,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 3,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 3,
                                'field_id' => 146,
                                'value' => 0
                            ],
                            [
                                'request_id' => 3,
                                'field_id' => 158,
                                'value' => 0
                            ]
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-01-01 00:00:01',
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 20,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-01-01 00:00:01',
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 20,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 3,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 3, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 3,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 3, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Первая связанная от связанной заявки тип 7 статус 1 без изменений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'provider_data' => [
            'requestBody' => [
                2 => true,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'supervisor_id' => 35,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 7,
                'direction' => 0,
                'parent_id' => '3',
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                    'description' => 'Описание',
                    'category_id' => '1',
                    'seller_id' => '83',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '7',
                    'direction' => '0',
                    'parent_id' => '3',
                    'supervisor_id' => 35,
                    'team_direction' => 6,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 4,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case9.php')['lisa_fixtures']['requests'],
                        [
                            [],
                            [],
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 4,
                                'author_id' => 4,
                                'type_id' => 7,
                                'supervisor_id' => 35,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 0,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                                'description' => 'Описание',
                                'category_id' => 1,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 3,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 6,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'employee_code_1c' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case9.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 4,
                                'field_id' => 2,
                                'value' => 1
                            ],
                            [
                                'request_id' => 4,
                                'field_id' => 53,
                                'value' => 2
                            ],
                            [
                                'request_id' => 4,
                                'field_id' => 54,
                                'value' => 1
                            ],
                            [
                                'request_id' => 4,
                                'field_id' => 55,
                                'value' => 0
                            ],
                            [
                                'request_id' => 4,
                                'field_id' => 101,
                                'value' => 0
                            ],
                            [
                                'request_id' => 4,
                                'field_id' => 122,
                                'value' => 0
                            ],
                            [
                                'request_id' => 4,
                                'field_id' => 146,
                                'value' => 0
                            ],
                            [
                                'request_id' => 4,
                                'field_id' => 158,
                                'value' => 0
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-01-01 00:00:01',
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 20,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-01-01 00:00:01',
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 20,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-01-02 00:00:01',
                            'request_id' => 3,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 3, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-01-02 00:00:01',
                            'request_id' => 3,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 3, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 4,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 4, "oldValue": "3"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 6,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 4,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 4, "oldValue": "3"}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'observers' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [
                    '{"action":"update","entity":"requests","fields_data":{"id":3,"author_id":4,"type_id":7,"supervisor_id":35,"manager_id":null,"status":1,"direction":0,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)","description":"Описание","category_id":1,"seller_id":83,"recommendations":null,"reason":null,"parent_id":1,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"2020-01-01 00:00:01","team_direction":6,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":1,"photo_load_status":0,"previous_status":null,"supplier_cabinet_id":null,"payload":"[]"},"changed_fields_names":["child_count"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":2,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":55,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":54,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":101,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":146,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":122,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":158,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":4,"field_id":53,"value":"2"},"changed_fields_names":[]}',
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.requests.all' => [
                        '{"action":"create","entity":"requests","fields_data":{"id":4,"author_id":4,"type_id":"7","supervisor_id":"35","manager_id":null,"status":1,"direction":"0","priority":"2","awaiting_correction":0,"created_at":"' . date('Y-m-d'),
                        '","correction_comment":null,"amount_to_work":"10","subject":"Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)","description":"Описание","category_id":"1","seller_id":"83","recommendations":null,"reason":null,"parent_id":"3","planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":6,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":null,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":null,"previous_status":null,"supplier_cabinet_id":null,"payload":null},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Связанная заявка тип 4 статус 8 с изменением типа, заголовка и описания (и пересчётом показателей в типе 4)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestBody' => [
                8 => true,
                15 => true,
                19 => true,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => NULL,
                'seller_id' => 83,
                'supervisor_id' => 6,
                'amount_to_work' => 10,
                'planned_finish_date' => NULL,
                'priority' => 2,
                'type_id' => 3,
                'direction' => 2,
                'parent_id' => '1',
                'observers' => [
                    0 => 15,
                    1 => 17,
                ]
            ],
            'responseBody' => [
                'request' => [
                    'author_id' => 4,
                    'status' => 1,
                    'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                    'description' => 'Описание',
                    'category_id' => NULL,
                    'seller_id' => '83',
                    'amount_to_work' => '10',
                    'planned_finish_date' => NULL,
                    'priority' => '2',
                    'type_id' => '3',
                    'direction' => '2',
                    'parent_id' => '1',
                    'supervisor_id' => 6,
                    'team_direction' => 2,
                    'awaiting_correction' => 0,
                    'child_count' => 0,
                    //'created_at' => '2021-06-25 11:03:58',
                    'manager_id' => NULL,
                    'report_period_id' => NULL,
                    'planned_start_date' => NULL,
                    'actual_start_date' => NULL,
                    'actual_finish_date' => NULL,
                    'supervisor_process_date' => NULL,
                    'supervisor_check_date' => NULL,
                    'sync_source_id' => NULL,
                    //'last_change_status_date' => '2021-06-25 11:03:58',
                    'id' => 2,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case10.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'child_count' => 1,
                            ],
                            [
                                'id' => 2,
                                'author_id' => 4,
                                'type_id' => 3,
                                'supervisor_id' => 6,
                                'manager_id' => null,
                                'status' => 1,
                                'direction' => 2,
                                'priority' => 2,
                                'awaiting_correction' => 0,
                                'created_at >=' => date('Y-m-d'),
                                'correction_comment' => null,
                                'amount_to_work' => 10,
                                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                                'description' => 'Описание',
                                'category_id' => null,
                                'seller_id' => 83,
                                'recommendations' => null,
                                'reason' => null,
                                'parent_id' => 1,
                                'planned_start_date' => null,
                                'planned_finish_date' => null,
                                'actual_start_date' => null,
                                'actual_finish_date' => null,
                                'supervisor_process_date' => null,
                                'supervisor_check_date' => null,
                                'result_comment' => null,
                                'supervisor_comment' => null,
                                'last_change_status_date >=' => date('Y-m-d'),
                                'team_direction' => 2,
                                'report_period_id' => null,
                                'sync_source_id' => null,
                                'sv_report_periods' => null,
                                'cross_check_status' => 0,
                                'cross_check_manager_id' => null,
                                'employee_code_1c' => null,
                                'child_count' => 0,
                                'photo_load_status' => 0,
                                'previous_status' => null,
                                'supplier_cabinet_id' => null,
                                'payload' => '[]',
                            ],
                        ]
                    ),
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 32,
                            'value' => 52,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 61,
                            'value' => 210,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 91,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 300,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 116,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 161,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 162,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 163,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 118.35,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 164,
                            'value' => 0.7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 165,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 166,
                            'value' => 0.15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 167,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 168,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 169,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 170,
                            'value' => 0.7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 171,
                            'value' => 0.07,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 172,
                            'value' => 0.15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 173,
                            'value' => 0.1,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 8,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 15,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 19,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 49,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 50,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 51,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 53,
                            'value' => 3
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 60,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 64,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 101,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 114,
                            'value' => 3
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 122,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 142,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 143,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 146,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 158,
                            'value' => 0
                        ]
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 2, "oldValue": "1"}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'observers' => [
                        [
                            'request_id' => 1,
                            'user_id' => 15
                        ],
                        [
                            'request_id' => 1,
                            'user_id' => 17
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 15
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

];
