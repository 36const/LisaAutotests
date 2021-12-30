<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание категории',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    'categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['categories'],
                    'rozetka_categories' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['rozetka_categories'],
                ],
            ],
            'db_2' => [
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
                        [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 6,
                            'status' => 1
                        ],
                        [
                            'id' => 4,
                            'title' => 'Авиабилеты-',
                            'difficulty' => 1.3,
                            'supervisor_id' => 4,
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
                            'lisa_category_id' => 1,
                            'children' => 2,
                        ],
                        [
                            'id' => 80025,
                            'title' => 'Бытовая техника, интерьер',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 2394297,
                            'title' => 'Дача, сад, огород',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 80253,
                            'title' => 'Компьютеры и ноутбуки',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4629305,
                            'title' => 'Красота и здоровье',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 1162030,
                            'title' => 'Одежда, обувь и аксессуары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 84625,
                            'title' => 'Оружие',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4625734,
                            'title' => 'Офис, школа, книги',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 1,
                        ],
                        [
                            'id' => 80260,
                            'title' => 'Подарки и товары для праздников',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4628418,
                            'title' => 'Сантехника и ремонт',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4655216,
                            'title' => 'Сельское хозяйство',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4655025,
                            'title' => 'Скрытые',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 80262,
                            'title' => 'Скрытые категории',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4656380,
                            'title' => 'Скрытые товары',
                            'mpath' => '.',
                            'status' => 'locked',
                            'deleted' => 1,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4627949,
                            'title' => 'Смартфоны, ТВ и электроника',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4627893,
                            'title' => 'Спорт и увлечения',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4627851,
                            'title' => 'Товары для бизнеса',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 88468,
                            'title' => 'Товары для детей',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 2394287,
                            'title' => 'Товары для дома',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4630262,
                            'title' => 'Услуги и сервисы',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 83850,
                            'title' => 'Уцененные товары',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 753399,
                            'title' => 'Аксессуары для алкоголя',
                            'mpath' => '.4626923.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1,
                            'children' => 3,
                        ],
                        [
                            'id' => 4652996,
                            'title' => 'Мини-бары',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1,
                            'children' => 0,
                        ],
                        [
                            'id' => 4653010,
                            'title' => 'Фляги',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1,
                            'children' => 0,
                        ],
                        [
                            'id' => 4653017,
                            'title' => 'Упаковки для алкогольных напитков',
                            'mpath' => '.4626923.753399.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 753399,
                            'lisa_category_id' => 1,
                            'children' => 0,
                        ],
                        [
                            'id' => 4628124,
                            'title' => 'Фото и видео',
                            'mpath' => '.4627949.80258.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 80258,
                            'lisa_category_id' => 1,
                            'children' => 0,
                        ],
                        [
                            'id' => 2514857,
                            'title' => 'Файлы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2514867,
                            'title' => 'Визитницы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2514872,
                            'title' => 'Бейджи, брелоки-идентификаторы, настольные таблички',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2560747,
                            'title' => 'Банковские принадлежности',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2581722,
                            'title' => 'Папки, регистраторы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 2,
                            'children' => 9,
                        ],
                        [
                            'id' => 2514862,
                            'title' => 'Папки пластиковые',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 4,
                            'children' => 0,
                        ],
                        [
                            'id' => 2581727,
                            'title' => 'Папки-портфели, папки-боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2581732,
                            'title' => 'Папки-регистраторы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2581737,
                            'title' => 'Папки-планшеты',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 4,
                            'children' => 0,
                        ],
                        [
                            'id' => 2581742,
                            'title' => 'Папки и файлы подвесные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 4,
                            'children' => 0,
                        ],
                        [
                            'id' => 2595767,
                            'title' => 'Папки с файлами',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2666302,
                            'title' => 'Архивные короба и боксы',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 4626584,
                            'title' => 'Папки специальные',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 2660622,
                            'title' => 'Разделители и закладки',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 2973057,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 3167120,
                            'title' => 'Новая категория',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4630034,
                            'title' => 'Шило, нити и шпагаты',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4641568,
                            'title' => 'Настольные картотеки',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4655242,
                            'title' => 'Пломбы и пломбираторы',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4655266,
                            'title' => 'Сургуч',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4655272,
                            'title' => 'Досточки для оттиска',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 2460392,
                            'title' => 'Канцелярия',
                            'mpath' => '.4625734.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4625734,
                            'lisa_category_id' => 474,
                            'children' => 1,
                        ],
                        [
                            'id' => 2460402,
                            'title' => 'Архивирование и делопроизводство',
                            'mpath' => '.4625734.2460392.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460392,
                            'lisa_category_id' => 474,
                            'children' => 14,
                        ],
                        [
                            'id' => 2514877,
                            'title' => 'Штемпельная продукция',
                            'mpath' => '.4625734.2460392.2460402.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2460402,
                            'lisa_category_id' => 474,
                            'children' => 4,
                        ],
                        [
                            'id' => 2898382,
                            'title' => 'Самонаборные штампы, кассы букв',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 2898387,
                            'title' => 'Штемпельные краски и подушки',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4628926,
                            'title' => 'Датеры',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4629073,
                            'title' => 'Оснастки, штампы стандартные',
                            'mpath' => '.4625734.2460392.2460402.2514877.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2514877,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4660667,
                            'title' => 'не должно выгружаться (old)',
                            'mpath' => '.4625734.2460392.2460402.2581722.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 2581722,
                            'lisa_category_id' => 2,
                            'children' => 0,
                        ],
                        [
                            'id' => 4660668,
                            'title' => 'old не должно выгружаться',
                            'mpath' => '.4626923.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 4626923,
                            'lisa_category_id' => 1,
                            'children' => 0,
                        ],
                        [
                            'id' => 4660666,
                            'title' => 'не должно выгружаться _old',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 1,
                        ],
                        [
                            'id' => 4660669,
                            'title' => 'не использовать не должно выгружаться ',
                            'mpath' => '.4660666.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 4660666,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4660651,
                            'title' => 'Рестораны и продуктовые сети',
                            'mpath' => '.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 0,
                            'lisa_category_id' => 474,
                            'children' => 2,
                        ],
                        [
                            'id' => 4660652,
                            'title' => 'Рестораны',
                            'mpath' => '.4660651.',
                            'status' => 'active',
                            'deleted' => null,
                            'parent_id' => 4660651,
                            'lisa_category_id' => 474,
                            'children' => 0,
                        ],
                        [
                            'id' => 4660653,
                            'title' => 'Продуктовые сети',
                            'mpath' => '.4660651.',
                            'status' => 'locked',
                            'deleted' => null,
                            'parent_id' => 4660651,
                            'lisa_category_id' => 474,
                        ],
                    ],
                ],
            ]
        ]
    ],
];
