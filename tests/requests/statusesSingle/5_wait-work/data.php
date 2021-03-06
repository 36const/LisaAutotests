<?php

return [
    'case5_4_1_1' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает взятия в работу" в "Отменена" 1/1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_1_1.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'reasons' => [
                    0 => [
                        'id' => 11,
                        'reason' => 'Другое (описан в коментариях)',
                        'comment_is_required' => 1,
                    ],
                ],
                'status' => 4,
                'currentStatus' => 5,
                'payload' => [
                ],
                'comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Обработано заявок: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 4,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 5,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case5_1_1.php')['lisa_fixtures']['requests_fields'],
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Другое (описан в коментариях) </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 5}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Другое (описан в коментариях) </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 5}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Другое (описан в коментариях) </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 5}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 4,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Другое (описан в коментариях)'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 11
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":5,"new_status":4,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":4,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":null,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":5,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","reason","supervisor_process_date","last_change_status_date","sv_report_periods","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],

    'case5_4_2_2' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает взятия в работу" в "Отменена" 2/2 + отправка запроса в VAT, без вложения при supplier_cabinet_id',
            //для проверки внешних писем при взятии в работу заявки маркета
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_1_2.php',
        'mock_data' => [
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Отменена',
                        //'validated_at' => '2021-12-21+19%3A59%3A03',
                        'reasons' => '',
                        'reasons_ua' => '',
                        'reason_comment' => '',
                        'type' => 'content',
                        'attachments' => '',
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
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'reasons' => [
                    0 => [
                        'id' => 10,
                        'reason' => 'Все товары уже есть на сайте',
                        'comment_is_required' => 0,
                    ],
                ],
                'status' => 4,
                'currentStatus' => 5,
                'payload' => [
                ],
                'comment' => '',
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Обработано заявок: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 2,
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 4,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => '',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
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
                            'previous_status' => 5,
                            'supplier_cabinet_id' => 111,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case5_1_2.php')['lisa_fixtures']['requests_fields'],
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
                            'request_subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте </b>"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 5}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 10,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте </b>"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 5}',
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
                            'request_subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте </b>"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 5}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 4,
                            'reason' => '',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Все товары уже есть на сайте'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 10
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-canceled","fields":{"id":1,"type":"Обновление товаров","reasons":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|Все товары уже есть ЛК","reason_comment":"","user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-canceled","fields":{"id":1,"type":"Оновлення товарів","reasons":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|Все товары уже есть_ua ЛК","reason_comment":"","user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-canceled","fields":{"id":1,"type":"Обновление товаров","reasons":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|Все товары уже есть ЛК","reason_comment":"","user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-canceled","fields":{"id":1,"type":"Оновлення товарів","reasons":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|Все товары уже есть_ua ЛК","reason_comment":"","user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                ],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":5,"new_status":4,"reason":"","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":2,"supervisor_id":10,"manager_id":11,"status":4,"direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)","description":"description","category_id":null,"seller_id":83,"recommendations":null,"reason":"","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":5,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":7,"manager_team":1},"changed_fields_names":["status","supervisor_process_date","last_change_status_date","sv_report_periods","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],

    'case5_6_1_1' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает взятия в работу" во "В работе" 1/1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_1_1.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-work',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'currentStatus' => 5,
                'payload' => [
                    'recommendations' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                ],
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Взято в работу заявок: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date >=' => date('Y-m-d'),
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 5,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case5_1_1.php')['lisa_fixtures']['requests_fields'],
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 6, "oldValue": 5}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 6, "oldValue": 5}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 6, "oldValue": 5}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => []
                ],
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":5,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":6,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"',
                        '","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":5,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","recommendations","actual_start_date","last_change_status_date","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],

    'case5_6_2_2' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает взятия в работу" во "В работе" 2/2 + отправка запроса в VAT, без вложения при supplier_cabinet_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_1_2.php',
        'mock_data' => [
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'В работе',
                        //'validated_at' => '2021-12-21+19%3A59%3A03',
                        'reasons' => '',
                        'reasons_ua' => '',
                        'reason_comment' => '',
                        'type' => 'content',
                        'attachments' => '',
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
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'to-work',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'currentStatus' => 5,
                'payload' => [
                    'recommendations' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                ],
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Взято в работу заявок: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 2,
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date >=' => date('Y-m-d'),
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 5,
                            'supplier_cabinet_id' => 111,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case5_1_2.php')['lisa_fixtures']['requests_fields'],
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
                            'request_subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 6, "oldValue": 5}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 10,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 6, "oldValue": 5}',
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
                            'request_subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 6, "oldValue": 5}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => []
                ],
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-in-progress","fields":{"id":1,"type":"Обновление товаров","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-in-progress","fields":{"id":1,"type":"Оновлення товарів","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-in-progress","fields":{"id":1,"type":"Обновление товаров","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-in-progress","fields":{"id":1,"type":"Оновлення товарів","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                ],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":5,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":2,"supervisor_id":10,"manager_id":11,"status":6,"direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)","description":"description","category_id":null,"seller_id":83,"recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"',
                        '","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":5,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":7,"manager_team":1},"changed_fields_names":["status","recommendations","actual_start_date","last_change_status_date","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],
];
