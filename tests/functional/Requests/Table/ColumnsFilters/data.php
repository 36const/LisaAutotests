<?php

use lisa\Page\Requests\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Фильтр по нескольким id с нецифровыми символами на вкладке "Все"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'index?RequestSearch[id]=1%3D~%7D%21%40%23%24%25%5E%26*%28%293%09_%2B%60-%5D%27%2F%5B%3B.%2C%7D"%3F%7B%3A>%5C%7C<5+++++1001234567890>7абвгдеёжзийклмнопрстуф9хцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО+11&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[status]=&RequestSearch[team_direction]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=&RequestSearch[category_id]=&RequestSearch[seller_id]=&sort=id',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::requestInTable(1, 'id', 1)],
                        [Request::requestInTable(2, 'id', 3)],
                        [Request::requestInTable(3, 'id', 5)],
                        [Request::requestInTable(4, 'id', 7)],
                        [Request::requestInTable(5, 'id', 9)],
                        [Request::requestInTable(6, 'id', 11)],
                    ]
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
            'url' => 'in-check?RequestSearch[id]=1+~%21%40%23%24%25%5E%26*%2813%29_%2B&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[status]=&RequestSearch[status][]=2&RequestSearch[team_direction]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=&RequestSearch[category_id]=&RequestSearch[seller_id]=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::requestInTable(1, 'id', 13)],
                        [Request::requestInTable(2, 'id', 1)],
                    ]
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
            'url' => 'wait-work?RequestSearch[id]=987+654+321&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[status]=&RequestSearch[status][]=5&RequestSearch[team_direction]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=&RequestSearch[category_id]=&RequestSearch[seller_id]=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::$emptyTable],
                    ]
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
            'url' => 'on-hold?RequestSearch[id]=~%21%40%23%24%25%5E%26*%28%29_%2B%7D"%3F%7B%3A><%7C%60-%3D%5D%27%2F%5B%3B.%2C%5C&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[status]=&RequestSearch[status][]=7&RequestSearch[team_direction]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=&RequestSearch[category_id]=&RequestSearch[seller_id]=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::requestInTable(1, 'id', 21)],
                        [Request::requestInTable(2, 'id', 5)],
                    ]
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
            'url' => 'closed?RequestSearch[id]=%3D~%7D%21%40%23%24%25%5E%26*%28%2923%09_%2B%60-%5D%27%2F%5B%3B.%2C%7D"%3F%7B%3A>%5C%7C<5+++++1001234567890>7абвгдеёжзийклмнопрстуф9хцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО+24&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=35&RequestSearch[manager_id]=&RequestSearch[status]=&RequestSearch[status][]=11&RequestSearch[team_direction]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=&RequestSearch[category_id]=&RequestSearch[seller_id]=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [Request::requestInTable(1, 'id', 23)],
                    ]
                ],
            ],
        ]
    ],

];
