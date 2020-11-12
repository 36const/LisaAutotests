<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Новая заявка Jira COMI',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            'JIRA' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/rest/api/2/issue/COMI-17063',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            "application/json;charset=UTF-8"
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/JIRA/case1.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            "requestParameters" => "?issueKey=COMI-17063",
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 9,
                            "type_id" => 2,
                            "supervisor_id" => 23,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            //"created_at" =>
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "COMI-17063 замеры Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)",
                            "description" => "Ссылка на JIRA: https://sd.local/servicedesk/customer/portal/106/COMI-17063 
 Описание: Добрый деньпросьба уточнить замеры по 2м товарам&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517) и&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)Длина (от шеи до низа)Длина (от шеи до шагового узла)Длина внутреннего шва брюк Длина рукаваПОТ 

 Комментарии: 
Закружная Виктория (2020-09-22 12:48:48): 
 &nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)

Длина (от шеи до низа)-76 см

Длина (от шеи до шагового узла)-48 см

Длина внутреннего шва брюк-32 см

Длина рукава-38 от шеи

ПОТ-34 см

Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)
&nbsp;

Длина (от шеи до низа)-74см

Длина (от шеи до шагового узла)-45&nbsp;см

Длина внутреннего шва брюк-30&nbsp;см

Длина рукава-35&nbsp;от шеи

ПОТ-34 см
 
",
                            "category_id" => 437,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" =>
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Новая заявка Jira COMI (дочерняя)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'mock_data' => [
            'JIRA' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/rest/api/2/issue/COMI-17063',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            "application/json;charset=UTF-8"
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/JIRA/case1.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            "requestParameters" => "?issueKey=COMI-17063",
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 9,
                            "type_id" => 2,
                            "supervisor_id" => 23,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "COMI-17063 замеры Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)",
                            "description" => "Ссылка на JIRA: https://sd.local/servicedesk/customer/portal/106/COMI-17063 
 Описание: Добрый деньпросьба уточнить замеры по 2м товарам&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517) и&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)Длина (от шеи до низа)Длина (от шеи до шагового узла)Длина внутреннего шва брюк Длина рукаваПОТ 

 Комментарии: 
Закружная Виктория (2020-09-22 12:48:48): 
 &nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)

Длина (от шеи до низа)-76 см

Длина (от шеи до шагового узла)-48 см

Длина внутреннего шва брюк-32 см

Длина рукава-38 от шеи

ПОТ-34 см

Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)
&nbsp;

Длина (от шеи до низа)-74см

Длина (от шеи до шагового узла)-45&nbsp;см

Длина внутреннего шва брюк-30&nbsp;см

Длина рукава-35&nbsp;от шеи

ПОТ-34 см
 
",
                            "category_id" => 437,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "employee_code_1c" => null,
                            "child_count" => 1,
                            "photo_load_status" => 0
                        ],
                        [
                            "id" => 2,
                            "author_id" => 9,
                            "type_id" => 2,
                            "supervisor_id" => 23,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            //"created_at" =>
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "COMI-17063 замеры Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517) (Дополнение)",
                            "description" => "Ссылка на JIRA: https://sd.local/servicedesk/customer/portal/106/COMI-17063 
 Описание: Добрый деньпросьба уточнить замеры по 2м товарам&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517) и&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)Длина (от шеи до низа)Длина (от шеи до шагового узла)Длина внутреннего шва брюк Длина рукаваПОТ 

 Комментарии: 
Закружная Виктория (2020-09-22 12:48:48): 
 &nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)

Длина (от шеи до низа)-76 см

Длина (от шеи до шагового узла)-48 см

Длина внутреннего шва брюк-32 см

Длина рукава-38 от шеи

ПОТ-34 см

Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)
&nbsp;

Длина (от шеи до низа)-74см

Длина (от шеи до шагового узла)-45&nbsp;см

Длина внутреннего шва брюк-30&nbsp;см

Длина рукава-35&nbsp;от шеи

ПОТ-34 см
 
",
                            "category_id" => 437,
                            "seller_id" => 5,
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
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" =>
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Новая заявка Jira COMI при наличии другой заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'mock_data' => [
            'JIRA' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/rest/api/2/issue/COMI-22605',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            "application/json;charset=UTF-8"
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/JIRA/case3.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            "requestParameters" => "?issueKey=COMI-22605",
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 9,
                            "type_id" => 2,
                            "supervisor_id" => 23,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "COMI-17063 замеры Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)",
                            "description" => "Ссылка на JIRA: https://sd.local/servicedesk/customer/portal/106/COMI-17063 
 Описание: Добрый деньпросьба уточнить замеры по 2м товарам&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517) и&nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)Длина (от шеи до низа)Длина (от шеи до шагового узла)Длина внутреннего шва брюк Длина рукаваПОТ 

 Комментарии: 
Закружная Виктория (2020-09-22 12:48:48): 
 &nbsp;Зимний комбинезон Be easy Ликки 20SD2-19V12 86 см Светло-розовый (2200000054524)

Длина (от шеи до низа)-76 см

Длина (от шеи до шагового узла)-48 см

Длина внутреннего шва брюк-32 см

Длина рукава-38 от шеи

ПОТ-34 см

Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)
&nbsp;

Длина (от шеи до низа)-74см

Длина (от шеи до шагового узла)-45&nbsp;см

Длина внутреннего шва брюк-30&nbsp;см

Длина рукава-35&nbsp;от шеи

ПОТ-34 см
 
",
                            "category_id" => 437,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0
                        ],
                        [
                            "id" => 2,
                            "author_id" => 9,
                            "type_id" => 2,
                            "supervisor_id" => 23,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
//                            "created_at" => "2020-11-04 08:20:28",
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "COMI-22605 Комбинезон одноразовый Вива-Трейд с капюшоном ХХL Белый (2000014659810)",
                            "description" => "Ссылка на JIRA: https://sd.local/servicedesk/customer/portal/106/COMI-22605 
 Описание: Добрый день колеги подавалась заявка на уточнение размера&nbsp;ХХL в обращении&nbsp;COMI-22082Выпредоставили замеры и указаи что они соответствуют размеру:Закружная Виктория28/окт/20 9:42Доброе утро!хххлДлина изделия 176см.длина рукава 60см.об.груди 144см.внутренний шаг 80см.об.талии128см.Тоесть,&nbsp;замеры для ХХХL, не на тот размер, уточните пожалуйста для&nbsp;ХХL 

 Комментарии: 
Закружная Виктория (2020-10-30 11:47:19): 
 Здраствуйте!
Длина изделия 169см.
длина рукава 59см.
об.груди 136см.
внутренний шов 77см.
об.талии 126см.
ххл
 
",
                            "category_id" => 437,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
//                            "last_change_status_date" => "2020-11-04 10:20:28",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Запрос без указания проекта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "requestParameters" => "?issueKey",
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Неподдерживаемый проект: "
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Запрос с указанием неподдерживаемого проекта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "requestParameters" => "?issueKey=BPM-1",
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Неподдерживаемый проект: BPM"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Пустой запрос',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "requestParameters" => "",
            "responseCode" => 400,
            "responseBody" => [
                "name" => "Bad Request",
                "message" => "Отсутствуют обязательные параметры: issueKey",
                "code" => 0,
                "status" => 400,
                "type" => "yii\\web\\BadRequestHttpException"
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

];