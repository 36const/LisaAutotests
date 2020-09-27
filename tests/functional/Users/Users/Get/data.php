<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[9]",
                            "value" => "4. Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[11]",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[12]/a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[12]/a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по ID',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=4&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по имени',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=Куцан&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по логину',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=kutsan&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по несуществующей команде',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=14&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Администратор" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по несуществующей должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=supervisor&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Администратор" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по ДРФО',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=%27000000005&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => "4. Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Администратор" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по дате создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=2020-05-18+00%3A00%3A00to2020-05-20+23%3A59%3A00&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[9]",
                            "value" => "4. Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[11]",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[12]/a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[12]/a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по руководителю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=4&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => "4. Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Администратор" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по дате последнего обновления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=2020-07-01+00%3A00%3A00to2020-07-07+23%3A59%3A00&UserSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Администратор" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Константин Куцан'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Cтраница пользователей с фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch%5Bid%5D=&UserSearch%5Bname%5D=&UserSearch%5Blogin%5D=&UserSearch%5Bteam%5D=&UserSearch%5Bposition%5D=&UserSearch%5Bdrfo%5D=&UserSearch%5Bcreate_ts%5D=&UserSearch%5Bparent_id%5D=&UserSearch%5Bchange_date%5D=&UserSearch%5Bstatus%5D=0',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]/input[@class='select-on-check-all']",
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Имя пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Команда пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Должность пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "ДРФО"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[9]",
                            "value" => "Руководитель"
                        ],
                        [
                            "selector" => "//thead/tr/th[10]",
                            "value" => "Дата последнего обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[11]",
                            "value" => "Cтатус пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]/input[@name='selection[]']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => 'bpm_headSupervisor_1'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "'000000005"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-19 13:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[9]",
                            "value" => "4. Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[10]",
                            "value" => "2020-05-19 16:36:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[11]",
                            "value" => "Заблокированный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[12]/a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Администратор" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'kutsan.k'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "'000000004"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => '1. Система'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch%5Bchanged_user_id%5D=4']",
                        ],
                    ],
                ]
            ]
        ]
    ],

];