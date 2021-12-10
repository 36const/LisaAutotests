<?php

$requests = [
    [
        'id' => 1,
        'author_id' => 4,
        'type_id' => 1,
        'supervisor_id' => 6,
        'manager_id' => null,
        'status' => 3,
        'direction' => 1,
        'priority' => null,
        'awaiting_correction' => 0,
        'created_at' => '2020-01-01 00:00:00',
        'correction_comment' => null,
        'amount_to_work' => 10,
        'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
        'description' => 'description',
        'category_id' => 1,
        'seller_id' => 83,
        'recommendations' => null,
        'reason' => 'так нада',
        'parent_id' => null,
        'planned_start_date' => null,
        'planned_finish_date' => null,
        'actual_start_date' => null,
        'actual_finish_date' => null,
        'supervisor_process_date' => null,
        'supervisor_check_date' => null,
        'result_comment' => null,
        'supervisor_comment' => null,
        'last_change_status_date' => null,
        'team_direction' => 3,
        'report_period_id' => null,
        'sync_source_id' => null,
        'sv_report_periods' => null,
        'cross_check_status' => 0,
        'cross_check_manager_id' => null,
        'employee_code_1c' => null,
        'child_count' => 0,
        'photo_load_status' => 0,
        'previous_status' => null,
    ],
    [
        'id' => 2,
        'author_id' => 4,
        'type_id' => 1,
        'supervisor_id' => 6,
        'manager_id' => null,
        'status' => 3,
        'direction' => 1,
        'priority' => null,
        'awaiting_correction' => 0,
        'created_at' => '2020-01-01 00:00:00',
        'correction_comment' => null,
        'amount_to_work' => 10,
        'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
        'description' => 'description',
        'category_id' => 1,
        'seller_id' => 83,
        'recommendations' => null,
        'reason' => 'так ни нада',
        'parent_id' => null,
        'planned_start_date' => null,
        'planned_finish_date' => null,
        'actual_start_date' => null,
        'actual_finish_date' => null,
        'supervisor_process_date' => null,
        'supervisor_check_date' => null,
        'result_comment' => null,
        'supervisor_comment' => null,
        'last_change_status_date' => null,
        'team_direction' => 3,
        'report_period_id' => null,
        'sync_source_id' => null,
        'sv_report_periods' => null,
        'cross_check_status' => 0,
        'cross_check_manager_id' => null,
        'employee_code_1c' => null,
        'child_count' => 0,
        'photo_load_status' => 0,
        'previous_status' => null,
    ]
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Перевод заявки 3->1 по requestId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 200,
                'requests_transferred' => [
                    1
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
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
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 3,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date' => null,
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [
                        [
                            'request_id' => 2,
                            'reason_id' => 15
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
                        ]
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [],
            ],
        ]
    ],

    'case26' => [
        'setting' => [
            'description' => 'Перевод одной заявки 3->1 по supplierCabinetId + отправка запроса после изменения статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case26.php',
        'mock_data' => [
            'Vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json;charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Vat/case26.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'requestBody' => [
                'supplierCabinetId' => 111,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 200,
                'requests_transferred' => [
                    1
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
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
                            'supplier_cabinet_id' => 111,
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 3,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date' => null,
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case26.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [
                        [
                            'request_id' => 2,
                            'reason_id' => 15
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
                        ]
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [],
            ],
        ]
    ],

    'case27' => [
        'setting' => [
            'description' => 'Перевод двух заявок 3->1 по supplierCabinetId + отправка запроса после изменения статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case27.php',
        'mock_data' => [
            'Vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json;charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Vat/case27.json'),
                    'statusCode' => 400
                ],
            ],
        ],
        'provider_data' => [
            'requestBody' => [
                'supplierCabinetId' => 111,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 200,
                'requests_transferred' => [
                    1,
                    2
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
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
                            'supplier_cabinet_id' => 111,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
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
                            'supplier_cabinet_id' => 111,
                        ],
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case27.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 2,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 6,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                    ],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\Exception',
                            'message' => "{\n    \"status\": 400,\n    \"errors\": {\n        \"status\": [\n            \"Значение «Статус заявки» должно быть числом.\"\n        ]\n    }\n}",
                            'file LIKE' => '%/api/infra/api/VATApiClient.php',
                            'line' => 76,
                            'code' => 400
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [],
            ],
        ]
    ],

    'case28' => [
        'setting' => [
            'description' => 'Перевод двух заявок 3->1 по requestId и supplierCabinetId + отправка запроса после изменения статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case26.php',
        'mock_data' => [
            'Vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json;charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Vat/case28.json'),
                    'statusCode' => 404
                ],
            ],
        ],
        'provider_data' => [
            'requestBody' => [
                'requestId' => 2,
                'supplierCabinetId' => 111,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 200,
                'requests_transferred' => [
                    1,
                    2
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
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
                            'supplier_cabinet_id' => 111,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
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
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case27.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
                        ],
                        [
                            'id' => 2,
                            'request_id' => 2,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}',
                            'notify_service_id' => null
                        ],
                        [
                            'id' => 6,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 2,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                    ],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\Exception',
                            'message' => "{\n    \"id\": 1,\n    \"status\": 404,\n    \"errors\": {\n        \"id\": \"Заявка не найдена\"\n    }\n}",
                            'file LIKE' => '%/api/infra/api/VATApiClient.php',
                            'line' => 76,
                            'code' => 404,
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [],
            ],
        ]
    ],

    'case30' => [
        'setting' => [
            'description' => 'Перевод одной из двух заявок 3->1 при requestId + / supplierCabinetId -  + отправка запроса после изменения статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            'Vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json;charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Vat/case26.json'),
                    'statusCode' => 400
                    //доп. проверка, что не будет отправки запроса в Vat, если заявки без supplierCabinetId
                    //т.е. этот запрос в мок-сервер не будет отправлен, ответ 400 не будет получен и exception останется пустой
                ],
            ],
        ],
        'provider_data' => [
            'requestBody' => [
                'requestId' => 1,
                'supplierCabinetId' => 222,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 200,
                'requests_transferred' => [
                    1
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
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
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 3,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date' => null,
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [
                        [
                            'request_id' => 2,
                            'reason_id' => 15
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
                        ]
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [],
            ],
        ]
    ],

    'case31' => [
        'setting' => [
            'description' => 'Перевод одной из двух заявок 3->1 при requestId - / supplierCabinetId +  и отправка запроса после изменения статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case26.php',
        'mock_data' => [
            'Vat' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/templates/validation-results',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json;charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Vat/case26.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'requestBody' => [
                'requestId' => 10,
                'supplierCabinetId' => 111,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 200,
                'requests_transferred' => [
                    1
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
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
                            'supplier_cabinet_id' => 111,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 3,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date' => null,
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case26.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [
                        [
                            'request_id' => 2,
                            'reason_id' => 15
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 1,
                            'reason' => "=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => null,
                            'reasons' => null
                        ]
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
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
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 1, "oldValue": 3}'
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 1 в статус 1
)
'
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
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
                            'previous_status' => 3,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 3,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date' => null,
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case17.php')['lisa_fixtures']['requests_fields'],
                    'request_status_history' => [],
                    'requests_reasons' => [
                        [
                            'request_id' => 2,
                            'reason_id' => 15
                        ],
                    ],
                    'user_notifications' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 1 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Ошибка без указания requestId и supplierCabinetId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                //"requestId" => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Необходимо заполнить requestId или supplierCabinetId'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\InvalidArgumentException',
                            'message' => 'Необходимо заполнить requestId или supplierCabinetId',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                //"newStatus" => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'newStatus: должен быть числом.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\InvalidArgumentException',
                            'message' => 'newStatus: должен быть числом.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"requestId":"1","payload":{"Request":{"correction_comment":"=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}}},"exceptionMessage":"newStatus: должен быть числом.","user":"kutsan.k"}'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                //"payload[Request][correction_comment]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => Необходимо заполнить payload[Request][correction_comment]
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => Необходимо заполнить payload[Request][correction_comment]
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"requestId":"1","newStatus":"1"},"exceptionMessage":"Array\n(\n    [0] => Необходимо заполнить payload[Request][correction_comment]\n)\n","user":"kutsan.k"}'
                ],
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
                'requestId' => 100,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'По вашему запросу не найдено заявок.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"requestId":"100","newStatus":"1","payload":{"Request":{"correction_comment":"=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}}},"exceptionMessage":"По вашему запросу не найдено заявок.","user":"kutsan.k"}'
                ],
            ],
        ]
    ],

    'case29' => [
        'setting' => [
            'description' => 'Ошибка при указании несуществующего supplierCabinetId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'supplierCabinetId' => 111,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'По вашему запросу не найдено заявок.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 10,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 10 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 10 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
            ],
        ]
    ],

    'case32' => [
        'setting' => [
            'description' => 'Ошибка при переводе двух заявок 3->1 по supplierCabinetId, одна из которых не на доработке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case32.php',
        'provider_data' => [
            'requestBody' => [
                'supplierCabinetId' => 111,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 5 в статус 1
)
'
                ]
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
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date' => null,
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'supplier_cabinet_id' => 111,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 5,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => 'так ни нада',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date' => null,
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'supplier_cabinet_id' => 111,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\Exception',
                            'message' => '',
                            'code' => 404,
                            'user' => '4',
                        ],
                        [
                            'id' => 2,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 5 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"supplierCabinetId":"111","newStatus":"1","payload":{"Request":{"correction_comment":"=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}}},"exceptionMessage":"Array\n(\n    [0] => В текущем процессе отсутствует переход заявки из статуса 5 в статус 1\n)\n","user":"kutsan.k"}'
                ],
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
                'requestId' => 1,
                'newStatus' => 2,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 2 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 2 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 3,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 3 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 3 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 4,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 4 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 4 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"requestId":"1","newStatus":"4","payload":{"Request":{"correction_comment":"=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}}},"exceptionMessage":"Невозможно перевести задачу в статус 4 через API.","user":"kutsan.k"}'
                ],
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
                'requestId' => 1,
                'newStatus' => 5,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 5 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 5 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 6,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 6 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 6 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 7,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 7 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 7 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 8,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 8 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 8 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 9,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 9 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 9 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 11,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Невозможно перевести задачу в статус 11 через API.'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'InvalidArgumentException',
                            'message' => 'Невозможно перевести задачу в статус 11 через API.',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
            ],
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Ошибка при пустом запросе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Необходимо заполнить requestId или supplierCabinetId'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => $requests,
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\base\InvalidArgumentException',
                            'message' => 'Необходимо заполнить requestId или supplierCabinetId',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":['
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 2 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case18.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case18.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 2 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 4 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case19.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case19.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 4 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 5 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case20.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case20.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 5 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 6 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case21.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case21.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 6 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"requestId":"1","newStatus":"1","payload":{"Request":{"correction_comment":"=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}}},"exceptionMessage":"Array\n(\n    [0] => В текущем процессе отсутствует переход заявки из статуса 6 в статус 1\n)\n","user":"kutsan.k"}'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 7 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case22.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case22.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 7 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 8 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case23.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case23.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 8 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 9 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case24.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case24.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 9 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
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
                'requestId' => 1,
                'newStatus' => 1,
                'payload[Request][correction_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 11 в статус 1
)
'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive($requests, (include __DIR__ . '/fixture/case25.php')['lisa_fixtures']['requests']),
                    'requests_fields' => (include __DIR__ . '/fixture/case25.php')['lisa_fixtures']['requests_fields'],
                    'user_notifications' => [],
                    'request_status_history' => [],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'app\infra\exceptions\StatusTransitionException',
                            'message' => 'Array
(
    [0] => В текущем процессе отсутствует переход заявки из статуса 11 в статус 1
)
',
                            'code' => 0,
                            'user' => '4',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/change-status","bodyParams":{"'
                ],
            ],
        ]
    ],

];