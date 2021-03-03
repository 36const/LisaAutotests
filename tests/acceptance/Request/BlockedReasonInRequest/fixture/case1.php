<?php
return [
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
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                "reason" => "Ожидать",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => "2020-01-01 00:00:03",
                "actual_finish_date" => null,
                "supervisor_process_date" => "2020-01-01 00:00:02",
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => "Комментарий",
                "last_change_status_date" => date("Y-m-07 00:00:01"),
                "team_direction" => 5,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 5,
                "field_id" => 2,
                "value" => "1"
            ],
            [
                "request_id" => 5,
                "field_id" => 20,
                "value" => "66"
            ],
            [
                "request_id" => 5,
                "field_id" => 53,
                "value" => "2"
            ],
            [
                "request_id" => 5,
                "field_id" => 54,
                "value" => "2"
            ],
            [
                "request_id" => 5,
                "field_id" => 59,
                "value" => "0"
            ],
            [
                "request_id" => 5,
                "field_id" => 101,
                "value" => null
            ],
            [
                "request_id" => 5,
                "field_id" => 122,
                "value" => null
            ],
        ],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "reasons" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'requests_reasons' => [
            [
                "request_id" => 5,
                "reason_id" => 5
            ],
            [
                "request_id" => 5,
                "reason_id" => 4
            ],
        ],
    ],
];