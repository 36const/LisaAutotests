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
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "report_periods" => [
                        [
                            'id' => 0,
                            "begin" => '2020-01-01 00:00:00',
                            "end" => '2020-02-01 00:00:00',
                            "created_at" => '2020-01-01 00:00:00',
                            "updated_at" => null,
                        ],
                        [
                            "id" => 1,
                            "begin" => "2020-05-01 00:00:00",
                            "end" => "2020-05-31 00:00:00",
                            //"created_at" => "2020-05-04 10:24:53",
                            "updated_at" => null
                        ]
                    ],
                ],
            ]
        ]
    ],

];
