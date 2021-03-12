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
            "responseCode" => 200,
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
            "responseCode" => 200,
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
            'description' => 'Ошибка без указания requestId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                //"requestId" => 1,
                "newStatus" => 1,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            "responseCode" => 200,
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
            "responseCode" => 200,
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
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 2,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 3,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 4,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 5',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 5,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 6,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 7',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 7,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 8',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 8,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 9',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 9,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            'description' => 'Ошибка при указании статуса 11',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                "requestId" => 1,
                "newStatus" => 11,
                "payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            "responseCode" => 200,
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
            "responseCode" => 200,
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
];