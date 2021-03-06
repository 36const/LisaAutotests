<?php

return [
    'case2_3' => [
        'setting' => [
            'description' => 'Перевод из "Готова для распределения" в "На доработке"',
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
                        'id' => 11,
                        'reason' => 'Другое (описан в коментариях)',
                        'comment_is_required' => 1,
                    ],
                ],
                'status' => 3,
                'currentStatus' => 2,
                'payload' => [
                ],
                'comment' => 'Затребовать изменения',
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
                            'status' => 3,
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
                            'previous_status' => 2,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
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
                            'fields_for_complete' => '{"Причина": "Другое (описан в коментариях) </b>Затребовать изменения"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 3, "oldValue": 2}',
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
                            'fields_for_complete' => '{"Причина": "Другое (описан в коментариях) </b>Затребовать изменения"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 3, "oldValue": 2}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 2,
                            'new_status' => 3,
                            'reason' => 'Затребовать изменения',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => 'Другое (описан в коментариях)'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 11
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":2,"new_status":3,"reason":"Затребовать изменения","created_at":"' . date('Y-m-d'),
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":null,"status":3,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":null,"reason":"Затребовать изменения","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":2,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":null},"changed_fields_names":["status","reason","last_change_status_date","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],

    'case2_4' => [
        'setting' => [
            'description' => 'Перевод из "Готова для распределения" в "Отменена" + отправка запроса в VAT',
            //+ проверка что заявка не в статусе 8/9 с supplier_cabinet_id переведётся без загруженных в minio вложений
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_4_supplier.php',
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
                    'body' => file_get_contents(codecept_data_dir('/Vat/case400.json')),
                    'statusCode' => 400
                ],
            ],
            $mockDataStatusesSingle,
        ],
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
                'currentStatus' => 2,
                'payload' => [
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
                            'previous_status' => 2,
                            'supplier_cabinet_id' => 111,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
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
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "doc .doc", "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": []}, "oldValue": []}',
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
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "doc .doc", "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": []}, "oldValue": []}',
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
                            'fields_for_complete' => '{"Причина": "Другое (описан в коментариях) </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Описание": "description", "Приоритет": "Товар-новинка/эксклюзив (трафикообразующий)", "Супервайзер": "Супервайзер Начальникович 1", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Коэффициент уровня сложности задачи": "1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 2}',
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
                            'fields_for_complete' => '{"Причина": "Другое (описан в коментариях) </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 4, "oldValue": 2}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 2,
                            'new_status' => 4,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => 'Другое (описан в коментариях)'
                        ]
                    ],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 11
                        ],
                    ],
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
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> 194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd, doc .doc, pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx, !@#$%^&*()_+`-=][\';.|}{:?><.jpg</br>","requestId":1}',
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Другое (описан в коментариях) </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Супервайзер:</b> Супервайзер Начальникович 1 </br><b>Описание:</b> description </br><b>Приоритет:</b> Товар-новинка/эксклюзив (трафикообразующий) </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br>","requestId":1}',
                    '{"notificationId":4,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Отменена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Отменена\"</b> </br><b>Количество в работу:</b> 10</br><b>Причина:</b> Другое (описан в коментариях) </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО </br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> (не указан) </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":2,"new_status":4,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","created_at":"' . date('Y-m-d'),
                ],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":1,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803902_doc .doc","alias":"doc .doc","size":"34304","attachment":{"id":2,"request_id":1,"file_name_old":"","alias":"doc .doc","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_doc.doc","size":34304}},' .
                    '{"folder":"1631802792673","fileName":"803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","size":"97152","attachment":{"id":3,"request_id":1,"file_name_old":"","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx","size":97152}},' .
                    '{"folder":"1631802792673","fileName":"803902_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":4,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":null,"status":4,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":null,"reason":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":"' . date('Y-m-d'),
                        '","supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":"{\"3\":3}","cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":2,"supplier_cabinet_id":111,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":null},"changed_fields_names":["status","reason","supervisor_process_date","last_change_status_date","sv_report_periods","previous_status"]}',
                    ],
                ],
            ],
        ]
    ],

    'case2_5' => [
        'setting' => [
            'description' => 'Перевод из "Готова для распределения" в "Ожидает взятия в работу"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'mock_data' => $mockDataStatusesSingle,
        'provider_data' => [
            'requestParameter' => 'appoint-manager',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'userId' => 11,
                'currentStatus' => 2,
                'payload' => [
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
                'message' => 'Менеджер Контентович 1А назначен исполнителем 1 заявкам',
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
                            'status' => 5,
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
                            'reason' => null,
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
                            'previous_status' => 2,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
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
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "doc .doc", "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": []}, "oldValue": []}',
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'attachments',
                            'changed_fields' => '{"newValue": {"added": ["194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd", "doc .doc", "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx", "!@#$%^&*()_+`-=][\';.|}{:?><.jpg"], "deleted": []}, "oldValue": []}',
                            'notify_service_id' => NULL,
                        ],
                        [
                            'id' => 4,
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
                            'event' => 'manager_id',
                            'changed_fields' => '{"newValue": 11, "oldValue": null}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 5,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 2}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 6,
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
                            'changed_fields' => '{"newValue": 5, "oldValue": 2}',
                            'notify_service_id' => null,
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
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 5, "oldValue": 2}',
                            'notify_service_id' => null,
                        ]
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 2,
                            'new_status' => 5,
                            'reason' => null,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => 11,
                            'reasons' => null
                        ]
                    ],
                    'requests_reasons' => []
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_sendOuterNotifications' => [],
                'lisa_common' => [
                    'create.request_status_history.all' => '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":2,"new_status":5,"reason":null,"created_at":"' . date('Y-m-d'),
                ],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":1,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803902_doc .doc","alias":"doc .doc","size":"34304","attachment":{"id":2,"request_id":1,"file_name_old":"","alias":"doc .doc","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_doc.doc","size":34304}},' .
                    '{"folder":"1631802792673","fileName":"803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","size":"97152","attachment":{"id":3,"request_id":1,"file_name_old":"","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx","size":97152}},' .
                    '{"folder":"1631802792673","fileName":"803902_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":4,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":11,"status":5,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":1,"seller_id":83,"recommendations":null,"reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":2,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":1},"changed_fields_names":["manager_id","status","last_change_status_date","previous_status","manager_team"]}',
                    ],
                ],
            ],
        ]
    ],

];
