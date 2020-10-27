<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 1,
                "status" => 7,
                "direction" => 2,
                "reason_id" => 2,
                "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                "category_id" => null,
                "seller_id" => 83,
                "team_direction" => 2,
                "photo_load_status" => 0
            ],
        ],
        "requests_fields" => [],
        "reasons" => [
            [
                //"id" => 1,
                "parent_status" => 6,
                "child_status" => 7,
                "reason" => "Ожидается загрузка фото в товары",
                "status" => 1
            ],
            [
                //"id" => 2,
                "parent_status" => 6,
                "child_status" => 7,
                "reason" => "Требуется уточнение информации по задаче",
                "status" => 1
            ],
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];