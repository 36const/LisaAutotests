<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Массовое редактирование',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'requests' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                        [
                            [
                                'sv_report_periods' => '{"2": 2, "3": 3}',
                            ],
                            [
                                'sv_report_periods' => '{"2": 2, "3": 3}',
                            ],
                            [
                                'sv_report_periods' => '{"2": 2, "3": 3}',
                            ],
                            [
                                'sv_report_periods' => '{"2": 2, "3": 3}',
                            ],
                        ]
                    ),
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 3,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 15,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 19,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 29,
                            'value' => 37,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 30,
                            'value' => 47,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 32,
                            'value' => 58,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 142,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 143,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 144,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 160,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 3,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 29,
                            'value' => 37,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 30,
                            'value' => 47,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 32,
                            'value' => 58,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 51,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 64,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 65,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 67,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 68,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 69,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 70,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 71,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 76,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 77,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 88,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 93,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 94,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 111,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 142,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 143,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 144,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 3,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 6,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 7,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 29,
                            'value' => 37,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 30,
                            'value' => 47,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 32,
                            'value' => 58,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 55,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 65,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 79,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 80,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 81,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 84,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 85,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 90,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 97,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 98,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 99,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 104,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 105,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 106,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 107,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 109,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 112,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 113,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 115,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 144,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 149,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 150,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 151,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 152,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 154,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 29,
                            'value' => 37,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 30,
                            'value' => 47,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 32,
                            'value' => 58,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 54,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 59,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 79,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 80,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 84,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 91,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 97,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 98,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 99,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 104,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 105,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 106,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 113,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 149,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 150,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 151,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 20,
                            'value' => 65,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 29,
                            'value' => 37,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 30,
                            'value' => 47,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 32,
                            'value' => 58,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 54,
                            'value' => 1.5,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 59,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 79,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 80,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 84,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 91,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 97,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 98,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 99,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 104,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 105,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 106,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 113,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 149,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 150,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 151,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 20,
                            'value' => 66,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 29,
                            'value' => 37,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 30,
                            'value' => 47,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 32,
                            'value' => 58,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 47,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 48,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 54,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 56,
                            'value' => 80,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 62,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 63,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 65,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 86,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 87,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 100,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 102,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 144,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 147,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 20,
                            'value' => 66,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 53,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 54,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 58,
                            'value' => 120,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 65,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 83,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 92,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 110,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 117,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 144,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 155,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                ]
            ],
        ]
    ]
];
