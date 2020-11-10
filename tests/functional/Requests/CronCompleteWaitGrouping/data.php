<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает (ризоны)" в "Частично выполнено / Выполнено" при ответе false',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/new-items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            "application/json; charset=UTF-8"
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case1.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 8,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => 7,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
//                            "actual_finish_date" => null,
//                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ],
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 15,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 19,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 142,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 143,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Маркета)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает"</b> на <b>"Частично выполнена"</b> пользователем <b>Администратор</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Маркета)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает"</b> на <b>"Частично выполнена"</b> пользователем <b>Администратор</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Маркета)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает"</b> на <b>"Частично выполнена"</b> пользователем <b>Администратор</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 2,
                            "old_status" => 7,
                            "new_status" => 8,
                            "reason_id" => 7,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            //"created_at" => "2020-01-01 00:00:01",
                            "manager_id" => 11
                        ],
                    ],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность перевода из "Ожидает (ризоны)" в "Выполнена" при ответе true',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'mock_data' => [
            'Gomer' => [
                'httpRequest' => [
                    'method' => 'GET',
                    'path' => '/new-items/check-bpm',
                    'queryStringParameters' => [
                        'bpm_number' => [
                            '1'
                        ]
                    ]
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            "application/json; charset=UTF-8"
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case2.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 7,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => 17,
                            "reason" => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка товаров по этой заявке.',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 15,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 19,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 142,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 143,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                    ],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'transition_info' => [
                        [
                            "request_id" => 1,
                            "status" => 9,
                            "reason_id" => null,
                            "reason" => null
                        ],
                    ]
                ]
            ]
        ]
    ],

//    'case3' => [
//        'setting' => [
//            'description' => 'Перевод двух заявок из "Ожидает (ризоны)" в "Частично выполнено / Выполнено"',
//        ],
//        'fixture_data' => include __DIR__ . '/fixture/case3.php',
//        'mock_data' => [
//            'Gomer' => [
//                'httpRequest' => [
//                    'method' => 'GET',
//                    'path' => '/new-items/check-bpm',
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
//                            "attachments" => '[]',
//                            "category_id" => null,
//                            "seller_id" => 83,
//                            "recommendations" => '',
//                            "reason_id" => 7,
//                            "reason" => null,
//                            "parent_id" => null,
//                            "planned_start_date" => null,
//                            "planned_finish_date" => null,
//                            "actual_start_date" => '2020-01-01 00:00:03',
////                            "actual_finish_date" => null,
////                            "supervisor_process_date" => null,
//                            "supervisor_check_date" => null,
//                            "difficulty" => null,
//                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            "supervisor_comment" => '',
//                            //"last_change_status_date" => "2020-01-01 00:00:01",
//                            "team_direction" => 2,
//                            "report_period_id" => null,
//                            "sync_source_id" => null,
//                            "sv_report_periods" => '{"1": 1}',
//                            "cross_check_status" => '0',
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
//                            "attachments" => '[]',
//                            "category_id" => null,
//                            "seller_id" => 83,
//                            "recommendations" => '',
//                            "reason_id" => null,
//                            "reason" => null,
//                            "parent_id" => null,
//                            "planned_start_date" => null,
//                            "planned_finish_date" => null,
//                            "actual_start_date" => '2020-01-01 00:00:03',
//                            //"actual_finish_date" => null,
//                            //"supervisor_process_date" => '2020-01-01 00:00:02',
//                            "supervisor_check_date" => null,
//                            "difficulty" => null,
//                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            "supervisor_comment" => '',
//                            //"last_change_status_date" => "2020-01-01 00:00:01",
//                            "team_direction" => 2,
//                            "report_period_id" => null,
//                            "sync_source_id" => null,
//                            "sv_report_periods" => '{"1": 1}',
//                            "cross_check_status" => '0',
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
//                            'value' => null,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 114,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 122,
//                            'value' => null,
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
//                            'value' => null,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 158,
//                            'value' => null,
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
//                            'value' => null,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 114,
//                            'value' => 3,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 122,
//                            'value' => null,
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
//                            'value' => null,
//                        ],
//                        [
//                            'request_id' => 2,
//                            'field_id' => 158,
//                            'value' => null,
//                        ],
//                    ],
////                    'user_notifications' => [
////                        [
////                            "id" => 1,
////                            "user_id" => 4,
////                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Маркета)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"В работе"</b> на <b>"Частично выполнена"</b> пользователем <b>Константин Куцан</b>',
////                            "status" => 0,
////                            //"created_at" => '2020-01-01 00:00:01',
////                            "request_id" => 1,
////                            "priority" => 2,
////                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
////                        ],
////                        [
////                            "id" => 2,
////                            "user_id" => 6,
////                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Маркета)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"В работе"</b> на <b>"Частично выполнена"</b> пользователем <b>Константин Куцан</b>',
////                            "status" => 0,
////                            //"created_at" => '2020-01-01 00:00:01',
////                            "request_id" => 1,
////                            "priority" => 2,
////                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
////                        ],
////                        [
////                            "id" => 3,
////                            "user_id" => 11,
////                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Маркета)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"В работе"</b> на <b>"Частично выполнена"</b> пользователем <b>Константин Куцан</b>',
////                            "status" => 0,
////                            //"created_at" => '2020-01-01 00:00:01',
////                            "request_id" => 1,
////                            "priority" => 2,
////                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
////                        ],
////                    ],
//                    'request_status_history' => [
//                        [
//                            "id" => 1,
//                            "request_id" => 1,
//                            "user_id" => 4,
//                            "old_status" => 7,
//                            "new_status" => 8,
//                            "reason_id" => 7,
//                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            //"created_at" => "2020-01-01 00:00:01",
//                            "manager_id" => 2
//                        ],
//                        [
//                            "id" => 2,
//                            "request_id" => 2,
//                            "user_id" => 4,
//                            "old_status" => 7,
//                            "new_status" => 8,
//                            "reason_id" => null,
//                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
//                            //"created_at" => "2020-01-01 00:00:01",
//                            "manager_id" => 2
//                        ]
//                    ],
//                    'transition_info' => []
//                ]
//            ]
//        ]
//    ],
];
