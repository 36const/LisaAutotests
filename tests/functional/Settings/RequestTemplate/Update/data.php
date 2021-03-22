<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение всех полей и удаление необязательных',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'RequestTemplate[name]' => 'Группировка товаров (Определяется типом задачи)',
                'RequestTemplate[parent_id]' => '',
                'RequestTemplate[amount_to_work]' => '',
                'RequestTemplate[category_id]' => '',
                'RequestTemplate[seller_id]' => '',
                'RequestTemplate[user_id]' => '4',
                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі
',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '',
                'Request[priority]' => '',
                'Request[subject]' => 'Группировка товаров (Определяется типом задачи)',
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
                            "parent_id" => null,
                            "name" => 'Группировка товаров (Определяется типом задачи)',
                            "type_id" => 4,
                            "direction" => 0,
                            "fields" => '{"subject": "Группировка товаров (Определяется типом задачи)", "type_id": "4", "direction": "0", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі\n"}',
                            "user_id" => 4,
                            "seller_id" => null,
                            "category_id" => null,
                            "amount_to_work" => null,
                            "observers" => '[]',
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение всех полей и добавление необязательных',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'RequestField[2]' => '1',
                'RequestTemplate[name]' => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                'RequestTemplate[parent_id]' => '1',
                'RequestTemplate[amount_to_work]' => '999999',
                'RequestTemplate[category_id]' => '1',
                'RequestTemplate[observers]' => ["15", "16"],
                'RequestTemplate[seller_id]' => '5',
                'RequestTemplate[user_id]' => '5',
                'Request[description]' => 'description =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '2021-03-01 00:00:27',
                'Request[priority]' => '2',
                'Request[subject]' => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                'Request[type_id]' => '13'
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
                            "name" => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                            "type_id" => 13,
                            "direction" => 0,
                            "fields" => '{"2": "1", "subject": "Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>", "type_id": "13", "priority": "2", "direction": "0", "description": "description =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>", "planned_finish_date": "2021-03-01 00:00:27"}',
                            "user_id" => 5,
                            "seller_id" => 5,
                            "category_id" => 1,
                            "amount_to_work" => 999999,
                            "observers" => '["15", "16"]',
                        ],
                    ]
                ]
            ]
        ]
    ],

];
