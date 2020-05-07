<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание фильтра без доп. полей; события и статусы - 2 ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'NotificationSettings[statuses_for_notification][11]' => '2',
                'NotificationSettings[statuses_for_notification][1]' => '2',
                'NotificationSettings[statuses_for_notification][2]' => '2',
                'NotificationSettings[statuses_for_notification][3]' => '2',
                'NotificationSettings[statuses_for_notification][4]' => '2',
                'NotificationSettings[statuses_for_notification][5]' => '2',
                'NotificationSettings[statuses_for_notification][6]' => '2',
                'NotificationSettings[statuses_for_notification][7]' => '2',
                'NotificationSettings[statuses_for_notification][8]' => '2',
                'NotificationSettings[statuses_for_notification][9]' => '2',
                'NotificationSettings[types_for_notification][attachments]' => '2',
                'NotificationSettings[types_for_notification][comment]' => '2',
                'NotificationSettings[types_for_notification][create]' => '2',
                'NotificationSettings[types_for_notification][manager_id]' => '2',
                'NotificationSettings[types_for_notification][supervisor_id]' => '2',
                '_csrf-backend' => null,
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "types_for_notification" => '{"create": "2", "comment": "2", "manager_id": "2", "attachments": "2", "supervisor_id": "2"}',
                            "fields_for_complete" => '[]',
                            "statuses_for_notification" => '{"1": "2", "2": "2", "3": "2", "4": "2", "5": "2", "6": "2", "7": "2", "8": "2", "9": "2", "11": "2"}'
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание фильтра с доп. полями; события - 1, статусы - 2 ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'NotificationSettings[fields_for_complete]' => ['1', '2', '20', '29', '30', '53', '54', '67', '101', '122'],
                'NotificationSettings[statuses_for_notification][11]' => '2',
                'NotificationSettings[statuses_for_notification][1]' => '2',
                'NotificationSettings[statuses_for_notification][2]' => '2',
                'NotificationSettings[statuses_for_notification][3]' => '2',
                'NotificationSettings[statuses_for_notification][4]' => '2',
                'NotificationSettings[statuses_for_notification][5]' => '2',
                'NotificationSettings[statuses_for_notification][6]' => '2',
                'NotificationSettings[statuses_for_notification][7]' => '2',
                'NotificationSettings[statuses_for_notification][8]' => '2',
                'NotificationSettings[statuses_for_notification][9]' => '2',
                'NotificationSettings[types_for_notification][attachments]' => '1',
                'NotificationSettings[types_for_notification][comment]' => '2',
                'NotificationSettings[types_for_notification][create]' => '1',
                'NotificationSettings[types_for_notification][manager_id]' => '1',
                'NotificationSettings[types_for_notification][supervisor_id]' => '1',
                '_csrf-backend' => null,
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "types_for_notification" => '{"create": "1", "comment": "2", "manager_id": "1", "attachments": "1", "supervisor_id": "1"}',
                            "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            "statuses_for_notification" => '{"1": "2", "2": "2", "3": "2", "4": "2", "5": "2", "6": "2", "7": "2", "8": "2", "9": "2", "11": "2"}'
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание фильтра с доп. полями чек-боксами; события - 0, статусы - 1 ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'NotificationSettings[fields_for_complete]' => ['3', '4', '6', '7', '8', '9', '10', '11', '12', '13'],
                'NotificationSettings[statuses_for_notification][11]' => '1',
                'NotificationSettings[statuses_for_notification][1]' => '1',
                'NotificationSettings[statuses_for_notification][2]' => '1',
                'NotificationSettings[statuses_for_notification][3]' => '2',
                'NotificationSettings[statuses_for_notification][4]' => '2',
                'NotificationSettings[statuses_for_notification][5]' => '1',
                'NotificationSettings[statuses_for_notification][6]' => '1',
                'NotificationSettings[statuses_for_notification][7]' => '1',
                'NotificationSettings[statuses_for_notification][8]' => '1',
                'NotificationSettings[statuses_for_notification][9]' => '1',
                'NotificationSettings[types_for_notification][attachments]' => '1',
                'NotificationSettings[types_for_notification][comment]' => '2',
                'NotificationSettings[types_for_notification][create]' => '1',
                'NotificationSettings[types_for_notification][manager_id]' => '0',
                'NotificationSettings[types_for_notification][supervisor_id]' => '0',
                '_csrf-backend' => null,
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "types_for_notification" => '{"create": "1", "comment": "2", "manager_id": "1", "attachments": "1", "supervisor_id": "1"}',
                            "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            "statuses_for_notification" => '{"1": "2", "2": "2", "3": "2", "4": "2", "5": "2", "6": "2", "7": "2", "8": "2", "9": "2", "11": "2"}'
                        ],
                    ]
                ]
            ]
        ]
    ],

];
