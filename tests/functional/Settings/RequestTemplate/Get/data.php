<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получение набора готовых значений полей по id шаблона',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "id" => 2
            ],
            "responseCode" => 200,
            "responseBody" => [
                "5" => "1",
                "160" => "1",
                "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "type_id" => "1",
                "direction" => "2",
                "seller_id" => "0",
                "description" => "description",
                "amount_to_work" => "10",
                "seller_id_title" => "Маркетплейс (общий)"
            ],
        ]
    ],

];