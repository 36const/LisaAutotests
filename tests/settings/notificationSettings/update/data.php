<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение url',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'notify_setting_40ebeb8e3e8397c381478961fc882b097',
            ],
            'requestBody' => [
                'id' => 1,
                'user_id' => 4,
                'types_for_notification' => [
                    'create' => 2,
                    'comment' => 2,
                    'mention' => 2,
                    'manager_id' => 2,
                    'attachments' => 2,
                    'supervisor_id' => 2,
                ],
                'fields_for_complete' => [
                    0 => '1',
                    1 => '49',
                    2 => '50',
                    3 => '51',
                    4 => '53',
                    5 => '121',
                    6 => 'type_id',
                    7 => 'previous_status',
                    8 => 'description',
                    9 => 'status',
                ],
                'statuses_for_notification' => [
                    1 => 2,
                    2 => 2,
                    3 => 2,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    11 => 2,
                ],
                'url_id' => 0,
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 1,
                    'user_id' => 4,
                    'types_for_notification' => [
                        'create' => 2,
                        'comment' => 2,
                        'mention' => 2,
                        'manager_id' => 2,
                        'attachments' => 2,
                        'supervisor_id' => 2,
                    ],
                    'fields_for_complete' => [
                        0 => '1',
                        1 => '49',
                        2 => '50',
                        3 => '51',
                        4 => '53',
                        5 => '121',
                        6 => 'type_id',
                        7 => 'previous_status',
                        8 => 'description',
                        9 => 'status',
                    ],
                    'statuses_for_notification' => [
                        1 => 2,
                        2 => 2,
                        3 => 2,
                        4 => 2,
                        5 => 2,
                        6 => 2,
                        7 => 2,
                        8 => 2,
                        9 => 2,
                        11 => 2,
                    ],
                    'url_id' => 0,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'types_for_notification' => '{"create": 2, "comment": 2, "mention": 2, "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                            'fields_for_complete' => '["1", "49", "50", "51", "53", "121", "type_id", "previous_status", "description", "status"]',
                            'statuses_for_notification' => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}',
                            'url_id' => 0,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": "1", "manager_id": 0, "attachments": 1, "supervisor_id": 0}',
                            'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            'statuses_for_notification' => '{"1": 0, "2": 1, "3": 2, "4": 2, "5": 1, "6": 0, "7": 0, "8": 0, "9": 0, "11": 0}',
                            'url_id' => 0,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                            'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ],
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение дополнительных полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'notify_setting_40ebeb8e3e8397c381478961fc882b097',
            ],
            'requestBody' => [
                'id' => 1,
                'user_id' => 4,
                'types_for_notification' => [
                    'create' => 2,
                    'comment' => 2,
                    'mention' => 2,
                    'manager_id' => 2,
                    'attachments' => 2,
                    'supervisor_id' => 2,
                ],
                'fields_for_complete' => [
                    0 => '49',
                    1 => '53',
                    2 => 'type_id',
                    3 => '30',
                    4 => '29',
                ],
                'statuses_for_notification' => [
                    1 => 2,
                    2 => 2,
                    3 => 2,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    11 => 2,
                ],
                'url_id' => 1,
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 1,
                    'user_id' => 4,
                    'types_for_notification' => [
                        'create' => 2,
                        'comment' => 2,
                        'mention' => 2,
                        'manager_id' => 2,
                        'attachments' => 2,
                        'supervisor_id' => 2,
                    ],
                    'fields_for_complete' => [
                        0 => '49',
                        1 => '53',
                        2 => 'type_id',
                        3 => '30',
                        4 => '29',
                    ],
                    'statuses_for_notification' => [
                        1 => 2,
                        2 => 2,
                        3 => 2,
                        4 => 2,
                        5 => 2,
                        6 => 2,
                        7 => 2,
                        8 => 2,
                        9 => 2,
                        11 => 2,
                    ],
                    'url_id' => 1,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'types_for_notification' => '{"create": 2, "comment": 2, "mention": 2, "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                            'fields_for_complete' => '["49", "53", "type_id", "30", "29"]',
                            'statuses_for_notification' => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}',
                            'url_id' => 1,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": "1", "manager_id": 0, "attachments": 1, "supervisor_id": 0}',
                            'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            'statuses_for_notification' => '{"1": 0, "2": 1, "3": 2, "4": 2, "5": 1, "6": 0, "7": 0, "8": 0, "9": 0, "11": 0}',
                            'url_id' => 0,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                            'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ],
                    ]
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение событий и переводов по статусам и очистка доп. полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'notify_setting_40ebeb8e3e8397c381478961fc882b097',
            ],
            'requestBody' => [
                'id' => 1,
                'user_id' => 4,
                'types_for_notification' => [
                    'create' => 1,
                    'comment' => 2,
                    'mention' => 1,
                    'manager_id' => 0,
                    'attachments' => 1,
                    'supervisor_id' => 0,
                ],
                'fields_for_complete' => [],
                'statuses_for_notification' => [
                    1 => 0,
                    2 => 1,
                    3 => 2,
                    4 => 2,
                    5 => 0,
                    6 => 1,
                    7 => 0,
                    8 => 1,
                    9 => 0,
                    11 => 1,
                ],
                'url_id' => 1,
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 1,
                    'user_id' => 4,
                    'types_for_notification' => [
                        'create' => 1,
                        'comment' => 2,
                        'mention' => 1,
                        'manager_id' => 0,
                        'attachments' => 1,
                        'supervisor_id' => 0,
                    ],
                    'fields_for_complete' => [],
                    'statuses_for_notification' => [
                        1 => 0,
                        2 => 1,
                        3 => 2,
                        4 => 2,
                        5 => 0,
                        6 => 1,
                        7 => 0,
                        8 => 1,
                        9 => 0,
                        11 => 1,
                    ],
                    'url_id' => 1,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 0, "attachments": 1, "supervisor_id": 0}',
                            'fields_for_complete' => '[]',
                            'statuses_for_notification' => '{"1": 0, "2": 1, "3": 2, "4": 2, "5": 0, "6": 1, "7": 0, "8": 1, "9": 0, "11": 1}',
                            'url_id' => 1,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": "1", "manager_id": 0, "attachments": 1, "supervisor_id": 0}',
                            'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            'statuses_for_notification' => '{"1": 0, "2": 1, "3": 2, "4": 2, "5": 1, "6": 0, "7": 0, "8": 0, "9": 0, "11": 0}',
                            'url_id' => 0,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                            'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ],
                    ]
                ],
            ]
        ]
    ],

];
