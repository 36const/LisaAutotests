<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                //'id' => 1,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 6,
                'manager_id' => 4,
                'status' => 6,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"2": 2}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 2,
                'author_id' => 4,
                'type_id' => 2,
                'supervisor_id' => 5,
                'manager_id' => 4,
                'status' => 7,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"3": 3}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 3,
                'author_id' => 4,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => 4,
                'status' => 8,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 3,
                'sync_source_id' => null,
                'sv_report_periods' => '{"4": 4}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],

            [
                //'id' => 4,
                'author_id' => 4,
                'type_id' => 4,
                'supervisor_id' => 7,
                'manager_id' => 13,
                'status' => 6,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 4,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"2": 2}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 5,
                'author_id' => 4,
                'type_id' => 5,
                'supervisor_id' => 6,
                'manager_id' => 14,
                'status' => 7,
                'direction' => 1,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Rozetka)',
                'description' => 'description',
                'category_id' => 1,
                'seller_id' => -2,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 3,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"3": 3}',
                'cross_check_status' => 1,
                'cross_check_manager_id' => 13,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 6,
                'author_id' => 4,
                'type_id' => 6,
                'supervisor_id' => 10,
                'manager_id' => 13,
                'status' => 4,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Проверка скрытых товаров (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => -2,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 3,
                'sync_source_id' => null,
                'sv_report_periods' => '{"4": 4}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],

            [
                //'id' => 7,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 10,
                'manager_id' => 4,
                'status' => 4,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"3": 3}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 8,
                'author_id' => 4,
                'type_id' => 7,
                'supervisor_id' => 35,
                'manager_id' => 4,
                'status' => 7,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории (Определяется типом задачи)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"3": 3}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 9,
                'author_id' => 4,
                'type_id' => 2,
                'supervisor_id' => 10,
                'manager_id' => 4,
                'status' => 9,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 3,
                'sync_source_id' => null,
                'sv_report_periods' => '{"2": 2}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],

            [
                //'id' => 10,
                'author_id' => 4,
                'type_id' => 3,
                'supervisor_id' => 10,
                'manager_id' => 13,
                'status' => 9,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"3": 3}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 11,
                'author_id' => 4,
                'type_id' => 11,
                'supervisor_id' => 34,
                'manager_id' => 14,
                'status' => 11,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 5,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"3": 3}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                //'id' => 12,
                'author_id' => 4,
                'type_id' => 6,
                'supervisor_id' => 10,
                'manager_id' => 13,
                'status' => 6,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Проверка скрытых товаров (Работа с товарами Маркетплейс)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => 3,
                'sync_source_id' => null,
                'sv_report_periods' => '{"4": 4}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],

        ],
        'requests_fields' => [],
        'request_errors' => [
            [
//                "id" => 1,
                'request_id' => 11,
                'manager_id' => 4,
                'errors_count' => 10,
                'items_with_errors' => 10,
                'field_value_id' => 91,
                'comment' => 'http://splitter.docker/bpm/request/to-correction?id=11',
                'status' => 0,
                'create_ts' => '2020-09-18 05:57:39',
                'correction_date' => null
            ],
            [
//                "id" => 2,
                'request_id' => 11,
                'manager_id' => 4,
                'errors_count' => 10,
                'items_with_errors' => 10,
                'field_value_id' => 89,
                'comment' => 'http://splitter.docker/bpm/request/to-correction?id=11',
                'status' => 0,
                'create_ts' => '2020-09-18 05:57:39',
                'correction_date' => null
            ],
            [
//                "id" => 3,
                'request_id' => 11,
                'manager_id' => 4,
                'errors_count' => 10,
                'items_with_errors' => 10,
                'field_value_id' => 75,
                'comment' => 'http://splitter.docker/bpm/request/to-correction?id=11',
                'status' => 0,
                'create_ts' => '2020-09-18 05:57:39',
                'correction_date' => null
            ],
            [
//                "id" => 4,
                'request_id' => 11,
                'manager_id' => 4,
                'errors_count' => 10,
                'items_with_errors' => 10,
                'field_value_id' => 74,
                'comment' => 'http://splitter.docker/bpm/request/to-correction?id=11',
                'status' => 0,
                'create_ts' => '2020-09-18 05:57:39',
                'correction_date' => null
            ]
        ],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'reports' => [
            [
                'title' => 'Всё во всём',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 1',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 2',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 3',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём (сводный)',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 1',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 2',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 3',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 1
            ],
        ],
        'auth.users' => array_replace_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
            [
                3 => [
                    //'id' => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 1,
                    'parent_id' => 1,
                    'position' => 'contentManager',
                    'status' => 1,
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date' => '2020-05-19 16:36:22',
                    'drfo' => "'000000004",
                    'positions' => '["contentManager"]',
                ],
            ]
        ),
        'auth.auth_assignment' => [
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'updateUser'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewOwnRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'reportView'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewOwnDashboards'
            ],
        ],
        'exports_logs' => [],
        'user_exports' => [],
        'report_period_request_fields' => [],
    ]
];