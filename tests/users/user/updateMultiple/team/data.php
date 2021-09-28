<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Групповое изменение команды у нескольких пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'managers_2',
                'managers_17',
                'user_team_ids_1',
                'user_team_ids_2',
            ],
            'requestBody' => [
                'itemId' => '8',
                'users' => [
                    0 => 5,
                    1 => 6,
                    2 => 11,
                    3 => 15,
                    4 => 30,
                ],
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => array_replace(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                        [
                            4 => [
                                'id' => 5,
                                'name' => 'Супервайзер Руководько 1',
                                'login' => 'bpm_headSupervisor_1',
                                'email' => 'bpm_headSupervisor_1@rozetka.com.ua',
                                'team' => 8,
                                'parent_id' => 4,
                                'position' => 'headSupervisor',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:22',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000005",
                                'positions' => '["headSupervisor"]',
                            ],
                            5 => [
                                'id' => 6,
                                'name' => 'Супервайзер Начальникович 1',
                                'login' => 'bpm_supervisor_1',
                                'email' => 'bpm_supervisor_1@rozetka.com.ua',
                                'team' => 8,
                                'parent_id' => 5,
                                'position' => 'supervisor',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:22',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000006",
                                'positions' => '["supervisor"]',
                            ],
                            10 => [
                                'id' => 11,
                                'name' => 'Менеджер Контентович 1А',
                                'login' => 'bpm_contentManager_1a',
                                'email' => 'bpm_contentManager_1a@rozetka.com.ua',
                                'team' => 8,
                                'parent_id' => 6,
                                'position' => 'contentManager',
                                'status' => 1,
                                'create_ts' => '2020-05-19 13:36:23',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000011",
                                'positions' => '["contentManager"]',
                            ],
                            14 => [
                                'id' => 15,
                                'name' => 'Тим Лидович 1',
                                'login' => 'bpm_teamLead_1',
                                'email' => 'bpm_teamLead_1@rozetka.com.ua',
                                'team' => 8,
                                'parent_id' => 4,
                                'position' => 'teamLead',
                                'status' => 0,
                                'create_ts' => '2020-04-13 13:15:35',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => "'000000015",
                                'positions' => '["teamLead"]',
                            ],
                            29 => [
                                'id' => 30,
                                'name' => 'Супервайзер Начальникович 10',
                                'login' => 'bpm_supervisor_10',
                                'email' => 'bpm_supervisor_10@rozetka.com.ua',
                                'team' => 8,
                                'parent_id' => 5,
                                'position' => 'supervisor',
                                'status' => 1,
                                'create_ts' => '2020-04-13 13:15:41',
                                'created_by' => 1,
                                'change_date >=' => date('Y-m-d'),
                                'drfo' => '0',
                                'positions' => '["supervisor"]',
                            ],
                        ]
                    ),
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 5,
                            'changed_user_login' => 'bpm_headSupervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'team',
                            'old_value' => '17',
                            'new_value' => '8',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'team',
                            'old_value' => '1',
                            'new_value' => '8',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 11,
                            'changed_user_login' => 'bpm_contentManager_1a',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'team',
                            'old_value' => '1',
                            'new_value' => '8',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 4,
                            'changed_user_id' => 15,
                            'changed_user_login' => 'bpm_teamLead_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'team',
                            'old_value' => '18',
                            'new_value' => '8',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 5,
                            'changed_user_id' => 30,
                            'changed_user_login' => 'bpm_supervisor_10',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'team',
                            'old_value' => '11',
                            'new_value' => '8',
                            'date >=' => date('Y-m-d'),
                        ]
                    ]
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [
                    '{"action":"update","entity":"users","fields_data":{"id":5,"name":"Супервайзер Руководько 1","login":"bpm_headSupervisor_1","email":"bpm_headSupervisor_1@rozetka.com.ua","team":"8","parent_id":4,"position":"headSupervisor","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                    '{"action":"update","entity":"users","fields_data":{"id":6,"name":"Супервайзер Начальникович 1","login":"bpm_supervisor_1","email":"bpm_supervisor_1@rozetka.com.ua","team":"8","parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                    '{"action":"update","entity":"users","fields_data":{"id":11,"name":"Менеджер Контентович 1А","login":"bpm_contentManager_1a","email":"bpm_contentManager_1a@rozetka.com.ua","team":"8","parent_id":6,"position":"contentManager","status":1,"create_ts":"2020-05-19 13:36:23","created_by":1,"change_date":"' . date('Y-m-d'),
                    '{"action":"update","entity":"users","fields_data":{"id":15,"name":"Тим Лидович 1","login":"bpm_teamLead_1","email":"bpm_teamLead_1@rozetka.com.ua","team":"8","parent_id":4,"position":"teamLead","status":0,"create_ts":"2020-04-13 13:15:35","created_by":1,"change_date":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.users.all' => [
                        '{"action":"update","entity":"users","fields_data":{"id":30,"name":"Супервайзер Начальникович 10","login":"bpm_supervisor_10","email":"bpm_supervisor_10@rozetka.com.ua","team":"8","parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-04-13 13:15:41","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"0","positions":"[\\"supervisor\\"]"},"changed_fields_names":["team","change_date"]}'
                    ]
                ],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность группового изменения команды без указания пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'users' => [],
                'itemId' => '8'
            ],
            'responseBody' => [
                'error' => 'Не все поля заполнены.',
                'status' => 500,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.user_changing_history'],
                ],
            ],
        ]
    ],

];
