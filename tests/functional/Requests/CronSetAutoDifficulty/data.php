<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Автоматическое проставление уровня сложности только в статусах 4/8/9/11',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 18,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => "2020-01-14 00:00:00",
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => null,
                            "seller_id" => 0,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
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
                            "author_id" => 18,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 2,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => "2020-01-14 00:00:00",
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "category_id" => null,
                            "seller_id" => 0,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 1,
                        ],
                        [
                            "id" => 3,
                            "author_id" => 17,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 3,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => null,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 1,
                        ],
                        [
                            "id" => 4,
                            "author_id" => 17,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 4,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => null,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 1,
                        ],
                        [
                            "id" => 5,
                            "author_id" => 17,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => 11,
                            "status" => 5,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => null,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 2,
                        ],
                        [
                            "id" => 6,
                            "author_id" => 17,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => 11,
                            "status" => 6,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => null,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 5,
                        ],
                        [
                            "id" => 7,
                            "author_id" => 17,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => 11,
                            "status" => 7,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => null,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 6,
                        ],
                        [
                            "id" => 8,
                            "author_id" => 17,
                            "type_id" => 13,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 8,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 0,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 6,
                        ],
                        [
                            "id" => 9,
                            "author_id" => 17,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => null,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 6,
                        ],
                        [
                            "id" => 10,
                            "author_id" => 17,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => 11,
                            "status" => 11,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => null,
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
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                            "previous_status" => 9,
                        ],
                    ],
                    'requests_fields' => [
                        [
                            "request_id" => 1,
                            "field_id" => 31,
                            "value" => "49"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 32,
                            "value" => "53"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 61,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 146,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 158,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 31,
                            "value" => "49"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 32,
                            "value" => "53"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 61,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 146,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 158,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 31,
                            "value" => "49"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 32,
                            "value" => "53"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 53,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 61,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 101,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 122,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 146,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 158,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 20,
                            "value" => "62"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 31,
                            "value" => 50,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 32,
                            "value" => 52,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 53,
                            "value" => 0.5,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 54,
                            "value" => 1.1,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 61,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 101,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 122,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 146,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 158,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 64,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 164,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 165,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 166,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 167,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 168,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 169,
                            "value" => 1,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 170,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 171,
                            "value" => 0.07,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 172,
                            "value" => 0.15,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 173,
                            "value" => 0.1,
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 31,
                            "value" => "49"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 32,
                            "value" => "53"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 53,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 61,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 101,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 122,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 146,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 158,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 31,
                            "value" => "48"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 32,
                            "value" => "52"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 61,
                            "value" => "6"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 91,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 93,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 94,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 101,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 116,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 122,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 146,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 158,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 31,
                            "value" => "50"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 32,
                            "value" => "54"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 54,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 61,
                            "value" => "6"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 91,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 93,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 94,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 101,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 116,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 122,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 146,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 158,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 27,
                            "value" => "25"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 47,
                            "value" => "45.01"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 48,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 53,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 54,
                            "value" => "1.5"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 56,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 62,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 63,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 65,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 70,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 86,
                            "value" => "60"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 87,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 88,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 100,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 101,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 102,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 122,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 144,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 146,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 147,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 8,
                            "field_id" => 158,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 20,
                            "value" => 64,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 31,
                            "value" => 51,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 32,
                            "value" => 55,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 53,
                            "value" => 0.5,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 54,
                            "value" => 1.3,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 61,
                            "value" => 210,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 89,
                            "value" => 3,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 91,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 93,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 94,
                            "value" => 300,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 101,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 116,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 122,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 146,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 158,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 161,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 162,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 163,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 64,
                            "value" => 153.66,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 164,
                            "value" => 0.7,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 165,
                            "value" => 1.5,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 166,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 167,
                            "value" => 1,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 168,
                            "value" => 30,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 169,
                            "value" => 1,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 170,
                            "value" => 0.7,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 171,
                            "value" => 0.07,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 172,
                            "value" => 0.15,
                        ],
                        [
                            "request_id" => 9,
                            "field_id" => 173,
                            "value" => 0.1,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 20,
                            "value" => 65,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 31,
                            "value" => 51,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 32,
                            "value" => 57,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 53,
                            "value" => 0.5,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 54,
                            "value" => 1.5,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 61,
                            "value" => 210,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 89,
                            "value" => 3,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 91,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 93,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 94,
                            "value" => 300,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 101,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 116,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 122,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 146,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 158,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 161,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 162,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 163,
                            "value" => 10,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 64,
                            "value" => 177.3,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 164,
                            "value" => 0.7,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 165,
                            "value" => 1.5,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 166,
                            "value" => 0,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 167,
                            "value" => 1,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 168,
                            "value" => 30,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 169,
                            "value" => 1,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 170,
                            "value" => 0.7,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 171,
                            "value" => 0.07,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 172,
                            "value" => 0.15,
                        ],
                        [
                            "request_id" => 10,
                            "field_id" => 173,
                            "value" => 0.1,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Непроставление уровня сложности в статусах 4/8/9/11 за сегодня и позавчера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_fields'],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Непроставление уровня сложности в статусах 4/8/9/11 с ранее проставленным уровнем',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests_fields'],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Непроставление уровня сложности в статусах 4/8/9/11 с неполным соответствием условию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests_fields'],
                ]
            ]
        ]
    ],

];
