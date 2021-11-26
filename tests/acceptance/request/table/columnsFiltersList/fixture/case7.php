<?php

return [
    'lisa_fixtures' => [
        'requests' => (include __DIR__ . '/case1.php')['lisa_fixtures']['requests'],
        'requests_fields' => (include __DIR__ . '/case1.php')['lisa_fixtures']['requests_fields'],
        'report_periods' => (include __DIR__ . '/case1.php')['lisa_fixtures']['report_periods'],
        'requests_reasons' => (include __DIR__ . '/case1.php')['lisa_fixtures']['requests_reasons'],
        'grid_settings' => [
            [
                //"id" => 1,
                'user_id' => 4,
                'columns_list' => '["cross_check_status", "direction", "team_direction", "difficulty_level", "status", "previous_status"]'
            ]
        ],
    ],
];