<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
//                "id" => 1,
                "author_id" => 4,
                "type_id" => 4,
                "supervisor_id" => 33,
                "manager_id" => 11,
                "status" => 6,
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
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => '2020-01-01 00:00:03',
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => '',
                "supervisor_comment" => '',
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 4,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
                "cross_check_status" => '0',
                "cross_check_manager_id" => null,
            ],
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 1,
                'value' => 1,
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
                'value' => 0,
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
        "requests_reasons" => [],
        "request_status_history" => [
            [
//                "id" => 1,
                "request_id" => 1,
                "user_id" => 4,
                "old_status" => 5,
                "new_status" => 6,
                "reason_id" => null,
                "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                "manager_id" => 11,
                "reasons" => null
            ]
        ],
        "transition_info" => [],
        "observers" => [],
        "categories" =>include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "reasons" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
    ]
];