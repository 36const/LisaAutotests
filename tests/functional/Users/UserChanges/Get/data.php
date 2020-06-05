<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница истории изменений пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Должность пользователя (position)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "admin"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "headSupervisor"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-29 13:20:16"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "bpm_contentManager_1a"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Руководитель (parent_id)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "6. Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "23. Супервайзер Начальникович 3"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-05-14 18:37:52"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "bpm_contentManager_1a"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Cтатус пользователя (status)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-03-11 13:25:33"
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
            'description' => 'Cтраница истории изменений c сортировкой по ID пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=changed_user_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "kutsan.k	"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "kutsan.k	"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Просмотр заявок команды (requestViewTeamRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-25 11:36:14"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "bpm_contentManager_1a"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Cтатус пользователя (status)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-03-11 13:25:33"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "35"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "julia   "
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Обновление полей заявок (requestUpdate)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-03-20 11:48:15"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Cтраница истории изменений c сортировкой по логину пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=changed_user_login',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_contentManager_1a"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Cтатус пользователя (status)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-03-11 13:25:33"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "bpm_productManager_1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (requestUpdateFatPortalCat)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-05-15 11:13:23"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Просмотр заявок команды (requestViewTeamRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-05-25 11:36:14"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Cтраница истории изменений c обратной сортировкой по ID внесшего изменения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-changer_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "31"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_supervisor_11"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Команда пользователя (team)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-04-13 16:15:41"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Просмотр заявок команды (requestViewTeamRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-05-25 11:36:14"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "bpm_productManager_1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Редактирование коэфициентов (coefUpdate)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-05-15 09:28:14"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Cтраница истории изменений c обратной сортировкой по логину внесшего изменения	',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-changer_login',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_contentManager_1b"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Просмотр заявок отдела модерации (viewSplitterModerationRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-08 13:04:03"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "bpm_productManager_1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Редактирование коэфициентов (coefUpdate)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-05-15 09:28:14"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "31"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "bpm_supervisor_11"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Команда пользователя (team)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-04-13 16:15:41"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Cтраница истории изменений c сортировкой по названию поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=changed_field',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Блокирование пользователей (blockUser)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-29 13:18:09"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "35"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "julia"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Обновление полей заявок (requestUpdate)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-03-20 11:48:15"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "bpm_contentManager_1b"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Просмотр заявок отдела модерации (viewSplitterModerationRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-05-08 13:04:03"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Cтраница истории изменений c сортировкой по старому значению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=old_value',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_contentManager_1b"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Просмотр заявок отдела модерации (viewSplitterModerationRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-08 13:04:03"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "bpm_productManager_1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Просмотр своих заявок (requestViewOwnRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-05-15 10:20:05"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Должность пользователя (position)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "admin"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "headSupervisor"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-05-29 13:20:16"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Cтраница истории изменений c обратной сортировкой по новому значению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-new_value',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Должность пользователя (position)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "admin"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "headSupervisor"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-05-29 13:20:16"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "bpm_productManager_1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Редактирование коэфициентов (coefUpdate)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-05-29 13:18:48"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "bpm_supervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "В работе	-> Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-04-17 17:24:35"
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
            'description' => 'Cтраница истории изменений c сортировкой по дате',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=date',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Логин пользователя"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "ID внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Логин внесшего изменения"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Название поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Старое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[7]",
                            "value" => "Новое значение атрибута"
                        ],
                        [
                            "selector" => "//thead/tr/th[8]",
                            "value" => "Дата"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "bpm_contentManager_1a"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Cтатус пользователя (status)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[8]",
                            "value" => "2020-03-11 13:25:33"
                        ],
                    ],
                    "10" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "bpm_contentManager_1b"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "kutsan.k"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]",
                            "value" => "Просмотр заявок отдела модерации (viewSplitterModerationRequests)"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[6]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[7]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[8]",
                            "value" => "2020-05-08 13:04:03"
                        ],
                    ],
                    "20" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "bpm_headSupervisor_1"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]",
                            "value" => "Должность пользователя (position)"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[6]",
                            "value" => "admin"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[7]",
                            "value" => "headSupervisor"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[8]",
                            "value" => "2020-05-29 13:20:16"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],


];
