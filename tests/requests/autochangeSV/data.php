<?php

use lisa\RequestsTester;

$requests_fields = [
    [
        'request_id' => 1,
        'field_id' => 1,
        'value' => 1,
    ],
    [
        'request_id' => 1,
        'field_id' => 8,
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
        'value' => 3,
    ],
    [
        'request_id' => 1,
        'field_id' => 53,
        'value' => 0,
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
    ]
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Автоизменение СВ при изменении категории и переводе 1->2 (статус 2, тип 1, направление 1)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => 'for-check',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'currentStatus' => 1,
                'payload' => [
                    'category_id' => 2,
                    'recommendations' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                ],
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Заявок готово для распределения: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 10,
                            'manager_id' => null,
                            'status' => 2,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 83,
                            'recommendations' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                            'previous_status' => 1,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => $requests_fields
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":52,"value":"3"},"changed_fields_names":["value"]}',
                    '{"action":"create","entity":"request_status_history","fields_data":{"id":1,"request_id":1,"user_id":4,"old_status":1,"new_status":2,"reason":null,"created_at":"' . date('Y-m-d'),
                    '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":6,"manager_id":null,"status":2,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":"2","seller_id":83,"recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":1,"supervisor_id":10,"manager_id":null,"status":2,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":null,"amount_to_work":10,"subject":"Добавление новых товаров (Работа с товарами Розетки)","description":"description","category_id":2,"seller_id":83,"recommendations":"!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","reason":null,"parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":null,"supervisor_comment":null,"last_change_status_date":"' . date('Y-m-d'),
                        '","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":1,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":7,"manager_team":null},"changed_fields_names":["supervisor_id","supervisor_team"]}'
                    ]
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Автоизменение СВ при изменении категории и сохранении (статус 3, тип 5, направление 1)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'category_id' => 2,
                'currentStatus' => 3,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 5,
                            'supervisor_id' => 10,
                            'manager_id' => null,
                            'status' => 3,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => '',
                            'reason' => 'Комментарий',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 1,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => $requests_fields
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
                'lisa_common' => [
                    '{"action":"update","entity":"requests_fields","fields_data":{"request_id":1,"field_id":52,"value":"3"},"changed_fields_names":["value"]}',
                    '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":5,"supervisor_id":6,"manager_id":null,"status":3,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Заливка фото с фотостудии (Работа с товарами Розетки)","description":"description","category_id":"2","seller_id":5,"recommendations":"","reason":"Комментарий","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"2020-01-01 00:00:01","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":1,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":1,"manager_team":null},"changed_fields_names":["category_id"]}'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.requests.all' => [
                        '{"action":"update","entity":"requests","fields_data":{"id":1,"author_id":4,"type_id":5,"supervisor_id":10,"manager_id":null,"status":3,"direction":1,"priority":2,"awaiting_correction":0,"created_at":"2020-01-01 00:00:00","correction_comment":"","amount_to_work":10,"subject":"Заливка фото с фотостудии (Работа с товарами Розетки)","description":"description","category_id":2,"seller_id":5,"recommendations":"","reason":"Комментарий","parent_id":null,"planned_start_date":null,"planned_finish_date":null,"actual_start_date":null,"actual_finish_date":null,"supervisor_process_date":null,"supervisor_check_date":null,"result_comment":"","supervisor_comment":"","last_change_status_date":"2020-01-01 00:00:01","team_direction":3,"report_period_id":null,"sync_source_id":null,"sv_report_periods":null,"cross_check_status":0,"cross_check_manager_id":null,"employee_code_1c":null,"child_count":0,"photo_load_status":0,"previous_status":1,"supplier_cabinet_id":null,"payload":"[]","rz_category_id":null,"author_team":17,"supervisor_team":7,"manager_team":null},"changed_fields_names":["supervisor_id","supervisor_team"]}'
                    ]
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Автоизменение СВ при изменении продавца и переводе 5->6 (статус 5, тип 3, направление 2)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'mock_data' => [
            RequestsTester::interiorMockArray('request-create', 121212),
            RequestsTester::interiorMockArray('request-revision', 121212),
            RequestsTester::interiorMockArray('request-in-progress', 121212),
            RequestsTester::interiorMockArray('request-completed', 121212),
            RequestsTester::interiorMockArray('request-canceled', 121212),
            RequestsTester::interiorMockArray('request-update', 121212),
        ],
        'provider_data' => [
            'requestParameter' => 'to-work',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'currentStatus' => 5,
                'payload' => [
                    'seller_id' => 121212,
                ],
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Взято в работу заявок: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 3,
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Перенос товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 121212,
                            'recommendations' => '',
                            'reason' => '',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date >=' => date('Y-m-d'),
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 5,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Не-изменение СВ при изменении rz-категории и сохранении (статус 6, тип 4, направление 0)',
            //правило, по которому заявка должна была бы переназначиться на другого СВ, заблокировано
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'rz_category_id' => 2581737,
                'currentStatus' => 6,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            //"id" => 1,
                            'author_id' => 4,
                            'type_id' => 4,
                            'supervisor_id' => 33,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 0,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Группировка товаров (Определяется типом задачи)',
                            'description' => 'description',
                            'category_id' => 1,
                            'seller_id' => 83,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
                            'last_change_status_date' => '2020-01-01 00:00:01',
                            'team_direction' => 4,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 5,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => 2581737,
                            'author_team' => 17,
                            'supervisor_team' => 14,
                            'manager_team' => 1,
                        ],
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Автоизменение СВ при изменении продавца и переводе 6->7 (статус 6, тип 6, направление 2)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'mock_data' => [
            RequestsTester::interiorMockArray('request-create', 121212),
            RequestsTester::interiorMockArray('request-revision', 121212),
            RequestsTester::interiorMockArray('request-in-progress', 121212),
            RequestsTester::interiorMockArray('request-completed', 121212),
            RequestsTester::interiorMockArray('request-canceled', 121212),
            RequestsTester::interiorMockArray('request-update', 121212),
        ],
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'reasons' => [
                    0 => [
                        'id' => 15,
                        'reason' => 'Товары на модерации',
                    ],
                ],
                'status' => 7,
                'currentStatus' => 6,
                'payload' => [
                    'seller_id' => 121212,
                ],
                'comment' => 'comment',
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Обработано заявок: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            //"id" => 1,
                            'author_id' => 4,
                            'type_id' => 6,
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 7,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Проверка скрытых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 121212,
                            'recommendations' => '',
                            'reason' => 'comment',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 6,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => array_merge(
                        (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests_fields'],
                        [
                            [
                                'request_id' => 1,
                                'field_id' => 89,
                                'value >=' => 3,
                            ]
                        ]
                    ),
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 15
                        ]
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Автоизменение СВ при изменении категории и переводе 7->6 (статус 7, тип 12, направление 1)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestParameter' => 'to-work',
            'requestBody' => [
                'ids' => [
                    0 => 1,
                ],
                'currentStatus' => 7,
                'payload' => [
                    'category_id' => 2,
                ],
            ],
            'responseBody' => [
                'count' => 1,
                'message' => 'Взято в работу заявок: 1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 12,
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => '',
                            'reason' => '',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date >=' => date('Y-m-d'),
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 7,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => $requests_fields
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => [],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Не-изменение СВ при изменении категории и сохранении (статус 4, тип 2, направление 1)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'category_id' => 2,
                'currentStatus' => 4,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 2,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 4,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => '',
                            'reason' => 'йцук',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 6,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => $requests_fields
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => []
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Не-изменение СВ при изменении категории и сохранении (статус 8, тип 12, направление 1)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'category_id' => 2,
                'currentStatus' => 8,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 12,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 8,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => '',
                            'reason' => '',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 6,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => $requests_fields
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => []
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Не-изменение СВ при изменении категории и сохранении (статус 9, тип 5, направление 1)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'category_id' => 2,
                'currentStatus' => 9,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 5,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => '',
                            'reason' => '',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 6,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => $requests_fields
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => []
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Не-изменение СВ при изменении категории и сохранении (статус 11, тип 1, направление 1)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'category_id' => 2,
                'currentStatus' => 11,
            ],
            'responseBody' => [
                'success' => true,
                'warning' => '',
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
                            'status' => 11,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => '',
                            'reason' => 'йцук',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => '',
                            'supervisor_comment' => '',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ]
                    ],
                    'requests_fields' => $requests_fields
                ]
            ],
            'RabbitMQ' => [
                'lisa_svRedistribution' => []
            ],
        ]
    ],

];
