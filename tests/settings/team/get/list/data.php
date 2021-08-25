<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список id и названий активных команд',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'fields' => 'name,id',
                'filter[status]' => 1
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'name' => 'Маркетплейс 1',
                        ],
                        1 => [
                            'id' => 2,
                            'name' => 'Маркетплейс 2',
                        ],
                        2 => [
                            'id' => 3,
                            'name' => 'Маркетплейс 3',
                        ],
                        3 => [
                            'id' => 4,
                            'name' => 'Маркетплейс 4',
                        ],
                        4 => [
                            'id' => 5,
                            'name' => 'Маркетплейс 5',
                        ],
                        5 => [
                            'id' => 7,
                            'name' => 'Маркетплейс Freelance',
                        ],
                        6 => [
                            'id' => 8,
                            'name' => 'Fashion',
                        ],
                        7 => [
                            'id' => 9,
                            'name' => 'FMCG, Косметика и парфюмерия',
                        ],
                        8 => [
                            'id' => 10,
                            'name' => 'IT, Аксесуари, Уценка',
                        ],
                        9 => [
                            'id' => 11,
                            'name' => 'Бытовая техника, сантехника',
                        ],
                        10 => [
                            'id' => 13,
                            'name' => 'Rozetka Freelance',
                        ],
                        11 => [
                            'id' => 14,
                            'name' => 'Группировка товаров',
                        ],
                        12 => [
                            'id' => 15,
                            'name' => 'Проектирование структур категорий + фильтры',
                        ],
                        13 => [
                            'id' => 16,
                            'name' => 'Изменения в категориях',
                        ],
                        14 => [
                            'id' => 17,
                            'name' => 'Административная команда',
                        ],
                        15 => [
                            'id' => 18,
                            'name' => 'Маркетплейс (инициаторы)',
                        ],
                        16 => [
                            'id' => 19,
                            'name' => 'SEO-отдел',
                        ],
                        17 => [
                            'id' => 20,
                            'name' => 'Фотостудия',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/team/list?fields=name%2Cid&filter%5Bstatus%5D=1&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/team/list?fields=name%2Cid&filter%5Bstatus%5D=1&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/team/list?fields=name%2Cid&filter%5Bstatus%5D=1&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 18,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'status' => '1',
                ],
                'initialValues' => [
                    'directions' => [
                        1 => 'Управление отделом',
                        2 => 'Работа с товарами Маркетплейса',
                        3 => 'Работа с товарами Rozetka',
                        4 => 'Работа с группами',
                        5 => 'Работа с проектированием структур + фильтрами',
                        6 => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список заблокированных команд с "Маркетплейс" в названии',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[name]' => 'Маркетплейс',
                'filter[status]' => 0
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 6,
                            'name' => 'Маркетплейс 6',
                            'direction' => 'Работа с товарами Маркетплейса',
                            'project_id' => 'Контент',
                            'status' => 'Заблокированный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=%D0%9C%D0%B0%D1%80%D0%BA%D0%B5%D1%82%D0%BF%D0%BB%D0%B5%D0%B9%D1%81&filter%5Bstatus%5D=0&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=%D0%9C%D0%B0%D1%80%D0%BA%D0%B5%D1%82%D0%BF%D0%BB%D0%B5%D0%B9%D1%81&filter%5Bstatus%5D=0&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=%D0%9C%D0%B0%D1%80%D0%BA%D0%B5%D1%82%D0%BF%D0%BB%D0%B5%D0%B9%D1%81&filter%5Bstatus%5D=0&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 1,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'name' => 'Маркетплейс',
                    'status' => '0',
                ],
                'initialValues' => [
                    'directions' => [
                        1 => 'Управление отделом',
                        2 => 'Работа с товарами Маркетплейса',
                        3 => 'Работа с товарами Rozetka',
                        4 => 'Работа с группами',
                        5 => 'Работа с проектированием структур + фильтрами',
                        6 => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список активных команд направления Розетка и пустым фильтром названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[name]' => '',
                'filter[status]' => 1,
                'filter[direction]' => 3,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 8,
                            'name' => 'Fashion',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 9,
                            'name' => 'FMCG, Косметика и парфюмерия',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                        2 => [
                            'id' => 10,
                            'name' => 'IT, Аксесуари, Уценка',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                        3 => [
                            'id' => 11,
                            'name' => 'Бытовая техника, сантехника',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                        4 => [
                            'id' => 13,
                            'name' => 'Rozetka Freelance',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                        5 => [
                            'id' => 20,
                            'name' => 'Фотостудия',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=&filter%5Bstatus%5D=1&filter%5Bdirection%5D=3&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=&filter%5Bstatus%5D=1&filter%5Bdirection%5D=3&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=&filter%5Bstatus%5D=1&filter%5Bdirection%5D=3&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 6,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'name' => '',
                    'status' => '1',
                    'direction' => '3',
                ],
                'initialValues' => [
                    'directions' => [
                        1 => 'Управление отделом',
                        2 => 'Работа с товарами Маркетплейса',
                        3 => 'Работа с товарами Rozetka',
                        4 => 'Работа с группами',
                        5 => 'Работа с проектированием структур + фильтрами',
                        6 => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить список команд с сортировкой по id и фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[name]' => 'тов',
                'filter[status]' => '',
                'sort' => '-id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 14,
                            'name' => 'Группировка товаров',
                            'direction' => 'Работа с группами',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 12,
                            'name' => 'Спорт и туризм, Автотовары',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Заблокированный',
                        ],
                        2 => [
                            'id' => 11,
                            'name' => 'Бытовая техника, сантехника',
                            'direction' => 'Работа с товарами Rozetka',
                            'project_id' => 'Контент',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=%D1%82%D0%BE%D0%B2&filter%5Bstatus%5D=&sort=-id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=%D1%82%D0%BE%D0%B2&filter%5Bstatus%5D=&sort=-id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/team/list?filter%5Bname%5D=%D1%82%D0%BE%D0%B2&filter%5Bstatus%5D=&sort=-id&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 3,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'name' => 'тов',
                    'status' => '',
                ],
                'initialValues' => [
                    'directions' => [
                        1 => 'Управление отделом',
                        2 => 'Работа с товарами Маркетплейса',
                        3 => 'Работа с товарами Rozetka',
                        4 => 'Работа с группами',
                        5 => 'Работа с проектированием структур + фильтрами',
                        6 => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
            ],
        ]
    ],

];
