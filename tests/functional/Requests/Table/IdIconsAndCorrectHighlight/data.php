<?php

use lisa\Page\Requests\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Наличие иконок связанных заявок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::parentRequest(1, '/bpm/request/view?id=2')],
                        [Request::parentRequest(2, '/bpm/request/view?id=1')],
                        [Request::parentRequest(3, '/bpm/request/view?id=1')],
                        [Request::childRequest(3, '/bpm/request/index?RequestSearch%5Bparent_id%5D=2')],
                        [Request::childRequest(4, '/bpm/request/index?RequestSearch%5Bparent_id%5D=1')],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::parentRequest(4)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                        [Request::photoLoadStatus(3)],
                        [Request::photoLoadStatus(4)],
                    ]
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Наличие иконки завершённой загрузки фото на вкладке "Все" в статусах не 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                    ]
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Наличие иконки завершённой загрузки фото на вкладке "В работе"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'url' => 'in-work',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::photoLoadStatus(2)],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                    ]
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Отсутствие иконки завершённой загрузки фото на вкладке "Отменённые"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'url' => 'declined',
            "pageObjects" => [
                "canSee" => [],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Отсутствие иконки завершённой загрузки фото на вкладке "Ожидают взятия в работу"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'url' => 'wait-work',
            "pageObjects" => [
                "canSee" => [],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Отсутствие иконки завершённой загрузки фото на вкладке "Ожидают"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'url' => 'on-hold',
            "pageObjects" => [
                "canSee" => [],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Отсутствие иконки завершённой загрузки фото на вкладке "Частично выполнены"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'url' => 'completed',
            "pageObjects" => [
                "canSee" => [],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Отсутствие иконки завершённой загрузки фото на вкладке "Выполнены"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'url' => 'completed',
            "pageObjects" => [
                "canSee" => [],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Отсутствие иконки завершённой загрузки фото на вкладке "Закрыты"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'provider_data' => [
            'url' => 'closed',
            "pageObjects" => [
                "canSee" => [],
                "cantSee" => [
                    [
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Наличие иконки вложений в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::attachments(2)],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::attachments(1)],
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Отсутствие иконки вложений в заявке после их удаления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [Request::attachments(1)],
                        [Request::attachments(2)],
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Подсветка заявки, переведённой на исправление, при отсутствии колонки "На исправление"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case12.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::toCorrection(1)],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::toCorrection(2)],
                        [Request::attachments(1)],
                        [Request::attachments(2)],
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Отсутствие подсветки заявки после исправления в статусах "Закрыта" и "Отменена" при отсутствии колонки "На исправление"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case13.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::toCorrection(3)],
                        [Request::toCorrection(4)],
                        [Request::toCorrection(5)],
                        [Request::toCorrection(6)],
                        [Request::toCorrection(7)],
                    ]
                ],
                "cantSee" => [
                    [
                        [Request::toCorrection(1)],
                        [Request::toCorrection(2)],
                        [Request::attachments(1)],
                        [Request::attachments(2)],
                        [Request::parentRequest(1)],
                        [Request::parentRequest(2)],
                        [Request::childRequest(1)],
                        [Request::childRequest(2)],
                        [Request::photoLoadStatus(1)],
                        [Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

];
