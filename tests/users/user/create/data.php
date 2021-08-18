<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания юзера без логина, имени, почты и должности',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [],
            'responseBody' => [
                'errors' => [
                    'login' => [
                        0 => 'Необходимо заполнить «Логин пользователя».',
                    ],
                    'email' => [
                        0 => 'Необходимо заполнить «Почта пользователя».',
                    ],
                    'position' => [
                        0 => 'Необходимо заполнить «Роль пользователя».',
                    ],
                    'name' => [
                        0 => 'Необходимо заполнить «Имя пользователя».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания юзера без должности',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'login' => 'content_supervisor',
                'email' => 'content_supervisor@rozetka.com.ua',
                'name' => 'Контентович СВ',
                'team' => '2',
                'parent_id' => 4,
            ],
            'responseBody' => [
                'errors' => [
                    'position' => [
                        0 => 'Необходимо заполнить «Роль пользователя».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания руководителя СВ без команды',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'login' => 'content_supervisor',
                'email' => 'content_supervisor@rozetka.com.ua',
                'name' => 'Контентович СВ',
                'position' => 'headSupervisor',
            ],
            'responseBody' => [
                'errors' => [
                    'team' => [
                        0 => 'Необходимо заполнить «Команда пользователя».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность создания супервайзера без команды',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'login' => 'content_supervisor',
                'email' => 'content_supervisor@rozetka.com.ua',
                'name' => 'Контентович СВ',
                'position' => 'supervisor',
                'parent_id' => 4,
            ],
            'responseBody' => [
                'errors' => [
                    'team' => [
                        0 => 'Необходимо заполнить «Команда пользователя».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность создания контент-менеджера без команды',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'login' => 'content_supervisor',
                'email' => 'content_supervisor@rozetka.com.ua',
                'name' => 'Контентович СВ',
                'position' => 'contentManager',
                'parent_id' => 4,
            ],
            'responseBody' => [
                'errors' => [
                    'team' => [
                        0 => 'Необходимо заполнить «Команда пользователя».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность создания супервайзера без руководителя',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'login' => 'content_supervisor',
                'email' => 'content_supervisor@rozetka.com.ua',
                'name' => 'Контентович СВ',
                'position' => 'supervisor',
                'team' => '1',
            ],
            'responseBody' => [
                'errors' => [
                    'parent_id' => [
                        0 => 'Необходимо заполнить «Руководитель».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case7' => [
        'setting' => [
            'description' => 'Невозможность создания контент-менеджера без руководителя',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'login' => 'content_supervisor',
                'email' => 'content_supervisor@rozetka.com.ua',
                'name' => 'Контентович СВ',
                'position' => 'contentManager',
                'team' => '1',
            ],
            'responseBody' => [
                'errors' => [
                    'parent_id' => [
                        0 => 'Необходимо заполнить «Руководитель».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case14' => [
        'setting' => [
            'description' => 'Невозможность повторного создания ранее созданного юзера',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'name' => 'Константин Куцан',
                'position' => 'admin',
                'team' => '1',
            ],
            'responseBody' => [
                'errors' => [
                    'login' => [
                        0 => 'Значение «kutsan.k» для «Логин пользователя» уже занято.',
                    ],
                    'email' => [
                        0 => 'Значение «kutsan.k@rozetka.com.ua» для «Почта пользователя» уже занято.',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание тим-лида с командой',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors',
                'user_names',
                'user_team_ids_1',
                'user_team_ids_2',
            ],
            'requestBody' => [
                'login' => 'bpm_teamLead_1',
                'email' => 'bpm_teamLead_1@rozetka.com.ua',
                'name' => 'Тим Лидович 1',
                'team' => 18,
                'position' => 'teamLead',
            ],
            'responseBody' => [
                'model' => [
                    'login' => 'bpm_teamLead_1',
                    'email' => 'bpm_teamLead_1@rozetka.com.ua',
                    'name' => 'Тим Лидович 1',
                    'team' => 18,
                    'teamName' => 'Маркетплейс (инициаторы)',
                    'position' => 'teamLead',
                    'positionName' => 'Руководитель направления (тимлид)',
                    'parent_id' => 1,
                    'drfo' => NULL,
                    'created_by' => 4,
                    'status' => 'Активный',
                    //'create_ts >=' => date('Y-m-d'),
                    'id' => 5,
                    'parent' => '1.Система',
                ],
                'splitterRole' => 'userBPM',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                        [
                            [
                                'id' => 5,
                                'name' => 'Тим Лидович 1',
                                'login' => 'bpm_teamLead_1',
                                'email' => 'bpm_teamLead_1@rozetka.com.ua',
                                'team' => 18,
                                'parent_id' => 1,
                                'position' => 'teamLead',
                                'status' => 1,
                                'create_ts >=' => date('Y-m-d'),
                                'created_by' => 4,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => null
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                        [
                            [
                                'item_name' => 'requestAddNewItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUpdateItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestTransferItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestGroupItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUploadPhoto',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCheckHidden',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddFatPortalCat',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUpdateFatPortalCat',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestStructureDesign',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateSC',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateVideo',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateSizeGrid',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateTags',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewAllRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewTeamRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'viewSplitterModerationRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'teamLead',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ]
                        ]
                    ),
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 5,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            'fields_for_complete' => '[]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.users.all' => [
                        '{"action":"create","entity":"users","fields_data":{"id":5,"name":"Тим Лидович 1","login":"bpm_teamLead_1","email":"bpm_teamLead_1@rozetka.com.ua","team":18,"parent_id":1,"position":"teamLead","status":1,"create_ts":"' . date('Y-m-d'),
                        '","created_by":4,"change_date":null,"drfo":null},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ],
    ],

    'case9' => [
        'setting' => [
            'description' => 'Создание продакта с кодом дрфо',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors',
                'user_names',
                'user_team_ids_1',
                'user_team_ids_2',
            ],
            'requestBody' => [
                'login' => 'bpm_productManager_1',
                'email' => 'bpm_productManager_1@rozetka.com.ua',
                'name' => 'Менеджер Продактович 1',
                'position' => 'productManager',
                'drfo' => '\'000000099',
            ],
            'responseBody' => [
                'model' => [
                    'login' => 'bpm_productManager_1',
                    'email' => 'bpm_productManager_1@rozetka.com.ua',
                    'name' => 'Менеджер Продактович 1',
                    'teamName' => NULL,
                    'position' => 'productManager',
                    'positionName' => 'Продакт-менеджер',
                    'parent_id' => 1,
                    'drfo' => '\'000000099',
                    'created_by' => 4,
                    'status' => 'Активный',
                    //'create_ts >=' => date('Y-m-d'),
                    'id' => 5,
                    'parent' => '1.Система',
                ],
                'splitterRole' => 'userBPM',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                        [
                            [
                                'id' => 5,
                                'name' => 'Менеджер Продактович 1',
                                'login' => 'bpm_productManager_1',
                                'email' => 'bpm_productManager_1@rozetka.com.ua',
                                'team' => null,
                                'parent_id' => 1,
                                'position' => 'productManager',
                                'status' => 1,
                                'create_ts >=' => date('Y-m-d'),
                                'created_by' => 4,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000099"
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.auth_assignment'],
                        [
                            [
                                'item_name' => 'requestAddNewItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUpdateItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestTransferItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestGroupItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUploadPhoto',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCheckHidden',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddFatPortalCat',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUpdateFatPortalCat',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestStructureDesign',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateSC',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateVideo',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateSizeGrid',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddUpdateTags',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewOwnRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewTeamRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'productManager',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ]
                        ],
                    ),
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 5,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            'fields_for_complete' => '[]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.users.all' => [
                        '{"action":"create","entity":"users","fields_data":{"id":5,"name":"Менеджер Продактович 1","login":"bpm_productManager_1","email":"bpm_productManager_1@rozetka.com.ua","team":null,"parent_id":1,"position":"productManager","status":1,"create_ts":"' . date('Y-m-d'),
                        '","created_by":4,"change_date":null,"drfo":"\'000000099"},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ],
    ],

    'case10' => [
        'setting' => [
            'description' => 'Создание сео с руководителем',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors',
                'user_names',
                'user_team_ids_1',
                'user_team_ids_2',
            ],
            'requestBody' => [
                'login' => 'bpm_seo_1',
                'email' => 'bpm_seo_1@rozetka.com.ua',
                'name' => 'Сео Сеошевич 1',
                'position' => 'seo',
                'parent_id' => '4',
            ],
            'responseBody' => [
                'model' => [
                    'login' => 'bpm_seo_1',
                    'email' => 'bpm_seo_1@rozetka.com.ua',
                    'name' => 'Сео Сеошевич 1',
                    'teamName' => NULL,
                    'position' => 'seo',
                    'positionName' => 'Сотрудник seo-отдела',
                    'parent_id' => '4',
                    'drfo' => NULL,
                    'created_by' => 4,
                    'status' => 'Активный',
                    //'create_ts >=' => date('Y-m-d'),
                    'id' => 5,
                    'parent' => '4.Константин Куцан',
                ],
                'splitterRole' => 'userBPM',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                        [
                            [
                                'id' => 5,
                                'name' => 'Сео Сеошевич 1',
                                'login' => 'bpm_seo_1',
                                'email' => 'bpm_seo_1@rozetka.com.ua',
                                'team' => null,
                                'parent_id' => 4,
                                'position' => 'seo',
                                'status' => 1,
                                'create_ts >=' => date('Y-m-d'),
                                'created_by' => 4,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => null
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => array_merge_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                        [
                            [
                                'item_name' => 'requestUpdateItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestTransferItems',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddFatPortalCat',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUpdateFatPortalCat',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestAddAttrOrValues',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestUpdateAttrOrValues',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestStructureDesign',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewOwnRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewTeamRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'seo',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ]
                        ]
                    ),
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 5,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            'fields_for_complete' => '[]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.users.all' => [
                        '{"action":"create","entity":"users","fields_data":{"id":5,"name":"Сео Сеошевич 1","login":"bpm_seo_1","email":"bpm_seo_1@rozetka.com.ua","team":null,"parent_id":"4","position":"seo","status":1,"create_ts":"' . date('Y-m-d'),
                        '","created_by":4,"change_date":null,"drfo":null},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ],
    ],

    'case11' => [
        'setting' => [
            'description' => 'Создание фотографа',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors',
                'user_names',
                'user_team_ids_1',
                'user_team_ids_2',
            ],
            'requestBody' => [
                'login' => 'bpm_photoManager_2',
                'email' => 'bpm_photoManager_2@rozetka.com.ua',
                'name' => 'Менеджер Фоткович 1',
                'position' => 'photoManager',
            ],
            'responseBody' => [
                'model' => [
                    'login' => 'bpm_photoManager_2',
                    'email' => 'bpm_photoManager_2@rozetka.com.ua',
                    'name' => 'Менеджер Фоткович 1',
                    'teamName' => NULL,
                    'position' => 'photoManager',
                    'positionName' => 'Сотрудник фотостудии',
                    'parent_id' => 1,
                    'drfo' => NULL,
                    'created_by' => 4,
                    'status' => 'Активный',
                    //'create_ts >=' => date('Y-m-d'),
                    'id' => 5,
                    'parent' => '1.Система',
                ],
                'splitterRole' => 'userBPM',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                        [
                            [
                                'id' => 5,
                                'name' => 'Менеджер Фоткович 1',
                                'login' => 'bpm_photoManager_2',
                                'email' => 'bpm_photoManager_2@rozetka.com.ua',
                                'team' => null,
                                'parent_id' => 1,
                                'position' => 'photoManager',
                                'status' => 1,
                                'create_ts >=' => date('Y-m-d'),
                                'created_by' => 4,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => null
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => array_merge_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                        [
                            [
                                'item_name' => 'requestUploadPhoto',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewOwnRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewTeamRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'photoManager',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ]
                        ]
                    ),
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 5,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            'fields_for_complete' => '[]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.users.all' => [
                        '{"action":"create","entity":"users","fields_data":{"id":5,"name":"Менеджер Фоткович 1","login":"bpm_photoManager_2","email":"bpm_photoManager_2@rozetka.com.ua","team":null,"parent_id":1,"position":"photoManager","status":1,"create_ts":"' . date('Y-m-d'),
                        '","created_by":4,"change_date":null,"drfo":null},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ],
    ],


    'case12' => [
        'setting' => [
            'description' => 'Создание супервайзера с руководителем/командой/дрфо',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors',
                'user_names',
                'user_team_ids_1',
                'user_team_ids_2',
            ],
            'requestBody' => [
                'login' => 'bpm_supervisor_2',
                'email' => 'bpm_supervisor_2@rozetka.com.ua',
                'name' => 'Супервайзер Начальникович 2',
                'team' => 1,
                'parent_id' => 4,
                'position' => 'supervisor',
                'drfo' => '\'00001111',
            ],
            'responseBody' => [
                'model' => [
                    'login' => 'bpm_supervisor_2',
                    'email' => 'bpm_supervisor_2@rozetka.com.ua',
                    'name' => 'Супервайзер Начальникович 2',
                    'team' => 1,
                    'teamName' => 'Маркетплейс 1',
                    'parent_id' => 4,
                    'position' => 'supervisor',
                    'positionName' => 'Супервайзер',
                    'drfo' => '\'00001111',
                    'created_by' => 4,
                    'status' => 'Активный',
                    //'create_ts >=' => date('Y-m-d'),
                    'id' => 5,
                    'parent' => '4.Константин Куцан',
                ],
                'splitterRole' => 'userViewerBPM',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                        [
                            [
                                'id' => 5,
                                'name' => 'Супервайзер Начальникович 2',
                                'login' => 'bpm_supervisor_2',
                                'email' => 'bpm_supervisor_2@rozetka.com.ua',
                                'team' => 1,
                                'parent_id' => 4,
                                'position' => 'supervisor',
                                'status' => 1,
                                'create_ts >=' => date('Y-m-d'),
                                'created_by' => 4,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'00001111"
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => array_merge_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                        [
                            [
                                'item_name' => 'massEdit',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'reportLoadYourTeam',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'reportView',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestAddAttrOrValues',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestAddFatPortalCat',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestAddNewItems',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestAddUpdateSC',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestAddUpdateSizeGrid',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestAddUpdateTags',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestAddUpdateVideo',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestCheckHidden',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestGroupItems',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestStructureDesign',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestTransferItems',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestUpdateAttrOrValues',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestUpdateFatPortalCat',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestUpdateItems',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestUploadPhoto',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'requestViewDirectionRequests',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'seeTeamTemplates',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'supervisor',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'takeToWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferCompletedToClosed',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferCompletedToInWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInCheckToDeclined',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInCheckToRequireChange',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInCheckToWaitWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInWorkToCompleted',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInWorkToDeclined',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInWorkToOnHold',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInWorkToPartialComplete',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferInWorkToWaitWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToClosed',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToInWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferWaitCheckToDeclined',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferWaitCheckToInCheck',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferWaitCheckToRequireChange',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferWaitCheckToWaitWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferWaitWorkToDeclined',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'transferWaitWorkToInWork',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'viewDashboardsByCommand',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'viewSplitterModerationRequests',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ],
                            [
                                'item_name' => 'viewUser',
                                'created_at >=' => date('Y-m-d'),
                                'user_id' => 5
                            ]
                        ]
                    ),
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 5,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            'fields_for_complete' => '[]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.users.all' => [
                        '{"action":"create","entity":"users","fields_data":{"id":5,"name":"Супервайзер Начальникович 2","login":"bpm_supervisor_2","email":"bpm_supervisor_2@rozetka.com.ua","team":1,"parent_id":4,"position":"supervisor","status":1,"create_ts":"' . date('Y-m-d'),
                        '","created_by":4,"change_date":null,"drfo":"\'00001111"},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ],
    ],

    'case13' => [
        'setting' => [
            'description' => 'Создание менеджера с руководителем/командой/дрфо',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors',
                'user_names',
                'user_team_ids_1',
                'user_team_ids_2',
            ],
            'requestBody' => [
                'login' => 'bpm_contentManager_2a',
                'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                'name' => 'Менеджер Контентович 2А',
                'team' => 2,
                'parent_id' => 4,
                'position' => 'contentManager',
                'drfo' => '\'00001111',
            ],
            'responseBody' => [
                'model' => [
                    'login' => 'bpm_contentManager_2a',
                    'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                    'name' => 'Менеджер Контентович 2А',
                    'team' => 2,
                    'teamName' => 'Маркетплейс 2',
                    'parent_id' => 4,
                    'position' => 'contentManager',
                    'positionName' => 'Контент-менеджер',
                    'drfo' => '\'00001111',
                    'created_by' => 4,
                    'status' => 'Активный',
                    //'create_ts >=' => date('Y-m-d'),
                    'id' => 5,
                    'parent' => '4.Константин Куцан',
                ],
                'splitterRole' => 'userBPM',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_merge_recursive(
                        (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
                        [
                            [
                                'id' => 5,
                                'name' => 'Менеджер Контентович 2А',
                                'login' => 'bpm_contentManager_2a',
                                'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                                'team' => 2,
                                'parent_id' => 4,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts >=' => date('Y-m-d'),
                                'created_by' => 4,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'00001111"
                            ]
                        ]
                    ),
                    'auth.auth_assignment' => array_merge_recursive(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                        [
                            [
                                'item_name' => 'transferWaitWorkToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferInWorkToOnHold',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferInWorkToPartialComplete',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferInWorkToCompleted',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferInWorkToDeclined',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'requestViewOwnRequests',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'reportView',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'viewOwnDashboards',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferCompletedToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                            [
                                'item_name' => 'contentManager',
                                'user_id' => 5,
                                'created_at >=' => date('Y-m-d')
                            ],
                        ]
                    ),
                    'notification_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 5,
                            'types_for_notification' => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            'fields_for_complete' => '[]',
                            'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                            'url_id' => 0,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.users.all' => [
                        '"name":"Менеджер Контентович 2А","login":"bpm_contentManager_2a","email":"bpm_contentManager_2a@rozetka.com.ua","team":2,"parent_id":4,"position":"contentManager","status":1,"create_ts":"' . date('Y-m-d'),
                        '","created_by":4,"change_date":null,"drfo":"\'00001111"},"changed_fields_names":[]}'
                    ]
                ],
            ],
        ],
    ],

];