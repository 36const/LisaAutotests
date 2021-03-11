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
                "parent_id" => 1,
                "name" => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                "type_id" => 4,
                "direction" => 0,
                "fields" => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>", "type_id": "4", "priority": "2", "direction": "0", "seller_id": "0", "category_id": "2", "description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\n", "amount_to_work": "999", "planned_finish_date": "2021-03-01 08:40:59"}',
            ],
            [
//                "id" => 2,
                "parent_id" => 1,
                "name" => 'Добавление/изменение информации',
                "type_id" => 2,
                "direction" => 1,
                "fields" => '{"1": "1", "14": "1", "159": "1", "subject": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>|а Добавление/изменение информации", "type_id": "2", "priority": "2", "direction": "1", "seller_id": "-2", "category_id": "1", "description": "!@#$%^&*()_+`-]\'/[;.,}\"?{:>|а", "amount_to_work": "10", "planned_finish_date": "2021-01-01 00:00:05"}',
            ],
        ]
    ],

    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];