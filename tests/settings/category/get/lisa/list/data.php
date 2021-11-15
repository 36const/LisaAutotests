<?php

use lisa\Constants;

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список категорий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Алкогольные напитки и продукты питания (4626923) (<b>4626923</b>) | Аксессуары для алкоголя (753399) (<b>753399</b>) | Мини-бары (4652996) (<b>4652996</b>) | Фляги (4653010) (<b>4653010</b>) | Упаковки для алкогольных напитков (4653017) (<b>4653017</b>) | Фото и видео (4628124) (<b>4628124</b>)',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'rz_categories_string' => 'Файлы (2514857) (<b>2514857</b>) | Визитницы (2514867) (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (2514872) (<b>2514872</b>) | Банковские принадлежности (2560747) (<b>2560747</b>) | Папки, регистраторы (2581722) (<b>2581722</b>) | Папки пластиковые (2514862) (<b>2514862</b>) | Папки-портфели, папки-боксы (2581727) (<b>2581727</b>) | Папки-регистраторы (2581732) (<b>2581732</b>) | Папки-планшеты (2581737) (<b>2581737</b>) | Папки и файлы подвесные (2581742) (<b>2581742</b>) | Папки с файлами (2595767) (<b>2595767</b>) | Архивные короба и боксы (2666302) (<b>2666302</b>) | Папки специальные (4626584) (<b>4626584</b>)',
                            'status' => 'Активный',
                        ],
                        2 => [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => '',
                            'status' => 'Заблокированный',
                        ],
                        3 => [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Бытовая техника, интерьер (80025) (<b>80025</b>) | Дача, сад, огород (2394297) (<b>2394297</b>) | Компьютеры и ноутбуки (80253) (<b>80253</b>) | Красота и здоровье (4629305) (<b>4629305</b>) | Одежда, обувь и аксессуары (1162030) (<b>1162030</b>) | Оружие (84625) (<b>84625</b>) | Офис, школа, книги (4625734) (<b>4625734</b>) | Подарки и товары для праздников (80260) (<b>80260</b>) | Разделители и закладки (2660622) (<b>2660622</b>) | Новая категория (2973057) (<b>2973057</b>) | Новая категория (3167120) (<b>3167120</b>) | Шило, нити и шпагаты (4630034) (<b>4630034</b>) | Настольные картотеки (4641568) (<b>4641568</b>) | Пломбы и пломбираторы (4655242) (<b>4655242</b>) | Сургуч (4655266) (<b>4655266</b>) | Досточки для оттиска (4655272) (<b>4655272</b>)',
                            'status' => 'Активный'
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/category/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/category/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/category/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 4,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => [
                    'userNames' => Constants::USER_NAMES,
                    'exportUrl' => 'http://lisa-api.docker/files/выгрузка_связанных_категорий_LISA.xlsx',
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список категорий с обратной сортировкой по id и фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-id',
                'filter[title]' => 'ви',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'rz_categories_string' => 'Файлы (2514857) (<b>2514857</b>) | Визитницы (2514867) (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (2514872) (<b>2514872</b>) | Банковские принадлежности (2560747) (<b>2560747</b>) | Папки, регистраторы (2581722) (<b>2581722</b>) | Папки пластиковые (2514862) (<b>2514862</b>) | Папки-портфели, папки-боксы (2581727) (<b>2581727</b>) | Папки-регистраторы (2581732) (<b>2581732</b>) | Папки-планшеты (2581737) (<b>2581737</b>) | Папки и файлы подвесные (2581742) (<b>2581742</b>) | Папки с файлами (2595767) (<b>2595767</b>) | Архивные короба и боксы (2666302) (<b>2666302</b>) | Папки специальные (4626584) (<b>4626584</b>)',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Алкогольные напитки и продукты питания (4626923) (<b>4626923</b>) | Аксессуары для алкоголя (753399) (<b>753399</b>) | Мини-бары (4652996) (<b>4652996</b>) | Фляги (4653010) (<b>4653010</b>) | Упаковки для алкогольных напитков (4653017) (<b>4653017</b>) | Фото и видео (4628124) (<b>4628124</b>)',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/category/list?sort=-id&filter%5Btitle%5D=%D0%B2%D0%B8&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/category/list?sort=-id&filter%5Btitle%5D=%D0%B2%D0%B8&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/category/list?sort=-id&filter%5Btitle%5D=%D0%B2%D0%B8&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 2,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'title' => 'ви',
                ],
                'initialValues' => [
                    'userNames' => Constants::USER_NAMES,
                    'exportUrl' => 'http://lisa-api.docker/files/выгрузка_связанных_категорий_LISA.xlsx',
                ]
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список категорий с сортировкой по статусу и фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[title]' => '',
                'filter[supervisor_id]' => 6,
                'sort' => '-status',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Алкогольные напитки и продукты питания (4626923) (<b>4626923</b>) | Аксессуары для алкоголя (753399) (<b>753399</b>) | Мини-бары (4652996) (<b>4652996</b>) | Фляги (4653010) (<b>4653010</b>) | Упаковки для алкогольных напитков (4653017) (<b>4653017</b>) | Фото и видео (4628124) (<b>4628124</b>)',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => '',
                            'status' => 'Заблокированный',
                        ],
                        2 => [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Бытовая техника, интерьер (80025) (<b>80025</b>) | Дача, сад, огород (2394297) (<b>2394297</b>) | Компьютеры и ноутбуки (80253) (<b>80253</b>) | Красота и здоровье (4629305) (<b>4629305</b>) | Одежда, обувь и аксессуары (1162030) (<b>1162030</b>) | Оружие (84625) (<b>84625</b>) | Офис, школа, книги (4625734) (<b>4625734</b>) | Подарки и товары для праздников (80260) (<b>80260</b>) | Разделители и закладки (2660622) (<b>2660622</b>) | Новая категория (2973057) (<b>2973057</b>) | Новая категория (3167120) (<b>3167120</b>) | Шило, нити и шпагаты (4630034) (<b>4630034</b>) | Настольные картотеки (4641568) (<b>4641568</b>) | Пломбы и пломбираторы (4655242) (<b>4655242</b>) | Сургуч (4655266) (<b>4655266</b>) | Досточки для оттиска (4655272) (<b>4655272</b>)',
                            'status' => 'Активный'
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/category/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=6&sort=-status&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/category/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=6&sort=-status&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/category/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=6&sort=-status&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 3,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'title' => '',
                    'supervisor_id' => '6',
                ],
                'initialValues' => [
                    'userNames' => Constants::USER_NAMES,
                    'exportUrl' => 'http://lisa-api.docker/files/выгрузка_связанных_категорий_LISA.xlsx',
                ]
            ],
        ]
    ],

];
