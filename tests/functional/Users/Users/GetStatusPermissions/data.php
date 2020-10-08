<?php

use lisa\Page\Functional\Request;

return [
    'case1_2' => [
        'setting' => [
            'description' => '1 -> 2 transferWaitCheckToInCheck',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_2.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => "//ul[@class='nav nav-tabs']//a[@href='/bpm/request/new']"],
                        ["selector" => Request::transferButton('Готова для распределения')],
                        ["selector" => Request::contextMenu('Готова для распределения')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Готова для распределения')],
                    ],
                ]
            ]
        ]
    ],

    'case1_3' => [
        'setting' => [
            'description' => '1 -> 3 transferWaitCheckToRequireChange',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_3.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Готова для распределения')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Готова для распределения')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Назначить исполнителя')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::contextMenu('На доработку')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Готова для распределения')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('На доработку')],
                    ],
                ]
            ]
        ],
    ],

    'case1_4' => [
        'setting' => [
            'description' => '1 -> 4 transferWaitCheckToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_4.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Готова для распределения')],
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Готова для распределения')],
                        ["selector" => Request::contextMenu('На доработку')],
                        ["selector" => Request::contextMenu('Назначить исполнителя')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::contextMenu('Отменить')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Готова для распределения')],
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                    ],
                ]
            ]
        ]
    ],

    'case1_5' => [
        'setting' => [
            'description' => '1 -> 5 transferWaitCheckToWaitWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_5.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Готова для распределения')],
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Готова для распределения')],
                        ["selector" => Request::contextMenu('На доработку')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::contextMenu('Назначить исполнителя')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Готова для распределения')],
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                    ],
                ]
            ]
        ]
    ],

    'case2_3' => [
        'setting' => [
            'description' => '2 -> 3 transferInCheckToRequireChange',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_3.php',
        'provider_data' => [
            "url" => '/bpm/request/in-check',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Назначить исполнителя')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::contextMenu('На доработку')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('На доработку')],
                    ],
                ]
            ]
        ]
    ],

    'case2_4' => [
        'setting' => [
            'description' => '2 -> 4 transferInCheckToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_4.php',
        'provider_data' => [
            "url" => '/bpm/request/in-check',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Назначить исполнителя')],
                        ["selector" => Request::contextMenu('На доработку')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::contextMenu('Отменить')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                    ],
                ]
            ]
        ]
    ],

    'case2_5' => [
        'setting' => [
            'description' => '2 -> 5 transferInCheckToWaitWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_5.php',
        'provider_data' => [
            "url" => '/bpm/request/in-check',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('На доработку')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('На доработку')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                        ["selector" => Request::contextMenu('Назначить исполнителя')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Назначить исполнителя')],
                    ],
                ]
            ]
        ]
    ],

    'case3_1' => [
        'setting' => [
            'description' => '3 -> 1 transferRequireChangeToWaitCheck',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3_1.php',
        'provider_data' => [
            "url" => '/bpm/request/require-changes',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Вернуть в новые')],
                        ["selector" => Request::contextMenu('Вернуть в новые')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Вернуть в новые')],
                    ],
                ]
            ]
        ]
    ],

    'case5_4' => [
        'setting' => [
            'description' => '5 -> 4 transferWaitWorkToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_4.php',
        'provider_data' => [
            "url" => '/bpm/request/wait-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('В работу')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::contextMenu('Отменить')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                    ],
                ]
            ]
        ]
    ],

    'case5_6' => [
        'setting' => [
            'description' => '5 -> 6 transferWaitWorkToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_6.php',
        'provider_data' => [
            "url" => '/bpm/request/wait-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Отменить')],
                    ],
                ],
                "cantSee" => [
                    [
                        //массовая отмена в статусе 5 невозможна в любом случае
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('В работу')],
                        ["selector" => Request::contextMenu('В работу')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                    ],
                ]
            ]
        ]
    ],

    'case6_4' => [
        'setting' => [
            'description' => '6 -> 4 transferInWorkToDeclined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_4.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Ожидать')],
                        ["selector" => Request::contextMenu('Частично выполнена')],
                        ["selector" => Request::contextMenu('Выполнена')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Изменить исполнителя')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::contextMenu('Отменить')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Частично выполнена')],
                        ["selector" => Request::transferButton('Выполнена')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                    ],
                ]
            ]
        ]
    ],

    'case6_5' => [
        'setting' => [
            'description' => '6 -> 5 transferInWorkToWaitWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_5.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Ожидать')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Частично выполнена')],
                        ["selector" => Request::contextMenu('Выполнена')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                        ["selector" => Request::contextMenu('Изменить исполнителя')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Частично выполнена')],
                        ["selector" => Request::transferButton('Выполнена')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                    ],
                ]
            ]
        ]
    ],

    'case6_7' => [
        'setting' => [
            'description' => '6 -> 7 transferInWorkToOnHold',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_7.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить исполнителя')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Частично выполнена')],
                        ["selector" => Request::contextMenu('Выполнена')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::contextMenu('Ожидать')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Частично выполнена')],
                        ["selector" => Request::transferButton('Выполнена')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Ожидать')],
                    ],
                ]
            ]
        ]
    ],

    'case6_8' => [
        'setting' => [
            'description' => '6 -> 8 transferInWorkToPartialComplete',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_8.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить исполнителя')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Ожидать')],
                        ["selector" => Request::contextMenu('Выполнена')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Частично выполнена')],
                    ],
                ],
                "cantSee" => [
//              чтобы уменьшить кол-во запросов, пока сделали что статус 8
//              в конт. меню остаётся показываться даже после отключения пермишена 6->8
//              а перестаёт показываться с отключением пермишена 6->9
                    [
                        ["selector" => Request::transferButton('Частично выполнена')],
//                        ["selector" => Request::contextMenu('Частично выполнена')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Выполнена')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Частично выполнена')],
                    ],
                ]
            ]
        ]
    ],

    'case6_9' => [
        'setting' => [
            'description' => '6 -> 9 transferInWorkToCompleted',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_9.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить исполнителя')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Ожидать')],
//                        ["selector" => Request::contextMenu('Частично выполнена')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Выполнена')],
                        ["selector" => Request::contextMenu('Частично выполнена')],
                        ["selector" => Request::contextMenu('Выполнена')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Частично выполнена')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Выполнена')],
                    ],
                ]
            ]
        ]
    ],

    'case6_before_correct' => [
        'setting' => [
            'description' => '6 before correction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_before_correct.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Ожидать')],
                        ["selector" => Request::contextMenu('Внести исправления')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Изменить исполнителя')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::contextMenu('Частично выполнена')],
                        ["selector" => Request::contextMenu('Выполнена')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Внести исправления')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Частично выполнена')],
                        ["selector" => Request::transferButton('Выполнена')],
                    ],
                ]
            ],
            "correctionPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Выполнена') . '[@disabled]'],
                        ["selector" => Request::transferButton('Частично выполнена') . '[@disabled]'],
                    ],
                ],
                "cantSee" => [
                ]
            ],
        ]
    ],

    'case6_after_correct' => [
        'setting' => [
            'description' => '6 after correction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_after_correct.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::contextMenu('Отменить')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Ожидать')],
                        ["selector" => Request::contextMenu('Внести исправления')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Изменить исполнителя')],
                        ["selector" => Request::contextMenu('Частично выполнена')],
                        ["selector" => Request::contextMenu('Выполнена')],
                    ],
                ],
                "cantSee" => [
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить исполнителя')],
                        ["selector" => Request::transferButton('Ожидать')],
                        ["selector" => Request::transferButton('Отменить')],
                        ["selector" => Request::transferButton('Внести исправления')],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                        ["selector" => Request::transferButton('Частично выполнена')],
                        ["selector" => Request::transferButton('Выполнена')],
                    ],
                ],
                "cantSee" => [
                ]
            ],
            "correctionPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Выполнена')],
                        ["selector" => Request::transferButton('Частично выполнена')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Выполнена') . '[@disabled]'],
                        ["selector" => Request::transferButton('Частично выполнена') . '[@disabled]'],
                    ],
                ]
            ],
        ]
    ],

    'case7_6' => [
        'setting' => [
            'description' => '7 -> 6 transferOnHoldToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_6.php',
        'provider_data' => [
            "url" => '/bpm/request/on-hold',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                        ["selector" => Request::contextMenu('В работу')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                    ],
                ]
            ]
        ]
    ],

    'case8_6' => [
        'setting' => [
            'description' => '8 -> 6 transferPartialCompleteToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8_6.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Взять на Кросс-чек')],
                        ["selector" => Request::contextMenu('Закрыть')],
                        ["selector" => Request::contextMenu('На исправление')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                        ["selector" => Request::contextMenu('В работу')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Закрыть')],
                        ["selector" => Request::transferButton('На исправление')],
                        ["selector" => Request::transferButton('Взять на Кросс-чек')],
                        ["selector" => Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление')],
                        ["selector" => Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
                    ]
                ]
            ],
        ]
    ],

    'case8_11' => [
        'setting' => [
            'description' => '8 -> 11 transferPartialCompleteToClosed',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8_11.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Взять на Кросс-чек')],
                        ["selector" => Request::contextMenu('На исправление')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Закрыть')],
                        ["selector" => Request::contextMenu('Закрыть')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('На исправление')],
                        ["selector" => Request::transferButton('Взять на Кросс-чек')],
                        ["selector" => Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Закрыть')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление')],
                        ["selector" => Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
                    ]
                ]
            ]
        ]
    ],

    'case9_6' => [
        'setting' => [
            'description' => '9 -> 6 transferCompletedToInWork',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_6.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Взять на Кросс-чек')],
                        ["selector" => Request::contextMenu('Закрыть')],
                        ["selector" => Request::contextMenu('На исправление')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                        ["selector" => Request::contextMenu('В работу')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Закрыть')],
                        ["selector" => Request::transferButton('На исправление')],
                        ["selector" => Request::transferButton('Взять на Кросс-чек')],
                        ["selector" => Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('В работу')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление')],
                        ["selector" => Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
                    ]
                ]
            ]
        ],
    ],

    'case9_11' => [
        'setting' => [
            'description' => '9 -> 11 transferCompletedToClosed',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_11.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Изменить супервайзера')],
                        ["selector" => Request::transferButton('Пакетное редактирование')],
                        ["selector" => Request::contextMenu('Создать подзадачу')],
                        ["selector" => Request::contextMenu('Изменить супервайзера')],
                        ["selector" => Request::contextMenu('Взять на Кросс-чек')],
                        ["selector" => Request::contextMenu('На исправление')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Закрыть')],
                        ["selector" => Request::contextMenu('Закрыть')],
                    ],
                ]
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('На исправление')],
                        ["selector" => Request::transferButton('Взять на Кросс-чек')],
                        ["selector" => Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        ["selector" => Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Закрыть')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление')],
                        ["selector" => Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
                    ]
                ]
            ]
        ]
    ],

];
