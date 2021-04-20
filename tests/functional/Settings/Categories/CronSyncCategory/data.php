<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление новой розетовской категории из стора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'message' => '{"data":{"id":80022,"mpath":".4627949.80257.4627865.","title":"Диктофоны","status":"active","status_inherited":"active","order":18,"ext_id":0,"name":"dictophones","titles_mode":"inherited","kits_show":"show","parent_id":4627865,"left_key":12165,"right_key":12166,"level":4,"created_at":"2017-08-08T16:33:38Z","is_deleted":false,"sections_list":"Портативная электроника Диктофоны","href":"https://rozetka.com.ua/dictophones/c80022/","rz_mpath":".4627949.80257.4627865.80022.","allow_index_three_parameters":false,"on_subdomain":"none","oversized":"default","is_subdomain":false,"disable_kit_ratio":false,"is_rozetka_top":true,"uk":null,"use_group_links":"inherited"},"changed":[], "time": "2021-04-01T11:52:00.497061299Z"}',
            'db' => [
                "lisa_fixtures" => [
                    "rozetka_categories" => [
                        [
                            "id" => 80020,
                            "title" => "Игровые консоли и детские приставки",
                            "mpath" => ".80253.80261.",
                            "status" => "active",
                            "deleted" => null,
                            "parent_id" => 80261
                        ],
                        [
                            "id" => 80022,
                            "title" => "Диктофоны",
                            "mpath" => ".4627949.80257.4627865.",
                            "status" => "active",
                            "deleted" => null,
                            "parent_id" => 4627865
                        ]
                    ],
                ],
            ],
            'RabbitMQ' => [
                'goods-service-lisa' => [],
            ]
        ]
    ],

];
