<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение СВ продавца',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                "lisa_fixtures" => [
                    "markets_supervisors" => [
                        [
                            "owox_id" => -2,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                    ],
                ],
            ],
            'db_2' => [
                "lisa_fixtures" => [
                    "markets_supervisors" => [
                        [
                            "owox_id" => -2,
                            "supervisor_id" => 5
                        ],
                        [
                            "owox_id" => 0,
                            "supervisor_id" => 30
                        ],
                        [
                            "owox_id" => 5,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 83,
                            "supervisor_id" => 6
                        ],
                        [
                            "owox_id" => 9423,
                            "supervisor_id" => 10
                        ],
                        [
                            "owox_id" => 67757,
                            "supervisor_id" => 10
                        ],
                    ],
                ],
            ]
        ]
    ],
];
