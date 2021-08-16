<?php

use lisa\RequestsTester;

return [
    'lisa_fixtures' => [
        'requests' => RequestsTester::generateManyRecords(11000, 'requests'),
        'report_periods' => [
            [
                //'id' => 1,
                'begin' => '2020-01-01 00:00:00',
                'end' => '2020-01-31 00:00:00',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 2,
                'begin' => '2020-02-01 00:00:00',
                'end' => '2020-02-28 00:00:00',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 3,
                'begin' => '2020-03-01 00:00:00',
                'end' => '2020-03-31 00:00:00',
                'created_at' => '2020-02-01 00:00:00',
                'updated_at' => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                'begin' => '2020-04-01 00:00:00',
                'end' => '2020-04-30 00:00:00',
                'created_at' => '2020-03-01 00:00:00',
                'updated_at' => '2020-09-01 19:01:01',
            ],
        ],
        'user_exports' => [
            [
//                "id" => 1,
                'user_id' => 4,
                'title' => 'export_4_' . date('Y-m-d') . '_18-18-18.xlsx',
                'status' => 2,
            ]
        ],
        'exports_logs' => [
            [
//                "export_id" => 1,
                'user_id' => 4,
                'conditions' => '{"queryParams": "{\"tab\":\"all\"}"}',
                'created_at' => date('Y-m-d H:i:s', strtotime('-30 minutes')),
                'generated_at' => date('Y-m-d H:i:s', strtotime('-30 minutes')),
                'generation_time' => 1,
            ],
        ],
    ]
];