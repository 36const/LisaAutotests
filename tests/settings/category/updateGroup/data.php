<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение супервайзеров категорий (групповое)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'items' => [
                    1,
                    2
                ],
                'userId' => 23
            ],
            'responseBody' => [
                'status' => 200
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => [
                        [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 23,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 23,
                            'status' => 1
                        ],
                        [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                    ],
                    'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    '{"action":"update","entity":"categories","fields_data":{"id":1,"title":"Авиабилеты","difficulty":2,"supervisor_id":"23","status":"1"},"changed_fields_names":["supervisor_id"]}',
                    '{"action":"update","entity":"categories","fields_data":{"id":2,"title":"Видео к товару","difficulty":3,"supervisor_id":"23","status":"1"},"changed_fields_names":["supervisor_id"]}',
                ],
            ],
        ]
    ],

];
