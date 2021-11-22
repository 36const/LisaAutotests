<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => (include __DIR__ . '/case.php')['lisa_fixtures']['requests'],
        'requests_fields' => (include __DIR__ . '/case.php')['lisa_fixtures']['requests_fields'],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'notification_settings' => [
            [
                //'id' => 1,
                'user_id' => 4,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 2,
                'user_id' => 6,
                'types_for_notification' => '{"create": 1, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 3,
                'user_id' => 12,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "1", "manager_id": 2, "attachments": 1, "supervisor_id": 1}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 1, "2": 1, "3": 1, "4": 1, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
            ],
            [
                //'id' => 4,
                'user_id' => 17,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
            ],
        ],
        'observers' => [
            [
                'request_id' => 1,
                'user_id' => 17
            ],
        ],
        'user_notifications' => [],
        'requests_reasons' => [],
        'request_status_history' => [
            [
//                "id" => 1,
                'request_id' => 1,
                'user_id' => 4,
                'old_status' => 5,
                'new_status' => 6,
                'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                'manager_id' => 11,
                'reasons' => null
            ]
        ],
        'transition_info' => [],
        'auto_diff_log' => [],
    ]
];