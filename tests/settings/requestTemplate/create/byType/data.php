<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание родительского шаблона заявки только с обязательными полями',
            'type' => 1,
            'direction' => 2,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'model' => [
                    'id' => NULL,
                    'parent_id' => NULL,
                    'name' => 'Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                    'type_id' => 1,
                    'direction' => 1,
                    'fields' => [
                        'type_id' => 1,
                        'direction' => 1,
                        'priority' => NULL,
                        'amount_to_work' => '10',
                        'subject' => 'Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>а',
                        'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО
',
                        'category_id' => 1,
                        'seller_id' => -2,
                        'planned_finish_date' => NULL,
                    ],
                    'user_id' => 4,
                    'seller_id' => -2,
                    'category_id' => 1,
                    'amount_to_work' => '10',
                    'observers' => [
                    ],
                ],
                'checkboxes' => [
                    0 => '1',
                ],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 2,
                    'parent_id' => NULL,
                    'name' => 'Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                    'type_id' => '1',
                    'direction' => '1',
                    'fields' => '{"type_id":"1","direction":"1","priority":"","amount_to_work":"10","subject":"Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:>а","description":"!@#$%^&*()_+`-]\'/[;.,}\\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\n","category_id":"1","seller_id":"-2","planned_finish_date":"","1":"1"}',
                    'user_id' => '4',
                    'seller_id' => '-2',
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
                            'name' => 'Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                            'type_id' => 1,
                            'direction' => 1,
                            'fields' => '{"1": "1", "subject": "Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>а", "type_id": "1", "priority": "", "direction": "1", "seller_id": "-2", "category_id": "1", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n", "amount_to_work": "10", "planned_finish_date": ""}',
                            'user_id' => 4,
                            'seller_id' => -2,
                            'category_id' => 1,
                            'amount_to_work' => 10,
                            'observers' => '[]',
                        ],
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание дочернего шаблона заявки со всеми полями',
            'type' => 4,
            'direction' => 0,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
//            'requestBody' => [
//                'RequestField[169]' => '1',
//                'RequestTemplate[name]' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
//                'RequestTemplate[parent_id]' => '1',
//                'RequestTemplate[amount_to_work]' => '999',
//                'RequestTemplate[category_id]' => '2',
//                'RequestTemplate[observers]' => ['15', '16'],
//                'RequestTemplate[seller_id]' => '0',
//                'RequestTemplate[user_id]' => '4',
//                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО
//',
//                'Request[direction]' => '0',
//                'Request[planned_finish_date]' => '',
//                'Request[priority]' => '',
//                'Request[subject]' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>а',
//                'Request[type_id]' => '4'
//            ],
            'requestBody' => [
                'model' => [
                    'id' => NULL,
                    'parent_id' => 1,
                    'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                    'type_id' => 4,
                    'direction' => 0,
                    'fields' => [
                        'type_id' => 4,
                        'direction' => 0,
                        'priority' => NULL,
                        'amount_to_work' => '999',
                        'subject' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>а',
                        'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО
',
                        'category_id' => 2,
                        'seller_id' => 0,
                        'planned_finish_date' => NULL,
                    ],
                    'user_id' => 4,
                    'seller_id' => 0,
                    'category_id' => 2,
                    'amount_to_work' => '999',
                    'observers' => [
                        15,16
                    ],
                ],
                'checkboxes' => [
                    0 => '169',
                ],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 2,
                    'parent_id' => '1',
                    'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                    'type_id' => '4',
                    'direction' => '0',
                    'fields' => '{"type_id":"4","direction":"0","priority":"","amount_to_work":"999","subject":"Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:>а","description":"!@#$%^&*()_+`-]\'/[;.,}\\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\n","category_id":"2","seller_id":"0","planned_finish_date":"","169":"1"}',
                    'user_id' => '4',
                    'seller_id' => '0',
                    'category_id' => '2',
                    'amount_to_work' => '999',
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
                            'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                            'type_id' => 4,
                            'direction' => 0,
                            'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>а", "type_id": "4", "priority": "", "direction": "0", "seller_id": "0", "category_id": "2", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n", "amount_to_work": "999", "planned_finish_date": ""}',
                            'user_id' => 4,
                            'seller_id' => 0,
                            'category_id' => 2,
                            'amount_to_work' => 999,
                            'observers' => '[16]',
                        ],
                    ]
                ],
            ]
        ]
    ],

];
