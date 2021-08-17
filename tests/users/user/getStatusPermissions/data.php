<?php

use lisa\UsersTester;

return [
    'case1_2' => [
        'setting' => [
            'description' => '1 -> 2 transferWaitCheckToInCheck',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_2.php',
        'provider_data' => [
            'url' => '/request/list/new',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(1),
                [
                    'new' => [
                        'label' => 'Новые',
                        'visible' => true,
                        'dialogs' => [
                            1 => [
                                'component' => 'Reason',
                                'title' => 'На доработку',
                                'visible' => true,
                                'targetStatus' => 3,
                                'action' => 'change-reason',
                                'icon' => 'mdiPencilOutline',
                                'order' => 2,
                                'currentStatus' => 1,
                            ],
                            2 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 3,
                                'currentStatus' => 1,
                            ],
                            3 => [
                                'component' => 'Appoint',
                                'title' => 'Назначить исполнителя',
                                'visible' => true,
                                'url' => '/user/managers',
                                'userTeam' => 17,
                                'prompt' => 'Поиск исполнителя...',
                                'action' => 'appoint-manager',
                                'icon' => 'mdiAccountCircle',
                                'order' => 4,
                                'currentStatus' => 1,
                            ],
                            4 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 5,
                                'currentStatus' => 1,
                            ],
                            5 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 6,
                                'currentStatus' => 1,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                1 => [
                    'component' => 'Reason',
                    'title' => 'На доработку',
                    'visible' => true,
                    'targetStatus' => 3,
                    'action' => 'change-reason',
                    'icon' => 'mdiPencilOutline',
                    'currentStatus' => 1,
                ],
                2 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 1,
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Назначить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 1,
                ],
                4 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 1,
                ],
                5 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 1,
                ],
            ],
        ]
    ],

    'case1_3' => [
        'setting' => [
            'description' => '1 -> 3 transferWaitCheckToRequireChange',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_3.php',
        'provider_data' => [
            'url' => '/request/list/new',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(1),
                [
                    'new' => [
                        'label' => 'Новые',
                        'visible' => true,
                        'dialogs' => [
                            0 => [
                                'component' => 'Confirm',
                                'title' => 'Готова для распределения',
                                'visible' => true,
                                'action' => 'for-check',
                                'icon' => 'mdiMagnify',
                                'order' => 1,
                                'currentStatus' => 1,
                            ],
                            2 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 3,
                                'currentStatus' => 1,
                            ],
                            3 => [
                                'component' => 'Appoint',
                                'title' => 'Назначить исполнителя',
                                'visible' => true,
                                'url' => '/user/managers',
                                'userTeam' => 17,
                                'prompt' => 'Поиск исполнителя...',
                                'action' => 'appoint-manager',
                                'icon' => 'mdiAccountCircle',
                                'order' => 4,
                                'currentStatus' => 1,
                            ],
                            4 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 5,
                                'currentStatus' => 1,
                            ],
                            5 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 6,
                                'currentStatus' => 1,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'Готова для распределения',
                    'visible' => true,
                    'action' => 'for-check',
                    'icon' => 'mdiMagnify',
                    'currentStatus' => 1,
                ],
                2 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 1,
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Назначить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 1,
                ],
                4 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 1,
                ],
                5 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 1,
                ],
            ],
        ],
    ],

    'case1_4' => [
        'setting' => [
            'description' => '1 -> 4 transferWaitCheckToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_4.php',
        'provider_data' => [
            'url' => '/request/list/new',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(1),
                [
                    'new' => [
                        'label' => 'Новые',
                        'visible' => true,
                        'dialogs' => [
                            0 => [
                                'component' => 'Confirm',
                                'title' => 'Готова для распределения',
                                'visible' => true,
                                'action' => 'for-check',
                                'icon' => 'mdiMagnify',
                                'order' => 1,
                                'currentStatus' => 1,
                            ],
                            1 => [
                                'component' => 'Reason',
                                'title' => 'На доработку',
                                'visible' => true,
                                'targetStatus' => 3,
                                'action' => 'change-reason',
                                'icon' => 'mdiPencilOutline',
                                'order' => 2,
                                'currentStatus' => 1,
                            ],
                            3 => [
                                'component' => 'Appoint',
                                'title' => 'Назначить исполнителя',
                                'visible' => true,
                                'url' => '/user/managers',
                                'userTeam' => 17,
                                'prompt' => 'Поиск исполнителя...',
                                'action' => 'appoint-manager',
                                'icon' => 'mdiAccountCircle',
                                'order' => 4,
                                'currentStatus' => 1,
                            ],
                            4 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 5,
                                'currentStatus' => 1,
                            ],
                            5 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 6,
                                'currentStatus' => 1,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'Готова для распределения',
                    'visible' => true,
                    'action' => 'for-check',
                    'icon' => 'mdiMagnify',
                    'currentStatus' => 1,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'На доработку',
                    'visible' => true,
                    'targetStatus' => 3,
                    'action' => 'change-reason',
                    'icon' => 'mdiPencilOutline',
                    'currentStatus' => 1,
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Назначить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 1,
                ],
                4 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 1,
                ],
                5 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 1,
                ],
            ],
        ]
    ],

    'case1_5' => [
        'setting' => [
            'description' => '1 -> 5 transferWaitCheckToWaitWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_5.php',
        'provider_data' => [
            'url' => '/request/list/new',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(1),
                [
                    'new' => [
                        'label' => 'Новые',
                        'visible' => true,
                        'dialogs' => [
                            0 => [
                                'component' => 'Confirm',
                                'title' => 'Готова для распределения',
                                'visible' => true,
                                'action' => 'for-check',
                                'icon' => 'mdiMagnify',
                                'order' => 1,
                                'currentStatus' => 1,
                            ],
                            1 => [
                                'component' => 'Reason',
                                'title' => 'На доработку',
                                'visible' => true,
                                'targetStatus' => 3,
                                'action' => 'change-reason',
                                'icon' => 'mdiPencilOutline',
                                'order' => 2,
                                'currentStatus' => 1,
                            ],
                            2 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 3,
                                'currentStatus' => 1,
                            ],
                            4 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 5,
                                'currentStatus' => 1,
                            ],
                            5 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 6,
                                'currentStatus' => 1,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'Готова для распределения',
                    'visible' => true,
                    'action' => 'for-check',
                    'icon' => 'mdiMagnify',
                    'currentStatus' => 1,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'На доработку',
                    'visible' => true,
                    'targetStatus' => 3,
                    'action' => 'change-reason',
                    'icon' => 'mdiPencilOutline',
                    'currentStatus' => 1,
                ],
                2 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 1,
                ],
                4 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 1,
                ],
                5 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 1,
                ],
            ],
        ]
    ],

    'case2_3' => [
        'setting' => [
            'description' => '2 -> 3 transferInCheckToRequireChange',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_3.php',
        'provider_data' => [
            'url' => '/request/list/in-check',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(2),
                [
                    'in-check' => [
                        'label' => 'Готовы для распределения',
                        'visible' => true,
                        'dialogs' => [
                            1 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 8,
                                'currentStatus' => 2,
                            ],
                            2 => [
                                'component' => 'Appoint',
                                'title' => 'Назначить исполнителя',
                                'visible' => true,
                                'url' => '/user/managers',
                                'userTeam' => 17,
                                'prompt' => 'Поиск исполнителя...',
                                'action' => 'appoint-manager',
                                'icon' => 'mdiAccountCircle',
                                'order' => 9,
                                'currentStatus' => 2,
                            ],
                            3 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 10,
                                'currentStatus' => 2,
                            ],
                            4 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 11,
                                'currentStatus' => 2,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 2,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Назначить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 2,
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 2,
                ],
                4 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 2,
                ],
            ],
        ]
    ],

    'case2_4' => [
        'setting' => [
            'description' => '2 -> 4 transferInCheckToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_4.php',
        'provider_data' => [
            'url' => '/request/list/in-check',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(2),
                [
                    'in-check' => [
                        'label' => 'Готовы для распределения',
                        'visible' => true,
                        'dialogs' => [
                            0 => [
                                'component' => 'Reason',
                                'title' => 'На доработку',
                                'visible' => true,
                                'targetStatus' => 3,
                                'action' => 'change-reason',
                                'icon' => 'mdiPencilOutline',
                                'order' => 7,
                                'currentStatus' => 2,
                            ],
                            2 => [
                                'component' => 'Appoint',
                                'title' => 'Назначить исполнителя',
                                'visible' => true,
                                'url' => '/user/managers',
                                'userTeam' => 17,
                                'prompt' => 'Поиск исполнителя...',
                                'action' => 'appoint-manager',
                                'icon' => 'mdiAccountCircle',
                                'order' => 9,
                                'currentStatus' => 2,
                            ],
                            3 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 10,
                                'currentStatus' => 2,
                            ],
                            4 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 11,
                                'currentStatus' => 2,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'На доработку',
                    'visible' => true,
                    'targetStatus' => 3,
                    'action' => 'change-reason',
                    'icon' => 'mdiPencilOutline',
                    'currentStatus' => 2,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Назначить исполнителя',
                    'visible' => true,
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'icon' => 'mdiAccountCircle',
                    'currentStatus' => 2,
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 2,
                ],
                4 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 2,
                ],
            ],
        ]
    ],

    'case2_5' => [
        'setting' => [
            'description' => '2 -> 5 transferInCheckToWaitWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_5.php',
        'provider_data' => [
            'url' => '/request/list/in-check',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(2),
                [
                    'in-check' => [
                        'label' => 'Готовы для распределения',
                        'visible' => true,
                        'dialogs' => [
                            0 => [
                                'component' => 'Reason',
                                'title' => 'На доработку',
                                'visible' => true,
                                'targetStatus' => 3,
                                'action' => 'change-reason',
                                'icon' => 'mdiPencilOutline',
                                'order' => 7,
                                'currentStatus' => 2,
                            ],
                            1 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 8,
                                'currentStatus' => 2,
                            ],
                            3 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 10,
                                'currentStatus' => 2,
                            ],
                            4 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 11,
                                'currentStatus' => 2,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'На доработку',
                    'visible' => true,
                    'targetStatus' => 3,
                    'action' => 'change-reason',
                    'icon' => 'mdiPencilOutline',
                    'currentStatus' => 2,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 2,
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 2,
                ],
                4 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 2,
                ],
            ],
        ]
    ],

    'case3_1' => [
        'setting' => [
            'description' => '3 -> 1 transferRequireChangeToWaitCheck',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3_1.php',
        'provider_data' => [
            'url' => '/request/list/require-changes',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(3),
                [
                    'require-changes' => [
                        'label' => 'На доработке',
                        'visible' => true,
                        'dialogs' => [
                            0 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 12,
                                'currentStatus' => 3,
                            ],
                            1 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 14,
                                'currentStatus' => 3,
                            ],
                            2 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 13,
                                'currentStatus' => 3,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 3,
                ],
                1 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 3,
                ],
                3 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 3,
                ],
            ],
        ]
    ],

    'case3_4' => [
        'setting' => [
            'description' => '3 -> 4 transferRequireChangeToWaitCheck',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3_4.php',
        'provider_data' => [
            'url' => '/request/list/require-changes',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(3),
                [
                    'require-changes' => [
                        'label' => 'На доработке',
                        'visible' => true,
                        'dialogs' => [
                            0 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 12,
                                'currentStatus' => 3,
                            ],
                            1 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 13,
                                'currentStatus' => 3,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 3,
                ],
                1 => [
                    'action' => 'change-reason',
                    'component' => 'Reason',
                    'currentStatus' => 3,
                    'icon' => 'mdiArrowLeftBoldOutline',
                    'targetStatus' => 1,
                    'title' => 'Вернуть в новые',
                    'visible' => true,
                    'withoutReason' => true,
                ],
                2 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 3,
                ],
            ],
        ]
    ],

    'case4_0' => [
        'setting' => [
            'description' => '4 - declined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4_0.php',
        'provider_data' => [
            'url' => '/request/list/declined',
            'tableMassButtons' => UsersTester::tableMassButtons(4),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 4,
                ],
                1 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 4,
                ],
            ],
        ]
    ],

    'case5_4' => [
        'setting' => [
            'description' => '5 -> 4 transferWaitWorkToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_4.php',
        'provider_data' => [
            'url' => '/request/list/wait-work',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(5),
                [
                    'wait-work' => [
                        'label' => 'Ожидают взятия в работу',
                        'dialogs' => [
                            0 => [
                                'component' => 'Confirm',
                                'title' => 'В работу',
                                'visible' => true,
                                'action' => 'to-work',
                                'icon' => 'mdiCog',
                                'order' => 15,
                                'currentStatus' => 5,
                            ],
                            1 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 16,
                                'currentStatus' => 5,
                            ],
                            2 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 17,
                                'currentStatus' => 5,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'В работу',
                    'visible' => true,
                    'action' => 'to-work',
                    'icon' => 'mdiCog',
                    'currentStatus' => 5,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 5,
                ],
                3 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 5,
                ],
            ],
        ]
    ],

    'case5_6' => [
        'setting' => [
            'description' => '5 -> 6 transferWaitWorkToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_6.php',
        'provider_data' => [
            'url' => '/request/list/wait-work',
            //массовая отмена в статусе 5 невозможна в любом случае
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(5),
                [
                    'wait-work' => [
                        'label' => 'Ожидают взятия в работу',
                        'dialogs' => [
                            1 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 16,
                                'currentStatus' => 5,
                            ],
                            2 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 17,
                                'currentStatus' => 5,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 5,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 5,
                ],
                3 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 5,
                ],
            ],
        ]
    ],

    'case6_4' => [
        'setting' => [
            'description' => '6 -> 4 transferInWorkToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_4.php',
        'provider_data' => [
            'url' => '/request/list/in-work',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(6),
                [
                    'in-work' => [
                        'label' => 'В работе',
                        'dialogs' => [
                            0 => [
                                'component' => 'Reason',
                                'title' => 'Ожидать',
                                'visible' => true,
                                'targetStatus' => 7,
                                'action' => 'change-reason',
                                'icon' => 'mdiTimerSand',
                                'order' => 18,
                                'currentStatus' => 6,
                            ],
                            2 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 20,
                                'currentStatus' => 6,
                            ],
                            3 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 21,
                                'currentStatus' => 6,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'Ожидать',
                    'visible' => true,
                    'targetStatus' => 7,
                    'action' => 'change-reason',
                    'icon' => 'mdiTimerSand',
                    'currentStatus' => 6,
                ],
                2 => [
                    'component' => 'Complete',
                    'title' => 'Частично выполнена',
                    'visible' => true,
                    'targetStatus' => 8,
                    'icon' => 'mdiBookmarkCheckOutline',
                    'currentStatus' => 6,
                ],
                3 => [
                    'component' => 'Complete',
                    'title' => 'Выполнена',
                    'visible' => true,
                    'targetStatus' => 9,
                    'icon' => 'mdiCheckBold',
                    'withoutReason' => true,
                    'currentStatus' => 6,
                ],
                5 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 6,
                ],
                6 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 6,
                ],
                7 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 6,
                ],
            ],
        ]
    ],

    'case6_5' => [
        'setting' => [
            'description' => '6 -> 5 transferInWorkToWaitWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_5.php',
        'provider_data' => [
            'url' => '/request/list/in-work',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(6),
                [
                    'in-work' => [
                        'label' => 'В работе',
                        'dialogs' => [
                            0 => [
                                'component' => 'Reason',
                                'title' => 'Ожидать',
                                'visible' => true,
                                'targetStatus' => 7,
                                'action' => 'change-reason',
                                'icon' => 'mdiTimerSand',
                                'order' => 18,
                                'currentStatus' => 6,
                            ],
                            1 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 19,
                                'currentStatus' => 6,
                            ],
                            2 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 20,
                                'currentStatus' => 6,
                            ],
                            3 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 21,
                                'currentStatus' => 6,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'Ожидать',
                    'visible' => true,
                    'targetStatus' => 7,
                    'action' => 'change-reason',
                    'icon' => 'mdiTimerSand',
                    'currentStatus' => 6,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 6,
                ],
                2 => [
                    'component' => 'Complete',
                    'title' => 'Частично выполнена',
                    'visible' => true,
                    'targetStatus' => 8,
                    'icon' => 'mdiBookmarkCheckOutline',
                    'currentStatus' => 6,
                ],
                3 => [
                    'component' => 'Complete',
                    'title' => 'Выполнена',
                    'visible' => true,
                    'targetStatus' => 9,
                    'icon' => 'mdiCheckBold',
                    'withoutReason' => true,
                    'currentStatus' => 6,
                ],
                6 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 6,
                ],
                7 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 6,
                ],
            ],
        ]
    ],

    'case6_7' => [
        'setting' => [
            'description' => '6 -> 7 transferInWorkToOnHold',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_7.php',
        'provider_data' => [
            'url' => '/request/list/in-work',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(6),
                [
                    'in-work' => [
                        'label' => 'В работе',
                        'dialogs' => [
                            1 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 19,
                                'currentStatus' => 6,
                            ],
                            2 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 20,
                                'currentStatus' => 6,
                            ],
                            3 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 21,
                                'currentStatus' => 6,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 6,
                ],
                2 => [
                    'component' => 'Complete',
                    'title' => 'Частично выполнена',
                    'visible' => true,
                    'targetStatus' => 8,
                    'icon' => 'mdiBookmarkCheckOutline',
                    'currentStatus' => 6,
                ],
                3 => [
                    'component' => 'Complete',
                    'title' => 'Выполнена',
                    'visible' => true,
                    'targetStatus' => 9,
                    'icon' => 'mdiCheckBold',
                    'withoutReason' => true,
                    'currentStatus' => 6,
                ],
                5 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 6,
                ],
                6 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 6,
                ],
                7 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 6,
                ],
            ],
        ]
    ],

    'case6_8' => [
        'setting' => [
            'description' => '6 -> 8 transferInWorkToPartialComplete',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_8.php',
        'provider_data' => [
            'url' => '/request/list/in-work',
            'tableMassButtons' => UsersTester::tableMassButtons(6),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'Ожидать',
                    'visible' => true,
                    'targetStatus' => 7,
                    'action' => 'change-reason',
                    'icon' => 'mdiTimerSand',
                    'currentStatus' => 6,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 6,
                ],
                3 => [
                    'component' => 'Complete',
                    'title' => 'Выполнена',
                    'visible' => true,
                    'targetStatus' => 9,
                    'icon' => 'mdiCheckBold',
                    'withoutReason' => true,
                    'currentStatus' => 6,
                ],
                5 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 6,
                ],
                6 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 6,
                ],
                7 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 6,
                ],
            ],
        ]
    ],

    'case6_9' => [
        'setting' => [
            'description' => '6 -> 9 transferInWorkToCompleted',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9.php',
        'provider_data' => [
            'url' => '/request/list/in-work',
            'tableMassButtons' => UsersTester::tableMassButtons(6),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'Ожидать',
                    'visible' => true,
                    'targetStatus' => 7,
                    'action' => 'change-reason',
                    'icon' => 'mdiTimerSand',
                    'currentStatus' => 6,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 6,
                ],
                2 => [
                    'component' => 'Complete',
                    'title' => 'Частично выполнена',
                    'visible' => true,
                    'targetStatus' => 8,
                    'icon' => 'mdiBookmarkCheckOutline',
                    'currentStatus' => 6,
                ],
                5 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 6,
                ],
                6 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 6,
                ],
                7 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 6,
                ],
            ],
        ]
    ],

    'case6_before_correct' => [
        'setting' => [
            'description' => '6 before correction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_before_correct.php',
        'provider_data' => [
            'url' => '/request/list/in-work',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(6),
                [
                    'in-work' => [
                        'label' => 'В работе',
                        'dialogs' => [
                            0 => [
                                'component' => 'Reason',
                                'title' => 'Ожидать',
                                'visible' => true,
                                'targetStatus' => 7,
                                'action' => 'change-reason',
                                'icon' => 'mdiTimerSand',
                                'order' => 18,
                                'currentStatus' => 6,
                            ],
                            1 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 19,
                                'currentStatus' => 6,
                            ],
                            2 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 20,
                                'currentStatus' => 6,
                            ],
                            3 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 21,
                                'currentStatus' => 6,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'Ожидать',
                    'visible' => true,
                    'targetStatus' => 7,
                    'action' => 'change-reason',
                    'icon' => 'mdiTimerSand',
                    'currentStatus' => 6,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 6,
                ],
                4 => [
                    'component' => 'Button',
                    'title' => 'Внести исправления',
                    'visible' => true,
                    'action' => '/request/correction/1',
                    'icon' => 'mdiCog',
                    'currentStatus' => 6,
                ],
                5 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 6,
                ],
                6 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 6,
                ],
                7 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 6,
                ],
            ],
            'toCorrectionButtons' => [
                67 => [
                    'id' => 1,
                    'field_value_id' => 67,
                    'error' => 'Орфографические и грамматические ошибки, опечатки, отсутствие пробелов, в названии, текстовых параметрах, описании, отсутствие <br> в текстовых параметрах',
                    'errorsCount' => 10,
                    'itemsCount' => 10,
                    'comment' => 'comment',
                    'status' => 0,
                    'correction_date' => NULL,
                ],
            ],
        ]
    ],

    'case6_after_correct' => [
        'setting' => [
            'description' => '6 after correction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_after_correct.php',
        'provider_data' => [
            'url' => '/request/list/in-work',
            'tableMassButtons' => array_replace(
                UsersTester::tableMassButtons(6),
                [
                    'in-work' => [
                        'label' => 'В работе',
                        'dialogs' => [
                            0 => [
                                'component' => 'Reason',
                                'title' => 'Ожидать',
                                'visible' => true,
                                'targetStatus' => 7,
                                'action' => 'change-reason',
                                'icon' => 'mdiTimerSand',
                                'order' => 18,
                                'currentStatus' => 6,
                            ],
                            1 => [
                                'component' => 'Reason',
                                'title' => 'Отменить',
                                'visible' => true,
                                'targetStatus' => 4,
                                'action' => 'change-reason',
                                'icon' => 'mdiCloseThick',
                                'order' => 19,
                                'currentStatus' => 6,
                            ],
                            2 => [
                                'component' => 'Appoint',
                                'title' => 'Изменить супервайзера',
                                'visible' => true,
                                'url' => '/user/supervisors',
                                'prompt' => 'Поиск супервизора...',
                                'action' => 'appoint-supervisor',
                                'icon' => 'mdiAccountCowboyHat',
                                'order' => 20,
                                'currentStatus' => 6,
                            ],
                            3 => [
                                'component' => 'MassEdit',
                                'title' => 'Пакетное редактирование',
                                'visible' => true,
                                'order' => 21,
                                'currentStatus' => 6,
                            ],
                        ],
                    ]
                ]
            ),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'Ожидать',
                    'visible' => true,
                    'targetStatus' => 7,
                    'action' => 'change-reason',
                    'icon' => 'mdiTimerSand',
                    'currentStatus' => 6,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                    'action' => 'change-reason',
                    'icon' => 'mdiCloseThick',
                    'currentStatus' => 6,
                ],
                2 => [
                    'component' => 'Complete',
                    'title' => 'Частично выполнена',
                    'visible' => true,
                    'targetStatus' => 8,
                    'icon' => 'mdiBookmarkCheckOutline',
                    'currentStatus' => 6,
                ],
                3 => [
                    'component' => 'Complete',
                    'title' => 'Выполнена',
                    'visible' => true,
                    'targetStatus' => 9,
                    'icon' => 'mdiCheckBold',
                    'withoutReason' => true,
                    'currentStatus' => 6,
                ],
                4 => [
                    'component' => 'Button',
                    'title' => 'Внести исправления',
                    'visible' => true,
                    'action' => '/request/correction/1',
                    'icon' => 'mdiCog',
                    'currentStatus' => 6,
                ],
                5 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить исполнителя',
                    'visible' => true,
                    'icon' => 'mdiAccountCircle',
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                    'action' => 'appoint-manager',
                    'currentStatus' => 6,
                ],
                6 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 6,
                ],
                7 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 6,
                ],
            ],
            'toCorrectionButtons' => [],
        ]
    ],

    'case7_6' => [
        'setting' => [
            'description' => '7 -> 6 transferOnHoldToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_6.php',
        'provider_data' => [
            'url' => '/request/list/on-hold',
            'tableMassButtons' => UsersTester::tableMassButtons(7),
            'contextAndViewButtons' => [
                1 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 7,
                ],
                2 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 7,
                ],
            ],
        ]
    ],

    'case8_6' => [
        'setting' => [
            'description' => '8 -> 6 transferPartialCompleteToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8_6.php',
        'provider_data' => [
            'url' => '/request/list/completed',
            'tableMassButtons' => UsersTester::tableMassButtons([8, 9]),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'Закрыть',
                    'visible' => true,
                    'action' => 'close',
                    'icon' => 'mdiArchive',
                    'targetStatus' => 11,
                    'requestId' => 1,
                    'hasDifficulty' => false,
                    'currentStatus' => 8,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 8,
                ],
                3 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 8,
                ],
            ],
        ]
    ],

    'case8_11' => [
        'setting' => [
            'description' => '8 -> 11 transferPartialCompleteToClosed',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8_11.php',
        'provider_data' => [
            'url' => '/request/list/completed',
            'tableMassButtons' => UsersTester::tableMassButtons([8, 9]),
            'contextAndViewButtons' => [
                1 => [
                    'component' => 'Button',
                    'title' => 'На исправление',
                    'visible' => true,
                    'icon' => 'mdiReloadAlert',
                    'action' => '/request/to-correction/1',
                    'currentStatus' => 8,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 8,
                ],
                3 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 8,
                ],
            ],
        ]
    ],

    'case9_6' => [
        'setting' => [
            'description' => '9 -> 6 transferCompletedToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6.php',
        'provider_data' => [
            'url' => '/request/list/completed',
            'tableMassButtons' => UsersTester::tableMassButtons([8, 9]),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'Закрыть',
                    'visible' => true,
                    'action' => 'close',
                    'icon' => 'mdiArchive',
                    'targetStatus' => 11,
                    'requestId' => 1,
                    'hasDifficulty' => false,
                    'currentStatus' => 9,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 9,
                ],
                3 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 9,
                ],
            ],
        ],
    ],

    'case9_11' => [
        'setting' => [
            'description' => '9 -> 11 transferCompletedToClosed',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_11.php',
        'provider_data' => [
            'url' => '/request/list/completed',
            'tableMassButtons' => UsersTester::tableMassButtons([8, 9]),
            'contextAndViewButtons' => [
                1 => [
                    'component' => 'Button',
                    'title' => 'На исправление',
                    'visible' => true,
                    'icon' => 'mdiReloadAlert',
                    'action' => '/request/to-correction/1',
                    'currentStatus' => 9,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 9,
                ],
                3 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 9,
                ],
            ],
        ]
    ],

    'case11_0' => [
        'setting' => [
            'description' => '11 - closed',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11_0.php',
        'provider_data' => [
            'url' => '/request/list/closed',
            'tableMassButtons' => UsersTester::tableMassButtons(11),
            'contextAndViewButtons' => [
                0 => [
                    'component' => 'Button',
                    'title' => 'Создать подзадачу',
                    'visible' => true,
                    'icon' => 'mdiArrangeSendBackward',
                    'action' => '/request/create?typeId=1&direction=1&id=1',
                    'currentStatus' => 11,
                ],
                1 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'icon' => 'mdiAccountCowboyHat',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                    'action' => 'appoint-supervisor',
                    'notShowInView' => true,
                    'currentStatus' => 11,
                ],
            ],
        ]
    ],

];
