<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                //"id" => 1,
                'author_id' => 4,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => 11,
                'status' => 5,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                'description' => 'description',
                'category_id' => 1,
                'seller_id' => 5,
                'recommendations' => '',
                'reason' => '',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
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
            ],
        ],
        'requests_fields' => (include __DIR__ . '/case1.php')['lisa_fixtures']['requests_fields'],
        'report_periods' => [[]],
        'request_errors' => [],
    ],
];