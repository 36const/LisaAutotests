<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание отчётного периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ReportPeriod[begin]' => '2020-05-01',
                'ReportPeriod[end]' => '2020-05-31',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "report_periods" => [
                        [
                            'id' => 1,
                            "begin" => '2020-01-01 00:00:00',
                            "end" => '2020-02-01 00:00:00',
                            "created_at" => '2020-01-01 00:00:00',
                            "updated_at" => null,
                        ],
                        [
                            "id" => 2,
                            "begin" => "2020-05-01 00:00:00",
                            "end" => "2020-05-31 00:00:00",
                            "created_at >=" => date("Y-m-d"),
                            "updated_at" => null
                        ]
                    ],
                ],
            ]
        ]
    ],

];
