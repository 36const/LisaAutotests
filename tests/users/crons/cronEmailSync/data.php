<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение email у одного юзера при синхронизации всех юзеров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                        [
                            10 => [
                                'id' => 11,
                                'name' => 'Менеджер Контентович 1А',
                                'login' => 'bpm_contentManager_1a',
                                'email' => 'bpm_contentManager_1a@rozetka.ua',
                                'team' => 1,
                                'parent_id' => 6,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000011",
                                'positions' => '["contentManager"]',
                            ],
                        ]
                    ),
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 11,
                            'changed_user_login' => 'bpm_contentManager_1a',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'email',
                            'old_value' => 'bpm_contentManager_1a@rozetka.com.ua',
                            'new_value' => 'bpm_contentManager_1a@rozetka.ua',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
                'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                ],
            ]
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение email у нескольких юзеров при синхронизации всех юзеров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                        [
                            10 => [
                                'id' => 11,
                                'name' => 'Менеджер Контентович 1А',
                                'login' => 'bpm_contentManager_1a',
                                'email' => 'bpm_contentManager_1a@rozetka.ua',
                                'team' => 1,
                                'parent_id' => 6,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000011",
                                'positions' => '["contentManager"]',
                            ],
                            11 => [
                                'id' => 12,
                                'name' => 'Менеджер Контентович 1Б',
                                'login' => 'bpm_contentManager_1b',
                                'email' => 'bpm_contentManager_1b@rozetka.ua',
                                'team' => 1,
                                'parent_id' => 6,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000012",
                                'positions' => '["contentManager"]',
                            ],
                            16 => [
                                'id' => 17,
                                'name' => 'Менеджер Продактович 1',
                                'login' => 'bpm_productManager_1',
                                'email' => 'bpm_productManager_1@rozetka.ua',
                                'team' => 18,
                                'parent_id' => 4,
                                'position' => 'productManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:36',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000017",
                                'positions' => '["productManager"]',
                            ],
                        ]
                    ),
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 11,
                            'changed_user_login' => 'bpm_contentManager_1a',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'email',
                            'old_value' => 'bpm_contentManager_1a@rozetka.com.ua',
                            'new_value' => 'bpm_contentManager_1a@rozetka.ua',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 12,
                            'changed_user_login' => 'bpm_contentManager_1b',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'email',
                            'old_value' => 'bpm_contentManager_1b@rozetka.com.ua',
                            'new_value' => 'bpm_contentManager_1b@rozetka.ua',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 17,
                            'changed_user_login' => 'bpm_productManager_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'email',
                            'old_value' => 'bpm_productManager_1@rozetka.com.ua',
                            'new_value' => 'bpm_productManager_1@rozetka.ua',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
                'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                ],
            ]
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение email у нескольких юзеров при синхронизации изменившихся за последний час',
            'last_hour' => ''
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                        [
                            10 => [
                                'id' => 11,
                                'name' => 'Менеджер Контентович 1А',
                                'login' => 'bpm_contentManager_1a',
                                'email' => 'bpm_contentManager_1a@rozetka.ua',
                                'team' => 1,
                                'parent_id' => 6,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000011",
                                'positions' => '["contentManager"]',
                            ],
                            11 => [
                                'id' => 12,
                                'name' => 'Менеджер Контентович 1Б',
                                'login' => 'bpm_contentManager_1b',
                                'email' => 'bpm_contentManager_1b@rozetka.ua',
                                'team' => 1,
                                'parent_id' => 6,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000012",
                                'positions' => '["contentManager"]',
                            ],
                            16 => [
                                'id' => 17,
                                'name' => 'Менеджер Продактович 1',
                                'login' => 'bpm_productManager_1',
                                'email' => 'bpm_productManager_1@rozetka.ua',
                                'team' => 18,
                                'parent_id' => 4,
                                'position' => 'productManager',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:36',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000017",
                                'positions' => '["productManager"]',
                            ],
                        ]
                    ),
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 11,
                            'changed_user_login' => 'bpm_contentManager_1a',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'email',
                            'old_value' => 'bpm_contentManager_1a@rozetka.com.ua',
                            'new_value' => 'bpm_contentManager_1a@rozetka.ua',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 12,
                            'changed_user_login' => 'bpm_contentManager_1b',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'email',
                            'old_value' => 'bpm_contentManager_1b@rozetka.com.ua',
                            'new_value' => 'bpm_contentManager_1b@rozetka.ua',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 17,
                            'changed_user_login' => 'bpm_productManager_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'email',
                            'old_value' => 'bpm_productManager_1@rozetka.com.ua',
                            'new_value' => 'bpm_productManager_1@rozetka.ua',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
                'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                ],
            ]
        ],
    ],

];
