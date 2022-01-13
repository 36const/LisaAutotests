<?php

return [
    'case7_6_1_1' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает" во "В работе" тип 1 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_6_1_1.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-work',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'currentStatus' => 7,
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
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 7,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case7_6_1_1.php')['lisa_fixtures']['requests_fields'],
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 7}',
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 7}',
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 7}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => '2020-01-01 00:00:01',
                            'manager_id' => 11,
                            'reasons' => 'Другое (описан в коментариях), Требуется уточнение информации по задаче'
                        ],
                        [
                            "id" => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 7,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":7,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":6,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":7,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","recommendations","last_change_status_date","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],
    
    'case7_6_1_2' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает" во "В работе" тип 1 направление 2 + добавление файлов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_6_1_2.php',
        'mock_data' => [
            $mockDataStatusesSingle,
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
                        'type' => 'content'
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
            ]
        ],
        'provider_data' => [
            'requestParameter' => 'to-work',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'currentStatus' => 7,
                'payload' => [
                    'recommendations' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                    'files' => [
                        0 => [
                            'folder' => 1631802792673,
                            'fileName' => '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => 60424,
                        ],
                        1 => [
                            'folder' => 1631802792673,
                            'fileName' => '803902_doc .doc',
                            'alias' => 'doc .doc',
                            'size' => 34304,
                        ],
                        2 => [
                            'folder' => 1631802792673,
                            'fileName' => '803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'size' => 97152,
                        ],
                        3 => [
                            'folder' => 1631802792673,
                            'fileName' => '803902_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'alias' => '~!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'size' => 34304,
                        ],
                    ],
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
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 7,
                            'supplier_cabinet_id' => 111,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case7_6_1_2.php')['lisa_fixtures']['requests_fields'],
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "doc .doc", "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": []}, "oldValue": []}',
                            'notify_service_id' => NULL,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "doc .doc", "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": []}, "oldValue": []}',
                            'notify_service_id' => NULL,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "doc .doc", "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": []}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 4,
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 5,
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 7}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 6,
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 7}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => '2020-01-01 00:00:01',
                            'manager_id' => 11,
                            'reasons' => 'Другое (описан в коментариях), Требуется уточнение информации по задаче'
                        ],
                        [
                            "id" => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 7,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-in-progress","fields":{"id":1,"type":"Добавление товаров","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-in-progress","fields":{"id":1,"type":"Додавання товарів","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-in-progress","fields":{"id":1,"type":"Добавление товаров","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-in-progress","fields":{"id":1,"type":"Додавання товарів","amount_to_work":10,"user_name":"Менеджер Розетки","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                ],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":7,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803902_doc .doc","alias":"doc .doc","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"doc .doc","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_doc.doc","size":34304}},' .
                    '{"folder":"1631802792673","fileName":"803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","size":"97152","attachment":{"id":7,"request_id":1,"file_name_old":"","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx","size":97152}},' .
                    '{"folder":"1631802792673","fileName":"803902_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":8,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":10,"manager_id":11,"status":6,"direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)","description":"description","category_id":null,"seller_id":83,"recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":7,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":7,"manager_team":1},"changed_fields_names":["status","recommendations","last_change_status_date","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],
];
