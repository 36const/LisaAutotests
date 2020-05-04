<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение существующего отчётного периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ReportPeriod[begin]' => '2020-05-01',
                'ReportPeriod[end]' => '2020-06-30',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "report_periods" => [
                        [
                            "id" => 1,
                            "begin" => "2020-05-01 00:00:00",
                            "end" => "2020-06-30 00:00:00",
                            "created_at" => '2020-01-01 00:00:00',
                            "updated_at" => null
                        ]
                    ],
                ],
            ]
        ]
    ],
];
