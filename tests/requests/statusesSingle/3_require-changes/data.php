<?php

return [
    'case3_1' => [
        'setting' => [
            'description' => 'Перевод из "На доработке" в "Новая" + удаление вложений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockData,
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'reasons' => [
                ],
                'status' => 1,
                'currentStatus' => 3,
                'payload' => [
                    'deletedAttachments' => [
                        0 => 1,
                        1 => 4,
                    ],
                ],
                'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
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
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'Затребовать изменения',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
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
                            'previous_status' => 3,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => [
                        [
                            //'id' => 1,
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
                            //'id' => 2,
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
                            //'id' => 3,
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
                            //'id' => 4,
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
                            'changed_fields' => '{"newValue": {"added": [], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
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
                            'changed_fields' => '{"newValue": {"added": [], "deleted": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"]}, "oldValue": []}',
                            'notify_service_id' => NULL,
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
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}',
                            'notify_service_id' => null,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Удалено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Новая`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Новая\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":3,"new_status":1,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":null,"status":1,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":null,"reason":"Затребовать изменения","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":3,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null},"changed_fields_names":["status","correction_comment","last_change_status_date","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],

    'case3_4' => [
        'setting' => [
            'description' => 'Перевод из "Новая" в "Отменена" + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockData,
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
                    ],
                    1 => [
                        'id' => 11,
                        'reason' => 'Другое (описан в коментариях)',
                    ],
                    2 => [
                        'id' => 9,
                        'reason' => 'Дубль задачи',
                    ],
                ],
                'status' => 4,
                'currentStatus' => 3,
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
                            'manager_id' => null,
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
                            'previous_status' => 3,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case.php')['lisa_fixtures']['requests_fields'],
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
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Описание": "description", "Приоритет": "Товар-новинка/эксклюзив (трафикообразующий)", "Супервайзер": "Супервайзер Начальникович 1", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Коэффициент уровня сложности задачи": "1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 3}',
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
                            'fields_for_complete' => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 3}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 4,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
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
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendOuterNotifications' => [],
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Супервайзер:</b> Супервайзер Начальникович 1 </br><b>Описание:</b> description </br><b>Приоритет:</b> Товар-новинка/эксклюзив (трафикообразующий) </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br>","requestId":1}',
                    '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_common' => [
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":3,"new_status":4,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":null,"status":4,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":null,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":3,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null},"changed_fields_names":["status","reason","supervisor_process_date","last_change_status_date","sv_report_periods","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],
];
