<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //"id" => 1,
                "author_id" => 4,
                "type_id" => 13,
                "supervisor_id" => 35,
                "manager_id" => 11,
                "status" => 8,
                "direction" => 0,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => '',
                "amount_to_work" => 10,
                "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                "description" => 'description',
                "attachments" => '[]',
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => '',
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
                "result_comment" => 'Частично выполнена',
                "supervisor_comment" => '',
                //"last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 6,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}',
            ],
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
                'value' => 66,
            ],
            [
                'request_id' => 1,
                'field_id' => 27,
                'value' => 24,
            ],
            [
                'request_id' => 1,
                'field_id' => 47,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 48,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 1,
                'field_id' => 54,
                'value' => 2,
            ],
            [
                'request_id' => 1,
                'field_id' => 56,
                'value' => 50,
            ],
            [
                'request_id' => 1,
                'field_id' => 62,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 63,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 65,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 70,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 86,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 87,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 88,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 100,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 102,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 121,
                'value' => 'http://gomer.local/bpm/request/to-correction?id=1',
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 10,
            ],
        ],
        "report_periods" => [[]],
        "request_errors" => [
            [
                'id' => 1,
                'request_id' => 1,
                'manager_id' => 11,
                'errors_count' => 10,
                'items_with_errors' => 10,
                'field_value_id' => 138,
                'comment' => 'comment',
                'status' => 0,
                'create_ts' => '2020-01-01 00:00:10',
                'correction_date' => null
            ]
        ],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "field_values" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/difficulty_coefs.php',
        "markets_supervisors" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/markets_supervisors.php',
        "reasons" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/reasons.php',
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php'
    ],
];