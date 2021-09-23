<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение всех полей и удаление необязательных',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'model' => [
                    'id' => 2,
                    'parent_id' => NULL,
                    'name' => 'Группировка товаров (Определяется типом задачи)',
                    'type_id' => 4,
                    'direction' => 0,
                    'fields' => [
                        'type_id' => '4',
                        'direction' => 0,
                        'priority' => NULL,
                        'amount_to_work' => '',
                        'subject' => 'Группировка товаров (Определяется типом задачи)',
                        'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі
',
                        'category_id' => NULL,
                        'seller_id' => NULL,
                        'planned_finish_date' => '2021-03-01 08:40:59',
                        'rz_category_id' => 753399,
                    ],
                    'user_id' => 4,
                    'seller_id' => NULL,
                    'category_id' => NULL,
                    'amount_to_work' => '',
                    'observers' => [
                    ],
                    'rz_category_id' => 753399,
                ],
                'checkboxes' => [
                ],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 2,
                    'parent_id' => NULL,
                    'name' => 'Группировка товаров (Определяется типом задачи)',
                    'type_id' => '4',
                    'direction' => 0,
                    'fields' => '{"type_id":"4","direction":0,"priority":null,"amount_to_work":"","subject":"Группировка товаров (Определяется типом задачи)","description":"!@#$%^&*()_+`-]\'/[;.,}\\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі\\n","category_id":null,"seller_id":null,"planned_finish_date":"2021-03-01 08:40:59","rz_category_id":"753399"}',
                    'user_id' => '4',
                    'seller_id' => NULL,
                    'category_id' => NULL,
                    'amount_to_work' => NULL,
                    'observers' => '[]',
                    'rz_category_id' => '753399',
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
                            'fields' => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description", "rz_category_id": ""}',
                            'user_id' => 4,
                            'seller_id' => 83,
                            'category_id' => null,
                            'amount_to_work' => 10,
                            'observers' => '["15", "16"]',
                            'rz_category_id' => null,
                        ],
                        [
                            'id' => 2,
                            'parent_id' => null,
                            'name' => 'Группировка товаров (Определяется типом задачи)',
                            'type_id' => 4,
                            'direction' => 0,
                            'fields' => '{"subject": "Группировка товаров (Определяется типом задачи)", "type_id": "4", "priority": null, "direction": 0, "seller_id": null, "category_id": null, "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі\n", "amount_to_work": "", "rz_category_id": "753399", "planned_finish_date": "2021-03-01 08:40:59"}',
                            'user_id' => 4,
                            'seller_id' => null,
                            'category_id' => null,
                            'amount_to_work' => null,
                            'observers' => '[]',
                            'rz_category_id' => 753399,
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
                'model' => [
                    'id' => 2,
                    'parent_id' => 1,
                    'name' => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                    'type_id' => 13,
                    'direction' => 0,
                    'fields' => [
                        'type_id' => '13',
                        'direction' => 0,
                        'priority' => 2,
                        'amount_to_work' => '999999',
                        'subject' => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                        'description' => 'description =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>',
                        'category_id' => 1,
                        'seller_id' => 5,
                        'planned_finish_date' => '2021-03-01 00:00:27',
                        'rz_category_id' => null,
                    ],
                    'user_id' => 5,
                    'seller_id' => 5,
                    'category_id' => 1,
                    'amount_to_work' => '999999',
                    'observers' => [
                        0 => '15',
                        1 => '16'
                    ],
                    'rz_category_id' => null,
                ],
                'checkboxes' => [
                    0 => '2'
                ],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'id' => 2,
                    'parent_id' => '1',
                    'name' => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:>',
                    'type_id' => '13',
                    'direction' => 0,
                    'fields' => '{"type_id":"13","direction":0,"priority":"2","amount_to_work":"999999","subject":"Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>","description":"description =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>","category_id":"1","seller_id":"5","planned_finish_date":"2021-03-01 00:00:27","rz_category_id":null,"2":"1"}',
                    'user_id' => '5',
                    'seller_id' => '5',
                    'category_id' => '1',
                    'amount_to_work' => '999999',
                    'observers' => '[16]',
                    'rz_category_id' => null,
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
                            'fields' => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description", "rz_category_id": ""}',
                            'user_id' => 4,
                            'seller_id' => 83,
                            'category_id' => null,
                            'amount_to_work' => 10,
                            'observers' => '["15", "16"]',
                            'rz_category_id' => null,
                        ],
                        [
                            'id' => 2,
                            'parent_id' => 1,
                            'name' => 'Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:>',
                            'type_id' => 13,
                            'direction' => 0,
                            'fields' => '{"2": "1", "subject": "Добавление/изменение видео (Определяется типом задачи) =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>", "type_id": "13", "priority": "2", "direction": 0, "seller_id": "5", "category_id": "1", "description": "description =~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:>", "amount_to_work": "999999", "rz_category_id":null, "planned_finish_date": "2021-03-01 00:00:27"}',
                            'user_id' => 5,
                            'seller_id' => 5,
                            'category_id' => 1,
                            'amount_to_work' => 999999,
                            'observers' => '[16]',
                            'rz_category_id' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

];
