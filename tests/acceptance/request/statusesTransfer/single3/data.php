<?php

use lisa\Page\Requests\RequestCreate;
use lisa\AcceptanceTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Отдельный перевод заявки по статусам 8->6->5->4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            AcceptanceTester::interiorMockArray('request-create', 121212),
            AcceptanceTester::interiorMockArray('request-revision', 121212),
            AcceptanceTester::interiorMockArray('request-in-progress', 121212),
            AcceptanceTester::interiorMockArray('request-completed', 121212),
            AcceptanceTester::interiorMockArray('request-canceled', 121212),
            AcceptanceTester::interiorMockArray('request-update', 121212),
        ],
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
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
                            'value' => 30,
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
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
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
                            'field_id' => 118,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory',
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
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 14
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 6
                        ],
                        [
                            'request_id' => 1,
                            'reason_id' => 7
                        ],
                    ],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            //"id" => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 11,
                            'status' => 6,
                            'direction' => 2,
                            'priority' => 2,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => 121212,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 1,
                            'cross_check_manager_id' => 12,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 8,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 1,
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'][1]
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
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 118,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 5,
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
                    'requests_reasons' => [],
                ]
            ],
            'db_3' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            //"id" => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 4,
                            'status' => 5,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => -2,
                            'recommendations' => '',
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 1,
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
                            'manager_team' => 17,
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'][1]
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
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 118,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 5,
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
                    'requests_reasons' => [],
                ]
            ],
            'db_4' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            //"id" => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => 4,
                            'status' => 4,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 1,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => '',
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                            'description' => 'description',
                            'category_id' => null,
                            'seller_id' => -2,
                            'recommendations' => '',
                            'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => '2020-01-01 00:00:03',
                            'actual_finish_date' => '2020-01-01 00:00:04',
                            'supervisor_process_date' => '2020-01-01 00:00:02',
                            'supervisor_check_date >=' => date('Y-m-d'),
                            'result_comment' => 'Комментарий к результату задачи',
                            'supervisor_comment' => '',
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => '{"3": 3}',
                            'cross_check_status' => 1,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => 5,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => 17,
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'][1]
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
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 118,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 5,
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
                    'requests_reasons' => [
                        [
                            'request_id' => 1,
                            'reason_id' => 9,
                        ],
                    ],
                ]
            ],
        ]
    ],

];
