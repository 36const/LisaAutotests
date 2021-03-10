<?php
"//~!@#$%^&*()_+`-=][';.|}{\":?><.doc";
return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление и удаление файла на странице создания заявки, скачивание архива в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "db_1" => [
                'lisa_fixtures' => [
                    "request_attachments" => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "~!@#$%^&*()_+`-=][;.|}{:?><.doc",
                            "status" => 2,
                            "uploaded_by" => "Константин Куцан",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%.doc",
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
                            "priority" => null,
                            "amount_to_work" => 999999999,
                            "request_subject" => '!"№;%:?*()',
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 999999999,
                            "request_subject" => '!"№;%:?*()',
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null
                        ],
                    ]
                ]
            ],
            'RabbitMQ_1' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Создана новая заявка №1 `!\"№;%:?*()`","notification":"Константин Куцан <b>создал(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 !\"№;%:?*()</a></br><b>Количество в работу:</b> 999999999</br>","requestId":1}',
                ]
            ],
            "db_2" => [
                'lisa_fixtures' => [
                    "request_attachments" => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "~!@#$%^&*()_+`-=][;.|}{:?><.doc",
                            "status" => 0,
                            "uploaded_by" => "Константин Куцан",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => "Константин Куцан",
                            "deleted_at >=" => date("Y-m-d"),
                            "file_name like" => "%.doc",
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
                            "priority" => null,
                            "amount_to_work" => 999999999,
                            "request_subject" => '!"№;%:?*()',
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 999999999,
                            "request_subject" => '!"№;%:?*()',
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 3,
                            "user_id" => 4,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 999999999,
                            "request_subject" => '!"№;%:?*()',
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": [], "deleted": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"]}, "oldValue": []}',
                            "notify_service_id" => null
                        ],
                        [
                            "id" => 4,
                            "user_id" => 5,
                            "notification" => "",
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 999999999,
                            "request_subject" => '!"№;%:?*()',
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "attachments",
                            "changed_fields" => '{"newValue": {"added": [], "deleted": ["~!@#$%^&*()_+`-=][;.|}{:?><.doc"]}, "oldValue": []}',
                            "notify_service_id" => null
                        ],
                   ]
                ]
            ],
            'RabbitMQ_2' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":3,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `!\"№;%:?*()`: изменен набор вложений","notification":"Константин Куцан <b>изменил(а) набор вложений заявки</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 !\"№;%:?*()</a></br><b>Количество в работу:</b> 999999999</br> <b>Удалено:</b> ~!@#$%^&*()_+`-=][;.|}{:?><.doc</br>","requestId":1}',
                ]
            ]
        ]
    ],
];
