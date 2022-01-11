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
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                    ],
                    'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'categories',
                            'entity_id' => 1,
                            'old_value' => '{"supervisor_id": 6}',
                            'new_value' => '{"supervisor_id": 23}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                        [
                            'id' => 2,
                            'entity' => 'categories',
                            'entity_id' => 2,
                            'old_value' => '{"supervisor_id": 10}',
                            'new_value' => '{"supervisor_id": 23}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ],
                    ]
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
