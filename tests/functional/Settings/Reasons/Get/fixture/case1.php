<?php

return [
    "lisa_fixtures" => [
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
            [
                //"id" => 11,
                "parent_status" => 1,
                "child_status" => 4,
                "reason" => "Дубль задачи",
                "status" => 1
            ],
            [
                //"id" => 12,
                "parent_status" => 1,
                "child_status" => 4,
                "reason" => "Все товары уже есть на сайте",
                "status" => 0
            ],
        ],
    ],
];