<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание родительского шаблона заявки из существующей без изменения заполненных полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'RequestField[1]' => '1',
                'RequestField[6]' => '1',
                'RequestField[7]' => '1',
                'RequestTemplate[name]' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                'RequestTemplate[parent_id]' => '',
                'RequestTemplate[amount_to_work]' => '10',
                'RequestTemplate[category_id]' => '1',
                'RequestTemplate[seller_id]' => '0',
                'RequestTemplate[user_id]' => '4',
                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '',
                'Request[priority]' => '2',
                'Request[subject]' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'Request[type_id]' => '7'
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
                            "name" => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                            "type_id" => 7,
                            "direction" => 0,
                            "fields" => '{"1": "1", "6": "1", "7": "1", "subject": "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)", "type_id": "7", "priority": "2", "direction": "0", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}',
                            "user_id" => 4,
                            "seller_id" => 0,
                            "category_id" => 1,
                            "amount_to_work" => 10,
                            "observers" => '[]',
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
                'RequestTemplate[observers]' => ["15", "16"],
                'RequestTemplate[seller_id]' => '-2',
                'RequestTemplate[user_id]' => '4',
                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '2021-03-01 08:40:59',
                'Request[priority]' => '1',
                'Request[subject]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>а Проектирование структуры (Определяется типом задачи)',
                'Request[type_id]' => '11'
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
                            "name" => 'Проектирование структуры (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                            "type_id" => 11,
                            "direction" => 0,
                            "fields" => '{"2": "1", "subject": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>|а Проектирование структуры (Определяется типом задачи)", "type_id": "11", "priority": "1", "direction": "0", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "planned_finish_date": "2021-03-01 08:40:59"}',
                            "user_id" => 4,
                            "seller_id" => -2,
                            "category_id" => 2,
                            "amount_to_work" => 999999,
                            "observers" => '["15", "16"]',
                        ],
                    ]
                ]
            ]
        ]
    ],

];
