<?php

return [
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'request_templates' => [
            [
//                "id" => 1,
                "parent_id" => null,
                "name" => 'Добавление',
                "type_id" => 1,
                "direction" => 2,
                "fields" => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "seller_id": "83", "description": "description", "amount_to_work": "10"}',
            ],
            [
//                "id" => 2,
                "parent_id" => null,
                "name" => 'Добавление/изменение видео (Определяется типом задачи)',
                "type_id" => 13,
                "direction" => 0,
                "fields" => '{"1": "1", "subject": "Добавление/изменение видео (Определяется типом задачи)", "type_id": "13", "direction": "0", "category_id": "2", "description": "description", "amount_to_work": "10"}',
            ],
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];