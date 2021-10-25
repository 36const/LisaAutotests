<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания категории без названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'title' => NULL,
                'difficulty' => '2.5',
                'supervisor_id' => 6,
                'status' => 1,
                'boundRzCategories' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'title' => [
                        0 => 'Необходимо заполнить «Название категории».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания категории без сложности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'title' => 'Cat category',
                'difficulty' => NULL,
                'supervisor_id' => 6,
                'status' => 1,
                'boundRzCategories' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'difficulty' => [
                        0 => 'Необходимо заполнить «Коэффициент сложности».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания категории без супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'title' => 'Cat category',
                'difficulty' => '2.5',
                'supervisor_id' => NULL,
                'status' => 1,
                'boundRzCategories' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'supervisor_id' => [
                        0 => 'Необходимо заполнить «Супервизор».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность создания категории c посторонними символами в коэффициенте',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'title' => 'Cat category',
                'difficulty' => '2,5',
                'supervisor_id' => 6,
                'status' => 1,
                'boundRzCategories' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'difficulty' => [
                        0 => 'Ваше число немножко не очень. Для коэффициента используйте цифры и точку.',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность создания дубля категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'title' => 'Авиабилеты',
                'difficulty' => '2',
                'supervisor_id' => 6,
                'status' => 1,
                'boundRzCategories' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'title' => [
                        0 => 'Значение «Авиабилеты» для «Название категории» уже занято.',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание активной категории без привязки сторовских',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => NULL,
                'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'difficulty' => '2.5',
                'supervisor_id' => 6,
                'status' => 1,
                'boundRzCategories' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'difficulty' => '2.5',
                    'supervisor_id' => 'Супервайзер Начальникович 1',
                    'rz_categories_string' => '',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                        [
                            [
                                'id' => 4,
                                'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'difficulty' => '2.5',
                                'supervisor_id' => 6,
                                'status' => 1,
                            ]
                        ]
                    ),
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.categories.all' => '{"action":"create","entity":"categories","fields_data":{"id":4,"title":"=}~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","difficulty":"2.5","supervisor_id":6,"status":1},"changed_fields_names":[]}'
                ],
            ],
        ],
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание активной категории с привязкой сторовских',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => NULL,
                'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'difficulty' => '2.5',
                'supervisor_id' => 6,
                'status' => 1,
                'boundRzCategories' => [
                    0 => 4653010,
                    1 => 2514872,
                    2 => 2460402,
                    3 => 4655272,
                    4 => 4641568,
                    5 => 3167120,
                    6 => 2973057,
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'difficulty' => '2.5',
                    'supervisor_id' => 'Супервайзер Начальникович 1',
                    'rz_categories_string' => 'Фляги (4653010) (<b>4653010</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (2514872) (<b>2514872</b>) | Новая категория (2973057) (<b>2973057</b>) | Новая категория (3167120) (<b>3167120</b>) | Настольные картотеки (4641568) (<b>4641568</b>) | Досточки для оттиска (4655272) (<b>4655272</b>) | Архивирование и делопроизводство (2460402) (<b>2460402</b>)',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                        [
                            [
                                'id' => 4,
                                'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'difficulty' => '2.5',
                                'supervisor_id' => 6,
                                'status' => 1,
                            ]
                        ]
                    ),
                    'rozetka_categories' => [
                        [
                            'id' => 4626923,
                            'title' => 'Алкогольные напитки и продукты питания',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 753399,
                            'title' => 'Аксессуары для алкоголя',
                            'mpath' => '.4626923.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4652996,
                            'title' => 'Мини-бары',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4653017,
                            'title' => 'Упаковки для алкогольных напитков',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4628124,
                            'title' => 'Фото и видео',
                            'mpath' => '.4627949.80258.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 80258,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 2514857,
                            'title' => 'Файлы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514867,
                            'title' => 'Визитницы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2560747,
                            'title' => 'Банковские принадлежности',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2581722,
                            'title' => 'Папки, регистраторы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514862,
                            'title' => 'Папки пластиковые',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2581727,
                            'title' => 'Папки-портфели, папки-боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2581732,
                            'title' => 'Папки-регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2581737,
                            'title' => 'Папки-планшеты',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2581742,
                            'title' => 'Папки и файлы подвесные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2595767,
                            'title' => 'Папки с файлами',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2666302,
                            'title' => 'Архивные короба и боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 4626584,
                            'title' => 'Папки специальные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2460402,
                            'title' => 'Архивирование и делопроизводство',
                            'mpath' => '.4625734.2460392.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460392,
                            'lisa_category_id' => 4
                        ],
                        [
                            'id' => 2514872,
                            'title' => 'Бейджи, брелоки-идентификаторы, настольные таблички',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 4
                        ],
                        [
                            'id' => 2973057,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 4
                        ],
                        [
                            'id' => 3167120,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 4
                        ],
                        [
                            'id' => 4641568,
                            'title' => 'Настольные картотеки',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 4
                        ],
                        [
                            'id' => 4655272,
                            'title' => 'Досточки для оттиска',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 4
                        ],
                        [
                            'id' => 4653010,
                            'title' => 'Фляги',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 4
                        ],
                        [
                            'id' => 1162030,
                            'title' => 'Одежда, обувь и аксессуары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2394287,
                            'title' => 'Товары для дома',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2394297,
                            'title' => 'Дача, сад, огород',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4625734,
                            'title' => 'Офис, школа, книги',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2460392,
                            'title' => 'Канцелярия',
                            'mpath' => '.4625734.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4625734,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2514877,
                            'title' => 'Штемпельная продукция',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2898382,
                            'title' => 'Самонаборные штампы, кассы букв',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2898387,
                            'title' => 'Штемпельные краски и подушки',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4628926,
                            'title' => 'Датеры',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4629073,
                            'title' => 'Оснастки, штампы стандартные',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2660622,
                            'title' => 'Разделители и закладки',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4630034,
                            'title' => 'Шило, нити и шпагаты',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4655242,
                            'title' => 'Пломбы и пломбираторы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4655266,
                            'title' => 'Сургуч',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4627851,
                            'title' => 'Товары для бизнеса',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627893,
                            'title' => 'Спорт и увлечения',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627949,
                            'title' => 'Смартфоны, ТВ и электроника',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4628418,
                            'title' => 'Сантехника и ремонт',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4629305,
                            'title' => 'Красота и здоровье',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4630262,
                            'title' => 'Услуги и сервисы',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655025,
                            'title' => 'Скрытые',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655216,
                            'title' => 'Сельское хозяйство',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4656380,
                            'title' => 'Скрытые товары',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 80025,
                            'title' => 'Бытовая техника, интерьер',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 80253,
                            'title' => 'Компьютеры и ноутбуки',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 80260,
                            'title' => 'Подарки и товары для праздников',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 80262,
                            'title' => 'Скрытые категории',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 83850,
                            'title' => 'Уцененные товары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 84625,
                            'title' => 'Оружие',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 88468,
                            'title' => 'Товары для детей',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4660667,
                            'title' => 'не должно выгружаться (old)',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660668,
                            'title' => 'old не должно выгружаться',
                            'mpath' => '.4626923.',
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660666,
                            'title' => 'не должно выгружаться _old',
                            'mpath' => '.',
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660669,
                            'title' => 'не использовать не должно выгружаться ',
                            'mpath' => '.4660666.',
                            'parent_id' => 4660666,
                            'lisa_category_id' => null,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660651,
                            'title' => 'Рестораны и продуктовые сети',
                            'mpath' => '.',
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660652,
                            'title' => 'Рестораны',
                            'mpath' => '.4660651.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => null,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660653,
                            'title' => 'Продуктовые сети',
                            'mpath' => '.4660651.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => null,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.categories.all' => '{"action":"create","entity":"categories","fields_data":{"id":4,"title":"=}~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","difficulty":"2.5","supervisor_id":6,"status":1},"changed_fields_names":[]}'
                ],
            ],
        ],
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание заблокированной категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => NULL,
                'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'difficulty' => '2.5',
                'supervisor_id' => 6,
                'status' => 0,
                'boundRzCategories' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'difficulty' => '2.5',
                    'supervisor_id' => 'Супервайзер Начальникович 1',
                    'rz_categories_string' => '',
                    'status' => 'Заблокированный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                        [
                            [
                                'id' => 4,
                                'title' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'difficulty' => '2.5',
                                'supervisor_id' => 6,
                                'status' => 0,
                            ]
                        ]
                    ),
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.categories.all' => '{"action":"create","entity":"categories","fields_data":{"id":4,"title":"=}~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","difficulty":"2.5","supervisor_id":6,"status":0},"changed_fields_names":[]}'
                ],
            ],
        ],
    ],

];
