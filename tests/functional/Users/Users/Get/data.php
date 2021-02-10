<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница пользователей',
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
            'description' => 'Страница пользователей с фильтром по ID',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=4&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по имени',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=Куцан&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по логину',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=kutsan&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по несуществующей команде',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=14&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=4']",
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по несуществующей должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=supervisor&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=4']",
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по ДРФО',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=%27000000005&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=4']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по дате создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=2020-05-18+00%3A00%3A00to2020-05-20+23%3A59%3A00&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=',
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
            'description' => 'Страница пользователей с фильтром по руководителю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=4&UserSearch[change_date]=&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=4']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по дате последнего обновления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=2020-07-01+00%3A00%3A00to2020-07-07+23%3A59%3A00&UserSearch[status]=',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=4']",
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=5']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Страница пользователей с фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?UserSearch[id]=&UserSearch[name]=&UserSearch[login]=&UserSearch[team]=&UserSearch[position]=&UserSearch[drfo]=&UserSearch[create_ts]=&UserSearch[parent_id]=&UserSearch[change_date]=&UserSearch[status]=0',
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
                            "selector" => "//tbody//a[@href='/bpm/user-changes?UserChangesSearch[changed_user_id]=4']",
                        ],
                    ],
                ]
            ]
        ]
    ],

];
