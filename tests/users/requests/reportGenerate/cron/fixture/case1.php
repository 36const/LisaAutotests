<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                //'id' => 1,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 4,
                'manager_id' => 11,
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
                'supervisor_id' => 4,
                'manager_id' => 12,
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
                'sv_report_periods' => '{"1": 1, "3": 3}',
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
                'supervisor_id' => 4,
                'manager_id' => 11,
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
                'supervisor_id' => 4,
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
                'supervisor_id' => 4,
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
                'supervisor_id' => 4,
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
                'manager_id' => 11,
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
                'manager_id' => 12,
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
                'manager_id' => 11,
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
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "3", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 2',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["2"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 3',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["4"], "team_direction": ["2", "4", "5", "6"]}',
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
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "3", "4", "5", "6"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 2',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["2"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 3',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["4"], "team_direction": ["2", "4", "5", "6"]}',
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
                    'position' => 'supervisor',
                    'status' => 1,
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date' => '2020-05-19 16:36:22',
                    'drfo' => "'000000004",
                    'positions' => '["supervisor"]',
                ],
            ]
        ),
        'auth.auth_assignment' => [
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewUser'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddNewItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestTransferItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestGroupItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUploadPhoto'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCheckHidden'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddFatPortalCat'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateFatPortalCat'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddAttrOrValues'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateAttrOrValues'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestStructureDesign'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateSC'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateVideo'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateSizeGrid'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateTags'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInWork'
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
                'item_name' => 'transferOnHoldToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCreate'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCreateRelated'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewDirectionRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'reportView'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'massEdit'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'reportLoadYourTeam'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewSplitterModerationRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'takeToWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewDashboardsByCommand'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'seeHiddenCrossCheckFields'
            ],
        ],
        'exports_logs' => [],
        'user_exports' => [],
        'report_period_request_fields' => [],
    ]
];