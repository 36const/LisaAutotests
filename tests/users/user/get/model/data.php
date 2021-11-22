<?php

use lisa\Constants;

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить модель активного юзера СВ проект Контент',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 6,
            'responseBody' => [
                'model' => [
                    'id' => 6,
                    'name' => 'Супервайзер Начальникович 1',
                    'login' => 'bpm_supervisor_1',
                    'email' => 'bpm_supervisor_1@rozetka.com.ua',
                    'team' => 1,
                    'parent_id' => 5,
                    'position' => 'supervisor',
                    'status' => 1,
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date' => '2020-05-19 16:36:22',
                    'drfo' => '\'000000006',
                    'positions' => [
                        1 => 'supervisor',
                    ],
                    'permissions' => [
                    ],
                    'disabledProjects' => [
                        0 => true,
                    ],
                    'access' => [
                        'teams' => [
                        ],
                        'types' => [
                        ],
                        'team_directions' => [
                        ],
                    ],
                ],
                'initialValues' => [
                    'userTeam' => Constants::ACTIVE_TEAMS,
                    'parentUser' => [
                        0 => [
                            'text' => 'Константин Куцан (kutsan.k)',
                            'value' => 4,
                        ],
                        1 => [
                            'text' => 'Супервайзер Руководько 1 (bpm_headSupervisor_1)',
                            'value' => 5,
                        ],
                        2 => [
                            'text' => 'Супервайзер Начальникович 1 (bpm_supervisor_1)',
                            'value' => 6,
                        ],
                        3 => [
                            'text' => 'Супервайзер Начальникович 2 (bpm_supervisor_2)',
                            'value' => 10,
                        ],
                        4 => [
                            'text' => 'Менеджер Контентович 1А (bpm_contentManager_1a)',
                            'value' => 11,
                        ],
                        5 => [
                            'text' => 'Менеджер Контентович 1Б (bpm_contentManager_1b)',
                            'value' => 12,
                        ],
                        6 => [
                            'text' => 'Менеджер Контентович 2А (bpm_contentManager_2a)',
                            'value' => 13,
                        ],
                        7 => [
                            'text' => 'Менеджер Контентович 2Б (bpm_contentManager_2b)',
                            'value' => 14,
                        ],
                        8 => [
                            'text' => 'Тим Лидович 1 (bpm_teamLead_1)',
                            'value' => 15,
                        ],
                        9 => [
                            'text' => 'Тим Лидович 2 (bpm_teamLead_2)',
                            'value' => 16,
                        ],
                        10 => [
                            'text' => 'Менеджер Продактович 1 (bpm_productManager_1)',
                            'value' => 17,
                        ],
                        11 => [
                            'text' => 'Менеджер Продактович 2 (bpm_productManager_2)',
                            'value' => 18,
                        ],
                        12 => [
                            'text' => 'Сео Сеошевич 1 (bpm_seo_1)',
                            'value' => 19,
                        ],
                        13 => [
                            'text' => 'Сео Сеошевич 2 (bpm_seo_2)',
                            'value' => 20,
                        ],
                        14 => [
                            'text' => 'Менеджер Фоткович 1 (bpm_photoManager_1)',
                            'value' => 21,
                        ],
                        15 => [
                            'text' => 'Менеджер Фоткович 2 (bpm_photoManager_2)',
                            'value' => 22,
                        ],
                        16 => [
                            'text' => 'Супервайзер Начальникович 3 (bpm_supervisor_3)',
                            'value' => 23,
                        ],
                        17 => [
                            'text' => 'Супервайзер Начальникович 4 (bpm_supervisor_4)',
                            'value' => 24,
                        ],
                        18 => [
                            'text' => 'Супервайзер Начальникович 5 (bpm_supervisor_5)',
                            'value' => 25,
                        ],
                        19 => [
                            'text' => 'Супервайзер Начальникович 6 (bpm_supervisor_6)',
                            'value' => 26,
                        ],
                        20 => [
                            'text' => 'Супервайзер Начальникович 7 (bpm_supervisor_7)',
                            'value' => 27,
                        ],
                        21 => [
                            'text' => 'Супервайзер Начальникович 8 (bpm_supervisor_8)',
                            'value' => 28,
                        ],
                        22 => [
                            'text' => 'Супервайзер Начальникович 9 (bpm_supervisor_9)',
                            'value' => 29,
                        ],
                        23 => [
                            'text' => 'Супервайзер Начальникович 10 (bpm_supervisor_10)',
                            'value' => 30,
                        ],
                        24 => [
                            'text' => 'Супервайзер Начальникович 11 (bpm_supervisor_11)',
                            'value' => 31,
                        ],
                        25 => [
                            'text' => 'Супервайзер Начальникович 12 (bpm_supervisor_12)',
                            'value' => 32,
                        ],
                        26 => [
                            'text' => 'Супервайзер Групповушкин 13 (bpm_supervisor_13)',
                            'value' => 33,
                        ],
                        27 => [
                            'text' => 'Супервайзер Проектенко 14 (bpm_supervisor_14)',
                            'value' => 34,
                        ],
                        28 => [
                            'text' => 'Супервайзер Категоркин 15 (bpm_supervisor_15)',
                            'value' => 35,
                        ],
                        29 => [
                            'text' => 'Супервайзер Групповушкин 16 (bpm_supervisor_16)',
                            'value' => 36,
                        ],
                        30 => [
                            'text' => 'Супервайзер Проектенко 17 (bpm_supervisor_17)',
                            'value' => 37,
                        ],
                        31 => [
                            'text' => 'Супервайзер Категоркин 18 (bpm_supervisor_18)',
                            'value' => 38,
                        ],
                        32 => [
                            'text' => 'Менеджер Модерашкин (bpm_moderation)',
                            'value' => 39,
                        ],
                    ],
                    'normalizedPermissions' => Constants::PROJECT_PERMISSIONS,
                    'projectPositions' => Constants::PROJECT_POSITIONS,
                    'projects' => [
                        0 => 'Все',
                        1 => 'Контент',
                        2 => 'Маркетинг',
                    ],
                    'subordinates' => [
                        11 => 'Менеджер Контентович 1А',
                        12 => 'Менеджер Контентович 1Б',
                    ],
                    'samePositionUsers' => [
                        10 => 'Супервайзер Начальникович 2',
                        23 => 'Супервайзер Начальникович 3',
                        24 => 'Супервайзер Начальникович 4',
                        25 => 'Супервайзер Начальникович 5',
                        26 => 'Супервайзер Начальникович 6',
                        27 => 'Супервайзер Начальникович 7',
                        28 => 'Супервайзер Начальникович 8',
                        29 => 'Супервайзер Начальникович 9',
                        30 => 'Супервайзер Начальникович 10',
                        31 => 'Супервайзер Начальникович 11',
                        32 => 'Супервайзер Начальникович 12',
                        33 => 'Супервайзер Групповушкин 13',
                        34 => 'Супервайзер Проектенко 14',
                        35 => 'Супервайзер Категоркин 15',
                        36 => 'Супервайзер Групповушкин 16',
                        37 => 'Супервайзер Проектенко 17',
                        38 => 'Супервайзер Категоркин 18',
                    ],
                    'hasUnfinishedRequests' => false,
                    'boundCategories' => true,
                    'types' => [
                        0 => [
                            'value' => 1,
                            'text' => 'Добавление новых товаров',
                        ],
                        1 => [
                            'value' => 2,
                            'text' => 'Добавление/изменение информации в существующих товарах',
                        ],
                        2 => [
                            'value' => 3,
                            'text' => 'Перенос товаров',
                        ],
                        3 => [
                            'value' => 4,
                            'text' => 'Группировка товаров',
                        ],
                        4 => [
                            'value' => 5,
                            'text' => 'Заливка фото с фотостудии',
                        ],
                        5 => [
                            'value' => 6,
                            'text' => 'Проверка скрытых товаров',
                        ],
                        6 => [
                            'value' => 7,
                            'text' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        ],
                        7 => [
                            'value' => 8,
                            'text' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        ],
                        8 => [
                            'value' => 9,
                            'text' => 'Добавление параметров/значений',
                        ],
                        9 => [
                            'value' => 10,
                            'text' => 'Изменение существующих параметров/значений',
                        ],
                        10 => [
                            'value' => 11,
                            'text' => 'Проектирование структуры',
                        ],
                        11 => [
                            'value' => 12,
                            'text' => 'Добавление новых СЦ/изменение существующих СЦ',
                        ],
                        12 => [
                            'value' => 13,
                            'text' => 'Добавление/изменение видео',
                        ],
                        13 => [
                            'value' => 14,
                            'text' => 'Добавление/изменение размерной сетки',
                        ],
                        14 => [
                            'value' => 15,
                            'text' => 'Добавление/изменение тегов',
                        ],
                    ],
                    'teamDirections' => [
                        0 => [
                            'value' => 1,
                            'text' => 'Управление отделом',
                        ],
                        1 => [
                            'value' => 2,
                            'text' => 'Работа с товарами Маркетплейса',
                        ],
                        2 => [
                            'value' => 3,
                            'text' => 'Работа с товарами Rozetka',
                        ],
                        3 => [
                            'value' => 4,
                            'text' => 'Работа с группами',
                        ],
                        4 => [
                            'value' => 5,
                            'text' => 'Работа с проектированием структур + фильтрами',
                        ],
                        5 => [
                            'value' => 6,
                            'text' => 'Работа с порталами, фат-меню, категориями',
                        ],
                    ],
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить модель заблокированного юзера ТимЛид проект Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 15,
            'responseBody' => [
                'model' => [
                    'id' => 15,
                    'name' => 'Тим Лидович 1',
                    'login' => 'bpm_teamLead_1',
                    'email' => 'bpm_teamLead_1@rozetka.com.ua',
                    'team' => 18,
                    'parent_id' => 4,
                    'position' => 'teamLead',
                    'status' => 0,
                    'create_ts' => '2020-04-13 13:15:35',
                    'created_by' => 1,
                    'change_date' => '2020-06-28 13:19:51',
                    'drfo' => '\'000000015',
                    'positions' => [
                        0 => 'teamLead',
                    ],
                    'permissions' => [
                    ],
                    'disabledProjects' => [
                        1 => true,
                        2 => true,
                    ],
                    'access' => [
                        'teams' => [
                        ],
                        'types' => [
                        ],
                        'team_directions' => [
                        ],
                    ],
                ],
                'initialValues' => [
                    'userTeam' => Constants::ACTIVE_TEAMS,
                    'parentUser' => [
                        0 => [
                            'text' => 'Константин Куцан (kutsan.k)',
                            'value' => 4,
                        ],
                        1 => [
                            'text' => 'Супервайзер Руководько 1 (bpm_headSupervisor_1)',
                            'value' => 5,
                        ],
                        2 => [
                            'text' => 'Супервайзер Начальникович 1 (bpm_supervisor_1)',
                            'value' => 6,
                        ],
                        3 => [
                            'text' => 'Супервайзер Начальникович 2 (bpm_supervisor_2)',
                            'value' => 10,
                        ],
                        4 => [
                            'text' => 'Менеджер Контентович 1А (bpm_contentManager_1a)',
                            'value' => 11,
                        ],
                        5 => [
                            'text' => 'Менеджер Контентович 1Б (bpm_contentManager_1b)',
                            'value' => 12,
                        ],
                        6 => [
                            'text' => 'Менеджер Контентович 2А (bpm_contentManager_2a)',
                            'value' => 13,
                        ],
                        7 => [
                            'text' => 'Менеджер Контентович 2Б (bpm_contentManager_2b)',
                            'value' => 14,
                        ],
                        8 => [
                            'text' => 'Тим Лидович 1 (bpm_teamLead_1)',
                            'value' => 15,
                        ],
                        9 => [
                            'text' => 'Тим Лидович 2 (bpm_teamLead_2)',
                            'value' => 16,
                        ],
                        10 => [
                            'text' => 'Менеджер Продактович 1 (bpm_productManager_1)',
                            'value' => 17,
                        ],
                        11 => [
                            'text' => 'Менеджер Продактович 2 (bpm_productManager_2)',
                            'value' => 18,
                        ],
                        12 => [
                            'text' => 'Сео Сеошевич 1 (bpm_seo_1)',
                            'value' => 19,
                        ],
                        13 => [
                            'text' => 'Сео Сеошевич 2 (bpm_seo_2)',
                            'value' => 20,
                        ],
                        14 => [
                            'text' => 'Менеджер Фоткович 1 (bpm_photoManager_1)',
                            'value' => 21,
                        ],
                        15 => [
                            'text' => 'Менеджер Фоткович 2 (bpm_photoManager_2)',
                            'value' => 22,
                        ],
                        16 => [
                            'text' => 'Супервайзер Начальникович 3 (bpm_supervisor_3)',
                            'value' => 23,
                        ],
                        17 => [
                            'text' => 'Супервайзер Начальникович 4 (bpm_supervisor_4)',
                            'value' => 24,
                        ],
                        18 => [
                            'text' => 'Супервайзер Начальникович 5 (bpm_supervisor_5)',
                            'value' => 25,
                        ],
                        19 => [
                            'text' => 'Супервайзер Начальникович 6 (bpm_supervisor_6)',
                            'value' => 26,
                        ],
                        20 => [
                            'text' => 'Супервайзер Начальникович 7 (bpm_supervisor_7)',
                            'value' => 27,
                        ],
                        21 => [
                            'text' => 'Супервайзер Начальникович 8 (bpm_supervisor_8)',
                            'value' => 28,
                        ],
                        22 => [
                            'text' => 'Супервайзер Начальникович 9 (bpm_supervisor_9)',
                            'value' => 29,
                        ],
                        23 => [
                            'text' => 'Супервайзер Начальникович 10 (bpm_supervisor_10)',
                            'value' => 30,
                        ],
                        24 => [
                            'text' => 'Супервайзер Начальникович 11 (bpm_supervisor_11)',
                            'value' => 31,
                        ],
                        25 => [
                            'text' => 'Супервайзер Начальникович 12 (bpm_supervisor_12)',
                            'value' => 32,
                        ],
                        26 => [
                            'text' => 'Супервайзер Групповушкин 13 (bpm_supervisor_13)',
                            'value' => 33,
                        ],
                        27 => [
                            'text' => 'Супервайзер Проектенко 14 (bpm_supervisor_14)',
                            'value' => 34,
                        ],
                        28 => [
                            'text' => 'Супервайзер Категоркин 15 (bpm_supervisor_15)',
                            'value' => 35,
                        ],
                        29 => [
                            'text' => 'Супервайзер Групповушкин 16 (bpm_supervisor_16)',
                            'value' => 36,
                        ],
                        30 => [
                            'text' => 'Супервайзер Проектенко 17 (bpm_supervisor_17)',
                            'value' => 37,
                        ],
                        31 => [
                            'text' => 'Супервайзер Категоркин 18 (bpm_supervisor_18)',
                            'value' => 38,
                        ],
                        32 => [
                            'text' => 'Менеджер Модерашкин (bpm_moderation)',
                            'value' => 39,
                        ],
                    ],
                    'normalizedPermissions' => Constants::PROJECT_PERMISSIONS,
                    'projectPositions' => Constants::PROJECT_POSITIONS,
                    'projects' => [
                        0 => 'Все',
                        1 => 'Контент',
                        2 => 'Маркетинг',
                    ],
                    'subordinates' => [
                    ],
                    'samePositionUsers' => [
                        16 => 'Тим Лидович 2',
                    ],
                    'hasUnfinishedRequests' => false,
                    'boundCategories' => false,
                    'types' => [
                        0 => [
                            'value' => 1,
                            'text' => 'Добавление новых товаров',
                        ],
                        1 => [
                            'value' => 2,
                            'text' => 'Добавление/изменение информации в существующих товарах',
                        ],
                        2 => [
                            'value' => 3,
                            'text' => 'Перенос товаров',
                        ],
                        3 => [
                            'value' => 4,
                            'text' => 'Группировка товаров',
                        ],
                        4 => [
                            'value' => 5,
                            'text' => 'Заливка фото с фотостудии',
                        ],
                        5 => [
                            'value' => 6,
                            'text' => 'Проверка скрытых товаров',
                        ],
                        6 => [
                            'value' => 7,
                            'text' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        ],
                        7 => [
                            'value' => 8,
                            'text' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        ],
                        8 => [
                            'value' => 9,
                            'text' => 'Добавление параметров/значений',
                        ],
                        9 => [
                            'value' => 10,
                            'text' => 'Изменение существующих параметров/значений',
                        ],
                        10 => [
                            'value' => 11,
                            'text' => 'Проектирование структуры',
                        ],
                        11 => [
                            'value' => 12,
                            'text' => 'Добавление новых СЦ/изменение существующих СЦ',
                        ],
                        12 => [
                            'value' => 13,
                            'text' => 'Добавление/изменение видео',
                        ],
                        13 => [
                            'value' => 14,
                            'text' => 'Добавление/изменение размерной сетки',
                        ],
                        14 => [
                            'value' => 15,
                            'text' => 'Добавление/изменение тегов',
                        ],
                    ],
                    'teamDirections' => [
                        0 => [
                            'value' => 1,
                            'text' => 'Управление отделом',
                        ],
                        1 => [
                            'value' => 2,
                            'text' => 'Работа с товарами Маркетплейса',
                        ],
                        2 => [
                            'value' => 3,
                            'text' => 'Работа с товарами Rozetka',
                        ],
                        3 => [
                            'value' => 4,
                            'text' => 'Работа с группами',
                        ],
                        4 => [
                            'value' => 5,
                            'text' => 'Работа с проектированием структур + фильтрами',
                        ],
                        5 => [
                            'value' => 6,
                            'text' => 'Работа с порталами, фат-меню, категориями',
                        ],
                    ],
                ],
            ],
        ]
    ],

];
