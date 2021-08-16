<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'notification_settings' => [
            [
                //'id' => 1,
                'user_id' => 4,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "30", "53", "54", "67", "supervisor_id", "description", "priority"]',
                'statuses_for_notification' => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}',
                'url_id' => 1,
            ],
            [
                //'id' => 2,
                'user_id' => 6,
                'types_for_notification' => '{"create": 1, "comment": 2, "mention": "1", "manager_id": 0, "attachments": 1, "supervisor_id": 0}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 0, "2": 1, "3": 2, "4": 2, "5": 1, "6": 0, "7": 0, "8": 0, "9": 0, "11": 0}',
                'url_id' => 0,
            ],
            [
                //'id' => 3,
                'user_id' => 11,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                'url_id' => 0,
            ],
        ]
    ],
];