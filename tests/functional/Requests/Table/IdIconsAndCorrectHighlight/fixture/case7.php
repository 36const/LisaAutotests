<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
                "id" => 11,
                "author_id" => 4,
                "type_id" => 1,
                "supervisor_id" => 5,
                "manager_id" => null,
                "status" => 8,
                "direction" => 2,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => "2020-01-01 00:00:00",
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
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
                "last_change_status_date" => "2020-08-20 14:21:10",
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
                "photo_load_status" => 1
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 11,
                "field_id" => 15,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 19,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 8,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 53,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 143,
                "value" => "0"
            ],
        ],
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "grid_settings" => [],
        "request_attachments" => []
    ],
];