<?php

return [
    'case6_4' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Отменена" + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'Request[reason]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '4',
                'reasons' => ['11', '10', '9'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 4,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 1,
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
                            'value' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "4", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "4", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "4", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 4,
                            "user_id" => 15,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "4", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 5,
                            "user_id" => 17,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Причина": "Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "4", "oldValue": 6}',
                            "notify_service_id" => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 4,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 10
                        ],
                        [
                            "request_id" => 1,
                            "reason_id" => 11
                        ],
                        [
                            "request_id" => 1,
                            "reason_id" => 9
                        ]
                    ],
                    'transition_info' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":3,"userId":11,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":4,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                    '{"notificationId":5,"userId":17,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Все товары уже есть на сайте | Другое (описан в коментариях) | Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
            ],
        ]
    ],

    'case6_5' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает взятия в работу" + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'appoint-manager',
            'requestBody' => [
                'Request[manager_id]' => '12',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 12,
                            "status" => 5,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
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
                            'field_id' => 49,
                            'value' => 0,
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
                            'value' => 0,
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
                            "id" => 1,
                            "user_id" => 6,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "manager_id",
                            "changed_fields" => '{"newValue": 12, "oldValue": 11}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 2,
                            "user_id" => 12,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "manager_id",
                            "changed_fields" => '{"newValue": 12, "oldValue": 11}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 3,
                            "user_id" => 4,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 5, "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 4,
                            "user_id" => 6,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 5, "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 5,
                            "user_id" => 15,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 5, "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 6,
                            "user_id" => 17,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 5, "oldValue": 6}',
                            "notify_service_id" => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 5,
                            "reason" => null,
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 12,
                            "reasons" => null
                        ]
                    ],
                    'transition_info' => []
                ],
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`  [Товар-новинка/эксклюзив (трафикообразующий)]: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] пользователя Менеджер Контентович 1Б</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":2,"userId":12,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`  [Товар-новинка/эксклюзив (трафикообразующий)]: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] Вас</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":5,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
            ]
        ]
    ],

    'case6_7' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает (ризоны)" + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'Request[reason]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '7',
                'reasons' => ['1', '2', '3'],
            ],
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
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
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
                            'field_id' => 49,
                            'value' => 0,
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
                            'value' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "7", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 2,
                            "user_id" => 11,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "7", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "7", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "7", "oldValue": 6}',
                            "notify_service_id" => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 7,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Изменен приоритет задачи | Ожидается загрузка фото в товары | Требуется уточнение информации по задаче'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 1
                        ],
                        [
                            "request_id" => 1,
                            "reason_id" => 2
                        ],
                        [
                            "request_id" => 1,
                            "reason_id" => 3
                        ],
                    ],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":2,"userId":11,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Ожидает`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Ожидает`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
            ]
        ]
    ],

    'case6_7_1_2_photoload_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает (ризоны)" c ранее загруженными фото, причина 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_7_1_2_photoload_1.php',
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'Request[reason]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '7',
                'reasons' => ['1'],
            ],
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
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "photo_load_status" => 0
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
                            'value' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 7,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Ожидается загрузка фото в товары'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 1
                        ],
                    ],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_7_1_2_photoload_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Ожидает (ризоны)" c ранее загруженными фото, причина 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_7_1_2_photoload_2.php',
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'Request[reason]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '7',
                'reasons' => ['2'],
            ],
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
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "photo_load_status" => 1
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
                            'value' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 7,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Требуется уточнение информации по задаче'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 2
                        ],
                    ],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_8_1_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Частично выполнен" тип 1 направление 1 + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[66]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'reasons' => ['11', '7'],
                'Request[status]' => '8',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
            ],
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
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 6,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "8", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 2,
                            "user_id" => 11,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "8", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "8", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "8", "oldValue": 6}',
                            "notify_service_id" => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 8,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Другое (описан в коментариях) | Товары ушли в ошибки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 11
                        ],
                        [
                            "request_id" => 1,
                            "reason_id" => 7
                        ]
                    ],
                    'transition_info' => []
                ]
            ]
        ],
        'RabbitMQ' => [
            'lisa_sendMailNotifications' => [
                '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Частично выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Частично выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Частично выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
            ],
        ]
    ],

    'case6_8_1_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Частично выполнен" тип 1 направление 2 без "Ждёт группировки" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case_not_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[118]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '8',
                'reasons' => ['7'],
            ],
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
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 8,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Товары ушли в ошибки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 7
                        ]
                    ],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_8_1_2_on-hold' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Частично выполнен" тип 1 направление 2 с "Ждёт группировки" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[118]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '8',
                'reasons' => ['7'],
            ],
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
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка товаров по этой заявке.',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 7,
                            "reason" => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка товаров по этой заявке.',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Ожидает группировки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 14
                        ]
                    ],
                    'transition_info' => [
                        [
                            "request_id" => 1,
                            "status" => 8,
                            "reason" => null,
                            "reasons_list" => '["7"]'
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case6_9_1_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 1 направление 1 + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[66]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "9", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "9", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "9", "oldValue": 6}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": "9", "oldValue": 6}',
                            "notify_service_id" => null
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ],
        'RabbitMQ' => [
            'lisa_sendMailNotifications' => [
                '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
            ],
        ]
    ],

    'case6_9_1_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 1 направление 2 без "Ждёт группировки" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case_not_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[118]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_1_2_on-hold' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 1 направление 2 с "Ждёт группировки" в Гомере',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_1_2.php',
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
                    'body' => file_get_contents(__DIR__ . '/mock/Gomer/case_on-hold.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[118]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
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
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка товаров по этой заявке.',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 7,
                            "reason" => 'Заявка переведена в статус "Ожидает",
             так как в GOMER\'e еще не закончилась группировка товаров по этой заявке.',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => 'Ожидает группировки'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            "request_id" => 1,
                            "reason_id" => 14
                        ]
                    ],
                    'transition_info' => [
                        [
                            "request_id" => 1,
                            "status" => 9,
                            "reason" => null,
                            "reasons_list" => '[]'
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case6_9_2_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 2 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_2_1.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_2_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 2 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_2_2.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[67]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркета)",
                            "description" => 'description',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_3_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 3 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_3_1.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_3_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 3 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_3_2.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[67]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_4_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 4 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_4_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[116]' => '10',
                'RequestField[118]' => '10',
                'RequestField[31]' => '48',
                'RequestField[32]' => '52',
                'RequestField[91]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 1,
                            'value' => 1,
                        ],
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
                            'value' => 6,
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
                            'value' => 10,
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
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_5_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 5 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_5_1.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 5,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_6_2' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 6 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_6_2.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[67]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 6,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Проверка скрытых товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 89,
                            'value >' => 0,
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_7_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 7 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_7_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
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
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_8_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 8 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_8_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
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
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 8,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_9_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 9 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_9_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[113]' => '10',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[84]' => '10',
                'RequestField[91]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 9,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_10_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 10 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_10_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[113]' => '10',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[84]' => '10',
                'RequestField[91]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_11_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 11 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_11_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[113]' => '10',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[84]' => '10',
                'RequestField[91]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 11,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Проектирование структуры (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Проектенко 14"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_12_1' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 12 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_12_1.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 12,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_13_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 13 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_13_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[100]' => '10',
                'RequestField[27]' => '24',
                'RequestField[47]' => '10',
                'RequestField[48]' => '10',
                'RequestField[62]' => '10',
                'RequestField[63]' => '10',
                'RequestField[70]' => '10',
                'RequestField[86]' => '10',
                'RequestField[87]' => '10',
                'RequestField[88]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 13,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_14_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 14 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_14_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[26]' => '23',
                'RequestField[80]' => '10',
                'RequestField[82]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 14,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_9_15_0' => [
        'setting' => [
            'description' => 'Перевод из "В работе" в "Выполнен" тип 15 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9_15_0.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[110]' => '10',
                'RequestField[83]' => '10',
                'RequestField[92]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[status]' => '9',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 15,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date >=" => date("Y-m-d"),
                            "supervisor_process_date >=" => date("Y-m-d"),
                            "supervisor_check_date" => null,
                            "result_comment" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Категоркин 15"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 9,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 11,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ]
        ]
    ],

    'case6_0_sv' => [
        'setting' => [
            'description' => 'Изменение супервайзера во "В работе" + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_0_sv.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'RequestField[111]' => '0',
                'RequestField[121]' => '',
                'RequestField[144]' => '0',
                'RequestField[157]' => '',
                'RequestField[1]' => '1',
                'RequestField[20]' => '',
                'RequestField[21]' => '',
                'RequestField[22]' => '',
                'RequestField[23]' => '',
                'RequestField[24]' => '',
                'RequestField[25]' => '',
                'RequestField[26]' => '',
                'RequestField[27]' => '',
                'RequestField[31]' => '',
                'RequestField[65]' => '0',
                'RequestField[66]' => '0',
                'RequestField[68]' => '0',
                'RequestField[69]' => '0',
                'RequestField[70]' => '0',
                'RequestField[71]' => '0',
                'RequestField[76]' => '0',
                'RequestField[77]' => '0',
                'RequestField[88]' => '0',
                'RequestField[93]' => '0',
                'RequestField[94]' => '0',
                'Request[addedAttachments]' => '[]',
                'Request[amount_to_work]' => '10',
                'Request[attachment_folder]' => '9c4f8356ab2ddca8b9dcafb8b511df50',
                'Request[author_id]' => '4',
                'Request[category_id]' => '1',
                'Request[correction_comment]' => '',
                'Request[cross_check_manager_id]' => '',
                'Request[deletedAttachments]' => '[]',
                'Request[description]' => 'description',
                'Request[manager_id]' => '11',
                'Request[planned_start_date]' => '',
                'Request[priority]' => '2',
                'Request[recommendations]' => '',
                'Request[report_period_id]' => '',
                'Request[result_comment]' => '',
                'Request[seller_id]' => '83',
                'Request[subject]' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'Request[supervisor_comment]' => '',
                'Request[supervisor_id]' => '10',
                'Request[uploadedFiles][]' => '',
                'newStatus' => '0',
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 10,
                            "manager_id" => 11,
                            "status" => 6,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 49,
                            'value' => 0,
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
                            'value' => 0,
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
                            "id" => 1,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Супервайзер Начальникович 1, Супервайзер Начальникович 2"
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '[]',
                            "triggered_by" => "Константин Куцан",
                            "event" => "supervisor_id",
                            "changed_fields" => '{"newValue": 10, "oldValue": 6}'
                        ],
                        [
                            "id" => 2,
                            "user_id" => 10,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Супервайзер Начальникович 1, Супервайзер Начальникович 2"
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '[]',
                            "triggered_by" => "Константин Куцан",
                            "event" => "supervisor_id",
                            "changed_fields" => '{"newValue": 10, "oldValue": 6}'
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11
                        ],
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)]: назначен новый супервайзер Супервайзер Начальникович 2","notification":"Константин Куцан <b>назначил(а) супервайзером заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] пользователя Супервайзер Начальникович 2</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
            ],
        ]
    ],

    'case6_0_cm' => [
        'setting' => [
            'description' => 'Изменение контент-менеджера во "В работе" + нотификации',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_0_cm.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'RequestField[111]' => '0',
                'RequestField[121]' => '',
                'RequestField[144]' => '0',
                'RequestField[157]' => '',
                'RequestField[1]' => '1',
                'RequestField[20]' => '',
                'RequestField[21]' => '',
                'RequestField[22]' => '',
                'RequestField[23]' => '',
                'RequestField[24]' => '',
                'RequestField[25]' => '',
                'RequestField[26]' => '',
                'RequestField[27]' => '',
                'RequestField[31]' => '',
                'RequestField[65]' => '0',
                'RequestField[66]' => '0',
                'RequestField[68]' => '0',
                'RequestField[69]' => '0',
                'RequestField[70]' => '0',
                'RequestField[71]' => '0',
                'RequestField[76]' => '0',
                'RequestField[77]' => '0',
                'RequestField[88]' => '0',
                'RequestField[93]' => '0',
                'RequestField[94]' => '0',
                'Request[addedAttachments]' => '[]',
                'Request[amount_to_work]' => '10',
                'Request[attachment_folder]' => '9c4f8356ab2ddca8b9dcafb8b511df50',
                'Request[author_id]' => '4',
                'Request[category_id]' => '1',
                'Request[correction_comment]' => '',
                'Request[cross_check_manager_id]' => '',
                'Request[deletedAttachments]' => '[]',
                'Request[description]' => 'description',
                'Request[manager_id]' => '12',
                'Request[planned_start_date]' => '',
                'Request[priority]' => '2',
                'Request[recommendations]' => '',
                'Request[report_period_id]' => '',
                'Request[result_comment]' => '',
                'Request[seller_id]' => '83',
                'Request[subject]' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'Request[supervisor_comment]' => '',
                'Request[supervisor_id]' => '6',
                'Request[uploadedFiles][]' => '',
                'newStatus' => '0',
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 12,
                            "status" => 5,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 49,
                            'value' => 0,
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
                            'value' => 0,
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
                            "id" => 1,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Менеджер Контентович 1Б, Супервайзер Начальникович 1"
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '[]',
                            "triggered_by" => "Константин Куцан",
                            "event" => "manager_id",
                            "changed_fields" => '{"newValue": "12", "oldValue": 11}'
                        ],
                        [
                            "id" => 2,
                            "user_id" => 12,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Менеджер Контентович 1Б, Супервайзер Начальникович 1"
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '[]',
                            "triggered_by" => "Константин Куцан",
                            "event" => "manager_id",
                            "changed_fields" => '{"newValue": "12", "oldValue": 11}'
                        ],
                        [
                            "id" => 3,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1Б, Супервайзер Начальникович 1"
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '[]',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 5, "oldValue": 6}'
                        ],
                        [
                            "id" => 4,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1Б, Супервайзер Начальникович 1"
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '[]',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 5, "oldValue": 6}'
                        ],
                        [
                            "id" => 5,
                            "user_id" => 12,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Контентович 1Б, Супервайзер Начальникович 1"
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => '[]',
                            "triggered_by" => "Константин Куцан",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 5, "oldValue": 6}'
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "created_at" => date("Y-m-d H:i:s", strtotime('- 3 hours 58 minutes')),
                            "manager_id" => 11,
                            "reasons" => null
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 6,
                            "new_status" => 5,
                            "reason" => null,
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => 12,
                            "reasons" => null
                        ]
                    ],
                    'requests_reasons' => [],
                    'transition_info' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`  [Товар-новинка/эксклюзив (трафикообразующий)]: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] пользователя Менеджер Контентович 1Б</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":2,"userId":12,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`  [Товар-новинка/эксклюзив (трафикообразующий)]: назначен новый исполнитель Менеджер Контентович 1Б","notification":"Константин Куцан <b>назначил(а) исполнителем заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] Вас</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":4,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` [Товар-новинка/эксклюзив (трафикообразующий)] перешла в статус `Ожидает взятия в работу`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Ожидает взятия в работу\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
            ],
        ]
    ],
];
