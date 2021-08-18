<?php

use Codeception\Module\TestHelper;
return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                "id" => 1,
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
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => '',
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => '2020-01-01 00:00:03',
                "actual_finish_date" => '2020-01-01 00:00:04',
                "supervisor_process_date" => '2020-01-01 00:00:02',
                "supervisor_check_date" => null,
                "result_comment" => 'Комментарий к результату задачи',
                "supervisor_comment" => '',
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 6,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}',
                "cross_check_status" => 1,
                "cross_check_manager_id" => 12,
                "previous_status" => 6,
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 1,
                'value' => 1,
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
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 56,
                'value' => 25,
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
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 100,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 0,
            ],
        ],
        "report_periods" => [[]],
        "request_errors" => [],
        'notification_settings' => [],
        "user_notifications" => [],
        "request_status_history" => [],
        "categories" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values_errors.php',
        "difficulty_coefs" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "reasons" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        "requests_reasons" => [
            [
                "request_id" => 1,
                "reason_id" => 14
            ],
            [
                "request_id" => 1,
                "reason_id" => 6
            ],
            [
                "request_id" => 1,
                "reason_id" => 7
            ],
        ],
        "auth.teams" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        "priorities" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
    ]
];