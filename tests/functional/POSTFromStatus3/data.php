<?php

return [
    'case1' => [
        'settings' => [
            'description' => 'Перевод из "Требует изменений" в "Ожидает проверки условий"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestUpdateBody' => [
                'RequestField[111]' => '0',
                'RequestField[121]' => '',
                'RequestField[15]' => '1',
                'RequestField[1]' => '1',
                'RequestField[20]' => '',
                'RequestField[21]' => '',
                'RequestField[22]' => '',
                'RequestField[23]' => '',
                'RequestField[24]' => '',
                'RequestField[25]' => '',
                'RequestField[26]' => '',
                'RequestField[27]' => '',
                'RequestField[31]' => '',
                'RequestField[65]' => '0',
                'RequestField[66]' => '0',
                'RequestField[68]' => '0',
                'RequestField[69]' => '0',
                'RequestField[70]' => '0',
                'RequestField[71]' => '0',
                'RequestField[76]' => '0',
                'RequestField[77]' => '0',
                'RequestField[88]' => '0',
                'RequestField[8]' => '1',
                'RequestField[93]' => '0',
                'RequestField[94]' => '0',
                'RequestField[9]' => '1',
                'Request[addedAttachments]' => '[]',
                'Request[amount_to_work]' => '10',
                'Request[attachment_folder]' => '9c4f8356ab2ddca8b9dcafb8b511df50',
                'Request[author_id]' => '2',
                'Request[category_id]' => '1',
                'Request[correction_comment]' => '',
                'Request[deletedAttachments]' => '[]',
                'Request[description]' => 'description',
                'Request[manager_id]' => '',
                'Request[planned_start_date]' => '',
                'Request[priority]' => '2',
                'Request[recommendations]' => '',
                'Request[report_period_id]' => '',
                'Request[result_comment]' => '',
                'Request[seller_id]' => '83',
                'Request[subject]' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'Request[supervisor_comment]' => '',
                'Request[supervisor_id]' => '4',
                'Request[uploadedFiles][]' => '',
                '_csrf-backend' => null
            ],
            'requestChangeReasonBody' => [
                'Request[correction_comment]' => 'Вернуть на проверку',
                'Request[reason_id]' => '15',
                'Request[status]' => '1',
                "_csrf-backend" => null,
                'keys',
                'keys',
            ],

            'db' => [
                'requests' => [
                    "id" => 1,
                    "author_id" => 2,
                    "type_id" => 1,
                    "supervisor_id" => 4,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 1,
                    "priority" => 2,
                    "awaiting_correction" => 0,
                    "created_at" => '2020-01-01 00:00:00',
                    "correction_comment" => 'Вернуть на проверку',
                    "amount_to_work" => 10,
                    "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                    "description" => 'description',
                    "attachments" => '[]',
                    "category_id" => 1,
                    "seller_id" => 83,
                    "recommendations" => '',
                    "reason_id" => 15,
                    "reason" => 'Затребовать изменения',
                    "parent_id" => null,
                    "planned_start_date" => null,
                    "planned_finish_date" => null,
                    "actual_start_date" => null,
                    "actual_finish_date" => null,
                    "supervisor_process_date" => '2020-01-01 00:00:02',
                    "supervisor_check_date" => null,
                    "difficulty" => null,
                    "result_comment" => '',
                    "supervisor_comment" => '',
                    //"last_change_status_date" => "2020-01-01 00:00:01",
                    "team_direction" => 3,
                    "report_period_id" => null,
                    "sync_source_id" => null,
                    "sv_report_periods" => '{"1": 1}',
                ],

                'requests_fields' => [
                    [
                        'request_id' => 1,
                        'field_id' => 1,
                        'value' => 1,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 8,
                        'value' => 1,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 9,
                        'value' => 1,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 15,
                        'value' => 1,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 49,
                        'value' => 0,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 50,
                        'value' => 0,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 51,
                        'value' => 0,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 52,
                        'value' => 15,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 53,
                        'value' => 1,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 54,
                        'value' => 1,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 60,
                        'value' => 0,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 64,
                        'value' => 0,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 101,
                        'value' => null,
                    ],
                    [
                        'request_id' => 1,
                        'field_id' => 122,
                        'value' => null,
                    ],
                ]
            ]
        ]
    ],
];
