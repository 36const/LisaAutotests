<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список ролей',
        ],
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'name' => 'admin',
                            'type' => 1,
                            'description' => 'Администратор',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        1 => [
                            'name' => 'contentManager',
                            'type' => 1,
                            'description' => 'Контент-менеджер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        2 => [
                            'name' => 'headSupervisor',
                            'type' => 1,
                            'description' => 'Руководитель супервайзеров',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        3 => [
                            'name' => 'moderator',
                            'type' => 1,
                            'description' => 'Сотрудник отдела модерации',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-04-16 07:52:40',
                            'updated_at' => NULL,
                        ],
                        4 => [
                            'name' => 'photoManager',
                            'type' => 1,
                            'description' => 'Сотрудник фотостудии',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        5 => [
                            'name' => 'productManager',
                            'type' => 1,
                            'description' => 'Продакт-менеджер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        6 => [
                            'name' => 'seo',
                            'type' => 1,
                            'description' => 'Сотрудник seo-отдела',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        7 => [
                            'name' => 'supervisor',
                            'type' => 1,
                            'description' => 'Супервайзер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        8 => [
                            'name' => 'system',
                            'type' => 1,
                            'description' => 'Система',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        9 => [
                            'name' => 'teamLead',
                            'type' => 1,
                            'description' => 'Руководитель направления (тимлид)',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/auth-item/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/auth-item/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/auth-item/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 10,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список ролей с фильтром по описанию и обратной сортировкой по названию',
        ],
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-name',
                'filter[description]' => 'ме',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'name' => 'productManager',
                            'type' => 1,
                            'description' => 'Продакт-менеджер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        1 => [
                            'name' => 'contentManager',
                            'type' => 1,
                            'description' => 'Контент-менеджер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/auth-item/list?sort=-name&filter%5Bdescription%5D=%D0%BC%D0%B5&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/auth-item/list?sort=-name&filter%5Bdescription%5D=%D0%BC%D0%B5&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/auth-item/list?sort=-name&filter%5Bdescription%5D=%D0%BC%D0%B5&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 2,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'description' => 'ме',
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список ролей с фильтром по дате создания и сортировкой по описанию',
        ],
        'provider_data' => [
            'requestParameters' => [
                'sort' => 'description',
                'filter[created_at]' => '2020-03-09 00:00:00to2020-03-11 23:59:59',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'name' => 'admin',
                            'type' => 1,
                            'description' => 'Администратор',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        1 => [
                            'name' => 'contentManager',
                            'type' => 1,
                            'description' => 'Контент-менеджер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        2 => [
                            'name' => 'productManager',
                            'type' => 1,
                            'description' => 'Продакт-менеджер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        3 => [
                            'name' => 'teamLead',
                            'type' => 1,
                            'description' => 'Руководитель направления (тимлид)',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        4 => [
                            'name' => 'headSupervisor',
                            'type' => 1,
                            'description' => 'Руководитель супервайзеров',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        5 => [
                            'name' => 'system',
                            'type' => 1,
                            'description' => 'Система',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        6 => [
                            'name' => 'seo',
                            'type' => 1,
                            'description' => 'Сотрудник seo-отдела',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        7 => [
                            'name' => 'photoManager',
                            'type' => 1,
                            'description' => 'Сотрудник фотостудии',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                        8 => [
                            'name' => 'supervisor',
                            'type' => 1,
                            'description' => 'Супервайзер',
                            'group' => NULL,
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => NULL,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/auth-item/list?sort=description&filter%5Bcreated_at%5D=2020-03-09+00%3A00%3A00to2020-03-11+23%3A59%3A59&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/auth-item/list?sort=description&filter%5Bcreated_at%5D=2020-03-09+00%3A00%3A00to2020-03-11+23%3A59%3A59&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/auth-item/list?sort=description&filter%5Bcreated_at%5D=2020-03-09+00%3A00%3A00to2020-03-11+23%3A59%3A59&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 9,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'created_at' => '2020-03-09 00:00:00to2020-03-11 23:59:59',
                ],
            ]
        ]
    ]

];
