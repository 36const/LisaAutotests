<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получение набора готовых значений полей по id шаблона (только обязательные)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "id" => 2
            ],
            "responseCode" => 200,
            "responseBody" => [
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

    'case2' => [
        'setting' => [
            'description' => 'Получение набора готовых значений полей по id шаблона (все)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "requestParameters" => [
                "id" => 2
            ],
            "responseCode" => 200,
            "responseBody" => [
                '1' => '1',
                '14' => '1',
                '159' => '1',
                'subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>|а Добавление/изменение информации',
                'type_id' => '2',
                'priority' => '2',
                'direction' => '1',
                'seller_id' => '-2',
                'category_id' => '1',
                'description' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>|а',
                'amount_to_work' => '10',
                'planned_finish_date' => '2021-01-01 00:00:05',
                'seller_id_title' => 'Все продавцы',
                'category_id_title' => 'Авиабилеты',
            ],
        ]
    ],

];