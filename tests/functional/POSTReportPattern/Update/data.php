<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта только полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields[100]' => 'on',
                'Fields[102]' => 'on',
                'Fields[103]' => 'on',
                'Fields[104]' => 'on',
                'Fields[105]' => 'on',
                'Fields[106]' => 'on',
                'Fields[107]' => 'on',
                'Fields[112]' => 'on',
                'Fields[115]' => 'on',
                'Fields[116]' => 'on',
                'Fields[118]' => 'on',
                'Fields[126]' => 'on',
                'Fields[13]' => 'on',
                'Fields[18]' => 'on',
                'Fields[63]' => 'on',
                'Fields[66]' => 'on',
                'Fields[67]' => 'on',
                'Fields[70]' => 'on',
                'Fields[71]' => 'on',
                'Fields[76]' => 'on',
                'Fields[77]' => 'on',
                'Fields[79]' => 'on',
                'Fields[7]' => 'on',
                'Fields[80]' => 'on',
                'Fields[81]' => 'on',
                'Fields[82]' => 'on',
                'Fields[83]' => 'on',
                'Fields[84]' => 'on',
                'Fields[87]' => 'on',
                'Fields[90]' => 'on',
                'Fields[91]' => 'on',
                'Fields[93]' => 'on',
                'Fields[95]' => 'on',
                'Fields[96]' => 'on',
                'Fields[97]' => 'on',
                'Fields[98]' => 'on',
                'Fields[99]' => 'on',
                'Fields[amount_to_work]' => 'on',
                'Fields[category_id]' => 'on',
                'Fields[subject]' => 'on',
                'Report[conditions][team_direction]' => ['1','2','3'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8'],
                'Report[title]' => 'Всё во всём',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '[100, 102, 103, 104, 105, 106, 107, 112, 115, 116, 118, 126, 13, 18, 63, 66, 67, 70, 71, 76, 77, 79, 7, 80, 81, 82, 83, 84, 87, 90, 91, 93, 95, 96, 97, 98, 99, "amount_to_work", "category_id", "subject"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8"], "team_direction": ["1", "2", "3"]}',
                            "type" => 0
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта полей и направлений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields[100]' => 'on',
                'Fields[102]' => 'on',
                'Fields[103]' => 'on',
                'Fields[104]' => 'on',
                'Fields[105]' => 'on',
                'Fields[106]' => 'on',
                'Fields[107]' => 'on',
                'Fields[112]' => 'on',
                'Fields[115]' => 'on',
                'Fields[116]' => 'on',
                'Fields[118]' => 'on',
                'Fields[126]' => 'on',
                'Fields[13]' => 'on',
                'Fields[18]' => 'on',
                'Fields[63]' => 'on',
                'Fields[66]' => 'on',
                'Fields[67]' => 'on',
                'Fields[70]' => 'on',
                'Fields[71]' => 'on',
                'Fields[76]' => 'on',
                'Fields[77]' => 'on',
                'Fields[79]' => 'on',
                'Fields[7]' => 'on',
                'Fields[80]' => 'on',
                'Fields[81]' => 'on',
                'Fields[82]' => 'on',
                'Fields[83]' => 'on',
                'Fields[84]' => 'on',
                'Fields[87]' => 'on',
                'Fields[90]' => 'on',
                'Fields[91]' => 'on',
                'Fields[93]' => 'on',
                'Fields[95]' => 'on',
                'Fields[96]' => 'on',
                'Fields[97]' => 'on',
                'Fields[98]' => 'on',
                'Fields[99]' => 'on',
                'Fields[amount_to_work]' => 'on',
                'Fields[category_id]' => 'on',
                'Fields[subject]' => 'on',
                'Report[conditions][team_direction]' => ['1','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8'],
                'Report[title]' => 'Всё во всём',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '[100, 102, 103, 104, 105, 106, 107, 112, 115, 116, 118, 126, 13, 18, 63, 66, 67, 70, 71, 76, 77, 79, 7, 80, 81, 82, 83, 84, 87, 90, 91, 93, 95, 96, 97, 98, 99, "amount_to_work", "category_id", "subject"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8"], "team_direction": ["1", "5", "6"]}',
                            "type" => 0
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта полей и типов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields[100]' => 'on',
                'Fields[102]' => 'on',
                'Fields[103]' => 'on',
                'Fields[104]' => 'on',
                'Fields[105]' => 'on',
                'Fields[106]' => 'on',
                'Fields[107]' => 'on',
                'Fields[112]' => 'on',
                'Fields[115]' => 'on',
                'Fields[116]' => 'on',
                'Fields[118]' => 'on',
                'Fields[126]' => 'on',
                'Fields[13]' => 'on',
                'Fields[18]' => 'on',
                'Fields[63]' => 'on',
                'Fields[66]' => 'on',
                'Fields[67]' => 'on',
                'Fields[70]' => 'on',
                'Fields[71]' => 'on',
                'Fields[76]' => 'on',
                'Fields[77]' => 'on',
                'Fields[79]' => 'on',
                'Fields[7]' => 'on',
                'Fields[80]' => 'on',
                'Fields[81]' => 'on',
                'Fields[82]' => 'on',
                'Fields[83]' => 'on',
                'Fields[84]' => 'on',
                'Fields[87]' => 'on',
                'Fields[90]' => 'on',
                'Fields[91]' => 'on',
                'Fields[93]' => 'on',
                'Fields[95]' => 'on',
                'Fields[96]' => 'on',
                'Fields[97]' => 'on',
                'Fields[98]' => 'on',
                'Fields[99]' => 'on',
                'Fields[amount_to_work]' => 'on',
                'Fields[category_id]' => 'on',
                'Fields[subject]' => 'on',
                'Report[conditions][team_direction][]' => '1',
                'Report[conditions][team_direction][]' => '2',
                'Report[conditions][team_direction][]' => '3',
                'Report[conditions][type_id][]' => '1',
                'Report[conditions][type_id][]' => '2',
                'Report[conditions][type_id][]' => '3',
                'Report[conditions][type_id][]' => '9',
                'Report[conditions][type_id][]' => '10',
                'Report[conditions][type_id][]' => '11',
                'Report[conditions][type_id][]' => '12',
                'Report[conditions][type_id][]' => '13',
                'Report[conditions][type_id][]' => '14',
                'Report[conditions][type_id][]' => '15',
                'Report[conditions][team_direction]' => ['1','2','3'],
                'Report[conditions][type_id]' => ['1','2','3','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '[100, 102, 103, 104, 105, 106, 107, 112, 115, 116, 118, 126, 13, 18, 63, 66, 67, 70, 71, 76, 77, 79, 7, 80, 81, 82, 83, 84, 87, 90, 91, 93, 95, 96, 97, 98, 99, "amount_to_work", "category_id", "subject"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3"]}',
                            "type" => 0
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта полей, типов и направлений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields[100]' => 'on',
                'Fields[102]' => 'on',
                'Fields[103]' => 'on',
                'Fields[104]' => 'on',
                'Fields[105]' => 'on',
                'Fields[106]' => 'on',
                'Fields[107]' => 'on',
                'Fields[112]' => 'on',
                'Fields[115]' => 'on',
                'Fields[116]' => 'on',
                'Fields[118]' => 'on',
                'Fields[126]' => 'on',
                'Fields[13]' => 'on',
                'Fields[18]' => 'on',
                'Fields[63]' => 'on',
                'Fields[66]' => 'on',
                'Fields[67]' => 'on',
                'Fields[70]' => 'on',
                'Fields[71]' => 'on',
                'Fields[76]' => 'on',
                'Fields[77]' => 'on',
                'Fields[79]' => 'on',
                'Fields[7]' => 'on',
                'Fields[80]' => 'on',
                'Fields[81]' => 'on',
                'Fields[82]' => 'on',
                'Fields[83]' => 'on',
                'Fields[84]' => 'on',
                'Fields[87]' => 'on',
                'Fields[90]' => 'on',
                'Fields[91]' => 'on',
                'Fields[93]' => 'on',
                'Fields[95]' => 'on',
                'Fields[96]' => 'on',
                'Fields[97]' => 'on',
                'Fields[98]' => 'on',
                'Fields[99]' => 'on',
                'Fields[amount_to_work]' => 'on',
                'Fields[category_id]' => 'on',
                'Fields[subject]' => 'on',
                'Report[conditions][team_direction][]' => '3',
                'Report[conditions][team_direction][]' => '5',
                'Report[conditions][team_direction][]' => '6',
                'Report[conditions][type_id][]' => '6',
                'Report[conditions][type_id][]' => '7',
                'Report[conditions][type_id][]' => '8',
                'Report[conditions][type_id][]' => '13',
                'Report[conditions][type_id][]' => '14',
                'Report[conditions][type_id][]' => '15',
                'Report[conditions][team_direction]' => ['3','5','6'],
                'Report[conditions][type_id]' => ['6','7','8','13','14','15'],
                'Report[title]' => 'Всё во всём',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '[100, 102, 103, 104, 105, 106, 107, 112, 115, 116, 118, 126, 13, 18, 63, 66, 67, 70, 71, 76, 77, 79, 7, 80, 81, 82, 83, 84, 87, 90, 91, 93, 95, 96, 97, 98, 99, "amount_to_work", "category_id", "subject"]',
                            "conditions" => '{"type_id": ["6", "7", "8", "13", "14", "15"], "team_direction": ["3", "5", "6"]}',
                            "type" => 0
                        ]
                    ],
                ],
            ]
        ]
    ],
];
