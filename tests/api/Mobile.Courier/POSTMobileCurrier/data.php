<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка с обязательными полями, направление Розетка',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 8,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "Исправление ошибки на основе запроса из MobileCourier",
                            "description" => " 
http://splitter.staging.com.ua/goods/list/update?id=123123123#goods-card-part-options-logistic",
                            "category_id" => 3,
                            "seller_id" => 9423,
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
                            "employee_code_1c" => 978654132,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 159,
                            'value' => 1,
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявка с обязательными полями, направление Маркетплейс',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '2',
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 8,
                            "type_id" => 2,
                            "supervisor_id" => 10,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "Исправление ошибки на основе запроса из MobileCourier",
                            "description" => " 
http://splitter.staging.com.ua/goods/list/update?id=123123123#goods-card-part-options-logistic",
                            "category_id" => 3,
                            "seller_id" => 9423,
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
                            "employee_code_1c" => 978654132,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 159,
                            'value' => 1,
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявка с обязательными полями, описанием и вложениями, направление Розетка',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            'attachments' => [
                'files' => [
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
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 8,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "Исправление ошибки на основе запроса из MobileCourier",
                            "description" => "~!@#$%^&*()_+`=-\]'/[;.,|}\"?{:>< 
http://splitter.staging.com.ua/goods/list/update?id=123123123#goods-card-part-options-logistic",
                            "category_id" => 3,
                            "seller_id" => 9423,
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
                            "employee_code_1c" => 978654132,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => null,
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 159,
                            'value' => 1,
                        ]
                    ],
                    'request_attachments' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "file_name_old" => "",
                            "alias" => "194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd",
                            "status" => 2,
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
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
                            "uploaded_by" => "Mobile Courier",
                            "uploaded_at >=" => date("Y-m-d"),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name like" => '%_$_-:.jpg'
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Пустой item_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле item_id",
                    "item_id: поле должно быть числом",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Пустой market_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле market_id",
                    "market_id: поле должно быть числом",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Пустой employee_code_1c',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле employee_code_1c",
                    "employee_code_1c: поле должно быть числом",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Пустой direction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле direction",
                    "direction: поле должно быть числом",
                    "direction: значение может быть равно только 1 или 2",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Без item_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
//                'item_id' => '',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле item_id",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Без market_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
//                'market_id' => '',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле market_id",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Без employee_code_1c',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
//                'employee_code_1c' => '',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле employee_code_1c",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Без direction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
//                'direction' => '',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле direction",
                    "direction: значение может быть равно только 1 или 2",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Значение direction - число кроме 1 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '3',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "direction: значение может быть равно только 1 или 2",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Текстовые значения вместо числовых',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => 'йцук',
                'market_id' => 'asdf',
                'employee_code_1c' => '!@#$',
                'direction' => 'ZXCR',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "item_id: поле должно быть числом",
                    "market_id: поле должно быть числом",
                    "employee_code_1c: поле должно быть числом",
                    "direction: поле должно быть числом",
                    "direction: значение может быть равно только 1 или 2",
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],
];