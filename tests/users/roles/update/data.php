<?php

use lisa\Constants;
use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение набора пермишенов и описания роли, проект Контент',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'available_perms',
                'perms_names',
                'perms_by_role_supervisor',
                'user_permissions_4',
                'user_permissions_11',
            ],
            'requestBody' => [
                'name' => 'supervisor',
                'type' => 1,
                'description' => 'Суперпупервайзер',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
                'project_id' => 1,
                'projects' => Constants::PROJECTS,
                'permissions' => [
                    'requestViewAllRequests',
                    'requestViewTeamRequests',
                    'requestViewDirectionRequests',
                    'errorsUpdate',
                    'requestCreateRelated',
                    'createUser',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'supervisor',
                    'type' => 1,
                    'description' => 'Суперпупервайзер',
                    'group' => NULL,
                    'rule_name' => NULL,
                    'data' => NULL,
                    'created_at' => '2020-03-10 12:07:48',
                    'updated_at' => [
                        'expression' => 'NOW()',
                        'params' => [
                        ],
                    ],
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_item' => array_replace(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
                        [
                            7 => [
                                'name' => 'supervisor',
                                'type' => 1,
                                'description' => 'Суперпупервайзер',
                                'group' => null,
                                'rule_name' => null,
                                'data' => null,
                                'created_at' => '2020-03-10 12:07:48',
                                'updated_at >=' => date('Y-m-d'),
                                'project_id' => 1
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => [
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 6,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 6,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 10,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 10,
                            'created_at >=' => date('Y-m-d')
                        ]
                    ],
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'blockUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'blockUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 4,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 7,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewTeamRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 8,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewTeamRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 5,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 6,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ]
                    ],
                ]
            ]
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Сохранение индивидуально проставленных/удалённых пермишенов пользователя при изменении роли, проект Контент',
            //без изменения описания
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'available_perms',
                'perms_names',
                'perms_by_role_supervisor',
                'user_permissions_4',
                'user_permissions_11',
            ],
            'requestBody' => [
                'name' => 'supervisor',
                'type' => 1,
                'description' => 'Супервайзер',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
                'project_id' => 1,
                'projects' => Constants::PROJECTS,
                'permissions' => [
                    'blockUser',
                    'takeToWork',
                    'updateUser',
                    'requestViewAllRequests',
                    'viewUser',
                    'errorsUpdate',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'supervisor',
                    'type' => 1,
                    'description' => 'Супервайзер',
                    'group' => NULL,
                    'rule_name' => NULL,
                    'data' => NULL,
                    'created_at' => '2020-03-10 12:07:48',
                    'updated_at' => NULL,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_item' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['auth.auth_item'],
                    'auth.auth_assignment' => [
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 17:06:08'
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 17:06:08'
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 6,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 10,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ]
                    ],
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 4,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ]
                    ],
                ]
            ]
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение набора пермишенов и проекта с Контента на Маркетинг',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'available_perms',
                'perms_names',
                'perms_by_role_supervisor',
                'user_permissions_4',
                'user_permissions_11',
            ],
            'requestBody' => [
                'name' => 'supervisor',
                'type' => 1,
                'description' => 'Супервайзер',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
                'project_id' => 2,
                'projects' => Constants::PROJECTS,
                'permissions' => [
                    'blockUser',
                    'takeToWork',
                    'requestViewAllRequests',
                    'requestViewDirectionRequests',
                    'errorsUpdate',
                    'requestCreateRelated',
                    'commentRequestMrk',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'supervisor',
                    'type' => 1,
                    'description' => 'Супервайзер',
                    'group' => NULL,
                    'rule_name' => NULL,
                    'data' => NULL,
                    'created_at' => '2020-03-10 12:07:48',
                    'updated_at' => [
                        'expression' => 'NOW()',
                        'params' => [
                        ],
                    ],
                    'project_id' => 'Маркетинг',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_item' => array_replace(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
                        [
                            7 => [
                                'name' => 'supervisor',
                                'type' => 1,
                                'description' => 'Супервайзер',
                                'group' => null,
                                'rule_name' => null,
                                'data' => null,
                                'created_at' => '2020-03-10 12:07:48',
                                'updated_at >=' => date('Y-m-d'),
                                'project_id' => 2
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => [
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'commentRequestMrk',
                            'user_id' => 6,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'commentRequestMrk',
                            'user_id' => 10,
                            'created_at >=' => date('Y-m-d')
                        ],
                    ],
                    'auth.user_changing_history' => [
                        0 => [
                            'id' => 1,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        1 => [
                            'id' => 2,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        2 => [
                            'id' => 3,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewAllRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        3 => [
                            'id' => 4,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewAllRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        4 => [
                            'id' => 5,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        5 => [
                            'id' => 6,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        6 => [
                            'id' => 7,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'errorsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        7 => [
                            'id' => 8,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'errorsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        8 => [
                            'id' => 9,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        9 => [
                            'id' => 10,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        10 => [
                            'id' => 11,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'commentRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        11 => [
                            'id' => 12,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'commentRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                    ],
                ]
            ]
        ],
    ],

];
