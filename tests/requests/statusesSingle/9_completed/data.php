<?php

return [
    'case9_11_1_1' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" в "Закрыта" тип 1 направление 1 + нотификации',
            //доп. изменяются Продавец, Приоритет, Ур. сложности, Рекомендации, Комментарий СВ, Отч. период КМ, Проверенные ссылки
            //поля результатов задачи 76, 77, 21, 23, 24, 27 и Кол-во проверенных товаров
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                20 => 66,
                21 => 2,
                23 => 12,
                24 => 16,
                27 => NULL,
                65 => '10',
                76 => '20',
                77 => '',
                121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'seller_id' => -2,
                'priority' => NULL,
                'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'supervisor_comment' => 'Комментарий супервайзера',
                'report_period_id' => 1,
                'status' => 11,
                'currentStatus' => 9,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
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
                            'status' => 11,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => -2,
                            'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => 'Комментарий супервайзера',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 3,
                            'report_period_id' => 1,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ],
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 66,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 12,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 16,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 20.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 20.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 157,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "11", "oldValue": 9}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "11", "oldValue": 9}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "11", "oldValue": 9}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "11", "oldValue": 9}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 11,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null,
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Закрыта`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> в статус <b>\"Закрыта\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 6 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 2 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Закрыта`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> в статус <b>\"Закрыта\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 6 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 2 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"66"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"2"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"12"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"16"},"changed_fields_names":["value"]}',
                    '{"action":"delete","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":65,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"20"},"changed_fields_names":["value"]}',
                    '{"action":"delete","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory =~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"20.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"20.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":51,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"2"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":11,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":"11","direction":1,"priority":null,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":"-2","recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"Комментарий супервайзера","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":"1","sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","priority","seller_id","recommendations","supervisor_check_date","supervisor_comment","last_change_status_date","report_period_id","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_11_1_2' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" в "Закрыта" тип 1 направление 2 + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_1_2.php',
        'mock_data' => [
            $mockDataStatusesSingle,
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Закрыта',
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
                    'body' => file_get_contents(codecept_data_dir('/Vat/case400.json')),
                    'statusCode' => 400
                ],
            ]
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'priority' => NULL,
                'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'supervisor_comment' => 'Комментарий супервайзера',
                'report_period_id' => 1,
                'status' => 11,
                'currentStatus' => 9,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
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
                            'status' => 11,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => 'Комментарий супервайзера',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => 1,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => 111,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case9_6_1_2.php')['lisa_fixtures']['requests_fields'],
                    'request_errors' => [],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "11", "oldValue": 9}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "11", "oldValue": 9}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "11", "oldValue": 9}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 11,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null,
                        ]
                    ],
                    'requests_reasons' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\Exception',
                            'message' => "{\n    \"status\": 400,\n    \"errors\": {\n        \"status\": [\n            \"Значение «Статус заявки» должно быть числом.\"\n        ]\n    }\n}",
                            'file LIKE' => '%/api/infra/apiClients/VATApiClient.php',
                            'code' => 400
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":11,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":"11","direction":2,"priority":null,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Маркета)","description":"description","category_id":null,"seller_id":83,"recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"Комментарий супервайзера","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":"1","sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","priority","recommendations","supervisor_check_date","supervisor_comment","last_change_status_date","report_period_id","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_1_1' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 1 направление 1 + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
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
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 157,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 9}',
                            'notify_service_id' => null
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 9}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 9}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
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
                            'changed_fields' => '{"newValue": 6, "oldValue": 9}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
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
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `В работе`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"В работе\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `В работе`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"В работе\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":65,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":51,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":60,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":101,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":122,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":6,"direction":1,"priority":2,"awaiting_correction":1,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","awaiting_correction","supervisor_check_date","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_1_2' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 1 направление 2',
            //при переводе в статус кроме 8/9 вложение для vat не обязательно
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_1_2.php',
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
                    'body' => file_get_contents(codecept_data_dir('/Vat/case404.json')),
                    'statusCode' => 404
                ],
            ]
        ],
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    70 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                    ],
                    90 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    91 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
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
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 1,
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
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => 111,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
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
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
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
                            'field_id' => 89,
                            'value' => 3,
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
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 118,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 70,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 90,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 91,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                    ],
                    'request_attachments' => (include __DIR__ . '/fixture/case9_6_1_2.php')['lisa_fixtures']['request_attachments'],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\Exception',
                            'message' => "{\n    \"id\": 1,\n    \"status\": 404,\n    \"errors\": {\n        \"id\": \"Заявка не найдена\"\n    }\n}",
                            'file LIKE' => '%/api/infra/apiClients/VATApiClient.php',
                            'code' => 404,
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":65,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":51,"value":"30"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":60,"value":"30"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":101,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":122,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":6,"direction":2,"priority":2,"awaiting_correction":1,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Маркета)","description":"description","category_id":null,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","awaiting_correction","supervisor_check_date","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_2_1' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 2 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_2_1.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 2,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ],
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":65,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":51,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":60,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":101,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":122,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":2,"supervisor_id":6,"manager_id":11,"status":6,"direction":1,"priority":2,"awaiting_correction":1,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","awaiting_correction","supervisor_check_date","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_2_2' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 2 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_2_2.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    70 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                    ],
                    90 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    91 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 2,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
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
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
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
                            'field_id' => 89,
                            'value' => 3,
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
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 70,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 90,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 91,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
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
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":65,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":50,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":51,"value":"30"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":60,"value":"30"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":101,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":122,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":2,"supervisor_id":6,"manager_id":11,"status":6,"direction":2,"priority":2,"awaiting_correction":1,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление/изменение информации в существующих товарах (Работа с товарами Маркета)","description":"description","category_id":null,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","awaiting_correction","supervisor_check_date","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_3_1' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 3 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_3_1.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 3,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_3_2' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 3 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_3_2.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    70 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                    ],
                    90 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    91 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 3,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Перенос товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
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
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
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
                            'field_id' => 89,
                            'value' => 3,
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
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 70,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 90,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 91,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_4_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 4 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_4_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    95 => '10',
                    103 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    95 => [
                        'errorsCount' => '3',
                        'itemsCount' => '7',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    96 => [
                        'errorsCount' => '7',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 4,
                            'supervisor_id' => 33,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Группировка товаров (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 4,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => 753399,
                            'author_team' => 17,
                            'supervisor_team' => 14,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 32,
                            'value' => 52,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 61,
                            'value' => 210,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 118.2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 91,
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
                            'value' => 300,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 95,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 103,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 116,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 161,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 162,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 163,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 164,
                            'value' => 0.7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 165,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 166,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 167,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 168,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 169,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 170,
                            'value' => 0.7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 171,
                            'value' => 0.07,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 172,
                            'value' => 0.15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 173,
                            'value' => 0.1,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 7,
                            'field_value_id' => 95,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 7,
                            'items_with_errors' => 3,
                            'field_value_id' => 96,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 33,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
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
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":95,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":103,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":101,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":122,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":4,"supervisor_id":33,"manager_id":11,"status":6,"direction":0,"priority":2,"awaiting_correction":1,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Группировка товаров (Определяется типом задачи)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":4,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":753399,"author_team":17,"supervisor_team":14,"manager_team":1},"changed_fields_names":["status","awaiting_correction","supervisor_check_date","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_5_1' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 5 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_5_1.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 5,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_6_2' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 6 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_6_2.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    70 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                    ],
                    90 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    91 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 6,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Проверка скрытых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
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
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
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
                            'field_id' => 89,
                            'value' => 3,
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
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 70,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 90,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 91,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_7_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 7 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_7_0.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    104 => '10',
                    105 => '10',
                    106 => '10',
                    107 => '10',
                    109 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    99 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    101 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    108 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 7,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 6,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 16,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 6,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 7,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 28,
                            'value' => 27,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 55,
                            'value' => 273.3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 79,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 80,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 81,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 84,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 85,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 90,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 97,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 98,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 99,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 104,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 105,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 106,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 107,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 109,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 112,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 115,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 99,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 101,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 108,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
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
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":65,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":104,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":105,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":106,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":107,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":109,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":101,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":122,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":7,"supervisor_id":35,"manager_id":11,"status":6,"direction":0,"priority":2,"awaiting_correction":1,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":6,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":16,"manager_team":1},"changed_fields_names":["status","awaiting_correction","supervisor_check_date","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_8_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 8 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_8_0.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    104 => '10',
                    105 => '10',
                    106 => '10',
                    107 => '10',
                    109 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    99 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    101 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    108 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 8,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 6,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 16,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 6,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 7,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 28,
                            'value' => 27,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 55,
                            'value' => 273.3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 79,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 80,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 81,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 84,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 85,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 90,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 97,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 98,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 99,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 104,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 105,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 106,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 107,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 109,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 112,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 115,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 99,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 101,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 108,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_9_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 9 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_9_0.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    104 => '10',
                    105 => '10',
                    106 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    108 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                    ],
                    126 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                    132 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 9,
                            'supervisor_id' => 34,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 5,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 15,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 59,
                            'value' => 30.55,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 79,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 80,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 84,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 91,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 97,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 98,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 99,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 104,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 105,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 106,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 108,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 126,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 132,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
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
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":104,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":105,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":106,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":121,"value":"https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":101,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":122,"value":"10"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":9,"new_status":6,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":9,"supervisor_id":34,"manager_id":11,"status":6,"direction":0,"priority":2,"awaiting_correction":1,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление параметров/значений (Определяется типом задачи)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"2020-01-01 00:00:04","supervisor_process_date":"2020-01-01 00:00:02","supervisor_check_date":"' . date('Y-m-d'),
                        '","result_comment":"Комментарий к результату задачи","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":5,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\": 3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":9,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":15,"manager_team":1},"changed_fields_names":["status","awaiting_correction","supervisor_check_date","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case9_6_10_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 10 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_10_0.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    104 => '10',
                    105 => '10',
                    106 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    108 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                    ],
                    126 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                    132 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 10,
                            'supervisor_id' => 34,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 5,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 15,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 59,
                            'value' => 30.55,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 79,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 80,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 84,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 91,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 97,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 98,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 99,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 104,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 105,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 106,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 108,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 126,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 132,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_11_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 11 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_11_0.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    104 => '10',
                    105 => '10',
                    106 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    108 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    126 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                    132 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 11,
                            'supervisor_id' => 34,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Проектирование структуры (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 5,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 15,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 59,
                            'value' => 30.55,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 79,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 80,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 84,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 91,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 97,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 98,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 99,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 104,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 105,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 106,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 108,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 126,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 132,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_12_1' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 12 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_12_1.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 12,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_13_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 13 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_13_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    102 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    138 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '7',
                        'itemsCount' => '7',
                    ],
                    139 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 13,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 6,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 16,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 47,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 48,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 56,
                            'value' => 25,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 62,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 63,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 86,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 87,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 100,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 102,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 7,
                            'items_with_errors' => 7,
                            'field_value_id' => 138,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 139,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_14_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 14 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_14_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    108 => '10',
                    120 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    117 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    119 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    121 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 14,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение размерной сетки (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 6,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 16,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 23,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 57,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 80,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 82,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 108,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 120,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 117,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 119,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 121,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_15_0' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 15 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_15_0.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    117 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    122 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                    ],
                    123 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                    ],
                    124 => [
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 15,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 6,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 16,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 58,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 83,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 92,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 110,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 117,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 122,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 123,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 124,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 35,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_1_1_checkbox' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 1 направление 1 с чекбоксом "С фотосъёмкой"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_1_1_checkbox.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
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
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 4,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_2_1_checkbox' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 2 направление 1 с чекбоксом "С фотосъёмкой"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_2_1_checkbox.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 2,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 4,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_3_1_checkbox' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 3 направление 1 с чекбоксом "С фотосъёмкой"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_3_1_checkbox.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 3,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 4,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 10,
                            'items_with_errors' => 10,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ]
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

    'case9_6_5_1_checkbox' => [
        'setting' => [
            'description' => 'Перевод из "Выполнена" во "В работе (на исправление)" тип 5 направление 1 с чекбоксом "С фотосъёмкой"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6_5_1_checkbox.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'fields' => [
                    65 => '10',
                    121 => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                ],
                'errors' => [
                    67 => [
                        'errorsCount' => '5',
                        'itemsCount' => '5',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    78 => [
                        'errorsCount' => '2',
                        'itemsCount' => '2',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                    79 => [
                        'errorsCount' => '3',
                        'itemsCount' => '3',
                        'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                    ],
                ],
                'historyErrors' => [
                ],
                'currentStatus' => 9,
                'changeStatus' => true,
            ],
            'responseBody' => [
                'success' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 5,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 4,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 20,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 80.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 5,
                            'items_with_errors' => 5,
                            'field_value_id' => 67,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 2,
                            'items_with_errors' => 2,
                            'field_value_id' => 78,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 3,
                            'items_with_errors' => 3,
                            'field_value_id' => 79,
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))',
                            'status' => 0,
                            'create_ts >=' => date('Y-m-d'),
                            'correction_date' => null
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 9,
                            'new_status' => 6,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ]
        ]
    ],

];
