<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 1,
                "status" => 11,
                "direction" => 1,
                "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "category_id" => 1,
                "seller_id" => null,
                "team_direction" => 3,
                "photo_load_status" => 0
            ],
        ],
        "requests_fields" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];