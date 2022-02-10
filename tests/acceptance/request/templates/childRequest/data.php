<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание связанной заявки через шаблон + автосоздание дочерней заявки через шаблон',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            //'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 10,
                            'manager_id' => NULL,
                            'status' => 1,
                            'direction' => 2,
                            'priority' => 1,
                            'awaiting_correction' => 0,
                            'created_at' => date('Y-m-d'),
                            'correction_comment' => NULL,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Маркет) Добавление новых товаров (Маркет)',
                            'description' => 'http://splitter.docker/lisa/#/request-template/create?typeId=1&direction=1',
                            'category_id' => NULL,
                            'seller_id' => 72141,
                            'recommendations' => NULL,
                            'reason' => NULL,
                            'parent_id' => NULL,
                            'planned_start_date' => NULL,
                            'planned_finish_date' => NULL,
                            'actual_start_date' => NULL,
                            'actual_finish_date' => NULL,
                            'supervisor_process_date' => NULL,
                            'supervisor_check_date' => NULL,
                            'result_comment' => NULL,
                            'supervisor_comment' => NULL,
                            'last_change_status_date' => date('Y-m-d'),
                            'team_direction' => 3,
                            'report_period_id' => NULL,
                            'sync_source_id' => NULL,
                            'sv_report_periods' => NULL,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => NULL,
                            'employee_code_1c' => NULL,
                            'child_count' => 1,
                            'photo_load_status' => 0,
                            'previous_status' => NULL,
                            'supplier_cabinet_id' => NULL,
                            'payload' => '[]',
                            'rz_category_id' => NULL,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => NULL,
                        ],
                        [
                            'id' => 2,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => NULL,
                            'status' => 1,
                            'direction' => 2,
                            'priority' => NULL,
                            'awaiting_correction' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'correction_comment' => NULL,
                            'amount_to_work' => 999999999,
                            'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'description' => 'description',
                            'category_id' => NULL,
                            'seller_id' => 83,
                            'recommendations' => NULL,
                            'reason' => NULL,
                            'parent_id' => 1,
                            'planned_start_date' => NULL,
                            'planned_finish_date' => NULL,
                            'actual_start_date' => NULL,
                            'actual_finish_date' => NULL,
                            'supervisor_process_date' => NULL,
                            'supervisor_check_date' => NULL,
                            'result_comment' => NULL,
                            'supervisor_comment' => NULL,
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => NULL,
                            'sync_source_id' => NULL,
                            'sv_report_periods' => NULL,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => NULL,
                            'employee_code_1c' => NULL,
                            'child_count' => 1,
                            'photo_load_status' => 0,
                            'previous_status' => NULL,
                            'supplier_cabinet_id' => NULL,
                            'payload' => '[]',
                            'rz_category_id' => NULL,
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => NULL,
                        ],
                        [
                            'id' => 3,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 10,
                            'manager_id' => NULL,
                            'status' => 1,
                            'direction' => 1,
                            'priority' => 1,
                            'awaiting_correction' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'correction_comment' => NULL,
                            'amount_to_work' => 10,
                            'subject' => 'Добавление новых товаров (Розетка) Добавление новых товаров (Розетка)',
                            'description' => 'http://splitter.docker/lisa/#/request-template/create?typeId=1&direction=1',
                            'category_id' => 2,
                            'seller_id' => 72141,
                            'recommendations' => NULL,
                            'reason' => NULL,
                            'parent_id' => 2,
                            'planned_start_date' => NULL,
                            'planned_finish_date' => NULL,
                            'actual_start_date' => NULL,
                            'actual_finish_date' => NULL,
                            'supervisor_process_date' => NULL,
                            'supervisor_check_date' => NULL,
                            'result_comment' => NULL,
                            'supervisor_comment' => NULL,
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 3,
                            'report_period_id' => NULL,
                            'sync_source_id' => NULL,
                            'sv_report_periods' => NULL,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => NULL,
                            'employee_code_1c' => NULL,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => NULL,
                            'supplier_cabinet_id' => NULL,
                            'payload' => '[]',
                            'rz_category_id' => NULL,
                            'author_team' => 17,
                            'supervisor_team' => 7,
                            'manager_team' => NULL,
                        ],
                    ],
                    'observers' => [
                        [
                            'request_id' => 1,
                            'user_id' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'user_id' => 6,
                        ],
                        [
                            'request_id' => 2,
                            'user_id' => 16,
                        ],
                        [
                            'request_id' => 3,
                            'user_id' => 5,
                        ],
                        [
                            'request_id' => 3,
                            'user_id' => 6,
                        ],
                    ],
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\base\\Exception',
                            'message' => '',
                            'code' => 404,
                            'user' => '4',
                        ],
                    ],
                ]
            ]
        ]
    ],


];