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
                'RequestTemplate[name]' => 'Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                'RequestTemplate[parent_id]' => '',
                'RequestTemplate[amount_to_work]' => '10',
                'RequestTemplate[category_id]' => '1',
                'RequestTemplate[seller_id]' => '-2',
                'RequestTemplate[user_id]' => '4',
                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО
',
                'Request[direction]' => '1',
                'Request[planned_finish_date]' => '',
                'Request[priority]' => '',
                'Request[subject]' => 'Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>а',
                'Request[type_id]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    'request_templates' => [
                        [
                            "id" => 1,
                            "parent_id" => null,
                            "name" => 'Добавление',
                            "type_id" => 1,
                            "direction" => 2,
                            "fields" => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                            "user_id" => 4,
                            "seller_id" => 83,
                            "category_id" => null,
                            "amount_to_work" => 10,
                            "observers" => '["15", "16"]',
                        ],
                        [
                            "id" => 2,
                            "parent_id" => null,
                            "name" => 'Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                            "type_id" => 1,
                            "direction" => 1,
                            "fields" => '{"subject": "Добавление новых  (Работа с товарами Розетки) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>а", "type_id": "1", "direction": "1", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n"}',
                            "user_id" => 4,
                            "seller_id" => -2,
                            "category_id" => 1,
                            "amount_to_work" => 10,
                            "observers" => '[]',
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
            'requestBody' => [
                'RequestField[169]' => '1',
                'RequestTemplate[name]' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                'RequestTemplate[parent_id]' => '1',
                'RequestTemplate[amount_to_work]' => '999',
                'RequestTemplate[category_id]' => '2',
                'RequestTemplate[observers]' => ["15", "16"],
                'RequestTemplate[seller_id]' => '0',
                'RequestTemplate[user_id]' => '4',
                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО
',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '',
                'Request[priority]' => '',
                'Request[subject]' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>а',
                'Request[type_id]' => '4'
            ],
            'db' => [
                "lisa_fixtures" => [
                    'request_templates' => [
                        [
                            "id" => 1,
                            "parent_id" => null,
                            "name" => 'Добавление',
                            "type_id" => 1,
                            "direction" => 2,
                            "fields" => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                            "user_id" => 4,
                            "seller_id" => 83,
                            "category_id" => null,
                            "amount_to_work" => 10,
                            "observers" => '["15", "16"]',
                        ],
                        [
                            "id" => 2,
                            "parent_id" => 1,
                            "name" => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                            "type_id" => 4,
                            "direction" => 0,
                            "fields" => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>а", "type_id": "4", "direction": "0", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n"}',
                            "user_id" => 4,
                            "seller_id" => 0,
                            "category_id" => 2,
                            "amount_to_work" => 999,
                            "observers" => '["15", "16"]',
                        ],
                    ]
                ],
            ]
        ]
    ],

];
