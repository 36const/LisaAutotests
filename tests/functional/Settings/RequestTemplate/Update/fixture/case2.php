<?php

return [
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'request_templates' => [
            [
//                "id" => 1,
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
//                "id" => 2,
                "parent_id" => null,
                "name" => 'Добавление/изменение видео (Определяется типом задачи)',
                "type_id" => 13,
                "direction" => 0,
                "fields" => '{"1": "1", "subject": "Добавление/изменение видео (Определяется типом задачи)", "type_id": "13", "direction": "0", "description": "description"}',
                "user_id" => 4,
                "seller_id" => null,
                "category_id" => null,
                "amount_to_work" => null,
                "observers" => null,
            ],
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];