<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление нотификаций старше 1 месяца',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 1,
                            "created_at" => date("Y-m-d H:i:s"),
                            "request_id" => 1,
                            "priority" => 2,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "request_id" => 1,
                            "priority" => 2,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at" => date("Y-m-d H:i:s", strtotime('-1 week')),
                            "request_id" => 1,
                            "priority" => 2,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at" => date("Y-m-d H:i:s", strtotime('-2 week')),
                            "request_id" => 1,
                            "priority" => 2,
                        ],
                        [
                            "id" => 5,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at" => date("Y-m-d H:i:s", strtotime('-3 week')),
                            "request_id" => 1,
                            "priority" => 2,
                        ],
                        [
                            "id" => 6,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at" => date("Y-m-d H:i:s", strtotime('-1 month')),
                            "request_id" => 1,
                            "priority" => 2,
                        ],
                        [
                            "id" => 7,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at" => date("Y-m-d H:i:s", strtotime('-1 month 1 day')),
                            "request_id" => 1,
                            "priority" => 2,
                        ],
                        [
                            "id" => 12,
                            "user_id" => 34,
                            "notification" => '',
                            "status" => 0,
                            "created_at" => date("Y-m-d H:i:s", strtotime('-1 minute')),
                            "request_id" => 2,
                            "priority" => 2,
                        ]
                    ],
                ]
            ],
        ]
    ],
];
