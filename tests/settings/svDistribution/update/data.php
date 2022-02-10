<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение правила автораспределения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'request_direction' => '0',
                'request_type_ids' => [
                    0 => '7',
                    1 => '8',
                    2 => '14',
                    3 => '10',
                ],
                'field_ids' => [
                    0 => 2,
                ],
                'seller_ids' => [
                ],
                'user_positions' => [
                    0 => 'supervisor',
                    1 => 'productManager',
                ],
                'added_users' => [
                    0 => 11,
                    1 => 12,
                ],
                'removed_users' => [
                    0 => 13,
                    1 => 14,
                ],
                'lisa_category_ids' => [
                    0 => 2,
                ],
                'rz_category_ids' => [
                ],
                'author_id' => NULL,
                'team_ids' => [
                    0 => 15,
                    1 => 16,
                ],
                'status' => 1,
                'is_system_rule' => NULL,
                'distribute_by' => 4,
                'weight' => NULL,
                'select_order' => 0,
                'statuses_for_order' => [
                    0 => '1',
                    1 => '2',
                    2 => '3',
                    3 => '5',
                    4 => '6',
                ],
                'observers' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'request_direction' => '0',
                    'request_type_ids' => [
                        0 => '7',
                        1 => '8',
                        2 => '14',
                        3 => '10',
                    ],
                    'seller_ids' => [
                    ],
                    'added_users' => [
                        0 => 11,
                        1 => 12,
                    ],
                    'removed_users' => [
                        0 => 13,
                        1 => 14,
                    ],
                    'lisa_category_ids' => [
                        0 => 2,
                    ],
                    'rz_category_ids' => [
                    ],
                    'author_id' => NULL,
                    'team_ids' => [
                        0 => 15,
                        1 => 16,
                    ],
                    'status' => 1,
                    'is_system_rule' => NULL,
                    'distribute_by' => 4,
                    'weight' => NULL,
                    'select_order' => 0,
                    'statuses_for_order' => [
                        0 => '1',
                        1 => '2',
                        2 => '3',
                        3 => '5',
                        4 => '6',
                    ],
                    'observers' => [
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'sv_distribution' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['sv_distribution'],
                        [
                            3 => [
                                'id' => 4,
                                'request_direction' => 0,
                                'request_type_ids' => '["7", "8", "14", "10"]',
                                'field_ids' => '["2"]',
                                'seller_ids' => '[]',
                                'user_positions' => '["supervisor", "productManager"]',
                                'added_users' => '["11", "12"]',
                                'removed_users' => '["13", "14"]',
                                'lisa_category_ids' => '["2"]',
                                'rz_category_ids' => '[]',
                                'author_id' => NULL,
                                'team_ids' => '["15", "16"]',
                                'status' => 1,
                                'is_system_rule' => false,
                                'distribute_by' => 4,
                                'weight' => 21,
                                'select_order' => 0,
                                'statuses_for_order' => '["1", "2", "3", "5", "6"]',
                                'observers' => '[]',
                            ],
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'sv_distribution',
                            'entity_id' => 4,
                            'old_value' => '{"weight": 1, "team_ids": "[\"16\"]", "field_ids": "[]", "added_users": "[]", "removed_users": "[]", "is_system_rule": true, "user_positions": "[\"supervisor\"]", "request_type_ids": "[\"7\", \"8\", \"13\", \"14\", \"15\"]", "lisa_category_ids": "[]", "statuses_for_order": "[\"2\", \"7\", \"1\", \"9\", \"8\"]"}',
                            'new_value' => '{"weight": 21, "team_ids": "[\"15\",\"16\"]", "field_ids": "[\"2\"]", "added_users": "[\"11\",\"12\"]", "removed_users": "[\"13\",\"14\"]", "is_system_rule": false, "user_positions": "[\"supervisor\",\"productManager\"]", "request_type_ids": "[\"7\",\"8\",\"14\",\"10\"]", "lisa_category_ids": "[\"2\"]", "statuses_for_order": "[\"1\",\"2\",\"3\",\"5\",\"6\"]"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

];
