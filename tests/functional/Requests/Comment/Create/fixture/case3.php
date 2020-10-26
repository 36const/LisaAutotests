<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //"id" => 1,
                "author_id" => 4,
                "type_id" => 1,
                "supervisor_id" => 6,
                "manager_id" => 11,
                "status" => 6,
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
                "actual_start_date" => '2020-01-01 00:00:03',
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
        "request_comments" => [],
        "request_comments_history" => [],
        'notification_settings' => [
            [
                //'id' => 1,
                "user_id" => 4,
                "types_for_notification" => '{"create": "2", "comment": "2", "mention": "2", "manager_id": "2", "attachments": "2", "supervisor_id": "2"}',
                "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                "statuses_for_notification" => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 2,
                "user_id" => 6,
                "types_for_notification" => '{"create": "2", "comment": "2", "mention": "1", "manager_id": "2", "attachments": "2", "supervisor_id": "2"}',
                "fields_for_complete" => '["142", "143", "144", "145", "146", "147", "149", "150", "151", "157"]',
                "statuses_for_notification" => '{"1": "2", "2": "2", "3": "2", "4": "2", "5": "2", "6": "2", "7": "2", "8": "2", "9": "2", "11": "2"}'
            ],
            [
                //'id' => 3,
                "user_id" => 11,
                "types_for_notification" => '{"create": "1", "comment": "2", "mention": "2", "manager_id": "1", "attachments": "1", "supervisor_id": "1"}',
                "fields_for_complete" => '[]',
                "statuses_for_notification" => '{"1": "1", "2": "1", "3": "2", "4": "2", "5": "1", "6": "2", "7": "1", "8": "1", "9": "1", "11": "1"}'
            ],
            [
                //'id' => 4,
                "user_id" => 15,
                "types_for_notification" => '{"create": "1", "comment": "2", "mention": "1", "manager_id": "0", "attachments": "1", "supervisor_id": "0"}',
                "fields_for_complete" => '[]',
                "statuses_for_notification" => '{"1": "0", "2": "0", "3": "2", "4": "2", "5": "0", "6": "0", "7": "0", "8": "0", "9": "0", "11": "0"}'
            ],
            [
                //'id' => 5,
                "user_id" => 17,
                "types_for_notification" => '{"create": "1", "comment": "2", "mention": "2", "manager_id": "0", "attachments": "1", "supervisor_id": "0"}',
                "fields_for_complete" => '["4", "8", "9", "26", "29", "30", "32", "69", "5", "159"]',
                "statuses_for_notification" => '{"1": "0", "2": "0", "3": "2", "4": "2", "5": "0", "6": "0", "7": "0", "8": "0", "9": "0", "11": "0"}'
            ],
        ],
        'observers' => [
            [
                "request_id" => 1,
                "user_id" => 15
            ],
            [
                "request_id" => 1,
                "user_id" => 17
            ]
        ],
        "user_notifications" => [],
        "request_status_history" => [],
        "priorities" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/priorities.php',
    ],
];