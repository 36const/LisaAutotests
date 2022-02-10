<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание автораспределения для "Определяется типом задачи" тип 4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'request_direction' => '0',
                'request_type_ids' => [
                    0 => '4',
                ],
                'field_ids' => [
                ],
                'seller_ids' => [
                ],
                'user_positions' => [
                ],
                'added_users' => [
                ],
                'removed_users' => [
                ],
                'lisa_category_ids' => [
                    0 => 1,
                    1 => 2,
                ],
                'rz_category_ids' => [
                    0 => 2560747,
                ],
                'author_id' => 6,
                'team_ids' => [
                ],
                'status' => 1,
                'is_system_rule' => NULL,
                'distribute_by' => 3,
                'weight' => NULL,
                'select_order' => [
                ],
                'statuses_for_order' => [
                ],
                'observers' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'request_direction' => '0',
                    'request_type_ids' => [
                        0 => '4',
                    ],
                    'seller_ids' => [
                    ],
                    'added_users' => [
                    ],
                    'removed_users' => [
                    ],
                    'lisa_category_ids' => [
                        0 => 1,
                        1 => 2,
                    ],
                    'rz_category_ids' => [
                        0 => 2560747,
                    ],
                    'author_id' => 6,
                    'team_ids' => [
                    ],
                    'status' => 1,
                    'is_system_rule' => NULL,
                    'distribute_by' => 3,
                    'weight' => NULL,
                    'select_order' => [
                    ],
                    'statuses_for_order' => [
                    ],
                    'observers' => [
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'sv_distribution' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['sv_distribution'],
                        [
                            [
                                'id' => 7,
                                'request_direction' => 0,
                                'request_type_ids' => '["4"]',
                                'field_ids' => '[]',
                                'seller_ids' => '[]',
                                'user_positions' => '[]',
                                'added_users' => '[]',
                                'removed_users' => '[]',
                                'lisa_category_ids' => '["1", "2"]',
                                'rz_category_ids' => '["2560747"]',
                                'author_id' => 6,
                                'team_ids' => '[]',
                                'status' => 1,
                                'is_system_rule' => false,
                                'distribute_by' => 3,
                                'weight' => 7,
                                'select_order' => NULL,
                                'statuses_for_order' => '[]',
                                'observers' => '[]',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'sv_distribution',
                            'entity_id' => 7,
                            'old_value' => '[]',
                            'new_value' => '{"status": 1, "weight": 7, "team_ids": "[]", "author_id": 6, "field_ids": "[]", "observers": "[]", "seller_ids": "[]", "added_users": "[]", "select_order": null, "distribute_by": 3, "removed_users": "[]", "is_system_rule": false, "user_positions": "[]", "rz_category_ids": "[\\"2560747\\"]", "request_type_ids": "[\\"4\\"]", "lisa_category_ids": "[\\"1\\",\\"2\\"]", "request_direction": "0", "statuses_for_order": "[]"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание автораспределения для "Определяется типом задачи" типы кроме 4',
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
                    'sv_distribution' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['sv_distribution'],
                        [
                            [
                                'id' => 7,
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
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'sv_distribution',
                            'entity_id' => 7,
                            'old_value' => '[]',
                            'new_value' => '{"status": 1, "weight": 21, "team_ids": "[\"15\",\"16\"]", "author_id": null, "field_ids": "[\"2\"]", "observers": "[]", "seller_ids": "[]", "added_users": "[\"11\",\"12\"]", "select_order": 0, "distribute_by": 4, "removed_users": "[\"13\",\"14\"]", "is_system_rule": false, "user_positions": "[\"supervisor\",\"productManager\"]", "rz_category_ids": "[]", "request_type_ids": "[\"7\",\"8\",\"14\",\"10\"]", "lisa_category_ids": "[\"2\"]", "request_direction": "0", "statuses_for_order": "[\"1\",\"2\",\"3\",\"5\",\"6\"]"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание автораспределения для "Работа с товарами Розетки"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'request_direction' => '1',
                'request_type_ids' => [
                    0 => '1',
                    1 => '2',
                ],
                'field_ids' => [
                    0 => 1,
                    1 => 15,
                ],
                'seller_ids' => [
                    0 => 5,
                    1 => 72141,
                    2 => 128603,
                    3 => 124276,
                ],
                'user_positions' => [
                ],
                'added_users' => [
                ],
                'removed_users' => [
                ],
                'lisa_category_ids' => [
                ],
                'rz_category_ids' => [
                ],
                'author_id' => NULL,
                'team_ids' => [
                ],
                'status' => 1,
                'is_system_rule' => NULL,
                'distribute_by' => 2,
                'weight' => NULL,
                'select_order' => [
                ],
                'statuses_for_order' => [
                ],
                'observers' => [
                    0 => 11,
                    1 => 17,
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'request_direction' => '1',
                    'request_type_ids' => [
                        0 => '1',
                        1 => '2',
                    ],
                    'seller_ids' => [
                        0 => 5,
                        1 => 72141,
                        2 => 128603,
                        3 => 124276,
                    ],
                    'added_users' => [
                    ],
                    'removed_users' => [
                    ],
                    'lisa_category_ids' => [
                    ],
                    'rz_category_ids' => [
                    ],
                    'author_id' => NULL,
                    'team_ids' => [
                    ],
                    'status' => 1,
                    'is_system_rule' => NULL,
                    'distribute_by' => 2,
                    'weight' => NULL,
                    'select_order' => [
                    ],
                    'statuses_for_order' => [
                    ],
                    'observers' => [
                        0 => 11,
                        1 => 17,
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'sv_distribution' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['sv_distribution'],
                        [
                            [
                                'id' => 7,
                                'request_direction' => 1,
                                'request_type_ids' => '["1", "2"]',
                                'field_ids' => '["1", "15"]',
                                'seller_ids' => '["5", "72141", "128603", "124276"]',
                                'user_positions' => '[]',
                                'added_users' => '[]',
                                'removed_users' => '[]',
                                'lisa_category_ids' => '[]',
                                'rz_category_ids' => '[]',
                                'author_id' => NULL,
                                'team_ids' => '[]',
                                'status' => 1,
                                'is_system_rule' => false,
                                'distribute_by' => 2,
                                'weight' => 13,
                                'select_order' => NULL,
                                'statuses_for_order' => '[]',
                                'observers' => '["11", "17"]',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'sv_distribution',
                            'entity_id' => 7,
                            'old_value' => '[]',
                            'new_value' => '{"status": 1, "weight": 13, "team_ids": "[]", "author_id": null, "field_ids": "[\"1\",\"15\"]", "observers": "[\"11\",\"17\"]", "seller_ids": "[\"5\",\"72141\",\"128603\",\"124276\"]", "added_users": "[]", "select_order": null, "distribute_by": 2, "removed_users": "[]", "is_system_rule": false, "user_positions": "[]", "rz_category_ids": "[]", "request_type_ids": "[\"1\",\"2\"]", "lisa_category_ids": "[]", "request_direction": "1", "statuses_for_order": "[]"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание автораспределения для "Работа с товарами Маркета"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'request_direction' => '2',
                'request_type_ids' => [
                    0 => '3',
                    1 => '2',
                    2 => '1',
                ],
                'field_ids' => [
                    0 => 160,
                ],
                'seller_ids' => [
                ],
                'user_positions' => [
                ],
                'added_users' => [
                ],
                'removed_users' => [
                ],
                'lisa_category_ids' => [
                ],
                'rz_category_ids' => [
                ],
                'author_id' => 16,
                'team_ids' => [
                ],
                'status' => 0,
                'is_system_rule' => NULL,
                'distribute_by' => 1,
                'weight' => 5,
                'select_order' => [
                ],
                'statuses_for_order' => [
                ],
                'observers' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'request_direction' => '2',
                    'request_type_ids' => [
                        0 => '3',
                        1 => '2',
                        2 => '1',
                    ],
                    'seller_ids' => [
                    ],
                    'added_users' => [
                    ],
                    'removed_users' => [
                    ],
                    'lisa_category_ids' => [
                    ],
                    'rz_category_ids' => [
                    ],
                    'author_id' => 16,
                    'team_ids' => [
                    ],
                    'status' => 0,
                    'is_system_rule' => NULL,
                    'distribute_by' => 1,
                    'weight' => 5,
                    'select_order' => [
                    ],
                    'statuses_for_order' => [
                    ],
                    'observers' => [
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'sv_distribution' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['sv_distribution'],
                        [
                            [
                                'id' => 7,
                                'request_direction' => 2,
                                'request_type_ids' => '["3", "2", "1"]',
                                'field_ids' => '["160"]',
                                'seller_ids' => '[]',
                                'user_positions' => '[]',
                                'added_users' => '[]',
                                'removed_users' => '[]',
                                'lisa_category_ids' => '[]',
                                'rz_category_ids' => '[]',
                                'author_id' => 16,
                                'team_ids' => '[]',
                                'status' => 0,
                                'is_system_rule' => false,
                                'distribute_by' => 1,
                                'weight' => 5,
                                'select_order' => NULL,
                                'statuses_for_order' => '[]',
                                'observers' => '[]',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'sv_distribution',
                            'entity_id' => 7,
                            'old_value' => '[]',
                            'new_value' => '{"status": 0, "weight": 5, "team_ids": "[]", "author_id": 16, "field_ids": "[\"160\"]", "observers": "[]", "seller_ids": "[]", "added_users": "[]", "select_order": null, "distribute_by": 1, "removed_users": "[]", "is_system_rule": false, "user_positions": "[]", "rz_category_ids": "[]", "request_type_ids": "[\"3\",\"2\",\"1\"]", "lisa_category_ids": "[]", "request_direction": "2", "statuses_for_order": "[]"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                    ],
                ],
            ]
        ]
    ],

];
