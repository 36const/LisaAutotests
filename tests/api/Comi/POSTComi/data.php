<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка Jira COMI',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            'JIRA' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => 'https://sd.local/rest/api/2/issue/COMI-17063',
//                    'queryStringParameters' => [
//                        'record_type' => ["0"]
//                    ]
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
            'requestBody' => [],
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
                            "attachments" => '[]',
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
                            "difficulty" => null,
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

];