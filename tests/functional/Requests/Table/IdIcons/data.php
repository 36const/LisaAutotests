<?php

use lisa\Page\Functional\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Отображение иконок связанных заявок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::parentRequest(1, '/bpm/request/view?id=2')],
                        ["selector" => Request::parentRequest(2, '/bpm/request/view?id=1')],
                        ["selector" => Request::parentRequest(3, '/bpm/request/view?id=1')],
                        ["selector" => Request::childRequest(3, '/bpm/request/index?RequestSearch%5Bparent_id%5D=2')],
                        ["selector" => Request::childRequest(4, '/bpm/request/index?RequestSearch%5Bparent_id%5D=1')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::parentRequest(4)],
                        ["selector" => Request::childRequest(1)],
                        ["selector" => Request::childRequest(2)],
                        ["selector" => Request::photoLoadStatus(1)],
                        ["selector" => Request::photoLoadStatus(2)],
                        ["selector" => Request::photoLoadStatus(3)],
                        ["selector" => Request::photoLoadStatus(4)],
                    ]
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Отображение иконки завершённой загрузки фото на вкладке "Все" в статусах не 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::photoLoadStatus(1)],
                        ["selector" => Request::photoLoadStatus(2)],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::parentRequest(1)],
                        ["selector" => Request::parentRequest(2)],
                        ["selector" => Request::childRequest(1)],
                        ["selector" => Request::childRequest(2)],
                    ]
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Отображение иконки завершённой загрузки фото на вкладке "В работе"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'url' => 'in-work',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::photoLoadStatus(2)],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::parentRequest(1)],
                        ["selector" => Request::parentRequest(2)],
                        ["selector" => Request::childRequest(1)],
                        ["selector" => Request::childRequest(2)],
                        ["selector" => Request::photoLoadStatus(1)],
                    ]
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Отображение иконки наличия вложений в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'url' => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::attachments(2)],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::attachments(1)],
                        ["selector" => Request::parentRequest(1)],
                        ["selector" => Request::parentRequest(2)],
                        ["selector" => Request::childRequest(1)],
                        ["selector" => Request::childRequest(2)],
                        ["selector" => Request::photoLoadStatus(1)],
                        ["selector" => Request::photoLoadStatus(2)],
                    ]
                ],
            ],
        ]
    ],

//    'case5' => [
//        'setting' => [
//            'description' => 'Отсутствие иконки наличия вложений после их удаления в заявке',
//        ],
//        'fixture_data' => include __DIR__ . '/fixture/case5.php',
//        'provider_data' => [
//            'url' => '',
//            "pageObjects" => [
//                "canSee" => [
//                ],
//                "cantSee" => [
//                    [
//                        ["selector" => Request::attachments(1)],
//                        ["selector" => Request::attachments(2)],
//                        ["selector" => Request::parentRequest(1)],
//                        ["selector" => Request::parentRequest(2)],
//                        ["selector" => Request::childRequest(1)],
//                        ["selector" => Request::childRequest(2)],
//                        ["selector" => Request::photoLoadStatus(1)],
//                        ["selector" => Request::photoLoadStatus(2)],
//                    ]
//                ],
//            ],
//        ]
//    ],
//
];
