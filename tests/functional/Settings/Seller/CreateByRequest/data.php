<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление при создании заявки Работа с товарами Маркетплейса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/request/create',
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 1332,
                "Request[subject]" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "Request[type_id]" => 1,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 24,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => '1332',
                            "recommendations" => null,
                            //"reason_id" => null,
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
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 4, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 24,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 4, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 4, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 4, Тим Лидович 1"
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
                    "markets_supervisors" => [
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 1332,
                            "supervisor_id" => 24
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Недобавление при создании заявки Группировка товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/request/create',
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 1332,
                "Request[subject]" => "Группировка товаров (Определяется типом задачи)",
                "Request[type_id]" => 4,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
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
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => '1332',
                            "recommendations" => null,
                            //"reason_id" => null,
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
                            'field_id' => 61,
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
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 33,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
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
                    "markets_supervisors" => [
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Недобавление нового магазина при создании заявки Группировка товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/request/create',
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 1332,
                "Request[subject]" => "Группировка товаров (Определяется типом задачи)",
                "Request[type_id]" => 4,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
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
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => '1332',
                            "recommendations" => null,
                            //"reason_id" => null,
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
                            'field_id' => 61,
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
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 33,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
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
                    "markets_supervisors" => [
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Недобавление нового магазина при создании заявки Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/request/create',
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 1332,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[type_id]" => 7,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
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
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => '1332',
                            "recommendations" => null,
                            //"reason_id" => null,
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
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => '',
                            "status" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "request_id" => 1,
                            "priority" => 2,
                            //"recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
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
                    "markets_supervisors" => [
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Недобавление нового магазина при редактировании заявки Работа с товарами Маркетплейса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'url' => '/bpm/request/update?id=1',
            'requestBody' => [
                'RequestField[121]' => '',
                'RequestField[144]' => '0',
                'RequestField[157]' => '',
                'RequestField[15]' => '1',
                'RequestField[19]' => '1',
                'RequestField[25]' => '',
                'RequestField[65]' => '0',
                'RequestField[66]' => '0',
                'RequestField[72]' => '0',
                'RequestField[73]' => '0',
                'RequestField[74]' => '0',
                'RequestField[75]' => '0',
                'RequestField[8]' => '1',
                'RequestField[93]' => '0',
                'RequestField[94]' => '0',
                'Request[addedAttachments]' => '[]',
                'Request[amount_to_work]' => '10',
                'Request[attachment_folder]' => 'c049c8777ef41b37217d5db999a0b202',
                'Request[author_id]' => '4',
                'Request[correction_comment]' => '',
                'Request[cross_check_manager_id]' => '',
                'Request[deletedAttachments]' => '[]',
                'Request[description]' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'Request[manager_id]' => '',
                'Request[planned_start_date]' => '',
                'Request[priority]' => '2',
                'Request[recommendations]' => '',
                'Request[report_period_id]' => '',
                'Request[result_comment]' => '',
                'Request[seller_id]' => '1332',
                'Request[subject]' => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                'Request[supervisor_commen0t]' => '',
                'Request[supervisor_id]' => '5',
                'Request[uploadedFiles][]' => '',
                'Request[uploadedFiles][]' => '',
                'newStatus' => '0'
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
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => null,
                            "seller_id" => '1332',
                            "recommendations" => '',
                            //"reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => null,
                            "last_change_status_date" => "2020-01-01 00:00:01",
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
                    'user_notifications' => [],
                    "markets_supervisors" => [
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Недобавление нового магазина при редактировании заявки Определяется типом задачи',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'url' => '/bpm/request/update?id=1',
            'requestBody' => [
                'RequestField[103]' => '0',
                'RequestField[116]' => '0',
                'RequestField[118]' => '0',
                'RequestField[121]' => '',
                'RequestField[145]' => '0',
                'RequestField[148]' => '0',
                'RequestField[157]' => '',
                'RequestField[1]' => '1',
                'RequestField[20]' => '',
                'RequestField[31]' => '',
                'RequestField[32]' => '',
                'RequestField[91]' => '0',
                'RequestField[93]' => '0',
                'RequestField[94]' => '0',
                'RequestField[95]' => '0',
                'Request[addedAttachments]' => '[]',
                'Request[amount_to_work]' => '10',
                'Request[attachment_folder]' => '1cb5ecbb859b60fb2d6ea09f1130f2c8',
                'Request[author_id]' => '4',
                'Request[category_id]' => '1',
                'Request[correction_comment]' => '',
                'Request[cross_check_manager_id]' => '',
                'Request[deletedAttachments]' => '[]',
                'Request[description]' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'Request[manager_id]' => '',
                'Request[planned_start_date]' => '',
                'Request[priority]' => '2',
                'Request[recommendations]' => '',
                'Request[report_period_id]' => '',
                'Request[result_comment]' => '',
                'Request[seller_id]' => '1332',
                'Request[subject]' => 'Группировка товаров (Определяется типом задачи)',
                'Request[supervisor_comment]' => '',
                'Request[supervisor_id]' => '33',
                'Request[uploadedFiles][]' => '',
                'Request[uploadedFiles][]' => '',
                'newStatus' => '0'
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
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            "category_id" => 1,
                            "seller_id" => '1332',
                            "recommendations" => '',
                            //"reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 4,
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
                            'field_id' => 61,
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
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                    'user_notifications' => [],
                    "markets_supervisors" => [
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                    ],
                ],
            ]
        ]
    ],

];
