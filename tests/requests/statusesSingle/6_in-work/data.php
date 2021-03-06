<?php

return [
    'case6_4' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Отменена" + нотификации + автосложность',
            //проставляется автосложность, отправленная в запросе (5, id 65), а не подходящая по комбинации (4, id 64)
            //лишние поля отправляются, но со значением "0"
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockDataStatusesSingle,
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
                    1 => [
                        'id' => 11,
                        'reason' => 'Другое (описан в коментариях)',
                        'comment_is_required' => 1,
                    ],
                    2 => [
                        'id' => 9,
                        'reason' => 'Дубль задачи',
                        'comment_is_required' => 1,
                    ],
                ],
                'status' => 4,
                'currentStatus' => 6,
                'payload' => [
                    1 => false,
                    2 => true,
                    20 => 65,
                    21 => 4,
                    22 => 9,
                    23 => 11,
                    24 => 15,
                    25 => 19,
                    26 => 21,
//                    27 => 25,
//                    31 => 48,
                    66 => '10',
                    68 => '10',
                    69 => '10',
                    70 => '10',
                    71 => '0',
                    76 => '10',
                    77 => '10',
                    88 => '10',
                    93 => '0',
                    94 => '10',
                    111 => '0',
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
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '',
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
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 9,
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
                            'value' => 19,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 21,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 27,
//                            'value' => 25,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 31,
//                            'value' => 48,
//                        ],
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
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1.5,
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
                            'value' => 0,
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
                            'value >' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Общее количество ошибок": "0", "Уровень сложности задачи": "5", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.5"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 6}',
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
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Общее количество ошибок": "0", "Уровень сложности задачи": "5", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.5"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 6}',
                            'notify_service_id' => null
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
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Общее количество ошибок": "0", "Уровень сложности задачи": "5", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.5"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 4,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Общее количество ошибок": "0", "Уровень сложности задачи": "5", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.5"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 5,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Общее количество ошибок": "0", "Уровень сложности задачи": "5", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.5"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 6}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 4,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 10
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 11
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 9
                        ]
                    ],
                    'transition_info' => [],
                    'auto_diff_log' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> (не указан) </br><b>Пакетная загрузка:</b> Да </br><b>Уровень сложности задачи:</b> 5 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 2 </br><b>Коэффициент уровня сложности задачи:</b> 1.5 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> (не указан) </br><b>Пакетная загрузка:</b> Да </br><b>Уровень сложности задачи:</b> 5 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 2 </br><b>Коэффициент уровня сложности задачи:</b> 1.5 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":3,"userId":11,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> (не указан) </br><b>Пакетная загрузка:</b> Да </br><b>Уровень сложности задачи:</b> 5 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 2 </br><b>Коэффициент уровня сложности задачи:</b> 1.5 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":4,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> (не указан) </br><b>Пакетная загрузка:</b> Да </br><b>Уровень сложности задачи:</b> 5 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 2 </br><b>Коэффициент уровня сложности задачи:</b> 1.5 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":5,"userId":17,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> (не указан) </br><b>Пакетная загрузка:</b> Да </br><b>Уровень сложности задачи:</b> 5 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 2 </br><b>Коэффициент уровня сложности задачи:</b> 1.5 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"delete","entity":"requests_fields","fields_data":{"request_id":1,"field_id":1},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":2,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"65"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"4"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":22,"value":"9"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"11"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"15"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":25,"value":"19"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":26,"value":"21"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27,"value":"25"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":31,"value":"48"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":66,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":68,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":69,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":70,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":71,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":88,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":111,"value":"0"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"1.5"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":53,"value":"2"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":4,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":4,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","reason","supervisor_process_date","last_change_status_date","sv_report_periods","previous_status"]}'
                    ]
                ],
            ],
        ]
    ],

    'case6_5' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает взятия в работу" + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'appoint-manager',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'userId' => 12,
                'currentStatus' => 6,
                'payload' => [
                    1 => false,
                    2 => true,
                    20 => 65,
                    21 => 4,
                    22 => 9,
                    23 => 11,
                    24 => 15,
                    25 => 18,
                    26 => 21,
                    27 => 25,
                    31 => 48,
                    66 => '10',
                    68 => '10',
                    69 => '10',
                    70 => '10',
                    71 => '10',
                    76 => '10',
                    77 => '10',
                    88 => '10',
                    93 => '10',
                    94 => '10',
                    111 => '10',
                ],
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Менеджер Контентович 1Б назначен исполнителем 1 заявкам',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 12,
                            'status' => 5,
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
                            'recommendations' => '',
                            'reason' => null,
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
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 9,
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
                            'value' => 21,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 25,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60.1,
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
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60.1,
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
                            'value >' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
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
                            'event' => 'manager_id',
                            'changed_fields' => '{"newValue": 12, "oldValue": 11}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 2,
                            'user_id' => 12,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'manager_id',
                            'changed_fields' => '{"newValue": 12, "oldValue": 11}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 3,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 4,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 5,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 6,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 5,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 12,
                            'reasons' => null
                        ]
                    ],
                    'transition_info' => []
                ],
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [
                    '{"requestId":1}'
                ],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] пользователя Менеджер Контентович 1Б</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":2,"userId":12,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] Вас</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":5,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"delete","entity":"requests_fields","fields_data":{"request_id":1,"field_id":1},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":2,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"65"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"4"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":22,"value":"9"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"11"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"15"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":25,"value":"18"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":26,"value":"21"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27,"value":"25"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":31,"value":"48"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":66,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":68,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":69,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":70,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":71,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":88,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":111,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"1.5"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":53,"value":"2"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":5,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":12,"status":5,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["manager_id","status","last_change_status_date","previous_status"]}'
                    ]
                ],
            ],
        ]
    ],

    'case6_5_supplier' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает взятия в работу" + нотификации, без вложения при supplier_cabinet_id',
            //при переводе в статус кроме 8/9 вложение для vat не обязательно
        ],
        'fixture_data' => include __DIR__ . '/fixture/case_supplier.php',
        'mock_data' => [
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Ожидает взятия в работу',
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
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'appoint-manager',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'userId' => 12,
                'currentStatus' => 6,
                'payload' => [
                    1 => false,
                    2 => true,
                    20 => 65,
                    21 => 4,
                    22 => 9,
                    23 => 11,
                    24 => 15,
                    25 => 18,
                    26 => 21,
                    27 => 25,
                    31 => 48,
                    66 => '10',
                    68 => '10',
                    69 => '10',
                    70 => '10',
                    71 => '10',
                    76 => '10',
                    77 => '10',
                    88 => '10',
                    93 => '10',
                    94 => '10',
                    111 => '10',
                ],
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Менеджер Контентович 1Б назначен исполнителем 1 заявкам',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 12,
                            'status' => 5,
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
                            'recommendations' => '',
                            'reason' => null,
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
                            'previous_status' => 6,
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
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 9,
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
                            'value' => 21,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 25,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60.1,
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
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60.1,
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
                            'value >' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
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
                            'event' => 'manager_id',
                            'changed_fields' => '{"newValue": 12, "oldValue": 11}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 2,
                            'user_id' => 12,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'manager_id',
                            'changed_fields' => '{"newValue": 12, "oldValue": 11}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 3,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 4,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 5,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 6,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 5,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 12,
                            'reasons' => null
                        ]
                    ],
                    'transition_info' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\Exception',
                            'message' => "{\n    \"id\": 1,\n    \"status\": 404,\n    \"errors\": {\n        \"id\": \"Заявка не найдена\"\n    }\n}",
                            'file LIKE' => '%/api/infra/apiClients/VATApiClient.php',
                            'code' => 404,
                        ],
                    ],
                ],
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [
                    '{"requestId":1}'
                ],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] пользователя Менеджер Контентович 1Б</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":2,"userId":12,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] Вас</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":5,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"delete","entity":"requests_fields","fields_data":{"request_id":1,"field_id":1},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":2,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"65"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"4"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":22,"value":"9"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"11"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"15"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":25,"value":"18"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":26,"value":"21"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27,"value":"25"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":31,"value":"48"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":66,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":68,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":69,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":70,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":71,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":88,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":111,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"1.5"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":53,"value":"2"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":5,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":12,"status":5,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["manager_id","status","last_change_status_date","previous_status"]}'
                    ]
                ],
            ],
        ]
    ],

    'case6_7' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает" + нотификации + добавление и удаление вложений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'reasons' => [
                    0 => [
                        'id' => 1,
                        'reason' => 'Ожидается загрузка фото в товары',
                        'comment_is_required' => 1,
                    ],
                    1 => [
                        'id' => 2,
                        'reason' => 'Требуется уточнение информации по задаче',
                        'comment_is_required' => 0,
                    ],
                    2 => [
                        'id' => 3,
                        'reason' => 'Изменен приоритет задачи',
                        'comment_is_required' => 1,
                    ],
                ],
                'status' => 7,
                'currentStatus' => 6,
                'payload' => [
                    1 => false,
                    2 => true,
                    20 => 65,
                    21 => 4,
                    22 => 9,
                    23 => 11,
                    24 => 15,
                    25 => 18,
                    26 => 21,
                    27 => 25,
                    31 => 48,
                    66 => '10',
                    68 => '10',
                    69 => '10',
                    70 => '10',
                    71 => '10',
                    76 => '10',
                    77 => '10',
                    88 => '10',
                    93 => '10',
                    94 => '10',
                    111 => '10',
                    'deletedAttachments' => [
                        0 => 1,
                        1 => 4,
                    ],
                    'files' => [
                        0 => [
                            'folder' => 1631802792673,
                            'fileName' => '803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => 60424,
                        ],
                        1 => [
                            'folder' => 1631802792673,
                            'fileName' => '803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'alias' => '~!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'size' => 34304,
                        ],
                    ],
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
                            'status' => 7,
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
                            'recommendations' => '',
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
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 9,
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
                            'value' => 21,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 25,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60.1,
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
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60.1,
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
                            'value >' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_attachments' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'status' => 0,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => 'Константин Куцан',
                            'deleted_at >=' => date('Y-m-d'),
                            'file_name' => '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => 60424,
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => 'doc .doc',
                            'status' => 3,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803902_doc.doc',
                            'size' => 34304,
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'status' => 3,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'size' => 97152,
                        ],
                        [
                            'id' => 4,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'status' => 0,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => 'Константин Куцан',
                            'deleted_at >=' => date('Y-m-d'),
                            'file_name' => '803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'size' => 34304,
                        ],
                        [
                            'id' => 5,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'status' => 3,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at >=' => date('Y-m-d'),
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => 60424,
                        ],
                        [
                            'id' => 6,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'status' => 3,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at >=' => date('Y-m-d'),
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'size' => 34304,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 4,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 5,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 6,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 7,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 8,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 9,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 1
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 2
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 3
                        ],
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [
                    '{"requestId":1}'
                ],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br><b>Удалено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":3,"userId":11,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br><b>Удалено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":5,"userId":17,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br><b>Удалено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":7,"userId":11,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=7\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче </br>","requestId":1}',
                    '{"notificationId":8,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=8\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"delete","entity":"requests_fields","fields_data":{"request_id":1,"field_id":1},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":2,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"65"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"4"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":22,"value":"9"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"11"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"15"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":25,"value":"18"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":26,"value":"21"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27,"value":"25"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":31,"value":"48"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":66,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":68,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":69,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":70,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":71,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":88,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":111,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"1.5"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":53,"value":"2"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":7,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":7,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","reason","last_change_status_date","previous_status"]}'
                    ]
                ],
            ],
        ],
    ],

    'case6_7_supplier' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает" + нотификации + добавление и удаление вложений, без вложения при supplier_cabinet_id',
            //при переводе в статус кроме 8/9 вложение для vat не обязательно
        ],
        'fixture_data' => include __DIR__ . '/fixture/case_supplier.php',
        'mock_data' => [
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Ожидает',
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
                        'id' => 1,
                        'reason' => 'Ожидается загрузка фото в товары',
                        'comment_is_required' => 1,
                    ],
                    1 => [
                        'id' => 2,
                        'reason' => 'Требуется уточнение информации по задаче',
                        'comment_is_required' => 0,
                    ],
                    2 => [
                        'id' => 3,
                        'reason' => 'Изменен приоритет задачи',
                        'comment_is_required' => 1,
                    ],
                ],
                'status' => 7,
                'currentStatus' => 6,
                'payload' => [
                    1 => false,
                    2 => true,
                    20 => 65,
                    21 => 4,
                    22 => 9,
                    23 => 11,
                    24 => 15,
                    25 => 18,
                    26 => 21,
                    27 => 25,
                    31 => 48,
                    66 => '10',
                    68 => '10',
                    69 => '10',
                    70 => '10',
                    71 => '10',
                    76 => '10',
                    77 => '10',
                    88 => '10',
                    93 => '10',
                    94 => '10',
                    111 => '10',
                    'deletedAttachments' => [
                        0 => 1,
                        1 => 4,
                    ],
                    'files' => [
                        0 => [
                            'folder' => 1631802792673,
                            'fileName' => '803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => 60424,
                        ],
                        1 => [
                            'folder' => 1631802792673,
                            'fileName' => '803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'alias' => '~!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'size' => 34304,
                        ],
                    ],
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
                            'status' => 7,
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
                            'recommendations' => '',
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
                            'previous_status' => 6,
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
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 9,
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
                            'value' => 21,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 25,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60.1,
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
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60.1,
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
                            'value >' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_attachments' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'status' => 0,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => 'Константин Куцан',
                            'deleted_at >=' => date('Y-m-d'),
                            'file_name' => '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => 60424,
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => 'doc .doc',
                            'status' => 1,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803902_doc.doc',
                            'size' => 34304,
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'status' => 3,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'size' => 97152,
                        ],
                        [
                            'id' => 4,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'status' => 0,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at' => '2020-01-01 00:00:00',
                            'deleted_by' => 'Константин Куцан',
                            'deleted_at >=' => date('Y-m-d'),
                            'file_name' => '803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'size' => 34304,
                        ],
                        [
                            'id' => 5,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'status' => 3,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at >=' => date('Y-m-d'),
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => 60424,
                        ],
                        [
                            'id' => 6,
                            'request_id' => 1,
                            'file_name_old' => '',
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'status' => 3,
                            'uploaded_by' => 'Константин Куцан',
                            'uploaded_at >=' => date('Y-m-d'),
                            'deleted_by' => NULL,
                            'deleted_at' => NULL,
                            'file_name' => '803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'size' => 34304,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 4,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 5,
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
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 6,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 7,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 8,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 9,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Причина": "Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 1
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 2
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 3
                        ],
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [
                    '{"requestId":1}'
                ],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br><b>Удалено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":3,"userId":11,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br><b>Удалено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":5,"userId":17,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br><b>Удалено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":7,"userId":11,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=7\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче </br>","requestId":1}',
                    '{"notificationId":8,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=8\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"delete","entity":"requests_fields","fields_data":{"request_id":1,"field_id":1},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":2,"value":"1"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"65"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"4"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":22,"value":"9"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"11"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"15"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":25,"value":"18"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":26,"value":"21"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27,"value":"25"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":31,"value":"48"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":66,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":68,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":69,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":70,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":71,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":88,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":111,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60.1"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"1.5"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":53,"value":"2"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":7,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":7,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","reason","last_change_status_date","previous_status"]}'
                    ]
                ],
            ],
        ],
    ],

    'case6_7_1_2_photoload_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает" c ранее загруженными фото в гомере, причина 1 + отправка запроса в VAT',
            //проверка обнуления requests.photo_load_status
            //при переводе в статус кроме 8/9 вложение для vat не обязательно
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_7_1_2_photoload.php',
        'mock_data' => [
            $mockDataStatusesSingle,
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Ожидает',
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
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'reasons' => [
                    0 => [
                        'id' => 1,
                        'reason' => 'Ожидается загрузка фото в товары',
                        'comment_is_required' => 1,
                    ],
                ],
                'status' => 7,
                'currentStatus' => 6,
                'payload' => [
                    3 => true,
                    72 => '10',
                    73 => '10',
                    74 => '10',
                    75 => '10',
                    93 => '10',
                    94 => '5',
                    118 => '10',
                    'priority' => NULL,
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
                            'status' => 7,
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
                            'recommendations' => '',
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
                            'previous_status' => 6,
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
                            'field_id' => 3,
                            'value' => 1,
                        ],
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
                            'value >' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"Причина": "Ожидается загрузка фото в товары"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
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
                            'fields_for_complete' => '{"Причина": "Ожидается загрузка фото в товары"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
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
                            'fields_for_complete' => '{"Причина": "Ожидается загрузка фото в товары"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Ожидается загрузка фото в товары'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 1
                        ],
                    ],
                    'transition_info' => [],
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
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_7_1_2_photoload_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает" c ранее загруженными фото в гомере, причина 2',
            //проверка НЕобнуления requests.photo_load_status
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_7_1_2_photoload.php',
        'mock_data' => [
            $mockDataStatusesSingle,
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Ожидает',
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
            ]
        ],
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'reasons' => [
                    0 => [
                        'id' => 2,
                        'reason' => 'Требуется уточнение информации по задаче',
                        'comment_is_required' => 0,
                    ],
                ],
                'status' => 7,
                'currentStatus' => 6,
                'payload' => [
                    3 => true,
                    72 => '10',
                    73 => '10',
                    74 => '10',
                    75 => '10',
                    93 => '10',
                    94 => '5',
                    118 => '10',
                    'priority' => NULL,
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
                            'status' => 7,
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
                            'recommendations' => '',
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
                            'photo_load_status' => 1,
                            'previous_status' => 6,
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
                            'field_id' => 3,
                            'value' => 1,
                        ],
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
                            'value >' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '{"Причина": "Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
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
                            'fields_for_complete' => '{"Причина": "Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
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
                            'fields_for_complete' => '{"Причина": "Требуется уточнение информации по задаче"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 7, "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Требуется уточнение информации по задаче'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 2
                        ],
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_8_1_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Частично выполнен" 1/1 + нотификации + автосложность',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                21 => 3,
                22 => 7,
                23 => 13,
                24 => 15,
                25 => 19,
                26 => 21,
//                27 => 24,
//                31 => 48,
                66 => '10',
                68 => '5',
                69 => '10',
                70 => '10',
//                71 => '10',
                76 => '10',
                77 => '10',
                88 => '10',
//                93 => '10',
                94 => '10',
//                111 => '10',
                'reasons' => [
                    0 => [
                        'id' => 11,
                        'reason' => 'Другое (описан в коментариях)',
                        'comment_is_required' => 1,
                    ],
                    1 => [
                        'id' => 7,
                        'reason' => 'Товары ушли в ошибки',
                        'comment_is_required' => 1,
                    ],
                ],
                'status' => 8,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'status' => 8,
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
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 62,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 13,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 19,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 21,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 27,
//                            'value' => 24,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 31,
//                            'value' => 48,
//                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 11,
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
                            'value' => 1.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 5,
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
//                        [
//                            'request_id' => 1,
//                            'field_id' => 71,
//                            'value' => 10,
//                        ],
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
                            'value >' => 0,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 93,
//                            'value' => 10,
//                        ],
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
//                        [
//                            'request_id' => 1,
//                            'field_id' => 111,
//                            'value' => 10,
//                        ],
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
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "8", "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 2,
                            'user_id' => 11,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "8", "oldValue": 6}',
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
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "8", "oldValue": 6}',
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
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "8", "oldValue": 6}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 8,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Другое (описан в коментариях) | Товары ушли в ошибки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 11
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 7
                        ]
                    ],
                    'transition_info' => [],
                    'auto_diff_log' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'conditions_set' => '["2", "7", "13", "15", "19", "27", "37"]',
                            'difficulty_id' => 62,
                            'created_at >=' => date('Y-m-d')
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[\"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803902_doc.doc\",\"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Частично выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 2 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1.1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":3,"userId":15,"attachments":"[\"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803902_doc.doc\",\"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Частично выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 2 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1.1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"3"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":22,"value":"7"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"13"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"15"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":25,"value":"19"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":26,"value":"21"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27,"value":"24"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":31,"value":"48"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":66,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":68,"value":"5"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":69,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":70,"value":"10"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":71,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":88,"value":"10"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"10"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":111,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"62"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"11"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"11"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"1.1"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":8,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":"8","direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"' . date('Y-m-d'),
                        '","supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","actual_finish_date","supervisor_process_date","result_comment","last_change_status_date","sv_report_periods","previous_status"]}',
                    ]
                ],
            ]
        ],
    ],

    'case6_8_1_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Частично выполнен" 1/2 без "Ждёт группировки/Товары на модерации" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case_not_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                118 => '10',
                'reasons' => [
                    1 => [
                        'id' => 6,
                        'reason' => 'Не получена запрошенная недостающая информация',
                        'comment_is_required' => 0,
                    ],
                ],
                'status' => 8,
                'currentStatus' => 6,
                'result_comment' => '',
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
                            'result_comment' => '',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "8", "oldValue": 6}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "8", "oldValue": 6}',
                            'notify_service_id' => null
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
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "8", "oldValue": 6}',
                            'notify_service_id' => null
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 8,
                            'reason' => '',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Не получена запрошенная недостающая информация'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 6
                        ]
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":72,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":73,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":74,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":75,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"5"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":118,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":8,"reason":"","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":"8","direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Маркета)","description":"description","category_id":null,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"' . date('Y-m-d'),
                        '","supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","actual_finish_date","supervisor_process_date","last_change_status_date","sv_report_periods","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case6_8_1_2_on-hold' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Частично выполнен" 1/2 с "Ждёт группировки" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case1_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                118 => '10',
                'reasons' => [
                    1 => [
                        'id' => 6,
                        'reason' => 'Не получена запрошенная недостающая информация',
                        'comment_is_required' => 0,
                    ],
                ],
                'status' => 8,
                'currentStatus' => 6,
                'result_comment' => '',
            ],
            'responseBody' => [
                'success' => true,
                'warning' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
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
                            'status' => 7,
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
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
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
                            'previous_status' => 6,
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
                            'field_id' => 118,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Ожидает группировки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 14
                        ],
                    ],
                    'transition_info' => [
                        [
                            'request_id' => 1,
                            'status' => 8,
                            'reason' => null,
                            'reasons_list' => '["6"]'
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":72,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":73,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":74,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":75,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"5"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":118,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":7,"reason":"Заявка переведена в статус \"Ожидает\",\n             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":7,"direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Маркета)","description":"description","category_id":null,"seller_id":83,"recommendations":"","reason":"Заявка переведена в статус \"Ожидает\",\n             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","reason","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case6_9_1_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 1/1 + нотификации + автосложность',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                21 => 3,
                22 => 7,
                23 => 13,
                24 => 15,
                25 => 19,
                26 => 21,
//                27 => 24,
//                31 => 48,
                66 => '10',
                68 => '5',
                69 => '10',
                70 => '10',
//                71 => '10',
                76 => '10',
                77 => '10',
                88 => '10',
//                93 => '10',
                94 => '10',
//                111 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'status' => 9,
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
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 62,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 13,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 19,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 21,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 27,
//                            'value' => 24,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 31,
//                            'value' => 48,
//                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 11,
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
                            'value' => 1.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 5,
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
//                        [
//                            'request_id' => 1,
//                            'field_id' => 71,
//                            'value' => 10,
//                        ],
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
                            'value >' => 0,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 93,
//                            'value' => 10,
//                        ],
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
//                        [
//                            'request_id' => 1,
//                            'field_id' => 111,
//                            'value' => 10,
//                        ],
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "9", "oldValue": 6}',
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
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "9", "oldValue": 6}',
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
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "9", "oldValue": 6}',
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
                            'fields_for_complete' => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "2", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1.1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": "9", "oldValue": 6}',
                            'notify_service_id' => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'conditions_set' => '["2", "7", "13", "15", "19", "27", "37"]',
                            'difficulty_id' => 62,
                            'created_at >=' => date('Y-m-d')
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[\"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803902_doc.doc\",\"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 2 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1.1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":3,"userId":15,"attachments":"[\"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803902_doc.doc\",\"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 2 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1.1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":21,"value":"3"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":22,"value":"7"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":23,"value":"13"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":24,"value":"15"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":25,"value":"19"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":26,"value":"21"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":27,"value":"24"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":31,"value":"48"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":66,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":68,"value":"5"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":69,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":70,"value":"10"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":71,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":76,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":77,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":88,"value":"10"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"10"},"changed_fields_names":[]}',
//                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":111,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":20,"value":"62"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"11"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"11"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":54,"value":"1.1"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":9,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":"9","direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"' . date('Y-m-d'),
                        '","supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","actual_finish_date","supervisor_process_date","result_comment","last_change_status_date","sv_report_periods","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case6_9_1_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 1/2 без "Ждёт группировки/Товары на модерации" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case_not_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                118 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'status' => 9,
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":72,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":73,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":74,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":75,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"5"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":118,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":9,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":"9","direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Маркета)","description":"description","category_id":null,"seller_id":83,"recommendations":"","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":"' . date('Y-m-d'),
                        '","supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","actual_finish_date","supervisor_process_date","result_comment","last_change_status_date","sv_report_periods","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case6_9_1_2_on-hold' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 1/2 с "Ждёт группировки" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case1_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                118 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
            'responseBody' => [
                'success' => true,
                'warning' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
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
                            'status' => 7,
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
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Ожидает группировки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 14
                        ]
                    ],
                    'transition_info' => [
                        [
                            'request_id' => 1,
                            'status' => 9,
                            'reason' => null,
                            'reasons_list' => '[]'
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":72,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":73,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":74,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":75,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":93,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":94,"value":"5"},"changed_fields_names":[]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":118,"value":"10"},"changed_fields_names":[]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":49,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":64,"value":"60"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"requests_fields","fields_data":{"request_id":1,"field_id":89,"value":"',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":2,"request_id":1,"user_id":4,"old_status":6,"new_status":7,"reason":"Заявка переведена в статус \"Ожидает\",\n             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":7,"direction":2,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Маркета)","description":"description","category_id":null,"seller_id":83,"recommendations":"","reason":"Заявка переведена в статус \"Ожидает\",\n             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":"2020-01-01 00:00:03","actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","supervisor_comment":"","last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":2,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":6,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["status","reason","result_comment","last_change_status_date","previous_status"]}',
                    ]
                ],
            ]
        ]
    ],

    'case6_9_2_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 2/1 + автосложность',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_2_1.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                21 => 2,
                22 => 8,
                23 => 11,
                24 => 173,
                25 => 18,
                26 => 21,
//                27 => 24,
//                31 => 48,
                67 => '10',
                68 => '15',
                69 => '10',
                70 => '10',
                71 => '0',
                76 => '10',
                77 => '10',
                88 => '10',
                93 => '0',
                94 => '10',
                111 => '0',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 2,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 63,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 8,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 173,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 21,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 27,
//                            'value' => 24,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 31,
//                            'value' => 48,
//                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 12,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
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
                            'value' => 1.2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 12,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 15,
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
                            'value' => 0,
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
                            'value >' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'conditions_set' => '["1", "8", "11", "18", "19", "28", "38"]',
                            'difficulty_id' => 63,
                            'created_at >=' => date('Y-m-d')
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_2_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 2/2 без "Ждёт группировки/Товары на модерации" в Гомере, с одим вложением при supplier_cabinet_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_2_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case_not_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Выполнена',
                        //'validated_at' => '2021-12-21+19%3A59%3A03',
                        'reasons' => '',
                        'reasons_ua' => '',
                        'reason_comment' => '',
                        'type' => 'content',
                        'attachments[0]' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
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
            'requestParameter' => 'update',
            'requestBody' => [
                67 => '10',
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 2,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Обновление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Оновлення товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Обновление товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Оновлення товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
            ]
        ]
    ],

    'case6_9_2_2_on-hold' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 2/2 с "Товары на модерации" в Гомере, с вложением при supplier_cabinet_id',
            //по-факту заявка переводится в статус 7 для ожидания статуса гомера
            //при переводе в статус кроме 8/9 вложение для vat не обязательно
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_2_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case2_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Ожидает',
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
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                67 => '10',
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
            'responseBody' => [
                'success' => true,
                'warning' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.'
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
                            'status' => 7,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Товары на модерации'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 15
                        ]
                    ],
                    'transition_info' => [
                        [
                            'request_id' => 1,
                            'status' => 9,
                            'reason' => null,
                            'reasons_list' => '[]'
                        ],
                    ],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\Exception',
                            'message' => "{\n    \"status\": 400,\n    \"errors\": {\n        \"status\": [\n            \"Значение «Статус заявки» должно быть числом.\"\n        ]\n    }\n}",
                            'file LIKE' => '%/api/infra/apiClients/VATApiClient.php',
                            'code' => 400,
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_3_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 3/1 + автосложность',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_3_1.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                21 => 5,
                22 => 9,
                23 => 14,
                24 => 17,
                25 => 19,
                26 => 21,
//                27 => 24,
//                31 => 48,
                67 => '10',
                68 => '1',
                69 => '10',
                70 => '10',
//                71 => '10',
                76 => '10',
                77 => '10',
                88 => '10',
//                93 => '10',
                94 => '10',
//                111 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 3,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 9,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 14,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 17,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 19,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 21,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 27,
//                            'value' => 24,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 31,
//                            'value' => 48,
//                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
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
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 1,
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
//                        [
//                            'request_id' => 1,
//                            'field_id' => 71,
//                            'value' => 10,
//                        ],
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
                            'value >' => 0,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 93,
//                            'value' => 10,
//                        ],
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
//                        [
//                            'request_id' => 1,
//                            'field_id' => 111,
//                            'value' => 10,
//                        ],
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'conditions_set' => '["4", "9", "14", "17", "19", "27", "36"]',
                            'difficulty_id' => 65,
                            'created_at >=' => date('Y-m-d')
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_3_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 3/2 без "Ждёт группировки/Товары на модерации" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_3_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case_not_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                67 => '10',
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 3,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Перенос товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Перенесення товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Перенос товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Перенесення товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
            ]
        ]
    ],

    'case6_9_3_2_on-hold' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 3/2 с "Ждёт группировки/Товары на модерации" в Гомере',
            //по-факту заявка переводится в статус 7 для ожидания статуса гомера
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_3_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case3_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                67 => '10',
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
            'responseBody' => [
                'success' => true,
                'warning' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.'
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
                            'status' => 7,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Перенос товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Ожидает группировки | Товары на модерации'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 14
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 15
                        ],
                    ],
                    'transition_info' => [
                        [
                            'request_id' => 1,
                            'status' => 9,
                            'reason' => null,
                            'reasons_list' => '[]'
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_4_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 4/0 + автосложность',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_4_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                31 => 48,
                32 => 253,
                91 => '10',
                93 => '10',
                94 => '300',
                116 => '10',
                161 => '10',
                162 => '10',
                163 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 4,
                            'supervisor_id' => 33,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'field_id' => 20,
                            'value' => 61,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 32,
                            'value' => 253,
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
                            'value >' => 0,
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
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 116,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
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
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'conditions_set' => '["31", "57"]',
                            'difficulty_id' => 61,
                            'created_at >=' => date('Y-m-d')
                        ]
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Группировка товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 300</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Групування товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 300</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Группировка товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 300</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Групування товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 300</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
            ]
        ]
    ],

    'case6_9_5_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 5/1 + автосложность',
            //автосложность не должна проставиться, потому что поля для этого типа не занесены в auto_diff_fields
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_5_1.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                21 => 5,
                22 => 9,
                23 => 14,
                24 => 17,
                25 => 19,
                26 => 21,
//                27 => 24,
//                31 => 48,
                67 => '10',
                68 => '1',
                69 => '10',
                70 => '10',
                71 => '0',
                76 => '10',
                77 => '10',
                88 => '10',
                93 => '0',
                94 => '10',
                111 => '0',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 5,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 9,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 14,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 17,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 19,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 21,
                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 27,
//                            'value' => 24,
//                        ],
//                        [
//                            'request_id' => 1,
//                            'field_id' => 31,
//                            'value' => 48,
//                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
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
                            'value' => 1,
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
                            'value' => 0,
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
                            'value >' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 0,
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
                            'value' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_5_1_supplier' => [
        'setting' => [
            'description' => 'Невозможность перевода из "В работе" в "Выполнен" 5/1 без доступных вложений при supplier_cabinet_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_5_1_supplier.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                21 => 5,
                22 => 9,
                23 => 14,
                24 => 17,
                25 => 19,
                26 => 21,
//                27 => 24,
//                31 => 48,
                67 => '10',
                68 => '1',
                69 => '10',
                70 => '10',
                71 => '0',
                76 => '10',
                77 => '10',
                88 => '10',
                93 => '0',
                94 => '10',
                111 => '0',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
            'responseBody' => [
                'errors' => 'Для выполнения задачи необходимо загрузить файл(ы) для отображения в Кабинете Поставщика'
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case6_9_5_1_supplier.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case6_9_5_1_supplier.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case6_9_5_1_supplier.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\RequestValidationException',
                            'message' => 'Заявка не сохранилась: Для выполнения задачи необходимо загрузить файл(ы) для отображения в Кабинете Поставщика',
                            'file LIKE' => '%/models/Request.php',
                            'code' => 0,
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_6_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 6/2 без "Ждёт группировки/Товары на модерации" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_6_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case_not_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                67 => '10',
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 6,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Проверка скрытых товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Перевірка прихованих товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Проверка скрытых товаров","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных товаров — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество сгруппированных товаров — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество скрытых товаров/осталось скрытых — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Перевірка прихованих товарів","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених товарів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість згрупованих товарів — 5</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість прихованих товарів/лишилось прихованих — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
            ]
        ]
    ],

    'case6_9_6_2_on-hold' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 6/2 с "Ждёт группировки" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_6_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/case1_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
            $mockDataStatusesSingle
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                67 => '10',
                72 => '10',
                73 => '10',
                74 => '10',
                75 => '10',
                93 => '10',
                94 => '5',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
            'responseBody' => [
                'success' => true,
                'warning' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
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
                            'status' => 7,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Проверка скрытых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 7,
                            'reason' => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка и/или модерация товаров по этой заявке.',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => 'Ожидает группировки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 14
                        ]
                    ],
                    'transition_info' => [
                        [
                            'request_id' => 1,
                            'status' => 9,
                            'reason' => null,
                            'reasons_list' => '[]'
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_7_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 7/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_7_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                28 => 27,
                79 => '10',
                80 => '10',
                81 => '10',
                84 => '10',
                85 => '10',
                90 => '10',
                97 => '10',
                98 => '10',
                99 => '10',
                112 => '10',
                113 => '10',
                115 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 7,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
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
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_8_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 8/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_8_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'RequestField[112]' => '10',
                'RequestField[113]' => '10',
                'RequestField[115]' => '10',
                'RequestField[28]' => '27',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[81]' => '10',
                'RequestField[84]' => '10',
                'RequestField[85]' => '10',
                'RequestField[90]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'requestBody' => [
                28 => 27,
                79 => '10',
                80 => '10',
                81 => '10',
                84 => '10',
                85 => '10',
                90 => '10',
                97 => '10',
                98 => '10',
                99 => '10',
                112 => '10',
                113 => '10',
                115 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 8,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
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
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_9_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 9/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_9_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                79 => '10',
                80 => '10',
                84 => '10',
                91 => '10',
                97 => '10',
                98 => '10',
                99 => '10',
                113 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 9,
                            'supervisor_id' => 34,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_10_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 10/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_10_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                79 => '10',
                80 => '10',
                84 => '10',
                91 => '10',
                97 => '10',
                98 => '10',
                99 => '10',
                113 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 10,
                            'supervisor_id' => 34,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_11_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 11/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_11_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'RequestField[113]' => '10',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[84]' => '10',
                'RequestField[91]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'requestBody' => [
                79 => '10',
                80 => '10',
                84 => '10',
                91 => '10',
                97 => '10',
                98 => '10',
                99 => '10',
                113 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 11,
                            'supervisor_id' => 34,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_12_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 12/1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_12_1.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                21 => 1,
                22 => 6,
                23 => 11,
                24 => 15,
                25 => 18,
                26 => 22,
                27 => 24,
                31 => 48,
                67 => '10',
                68 => '10',
                69 => '10',
                70 => '10',
                71 => '10',
                76 => '10',
                77 => '10',
                88 => '10',
                93 => '10',
                94 => '10',
                111 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 12,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value' => 0,
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 10.1,
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
                            'value >' => 0,
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
                            'field_id' => 158,
                            'value' => 0,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_9_13_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 13/0 + автосложность, с несколькими вложениями при supplier_cabinet_id',
            //должны отправиться только файлы со статусом загрузки 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_13_0.php',
        'mock_data' => [
            $mockDataStatusesSingle,
            'vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                    'body' => [
                        'id' => 111,
                        'status' => 'Выполнена',
                        //'validated_at' => '2021-12-21+19%3A59%3A03',
                        'reasons' => '',
                        'reasons_ua' => '',
                        'reason_comment' => '',
                        'type' => 'content',
                        'attachments[0]' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                        'attachments[1]' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
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
        ],
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                27 => 24,
                47 => '10',
                48 => '10',
                62 => '10',
                63 => '10',
                70 => '10',
                86 => '10',
                87 => '10',
                88 => '10',
                100 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 13,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
                            'supplier_cabinet_id' => 111,
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
                            'field_id' => 20,
                            'value' => 62,
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
                            'value' => 1.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 56,
                            'value' => 27.5,
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
                            'value >' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 100,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'conditions_set' => '["67", "73"]',
                            'difficulty_id' => 62,
                            'created_at >=' => date('Y-m-d')
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление/изменение видео","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных видеороликов — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных/замененных видеороликов — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество товаров, к которым добавлены видео — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання/змінення відео","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих відеороликів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених/замінених відеороликів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість товарів, до яких додано відео — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление/изменение видео","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных видеороликов — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество измененных/замененных видеороликов — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Количество товаров, к которым добавлены видео — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання/змінення відео","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих відеороликів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість змінених/замінених відеороликів — 10</p><p style=\"font-size:16px;line-height:24px;margin:0\">Кількість товарів, до яких додано відео — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ],
            ]
        ]
    ],

    'case6_9_14_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 14/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_14_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                26 => 23,
                80 => '10',
                82 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 14,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'value >' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление/изменение размерной сетки","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных/измененных размерных сеток — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання/змінення розмірної сітки","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих/змінених розмірних сіток — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-completed","fields":{"id":1,"type":"Добавление/изменение размерной сетки","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Количество добавленных/измененных размерных сеток — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-completed","fields":{"id":1,"type":"Додавання/змінення розмірної сітки","fields_data":"<p style=\"font-size:16px;line-height:24px;margin:0\">Кількість доданих/змінених розмірних сіток — 10</p><br>","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":true}',
                ]
            ]
        ]
    ],

    'case6_9_14_0_supplier' => [
        'setting' => [
            'description' => 'Невозможность перевода из "В работе" в "Выполнен" 14/0 без доступных вложений при supplier_cabinet_id',
            //статусы вложений только 4
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_14_0_supplier.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                26 => 23,
                80 => '10',
                82 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
            'responseBody' => [
                'errors' => 'При загрузке файлов произошла ошибка. Загрузите файлы повторно для их отображения в Кабинете Поставщика'
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case6_9_14_0_supplier.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case6_9_14_0_supplier.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => (include __DIR__ . '/fixture/case6_9_14_0_supplier.php')['lisa_fixtures']['request_status_history'],
                    'requests_reasons' => [],
                    'transition_info' => [],
                    'auto_diff_log' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\RequestValidationException',
                            'message' => 'Заявка не сохранилась: При загрузке файлов произошла ошибка. Загрузите файлы повторно для их отображения в Кабинете Поставщика',
                            'file LIKE' => '%/models/Request.php',
                            'code' => 0,
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => []
            ]
        ]
    ],

    'case6_9_15_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" 15/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_15_0.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                83 => '10',
                92 => '10',
                110 => '10',
                'status' => 9,
                'currentStatus' => 6,
                'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'type_id' => 15,
                            'supervisor_id' => 35,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
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
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 6,
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
                            'field_id' => 83,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value >' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 92,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 110,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
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
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 9,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
            ]
        ]
    ],

    'case6_0_sv' => [
        'setting' => [
            'description' => 'Изменение супервайзера во "В работе" без перевода в статус 5 + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_0_sv.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'supervisor_id' => 10,
                'currentStatus' => 6,
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
                            'supervisor_id' => 10,
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
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
                            'last_change_status_date' => '2020-01-01 00:00:01',
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
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ],
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case6_0_sv.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [
                        [
                            'id' => 1,
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
                            'event' => 'supervisor_id',
                            'changed_fields' => '{"newValue": "10", "oldValue": 6}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'supervisor_id',
                            'changed_fields' => '{"newValue": "10", "oldValue": 6}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11
                        ],
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: назначен новый супервайзер Супервайзер Начальникович 2","notification":"Константин Куцан <b>назначил(а) супервайзером заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] пользователя Супервайзер Начальникович 2</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],

    'case6_0_cm' => [
        'setting' => [
            'description' => 'Изменение контент-менеджера во "В работе" с переводом в статус 5 + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_0_cm.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'manager_id' => 12,
                'currentStatus' => 6,
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
                            'manager_id' => 12,
                            'status' => 5,
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
                            'recommendations' => '',
                            'reason' => null,
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
                            'previous_status' => 6,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ],
                    ],
                    'requests_fields' => array_merge(
                        (include __DIR__ . '/fixture/case6_0_cm.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 1,
                                'field_id' => 89,
                                'value >' => 0,
                            ],
                        ]
                    ),
                    'user_notifications' => [
                        [
                            'id' => 1,
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
                            'event' => 'manager_id',
                            'changed_fields' => '{"newValue": "12", "oldValue": 11}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 12,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'manager_id',
                            'changed_fields' => '{"newValue": "12", "oldValue": 11}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 5,
                            'user_id' => 12,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 6,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 6}',
                            'notify_service_id' => NULL,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 5,
                            'new_status' => 6,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                            'manager_id' => 11,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 6,
                            'new_status' => 5,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 12,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] пользователя Менеджер Контентович 1Б</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":2,"userId":12,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] Вас</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":4,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
            ],
        ]
    ],
];
