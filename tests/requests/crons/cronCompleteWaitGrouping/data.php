<?php

use lisa\RequestsTester;

$mockDataCronCompleteWaitGrouping = [
    RequestsTester::interiorMockArray('request-create', 83),
    RequestsTester::interiorMockArray('request-revision', 83),
    RequestsTester::interiorMockArray('request-in-progress', 83),
    RequestsTester::interiorMockArray('request-completed', 83),
    RequestsTester::interiorMockArray('request-canceled', 83),
    RequestsTester::interiorMockArray('request-update', 83),
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Перевод 7->8 при ответе false/false on-mod/wait-group',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case1.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping
        ],
        'provider_data' => [
            'status' => 8,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 8,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 7,
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ],
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"С палитрой": "Да", "Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "С размерной сеткой": "Да", "Коэффициент типа задачи": "3", "Общее количество ошибок": "0", "Количество сгруппированых товаров": "5", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "(не указан)", "Рассчитанное количество добавленных товаров": "60"}',
                            'triggered_by' => 'Администратор',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "3", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "(не указан)"}',
                            'triggered_by' => 'Администратор',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "3", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "(не указан)"}',
                            'triggered_by' => 'Администратор',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => '2020-01-01 00:00:01',
                            'manager_id' => 11,
                            'reasons' => 'Ожидает группировки'
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 2,
                            'old_status' => 7,
                            'new_status' => 8,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Товары ушли в ошибки'
                        ],
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 7,
                        ]
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Маркета)` перешла в статус `Частично выполнена`","notification":"Администратор <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Маркета)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> (не указан) </br><b>С размерной сеткой:</b> Да </br><b>С палитрой:</b> Да </br><b>Вид структуры:</b> (не указан) </br><b>Рассчитанное количество добавленных товаров:</b> 60 </br><b>Коэффициент типа задачи:</b> 3 </br><b>Коэффициент уровня сложности задачи:</b> (не указан) </br><b>Количество сгруппированых товаров:</b> 5 </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Маркета)` перешла в статус `Частично выполнена`","notification":"Администратор <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Маркета)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> (не указан) </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 3 </br><b>Коэффициент уровня сложности задачи:</b> (не указан) </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность перевода 7->8 при ответе false/true on-mod/wait-group',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case2.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping
        ],
        'provider_data' => [
            'status' => 7,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_reasons'],
                    'transition_info' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['transition_info'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность перевода 7->8 при ответе true/false on-mod/wait-group',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case3.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping
        ],
        'provider_data' => [
            'status' => 7,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests_reasons'],
                    'transition_info' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['transition_info'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность перевода 7->8 при ответе true/true on-mod/wait-group',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case4.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping
        ],
        'provider_data' => [
            'status' => 7,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests_reasons'],
                    'transition_info' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['transition_info'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность перевода 7->8 при ответе false/false on-mod/wait-group, но оставшемся другом ризоне статуса 7',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case1.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping
        ],
        'provider_data' => [
            'status' => 7,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 3,
                        ]
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Автоизменение ризона при ответе true/false on-mod/wait-group, с изначально установленным ризоном wait-group',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case3.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping
        ],
        'provider_data' => [
            'status' => 7,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 15,
                        ]
                    ],
                    'transition_info' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['transition_info'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Автоизменение ризона при ответе false/true on-mod/wait-group, с изначально установленным ризоном on-mod',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case2.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping
        ],
        'provider_data' => [
            'status' => 7,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 14,
                        ]
                    ],
                    'transition_info' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['transition_info'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Невозможность перевода 7->8 при ответе false/false on-mod/wait-group, но без вложений при supplier_cabinet_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case1.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping,
        ],
        'provider_data' => [
            'status' => null,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case8.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case8.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case8.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => (include __DIR__ . '/fixture/case8.php')['lisa_fixtures']['requests_reasons'],
                    'transition_info' => (include __DIR__ . '/fixture/case8.php')['lisa_fixtures']['transition_info'],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'class' => 'app\\infra\\exceptions\\RequestValidationException',
                            'message' => 'Заявка не сохранилась: Для выполнения задачи необходимо загрузить файл(ы) для отображения в Кабинете Поставщика',
                            'file' => '/builds/gomer/lisa/api/models/Request.php',
                            'code' => 0,
                            'user' => 'console',
                        ],
                        [
                            'id' => 2,
                            'class' => 'yii\\db\\Exception',
                            'message' => 'Array
(
    [status] => Array
        (
            [0] => Для выполнения задачи необходимо загрузить файл(ы) для отображения в Кабинете Поставщика
        )

)
',
                            'file' => '/builds/gomer/lisa/api/console/actions/CompleteWaitGroupingAction.php',
                            'code' => 0,
                            'user' => 'console',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Перевод 7->8 при ответе false/false on-mod/wait-group, с вложением при supplier_cabinet_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case1.json'),
                    'statusCode' => 200
                ],
            ],
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 1,
                        'status' => 'Частично выполнена',
                        //'validated_at' => '2021-12-21+19%3A59%3A03',
                        'reasons' => '',
                        'reasons_ua' => '',
                        'reason_comment' => '',
                        'type' => 'content',
                        'attachments[0]' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json;charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(codecept_data_dir('/Vat/case200.json')),
                    'statusCode' => 200
                ],
            ],
            $mockDataCronCompleteWaitGrouping,
        ],
        'provider_data' => [
            'status' => 8,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 8,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 7,
                            'supplier_cabinet_id' => 1,
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ],
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"С палитрой": "Да", "Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "С размерной сеткой": "Да", "Коэффициент типа задачи": "3", "Общее количество ошибок": "0", "Количество сгруппированых товаров": "5", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "(не указан)", "Рассчитанное количество добавленных товаров": "60"}',
                            'triggered_by' => 'Администратор',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "3", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "(не указан)"}',
                            'triggered_by' => 'Администратор',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "3", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "(не указан)"}',
                            'triggered_by' => 'Администратор',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => '2020-01-01 00:00:01',
                            'manager_id' => 11,
                            'reasons' => 'Ожидает группировки'
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 2,
                            'old_status' => 7,
                            'new_status' => 8,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Товары ушли в ошибки'
                        ],
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 7,
                        ]
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[\"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803902_doc.doc\",\"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Маркета)` перешла в статус `Частично выполнена`","notification":"Администратор <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Маркета)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> (не указан) </br><b>С размерной сеткой:</b> Да </br><b>С палитрой:</b> Да </br><b>Вид структуры:</b> (не указан) </br><b>Рассчитанное количество добавленных товаров:</b> 60 </br><b>Коэффициент типа задачи:</b> 3 </br><b>Коэффициент уровня сложности задачи:</b> (не указан) </br><b>Количество сгруппированых товаров:</b> 5 </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":2,"userId":6,"attachments":"[\"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803902_doc.doc\",\"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Маркета)` перешла в статус `Частично выполнена`","notification":"Администратор <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Маркета)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> (не указан) </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 3 </br><b>Коэффициент уровня сложности задачи:</b> (не указан) </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
            ],
        ]
    ],

//    'case3' => [
//        'setting' => [
//            'description' => 'Перевод двух заявок из "Ожидает" в "Частично выполнено / Выполнено"',
//        ],
//        'fixture_data' => include __DIR__ . '/fixture/case3.php',
//        'mock_data' => [
//            'Gomer' => [
//                'httpRequest' => [
//                    'method' => 'GET',
//                    'path' => '/items/check-bpm',
//                    'queryStringParameters' => [
//                        'bpm_number' => [
//                            '1,2'
//                        ]
//                    ]
//                ],
//                'httpResponse' => [
//                    'headers' => [
//                        'content-type' => [
//                            "application/json; charset=UTF-8"
//                        ]
//                    ],
//                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case3.json'),
//                    'statusCode' => 200
//                ],
//            ],
//        ],
//        'provider_data' => [
//            'db' => [
//                'lisa_fixtures' => [
//                    'requests' => [
//                        [
//                            "id" => 1,
//                            "author_id" => 4,
//                            "type_id" => 1,
//                            "supervisor_id" => 6,
//                            "manager_id" => 11,
//                            "status" => 8,
//                            "direction" => 2,
//                            "priority" => 2,
//                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
//                            "correction_comment" => '',
//                            "amount_to_work" => 10,
//                            "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
//                            "description" => 'description',
//                            //                            "category_id" => null,
//                            "seller_id" => 83,
//                            "recommendations" => '',
//                            "reason" => null,
//                            "parent_id" => null,
//                            "planned_start_date" => null,
//                            "planned_finish_date" => null,
//                            "actual_start_date" => '2020-01-01 00:00:03',
////                            "actual_finish_date" => null,
////                            "supervisor_process_date" => null,
//                            "supervisor_check_date" => null,
//                            //                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            "supervisor_comment" => '',
//                            //"last_change_status_date" => "2020-01-01 00:00:01",
//                            "team_direction" => 2,
//                            "report_period_id" => null,
//                            "sync_source_id" => null,
//                            "sv_report_periods" => '{"1": 1}',
//                            "cross_check_status" => 0,
//                            "cross_check_manager_id" => null,
//                            "employee_code_1c" => null,
//                            "child_count" => 0,
//                            "photo_load_status" => 0,
//                        ],
//                        [
//                            "id" => 2,
//                            "author_id" => 4,
//                            "type_id" => 1,
//                            "supervisor_id" => 6,
//                            "manager_id" => 11,
//                            "status" => 9,
//                            "direction" => 2,
//                            "priority" => 2,
//                            "awaiting_correction" => 0,
//                            "created_at" => '2020-01-01 00:00:00',
//                            "correction_comment" => '',
//                            "amount_to_work" => 10,
//                            "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
//                            "description" => 'description',
//                            //                            "category_id" => null,
//                            "seller_id" => 83,
//                            "recommendations" => '',
//                            "reason" => null,
//                            "parent_id" => null,
//                            "planned_start_date" => null,
//                            "planned_finish_date" => null,
//                            "actual_start_date" => '2020-01-01 00:00:03',
//                            //"actual_finish_date" => null,
//                            //"supervisor_process_date" => '2020-01-01 00:00:02',
//                            "supervisor_check_date" => null,
//                            //                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            "supervisor_comment" => '',
//                            //"last_change_status_date" => "2020-01-01 00:00:01",
//                            "team_direction" => 2,
//                            "report_period_id" => null,
//                            "sync_source_id" => null,
//                            "sv_report_periods" => '{"1": 1}',
//                            "cross_check_status" => 0,
//                            "cross_check_manager_id" => null,
//                            "employee_code_1c" => null,
//                            "child_count" => 0,
//                            "photo_load_status" => 0,
//                        ]
//                    ],
//                    'requests_fields' => [
//                        [
//                            'request_id' => 1,
//                            'field_id' => 8,
//                            'value' => 1,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 15,
//                            'value' => 1,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 19,
//                            'value' => 1,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 25,
//                            'value' => 18,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 49,
//                            'value' => 60,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 50,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 51,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 53,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 60,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 64,
//                            'value' => 60,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 66,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 72,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 73,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 74,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 75,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 89,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 93,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 94,
//                            'value' => 5,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 101,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 114,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 122,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 142,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 143,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 146,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 158,
//                            'value' => 0,
//                        ],
//
//                        [
//                            'request_id' => 2,
//                            'field_id' => 8,
//                            'value' => 1,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 15,
//                            'value' => 1,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 19,
//                            'value' => 1,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 25,
//                            'value' => 18,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 49,
//                            'value' => 60,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 50,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 51,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 53,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 60,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 64,
//                            'value' => 60,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 66,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 72,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 73,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 74,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 75,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 89,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 93,
//                            'value' => 10,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 94,
//                            'value' => 5,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 101,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 114,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 122,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 142,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 143,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 146,
//                            'value' => 0,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 158,
//                            'value' => 0,
//                        ],
//                    ],
////                    'user_notifications' => [
////                        [
////                            "id" => 1,
////                            "user_id" => 4,
////                            "notification" => '',
////                            "status" => 0,
////                            //"created_at" => '2020-01-01 00:00:01',
////                            "request_id" => 1,
////                            "priority" => 2,
////                        ],
////                        [
////                            "id" => 2,
////                            "user_id" => 6,
////                            "notification" => '',
////                            "status" => 0,
////                            //"created_at" => '2020-01-01 00:00:01',
////                            "request_id" => 1,
////                            "priority" => 2,
////                        ],
////                        [
////                            "id" => 3,
////                            "user_id" => 11,
////                            "notification" => '',
////                            "status" => 0,
////                            //"created_at" => '2020-01-01 00:00:01',
////                            "request_id" => 1,
////                            "priority" => 2,
////                        ],
////                    ],
//                    'request_status_history' => [
//                        [
//                            "id" => 1,
//                            "request_id" => 1,
//                            "user_id" => 4,
//                            "old_status" => 7,
//                            "new_status" => 8,
//                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            "created_at >=" => date("Y-m-d"),
//                            "manager_id" => 2
//                        ],
//                        [
//                            "id" => 2,
//                            "request_id" => 2,
//                            "user_id" => 4,
//                            "old_status" => 7,
//                            "new_status" => 8,
//                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            "created_at >=" => date("Y-m-d"),
//                            "manager_id" => 2
//                        ]
//                    ],
//                    'transition_info' => []
//                ]
//            ]
//        ]
//    ],
];
