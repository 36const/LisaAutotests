<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Связанная заявка тип 3/2 статус 2',
            'type' => 3,
            'direction' => 2,
            'id' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => "de7ac59cf8587229fedf727f5b5bfa62",
                "Request[addedAttachments]" => "[]",
                "Request[deletedAttachments]" => "[]",
                "Request[attachments]" => "[]",
                "Request[seller_id]" => 83,
                "Request[description]" => "Описание",
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[parent_id]" => 1,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "Перенос товаров (Работа с товарами Маркетплейса)",
                "Request[type_id]" => 3,
                "Request[supervisor_id]" => 6,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 2,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Маркетплейса)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Маркетплейса)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => 1,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null
                        ],
                    ],
                    "requests_fields" => [
                        [
                            "request_id" => 1,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 8,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 15,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 19,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 114,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 8,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 15,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 19,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 114,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Из заявки <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Перенос товаров (Работа с товарами Маркетплейса)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Тим Лидович 1, Менеджер Продактович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Из заявки <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Перенос товаров (Работа с товарами Маркетплейса)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Тим Лидович 1, Менеджер Продактович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Из заявки <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Перенос товаров (Работа с товарами Маркетплейса)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Тим Лидович 1, Менеджер Продактович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Из заявки <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Перенос товаров (Работа с товарами Маркетплейса)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Тим Лидович 1, Менеджер Продактович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                        [
                            "request_id" => 2,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 2,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Связанная заявка тип 5 статус 3',
            'type' => 5,
            'direction' => 1,
            'id' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => "de7ac59cf8587229fedf727f5b5bfa62",
                "Request[addedAttachments]" => "[]",
                "Request[deletedAttachments]" => "[]",
                "Request[attachments]" => "[]",
                "Request[seller_id]" => 5,
                "Request[category_id]" => 1,
                "Request[description]" => "Описание",
                "Request[direction]" => 1,
                "Request[parent_id]" => 1,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                "Request[type_id]" => 5,
                "Request[supervisor_id]" => 6,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 5,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 3,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason_id" => 15,
                            "reason" => "Затребовать изменения",
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 5,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => 1,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
//                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null
                        ],
                    ],
                    "requests_fields" => [
                        [
                            "request_id" => 1,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 52,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 52,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Из заявки <b>№1 "Заливка фото с фотостудии (Работа с товарами Розетки)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Заливка фото с фотостудии (Работа с товарами Розетки)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Из заявки <b>№1 "Заливка фото с фотостудии (Работа с товарами Розетки)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Заливка фото с фотостудии (Работа с товарами Розетки)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1"
                        ],
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Связанная заявка тип 7 направлене 5 с изменённым описанием',
            'type' => 7,
            'direction' => 0,
            'id' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => "de7ac59cf8587229fedf727f5b5bfa62",
                "Request[addedAttachments]" => "[]",
                "Request[deletedAttachments]" => "[]",
                "Request[attachments]" => "[]",
                "Request[seller_id]" => 83,
                "Request[category_id]" => 1,
                "Request[description]" => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                "Request[direction]" => 0,
                "Request[parent_id]" => 1,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[type_id]" => 7,
                "Request[supervisor_id]" => 35,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 5,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => 1,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null
                        ],
                    ],
                    "requests_fields" => [
                        [
                            "request_id" => 1,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 6,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 7,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 29,
                            "value" => "36"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 30,
                            "value" => "47"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 55,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 6,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 7,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 55,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Из заявки <b>№1 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => 'Из заявки <b>№1 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Категоркин 15"
                        ],
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Связанная заявка тип 9 статус 6',
            'type' => 9,
            'direction' => 0,
            'id' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => "de7ac59cf8587229fedf727f5b5bfa62",
                "Request[addedAttachments]" => "[]",
                "Request[deletedAttachments]" => "[]",
                "Request[attachments]" => "[]",
                "Request[seller_id]" => 83,
                "Request[category_id]" => 1,
                "Request[description]" => "Описание",
                "Request[direction]" => 0,
                "Request[parent_id]" => 1,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "Добавление параметров/значений (Определяется типом задачи)",
                "Request[type_id]" => 9,
                "Request[supervisor_id]" => 34,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 9,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 6,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 9,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => 1,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null
                        ],
                    ],
                    "requests_fields" => [
                        [
                            "request_id" => 1,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 59,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 59,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Из заявки <b>№1 "Добавление параметров/значений (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Добавление параметров/значений (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Проектенко 14"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => 'Из заявки <b>№1 "Добавление параметров/значений (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Добавление параметров/значений (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Проектенко 14"
                        ],
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Связанная заявка тип 10 статус 7 с изменёнными приоритетом и чек-боксом',
            'type' => 10,
            'direction' => 0,
            'id' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => "de7ac59cf8587229fedf727f5b5bfa62",
                "Request[addedAttachments]" => "[]",
                "Request[deletedAttachments]" => "[]",
                "Request[attachments]" => "[]",
                "Request[seller_id]" => 83,
                "Request[category_id]" => 1,
                "Request[description]" => "Описание",
                "Request[direction]" => 0,
                "Request[parent_id]" => 1,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 9,
                "Request[subject]" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "Request[type_id]" => 10,
                "Request[supervisor_id]" => 37,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 37,
                            "manager_id" => 11,
                            "status" => 7,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => 5,
                            "reason" => "Ожидать",
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => 'Комментарий',
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 37,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 9,
                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => 1,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null
                        ],
                    ],
                    "requests_fields" => [
                        [
                            "request_id" => 1,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 59,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 59,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Из заявки <b>№1 "Изменение существующих параметров/значений (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Изменение существующих параметров/значений (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 9,
                            "recipients" => "Константин Куцан, Супервайзер Проектенко 17"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 37,
                            "notification" => 'Из заявки <b>№1 "Изменение существующих параметров/значений (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Изменение существующих параметров/значений (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 9,
                            "recipients" => "Константин Куцан, Супервайзер Проектенко 17"
                        ],
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Связанная заявка тип 13 статус 8 с изменёнными категорией, продавцом и наблюдателем',
            'type' => 13,
            'direction' => 0,
            'id' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[2]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => "de7ac59cf8587229fedf727f5b5bfa62",
                "Request[addedAttachments]" => "[]",
                "Request[deletedAttachments]" => "[]",
                "Request[attachments]" => "[]",
                "Request[seller_id]" => 0,
                "Request[category_id]" => 2,
                "Request[description]" => "Описание",
                "Request[observers]" => [19],
                "Request[direction]" => 0,
                "Request[parent_id]" => 1,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "Добавление/изменение видео (Определяется типом задачи)",
                "Request[type_id]" => 13,
                "Request[supervisor_id]" => 38,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 13,
                            "supervisor_id" => 38,
                            "manager_id" => 11,
                            "status" => 8,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => 6,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => "Комментарий к результату задачи",
                            "supervisor_comment" => 'Комментарий',
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 13,
                            "supervisor_id" => 38,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 2,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => 1,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null
                        ],
                    ],
                    "requests_fields" => [
                        [
                            "request_id" => 1,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 27,
                            "value" => "24"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 47,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 48,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 56,
                            "value" => "80"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 62,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 63,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 70,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 86,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 87,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 88,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 100,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 56,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Из заявки <b>№1 "Добавление/изменение видео (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Добавление/изменение видео (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Сео Сеошевич 1, Супервайзер Категоркин 18"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 19,
                            "notification" => 'Из заявки <b>№1 "Добавление/изменение видео (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Добавление/изменение видео (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Сео Сеошевич 1, Супервайзер Категоркин 18"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 38,
                            "notification" => 'Из заявки <b>№1 "Добавление/изменение видео (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "Добавление/изменение видео (Определяется типом задачи)"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Сео Сеошевич 1, Супервайзер Категоркин 18"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 2,
                            "user_id" => 19
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Связанная заявка тип 15 статус 9 с изменённым типом, направлением, заголовком, кол-вом в работу и чек-боксами',
            'type' => 15,
            'direction' => 0,
            'id' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[123]" => 1,
                "RequestField[124]" => 1,
                "RequestField[125]" => 1,
                "RequestField[2]" => 1,
                "Request[amount_to_work]" => 20,
                "Request[attachment_folder]" => "de7ac59cf8587229fedf727f5b5bfa62",
                "Request[addedAttachments]" => "[]",
                "Request[deletedAttachments]" => "[]",
                "Request[attachments]" => "[]",
                "Request[seller_id]" => 83,
                "Request[category_id]" => 1,
                "Request[description]" => "Описание",
                "Request[direction]" => 1,
                "Request[parent_id]" => 1,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "~}!@#$%^&*()_+`-]'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                "Request[type_id]" => 2,
                "Request[supervisor_id]" => 38,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 15,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => "Комментарий к результату задачи",
                            "supervisor_comment" => 'Комментарий',
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 20,
                            "subject" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => 1,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null
                        ],
                    ],
                    "requests_fields" => [
                        [
                            "request_id" => 1,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 58,
                            "value" => "120"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 83,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 92,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 110,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 52,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 123,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 124,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 125,
                            "value" => "1"
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Из заявки <b>№1 "Добавление/изменение тегов (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "!@#$%^&*()_+`-]\'/[;.,}"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Из заявки <b>№1 "Добавление/изменение тегов (Определяется типом задачи)" </b>, количество в работу: <b>10</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b> создана связанная заявка <b>№2 "!@#$%^&*()_+`-]\'/[;.,}"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 2,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1"
                        ],
                    ],
                    'observers' => [],
                ]
            ]
        ]
    ],

];
