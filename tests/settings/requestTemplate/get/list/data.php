<?php

use lisa\Constants;

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить значения всех полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'parent_id' => NULL,
                            'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                            'type_id' => 'Группировка товаров',
                            'direction' => 'Определяется типом задачи',
                            'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:>", "type_id": "4", "priority": "2", "direction": 0, "seller_id": 0, "category_id": "2", "description": "!@#$%^&*()_+`-]\'/[;.,}\\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\n", "amount_to_work": "", "rz_category_id": "753399", "planned_finish_date": "2021-03-01 08:40:59"}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => 2,
                            'amount_to_work' => NULL,
                            'observers' => '[16]',
                            'rz_category_id' => 753399,
                            'user_name' => 'Константин Куцан',
                        ],
                        1 => [
                            'id' => 2,
                            'parent_id' => NULL,
                            'name' => 'Добавление',
                            'type_id' => 'Добавление новых товаров',
                            'direction' => 'Работа с товарами Маркетплейса',
                            'fields' => '{"subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => NULL,
                            'amount_to_work' => 10,
                            'observers' => NULL,
                            'rz_category_id' => NULL,
                            'user_name' => 'Константин Куцан',
                        ],
                        2 => [
                            'id' => 3,
                            'parent_id' => 1,
                            'name' => 'Изменение информации',
                            'type_id' => 'Добавление/изменение информации в существующих товарах',
                            'direction' => 'Работа с товарами Розетки',
                            'fields' => '{"2": "1", "123": "1", "125": "1", "subject": "\\"Добавление/изменение информации в существующих товарах\\" (направление: \\"Работа с товарами Розетки\\" )", "type_id": "2", "priority": "1", "direction": "1", "seller_id": "124276", "category_id": "474", "description": "\\"Добавление/изменение информации в существующих товарах\\" (направление: \\"Работа с товарами Розетки\\" )\\nhttp://gomer.local/lisa/#/request-template/create?typeId=2&direction=1", "amount_to_work": "10", "rz_category_id": null, "planned_finish_date": null}',
                            'user_id' => 19,
                            'seller_id' => 124276,
                            'category_id' => 474,
                            'amount_to_work' => 10,
                            'observers' => '[]',
                            'rz_category_id' => NULL,
                            'user_name' => 'Сео Сеошевич 1',
                        ],
                        3 => [
                            'id' => 4,
                            'parent_id' => 2,
                            'name' => 'Добавление фат-меню',
                            'type_id' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                            'direction' => 'Определяется типом задачи',
                            'fields' => '{"1": "1", "subject": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )", "type_id": "7", "priority": null, "direction": 0, "seller_id": "83", "category_id": null, "description": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )\\nhttp://gomer.local/lisa/#/request-template/create?typeId=7&direction=0", "amount_to_work": "20", "rz_category_id": null, "planned_finish_date": null}',
                            'user_id' => 20,
                            'seller_id' => 83,
                            'category_id' => NULL,
                            'amount_to_work' => 20,
                            'observers' => '[17, 21]',
                            'rz_category_id' => NULL,
                            'user_name' => 'Сео Сеошевич 2',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/request-template/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/request-template/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/request-template/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 4,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                    'directions' => [
                        0 => 'Определяется типом задачи',
                        1 => 'Работа с товарами Розетки',
                        2 => 'Работа с товарами Маркетплейса',
                    ],
                    'users' => Constants::USER_NAMES,
                    'userId' => 4,
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить значения полей с обратной сортировкой по id и фильтром по направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-id',
                'filter[direction]' => 0,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 4,
                            'parent_id' => 2,
                            'name' => 'Добавление фат-меню',
                            'type_id' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                            'direction' => 'Определяется типом задачи',
                            'fields' => '{"1": "1", "subject": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )", "type_id": "7", "priority": null, "direction": 0, "seller_id": "83", "category_id": null, "description": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )\\nhttp://gomer.local/lisa/#/request-template/create?typeId=7&direction=0", "amount_to_work": "20", "rz_category_id": null, "planned_finish_date": null}',
                            'user_id' => 20,
                            'seller_id' => 83,
                            'category_id' => NULL,
                            'amount_to_work' => 20,
                            'observers' => '[17, 21]',
                            'rz_category_id' => NULL,
                            'user_name' => 'Сео Сеошевич 2',
                        ],
                        1 => [
                            'id' => 1,
                            'parent_id' => NULL,
                            'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                            'type_id' => 'Группировка товаров',
                            'direction' => 'Определяется типом задачи',
                            'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:>", "type_id": "4", "priority": "2", "direction": 0, "seller_id": 0, "category_id": "2", "description": "!@#$%^&*()_+`-]\'/[;.,}\\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\n", "amount_to_work": "", "rz_category_id": "753399", "planned_finish_date": "2021-03-01 08:40:59"}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => 2,
                            'amount_to_work' => NULL,
                            'observers' => '[16]',
                            'rz_category_id' => 753399,
                            'user_name' => 'Константин Куцан',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/request-template/list?sort=-id&filter%5Bdirection%5D=0&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/request-template/list?sort=-id&filter%5Bdirection%5D=0&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/request-template/list?sort=-id&filter%5Bdirection%5D=0&page=1',
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
                    'direction' => '0',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                    'directions' => [
                        0 => 'Определяется типом задачи',
                        1 => 'Работа с товарами Розетки',
                        2 => 'Работа с товарами Маркетплейса',
                    ],
                    'users' => Constants::USER_NAMES,
                    'userId' => 4,
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить значения полей с сортировкой по parent_id и фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => 'parent_id',
                'filter[name]' => 'доб',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 4,
                            'parent_id' => 2,
                            'name' => 'Добавление фат-меню',
                            'type_id' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                            'direction' => 'Определяется типом задачи',
                            'fields' => '{"1": "1", "subject": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )", "type_id": "7", "priority": null, "direction": 0, "seller_id": "83", "category_id": null, "description": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )\\nhttp://gomer.local/lisa/#/request-template/create?typeId=7&direction=0", "amount_to_work": "20", "rz_category_id": null, "planned_finish_date": null}',
                            'user_id' => 20,
                            'seller_id' => 83,
                            'category_id' => NULL,
                            'amount_to_work' => 20,
                            'observers' => '[17, 21]',
                            'rz_category_id' => NULL,
                            'user_name' => 'Сео Сеошевич 2',
                        ],
                        1 => [
                            'id' => 2,
                            'parent_id' => NULL,
                            'name' => 'Добавление',
                            'type_id' => 'Добавление новых товаров',
                            'direction' => 'Работа с товарами Маркетплейса',
                            'fields' => '{"subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => NULL,
                            'amount_to_work' => 10,
                            'observers' => NULL,
                            'rz_category_id' => NULL,
                            'user_name' => 'Константин Куцан',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/request-template/list?sort=parent_id&filter%5Bname%5D=%D0%B4%D0%BE%D0%B1&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/request-template/list?sort=parent_id&filter%5Bname%5D=%D0%B4%D0%BE%D0%B1&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/request-template/list?sort=parent_id&filter%5Bname%5D=%D0%B4%D0%BE%D0%B1&page=1',
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
                    'name' => 'доб',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                    'directions' => [
                        0 => 'Определяется типом задачи',
                        1 => 'Работа с товарами Розетки',
                        2 => 'Работа с товарами Маркетплейса',
                    ],
                    'users' => Constants::USER_NAMES,
                    'userId' => 4,
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить значения полей с сортировкой по типу и фильтром по владельцу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => 'type_id',
                'filter[name]' => '',
                'filter[user_id]' => '4',
                'filter[type_id]' => '',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 2,
                            'parent_id' => NULL,
                            'name' => 'Добавление',
                            'type_id' => 'Добавление новых товаров',
                            'direction' => 'Работа с товарами Маркетплейса',
                            'fields' => '{"subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => NULL,
                            'amount_to_work' => 10,
                            'observers' => NULL,
                            'rz_category_id' => NULL,
                            'user_name' => 'Константин Куцан',
                        ],
                        1 => [
                            'id' => 1,
                            'parent_id' => NULL,
                            'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                            'type_id' => 'Группировка товаров',
                            'direction' => 'Определяется типом задачи',
                            'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:>", "type_id": "4", "priority": "2", "direction": 0, "seller_id": 0, "category_id": "2", "description": "!@#$%^&*()_+`-]\'/[;.,}\\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\n", "amount_to_work": "", "rz_category_id": "753399", "planned_finish_date": "2021-03-01 08:40:59"}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => 2,
                            'amount_to_work' => NULL,
                            'observers' => '[16]',
                            'rz_category_id' => 753399,
                            'user_name' => 'Константин Куцан',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/request-template/list?sort=type_id&filter%5Bname%5D=&filter%5Buser_id%5D=4&filter%5Btype_id%5D=&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/request-template/list?sort=type_id&filter%5Bname%5D=&filter%5Buser_id%5D=4&filter%5Btype_id%5D=&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/request-template/list?sort=type_id&filter%5Bname%5D=&filter%5Buser_id%5D=4&filter%5Btype_id%5D=&page=1',
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
                    'name' => '',
                    'user_id' => '4',
                    'type_id' => '',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                    'directions' => [
                        0 => 'Определяется типом задачи',
                        1 => 'Работа с товарами Розетки',
                        2 => 'Работа с товарами Маркетплейса',
                    ],
                    'users' => Constants::USER_NAMES,
                    'userId' => 4,
                ],
            ]
        ]
    ],

];