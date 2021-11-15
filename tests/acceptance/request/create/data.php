<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания заявки без обязательных полей, направление 1',
            'type' => 1,
            'case' => '1_',
            'direction' => 'Работа с товарами Розетки'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                'canSee' => [
                    RequestCreate::TEMPLATE,
                    RequestCreate::SUBJECT,
                    RequestCreate::DESCRIPTION,
                    RequestCreate::CATEGORY,
                    RequestCreate::SELLER,
                    RequestCreate::AMOUNT,
                    RequestCreate::PLANNED_FINISH_DATE,
                    RequestCreate::ALL_CHECKBOXES,
                    RequestCreate::PRIORITY,
                    RequestCreate::OBSERVERS,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 6,
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at >' => date('Y-m-d'),
                            'correction_comment' => null,
                            'amount_to_work' => 999999999,
                            'subject' => '!"№;%:?*()',
                            'description' => '!"№;%:?*()',
                            'category_id' => 1,
                            'seller_id' => 5,
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
                            'last_change_status_date >' => date('Y-m-d'),
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => '0',
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                        ]
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания заявки без обязательных полей, направление 2',
            'type' => 1,
            'case' => '2_',
            'direction' => 'Работа с товарами Маркетплейса'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                'canSee' => [
                    RequestCreate::TEMPLATE,
                    RequestCreate::SUBJECT,
                    RequestCreate::DESCRIPTION,
                    RequestCreate::CATEGORY,
                    RequestCreate::SELLER,
                    RequestCreate::AMOUNT,
                    RequestCreate::PLANNED_FINISH_DATE,
                    RequestCreate::ALL_CHECKBOXES,
                    RequestCreate::PRIORITY,
                    RequestCreate::OBSERVERS,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 5,
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at >' => date('Y-m-d'),
                            'correction_comment' => null,
                            'amount_to_work' => 999999999,
                            'subject' => '!"№;%:?*()',
                            'description' => '!"№;%:?*()',
                            'category_id' => null,
                            'seller_id' => 0,
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
                            'last_change_status_date >' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => '0',
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                        ]
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания заявки без обязательных полей, направление 0, тип 4',
            'type' => 4,
            'case' => '3_',
            'direction' => 'Определяется типом задачи'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                'canSee' => [
                    RequestCreate::TEMPLATE,
                    RequestCreate::SUBJECT,
                    RequestCreate::DESCRIPTION,
                    RequestCreate::ROZETKA_CATEGORY,
                    RequestCreate::SELLER,
                    RequestCreate::AMOUNT,
                    RequestCreate::PLANNED_FINISH_DATE,
                    RequestCreate::ALL_CHECKBOXES,
                    RequestCreate::PRIORITY,
                    RequestCreate::OBSERVERS,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 4,
                            'supervisor_id' => 33,
                            'manager_id' => NULL,
                            'status' => 1,
                            'direction' => 0,
                            'priority' => NULL,
                            'awaiting_correction' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'correction_comment' => NULL,
                            'amount_to_work' => 999999999,
                            'subject' => '!"№;%:?*()',
                            'description' => '!"№;%:?*()',
                            'category_id' => 474,
                            'seller_id' => NULL,
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
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 4,
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
                            'rz_category_id' => 80260,
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность создания заявки без обязательных полей, направление 0, тип 7',
            'type' => 7,
            'case' => '4_',
            'direction' => 'Определяется типом задачи'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                'canSee' => [
                    RequestCreate::TEMPLATE,
                    RequestCreate::SUBJECT,
                    RequestCreate::DESCRIPTION,
                    RequestCreate::CATEGORY,
                    RequestCreate::SELLER,
                    RequestCreate::AMOUNT,
                    RequestCreate::PLANNED_FINISH_DATE,
                    RequestCreate::ALL_CHECKBOXES,
                    RequestCreate::PRIORITY,
                    RequestCreate::OBSERVERS,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 7,
                            'supervisor_id' => 35,
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 0,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at >' => date('Y-m-d'),
                            'correction_comment' => null,
                            'amount_to_work' => 999999999,
                            'subject' => '!"№;%:?*()',
                            'description' => '!"№;%:?*()',
                            'category_id' => 1,
                            'seller_id' => null,
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
                            'last_change_status_date >' => date('Y-m-d'),
                            'team_direction' => 6,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => '0',
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'supplier_cabinet_id' => null,
                            'payload' => '[]',
                            'rz_category_id' => null,
                        ]
                    ],
                ]
            ]
        ]
    ],

];
