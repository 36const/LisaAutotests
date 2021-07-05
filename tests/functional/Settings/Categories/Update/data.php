<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение всех полей и отвязка всех категорий стора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '10',
                'Category[status]' => '0',
                'Category[supervisor_id]' => '6',
                'Category[title]' => 'Видео к товару - new',
                'selectedRzCategories' => '',
                'search' => '',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару - new",
                            "difficulty" => 10,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                    'rozetka_categories' => [
                        [
                            'id' => 4626923,
                            'title' => 'Алкогольные напитки и продукты питания',
                            'mpath' => '.4626923.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 80025,
                            'title' => 'Бытовая техника, интерьер',
                            'mpath' => '.80025.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2394297,
                            'title' => 'Дача, сад, огород',
                            'mpath' => '.2394297.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 80253,
                            'title' => 'Компьютеры и ноутбуки',
                            'mpath' => '.80253.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4629305,
                            'title' => 'Красота и здоровье',
                            'mpath' => '.4629305.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 1162030,
                            'title' => 'Одежда, обувь и аксессуары',
                            'mpath' => '.1162030.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 84625,
                            'title' => 'Оружие',
                            'mpath' => '.84625.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4625734,
                            'title' => 'Офис, школа, книги',
                            'mpath' => '.4625734.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 80260,
                            'title' => 'Подарки и товары для праздников',
                            'mpath' => '.80260.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4628418,
                            'title' => 'Сантехника и ремонт',
                            'mpath' => '.4628418.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655216,
                            'title' => 'Сельское хозяйство',
                            'mpath' => '.4655216.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655025,
                            'title' => 'Скрытые',
                            'mpath' => '.4655025.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 80262,
                            'title' => 'Скрытые категории',
                            'mpath' => '.80262.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4656380,
                            'title' => 'Скрытые товары',
                            'mpath' => '.4656380.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627949,
                            'title' => 'Смартфоны, ТВ и электроника',
                            'mpath' => '.4627949.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627893,
                            'title' => 'Спорт и увлечения',
                            'mpath' => '.4627893.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627851,
                            'title' => 'Товары для бизнеса',
                            'mpath' => '.4627851.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 88468,
                            'title' => 'Товары для детей',
                            'mpath' => '.88468.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2394287,
                            'title' => 'Товары для дома',
                            'mpath' => '.2394287.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4630262,
                            'title' => 'Услуги и сервисы',
                            'mpath' => '.4630262.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 83850,
                            'title' => 'Уцененные товары',
                            'mpath' => '.83850.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 753399,
                            'title' => 'Аксессуары для алкоголя',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4652996,
                            'title' => 'Мини-бары',
                            'mpath' => '.4626923.753399.4652996.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4653010,
                            'title' => 'Фляги',
                            'mpath' => '.4626923.753399.4653010.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4653017,
                            'title' => 'Упаковки для алкогольных напитков',
                            'mpath' => '.4626923.753399.4653017.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4628124,
                            'title' => 'Фото и видео',
                            'mpath' => '.4627949.80258.4628124.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 80258,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 2460392,
                            'title' => 'Канцелярия',
                            'mpath' => '.4625734.2460392.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4625734,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2460402,
                            'title' => 'Архивирование и делопроизводство',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460392,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2514857,
                            'title' => 'Файлы',
                            'mpath' => '.4625734.2460392.2460402.2514857.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2514867,
                            'title' => 'Визитницы',
                            'mpath' => '.4625734.2460392.2460402.2514867.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2514872,
                            'title' => 'Бейджи, брелоки-идентификаторы, настольные таблички',
                            'mpath' => '.4625734.2460392.2460402.2514872.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2514877,
                            'title' => 'Штемпельная продукция',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2898382,
                            'title' => 'Самонаборные штампы, кассы букв',
                            'mpath' => '.4625734.2460392.2460402.2514877.2898382.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2898387,
                            'title' => 'Штемпельные краски и подушки',
                            'mpath' => '.4625734.2460392.2460402.2514877.2898387.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4628926,
                            'title' => 'Датеры',
                            'mpath' => '.4625734.2460392.2460402.2514877.4628926.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4629073,
                            'title' => 'Оснастки, штампы стандартные',
                            'mpath' => '.4625734.2460392.2460402.2514877.4629073.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2560747,
                            'title' => 'Банковские принадлежности',
                            'mpath' => '.4625734.2460392.2460402.2560747.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581722,
                            'title' => 'Папки, регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2514862,
                            'title' => 'Папки пластиковые',
                            'mpath' => '.4625734.2460392.2460402.2581722.2514862.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581727,
                            'title' => 'Папки-портфели, папки-боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581727.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581732,
                            'title' => 'Папки-регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581732.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581737,
                            'title' => 'Папки-планшеты',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581737.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581742,
                            'title' => 'Папки и файлы подвесные',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581742.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2595767,
                            'title' => 'Папки с файлами',
                            'mpath' => '.4625734.2460392.2460402.2581722.2595767.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2666302,
                            'title' => 'Архивные короба и боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.2666302.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4626584,
                            'title' => 'Папки специальные',
                            'mpath' => '.4625734.2460392.2460402.2581722.4626584.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2660622,
                            'title' => 'Разделители и закладки',
                            'mpath' => '.4625734.2460392.2460402.2660622.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2973057,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.2973057.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 3167120,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.3167120.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4630034,
                            'title' => 'Шило, нити и шпагаты',
                            'mpath' => '.4625734.2460392.2460402.4630034.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4641568,
                            'title' => 'Настольные картотеки',
                            'mpath' => '.4625734.2460392.2460402.4641568.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655242,
                            'title' => 'Пломбы и пломбираторы',
                            'mpath' => '.4625734.2460392.2460402.4655242.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655266,
                            'title' => 'Сургуч',
                            'mpath' => '.4625734.2460392.2460402.4655266.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655272,
                            'title' => 'Досточки для оттиска',
                            'mpath' => '.4625734.2460392.2460402.4655272.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4660667,
                            'title' => 'не должно выгружаться (old)',
                            'mpath' => '.4625734.2460392.2460402.2581722.4660667.',
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660668,
                            'title' => 'old не должно выгружаться',
                            'mpath' => '.4626923.4660668.',
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660666,
                            'title' => 'не должно выгружаться _old',
                            'mpath' => '.4660666.',
                            'parent_id' => 0,
                            'lisa_category_id' => null,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660669,
                            'title' => 'не использовать не должно выгружаться ',
                            'mpath' => '.4660666.4660669.',
                            'parent_id' => 4660666,
                            'lisa_category_id' => null,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660651,
                            'title' => 'Рестораны и продуктовые сети',
                            'mpath' => '.4660651.',
                            'parent_id' => 0,
                            'lisa_category_id' => null,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660652,
                            'title' => 'Рестораны',
                            'mpath' => '.4660651.4660652.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => null,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660653,
                            'title' => 'Продуктовые сети',
                            'mpath' => '.4660651.4660653.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => null,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                    ]
                ],
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => [
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
            'requestBody' => [
                'Category[difficulty]' => '10',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Видео к товару',
                'selectedRzCategories' => '2560747,2514872,2514867,2581722,2666302,2581742,2581737,2514862,2581727,2581732,4626584,2595767,2514857',
                'search' => '',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару",
                            "difficulty" => 10,
                            "supervisor_id" => 10,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => []
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '3',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '6',
                'Category[title]' => 'Видео к товару',
                'selectedRzCategories' => '2560747,2514872,2514867,2581722,2666302,2581742,2581737,2514862,2581727,2581732,4626584,2595767,2514857',
                'search' => '',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару",
                            "difficulty" => 3,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '3',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Видео к товару - new',
                'selectedRzCategories' => '2560747,2514872,2514867,2581722,2666302,2581742,2581737,2514862,2581727,2581732,4626584,2595767,2514857',
                'search' => '',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару - new",
                            "difficulty" => 3,
                            "supervisor_id" => 10,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => []
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение набора категорий стора (привязка незанятых, отвязка занятых и перепривязка чужих)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '3',
                'Category[status]' => '1',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Видео к товару - new',
                'selectedRzCategories' => '4652996,2560747,2514872,2514867,4655272,2514877,4628926,4629073,2898382,2898387',
                'search' => '',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 6,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару - new",
                            "difficulty" => 3,
                            "supervisor_id" => 10,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                    'rozetka_categories' => [
                        [
                            'id' => 4626923,
                            'title' => 'Алкогольные напитки и продукты питания',
                            'mpath' => '.4626923.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 80025,
                            'title' => 'Бытовая техника, интерьер',
                            'mpath' => '.80025.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2394297,
                            'title' => 'Дача, сад, огород',
                            'mpath' => '.2394297.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 80253,
                            'title' => 'Компьютеры и ноутбуки',
                            'mpath' => '.80253.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4629305,
                            'title' => 'Красота и здоровье',
                            'mpath' => '.4629305.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 1162030,
                            'title' => 'Одежда, обувь и аксессуары',
                            'mpath' => '.1162030.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 84625,
                            'title' => 'Оружие',
                            'mpath' => '.84625.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4625734,
                            'title' => 'Офис, школа, книги',
                            'mpath' => '.4625734.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 80260,
                            'title' => 'Подарки и товары для праздников',
                            'mpath' => '.80260.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4628418,
                            'title' => 'Сантехника и ремонт',
                            'mpath' => '.4628418.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655216,
                            'title' => 'Сельское хозяйство',
                            'mpath' => '.4655216.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655025,
                            'title' => 'Скрытые',
                            'mpath' => '.4655025.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 80262,
                            'title' => 'Скрытые категории',
                            'mpath' => '.80262.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4656380,
                            'title' => 'Скрытые товары',
                            'mpath' => '.4656380.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627949,
                            'title' => 'Смартфоны, ТВ и электроника',
                            'mpath' => '.4627949.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627893,
                            'title' => 'Спорт и увлечения',
                            'mpath' => '.4627893.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4627851,
                            'title' => 'Товары для бизнеса',
                            'mpath' => '.4627851.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 88468,
                            'title' => 'Товары для детей',
                            'mpath' => '.88468.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2394287,
                            'title' => 'Товары для дома',
                            'mpath' => '.2394287.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4630262,
                            'title' => 'Услуги и сервисы',
                            'mpath' => '.4630262.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 83850,
                            'title' => 'Уцененные товары',
                            'mpath' => '.83850.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 753399,
                            'title' => 'Аксессуары для алкоголя',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4653010,
                            'title' => 'Фляги',
                            'mpath' => '.4626923.753399.4653010.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4653017,
                            'title' => 'Упаковки для алкогольных напитков',
                            'mpath' => '.4626923.753399.4653017.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 4628124,
                            'title' => 'Фото и видео',
                            'mpath' => '.4627949.80258.4628124.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 80258,
                            'lisa_category_id' => 1
                        ],
                        [
                            'id' => 2514867,
                            'title' => 'Визитницы',
                            'mpath' => '.4625734.2460392.2460402.2514867.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514872,
                            'title' => 'Бейджи, брелоки-идентификаторы, настольные таблички',
                            'mpath' => '.4625734.2460392.2460402.2514872.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2560747,
                            'title' => 'Банковские принадлежности',
                            'mpath' => '.4625734.2460392.2460402.2560747.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2660622,
                            'title' => 'Разделители и закладки',
                            'mpath' => '.4625734.2460392.2460402.2660622.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2973057,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.2973057.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 3167120,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.3167120.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4630034,
                            'title' => 'Шило, нити и шпагаты',
                            'mpath' => '.4625734.2460392.2460402.4630034.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4641568,
                            'title' => 'Настольные картотеки',
                            'mpath' => '.4625734.2460392.2460402.4641568.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655242,
                            'title' => 'Пломбы и пломбираторы',
                            'mpath' => '.4625734.2460392.2460402.4655242.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4655266,
                            'title' => 'Сургуч',
                            'mpath' => '.4625734.2460392.2460402.4655266.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2460392,
                            'title' => 'Канцелярия',
                            'mpath' => '.4625734.2460392.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4625734,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2460402,
                            'title' => 'Архивирование и делопроизводство',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460392,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4652996,
                            'title' => 'Мини-бары',
                            'mpath' => '.4626923.753399.4652996.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 4655272,
                            'title' => 'Досточки для оттиска',
                            'mpath' => '.4625734.2460392.2460402.4655272.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514877,
                            'title' => 'Штемпельная продукция',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2898382,
                            'title' => 'Самонаборные штампы, кассы букв',
                            'mpath' => '.4625734.2460392.2460402.2514877.2898382.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2898387,
                            'title' => 'Штемпельные краски и подушки',
                            'mpath' => '.4625734.2460392.2460402.2514877.2898387.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 4628926,
                            'title' => 'Датеры',
                            'mpath' => '.4625734.2460392.2460402.2514877.4628926.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 4629073,
                            'title' => 'Оснастки, штампы стандартные',
                            'mpath' => '.4625734.2460392.2460402.2514877.4629073.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 2
                        ],
                        [
                            'id' => 2514857,
                            'title' => 'Файлы',
                            'mpath' => '.4625734.2460392.2460402.2514857.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581722,
                            'title' => 'Папки, регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2514862,
                            'title' => 'Папки пластиковые',
                            'mpath' => '.4625734.2460392.2460402.2581722.2514862.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581727,
                            'title' => 'Папки-портфели, папки-боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581727.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581732,
                            'title' => 'Папки-регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581732.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581737,
                            'title' => 'Папки-планшеты',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581737.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2581742,
                            'title' => 'Папки и файлы подвесные',
                            'mpath' => '.4625734.2460392.2460402.2581722.2581742.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2595767,
                            'title' => 'Папки с файлами',
                            'mpath' => '.4625734.2460392.2460402.2581722.2595767.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 2666302,
                            'title' => 'Архивные короба и боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.2666302.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4626584,
                            'title' => 'Папки специальные',
                            'mpath' => '.4625734.2460392.2460402.2581722.4626584.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => null
                        ],
                        [
                            'id' => 4660667,
                            'title' => 'не должно выгружаться (old)',
                            'mpath' => '.4625734.2460392.2460402.2581722.4660667.',
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660668,
                            'title' => 'old не должно выгружаться',
                            'mpath' => '.4626923.4660668.',
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660666,
                            'title' => 'не должно выгружаться _old',
                            'mpath' => '.4660666.',
                            'parent_id' => 0,
                            'lisa_category_id' => null,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660669,
                            'title' => 'не использовать не должно выгружаться ',
                            'mpath' => '.4660666.4660669.',
                            'parent_id' => 4660666,
                            'lisa_category_id' => null,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660651,
                            'title' => 'Рестораны и продуктовые сети',
                            'mpath' => '.4660651.',
                            'parent_id' => 0,
                            'lisa_category_id' => null,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660652,
                            'title' => 'Рестораны',
                            'mpath' => '.4660651.4660652.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => null,
                            'status' => 'active',
                            'deleted' => null,
                        ],
                        [
                            'id' => 4660653,
                            'title' => 'Продуктовые сети',
                            'mpath' => '.4660651.4660653.',
                            'parent_id' => 4660651,
                            'lisa_category_id' => null,
                            'status' => 'locked',
                            'deleted' => null,
                        ],
                    ]
                ],
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => [
                    '["export"]',
                    '["export"]'
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность изменения статуса с активного на заблокированный без отвязки категорий стора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Category[difficulty]' => '3',
                'Category[status]' => '0',
                'Category[supervisor_id]' => '10',
                'Category[title]' => 'Видео к товару',
                'selectedRzCategories' => '2560747,2514872,2514867,2581722,2666302,2581742,2581737,2514862,2581727,2581732,4626584,2595767,2514857',
                'search' => '',
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
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => []
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Изменение супервайзеров (групповое)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/category/appoint-supervisor?model=gomer\bpm\models\references\Category',
            'requestBody' => [
                'Category[supervisor_id]' => '23',
                'keys' => '1,2',
                'keys' => '1,2'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "categories" => [
                        [
                            "id" => 1,
                            "title" => "Авиабилеты",
                            "difficulty" => 2,
                            "supervisor_id" => 23,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "title" => "Видео к товару",
                            "difficulty" => 3,
                            "supervisor_id" => 23,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Добавление логотипов к производителям",
                            "difficulty" => 4,
                            "supervisor_id" => 6,
                            "status" => 0
                        ],
                    ],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => []
            ]
        ]
    ],

];
