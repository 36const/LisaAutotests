<?php
return [
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        'request_templates' => [
            [
//                "id" => 1,
                "parent_id" => null,
                "name" => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                "type_id" => 4,
                "direction" => 0,
                "fields" => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>", "type_id": "4", "priority": "2", "direction": "0", "description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n", "planned_finish_date": "2021-03-01 08:40:59"}',
                "user_id" => 4,
                "seller_id" => 0,
                "category_id" => 2,
                "amount_to_work" => 999,
                "observers" => '["15", "16"]',
            ],
            [
//                "id" => 2,
                "parent_id" => null,
                "name" => 'Добавление',
                "type_id" => 1,
                "direction" => 2,
                "fields" => '{"subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                "user_id" => 4,
                "seller_id" => 0,
                "category_id" => null,
                "amount_to_work" => 10,
                "observers" => null,
            ],
        ]
    ],

    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];