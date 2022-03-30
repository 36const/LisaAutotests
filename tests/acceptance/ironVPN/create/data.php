<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Переход на страницу оплаты',
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
                            'author_team' => 17,
                            'supervisor_team' => 1,
                            'manager_team' => null,
                        ]
                    ],
                ]
            ]
        ]
    ],
];
