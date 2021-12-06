<?php

use lisa\Page\Requests\RequestCreate;
use lisa\AcceptanceTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Отдельный перевод заявки по статусам 7->6->9->11',
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
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => null,
                            'reason' => 'http://splitter.docker',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
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
                            'previous_status' => 7,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'][1]
                    ],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'requests_reasons' => [],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 9,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => null,
                            'reason' => 'http://splitter.docker',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date' => null,
                            'result_comment' => 'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory',
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
                            'previous_status' => 6,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'][1]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60,
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
                            'value' => 2,
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
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 8,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 9,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
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
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 8,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 15,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 19,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 49,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 50,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 51,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 53,
                            'value' => 3
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 60,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 64,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 101,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 114,
                            'value' => 3
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 122,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 142,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 143,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 146,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 158,
                            'value' => 0
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
                            'supervisor_id' => 10,
                            'manager_id' => 11,
                            'status' => 11,
                            'direction' => 1,
                            'priority' => 2,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 5,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => 2,
                            'seller_id' => 5,
                            'recommendations' => null,
                            'reason' => 'http://splitter.docker',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date >=' => date('Y-m-d'),
                            'supervisor_process_date >=' => date('Y-m-d'),
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory',
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
                            'previous_status' => 9,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => 1,
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'][1]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 3,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 4,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 7,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 90,
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
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 90,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 8,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 9,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value >' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
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
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 8,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 15,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 19,
                            'value' => 1
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 49,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 50,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 51,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 53,
                            'value' => 3
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 60,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 64,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 101,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 114,
                            'value' => 3
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 122,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 142,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 143,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 146,
                            'value' => 0
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 158,
                            'value' => 0
                        ],
                    ],
                ]
            ],
        ]
    ],

];
