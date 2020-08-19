<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Снять все чекбоксы, изменить описание',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'RoleBpm[description]' => 'Изменяшки',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][23]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][30]' => '0',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][44]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][47]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][49]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][50]' => '0',
                'RoleBpm[rolePermissions][51]' => '0',
                'RoleBpm[rolePermissions][52]' => '0',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][54]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][56]' => '0',
                'RoleBpm[rolePermissions][57]' => '0',
                'RoleBpm[rolePermissions][80]' => '0',
                'RoleBpm[rolePermissions][81]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][82]' => '0',
                'RoleBpm[rolePermissions][83]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "roles" => [
                        [
                            "id" => 1,
                            "name" => "Должность",
                            "description" => "Изменяшки",
                            //"created_at" => "2020-03-10 12:07:48",
                            //"updated_at" => null
                        ],
                        [
                            "id" => 2,
                            "name" => "Управление пользователями",
                            "description" => "Управление пользователями",
                            //"created_at" => "2020-03-10 12:07:48",
                            "updated_at" => null
                        ],
                    ],
                    "default_role_permissions" => [
                        [
                            "id" => 60,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 61,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 62,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 63,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 64,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменить только описание',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'RoleBpm[description]' => 'Изменяшки',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][10]' => '1',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][11]' => '1',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][12]' => '1',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][13]' => '1',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][14]' => '1',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][15]' => '1',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][16]' => '1',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][17]' => '1',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][18]' => '1',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][19]' => '1',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][1]' => '1',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][20]' => '1',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][21]' => '1',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][22]' => '1',
                'RoleBpm[rolePermissions][23]' => '0',
                'RoleBpm[rolePermissions][23]' => '1',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][24]' => '1',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][25]' => '1',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][26]' => '1',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][27]' => '1',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][28]' => '1',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][29]' => '1',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][2]' => '1',
                'RoleBpm[rolePermissions][30]' => '0',
                'RoleBpm[rolePermissions][30]' => '1',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][31]' => '1',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][34]' => '1',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][35]' => '1',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][36]' => '1',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][37]' => '1',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][38]' => '1',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][39]' => '1',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][3]' => '1',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][41]' => '1',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][42]' => '1',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][43]' => '1',
                'RoleBpm[rolePermissions][44]' => '0',
                'RoleBpm[rolePermissions][44]' => '1',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][45]' => '1',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][46]' => '1',
                'RoleBpm[rolePermissions][47]' => '0',
                'RoleBpm[rolePermissions][47]' => '1',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][48]' => '1',
                'RoleBpm[rolePermissions][49]' => '0',
                'RoleBpm[rolePermissions][49]' => '1',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][4]' => '1',
                'RoleBpm[rolePermissions][50]' => '0',
                'RoleBpm[rolePermissions][50]' => '1',
                'RoleBpm[rolePermissions][51]' => '0',
                'RoleBpm[rolePermissions][51]' => '1',
                'RoleBpm[rolePermissions][52]' => '0',
                'RoleBpm[rolePermissions][52]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][53]' => '1',
                'RoleBpm[rolePermissions][54]' => '0',
                'RoleBpm[rolePermissions][54]' => '1',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][55]' => '1',
                'RoleBpm[rolePermissions][56]' => '0',
                'RoleBpm[rolePermissions][56]' => '1',
                'RoleBpm[rolePermissions][57]' => '0',
                'RoleBpm[rolePermissions][57]' => '1',
                'RoleBpm[rolePermissions][80]' => '0',
                'RoleBpm[rolePermissions][80]' => '1',
                'RoleBpm[rolePermissions][81]' => '0',
                'RoleBpm[rolePermissions][81]' => '1',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][5]' => '1',
                'RoleBpm[rolePermissions][82]' => '0',
                'RoleBpm[rolePermissions][82]' => '1',
                'RoleBpm[rolePermissions][83]' => '0',
                'RoleBpm[rolePermissions][83]' => '1',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][6]' => '1',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][7]' => '1',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][8]' => '1',
                'RoleBpm[rolePermissions][9]' => '0',
                'RoleBpm[rolePermissions][9]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "roles" => [
                        [
                            "id" => 1,
                            "name" => "Должность",
                            "description" => "Изменяшки",
                            //"created_at" => "2020-03-10 12:07:48",
                            //"updated_at" => null
                        ],
                        [
                            "id" => 2,
                            "name" => "Управление пользователями",
                            "description" => "Управление пользователями",
                            //"created_at" => "2020-03-10 12:07:48",
                            "updated_at" => null
                        ],
                    ],
                    "default_role_permissions" => [
                        [
                            "id" => 1,
                            "role_id" => 1,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 2,
                            "role_id" => 1,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 3,
                            "role_id" => 1,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 4,
                            "role_id" => 1,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 5,
                            "role_id" => 1,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 6,
                            "role_id" => 1,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 7,
                            "role_id" => 1,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 8,
                            "role_id" => 1,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 9,
                            "role_id" => 1,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 10,
                            "role_id" => 1,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 11,
                            "role_id" => 1,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 12,
                            "role_id" => 1,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 13,
                            "role_id" => 1,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 14,
                            "role_id" => 1,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 15,
                            "role_id" => 1,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 16,
                            "role_id" => 1,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 17,
                            "role_id" => 1,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 18,
                            "role_id" => 1,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 19,
                            "role_id" => 1,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 20,
                            "role_id" => 1,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 21,
                            "role_id" => 1,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 22,
                            "role_id" => 1,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 23,
                            "role_id" => 1,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 24,
                            "role_id" => 1,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 25,
                            "role_id" => 1,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 26,
                            "role_id" => 1,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 27,
                            "role_id" => 1,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 28,
                            "role_id" => 1,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 29,
                            "role_id" => 1,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 30,
                            "role_id" => 1,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 31,
                            "role_id" => 1,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 32,
                            "role_id" => 1,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 33,
                            "role_id" => 1,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 34,
                            "role_id" => 1,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 35,
                            "role_id" => 1,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 36,
                            "role_id" => 1,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 37,
                            "role_id" => 1,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 38,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 39,
                            "role_id" => 1,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 40,
                            "role_id" => 1,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 41,
                            "role_id" => 1,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 42,
                            "role_id" => 1,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 43,
                            "role_id" => 1,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 44,
                            "role_id" => 1,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 45,
                            "role_id" => 1,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 46,
                            "role_id" => 1,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 47,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 48,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 49,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 57,
                            "role_id" => 1,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 58,
                            "role_id" => 1,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 59,
                            "role_id" => 1,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 60,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 61,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 62,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 63,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 64,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Снять одни чекбоксы и поставить другие',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                'RoleBpm[description]' => 'Описание описания',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][23]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][30]' => '0',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][44]' => '0',
                'RoleBpm[rolePermissions][44]' => '1',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][45]' => '1',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][46]' => '1',
                'RoleBpm[rolePermissions][47]' => '0',
                'RoleBpm[rolePermissions][47]' => '1',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][48]' => '1',
                'RoleBpm[rolePermissions][49]' => '0',
                'RoleBpm[rolePermissions][49]' => '1',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][50]' => '0',
                'RoleBpm[rolePermissions][50]' => '1',
                'RoleBpm[rolePermissions][51]' => '0',
                'RoleBpm[rolePermissions][51]' => '1',
                'RoleBpm[rolePermissions][52]' => '0',
                'RoleBpm[rolePermissions][52]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][53]' => '1',
                'RoleBpm[rolePermissions][54]' => '0',
                'RoleBpm[rolePermissions][57]' => '0',
                'RoleBpm[rolePermissions][80]' => '0',
                'RoleBpm[rolePermissions][81]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][82]' => '0',
                'RoleBpm[rolePermissions][83]' => '0',
                'RoleBpm[rolePermissions][62]' => '0',
                'RoleBpm[rolePermissions][63]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "roles" => [
                        [
                            "id" => 1,
                            "name" => "Должность",
                            "description" => "Описание описания",
                            //"created_at" => "2020-03-10 12:07:48",
                            //"updated_at" => null
                        ],
                        [
                            "id" => 2,
                            "name" => "Управление пользователями",
                            "description" => "Управление пользователями",
                            //"created_at" => "2020-03-10 12:07:48",
                            "updated_at" => null
                        ],
                    ],
                    "default_role_permissions" => [
                        [
                            "id" => 18,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 19,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 20,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 21,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 22,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 23,
                            "role_id" => 1,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 24,
                            "role_id" => 1,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 25,
                            "role_id" => 1,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 26,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 27,
                            "role_id" => 1,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 28,
                            "role_id" => 1,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 29,
                            "role_id" => 1,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 30,
                            "role_id" => 1,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 31,
                            "role_id" => 1,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 32,
                            "role_id" => 1,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 33,
                            "role_id" => 1,
                            "permission_id" => 53
                        ]
                    ]
                ]
            ]
        ]
    ],

];
