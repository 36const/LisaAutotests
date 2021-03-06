<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                "id" => 1,
                'author_id' => 4,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 2,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
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
//                "id" => 2,
                'author_id' => 4,
                'type_id' => 5,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 3,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 5,
                'recommendations' => null,
                'reason' => 'Затребовать изменения',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
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
                'previous_status' => 1,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => null,
            ],
            [
//                "id" => 3,
                'author_id' => 4,
                'type_id' => 7,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 5,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => 1,
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
                'supervisor_team' => 16,
                'manager_team' => 1,
            ],
            [
//                "id" => 4,
                'author_id' => 4,
                'type_id' => 9,
                'supervisor_id' => 34,
                'manager_id' => 11,
                'status' => 6,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 5,
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
                'supervisor_team' => 15,
                'manager_team' => 1,
            ],
            [
//                "id" => 5,
                'author_id' => 4,
                'type_id' => 10,
                'supervisor_id' => 37,
                'manager_id' => 11,
                'status' => 7,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => 'Ожидать',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
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
                'supervisor_team' => 15,
                'manager_team' => 1,
            ],
            [
//                "id" => 6,
                'author_id' => 4,
                'type_id' => 13,
                'supervisor_id' => 38,
                'manager_id' => 11,
                'status' => 8,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
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
                'supervisor_team' => 16,
                'manager_team' => 1,
            ],
            [
//                "id" => 7,
                'author_id' => 4,
                'type_id' => 15,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 16,
                'manager_team' => 1,
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 3,
                'value' => 1,
            ],
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
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 67,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 72,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 73,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 74,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 75,
                'value' => 0,
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
                'field_id' => 144,
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
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 2,
                'field_id' => 3,
                'value' => 1,
            ],
            [
                'request_id' => 2,
                'field_id' => 49,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 51,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 52,
                'value' => 2,
            ],
            [
                'request_id' => 2,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 2,
                'field_id' => 54,
                'value' => 1,
            ],
            [
                'request_id' => 2,
                'field_id' => 60,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 64,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 67,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 68,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 69,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 70,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 71,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 76,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 77,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 88,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 93,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 94,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 111,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 142,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 3,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 6,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 7,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 29,
                'value' => 36,
            ],
            [
                'request_id' => 3,
                'field_id' => 30,
                'value' => 47,
            ],
            [
                'request_id' => 3,
                'field_id' => 53,
                'value' => 3,
            ],
            [
                'request_id' => 3,
                'field_id' => 54,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 55,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 79,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 80,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 81,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 84,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 85,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 90,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 97,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 98,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 99,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 104,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 105,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 106,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 107,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 109,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 112,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 113,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 115,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 149,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 150,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 151,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 152,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 154,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 4,
                'field_id' => 20,
                'value' => 65,
            ],
            [
                'request_id' => 4,
                'field_id' => 29,
                'value' => 30,
            ],
            [
                'request_id' => 4,
                'field_id' => 30,
                'value' => 39,
            ],
            [
                'request_id' => 4,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 4,
                'field_id' => 54,
                'value' => 1.5,
            ],
            [
                'request_id' => 4,
                'field_id' => 59,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 79,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 80,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 84,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 91,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 97,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 98,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 99,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 104,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 105,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 106,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 113,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 149,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 150,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 151,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 2,
                'value' => 1,
            ],
            [
                'request_id' => 5,
                'field_id' => 20,
                'value' => 65,
            ],
            [
                'request_id' => 5,
                'field_id' => 29,
                'value' => 30,
            ],
            [
                'request_id' => 5,
                'field_id' => 30,
                'value' => 30,
            ],
            [
                'request_id' => 5,
                'field_id' => 53,
                'value' => 2,
            ],
            [
                'request_id' => 5,
                'field_id' => 54,
                'value' => 1.5,
            ],
            [
                'request_id' => 5,
                'field_id' => 59,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 79,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 80,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 84,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 5,
                'field_id' => 91,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 97,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 98,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 99,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 104,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 105,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 106,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 113,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 149,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 150,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 151,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 2,
                'value' => 1,
            ],
            [
                'request_id' => 6,
                'field_id' => 20,
                'value' => 66,
            ],
            [
                'request_id' => 6,
                'field_id' => 27,
                'value' => 24,
            ],
            [
                'request_id' => 6,
                'field_id' => 29,
                'value' => 30,
            ],
            [
                'request_id' => 6,
                'field_id' => 30,
                'value' => 39,
            ],
            [
                'request_id' => 6,
                'field_id' => 47,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 48,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 53,
                'value' => 2,
            ],
            [
                'request_id' => 6,
                'field_id' => 54,
                'value' => 2,
            ],
            [
                'request_id' => 6,
                'field_id' => 56,
                'value' => 80,
            ],
            [
                'request_id' => 6,
                'field_id' => 62,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 63,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 70,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 86,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 87,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 88,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 6,
                'field_id' => 100,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 102,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 147,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 2,
                'value' => 1,
            ],
            [
                'request_id' => 7,
                'field_id' => 20,
                'value' => 66,
            ],
            [
                'request_id' => 7,
                'field_id' => 53,
                'value' => 2,
            ],
            [
                'request_id' => 7,
                'field_id' => 54,
                'value' => 2,
            ],
            [
                'request_id' => 7,
                'field_id' => 58,
                'value' => 120,
            ],
            [
                'request_id' => 7,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 83,
                'value' => 10,
            ],
            [
                'request_id' => 7,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 7,
                'field_id' => 92,
                'value' => 10,
            ],
            [
                'request_id' => 7,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 110,
                'value' => 10,
            ],
            [
                'request_id' => 7,
                'field_id' => 117,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 155,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 158,
                'value' => 0,
            ],
        ],
        'request_errors' => [],
        'grid_settings' => [],
        'report_periods' => [
            [
                //'id' => 1,
                'begin' => '2021-01-01 00:00:00',
                'end' => '2021-10-31 00:00:00',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 2,
                'begin' => '2021-11-01 00:00:00',
                'end' => '2021-11-30 00:00:00',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 3,
                'begin' => '2021-12-01 00:00:00',
                'end' => '2021-12-13 00:00:00',
                'created_at' => '2021-02-01 00:00:00',
                'updated_at' => '2021-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                'begin' => '2021-12-14 00:00:00',
                'end' => '2021-12-31 00:00:00',
                'created_at' => '2021-03-01 00:00:00',
                'updated_at' => '2021-09-01 19:01:01',
            ],
        ],
    ],
];