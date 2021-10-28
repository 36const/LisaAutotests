<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Передача всех подчинённых другому супервайзеру',
            //хотя у нового СВ другая команда, у передаваемых менеджеров команда меняться не должна 
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'system_usersae2ad3d3da10c2072175ce20624812d4',
            ],
            'requestBody' => [
                'subordinates' => [
                    0 => '11',
                    1 => '12',
                ],
                'parent' => '10',
            ],
            'responseBody' => [],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
                        [
                            10 => [
                                'id' => 11,
                                'name' => 'Менеджер Контентович 1А',
                                'login' => 'bpm_contentManager_1a',
                                'email' => 'bpm_contentManager_1a@rozetka.com.ua',
                                'team' => 1,
                                'parent_id' => 10,
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
                                'email' => 'bpm_contentManager_1b@rozetka.com.ua',
                                'team' => 1,
                                'parent_id' => 10,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000012",
                                'positions' => '["contentManager"]',
                            ],
                        ]
                    ),
                    'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 11,
                            'changed_user_login' => 'bpm_contentManager_1a',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'parent_id',
                            'old_value' => '6. Супервайзер Начальникович 1',
                            'new_value' => '10. Супервайзер Начальникович 2',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 12,
                            'changed_user_login' => 'bpm_contentManager_1b',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'parent_id',
                            'old_value' => '6. Супервайзер Начальникович 1',
                            'new_value' => '10. Супервайзер Начальникович 2',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [
                    '{"action":"update","entity":"users","fields_data":{"id":11,"name":"Менеджер Контентович 1А","login":"bpm_contentManager_1a","email":"bpm_contentManager_1a@rozetka.com.ua","team":1,"parent_id":10,"position":"contentManager","status":1,"create_ts":"2020-05-19 13:36:23","created_by":1,"change_date":"',
                    '{"action":"update","entity":"users","fields_data":{"id":12,"name":"Менеджер Контентович 1Б","login":"bpm_contentManager_1b","email":"bpm_contentManager_1b@rozetka.com.ua","team":1,"parent_id":10,"position":"contentManager","status":1,"create_ts":"2020-05-19 13:36:23","created_by":1,"change_date":"',
                ],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Передача не всех подчинённых другому супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'system_usersae2ad3d3da10c2072175ce20624812d4',
            ],
            'requestBody' => [
                'subordinates' => [
                    0 => '11',
                ],
                'parent' => '10',
            ],
            'responseBody' => [
                12 => 'Менеджер Контентович 1Б',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
                        [
                            10 => [
                                'id' => 11,
                                'name' => 'Менеджер Контентович 1А',
                                'login' => 'bpm_contentManager_1a',
                                'email' => 'bpm_contentManager_1a@rozetka.com.ua',
                                'team' => 1,
                                'parent_id' => 10,
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
                    'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 11,
                            'changed_user_login' => 'bpm_contentManager_1a',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'parent_id',
                            'old_value' => '6. Супервайзер Начальникович 1',
                            'new_value' => '10. Супервайзер Начальникович 2',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [
                    '{"action":"update","entity":"users","fields_data":{"id":11,"name":"Менеджер Контентович 1А","login":"bpm_contentManager_1a","email":"bpm_contentManager_1a@rozetka.com.ua","team":1,"parent_id":10,"position":"contentManager","status":1,"create_ts":"2020-05-19 13:36:23","created_by":1,"change_date":"',
                ],
            ],
        ],
    ],

];
