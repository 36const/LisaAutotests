<?php

$requests = [
    [
        "id" => 1,
        "author_id" => 4,
        "type_id" => 1,
        "supervisor_id" => 7,
        "manager_id" => null,
        "status" => 3,
        "direction" => 1,
        "priority" => null,
        "awaiting_correction" => 0,
        "created_at" => '2020-01-01 00:00:00',
        "correction_comment" => null,
        "amount_to_work" => 10,
        "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
        "description" => 'description',
        "category_id" => 1,
        "seller_id" => 83,
        "recommendations" => null,
        "reason" => 'так нада',
        "parent_id" => null,
        "planned_start_date" => null,
        "planned_finish_date" => null,
        "actual_start_date" => null,
        "actual_finish_date" => null,
        "supervisor_process_date" => null,
        "supervisor_check_date" => null,
        "result_comment" => null,
        "supervisor_comment" => null,
        "last_change_status_date" => null,
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
    ],
    [
        "id" => 2,
        "author_id" => 4,
        "type_id" => 1,
        "supervisor_id" => 7,
        "manager_id" => null,
        "status" => 3,
        "direction" => 1,
        "priority" => null,
        "awaiting_correction" => 0,
        "created_at" => '2020-01-01 00:00:00',
        "correction_comment" => null,
        "amount_to_work" => 10,
        "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
        "description" => 'description',
        "category_id" => 1,
        "seller_id" => 83,
        "recommendations" => null,
        "reason" => 'так ни нада',
        "parent_id" => null,
        "planned_start_date" => null,
        "planned_finish_date" => null,
        "actual_start_date" => null,
        "actual_finish_date" => null,
        "supervisor_process_date" => null,
        "supervisor_check_date" => null,
        "result_comment" => null,
        "supervisor_comment" => null,
        "last_change_status_date" => null,
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
    ]
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Перевод заявки из "На доработке" в "Новые"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 200,
                "message" => "Ok"
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 7,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => 'так нада',
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
                            "previous_status" => 3,
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 7,
                            "manager_id" => null,
                            "status" => 3,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => 'так ни нада',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => null,
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
                        ]
                    ],
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [
                        [
                            "request_id" => 2,
                            "reason_id" => 15
                        ],
                    ],
                    "request_status_history" => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 1,
                            "old_status" => 3,
                            "new_status" => 1,
                            "reason" => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            "created_at >=" => date("Y-m-d"),
                            "manager_id" => null,
                            "reasons" => null
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
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            "id" => 2,
                            "user_id" => 7,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => null,
                            "amount_to_work" => 10,
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 1, "oldValue": 3}'
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
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 1, "oldValue": 3}'
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
                            "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "fields_for_complete" => "[]",
                            "triggered_by" => "Система",
                            "event" => "status",
                            "changed_fields" => '{"newValue": 1, "oldValue": 3}'
                        ],
                    ]
                ]
            ],
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Запрос на перевод заявки, ранее уже переведённой в "Новые"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case17.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>',
            ],
            "responseBody" => [
                "status" => 200,
                "message" => "Ok"
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 7,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => 'так нада',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 3,
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 7,
                            "manager_id" => null,
                            "status" => 3,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => 'так ни нада',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => null,
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
                        ]
                    ],
                    "requests_fields" => (include __DIR__ . '/fixture/case17.php')['lisa_fixtures']['requests_fields'],
                    "request_status_history" => [],
                    'requests_reasons' => [
                        [
                            "request_id" => 2,
                            "reason_id" => 15
                        ],
                    ],
                    'user_notifications' => []
                ]
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Ошибка без указания requestId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                //"requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "requestId: должен быть числом."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Ошибка без указания newStatus',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                //"newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "newStatus: должен быть числом."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Ошибка без указания payload[Request][correction_comment]',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                //"payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Необходимо заполнить payload[Request][correction_comment]"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Ошибка при указании несуществующего requestId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 100,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Модель класа gomer\\bpm\\models\\requests\\Request не найдена по параметрам. Conditions:\"100\""
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Ошибка при указании несуществующего статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 10,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 10 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 2,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 2 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 3,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 3 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 4,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 4 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 5',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 5,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 5 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 6,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 6 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 7',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 7,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 7 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 8',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 8,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 8 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 9',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 9,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 9 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Ошибка при переводе в статус 11',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 11,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно перевести задачу в статус 11 через API."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Ошибка при пустом запросе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                //"requestId" => 1,
                //"newStatus" => 1,
                //"payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "requestId: должен быть числом."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => $requests,
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case18.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"Готова для распределения\"(2) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case18.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case18.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case19' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"Отменена\"(4) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case19.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case19.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case20' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 5',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case20.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"Ожидает взятия в работу\"(5) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case20.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case20.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case21' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case21.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"В работе\"(6) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case21.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case21.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case22' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 7',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case22.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"Ожидает\"(7) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case22.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case22.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case23' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 8',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case23.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"Частично выполнена\"(8) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case23.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case23.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case24' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 9',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case24.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"Выполнена\"(9) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case24.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case24.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

    'case25' => [
        'setting' => [
            'description' => 'Ошибка при переводе из статуса 11',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case25.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Невозможно изменить статус заявки №1: В текущем рабочем процессе отсутствует перевод заявки из статуса \"Закрыта\"(11) в статус \"Новая\"(1)"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => array_replace_recursive($requests, (include __DIR__ . '/fixture/case25.php')['lisa_fixtures']['requests']),
                    "requests_fields" => (include __DIR__ . '/fixture/case25.php')['lisa_fixtures']['requests_fields'],
                    "user_notifications" => [],
                    "request_status_history" => [],
                ]
            ],
        ]
    ],

];