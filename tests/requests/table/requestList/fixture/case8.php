<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['requests'],
        'requests_fields' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['requests_fields'],
        'report_periods' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['report_periods'],
        'request_status_history' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['request_status_history'],
        'requests_reasons' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['requests_reasons'],
        'grid_settings' => [
            [
                'id' => 1,
                'user_id' => 4,
                'columns_list' =>
                    '["description_available", "language", "description", "added_goods", "changed_goods", ' .
                    '"actual_start_date", "actual_finish_date", "supervisor_process_date"]'
            ]
        ],
    ],
];