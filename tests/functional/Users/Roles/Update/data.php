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
                'RoleBpm[rolePermissions][101]' => '0',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][121]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][143]' => '0',
                'RoleBpm[rolePermissions][144]' => '0',
                'RoleBpm[rolePermissions][145]' => '0',
                'RoleBpm[rolePermissions][146]' => '0',
                'RoleBpm[rolePermissions][147]' => '0',
                'RoleBpm[rolePermissions][148]' => '0',
                'RoleBpm[rolePermissions][149]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][150]' => '0',
                'RoleBpm[rolePermissions][151]' => '0',
                'RoleBpm[rolePermissions][152]' => '0',
                'RoleBpm[rolePermissions][153]' => '0',
                'RoleBpm[rolePermissions][154]' => '0',
                'RoleBpm[rolePermissions][155]' => '0',
                'RoleBpm[rolePermissions][156]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][161]' => '0',
                'RoleBpm[rolePermissions][162]' => '0',
                'RoleBpm[rolePermissions][163]' => '0',
                'RoleBpm[rolePermissions][164]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
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
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][58]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][67]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][88]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "roles" => [
                        [
                            "id" => 1,
                            "name" => "Должность",
                            "description" => "Изменяшки",
                            "created_at" => "2020-03-10 12:07:48",
                            "updated_at >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 2,
                            "name" => "Управление пользователями",
                            "description" => "Управление пользователями",
                            "created_at" => "2020-03-10 12:07:48",
                            "updated_at" => null
                        ],
                    ],
                    "default_role_permissions" => [
                        [
//                            "id" => 159,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
//                            "id" => 160,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
//                            "id" => 161,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
//                            "id" => 162,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
//                            "id" => 163,
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
                'RoleBpm[rolePermissions][101]' => '0',
                'RoleBpm[rolePermissions][101]' => '1',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][10]' => '1',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][11]' => '1',
                'RoleBpm[rolePermissions][121]' => '0',
                'RoleBpm[rolePermissions][121]' => '1',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][12]' => '1',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][13]' => '1',
                'RoleBpm[rolePermissions][143]' => '0',
                'RoleBpm[rolePermissions][143]' => '1',
                'RoleBpm[rolePermissions][144]' => '0',
                'RoleBpm[rolePermissions][144]' => '1',
                'RoleBpm[rolePermissions][145]' => '0',
                'RoleBpm[rolePermissions][145]' => '1',
                'RoleBpm[rolePermissions][146]' => '0',
                'RoleBpm[rolePermissions][146]' => '1',
                'RoleBpm[rolePermissions][147]' => '0',
                'RoleBpm[rolePermissions][147]' => '1',
                'RoleBpm[rolePermissions][148]' => '0',
                'RoleBpm[rolePermissions][148]' => '1',
                'RoleBpm[rolePermissions][149]' => '0',
                'RoleBpm[rolePermissions][149]' => '1',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][14]' => '1',
                'RoleBpm[rolePermissions][150]' => '0',
                'RoleBpm[rolePermissions][150]' => '1',
                'RoleBpm[rolePermissions][151]' => '0',
                'RoleBpm[rolePermissions][151]' => '1',
                'RoleBpm[rolePermissions][152]' => '0',
                'RoleBpm[rolePermissions][152]' => '1',
                'RoleBpm[rolePermissions][153]' => '0',
                'RoleBpm[rolePermissions][153]' => '1',
                'RoleBpm[rolePermissions][154]' => '0',
                'RoleBpm[rolePermissions][154]' => '1',
                'RoleBpm[rolePermissions][155]' => '0',
                'RoleBpm[rolePermissions][155]' => '1',
                'RoleBpm[rolePermissions][156]' => '0',
                'RoleBpm[rolePermissions][156]' => '1',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][15]' => '1',
                'RoleBpm[rolePermissions][161]' => '0',
                'RoleBpm[rolePermissions][161]' => '1',
                'RoleBpm[rolePermissions][162]' => '0',
                'RoleBpm[rolePermissions][162]' => '1',
                'RoleBpm[rolePermissions][163]' => '0',
                'RoleBpm[rolePermissions][163]' => '1',
                'RoleBpm[rolePermissions][164]' => '0',
                'RoleBpm[rolePermissions][164]' => '1',
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
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][45]' => '1',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][46]' => '1',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][48]' => '1',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][4]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][53]' => '1',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][55]' => '1',
                'RoleBpm[rolePermissions][58]' => '0',
                'RoleBpm[rolePermissions][58]' => '1',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][5]' => '1',
                'RoleBpm[rolePermissions][67]' => '0',
                'RoleBpm[rolePermissions][67]' => '1',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][6]' => '1',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][7]' => '1',
                'RoleBpm[rolePermissions][88]' => '0',
                'RoleBpm[rolePermissions][88]' => '1',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][8]' => '1',
                'RoleBpm[rolePermissions][9]' => '0',
                'RoleBpm[rolePermissions][9]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "roles" => [
                        [
                            "id" => 1,
                            "name" => "Должность",
                            "description" => "Изменяшки",
                            "created_at" => "2020-03-10 12:07:48",
                            "updated_at >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 2,
                            "name" => "Управление пользователями",
                            "description" => "Управление пользователями",
                            "created_at" => "2020-03-10 12:07:48",
                            "updated_at" => null
                        ],
                    ],
                    "default_role_permissions" => [
                        [
                            //"id" => 1,
                            "role_id" => 1,
                            "permission_id" => 1
                        ],
                        [
                            //"id" => 2,
                            "role_id" => 1,
                            "permission_id" => 2
                        ],
                        [
                            //"id" => 3,
                            "role_id" => 1,
                            "permission_id" => 3
                        ],
                        [
                            //"id" => 4,
                            "role_id" => 1,
                            "permission_id" => 4
                        ],
                        [
                            //"id" => 5,
                            "role_id" => 1,
                            "permission_id" => 5
                        ],
                        [
                            //"id" => 6,
                            "role_id" => 1,
                            "permission_id" => 6
                        ],
                        [
                            //"id" => 7,
                            "role_id" => 1,
                            "permission_id" => 7
                        ],
                        [
                            //"id" => 8,
                            "role_id" => 1,
                            "permission_id" => 8
                        ],
                        [
                            //"id" => 9,
                            "role_id" => 1,
                            "permission_id" => 9
                        ],
                        [
                            //"id" => 10,
                            "role_id" => 1,
                            "permission_id" => 10
                        ],
                        [
                            //"id" => 11,
                            "role_id" => 1,
                            "permission_id" => 11
                        ],
                        [
                            //"id" => 12,
                            "role_id" => 1,
                            "permission_id" => 12
                        ],
                        [
                            //"id" => 13,
                            "role_id" => 1,
                            "permission_id" => 13
                        ],
                        [
                            //"id" => 14,
                            "role_id" => 1,
                            "permission_id" => 14
                        ],
                        [
                            //"id" => 15,
                            "role_id" => 1,
                            "permission_id" => 15
                        ],
                        [
                            //"id" => 16,
                            "role_id" => 1,
                            "permission_id" => 16
                        ],
                        [
                            //"id" => 17,
                            "role_id" => 1,
                            "permission_id" => 17
                        ],
                        [
                            //"id" => 18,
                            "role_id" => 1,
                            "permission_id" => 18
                        ],
                        [
                            //"id" => 19,
                            "role_id" => 1,
                            "permission_id" => 19
                        ],
                        [
                            //"id" => 20,
                            "role_id" => 1,
                            "permission_id" => 20
                        ],
                        [
                            //"id" => 21,
                            "role_id" => 1,
                            "permission_id" => 21
                        ],
                        [
                            //"id" => 22,
                            "role_id" => 1,
                            "permission_id" => 22
                        ],
                        [
                            //"id" => 24,
                            "role_id" => 1,
                            "permission_id" => 24
                        ],
                        [
                            //"id" => 25,
                            "role_id" => 1,
                            "permission_id" => 25
                        ],
                        [
                            //"id" => 26,
                            "role_id" => 1,
                            "permission_id" => 26
                        ],
                        [
                            //"id" => 27,
                            "role_id" => 1,
                            "permission_id" => 27
                        ],
                        [
                            //"id" => 28,
                            "role_id" => 1,
                            "permission_id" => 28
                        ],
                        [
                            //"id" => 29,
                            "role_id" => 1,
                            "permission_id" => 29
                        ],
                        [
                            //"id" => 31,
                            "role_id" => 1,
                            "permission_id" => 31
                        ],
                        [
                            //"id" => 32,
                            "role_id" => 1,
                            "permission_id" => 34
                        ],
                        [
                            //"id" => 33,
                            "role_id" => 1,
                            "permission_id" => 35
                        ],
                        [
                            //"id" => 34,
                            "role_id" => 1,
                            "permission_id" => 36
                        ],
                        [
                            //"id" => 35,
                            "role_id" => 1,
                            "permission_id" => 37
                        ],
                        [
                            //"id" => 36,
                            "role_id" => 1,
                            "permission_id" => 38
                        ],
                        [
                            //"id" => 37,
                            "role_id" => 1,
                            "permission_id" => 39
                        ],
                        [
                            //"id" => 38,
                            "role_id" => 1,
                            "permission_id" => 40
                        ],
                        [
                            //"id" => 39,
                            "role_id" => 1,
                            "permission_id" => 41
                        ],
                        [
                            //"id" => 40,
                            "role_id" => 1,
                            "permission_id" => 42
                        ],
                        [
                            //"id" => 41,
                            "role_id" => 1,
                            "permission_id" => 43
                        ],
                        [
                            //"id" => 43,
                            "role_id" => 1,
                            "permission_id" => 45
                        ],
                        [
                            //"id" => 44,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            //"id" => 46,
                            "role_id" => 1,
                            "permission_id" => 48
                        ],
                        [
                            //"id" => 51,
                            "role_id" => 1,
                            "permission_id" => 53
                        ],
                        [
                            //"id" => 53,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            //"id" => 56,
                            "role_id" => 1,
                            "permission_id" => 58
                        ],
                        [
                            //"id" => 65,
                            "role_id" => 1,
                            "permission_id" => 67
                        ],
                        [
                            //"id" => 86,
                            "role_id" => 1,
                            "permission_id" => 88
                        ],
                        [
                            //"id" => 99,
                            "role_id" => 1,
                            "permission_id" => 101
                        ],
                        [
                            //"id" => 119,
                            "role_id" => 1,
                            "permission_id" => 121
                        ],
                        [
                            //"id" => 141,
                            "role_id" => 1,
                            "permission_id" => 143
                        ],
                        [
                            //"id" => 142,
                            "role_id" => 1,
                            "permission_id" => 144
                        ],
                        [
                            //"id" => 143,
                            "role_id" => 1,
                            "permission_id" => 145
                        ],
                        [
                            //"id" => 144,
                            "role_id" => 1,
                            "permission_id" => 146
                        ],
                        [
                            //"id" => 145,
                            "role_id" => 1,
                            "permission_id" => 147
                        ],
                        [
                            //"id" => 146,
                            "role_id" => 1,
                            "permission_id" => 148
                        ],
                        [
                            //"id" => 147,
                            "role_id" => 1,
                            "permission_id" => 149
                        ],
                        [
                            //"id" => 148,
                            "role_id" => 1,
                            "permission_id" => 150
                        ],
                        [
                            //"id" => 149,
                            "role_id" => 1,
                            "permission_id" => 151
                        ],
                        [
                            //"id" => 150,
                            "role_id" => 1,
                            "permission_id" => 152
                        ],
                        [
                            //"id" => 151,
                            "role_id" => 1,
                            "permission_id" => 153
                        ],
                        [
                            //"id" => 152,
                            "role_id" => 1,
                            "permission_id" => 154
                        ],
                        [
                            //"id" => 153,
                            "role_id" => 1,
                            "permission_id" => 155
                        ],
                        [
                            //"id" => 154,
                            "role_id" => 1,
                            "permission_id" => 156
                        ],
                        [
                            //"id" => 155,
                            "role_id" => 1,
                            "permission_id" => 161
                        ],
                        [
                            //"id" => 156,
                            "role_id" => 1,
                            "permission_id" => 162
                        ],
                        [
                            //"id" => 157,
                            "role_id" => 1,
                            "permission_id" => 163
                        ],
                        [
                            //"id" => 158,
                            "role_id" => 1,
                            "permission_id" => 164
                        ],
                        [
                            //"id" => 159,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            //"id" => 160,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            //"id" => 161,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            //"id" => 162,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            //"id" => 163,
                            "role_id" => 2,
                            "permission_id" => 54
                        ]
                    ],
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
                'RoleBpm[rolePermissions][101]' => '0',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][121]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][143]' => '0',
                'RoleBpm[rolePermissions][144]' => '0',
                'RoleBpm[rolePermissions][144]' => '1',
                'RoleBpm[rolePermissions][145]' => '0',
                'RoleBpm[rolePermissions][146]' => '0',
                'RoleBpm[rolePermissions][146]' => '1',
                'RoleBpm[rolePermissions][147]' => '0',
                'RoleBpm[rolePermissions][148]' => '0',
                'RoleBpm[rolePermissions][149]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][14]' => '1',
                'RoleBpm[rolePermissions][150]' => '0',
                'RoleBpm[rolePermissions][151]' => '0',
                'RoleBpm[rolePermissions][151]' => '1',
                'RoleBpm[rolePermissions][152]' => '0',
                'RoleBpm[rolePermissions][153]' => '0',
                'RoleBpm[rolePermissions][154]' => '0',
                'RoleBpm[rolePermissions][155]' => '0',
                'RoleBpm[rolePermissions][156]' => '0',
                'RoleBpm[rolePermissions][156]' => '1',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][161]' => '0',
                'RoleBpm[rolePermissions][162]' => '0',
                'RoleBpm[rolePermissions][162]' => '1',
                'RoleBpm[rolePermissions][163]' => '0',
                'RoleBpm[rolePermissions][164]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][17]' => '1',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][18]' => '1',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][1]' => '1',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][20]' => '1',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][22]' => '1',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][26]' => '1',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][29]' => '1',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][2]' => '1',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][35]' => '1',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][38]' => '1',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][39]' => '1',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][43]' => '1',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][46]' => '1',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][58]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][5]' => '1',
                'RoleBpm[rolePermissions][67]' => '0',
                'RoleBpm[rolePermissions][67]' => '1',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][88]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "roles" => [
                        [
                            "id" => 1,
                            "name" => "Должность",
                            "description" => "Описание описания",
                            "created_at" => "2020-03-10 12:07:48",
                            "updated_at >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 2,
                            "name" => "Управление пользователями",
                            "description" => "Управление пользователями",
                            "created_at" => "2020-03-10 12:07:48",
                            "updated_at" => null
                        ],
                    ],
                    "default_role_permissions" => [
                        [
                            //"id" => 37,
                            "role_id" => 1,
                            "permission_id" => 1
                        ],
                        [
                            //"id" => 42,
                            "role_id" => 1,
                            "permission_id" => 2
                        ],
                        [
                            //"id" => 48,
                            "role_id" => 1,
                            "permission_id" => 5
                        ],
                        [
                            //"id" => 31,
                            "role_id" => 1,
                            "permission_id" => 14
                        ],
                        [
                            //"id" => 35,
                            "role_id" => 1,
                            "permission_id" => 17
                        ],
                        [
                            //"id" => 36,
                            "role_id" => 1,
                            "permission_id" => 18
                        ],
                        [
                            //"id" => 38,
                            "role_id" => 1,
                            "permission_id" => 20
                        ],
                        [
                            //"id" => 39,
                            "role_id" => 1,
                            "permission_id" => 22
                        ],
                        [
                            //"id" => 40,
                            "role_id" => 1,
                            "permission_id" => 26
                        ],
                        [
                            //"id" => 41,
                            "role_id" => 1,
                            "permission_id" => 29
                        ],
                        [
                            //"id" => 43,
                            "role_id" => 1,
                            "permission_id" => 35
                        ],
                        [
                            //"id" => 44,
                            "role_id" => 1,
                            "permission_id" => 38
                        ],
                        [
                            //"id" => 45,
                            "role_id" => 1,
                            "permission_id" => 39
                        ],
                        [
                            //"id" => 46,
                            "role_id" => 1,
                            "permission_id" => 43
                        ],
                        [
                            //"id" => 47,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            //"id" => 49,
                            "role_id" => 1,
                            "permission_id" => 67
                        ],
                        [
                            //"id" => 29,
                            "role_id" => 1,
                            "permission_id" => 144
                        ],
                        [
                            //"id" => 30,
                            "role_id" => 1,
                            "permission_id" => 146
                        ],
                        [
                            //"id" => 32,
                            "role_id" => 1,
                            "permission_id" => 151
                        ],
                        [
                            //"id" => 33,
                            "role_id" => 1,
                            "permission_id" => 156
                        ],
                        [
                            //"id" => 34,
                            "role_id" => 1,
                            "permission_id" => 162
                        ],
                        [
                            //"id" => 24,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            //"id" => 25,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            //"id" => 26,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            //"id" => 27,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            //"id" => 28,
                            "role_id" => 2,
                            "permission_id" => 54
                        ]
                    ]
                ]
            ]
        ]
    ],

];
