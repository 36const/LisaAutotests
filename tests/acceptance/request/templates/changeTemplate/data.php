<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение шаблона с заблоченными значениями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'request_templates' => [
                        [
                            'id' => 1,
                            'parent_id' => NULL,
                            'name' => 'Добавление',
                            'type_id' => 1,
                            'direction' => 2,
                            'fields' => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Маркетплейса)", "type_id": "1", "direction": "2", "description": "description", "rz_category_id": ""}',
                            'user_id' => 4,
                            'seller_id' => 83,
                            'category_id' => NULL,
                            'amount_to_work' => 10,
                            'observers' => '["17", "16"]',
                            'rz_category_id' => NULL,
                        ],
                        [
                            'id' => 2,
                            'parent_id' => 1,
                            'name' => 'Добавление (Розетка)',
                            'type_id' => 1,
                            'direction' => 1,
                            'fields' => '{"2": "1", "15": "1", "subject": "Добавление новых товаров (Розетка) Добавление новых товаров (Розетка)", "type_id": "1", "priority": "1", "direction": "1", "seller_id": "72141", "category_id": "1", "description": "http://splitter.docker/lisa/#/request-template/create?typeId=1&direction=1", "amount_to_work": "10", "rz_category_id": null, "planned_finish_date": null}',
                            'user_id' => 4,
                            'seller_id' => 72141,
                            'category_id' => 1,
                            'amount_to_work' => 10,
                            'observers' => '[5]',
                            'rz_category_id' => NULL,
                        ],
                    ]
                ]
            ]
        ]
    ],


];
