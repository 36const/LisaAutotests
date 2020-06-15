<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
//                "id" => 3,
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
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 6,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}',
                "cross_check_status" => '0',
                "cross_check_manager_id" => null,
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
                'request_id' => 1,
                'field_id' => 146,
                'value' => null,
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => null,
            ],
        ],
        "report_periods" => [[]],
        "request_errors" => [],
        'notification_settings' => [],
        "user_notifications" => [],
        "request_status_history" => [],
        "observers" => [],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/difficulty_coefs.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php'
    ],
];