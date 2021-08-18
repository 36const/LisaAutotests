<?php

use Codeception\Module\TestHelper;
return [
    "lisa_fixtures" => [
        'requests' => [
            [
//                "id" => 1,
                "author_id" => 4,
                "type_id" => 4,
                "supervisor_id" => 33,
                "manager_id" => 11,
                "status" => 8,
                "direction" => 0,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => '',
                "amount_to_work" => 10,
                "subject" => "Группировка товаров (Определяется типом задачи)",
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
                "team_direction" => 4,
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
                'field_id' => 31,
                'value' => 48,
            ],
            [
                'request_id' => 1,
                'field_id' => 32,
                'value' => 52,
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
                'field_id' => 61,
                'value' => 210,
            ],
            [
                'request_id' => 1,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 91,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 93,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 94,
                'value' => 300,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 116,
                'value' => 10,
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
            [
                'request_id' => 1,
                'field_id' => 161,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 162,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 163,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 64,
                'value' => 118.2,
            ],
            [
                'request_id' => 1,
                'field_id' => 164,
                'value' => 0.7,
            ],
            [
                'request_id' => 1,
                'field_id' => 165,
                'value' => 1.5,
            ],
            [
                'request_id' => 1,
                'field_id' => 166,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 167,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 168,
                'value' => 30,
            ],
            [
                'request_id' => 1,
                'field_id' => 169,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 170,
                'value' => 0.7,
            ],
            [
                'request_id' => 1,
                'field_id' => 171,
                'value' => 0.07,
            ],
            [
                'request_id' => 1,
                'field_id' => 172,
                'value' => 0.15,
            ],
            [
                'request_id' => 1,
                'field_id' => 173,
                'value' => 0.1,
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
        "formula_coefs" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/formula_coefs.php',
        "goods_in_groups_coefs" => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/goods_in_groups_coefs.php',
    ]
];