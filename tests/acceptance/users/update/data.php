<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Редактирование пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    'auth.users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
                    'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                    'auth.user_access' => (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php'),
                ],
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php'),
                        [
                            12 => [
                                'id' => 13,
                                'name' => 'Менеджер Контентович 2А',
                                'login' => 'bpm_contentManager_2a',
                                'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                                'team' => 7,
                                'parent_id' => 23,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:35',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000013",
                                'positions' => '["contentManager"]',
                            ],
                            13 => [
                                'id' => 14,
                                'name' => 'Менеджер Контентович 2Б',
                                'login' => 'bpm_contentManager_2b',
                                'email' => 'bpm_contentManager_2b@rozetka.com.ua',
                                'team' => 7,
                                'parent_id' => 23,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:35',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000014",
                                'positions' => '["contentManager"]',
                            ],
                        ]
                    ),
                    'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                    'auth.user_access' => (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php'),
                ],
            ],
            'db_3' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php'),
                        [
                            9 => [
                                'id' => 10,
                                'name' => 'Супервайзер Начальникович 2',
                                'login' => 'bpm_supervisor_2',
                                'email' => 'bpm_supervisor_2@rozetka.com.ua',
                                'team' => 5,
                                'parent_id' => 1,
                                'position' => 'productManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000010",
                                'positions' => '["productManager", "marketolog"]',
                            ],
                            12 => [
                                'id' => 13,
                                'name' => 'Менеджер Контентович 2А',
                                'login' => 'bpm_contentManager_2a',
                                'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                                'team' => 7,
                                'parent_id' => 23,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:35',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000013",
                                'positions' => '["contentManager"]',
                            ],
                            13 => [
                                'id' => 14,
                                'name' => 'Менеджер Контентович 2Б',
                                'login' => 'bpm_contentManager_2b',
                                'email' => 'bpm_contentManager_2b@rozetka.com.ua',
                                'team' => 7,
                                'parent_id' => 23,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:35',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000014",
                                'positions' => '["contentManager"]',
                            ],
                        ]
                    ),
                    'auth.auth_assignment' => array_merge(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                        [
                            [
                                'item_name' => 'productManager',
                                'user_id' => 10,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'marketolog',
                                'user_id' => 10,
                                'created_at >=' => date('Y-m-d'),
                            ],
                        ]
                    ),
                    'auth.user_access' => (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php'),
                ],
            ],
            'db_4' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php'),
                        [
                            9 => [
                                'id' => 10,
                                'name' => 'Супервайзер Начальникович 2',
                                'login' => 'bpm_supervisor_2',
                                'email' => 'bpm_supervisor_2@rozetka.com.ua',
                                'team' => 5,
                                'parent_id' => 1,
                                'position' => 'productManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000010",
                                'positions' => '["productManager", "marketolog"]',
                            ],
                            12 => [
                                'id' => 13,
                                'name' => 'Менеджер Контентович 2А',
                                'login' => 'bpm_contentManager_2a',
                                'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                                'team' => 7,
                                'parent_id' => 23,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:35',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000013",
                                'positions' => '["contentManager"]',
                            ],
                            13 => [
                                'id' => 14,
                                'name' => 'Менеджер Контентович 2Б',
                                'login' => 'bpm_contentManager_2b',
                                'email' => 'bpm_contentManager_2b@rozetka.com.ua',
                                'team' => 7,
                                'parent_id' => 23,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:35',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000014",
                                'positions' => '["contentManager"]',
                            ],
                        ]
                    ),
                    'auth.auth_assignment' => array_merge(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                        [
                            [
                                'item_name' => 'blockUser',
                                'user_id' => 10,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'updateUser',
                                'user_id' => 10,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'takeToWork',
                                'user_id' => 10,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => '50kReports',
                                'user_id' => 10,
                                'created_at >=' => date('Y-m-d'),
                            ],
                        ]
                    ),
                    'auth.user_access' => array_replace(
                        (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php'),
                        [
                            9 => [
                                'id' => 10,
                                'user_id' => 10,
                                'access' => '{"teams": [3, 5], "types": [1, 2], "team_directions": [3, 4]}',
                            ],
                        ]
                    ),
                ],
            ],
        ]
    ],
];
