<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление значения из поля "Причина", сохранение заблокированного значения, автоперевод при очистке поля причин',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                "lisa_fixtures" => [
                    "requests" => [
                        [
                            "id" => 5,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 37,
                            "manager_id" => 11,
                            "status" => 7,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => "2020-02-01 00:00:00",
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => "Ожидать",
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => "2020-01-01 00:00:03",
                            "actual_finish_date" => null,
                            "supervisor_process_date" => "2020-01-01 00:00:02",
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => "Комментарий",
                            "last_change_status_date" => date("Y-m") . "-07 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 5,
                            "reason_id" => 5
                        ],
                    ]
                ],
            ],
            'db_2' => [
                "lisa_fixtures" => [
                    "requests" => [
                        [
                            "id" => 5,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 37,
                            "manager_id" => 11,
                            "status" => 6,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => "2020-02-01 00:00:00",
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => "Ожидать",
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => "2020-01-01 00:00:03",
                            "actual_finish_date" => null,
                            "supervisor_process_date" => "2020-01-01 00:00:02",
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => "Комментарий",
                            "last_change_status_date >" => date("Y-m-d"),
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}'
                        ],
                    ],
                    'requests_reasons' => []
                ],
            ],
        ]
    ],
];
