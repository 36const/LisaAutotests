<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление, скачивание архива и удаление файла в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "db_1" => [
                'lisa_fixtures' => [
                    "request_attachments" => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            //"file_name like" => "_doc.doc",
                            "alias" => "~!@#$%^&*()_+`-=][;.|}{:?><.doc",
                            "status" => 2,
                            "uploaded_by" => "Константин Куцан",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null
                        ]
                    ],
                    "user_notifications" => [
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
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
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
                            "notify_service_id" => null
                        ]
                    ]
                ]
            ],
            'RabbitMQ_1' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> ~!@#$%^&*()_+`-=][;.|}{:?><.doc</br>","requestId":1}',
                    '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> ~!@#$%^&*()_+`-=][;.|}{:?><.doc</br>","requestId":1}',
                    '{"notificationId":4,"userId":17,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Добавлено:</b> ~!@#$%^&*()_+`-=][;.|}{:?><.doc</br>","requestId":1}',
                ]
            ],
            "db_2" => [
                'lisa_fixtures' => [
                    "request_attachments" => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            //"file_name like" => "_doc.doc",
                            "alias" => "~!@#$%^&*()_+`-=][;.|}{:?><.doc",
                            "status" => 0,
                            "uploaded_by" => "Константин Куцан",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => "Константин Куцан",
                            "deleted_at >=" => date("Y-m-d"),
                        ]
                    ],
                    "user_notifications" => [
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
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
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"], "deleted": []}, "oldValue": []}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 5,
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": [], "deleted": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"]}, "oldValue": []}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 6,
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": [], "deleted": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"]}, "oldValue": []}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 7,
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": [], "deleted": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"]}, "oldValue": []}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 8,
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
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": [], "deleted": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"]}, "oldValue": []}',
                            "notify_service_id" => null
                        ]
                    ]
                ]
            ],
            'RabbitMQ_2' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":5,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=5\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Удалено:</b> ~!@#$%^&*()_+`-=][;.|}{:?><.doc</br>","requestId":1}',
                    '{"notificationId":6,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=6\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Удалено:</b> ~!@#$%^&*()_+`-=][;.|}{:?><.doc</br>","requestId":1}',
                    '{"notificationId":8,"userId":17,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=8\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br> <b>Удалено:</b> ~!@#$%^&*()_+`-=][;.|}{:?><.doc</br>","requestId":1}'
                ]
            ]
        ]
    ],
];
