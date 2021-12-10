<?php

use lisa\Page\Requests\RequestCreate;
use lisa\AcceptanceTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Множественный перевод заявок по статусам 1->2->3->4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            AcceptanceTester::interiorMockArray('request-create', 83),
            AcceptanceTester::interiorMockArray('request-revision', 83),
            AcceptanceTester::interiorMockArray('request-in-progress', 83),
            AcceptanceTester::interiorMockArray('request-completed', 83),
            AcceptanceTester::interiorMockArray('request-canceled', 83),
            AcceptanceTester::interiorMockArray('request-update', 83),
        ],
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
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
                            'category_id' => 1,
                            'seller_id' => -2,
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
                            'previous_status' => 1,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 16,
                            'type_id' => 2,
                            'supervisor_id' => 10,
                            'manager_id' => null,
                            'status' => 2,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-09 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'description' => 'Описание',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<\\|1234567890абвгдеёжзийклмноп513\r\nhttp://splitter.docker/bpm/request/view?id=11&forCrossCheck=0",
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
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 1,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 19,
                            'supervisor_team' => 7,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            'db_2' => [
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
                            'seller_id' => -2,
                            'recommendations' => null,
                            'reason' => 'http://splitter.docker',
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
                        ],
                        [
                            'id' => 2,
                            'author_id' => 16,
                            'type_id' => 2,
                            'supervisor_id' => 10,
                            'manager_id' => null,
                            'status' => 3,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-09 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'description' => 'Описание',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<\\|1234567890абвгдеёжзийклмноп513\r\nhttp://splitter.docker/bpm/request/view?id=11&forCrossCheck=0",
                            'reason' => 'http://splitter.docker',
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
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 2,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 19,
                            'supervisor_team' => 7,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 13,
                        ],
                        [
                            'request_id' => 2,
                            'reason_id' => 11,
                        ],
                        [
                            'request_id' => 2,
                            'reason_id' => 13,
                        ],
                    ],
                ]
            ],
            'db_3' => [
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
                            'seller_id' => -2,
                            'recommendations' => null,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
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
                            'previous_status' => 3,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 16,
                            'type_id' => 2,
                            'supervisor_id' => 10,
                            'manager_id' => null,
                            'status' => 4,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-09 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                            'description' => 'Описание',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<\\|1234567890абвгдеёжзийклмноп513\r\nhttp://splitter.docker/bpm/request/view?id=11&forCrossCheck=0",
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
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
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 3,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 19,
                            'supervisor_team' => 7,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 11,
                        ],
                        [
                            'request_id' => 2,
                            'reason_id' => 11,
                        ],
                    ],
                    'request_status_history' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 1,
                            'new_status' => 2,
                            'reason' => NULL,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => NULL,
                            'reasons' => NULL,
                        ],
                        [
                            'id' => 2,
                            'request_id' => 2,
                            'user_id' => 4,
                            'old_status' => 1,
                            'new_status' => 2,
                            'reason' => NULL,
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => NULL,
                            'reasons' => NULL,
                        ],
                        [
                            'id' => 3,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 2,
                            'new_status' => 3,
                            'reason' => 'http://splitter.docker',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => NULL,
                            'reasons' => 'Другое (описан в коментариях) | Нада',
                        ],
                        [
                            'id' => 4,
                            'request_id' => 2,
                            'user_id' => 4,
                            'old_status' => 2,
                            'new_status' => 3,
                            'reason' => 'http://splitter.docker',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => NULL,
                            'reasons' => 'Другое (описан в коментариях) | Нада',
                        ],
                        [
                            'id' => 5,
                            'request_id' => 1,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 4,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => NULL,
                            'reasons' => 'Другое (описан в коментариях)',
                        ],
                        [
                            'id' => 6,
                            'request_id' => 2,
                            'user_id' => 4,
                            'old_status' => 3,
                            'new_status' => 4,
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|',
                            'created_at >=' => date('Y-m-d'),
                            'manager_id' => NULL,
                            'reasons' => 'Другое (описан в коментариях)',
                        ],
                    ],
                ]
            ],
        ]
    ],

];