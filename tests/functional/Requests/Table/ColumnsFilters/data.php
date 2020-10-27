<?php

use lisa\Page\Functional\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Фильтр по нескольким id с нецифровыми символами на вкладке "Все"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'index?RequestSearch%5Bid%5D=1%3D~%7D%21%40%23%24%25%5E%26*%28%293%09_%2B%60-%5D%27%2F%5B%3B.%2C%7D"%3F%7B%3A>%5C%7C<5+++++1001234567890>7абвгдеёжзийклмнопрстуф9хцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО+11&RequestSearch%5Bsubject%5D=&RequestSearch%5Btype_id%5D=&RequestSearch%5Bauthor_id%5D=&RequestSearch%5Bsupervisor_id%5D=&RequestSearch%5Bmanager_id%5D=&RequestSearch%5Bstatus%5D=&RequestSearch%5Bteam_direction%5D=&RequestSearch%5Bawaiting_correction%5D=&RequestSearch%5Bamount_to_work%5D=&RequestSearch%5Bcategory_id%5D=&RequestSearch%5Bseller_id%5D=&sort=id',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::requestInTable(1, 1, 1),],
                        ["selector" => Request::requestInTable(2, 1, 3),],
                        ["selector" => Request::requestInTable(3, 1, 5),],
                        ["selector" => Request::requestInTable(4, 1, 7),],
                        ["selector" => Request::requestInTable(5, 1, 9),],
                        ["selector" => Request::requestInTable(6, 1, 11),],
                    ]
                ],
                "cantSee" => [
                ],
            ],

        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Фильтр по нескольким id с нецифровыми символами на вкладке "Готова для распределения"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'in-check?RequestSearch%5Bid%5D=1+~%21%40%23%24%25%5E%26*%2813%29_%2B&RequestSearch%5Bsubject%5D=&RequestSearch%5Btype_id%5D=&RequestSearch%5Bauthor_id%5D=&RequestSearch%5Bsupervisor_id%5D=&RequestSearch%5Bmanager_id%5D=&RequestSearch%5Bstatus%5D=&RequestSearch%5Bstatus%5D%5B%5D=2&RequestSearch%5Bteam_direction%5D=&RequestSearch%5Bawaiting_correction%5D=&RequestSearch%5Bamount_to_work%5D=&RequestSearch%5Bcategory_id%5D=&RequestSearch%5Bseller_id%5D=',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::requestInTable(1, 1, 13),],
                        ["selector" => Request::requestInTable(2, 1, 1),],
                    ]
                ],
                "cantSee" => [
                ],
            ],

        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Фильтр по несуществующим id на вкладке "Ожидает взятия в работу"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'wait-work?RequestSearch%5Bid%5D=987+654+321&RequestSearch%5Bsubject%5D=&RequestSearch%5Btype_id%5D=&RequestSearch%5Bauthor_id%5D=&RequestSearch%5Bsupervisor_id%5D=&RequestSearch%5Bmanager_id%5D=&RequestSearch%5Bstatus%5D=&RequestSearch%5Bstatus%5D%5B%5D=5&RequestSearch%5Bteam_direction%5D=&RequestSearch%5Bawaiting_correction%5D=&RequestSearch%5Bamount_to_work%5D=&RequestSearch%5Bcategory_id%5D=&RequestSearch%5Bseller_id%5D=',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::$emptyTable],
                    ]
                ],
                "cantSee" => [
                ],
            ],

        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Фильтр по не-цифровым символам в id на вкладке "Ожидает"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'on-hold?RequestSearch%5Bid%5D=~%21%40%23%24%25%5E%26*%28%29_%2B%7D"%3F%7B%3A><%7C%60-%3D%5D%27%2F%5B%3B.%2C%5C&RequestSearch%5Bsubject%5D=&RequestSearch%5Btype_id%5D=&RequestSearch%5Bauthor_id%5D=&RequestSearch%5Bsupervisor_id%5D=&RequestSearch%5Bmanager_id%5D=&RequestSearch%5Bstatus%5D=&RequestSearch%5Bstatus%5D%5B%5D=7&RequestSearch%5Bteam_direction%5D=&RequestSearch%5Bawaiting_correction%5D=&RequestSearch%5Bamount_to_work%5D=&RequestSearch%5Bcategory_id%5D=&RequestSearch%5Bseller_id%5D=',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::requestInTable(1, 1, 21),],
                        ["selector" => Request::requestInTable(2, 1, 5),],
                    ]
                ],
                "cantSee" => [
                ],
            ],

        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Двойной фильтр по id и супервайзеру на вкладке "Закрыты"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'closed?RequestSearch%5Bid%5D=%3D~%7D%21%40%23%24%25%5E%26*%28%2923%09_%2B%60-%5D%27%2F%5B%3B.%2C%7D"%3F%7B%3A>%5C%7C<5+++++1001234567890>7абвгдеёжзийклмнопрстуф9хцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО+24&RequestSearch%5Bsubject%5D=&RequestSearch%5Btype_id%5D=&RequestSearch%5Bauthor_id%5D=&RequestSearch%5Bsupervisor_id%5D=35&RequestSearch%5Bmanager_id%5D=&RequestSearch%5Bstatus%5D=&RequestSearch%5Bstatus%5D%5B%5D=11&RequestSearch%5Bteam_direction%5D=&RequestSearch%5Bawaiting_correction%5D=&RequestSearch%5Bamount_to_work%5D=&RequestSearch%5Bcategory_id%5D=&RequestSearch%5Bseller_id%5D=',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => Request::requestInTable(1, 1, 23),],
                    ]
                ],
                "cantSee" => [
                ],
            ],

        ]
    ],

];
