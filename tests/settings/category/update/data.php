<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение всех полей и отвязка всех категорий стора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => 2,
                'title' => 'Видео к товару - new',
                'difficulty' => '10',
                'supervisor_id' => '6',
                'status' => '0',
                'boundRzCategories' => [],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'title' => 'Видео к товару - new',
                    'difficulty' => '10',
                    'supervisor_id' => 'Супервайзер Начальникович 1',
                    'rz_categories_string' => '',
                    'status' => 'Заблокированный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => [
                        [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'title' => 'Видео к товару - new',
                            'difficulty' => 10,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                        [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ]
                    ],
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
                            'id' => 80025,
                            'title' => 'Бытовая техника, интерьер',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
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
                            'id' => 80253,
                            'title' => 'Компьютеры и ноутбуки',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
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
                            'id' => 1162030,
                            'title' => 'Одежда, обувь и аксессуары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
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
                            'id' => 4625734,
                            'title' => 'Офис, школа, книги',
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
                            'id' => 4628418,
                            'title' => 'Сантехника и ремонт',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4655216,
                            'title' => 'Сельское хозяйство',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4655025,
                            'title' => 'Скрытые',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 80262,
                            'title' => 'Скрытые категории',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4656380,
                            'title' => 'Скрытые товары',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4627949,
                            'title' => 'Смартфоны, ТВ и электроника',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4627893,
                            'title' => 'Спорт и увлечения',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4627851,
                            'title' => 'Товары для бизнеса',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 88468,
                            'title' => 'Товары для детей',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2394287,
                            'title' => 'Товары для дома',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4630262,
                            'title' => 'Услуги и сервисы',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 83850,
                            'title' => 'Уцененные товары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
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
                            'id' => 4653010,
                            'title' => 'Фляги',
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
                            'id' => 2460392,
                            'title' => 'Канцелярия',
                            'mpath' => '.4625734.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4625734,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2460402,
                            'title' => 'Архивирование и делопроизводство',
                            'mpath' => '.4625734.2460392.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460392,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2514857,
                            'title' => 'Файлы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2514867,
                            'title' => 'Визитницы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2514872,
                            'title' => 'Бейджи, брелоки-идентификаторы, настольные таблички',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2514877,
                            'title' => 'Штемпельная продукция',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2898382,
                            'title' => 'Самонаборные штампы, кассы букв',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2898387,
                            'title' => 'Штемпельные краски и подушки',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4628926,
                            'title' => 'Датеры',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4629073,
                            'title' => 'Оснастки, штампы стандартные',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2560747,
                            'title' => 'Банковские принадлежности',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581722,
                            'title' => 'Папки, регистраторы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2514862,
                            'title' => 'Папки пластиковые',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581727,
                            'title' => 'Папки-портфели, папки-боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581732,
                            'title' => 'Папки-регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581737,
                            'title' => 'Папки-планшеты',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581742,
                            'title' => 'Папки и файлы подвесные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2595767,
                            'title' => 'Папки с файлами',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2666302,
                            'title' => 'Архивные короба и боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4626584,
                            'title' => 'Папки специальные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
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
                            'id' => 2973057,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 3167120,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
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
                            'id' => 4641568,
                            'title' => 'Настольные картотеки',
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
                            'id' => 4655272,
                            'title' => 'Досточки для оттиска',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4660667,
                            'title' => 'не должно выгружаться (old)',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474,
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
                            'lisa_category_id' => 474,
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
                            'lisa_category_id' => 474,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660653,
                            'title' => 'Продуктовые сети',
                            'mpath' => '.4660651.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => 474,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                    ]
                ],
            ],
            'RabbitMQ' => [
                'lisa_rzCategoriesExport' => [
                    '["export"]'
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение коэффициента сложности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => 2,
                'difficulty' => '10',
                'status' => '1',
                'supervisor_id' => '10',
                'title' => 'Видео к товару',
                'boundRzCategories' => [2560747, 2514872, 2514867, 2581722, 2666302, 2581742, 2581737, 2514862, 2581727, 2581732, 4626584, 2595767, 2514857],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'title' => 'Видео к товару',
                    'difficulty' => '10',
                    'rz_categories_string' => 'Файлы (<b>2514857</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Папки, регистраторы (<b>2581722</b>) | Папки пластиковые (<b>2514862</b>) | Папки-портфели, папки-боксы (<b>2581727</b>) | Папки-регистраторы (<b>2581732</b>) | Папки-планшеты (<b>2581737</b>) | Папки и файлы подвесные (<b>2581742</b>) | Папки с файлами (<b>2595767</b>) | Архивные короба и боксы (<b>2666302</b>) | Папки специальные (<b>4626584</b>)',
                    'supervisor_id' => 'Супервайзер Начальникович 2',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => [
                        [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 10,
                            'supervisor_id' => 10,
                            'status' => 1
                        ],
                        [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ]
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rzCategoriesExport' => []
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => 2,
                'difficulty' => '3',
                'status' => '1',
                'supervisor_id' => '6',
                'title' => 'Видео к товару',
                'boundRzCategories' => [2560747, 2514872, 2514867, 2581722, 2666302, 2581742, 2581737, 2514862, 2581727, 2581732, 4626584, 2595767, 2514857],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'title' => 'Видео к товару',
                    'difficulty' => '3',
                    'supervisor_id' => 'Супервайзер Начальникович 1',
                    'rz_categories_string' => 'Файлы (<b>2514857</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Папки, регистраторы (<b>2581722</b>) | Папки пластиковые (<b>2514862</b>) | Папки-портфели, папки-боксы (<b>2581727</b>) | Папки-регистраторы (<b>2581732</b>) | Папки-планшеты (<b>2581737</b>) | Папки и файлы подвесные (<b>2581742</b>) | Папки с файлами (<b>2595767</b>) | Архивные короба и боксы (<b>2666302</b>) | Папки специальные (<b>4626584</b>)',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => [
                        [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ]
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rzCategoriesExport' => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => 2,
                'difficulty' => '3',
                'status' => '1',
                'supervisor_id' => '10',
                'title' => 'Видео к товару - new',
                'boundRzCategories' => [2560747, 2514872, 2514867, 2581722, 2666302, 2581742, 2581737, 2514862, 2581727, 2581732, 4626584, 2595767, 2514857],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'title' => 'Видео к товару - new',
                    'difficulty' => '3',
                    'supervisor_id' => 'Супервайзер Начальникович 2',
                    'rz_categories_string' => 'Файлы (<b>2514857</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Папки, регистраторы (<b>2581722</b>) | Папки пластиковые (<b>2514862</b>) | Папки-портфели, папки-боксы (<b>2581727</b>) | Папки-регистраторы (<b>2581732</b>) | Папки-планшеты (<b>2581737</b>) | Папки и файлы подвесные (<b>2581742</b>) | Папки с файлами (<b>2595767</b>) | Архивные короба и боксы (<b>2666302</b>) | Папки специальные (<b>4626584</b>)',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => [
                        [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'title' => 'Видео к товару - new',
                            'difficulty' => 3,
                            'supervisor_id' => 10,
                            'status' => 1
                        ],
                        [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ]
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rzCategoriesExport' => []
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение набора категорий стора (привязка незанятых, отвязка занятых и перепривязка чужих)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_category_namesfa94761536e04215430d7de0b502b16e',
                'active_category_ids5ec4d878ccfce7dc3c19481d6a063478'
            ],
            'requestBody' => [
                'id' => 2,
                'difficulty' => '3',
                'status' => '1',
                'supervisor_id' => '10',
                'title' => 'Видео к товару - new',
                'boundRzCategories' => [4652996, 2560747, 2514872, 2514867, 4655272, 2514877, 4628926, 4629073, 2898382, 2898387],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'title' => 'Видео к товару - new',
                    'difficulty' => '3',
                    'rz_categories_string' => 'Мини-бары (<b>4652996</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Досточки для оттиска (<b>4655272</b>) | Штемпельная продукция (<b>2514877</b>) | Самонаборные штампы, кассы букв (<b>2898382</b>) | Штемпельные краски и подушки (<b>2898387</b>) | Датеры (<b>4628926</b>) | Оснастки, штампы стандартные (<b>4629073</b>)','supervisor_id' => 'Супервайзер Начальникович 2',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'categories' => [
                        [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'title' => 'Видео к товару - new',
                            'difficulty' => 3,
                            'supervisor_id' => 10,
                            'status' => 1
                        ],
                        [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 6,
                            'status' => 0
                        ],
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ]
                    ],
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
                            'id' => 80025,
                            'title' => 'Бытовая техника, интерьер',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
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
                            'id' => 80253,
                            'title' => 'Компьютеры и ноутбуки',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
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
                            'id' => 1162030,
                            'title' => 'Одежда, обувь и аксессуары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474
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
                            'id' => 4625734,
                            'title' => 'Офис, школа, книги',
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
                            'id' => 4628418,
                            'title' => 'Сантехника и ремонт',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4655216,
                            'title' => 'Сельское хозяйство',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4655025,
                            'title' => 'Скрытые',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 80262,
                            'title' => 'Скрытые категории',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4656380,
                            'title' => 'Скрытые товары',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4627949,
                            'title' => 'Смартфоны, ТВ и электроника',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4627893,
                            'title' => 'Спорт и увлечения',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4627851,
                            'title' => 'Товары для бизнеса',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 88468,
                            'title' => 'Товары для детей',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2394287,
                            'title' => 'Товары для дома',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4630262,
                            'title' => 'Услуги и сервисы',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 83850,
                            'title' => 'Уцененные товары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
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
                            'id' => 4653010,
                            'title' => 'Фляги',
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
                            'id' => 2514867,
                            'title' => 'Визитницы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514872,
                            'title' => 'Бейджи, брелоки-идентификаторы, настольные таблички',
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
                            'id' => 2660622,
                            'title' => 'Разделители и закладки',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2973057,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 3167120,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
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
                            'id' => 4641568,
                            'title' => 'Настольные картотеки',
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
                            'id' => 2460392,
                            'title' => 'Канцелярия',
                            'mpath' => '.4625734.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4625734,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 2460402,
                            'title' => 'Архивирование и делопроизводство',
                            'mpath' => '.4625734.2460392.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460392,
                            'lisa_category_id' => 474,
                        ],
                        [
                            'id' => 4652996,
                            'title' => 'Мини-бары',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 4655272,
                            'title' => 'Досточки для оттиска',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514877,
                            'title' => 'Штемпельная продукция',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2898382,
                            'title' => 'Самонаборные штампы, кассы букв',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2898387,
                            'title' => 'Штемпельные краски и подушки',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 4628926,
                            'title' => 'Датеры',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 4629073,
                            'title' => 'Оснастки, штампы стандартные',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514857,
                            'title' => 'Файлы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581722,
                            'title' => 'Папки, регистраторы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2514862,
                            'title' => 'Папки пластиковые',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581727,
                            'title' => 'Папки-портфели, папки-боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581732,
                            'title' => 'Папки-регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581737,
                            'title' => 'Папки-планшеты',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2581742,
                            'title' => 'Папки и файлы подвесные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2595767,
                            'title' => 'Папки с файлами',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 2666302,
                            'title' => 'Архивные короба и боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
                        ],
                        [
                            'id' => 4626584,
                            'title' => 'Папки специальные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 474
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
                            'lisa_category_id' => 474,
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
                            'lisa_category_id' => 474,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660653,
                            'title' => 'Продуктовые сети',
                            'mpath' => '.4660651.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => 474,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_rzCategoriesExport' => [
                    '["export"]',
                    '["export"]'
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Невозможность изменения названия категории на существующую',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 2,
                'difficulty' => '3',
                'status' => '0',
                'supervisor_id' => '10',
                'title' => 'Авиабилеты',
                'boundRzCategories' => [2560747, 2514872, 2514867, 2581722, 2666302, 2581742, 2581737, 2514862, 2581727, 2581732, 4626584, 2595767, 2514857],
            ],
            'responseBody' => [
                'errors' => [
                    'title' => [
                        'Значение «Авиабилеты» для «Название категории» уже занято.'
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
                'lisa_rzCategoriesExport' => []
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Невозможность изменения категории без коэффициента',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 2,
                'difficulty' => '',
                'status' => '0',
                'supervisor_id' => '10',
                'title' => 'Видео к товару',
                'boundRzCategories' => [2560747, 2514872, 2514867, 2581722, 2666302, 2581742, 2581737, 2514862, 2581727, 2581732, 4626584, 2595767, 2514857],
            ],
            'responseBody' => [
                'errors' => [
                    'difficulty' => [
                        'Необходимо заполнить «Коэффициент сложности».'
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
                'lisa_rzCategoriesExport' => []
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Невозможность изменения категории без супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 2,
                'difficulty' => '3',
                'status' => '0',
                'supervisor_id' => '',
                'title' => 'Видео к товару',
                'boundRzCategories' => [2560747, 2514872, 2514867, 2581722, 2666302, 2581742, 2581737, 2514862, 2581727, 2581732, 4626584, 2595767, 2514857],
            ],
            'responseBody' => [
                'errors' => [
                    'supervisor_id' => [
                        'Необходимо заполнить «Супервизор».'
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
                'lisa_rzCategoriesExport' => []
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Невозможность изменения категории без названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 2,
                'difficulty' => '3',
                'status' => '0',
                'supervisor_id' => '10',
                'title' => '',
                'boundRzCategories' => [2560747, 2514872, 2514867, 2581722, 2666302, 2581742, 2581737, 2514862, 2581727, 2581732, 4626584, 2595767, 2514857],
            ],
            'responseBody' => [
                'errors' => [
                    'title' => [
                        'Необходимо заполнить «Название категории».'
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
                'lisa_rzCategoriesExport' => []
            ]
        ]
    ],

];
