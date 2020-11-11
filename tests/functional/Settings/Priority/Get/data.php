<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница приоритетов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=3']",
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
            'description' => 'Страница приоритетов c обратной сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=3']",
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
            'description' => 'Страница приоритетов c сортировкой по названию приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=name',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]/a[@href='/bpm/priority/update?id=3']",
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
            'description' => 'Страница приоритетов c обратной сортировкой по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=3']",
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
            'description' => 'Страница приоритетов c фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?PrioritySearch%5Bid%5D=1&PrioritySearch%5Bname%5D=&PrioritySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=3']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница приоритетов c фильтром по названию приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?PrioritySearch%5Bid%5D=&PrioritySearch%5Bname%5D=эксклюзив&PrioritySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/priority/update?id=3']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница приоритетов c фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?PrioritySearch%5Bid%5D=&PrioritySearch%5Bname%5D=&PrioritySearch%5Bstatus%5D=1',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/priority/update?id=3']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Страница приоритетов с фильтром по id > 999 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?PrioritySearch%5Bid%5D=9999999999&PrioritySearch%5Bname%5D=&PrioritySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID приоритета» не должно превышать 999999999."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=3']",
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
            'description' => 'Страница приоритетов с нечисловым фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?PrioritySearch%5Bid%5D=%3D~%7D%21%40%23%24%25%5E%26*%28%29_%2B%60-%5D%27%2F%5B%3B.%2C%7D"%3F%7B%3A>%5C%7C<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО&PrioritySearch%5Bname%5D=&PrioritySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID приоритета» должно быть целым числом."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название приоритета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]/a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]/a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=3']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Страница приоритетов с несуществующим фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?PrioritySearch%5Bid%5D=999&PrioritySearch%5Bname%5D=&PrioritySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                    "1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/priority/update?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/priority/update?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]/a[@href='/bpm/priority/update?id=3']",
                        ],
                    ],
                ]
            ]
        ]
    ],

];
