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
                'Request[amount_to_work]' => '10',
                'Request[category_id]' => '',
                'Request[description]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі
',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '',
                'Request[priority]' => '',
                'Request[seller_id]' => '83',
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
                            "fields" => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "seller_id": "83", "description": "description", "amount_to_work": "10"}',
                        ],
                        [
                            "id" => 2,
                            "parent_id" => null,
                            "name" => 'Группировка товаров (Определяется типом задачи)',
                            "type_id" => 4,
                            "direction" => 0,
                            "fields" => '{"subject": "Группировка товаров (Определяется типом задачи)", "type_id": "4", "direction": "0", "seller_id": "83", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі\n", "amount_to_work": "10"}',
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
                'Request[amount_to_work]' => '999999',
                'Request[category_id]' => '1',
                'Request[description]' => 'description =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                'Request[direction]' => '0',
                'Request[planned_finish_date]' => '2021-03-01 00:00:27',
                'Request[priority]' => '2',
                'Request[seller_id]' => '5',
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
                            "fields" => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "seller_id": "83", "description": "description", "amount_to_work": "10"}',
                        ],
                        [
                            "id" => 2,
                            "parent_id" => 1,
                            "name" => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                            "type_id" => 13,
                            "direction" => 0,
                            "fields" => '{"2": "1", "subject": "Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>", "type_id": "13", "priority": "2", "direction": "0", "seller_id": "5", "category_id": "1", "description": "description =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>", "amount_to_work": "999999", "planned_finish_date": "2021-03-01 00:00:27"}',
                        ],
                    ]
                ]
            ]
        ]
    ],

];
