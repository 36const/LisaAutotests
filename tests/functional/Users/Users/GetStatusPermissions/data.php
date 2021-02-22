<?php

use lisa\Page\Requests\Request;

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
                        [Request::transferButton('Пакетное редактирование')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Изменить супервайзера')],
                    ]
                ],
                "cantSee" => [
                    [
                        //без пермишена 1->2 не показывается вкладка "Новые"
                        ["//ul[@class='nav nav-tabs']//a[@href='/bpm/request/new']"],
                        [Request::transferButton('Готова для распределения')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу'],
                "cantSee" => ['Готова для распределения']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Готова для распределения')],
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
                        [Request::transferButton('Готова для распределения')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('На доработку')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Готова для распределения', 'Отменить', 'Назначить исполнителя', 'Изменить супервайзера'],
                "cantSee" => ['На доработку']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Готова для распределения')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('На доработку')],
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
                        [Request::transferButton('Готова для распределения')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Готова для распределения', 'На доработку', 'Назначить исполнителя', 'Изменить супервайзера'],
                "cantSee" => ['Отменить']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Готова для распределения')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
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
                        [Request::transferButton('Готова для распределения')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Назначить исполнителя')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Готова для распределения', 'На доработку', 'Отменить', 'Изменить супервайзера'],
                "cantSee" => ['Назначить исполнителя']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Готова для распределения')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Назначить исполнителя')],
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
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('На доработку')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Назначить исполнителя', 'Отменить', 'Изменить супервайзера'],
                "cantSee" => ['На доработку']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('На доработку')],
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
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Назначить исполнителя', 'На доработку', 'Изменить супервайзера'],
                "cantSee" => ['Отменить']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Назначить исполнителя')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
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
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('На доработку')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Назначить исполнителя')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Отменить', 'На доработку', 'Изменить супервайзера'],
                "cantSee" => ['Назначить исполнителя']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Создать подзадачу')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('На доработку')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Назначить исполнителя')],
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
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Вернуть в новые')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить супервайзера'],
                "cantSee" => ['Вернуть в новые']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Вернуть в новые')],
                    ],
                ]
            ]
        ]
    ],

    'case4_0' => [
        'setting' => [
            'description' => '4 - declined',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4_0.php',
        'provider_data' => [
            "url" => '/bpm/request/declined',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => []
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => []
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
                        [Request::transferButton('В работу')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить супервайзера', 'В работу'],
                "cantSee" => ['Отменить']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('В работу')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
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
                        [Request::transferButton('Пакетное редактирование')],
                        [Request::transferButton('Изменить супервайзера')],
                    ],
                ],
                "cantSee" => [
                    [
                        //массовая отмена в статусе 5 невозможна в любом случае
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('В работу')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Отменить'],
                "cantSee" => ['В работу']
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('В работу')],
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
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Ожидать', 'Частично выполнена', 'Выполнена', 'Изменить супервайзера', 'Изменить исполнителя'],
                "cantSee" => ['Отменить'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Частично выполнена')],
                        [Request::transferButton('Выполнена')],
                        [Request::transferButton('Создать подзадачу')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Отменить')],
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
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Ожидать', 'Частично выполнена', 'Выполнена', 'Изменить супервайзера', 'Отменить'],
                "cantSee" => ['Изменить исполнителя'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Частично выполнена')],
                        [Request::transferButton('Выполнена')],
                        [Request::transferButton('Создать подзадачу')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
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
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Ожидать')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить исполнителя', 'Частично выполнена', 'Выполнена', 'Изменить супервайзера', 'Отменить'],
                "cantSee" => ['Ожидать'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Частично выполнена')],
                        [Request::transferButton('Выполнена')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Ожидать')],
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
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Частично выполнена')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить исполнителя', 'Ожидать', 'Выполнена', 'Изменить супервайзера', 'Отменить'],
                "cantSee" => ['Частично выполнена'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Выполнена')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Частично выполнена')],
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
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Выполнена')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить исполнителя', 'Ожидать', 'Изменить супервайзера', 'Отменить', 'Частично выполнена'],
                "cantSee" => ['Выполнена'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Частично выполнена')],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Выполнена')],
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
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                        [Request::transferButton('Отменить')],
                    ],
                ],
                "cantSee" => []
            ],
            "ajaxResponse" => [
                "canSee" => ['Внести исправления', 'Создать подзадачу', 'Изменить исполнителя', 'Ожидать', 'Изменить супервайзера', 'Отменить'],
                "cantSee" => ['Частично выполнена', 'Выполнена'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Внести исправления')],
                        [Request::transferButton('Создать подзадачу')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Частично выполнена')],
                        [Request::transferButton('Выполнена')],
                    ],
                ]
            ],
            "correctionPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Выполнена') . '[@disabled]'],
                        [Request::transferButton('Частично выполнена') . '[@disabled]'],
                    ],
                ],
                "cantSee" => []
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
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                        [Request::transferButton('Отменить')],
                    ],
                ],
                "cantSee" => []
            ],
            "ajaxResponse" => [
                "canSee" => ['Внести исправления', 'Создать подзадачу', 'Изменить исполнителя', 'Ожидать', 'Изменить супервайзера', 'Отменить', 'Частично выполнена', 'Выполнена'],
                "cantSee" => [],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Изменить исполнителя')],
                        [Request::transferButton('Ожидать')],
                        [Request::transferButton('Отменить')],
                        [Request::transferButton('Внести исправления')],
                        [Request::transferButton('Создать подзадачу')],
                        [Request::transferButton('Частично выполнена')],
                        [Request::transferButton('Выполнена')],
                    ],
                ],
                "cantSee" => []
            ],
            "correctionPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Выполнена')],
                        [Request::transferButton('Частично выполнена')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Выполнена') . '[@disabled]'],
                        [Request::transferButton('Частично выполнена') . '[@disabled]'],
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
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('В работу')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить супервайзера'],
                "cantSee" => ['В работу'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('В работу')],
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
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('В работу')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить супервайзера', 'Взять на Кросс-чек', 'Закрыть', 'На исправление'],
                "cantSee" => ['В работу'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Закрыть')],
                        [Request::transferButton('На исправление')],
                        [Request::transferButton('Взять на Кросс-чек')],
                        [Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('В работу')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление')],
                        [Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
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
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Закрыть')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить супервайзера', 'Взять на Кросс-чек', 'На исправление'],
                "cantSee" => ['Закрыть'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('На исправление')],
                        [Request::transferButton('Взять на Кросс-чек')],
                        [Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Закрыть')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление')],
                        [Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
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
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('В работу')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить супервайзера', 'Взять на Кросс-чек', 'Закрыть', 'На исправление'],
                "cantSee" => ['В работу'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Закрыть')],
                        [Request::transferButton('На исправление')],
                        [Request::transferButton('Взять на Кросс-чек')],
                        [Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('В работу')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление')],
                        [Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
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
                        [Request::transferButton('Изменить супервайзера')],
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Закрыть')],
                    ],
                ]
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу', 'Изменить супервайзера', 'Взять на Кросс-чек', 'На исправление'],
                "cantSee" => ['Закрыть'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('На исправление')],
                        [Request::transferButton('Взять на Кросс-чек')],
                        [Request::transferButton('Завершить Кросс-чек') . '[@disabled]'],
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Закрыть')],
                    ],
                ]
            ],
            "toCorrectionPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление')],
                        [Request::transferButton('Сохранить')],
                    ],
                ],
                "cantSee" => [
                    [
                        [Request::transferButton('Сохранить и отправить на исправление') . '[@disabled]'],
                    ]
                ]
            ]
        ]
    ],

    'case11_0' => [
        'setting' => [
            'description' => '11 - closed',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11_0.php',
        'provider_data' => [
            "url" => '/bpm/request/closed',
            "tablePageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Пакетное редактирование')],
                    ]
                ],
                "cantSee" => []
            ],
            "ajaxResponse" => [
                "canSee" => ['Создать подзадачу'],
            ],
            "requestPageObjects" => [
                "canSee" => [
                    [
                        [Request::transferButton('Создать подзадачу')],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

];
