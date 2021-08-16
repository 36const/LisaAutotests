<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание шаблона заявки из существующей без изменения заполненных полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'model' => [
                    'id' => NULL,
                    'parent_id' => NULL,
                    'name' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                    'type_id' => 7,
                    'direction' => 0,
                    'fields' => [
                        'type_id' => 7,
                        'direction' => 0,
                        'priority' => 2,
                        'amount_to_work' => 10,
                        'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                        'description' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'category_id' => 1,
                        'seller_id' => 0,
                        'planned_finish_date' => NULL,
                    ],
                    'user_id' => 4,
                    'seller_id' => 0,
                    'category_id' => 1,
                    'amount_to_work' => 10,
                    'observers' => [
                    ],
                ],
                'checkboxes' => [
                    0 => '1',
                    1 => '6',
                    2 => '7',
                ],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 2,
                    'parent_id' => NULL,
                    'name' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                    'type_id' => '7',
                    'direction' => '0',
                    'fields' => '{"type_id":"7","direction":"0","priority":"2","amount_to_work":"10","subject":"Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)","description":"!@#$%^&*()_+`-]\'/[;.,}\\"?{:>\\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","category_id":"1","seller_id":"0","planned_finish_date":"","1":"1","6":"1","7":"1"}',
                    'user_id' => '4',
                    'seller_id' => '0',
                    'category_id' => '1',
                    'amount_to_work' => '10',
                    'observers' => '[]',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_templates' => [
                        [
                            'id' => 1,
                            'parent_id' => null,
                            'name' => 'Добавление',
                            'type_id' => 1,
                            'direction' => 2,
                            'fields' => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                            'user_id' => 4,
                            'seller_id' => 83,
                            'category_id' => null,
                            'amount_to_work' => 10,
                            'observers' => '["15", "16"]',
                        ],
                        [
                            'id' => 2,
                            'parent_id' => null,
                            'name' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                            'type_id' => 7,
                            'direction' => 0,
                            'fields' => '{"1": "1", "6": "1", "7": "1", "subject": "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)", "type_id": "7", "priority": "2", "direction": "0", "seller_id": "0", "category_id": "1", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "amount_to_work": "10", "planned_finish_date": ""}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => 1,
                            'amount_to_work' => 10,
                            'observers' => '[]',
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание дочернего шаблона заявки из существующей с изменением заполненных полей',
            'type' => 4,
            'direction' => 0,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'RequestField[2]' => '1',
                'RequestTemplate[name]' => 'Проектирование структуры (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                'RequestTemplate[parent_id]' => '1',
                'RequestTemplate[amount_to_work]' => '999999',
                'RequestTemplate[category_id]' => '2',
                'RequestTemplate[observers]' => ['15', '16'],
                'RequestTemplate[seller_id]' => '-2',
                'RequestTemplate[user_id]' => '4',
                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '2021-03-01 08:40:59',
                'Request[priority]' => '1',
                'Request[subject]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>а Проектирование структуры (Определяется типом задачи)',
                'Request[type_id]' => '11'
            ],
            'requestBody' => [
                'model' => [
                    'id' => NULL,
                    'parent_id' => 1,
                    'name' => 'Проектирование структуры (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                    'type_id' => 11,
                    'direction' => 0,
                    'fields' => [
                        'type_id' => 11,
                        'direction' => 0,
                        'priority' => 1,
                        'amount_to_work' => 999999,
                        'subject' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>а Проектирование структуры (Определяется типом задачи)',
                        'description' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'category_id' => 2,
                        'seller_id' => -2,
                        'planned_finish_date' => '2021-03-01 08:40:59',
                    ],
                    'user_id' => 4,
                    'seller_id' => -2,
                    'category_id' => 2,
                    'amount_to_work' => 999999,
                    'observers' => [
                        0 => 15,
                        1 => 16
                    ],
                ],
                'checkboxes' => [
                    0 => '2',
                ],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 2,
                    'parent_id' => '1',
                    'name' => 'Проектирование структуры (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                    'type_id' => '11',
                    'direction' => '0',
                    'fields' => '{"type_id":"11","direction":"0","priority":"1","amount_to_work":"999999","subject":"!@#$%^&*()_+`-]\'/[;.,}\\"?{:>|а Проектирование структуры (Определяется типом задачи)","description":"!@#$%^&*()_+`-]\'/[;.,}\\"?{:>\\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","category_id":"2","seller_id":"-2","planned_finish_date":"2021-03-01 08:40:59","2":"1"}',
                    'user_id' => '4',
                    'seller_id' => '-2',
                    'category_id' => '2',
                    'amount_to_work' => '999999',
                    'observers' => '[16]',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_templates' => [
                        [
                            'id' => 1,
                            'parent_id' => null,
                            'name' => 'Добавление',
                            'type_id' => 1,
                            'direction' => 2,
                            'fields' => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                            'user_id' => 4,
                            'seller_id' => 83,
                            'category_id' => null,
                            'amount_to_work' => 10,
                            'observers' => '["15", "16"]',
                        ],
                        [
                            'id' => 2,
                            'parent_id' => 1,
                            'name' => 'Проектирование структуры (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                            'type_id' => 11,
                            'direction' => 0,
                            'fields' => '{"2": "1", "subject": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>|а Проектирование структуры (Определяется типом задачи)", "type_id": "11", "priority": "1", "direction": "0", "seller_id": "-2", "category_id": "2", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "amount_to_work": "999999", "planned_finish_date": "2021-03-01 08:40:59"}',
                            'user_id' => 4,
                            'seller_id' => -2,
                            'category_id' => 2,
                            'amount_to_work' => 999999,
                            'observers' => '[16]',
                        ],
                    ]
                ]
            ]
        ]
    ],

];
