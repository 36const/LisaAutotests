<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
//                "id" => 1,
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
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 6,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ]
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
            ]
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