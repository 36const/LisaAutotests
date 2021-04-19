<?php

$lisa_fixtures = [
    'requests' => [],
    'requests_fields' => [],
    'user_notifications' => [],
    'observers' => [],
];

return [
    /*
     * Корректные запросы для создания заявок всех возможных типов/направлений
     */
    'case1' => [
        'setting' => [
            'description' => 'Создание заявки тип 1 направление 1 + нотификации + все форматы вложений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 1,
                "Request[seller_id]" => -2,
                "Request[subject]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 1,
                "Request[observers]" => [15, 17],
            ],
            'attachments' => [
                'files[]' => [
                    codecept_data_dir('Attachments/194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd'),
                    codecept_data_dir('Attachments/csv.csv'),
                    codecept_data_dir('Attachments/doc .doc'),
                    codecept_data_dir('Attachments/docx.docx'),
                    codecept_data_dir('Attachments/eml.eml'),
                    codecept_data_dir('Attachments/gif_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.gif'),
                    codecept_data_dir('Attachments/jpeglong.jpeg'),
                    codecept_data_dir('Attachments/mp4.mp4'),
                    codecept_data_dir('Attachments/rar1.rar'),
                    codecept_data_dir('Attachments/pdf.pdf'),
                    codecept_data_dir('Attachments/png.png'),
                    codecept_data_dir('Attachments/ppt_а.ppt'),
                    codecept_data_dir('Attachments/pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx'),
                    codecept_data_dir('Attachments/webp.webp'),
                    codecept_data_dir('Attachments/xls.xls'),
                    codecept_data_dir('Attachments/xlsm.xlsm'),
                    codecept_data_dir('Attachments/xlsx.xlsx'),
                    codecept_data_dir('Attachments/xml_АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ.xml'),
                    codecept_data_dir('Attachments/zip1.zip'),
                    codecept_data_dir('Attachments/~!@#$%^&*()_+`-=][\';.|}{:?><.jpg'),
                ],
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => '[API] !@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => -2,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                    ],
                    'request_attachments' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%__194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdps.psd"
                        ],
                        [
                            "id" => 2,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "csv.csv",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_csv.csv"
                        ],
                        [
                            "id" => 3,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "doc .doc",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_doc_.doc"
                        ],
                        [
                            "id" => 4,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "docx.docx",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_docx.docx"
                        ],
                        [
                            "id" => 5,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "eml.eml",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_eml.eml"
                        ],
                        [
                            "id" => 6,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "gif_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.gif",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_gif_abvgdeezzijklmnoprstufhccssyeuaegii.gif"
                        ],
                        [
                            "id" => 7,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "jpeglong.jpeg",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_jpeglong.jpeg"
                        ],
                        [
                            "id" => 8,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "mp4.mp4",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_mp4.mp4"
                        ],
                        [
                            "id" => 9,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "rar1.rar",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_rar1.rar"
                        ],
                        [
                            "id" => 10,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "pdf.pdf",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_pdf.pdf"
                        ],
                        [
                            "id" => 11,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "png.png",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_png.png"
                        ],
                        [
                            "id" => 12,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "ppt_а.ppt",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_ppt_a.ppt"
                        ],
                        [
                            "id" => 13,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx"
                        ],
                        [
                            "id" => 14,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "webp.webp",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_webp.webp"
                        ],
                        [
                            "id" => 15,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "xls.xls",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_xls.xls"
                        ],
                        [
                            "id" => 16,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "xlsm.xlsm",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_xlsm.xlsm"
                        ],
                        [
                            "id" => 17,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "xlsx.xlsx",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_xlsx.xlsx"
                        ],
                        [
                            "id" => 18,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "xml_АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ.xml",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_xml_ABVGDEEZZIJKLMNOPRSTUFHCCSSYEUAEGII.xml"
                        ],
                        [
                            "id" => 19,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "zip1.zip",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => "%_zip1.zip"
                        ],
                        [
                            "id" => 20,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "~!@#$%^&*()_+`-=][';.|}{:?><.jpg",
                            "status" => 2,
                            "uploaded_by" => "Система",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => '%_$_-:.jpg'
                        ]
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] !@#$%^&*()_+`-]'/[;.,}\"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] !@#$%^&*()_+`-]'/[;.,}\"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            //"id" => 4, на тачке id = 3
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] !@#$%^&*()_+`-]'/[;.,}\"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            //"id" => 3, на тачке id = 4
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] !@#$%^&*()_+`-]'/[;.,}\"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                '_lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Создана новая заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`","notification":"Константин Куцан <b>создал(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Создана новая заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`","notification":"Константин Куцан <b>создал(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                    '{"notificationId":4,"userId":17,"attachments":"[]","subject":"[LISA] Создана новая заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`","notification":"Константин Куцан <b>создал(а) заявку</b> <a href=\"http://gomer.local/bpm/request/view-from-notify?requestId=1&amp;notifId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]</br><b>Количество в работу:</b> 10</br>","requestId":1}',
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание заявки тип 1 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 1,
                "files[]" => ''
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление новых товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление новых товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление новых товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание заявки тип 2 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                ]
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание заявки тип 2 направление 2 (без логина и id автора)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[category_id]" => 99, //пропускается потому что направление Маркет
                "Request[seller_id]" => 0,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 1,
                            "type_id" => 2,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
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
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание заявки тип 3 направление 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Перенос товаров (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 3,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Перенос товаров (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание заявки тип 3 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1, //пропускается потому что направление Маркет
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Перенос товаров (Работа с товарами Маркетплейса)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 3,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Перенос товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
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
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Перенос товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание заявки тип 4 направление 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[169]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Группировка товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 4,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Группировка товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 169,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Группировка товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 33,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Группировка товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Группировка товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Группировка товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание заявки тип 5 направление 1 (с author_id)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_id]" => 4,
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 5,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 5,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Создание заявки тип 6 направление 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[seller_id]" => 0,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[subject]" => "Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 6,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 6,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
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
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Создание заявки тип 7 направление 0 (без кат.) (с author_id)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_id]" => 4,
                //"Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 7,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
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
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Создание заявки тип 8 направление 0 (без прод.) (с несуществующим author_login)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'йцукфыва',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                //"Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 8,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 1,
                            "type_id" => 8,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => null,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            'payload' => '{"author_login": "йцукфыва"}',
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
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Создание заявки тип 9 направление 0 (без прод.) (с несуществующим author_id)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_id]" => 999,
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                //"Request[seller_id]" => 83,
                "Request[subject]" => "Добавление параметров/значений (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 9,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 1,
                            "type_id" => 9,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление параметров/значений (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => null,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Создание заявки тип 10 направление 0 (без кат.) (с одинаковыми существующими author_id и author_login)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[author_id]" => 4,
                //"Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 10,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Изменение существующих параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Изменение существующих параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Изменение существующих параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Изменение существующих параметров/значений (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Создание заявки тип 11 направление 0 (с разными существующими author_id и author_login)',
            'type' => 11,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[author_id]" => 10,
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Проектирование структуры (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 11,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 11,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Проектирование структуры (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проектирование структуры (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проектирование структуры (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проектирование структуры (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Проектирование структуры (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Создание заявки тип 12 направление 1 (с несуществующим author_id и существующим author_login)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[author_id]" => 999,
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 12,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 12,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Создание заявки тип 13 направление 0 (с существующим author_id и несуществующим author_login)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'йцукфыва',
                "Request[author_id]" => 4,
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение видео (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 13,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 1,
                            "type_id" => 13,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление/изменение видео (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '{"author_login": "йцукфыва"}',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение видео (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение видео (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение видео (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение видео (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Создание заявки тип 14 направление 0 (без кат.) (с несуществующими author_id и author_login)',
            'type' => 14,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'fasdf',
                "Request[author_id]" => 999,
                //"Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 14,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 1,
                            "type_id" => 14,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '{"author_login": "fasdf"}',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            'triggered_by' => 'Система',
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Создание заявки тип 15 направление 0',
            'type' => 15,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение тегов (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 15,
            ],
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 15,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "[API] Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                            "supplier_cabinet_id" => 1,
                            "payload" => '[]',
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
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
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение тегов (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение тегов (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение тегов (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "[API] Добавление/изменение тегов (Определяется типом задачи)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Константин Куцан",
                            "event" => "create",
                            "changed_fields" => '{"newValue": 1, "oldValue": null}',
                            "notify_service_id" => null,
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    /*
     * Ошибки при указании всех RequestField + проверка, что в ответе не будут указаны правильные RequestField
     */
    'case19' => [
        'setting' => [
            'description' => 'Ошибка при создании со всеми RequestField для 1/2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[2]" => 1,
                "RequestField[3]" => 1,
                "RequestField[4]" => 1,
                "RequestField[5]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "RequestField[8]" => 1,
                "RequestField[9]" => 1,
                "RequestField[10]" => 1,
                "RequestField[11]" => 1,
                "RequestField[12]" => 1,
                "RequestField[13]" => 1,
                "RequestField[14]" => 1,
                "RequestField[15]" => 1,
                "RequestField[16]" => 1,
                "RequestField[17]" => 1,
                "RequestField[18]" => 1,
                "RequestField[19]" => 1,
                "RequestField[20]" => 1,
                "RequestField[21]" => 1,
                "RequestField[22]" => 1,
                "RequestField[23]" => 1,
                "RequestField[24]" => 1,
                "RequestField[25]" => 1,
                "RequestField[26]" => 1,
                "RequestField[27]" => 1,
                "RequestField[28]" => 1,
                "RequestField[29]" => 1,
                "RequestField[30]" => 1,
                "RequestField[31]" => 1,
                "RequestField[32]" => 1,
                "RequestField[33]" => 1,
                "RequestField[34]" => 1,
                "RequestField[35]" => 1,
                "RequestField[36]" => 1,
                "RequestField[37]" => 1,
                "RequestField[38]" => 1,
                "RequestField[39]" => 1,
                "RequestField[40]" => 1,
                "RequestField[41]" => 1,
                "RequestField[42]" => 1,
                "RequestField[43]" => 1,
                "RequestField[44]" => 1,
                "RequestField[45]" => 1,
                "RequestField[46]" => 1,
                "RequestField[47]" => 1,
                "RequestField[48]" => 1,
                "RequestField[49]" => 1,
                "RequestField[50]" => 1,
                "RequestField[51]" => 1,
                "RequestField[52]" => 1,
                "RequestField[53]" => 1,
                "RequestField[54]" => 1,
                "RequestField[55]" => 1,
                "RequestField[56]" => 1,
                "RequestField[57]" => 1,
                "RequestField[58]" => 1,
                "RequestField[59]" => 1,
                "RequestField[60]" => 1,
                "RequestField[61]" => 1,
                "RequestField[62]" => 1,
                "RequestField[63]" => 1,
                "RequestField[64]" => 1,
                "RequestField[65]" => 1,
                "RequestField[66]" => 1,
                "RequestField[67]" => 1,
                "RequestField[68]" => 1,
                "RequestField[69]" => 1,
                "RequestField[70]" => 1,
                "RequestField[71]" => 1,
                "RequestField[72]" => 1,
                "RequestField[73]" => 1,
                "RequestField[74]" => 1,
                "RequestField[75]" => 1,
                "RequestField[76]" => 1,
                "RequestField[77]" => 1,
                "RequestField[78]" => 1,
                "RequestField[79]" => 1,
                "RequestField[80]" => 1,
                "RequestField[81]" => 1,
                "RequestField[82]" => 1,
                "RequestField[83]" => 1,
                "RequestField[84]" => 1,
                "RequestField[85]" => 1,
                "RequestField[86]" => 1,
                "RequestField[87]" => 1,
                "RequestField[88]" => 1,
                "RequestField[89]" => 1,
                "RequestField[90]" => 1,
                "RequestField[91]" => 1,
                "RequestField[92]" => 1,
                "RequestField[93]" => 1,
                "RequestField[94]" => 1,
                "RequestField[95]" => 1,
                "RequestField[96]" => 1,
                "RequestField[97]" => 1,
                "RequestField[98]" => 1,
                "RequestField[99]" => 1,
                "RequestField[100]" => 1,
                "RequestField[101]" => 1,
                "RequestField[102]" => 1,
                "RequestField[103]" => 1,
                "RequestField[104]" => 1,
                "RequestField[105]" => 1,
                "RequestField[106]" => 1,
                "RequestField[107]" => 1,
                "RequestField[108]" => 1,
                "RequestField[109]" => 1,
                "RequestField[110]" => 1,
                "RequestField[111]" => 1,
                "RequestField[112]" => 1,
                "RequestField[113]" => 1,
                "RequestField[114]" => 1,
                "RequestField[115]" => 1,
                "RequestField[116]" => 1,
                "RequestField[117]" => 1,
                "RequestField[118]" => 1,
                "RequestField[119]" => 1,
                "RequestField[120]" => 1,
                "RequestField[121]" => 1,
                "RequestField[122]" => 1,
                "RequestField[123]" => 1,
                "RequestField[124]" => 1,
                "RequestField[125]" => 1,
                "RequestField[126]" => 1,
                "RequestField[127]" => 1,
                "RequestField[128]" => 1,
                "RequestField[129]" => 1,
                "RequestField[130]" => 1,
                "RequestField[131]" => 1,
                "RequestField[132]" => 1,
                "RequestField[133]" => 1,
                "RequestField[134]" => 1,
                "RequestField[135]" => 1,
                "RequestField[136]" => 1,
                "RequestField[137]" => 1,
                "RequestField[138]" => 1,
                "RequestField[139]" => 1,
                "RequestField[140]" => 1,
                "RequestField[141]" => 1,
                "RequestField[142]" => 1,
                "RequestField[143]" => 1,
                "RequestField[144]" => 1,
                "RequestField[145]" => 1,
                "RequestField[146]" => 1,
                "RequestField[147]" => 1,
                "RequestField[148]" => 1,
                "RequestField[149]" => 1,
                "RequestField[150]" => 1,
                "RequestField[151]" => 1,
                "RequestField[152]" => 1,
                "RequestField[153]" => 1,
                "RequestField[154]" => 1,
                "RequestField[155]" => 1,
                "RequestField[156]" => 1,
                "RequestField[157]" => 1,
                "RequestField[158]" => 1,
                "RequestField[159]" => 1,
                "RequestField[160]" => 1,
                "RequestField[161]" => 1,
                "RequestField[162]" => 1,
                "RequestField[163]" => 1,
                "RequestField[164]" => 1,
                "RequestField[165]" => 1,
                "RequestField[166]" => 1,
                "RequestField[167]" => 1,
                "RequestField[168]" => 1,
                "RequestField[169]" => 1,
                "RequestField[170]" => 1,
                "RequestField[171]" => 1,
                "RequestField[172]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[description]" => 'description',
                "Request[direction]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 1,
                "Request[observers]" => [15, 17],
                "files[]" => ''
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Переданы лишние поля: RequestField[1], RequestField[2], RequestField[3], RequestField[4], RequestField[6], RequestField[7], RequestField[9], RequestField[10], RequestField[11], RequestField[12], RequestField[14], RequestField[16], RequestField[18], RequestField[20], RequestField[21], RequestField[22], RequestField[23], RequestField[24], RequestField[25], RequestField[26], RequestField[27], RequestField[28], RequestField[29], RequestField[30], RequestField[31], RequestField[32], RequestField[33], RequestField[34], RequestField[35], RequestField[36], RequestField[37], RequestField[38], RequestField[39], RequestField[40], RequestField[41], RequestField[42], RequestField[43], RequestField[44], RequestField[45], RequestField[46], RequestField[47], RequestField[48], RequestField[49], RequestField[50], RequestField[51], RequestField[52], RequestField[53], RequestField[54], RequestField[55], RequestField[56], RequestField[57], RequestField[58], RequestField[59], RequestField[60], RequestField[61], RequestField[62], RequestField[63], RequestField[64], RequestField[65], RequestField[66], RequestField[67], RequestField[68], RequestField[69], RequestField[70], RequestField[71], RequestField[72], RequestField[73], RequestField[74], RequestField[75], RequestField[76], RequestField[77], RequestField[78], RequestField[79], RequestField[80], RequestField[81], RequestField[82], RequestField[83], RequestField[84], RequestField[85], RequestField[86], RequestField[87], RequestField[88], RequestField[89], RequestField[90], RequestField[91], RequestField[92], RequestField[93], RequestField[94], RequestField[95], RequestField[96], RequestField[97], RequestField[98], RequestField[99], RequestField[100], RequestField[101], RequestField[102], RequestField[103], RequestField[104], RequestField[105], RequestField[106], RequestField[107], RequestField[108], RequestField[109], RequestField[110], RequestField[111], RequestField[112], RequestField[113], RequestField[114], RequestField[115], RequestField[116], RequestField[117], RequestField[118], RequestField[119], RequestField[120], RequestField[121], RequestField[122], RequestField[123], RequestField[124], RequestField[125], RequestField[126], RequestField[128], RequestField[129], RequestField[130], RequestField[131], RequestField[132], RequestField[133], RequestField[134], RequestField[135], RequestField[136], RequestField[137], RequestField[138], RequestField[139], RequestField[140], RequestField[141], RequestField[142], RequestField[143], RequestField[144], RequestField[145], RequestField[146], RequestField[147], RequestField[148], RequestField[149], RequestField[150], RequestField[151], RequestField[152], RequestField[153], RequestField[154], RequestField[155], RequestField[156], RequestField[157], RequestField[158], RequestField[159], RequestField[161], RequestField[162], RequestField[163], RequestField[164], RequestField[165], RequestField[166], RequestField[167], RequestField[168], RequestField[169], RequestField[170], RequestField[171], RequestField[172] при создании заявки этого типа эти поля задать нельзя."
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ]
        ]
    ],

    'case20' => [
        'setting' => [
            'description' => 'Ошибка при создании со всеми RequestField для 2/1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[2]" => 1,
                "RequestField[3]" => 1,
                "RequestField[4]" => 1,
                "RequestField[5]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "RequestField[8]" => 1,
                "RequestField[9]" => 1,
                "RequestField[10]" => 1,
                "RequestField[11]" => 1,
                "RequestField[12]" => 1,
                "RequestField[13]" => 1,
                "RequestField[14]" => 1,
                "RequestField[15]" => 1,
                "RequestField[16]" => 1,
                "RequestField[17]" => 1,
                "RequestField[18]" => 1,
                "RequestField[19]" => 1,
                "RequestField[20]" => 1,
                "RequestField[21]" => 1,
                "RequestField[22]" => 1,
                "RequestField[23]" => 1,
                "RequestField[24]" => 1,
                "RequestField[25]" => 1,
                "RequestField[26]" => 1,
                "RequestField[27]" => 1,
                "RequestField[28]" => 1,
                "RequestField[29]" => 1,
                "RequestField[30]" => 1,
                "RequestField[31]" => 1,
                "RequestField[32]" => 1,
                "RequestField[33]" => 1,
                "RequestField[34]" => 1,
                "RequestField[35]" => 1,
                "RequestField[36]" => 1,
                "RequestField[37]" => 1,
                "RequestField[38]" => 1,
                "RequestField[39]" => 1,
                "RequestField[40]" => 1,
                "RequestField[41]" => 1,
                "RequestField[42]" => 1,
                "RequestField[43]" => 1,
                "RequestField[44]" => 1,
                "RequestField[45]" => 1,
                "RequestField[46]" => 1,
                "RequestField[47]" => 1,
                "RequestField[48]" => 1,
                "RequestField[49]" => 1,
                "RequestField[50]" => 1,
                "RequestField[51]" => 1,
                "RequestField[52]" => 1,
                "RequestField[53]" => 1,
                "RequestField[54]" => 1,
                "RequestField[55]" => 1,
                "RequestField[56]" => 1,
                "RequestField[57]" => 1,
                "RequestField[58]" => 1,
                "RequestField[59]" => 1,
                "RequestField[60]" => 1,
                "RequestField[61]" => 1,
                "RequestField[62]" => 1,
                "RequestField[63]" => 1,
                "RequestField[64]" => 1,
                "RequestField[65]" => 1,
                "RequestField[66]" => 1,
                "RequestField[67]" => 1,
                "RequestField[68]" => 1,
                "RequestField[69]" => 1,
                "RequestField[70]" => 1,
                "RequestField[71]" => 1,
                "RequestField[72]" => 1,
                "RequestField[73]" => 1,
                "RequestField[74]" => 1,
                "RequestField[75]" => 1,
                "RequestField[76]" => 1,
                "RequestField[77]" => 1,
                "RequestField[78]" => 1,
                "RequestField[79]" => 1,
                "RequestField[80]" => 1,
                "RequestField[81]" => 1,
                "RequestField[82]" => 1,
                "RequestField[83]" => 1,
                "RequestField[84]" => 1,
                "RequestField[85]" => 1,
                "RequestField[86]" => 1,
                "RequestField[87]" => 1,
                "RequestField[88]" => 1,
                "RequestField[89]" => 1,
                "RequestField[90]" => 1,
                "RequestField[91]" => 1,
                "RequestField[92]" => 1,
                "RequestField[93]" => 1,
                "RequestField[94]" => 1,
                "RequestField[95]" => 1,
                "RequestField[96]" => 1,
                "RequestField[97]" => 1,
                "RequestField[98]" => 1,
                "RequestField[99]" => 1,
                "RequestField[100]" => 1,
                "RequestField[101]" => 1,
                "RequestField[102]" => 1,
                "RequestField[103]" => 1,
                "RequestField[104]" => 1,
                "RequestField[105]" => 1,
                "RequestField[106]" => 1,
                "RequestField[107]" => 1,
                "RequestField[108]" => 1,
                "RequestField[109]" => 1,
                "RequestField[110]" => 1,
                "RequestField[111]" => 1,
                "RequestField[112]" => 1,
                "RequestField[113]" => 1,
                "RequestField[114]" => 1,
                "RequestField[115]" => 1,
                "RequestField[116]" => 1,
                "RequestField[117]" => 1,
                "RequestField[118]" => 1,
                "RequestField[119]" => 1,
                "RequestField[120]" => 1,
                "RequestField[121]" => 1,
                "RequestField[122]" => 1,
                "RequestField[123]" => 1,
                "RequestField[124]" => 1,
                "RequestField[125]" => 1,
                "RequestField[126]" => 1,
                "RequestField[127]" => 1,
                "RequestField[128]" => 1,
                "RequestField[129]" => 1,
                "RequestField[130]" => 1,
                "RequestField[131]" => 1,
                "RequestField[132]" => 1,
                "RequestField[133]" => 1,
                "RequestField[134]" => 1,
                "RequestField[135]" => 1,
                "RequestField[136]" => 1,
                "RequestField[137]" => 1,
                "RequestField[138]" => 1,
                "RequestField[139]" => 1,
                "RequestField[140]" => 1,
                "RequestField[141]" => 1,
                "RequestField[142]" => 1,
                "RequestField[143]" => 1,
                "RequestField[144]" => 1,
                "RequestField[145]" => 1,
                "RequestField[146]" => 1,
                "RequestField[147]" => 1,
                "RequestField[148]" => 1,
                "RequestField[149]" => 1,
                "RequestField[150]" => 1,
                "RequestField[151]" => 1,
                "RequestField[152]" => 1,
                "RequestField[153]" => 1,
                "RequestField[154]" => 1,
                "RequestField[155]" => 1,
                "RequestField[156]" => 1,
                "RequestField[157]" => 1,
                "RequestField[158]" => 1,
                "RequestField[159]" => 1,
                "RequestField[160]" => 1,
                "RequestField[161]" => 1,
                "RequestField[162]" => 1,
                "RequestField[163]" => 1,
                "RequestField[164]" => 1,
                "RequestField[165]" => 1,
                "RequestField[166]" => 1,
                "RequestField[167]" => 1,
                "RequestField[168]" => 1,
                "RequestField[169]" => 1,
                "RequestField[170]" => 1,
                "RequestField[171]" => 1,
                "RequestField[172]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Переданы лишние поля: RequestField[3], RequestField[5], RequestField[6], RequestField[7], RequestField[13], RequestField[16], RequestField[17], RequestField[18], RequestField[19], RequestField[20], RequestField[21], RequestField[22], RequestField[23], RequestField[24], RequestField[25], RequestField[26], RequestField[27], RequestField[28], RequestField[29], RequestField[30], RequestField[31], RequestField[32], RequestField[33], RequestField[34], RequestField[35], RequestField[36], RequestField[37], RequestField[38], RequestField[39], RequestField[40], RequestField[41], RequestField[42], RequestField[43], RequestField[44], RequestField[45], RequestField[46], RequestField[47], RequestField[48], RequestField[49], RequestField[50], RequestField[51], RequestField[52], RequestField[53], RequestField[54], RequestField[55], RequestField[56], RequestField[57], RequestField[58], RequestField[59], RequestField[60], RequestField[61], RequestField[62], RequestField[63], RequestField[64], RequestField[65], RequestField[66], RequestField[67], RequestField[68], RequestField[69], RequestField[70], RequestField[71], RequestField[72], RequestField[73], RequestField[74], RequestField[75], RequestField[76], RequestField[77], RequestField[78], RequestField[79], RequestField[80], RequestField[81], RequestField[82], RequestField[83], RequestField[84], RequestField[85], RequestField[86], RequestField[87], RequestField[88], RequestField[89], RequestField[90], RequestField[91], RequestField[92], RequestField[93], RequestField[94], RequestField[95], RequestField[96], RequestField[97], RequestField[98], RequestField[99], RequestField[100], RequestField[101], RequestField[102], RequestField[103], RequestField[104], RequestField[105], RequestField[106], RequestField[107], RequestField[108], RequestField[109], RequestField[110], RequestField[111], RequestField[112], RequestField[113], RequestField[114], RequestField[115], RequestField[116], RequestField[117], RequestField[118], RequestField[119], RequestField[120], RequestField[121], RequestField[122], RequestField[127], RequestField[128], RequestField[129], RequestField[130], RequestField[131], RequestField[132], RequestField[133], RequestField[134], RequestField[135], RequestField[136], RequestField[137], RequestField[138], RequestField[139], RequestField[140], RequestField[141], RequestField[142], RequestField[143], RequestField[144], RequestField[145], RequestField[146], RequestField[147], RequestField[148], RequestField[149], RequestField[150], RequestField[151], RequestField[152], RequestField[153], RequestField[154], RequestField[155], RequestField[156], RequestField[157], RequestField[158], RequestField[160], RequestField[161], RequestField[162], RequestField[163], RequestField[164], RequestField[165], RequestField[166], RequestField[167], RequestField[168], RequestField[169], RequestField[170], RequestField[171], RequestField[172] при создании заявки этого типа эти поля задать нельзя."
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ]
        ]
    ],

    'case21' => [
        'setting' => [
            'description' => 'Ошибка при создании со всеми RequestField для 4/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[2]" => 1,
                "RequestField[3]" => 1,
                "RequestField[4]" => 1,
                "RequestField[5]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "RequestField[8]" => 1,
                "RequestField[9]" => 1,
                "RequestField[10]" => 1,
                "RequestField[11]" => 1,
                "RequestField[12]" => 1,
                "RequestField[13]" => 1,
                "RequestField[14]" => 1,
                "RequestField[15]" => 1,
                "RequestField[16]" => 1,
                "RequestField[17]" => 1,
                "RequestField[18]" => 1,
                "RequestField[19]" => 1,
                "RequestField[20]" => 1,
                "RequestField[21]" => 1,
                "RequestField[22]" => 1,
                "RequestField[23]" => 1,
                "RequestField[24]" => 1,
                "RequestField[25]" => 1,
                "RequestField[26]" => 1,
                "RequestField[27]" => 1,
                "RequestField[28]" => 1,
                "RequestField[29]" => 1,
                "RequestField[30]" => 1,
                "RequestField[31]" => 1,
                "RequestField[32]" => 1,
                "RequestField[33]" => 1,
                "RequestField[34]" => 1,
                "RequestField[35]" => 1,
                "RequestField[36]" => 1,
                "RequestField[37]" => 1,
                "RequestField[38]" => 1,
                "RequestField[39]" => 1,
                "RequestField[40]" => 1,
                "RequestField[41]" => 1,
                "RequestField[42]" => 1,
                "RequestField[43]" => 1,
                "RequestField[44]" => 1,
                "RequestField[45]" => 1,
                "RequestField[46]" => 1,
                "RequestField[47]" => 1,
                "RequestField[48]" => 1,
                "RequestField[49]" => 1,
                "RequestField[50]" => 1,
                "RequestField[51]" => 1,
                "RequestField[52]" => 1,
                "RequestField[53]" => 1,
                "RequestField[54]" => 1,
                "RequestField[55]" => 1,
                "RequestField[56]" => 1,
                "RequestField[57]" => 1,
                "RequestField[58]" => 1,
                "RequestField[59]" => 1,
                "RequestField[60]" => 1,
                "RequestField[61]" => 1,
                "RequestField[62]" => 1,
                "RequestField[63]" => 1,
                "RequestField[64]" => 1,
                "RequestField[65]" => 1,
                "RequestField[66]" => 1,
                "RequestField[67]" => 1,
                "RequestField[68]" => 1,
                "RequestField[69]" => 1,
                "RequestField[70]" => 1,
                "RequestField[71]" => 1,
                "RequestField[72]" => 1,
                "RequestField[73]" => 1,
                "RequestField[74]" => 1,
                "RequestField[75]" => 1,
                "RequestField[76]" => 1,
                "RequestField[77]" => 1,
                "RequestField[78]" => 1,
                "RequestField[79]" => 1,
                "RequestField[80]" => 1,
                "RequestField[81]" => 1,
                "RequestField[82]" => 1,
                "RequestField[83]" => 1,
                "RequestField[84]" => 1,
                "RequestField[85]" => 1,
                "RequestField[86]" => 1,
                "RequestField[87]" => 1,
                "RequestField[88]" => 1,
                "RequestField[89]" => 1,
                "RequestField[90]" => 1,
                "RequestField[91]" => 1,
                "RequestField[92]" => 1,
                "RequestField[93]" => 1,
                "RequestField[94]" => 1,
                "RequestField[95]" => 1,
                "RequestField[96]" => 1,
                "RequestField[97]" => 1,
                "RequestField[98]" => 1,
                "RequestField[99]" => 1,
                "RequestField[100]" => 1,
                "RequestField[101]" => 1,
                "RequestField[102]" => 1,
                "RequestField[103]" => 1,
                "RequestField[104]" => 1,
                "RequestField[105]" => 1,
                "RequestField[106]" => 1,
                "RequestField[107]" => 1,
                "RequestField[108]" => 1,
                "RequestField[109]" => 1,
                "RequestField[110]" => 1,
                "RequestField[111]" => 1,
                "RequestField[112]" => 1,
                "RequestField[113]" => 1,
                "RequestField[114]" => 1,
                "RequestField[115]" => 1,
                "RequestField[116]" => 1,
                "RequestField[117]" => 1,
                "RequestField[118]" => 1,
                "RequestField[119]" => 1,
                "RequestField[120]" => 1,
                "RequestField[121]" => 1,
                "RequestField[122]" => 1,
                "RequestField[123]" => 1,
                "RequestField[124]" => 1,
                "RequestField[125]" => 1,
                "RequestField[126]" => 1,
                "RequestField[127]" => 1,
                "RequestField[128]" => 1,
                "RequestField[129]" => 1,
                "RequestField[130]" => 1,
                "RequestField[131]" => 1,
                "RequestField[132]" => 1,
                "RequestField[133]" => 1,
                "RequestField[134]" => 1,
                "RequestField[135]" => 1,
                "RequestField[136]" => 1,
                "RequestField[137]" => 1,
                "RequestField[138]" => 1,
                "RequestField[139]" => 1,
                "RequestField[140]" => 1,
                "RequestField[141]" => 1,
                "RequestField[142]" => 1,
                "RequestField[143]" => 1,
                "RequestField[144]" => 1,
                "RequestField[145]" => 1,
                "RequestField[146]" => 1,
                "RequestField[147]" => 1,
                "RequestField[148]" => 1,
                "RequestField[149]" => 1,
                "RequestField[150]" => 1,
                "RequestField[151]" => 1,
                "RequestField[152]" => 1,
                "RequestField[153]" => 1,
                "RequestField[154]" => 1,
                "RequestField[155]" => 1,
                "RequestField[156]" => 1,
                "RequestField[157]" => 1,
                "RequestField[158]" => 1,
                "RequestField[159]" => 1,
                "RequestField[160]" => 1,
                "RequestField[161]" => 1,
                "RequestField[162]" => 1,
                "RequestField[163]" => 1,
                "RequestField[164]" => 1,
                "RequestField[165]" => 1,
                "RequestField[166]" => 1,
                "RequestField[167]" => 1,
                "RequestField[168]" => 1,
                "RequestField[169]" => 1,
                "RequestField[170]" => 1,
                "RequestField[171]" => 1,
                "RequestField[172]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Группировка товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 4,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Переданы лишние поля: RequestField[1], RequestField[2], RequestField[3], RequestField[4], RequestField[5], RequestField[6], RequestField[7], RequestField[8], RequestField[9], RequestField[10], RequestField[11], RequestField[12], RequestField[13], RequestField[14], RequestField[15], RequestField[16], RequestField[17], RequestField[18], RequestField[19], RequestField[20], RequestField[21], RequestField[22], RequestField[23], RequestField[24], RequestField[25], RequestField[26], RequestField[27], RequestField[28], RequestField[29], RequestField[30], RequestField[31], RequestField[32], RequestField[33], RequestField[34], RequestField[35], RequestField[36], RequestField[37], RequestField[38], RequestField[39], RequestField[40], RequestField[41], RequestField[42], RequestField[43], RequestField[44], RequestField[45], RequestField[46], RequestField[47], RequestField[48], RequestField[49], RequestField[50], RequestField[51], RequestField[52], RequestField[53], RequestField[54], RequestField[55], RequestField[56], RequestField[57], RequestField[58], RequestField[59], RequestField[60], RequestField[61], RequestField[62], RequestField[63], RequestField[64], RequestField[65], RequestField[66], RequestField[67], RequestField[68], RequestField[69], RequestField[70], RequestField[71], RequestField[72], RequestField[73], RequestField[74], RequestField[75], RequestField[76], RequestField[77], RequestField[78], RequestField[79], RequestField[80], RequestField[81], RequestField[82], RequestField[83], RequestField[84], RequestField[85], RequestField[86], RequestField[87], RequestField[88], RequestField[89], RequestField[90], RequestField[91], RequestField[92], RequestField[93], RequestField[94], RequestField[95], RequestField[96], RequestField[97], RequestField[98], RequestField[99], RequestField[100], RequestField[101], RequestField[102], RequestField[103], RequestField[104], RequestField[105], RequestField[106], RequestField[107], RequestField[108], RequestField[109], RequestField[110], RequestField[111], RequestField[112], RequestField[113], RequestField[114], RequestField[115], RequestField[116], RequestField[117], RequestField[118], RequestField[119], RequestField[120], RequestField[121], RequestField[122], RequestField[123], RequestField[124], RequestField[125], RequestField[126], RequestField[127], RequestField[128], RequestField[129], RequestField[130], RequestField[131], RequestField[132], RequestField[133], RequestField[134], RequestField[135], RequestField[136], RequestField[137], RequestField[138], RequestField[139], RequestField[140], RequestField[141], RequestField[142], RequestField[143], RequestField[144], RequestField[145], RequestField[146], RequestField[147], RequestField[148], RequestField[149], RequestField[150], RequestField[151], RequestField[152], RequestField[153], RequestField[154], RequestField[155], RequestField[156], RequestField[157], RequestField[158], RequestField[159], RequestField[160], RequestField[161], RequestField[162], RequestField[163], RequestField[164], RequestField[165], RequestField[166], RequestField[167], RequestField[168], RequestField[170], RequestField[171], RequestField[172] при создании заявки этого типа эти поля задать нельзя."
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ]
        ]
    ],

    'case22' => [
        'setting' => [
            'description' => 'Ошибка при создании со всеми RequestField для 7/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[2]" => 1,
                "RequestField[3]" => 1,
                "RequestField[4]" => 1,
                "RequestField[5]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "RequestField[8]" => 1,
                "RequestField[9]" => 1,
                "RequestField[10]" => 1,
                "RequestField[11]" => 1,
                "RequestField[12]" => 1,
                "RequestField[13]" => 1,
                "RequestField[14]" => 1,
                "RequestField[15]" => 1,
                "RequestField[16]" => 1,
                "RequestField[17]" => 1,
                "RequestField[18]" => 1,
                "RequestField[19]" => 1,
                "RequestField[20]" => 1,
                "RequestField[21]" => 1,
                "RequestField[22]" => 1,
                "RequestField[23]" => 1,
                "RequestField[24]" => 1,
                "RequestField[25]" => 1,
                "RequestField[26]" => 1,
                "RequestField[27]" => 1,
                "RequestField[28]" => 1,
                "RequestField[29]" => 1,
                "RequestField[30]" => 1,
                "RequestField[31]" => 1,
                "RequestField[32]" => 1,
                "RequestField[33]" => 1,
                "RequestField[34]" => 1,
                "RequestField[35]" => 1,
                "RequestField[36]" => 1,
                "RequestField[37]" => 1,
                "RequestField[38]" => 1,
                "RequestField[39]" => 1,
                "RequestField[40]" => 1,
                "RequestField[41]" => 1,
                "RequestField[42]" => 1,
                "RequestField[43]" => 1,
                "RequestField[44]" => 1,
                "RequestField[45]" => 1,
                "RequestField[46]" => 1,
                "RequestField[47]" => 1,
                "RequestField[48]" => 1,
                "RequestField[49]" => 1,
                "RequestField[50]" => 1,
                "RequestField[51]" => 1,
                "RequestField[52]" => 1,
                "RequestField[53]" => 1,
                "RequestField[54]" => 1,
                "RequestField[55]" => 1,
                "RequestField[56]" => 1,
                "RequestField[57]" => 1,
                "RequestField[58]" => 1,
                "RequestField[59]" => 1,
                "RequestField[60]" => 1,
                "RequestField[61]" => 1,
                "RequestField[62]" => 1,
                "RequestField[63]" => 1,
                "RequestField[64]" => 1,
                "RequestField[65]" => 1,
                "RequestField[66]" => 1,
                "RequestField[67]" => 1,
                "RequestField[68]" => 1,
                "RequestField[69]" => 1,
                "RequestField[70]" => 1,
                "RequestField[71]" => 1,
                "RequestField[72]" => 1,
                "RequestField[73]" => 1,
                "RequestField[74]" => 1,
                "RequestField[75]" => 1,
                "RequestField[76]" => 1,
                "RequestField[77]" => 1,
                "RequestField[78]" => 1,
                "RequestField[79]" => 1,
                "RequestField[80]" => 1,
                "RequestField[81]" => 1,
                "RequestField[82]" => 1,
                "RequestField[83]" => 1,
                "RequestField[84]" => 1,
                "RequestField[85]" => 1,
                "RequestField[86]" => 1,
                "RequestField[87]" => 1,
                "RequestField[88]" => 1,
                "RequestField[89]" => 1,
                "RequestField[90]" => 1,
                "RequestField[91]" => 1,
                "RequestField[92]" => 1,
                "RequestField[93]" => 1,
                "RequestField[94]" => 1,
                "RequestField[95]" => 1,
                "RequestField[96]" => 1,
                "RequestField[97]" => 1,
                "RequestField[98]" => 1,
                "RequestField[99]" => 1,
                "RequestField[100]" => 1,
                "RequestField[101]" => 1,
                "RequestField[102]" => 1,
                "RequestField[103]" => 1,
                "RequestField[104]" => 1,
                "RequestField[105]" => 1,
                "RequestField[106]" => 1,
                "RequestField[107]" => 1,
                "RequestField[108]" => 1,
                "RequestField[109]" => 1,
                "RequestField[110]" => 1,
                "RequestField[111]" => 1,
                "RequestField[112]" => 1,
                "RequestField[113]" => 1,
                "RequestField[114]" => 1,
                "RequestField[115]" => 1,
                "RequestField[116]" => 1,
                "RequestField[117]" => 1,
                "RequestField[118]" => 1,
                "RequestField[119]" => 1,
                "RequestField[120]" => 1,
                "RequestField[121]" => 1,
                "RequestField[122]" => 1,
                "RequestField[123]" => 1,
                "RequestField[124]" => 1,
                "RequestField[125]" => 1,
                "RequestField[126]" => 1,
                "RequestField[127]" => 1,
                "RequestField[128]" => 1,
                "RequestField[129]" => 1,
                "RequestField[130]" => 1,
                "RequestField[131]" => 1,
                "RequestField[132]" => 1,
                "RequestField[133]" => 1,
                "RequestField[134]" => 1,
                "RequestField[135]" => 1,
                "RequestField[136]" => 1,
                "RequestField[137]" => 1,
                "RequestField[138]" => 1,
                "RequestField[139]" => 1,
                "RequestField[140]" => 1,
                "RequestField[141]" => 1,
                "RequestField[142]" => 1,
                "RequestField[143]" => 1,
                "RequestField[144]" => 1,
                "RequestField[145]" => 1,
                "RequestField[146]" => 1,
                "RequestField[147]" => 1,
                "RequestField[148]" => 1,
                "RequestField[149]" => 1,
                "RequestField[150]" => 1,
                "RequestField[151]" => 1,
                "RequestField[152]" => 1,
                "RequestField[153]" => 1,
                "RequestField[154]" => 1,
                "RequestField[155]" => 1,
                "RequestField[156]" => 1,
                "RequestField[157]" => 1,
                "RequestField[158]" => 1,
                "RequestField[159]" => 1,
                "RequestField[160]" => 1,
                "RequestField[161]" => 1,
                "RequestField[162]" => 1,
                "RequestField[163]" => 1,
                "RequestField[164]" => 1,
                "RequestField[165]" => 1,
                "RequestField[166]" => 1,
                "RequestField[167]" => 1,
                "RequestField[168]" => 1,
                "RequestField[169]" => 1,
                "RequestField[170]" => 1,
                "RequestField[171]" => 1,
                "RequestField[172]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 7,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Переданы лишние поля: RequestField[3], RequestField[4], RequestField[5], RequestField[8], RequestField[9], RequestField[10], RequestField[11], RequestField[12], RequestField[13], RequestField[14], RequestField[15], RequestField[16], RequestField[17], RequestField[18], RequestField[19], RequestField[20], RequestField[21], RequestField[22], RequestField[23], RequestField[24], RequestField[25], RequestField[26], RequestField[27], RequestField[28], RequestField[29], RequestField[30], RequestField[31], RequestField[32], RequestField[33], RequestField[34], RequestField[35], RequestField[36], RequestField[37], RequestField[38], RequestField[39], RequestField[40], RequestField[41], RequestField[42], RequestField[43], RequestField[44], RequestField[45], RequestField[46], RequestField[47], RequestField[48], RequestField[49], RequestField[50], RequestField[51], RequestField[52], RequestField[53], RequestField[54], RequestField[55], RequestField[56], RequestField[57], RequestField[58], RequestField[59], RequestField[60], RequestField[61], RequestField[62], RequestField[63], RequestField[64], RequestField[65], RequestField[66], RequestField[67], RequestField[68], RequestField[69], RequestField[70], RequestField[71], RequestField[72], RequestField[73], RequestField[74], RequestField[75], RequestField[76], RequestField[77], RequestField[78], RequestField[79], RequestField[80], RequestField[81], RequestField[82], RequestField[83], RequestField[84], RequestField[85], RequestField[86], RequestField[87], RequestField[88], RequestField[89], RequestField[90], RequestField[91], RequestField[92], RequestField[93], RequestField[94], RequestField[95], RequestField[96], RequestField[97], RequestField[98], RequestField[99], RequestField[100], RequestField[101], RequestField[102], RequestField[103], RequestField[104], RequestField[105], RequestField[106], RequestField[107], RequestField[108], RequestField[109], RequestField[110], RequestField[111], RequestField[112], RequestField[113], RequestField[114], RequestField[115], RequestField[116], RequestField[117], RequestField[118], RequestField[119], RequestField[120], RequestField[121], RequestField[122], RequestField[123], RequestField[124], RequestField[125], RequestField[126], RequestField[127], RequestField[128], RequestField[129], RequestField[130], RequestField[131], RequestField[132], RequestField[133], RequestField[134], RequestField[135], RequestField[136], RequestField[137], RequestField[138], RequestField[139], RequestField[140], RequestField[141], RequestField[142], RequestField[143], RequestField[144], RequestField[145], RequestField[146], RequestField[147], RequestField[148], RequestField[149], RequestField[150], RequestField[151], RequestField[152], RequestField[153], RequestField[154], RequestField[155], RequestField[156], RequestField[157], RequestField[158], RequestField[159], RequestField[160], RequestField[161], RequestField[162], RequestField[163], RequestField[164], RequestField[165], RequestField[166], RequestField[167], RequestField[168], RequestField[169], RequestField[170], RequestField[171], RequestField[172] при создании заявки этого типа эти поля задать нельзя."
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ]
        ]
    ],

    'case23' => [
        'setting' => [
            'description' => 'Ошибка при создании со всеми RequestField для 11/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[2]" => 1,
                "RequestField[3]" => 1,
                "RequestField[4]" => 1,
                "RequestField[5]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "RequestField[8]" => 1,
                "RequestField[9]" => 1,
                "RequestField[10]" => 1,
                "RequestField[11]" => 1,
                "RequestField[12]" => 1,
                "RequestField[13]" => 1,
                "RequestField[14]" => 1,
                "RequestField[15]" => 1,
                "RequestField[16]" => 1,
                "RequestField[17]" => 1,
                "RequestField[18]" => 1,
                "RequestField[19]" => 1,
                "RequestField[20]" => 1,
                "RequestField[21]" => 1,
                "RequestField[22]" => 1,
                "RequestField[23]" => 1,
                "RequestField[24]" => 1,
                "RequestField[25]" => 1,
                "RequestField[26]" => 1,
                "RequestField[27]" => 1,
                "RequestField[28]" => 1,
                "RequestField[29]" => 1,
                "RequestField[30]" => 1,
                "RequestField[31]" => 1,
                "RequestField[32]" => 1,
                "RequestField[33]" => 1,
                "RequestField[34]" => 1,
                "RequestField[35]" => 1,
                "RequestField[36]" => 1,
                "RequestField[37]" => 1,
                "RequestField[38]" => 1,
                "RequestField[39]" => 1,
                "RequestField[40]" => 1,
                "RequestField[41]" => 1,
                "RequestField[42]" => 1,
                "RequestField[43]" => 1,
                "RequestField[44]" => 1,
                "RequestField[45]" => 1,
                "RequestField[46]" => 1,
                "RequestField[47]" => 1,
                "RequestField[48]" => 1,
                "RequestField[49]" => 1,
                "RequestField[50]" => 1,
                "RequestField[51]" => 1,
                "RequestField[52]" => 1,
                "RequestField[53]" => 1,
                "RequestField[54]" => 1,
                "RequestField[55]" => 1,
                "RequestField[56]" => 1,
                "RequestField[57]" => 1,
                "RequestField[58]" => 1,
                "RequestField[59]" => 1,
                "RequestField[60]" => 1,
                "RequestField[61]" => 1,
                "RequestField[62]" => 1,
                "RequestField[63]" => 1,
                "RequestField[64]" => 1,
                "RequestField[65]" => 1,
                "RequestField[66]" => 1,
                "RequestField[67]" => 1,
                "RequestField[68]" => 1,
                "RequestField[69]" => 1,
                "RequestField[70]" => 1,
                "RequestField[71]" => 1,
                "RequestField[72]" => 1,
                "RequestField[73]" => 1,
                "RequestField[74]" => 1,
                "RequestField[75]" => 1,
                "RequestField[76]" => 1,
                "RequestField[77]" => 1,
                "RequestField[78]" => 1,
                "RequestField[79]" => 1,
                "RequestField[80]" => 1,
                "RequestField[81]" => 1,
                "RequestField[82]" => 1,
                "RequestField[83]" => 1,
                "RequestField[84]" => 1,
                "RequestField[85]" => 1,
                "RequestField[86]" => 1,
                "RequestField[87]" => 1,
                "RequestField[88]" => 1,
                "RequestField[89]" => 1,
                "RequestField[90]" => 1,
                "RequestField[91]" => 1,
                "RequestField[92]" => 1,
                "RequestField[93]" => 1,
                "RequestField[94]" => 1,
                "RequestField[95]" => 1,
                "RequestField[96]" => 1,
                "RequestField[97]" => 1,
                "RequestField[98]" => 1,
                "RequestField[99]" => 1,
                "RequestField[100]" => 1,
                "RequestField[101]" => 1,
                "RequestField[102]" => 1,
                "RequestField[103]" => 1,
                "RequestField[104]" => 1,
                "RequestField[105]" => 1,
                "RequestField[106]" => 1,
                "RequestField[107]" => 1,
                "RequestField[108]" => 1,
                "RequestField[109]" => 1,
                "RequestField[110]" => 1,
                "RequestField[111]" => 1,
                "RequestField[112]" => 1,
                "RequestField[113]" => 1,
                "RequestField[114]" => 1,
                "RequestField[115]" => 1,
                "RequestField[116]" => 1,
                "RequestField[117]" => 1,
                "RequestField[118]" => 1,
                "RequestField[119]" => 1,
                "RequestField[120]" => 1,
                "RequestField[121]" => 1,
                "RequestField[122]" => 1,
                "RequestField[123]" => 1,
                "RequestField[124]" => 1,
                "RequestField[125]" => 1,
                "RequestField[126]" => 1,
                "RequestField[127]" => 1,
                "RequestField[128]" => 1,
                "RequestField[129]" => 1,
                "RequestField[130]" => 1,
                "RequestField[131]" => 1,
                "RequestField[132]" => 1,
                "RequestField[133]" => 1,
                "RequestField[134]" => 1,
                "RequestField[135]" => 1,
                "RequestField[136]" => 1,
                "RequestField[137]" => 1,
                "RequestField[138]" => 1,
                "RequestField[139]" => 1,
                "RequestField[140]" => 1,
                "RequestField[141]" => 1,
                "RequestField[142]" => 1,
                "RequestField[143]" => 1,
                "RequestField[144]" => 1,
                "RequestField[145]" => 1,
                "RequestField[146]" => 1,
                "RequestField[147]" => 1,
                "RequestField[148]" => 1,
                "RequestField[149]" => 1,
                "RequestField[150]" => 1,
                "RequestField[151]" => 1,
                "RequestField[152]" => 1,
                "RequestField[153]" => 1,
                "RequestField[154]" => 1,
                "RequestField[155]" => 1,
                "RequestField[156]" => 1,
                "RequestField[157]" => 1,
                "RequestField[158]" => 1,
                "RequestField[159]" => 1,
                "RequestField[160]" => 1,
                "RequestField[161]" => 1,
                "RequestField[162]" => 1,
                "RequestField[163]" => 1,
                "RequestField[164]" => 1,
                "RequestField[165]" => 1,
                "RequestField[166]" => 1,
                "RequestField[167]" => 1,
                "RequestField[168]" => 1,
                "RequestField[169]" => 1,
                "RequestField[170]" => 1,
                "RequestField[171]" => 1,
                "RequestField[172]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Проектирование структуры (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 11,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Переданы лишние поля: RequestField[3], RequestField[4], RequestField[5], RequestField[6], RequestField[7], RequestField[8], RequestField[9], RequestField[10], RequestField[11], RequestField[12], RequestField[13], RequestField[14], RequestField[15], RequestField[16], RequestField[17], RequestField[18], RequestField[19], RequestField[20], RequestField[21], RequestField[22], RequestField[23], RequestField[24], RequestField[25], RequestField[26], RequestField[27], RequestField[28], RequestField[29], RequestField[30], RequestField[31], RequestField[32], RequestField[33], RequestField[34], RequestField[35], RequestField[36], RequestField[37], RequestField[38], RequestField[39], RequestField[40], RequestField[41], RequestField[42], RequestField[43], RequestField[44], RequestField[45], RequestField[46], RequestField[47], RequestField[48], RequestField[49], RequestField[50], RequestField[51], RequestField[52], RequestField[53], RequestField[54], RequestField[55], RequestField[56], RequestField[57], RequestField[58], RequestField[59], RequestField[60], RequestField[61], RequestField[62], RequestField[63], RequestField[64], RequestField[65], RequestField[66], RequestField[67], RequestField[68], RequestField[69], RequestField[70], RequestField[71], RequestField[72], RequestField[73], RequestField[74], RequestField[75], RequestField[76], RequestField[77], RequestField[78], RequestField[79], RequestField[80], RequestField[81], RequestField[82], RequestField[83], RequestField[84], RequestField[85], RequestField[86], RequestField[87], RequestField[88], RequestField[89], RequestField[90], RequestField[91], RequestField[92], RequestField[93], RequestField[94], RequestField[95], RequestField[96], RequestField[97], RequestField[98], RequestField[99], RequestField[100], RequestField[101], RequestField[102], RequestField[103], RequestField[104], RequestField[105], RequestField[106], RequestField[107], RequestField[108], RequestField[109], RequestField[110], RequestField[111], RequestField[112], RequestField[113], RequestField[114], RequestField[115], RequestField[116], RequestField[117], RequestField[118], RequestField[119], RequestField[120], RequestField[121], RequestField[122], RequestField[123], RequestField[124], RequestField[125], RequestField[126], RequestField[127], RequestField[128], RequestField[129], RequestField[130], RequestField[131], RequestField[132], RequestField[133], RequestField[134], RequestField[135], RequestField[136], RequestField[137], RequestField[138], RequestField[139], RequestField[140], RequestField[141], RequestField[142], RequestField[143], RequestField[144], RequestField[145], RequestField[146], RequestField[147], RequestField[148], RequestField[149], RequestField[150], RequestField[151], RequestField[152], RequestField[153], RequestField[154], RequestField[155], RequestField[156], RequestField[157], RequestField[158], RequestField[159], RequestField[160], RequestField[161], RequestField[162], RequestField[163], RequestField[164], RequestField[165], RequestField[166], RequestField[167], RequestField[168], RequestField[169], RequestField[170], RequestField[171], RequestField[172] при создании заявки этого типа эти поля задать нельзя."
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ]
        ]
    ],

    /*
     * Ошибки при указании чекбоксов RequestField[]
     */
    'case24' => [
        'setting' => [
            'description' => 'Ошибка при создании со взаимоисключающими чекбоксами 5/1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[9]" => 1,
                "RequestField[10]" => 1,
                "RequestField[12]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 5,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "RequestField[9] не может быть установлен одновременно с полями: RequestField[10], RequestField[12]"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case25' => [
        'setting' => [
            'description' => 'Ошибка при создании со взаимоисключающими чекбоксами 10/0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[2]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 10,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "RequestField[1] не может быть установлен одновременно с полями: RequestField[2]"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case29' => [
        'setting' => [
            'description' => 'Ошибка при создании без любых чек-боксов направления 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 1,
                "Request[seller_id]" => -2,
                "Request[subject]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 1,
                "Request[observers]" => [15, 17],
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передан массив RequestField[]"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case30' => [
        'setting' => [
            'description' => 'Ошибка при создании без чек-боксов [1] или [2] направления 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[15]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 1,
                "Request[seller_id]" => -2,
                "Request[subject]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
                "Request[observers]" => [15, 17],
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Необходимо установить либо поле RequestField[1], либо поле RequestField[2] со значением 1"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case31' => [
        'setting' => [
            'description' => 'Ошибка при создании без любых чек-боксов направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 10,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передан массив RequestField[]"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case32' => [
        'setting' => [
            'description' => 'Ошибка при создании без чек-боксов [1] или [2] направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 7,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Необходимо установить либо поле RequestField[1], либо поле RequestField[2] со значением 1"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case33' => [
        'setting' => [
            'description' => 'Ошибка при указании для чек-боксов значения null',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[12]" => null,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "RequestField[12] может принимать значение только 1 или 0"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case34' => [
        'setting' => [
            'description' => 'Ошибка при указании для чек-боксов значения -1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[123]" => -1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "RequestField[123] может принимать значение только 1 или 0"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case35' => [
        'setting' => [
            'description' => 'Ошибка при указании для чек-боксов значения-строки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[159]" => 'asdf',
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "RequestField[159] может принимать значение только 1 или 0"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    /*
     * Ошибки при неправильных указаниях продавца и/или категории для каждого направления
     */
    'case27' => [
        'setting' => [
            'description' => 'Ошибка при создании без категории для направления 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                //"Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 12,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле category_id"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case38' => [
        'setting' => [
            'description' => 'Ошибка при создании c несуществующей категорией для направления 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 99,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление новых товаров (Работа с товарами Розетки) + нотификации",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 1,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не найдена категория category_id:99"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case39' => [
        'setting' => [
            'description' => 'Ошибка при создании без продавца для направления 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                //"Request[seller_id]" => 83,
                "Request[subject]" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле seller_id"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case26' => [
        'setting' => [
            'description' => 'Ошибка при создании с не-розетковским продавцом для направления 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Перенос товаров (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 3,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    '0: этот продавец не относится к магазинам направления "Работа с товарами Розетки"'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case40' => [
        'setting' => [
            'description' => 'Ошибка при создании без продавца для направления 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[description]" => 'description',
                "Request[direction]" => 2,
                //"Request[seller_id]" => 0,
                "Request[subject]" => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 1,
                "Request[observers]" => [15, 17],
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле seller_id"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case41' => [
        'setting' => [
            'description' => 'Ошибка при создании с несуществующим продавцом для направления 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 99, //пропускается потому что направление Маркет
                "Request[seller_id]" => 99,
                "Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 2,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Продавец с owox_id = 99 не существует!"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case56' => [
        'setting' => [
            'description' => 'Ошибка при создании с сущ. категорией и несущ. продавцом для направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 111,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 7,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Продавец с owox_id = 111 не существует!'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case42' => [
        'setting' => [
            'description' => 'Ошибка при создании с несущ. категорией и сущ. продавцом для направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 111,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 7,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Не найдена категория category_id:111'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case43' => [
        'setting' => [
            'description' => 'Ошибка при создании с несущ. категорией и несущ. продавцом для направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 111,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 111,
                "Request[subject]" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 8,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Не найдена категория category_id:111'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case44' => [
        'setting' => [
            'description' => 'Ошибка при создании с несущ. категорией и без продавца для направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 111,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                //"Request[seller_id]" => 83,
                "Request[subject]" => "Добавление параметров/значений (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 9,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Не найдена категория category_id:111'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case45' => [
        'setting' => [
            'description' => 'Ошибка при создании без категории и с несущ. продавцом для направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                //"Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 99,
                "Request[subject]" => "Добавление/изменение видео (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 13,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Продавец с owox_id = 99 не существует!'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case46' => [
        'setting' => [
            'description' => 'Ошибка при создании без категории и без продавца для направления 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                //"Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                //"Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 14,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Для этого типа задачи нужно указать либо category_id либо seller_id'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    /*
     * Ошибки при неправильных указаниях обязательных полей Request[]
     */
    'case28' => [
        'setting' => [
            'description' => 'Ошибка при создании без обязательных полей Request[]',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                //"Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[author_id]" => 10,
                //"Request[category_id]" => 1,
                //"Request[description]" => 'description',
                "Request[observers]" => [15, 17],
                //"Request[direction]" => 1,
                //"Request[seller_id]" => 83,
                'Request[side_user_id]' => 1,
                //"Request[subject]" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => 1,
                //"Request[type_id]" => 12,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле Request[type_id]",
                    "Не передано поле Request[direction]",
                    "Не передано поле Request[subject]",
                    "Не передано поле Request[description]",
                    "Не передано поле Request[amount_to_work]"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case36' => [
        'setting' => [
            'description' => 'Ошибка при указании для полей Request значения ""',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => "",
                "Request[author_login]" => "",
                "Request[author_id]" => "",
                "Request[category_id]" => "",
                "Request[description]" => "",
                "Request[observers]" => "",
                "Request[direction]" => "",
                "Request[seller_id]" => "",
                'Request[side_user_id]' => "",
                "Request[subject]" => "",
                "Request[supplier_cabinet_id]" => "",
                "Request[type_id]" => "",
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле Request[type_id]",
                    "Не передано поле Request[direction]",
                    "Не передано поле Request[subject]",
                    "Не передано поле Request[description]",
                    "Не передано поле Request[amount_to_work]",
                    "Request[type_id]: поле должно быть числом",
                    "Request[category_id]: поле должно быть числом",
                    "Request[seller_id]: поле должно быть числом",
                    "Request[direction]: поле должно быть числом",
                    "Request[amount_to_work]: поле должно быть числом",
                    "Request[author_id]: поле должно быть числом",
                    "Request[supplier_cabinet_id]: поле должно быть числом",
                    "Request[supplier_cabinet_id]: должен быть больше 0"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case37' => [
        'setting' => [
            'description' => 'Ошибка при указании для числовых полей Request значения-строки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => "asdf",
                "Request[author_login]" => "kutsan.k",
                "Request[category_id]" => "asdf",
                "Request[description]" => 'description',
                "Request[observers]" => ["asdf"],
                "Request[direction]" => "asdf",
                "Request[seller_id]" => "asdf",
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "Request[supplier_cabinet_id]" => "asdf",
                "Request[type_id]" => "asdf",
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Request[type_id]: поле должно быть числом",
                    "Request[category_id]: поле должно быть числом",
                    "Request[seller_id]: поле должно быть числом",
                    "Request[direction]: поле должно быть числом",
                    "Request[amount_to_work]: поле должно быть числом",
                    "Request[supplier_cabinet_id]: поле должно быть числом",
                    "Request[supplier_cabinet_id]: должен быть больше 0"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case47' => [
        'setting' => [
            'description' => 'Ошибка при создании с несуществующим типом',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 0,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'kutsan.k не имеете права создавать задачи с типом 0'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case48' => [
        'setting' => [
            'description' => 'Ошибка при создании с несуществующим сочетанием направление/тип 0/1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 1,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Для типа 1 direction может быть только 1 или 2, передан direction: 0'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case49' => [
        'setting' => [
            'description' => 'Ошибка при создании с несуществующим сочетанием направление/тип 1/4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 1,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 4,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Для типа 4 direction может быть только 0, передан direction: 1'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case50' => [
        'setting' => [
            'description' => 'Ошибка при создании с несуществующим сочетанием направление/тип 2/10',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 2,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 10,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    'Для типа 10 direction может быть только 0, передан direction: 2'
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case51' => [
        'setting' => [
            'description' => 'Ошибка при создании с отрицательным amount_to_work и supplier_cabinet_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => -1,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 2,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => -1,
                "Request[type_id]" => 10,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Request[supplier_cabinet_id]: должен быть больше 0",
                    "Request[amount_to_work]: должен быть больше или равен 0"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case52' => [
        'setting' => [
            'description' => 'Ошибка при создании с нулевыми amount_to_work и supplier_cabinet_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 0,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 2,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 0,
                "Request[type_id]" => 10,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Request[supplier_cabinet_id]: должен быть больше 0",
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    /*
     * Ошибки при неправильных указаниях файлов
     */
    'case53' => [
        'setting' => [
            'description' => 'Ошибка при создании с общим объёмом файлов больше 1 Мб',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 0,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 10,
            ],
            'attachments' => [
                'files[]' => [
                    codecept_data_dir('Attachments/xls.xls'),
                    codecept_data_dir('Attachments/more1Mb.jpg'),
                ],
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Размер файлов превышает 1 МБ.",
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case54' => [
        'setting' => [
            'description' => 'Ошибка при создании с неподдерживаемым типом файлов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 0,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [15, 17],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 10,
            ],
            'attachments' => [
                'files[]' => [
                    codecept_data_dir('Attachments/7 z .7z'),
                    codecept_data_dir('Attachments/mp3.mp3'),
                    codecept_data_dir('Attachments/eml.eml'),
                    codecept_data_dir('Attachments/doc .doc'),
                ],
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Файлы типа 7z не разрешается загружать в систему.",
                    "Файлы типа mp3 не разрешается загружать в систему."
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case55' => [
        'setting' => [
            'description' => 'Ошибка при указании несуществующего наблюдателя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 0,
                "Request[author_login]" => 'kutsan.k',
                "Request[category_id]" => 1,
                "Request[description]" => 'description',
                "Request[direction]" => 0,
                "Request[observers]" => [1, 11, 111, 200],
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[supplier_cabinet_id]" => 1,
                "Request[type_id]" => 10,
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "В Request[observers] переданы id несуществующих пользователей:111, 200"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

    'case57' => [
        'setting' => [
            'description' => 'Ошибка при пустом запросе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Передан пустой масив Request[]. Мы данные для создания должны от святого духа получить?"
                ]
            ],
            'db' => [
                'lisa_fixtures' => $lisa_fixtures
            ],
        ]
    ],

];
