<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'request_templates' => [
            [
//                "id" => 1,
                'parent_id' => null,
                'name' => 'Добавление',
                'type_id' => 1,
                'direction' => 2,
                'fields' => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Работа с товарами Маркетплейса)", "type_id": "1", "direction": "2", "description": "description", "rz_category_id": ""}',
                'user_id' => 4,
                'seller_id' => 83,
                'category_id' => null,
                'amount_to_work' => 10,
                'observers' => '["15", "16"]',
                'rz_category_id' => null,
            ],
            [
//                "id" => 2,
                'parent_id' => 1,
                'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                'type_id' => 4,
                'direction' => 0,
                'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>", "type_id": "4", "priority": "2", "direction": "0", "description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n", "planned_finish_date": "2021-03-01 08:40:59", "rz_category_id": "753399"}',
                'user_id' => 4,
                'seller_id' => 0,
                'category_id' => 2,
                'amount_to_work' => 999,
                'observers' => '["15", "16"]',
                'rz_category_id' => 753399,
            ],
            [
//                "id" => 3,
                'parent_id' => null,
                'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<>',
                'type_id' => 4,
                'direction' => 0,
                'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>", "type_id": "4", "priority": "2", "direction": "0", "description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n", "planned_finish_date": "2021-03-01 08:40:59", "rz_category_id": "2514857"}',
                'user_id' => 4,
                'seller_id' => 0,
                'category_id' => 2,
                'amount_to_work' => 999,
                'observers' => '["15", "16"]',
                'rz_category_id' => 2514857,
            ],
            [
//                "id" => 4,
                'parent_id' => null,
                'name' => 'Группировка товаров =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                'type_id' => 4,
                'direction' => 0,
                'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>", "type_id": "4", "priority": "2", "direction": "0", "description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n", "planned_finish_date": "2021-03-01 08:40:59", "rz_category_id": "2514857"}',
                'user_id' => 4,
                'seller_id' => 0,
                'category_id' => 2,
                'amount_to_work' => 999,
                'observers' => '["15", "16"]',
                'rz_category_id' => 2514857,
            ],
        ]
    ]
];