<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
//                "id" => 1,
                "author_id" => 4,
                "type_id" => 1,
                "supervisor_id" => 6,
                "manager_id" => null,
                "status" => 1,
                "direction" => 1,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "description" => 'description',
                "attachments" => '[]',
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
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "difficulty" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
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
                'field_id' => 8,
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
                'value' => 2,
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
        ],
        "request_comments" => [
            [
                //"id" => 1,
                "request_id" => 1,
                "user_id" => 4,
                "created_at" => "2020-01-01 00:00:01",
                "updated_at" => null,
                "comment" => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
                "attachments" => null,
                "status" => 1
            ]
        ],
        "request_comments_history" => [],
        'notification_settings' => [],
        "user_notifications" => [],
        "request_status_history" => [],
        "priorities" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/priorities.php',
    ],
];