<?php

use Codeception\Module\TestHelper;
use lisa\RequestsTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка связанных категорий Lisa и Store',
            'rows' => 55
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'status' => 'Активный',
                            'rz_categories_string' => 'Алкогольные напитки и продукты питания (<b>4626923</b>) | Аксессуары для алкоголя (<b>753399</b>) | Мини-бары (<b>4652996</b>) | Фляги (<b>4653010</b>) | Упаковки для алкогольных напитков (<b>4653017</b>) | Фото и видео (<b>4628124</b>)',
                        ],
                        1 => [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'status' => 'Активный',
                            'rz_categories_string' => 'Файлы (<b>2514857</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Папки, регистраторы (<b>2581722</b>) | Папки пластиковые (<b>2514862</b>) | Папки-портфели, папки-боксы (<b>2581727</b>) | Папки-регистраторы (<b>2581732</b>) | Папки-планшеты (<b>2581737</b>) | Папки и файлы подвесные (<b>2581742</b>) | Папки с файлами (<b>2595767</b>) | Архивные короба и боксы (<b>2666302</b>) | Папки специальные (<b>4626584</b>)',
                        ],
                        2 => [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'status' => 'Заблокированный',
                            'rz_categories_string' => '',
                        ],
                        3 => [
                            'id' => 474,
                            'title' => 'Распределить категорию в Lisa',
                            'difficulty' => 1,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'status' => 'Активный',
                            'rz_categories_string' => '',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/category/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/category/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/category/list?page=1',
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
                    'userNames' => RequestsTester::USER_NAMES,
                    'exportUrl' => 'http://lisa.api/files/выгрузка_связанных_категорий_LISA.xlsx',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
                ]
            ],
            'RabbitMQ' => [
                'lisa_rzCategoriesExport' => []
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Категория Lisa',
                    'B' => 'Категория 1 уровня',
                    'C' => 'Категория 2 уровня',
                    'D' => 'Категория 3 уровня',
                    'E' => 'Категория 4 уровня',
                    'F' => 'Категория 5 уровня',
                ],
                2 => [
                    'A' => 'Авиабилеты (1)',
                    'B' => 'Алкогольные напитки и продукты питания (4626923)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                3 => [
                    'A' => 'Авиабилеты (1)',
                    'B' => 'Алкогольные напитки и продукты питания (4626923)',
                    'C' => 'Аксессуары для алкоголя (753399)',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                4 => [
                    'A' => 'Авиабилеты (1)',
                    'B' => 'Алкогольные напитки и продукты питания (4626923)',
                    'C' => 'Аксессуары для алкоголя (753399)',
                    'D' => 'Мини-бары (4652996)',
                    'E' => '',
                    'F' => '',
                ],
                5 => [
                    'A' => 'Авиабилеты (1)',
                    'B' => 'Алкогольные напитки и продукты питания (4626923)',
                    'C' => 'Аксессуары для алкоголя (753399)',
                    'D' => 'Фляги (4653010)',
                    'E' => '',
                    'F' => '',
                ],
                6 => [
                    'A' => 'Авиабилеты (1)',
                    'B' => 'Алкогольные напитки и продукты питания (4626923)',
                    'C' => 'Аксессуары для алкоголя (753399)',
                    'D' => 'Упаковки для алкогольных напитков (4653017)',
                    'E' => '',
                    'F' => '',
                ],
                7 => [
                    'A' => 'Авиабилеты (1)',
                    'B' => 'Смартфоны, ТВ и электроника (4627949)',
                    'C' => 'неизвестная категория (80258)',
                    'D' => 'Фото и видео (4628124)',
                    'E' => '',
                    'F' => '',
                ],
                8 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Файлы (2514857)',
                    'F' => '',
                ],
                9 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Визитницы (2514867)',
                    'F' => '',
                ],
                10 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Бейджи, брелоки-идентификаторы, настольные таблички (2514872)',
                    'F' => '',
                ],
                11 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Банковские принадлежности (2560747)',
                    'F' => '',
                ],
                12 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => '',
                ],
                13 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Папки пластиковые (2514862)',
                ],
                14 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Папки-портфели, папки-боксы (2581727)',
                ],
                15 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Папки-регистраторы (2581732)',
                ],
                16 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Папки-планшеты (2581737)',
                ],
                17 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Папки и файлы подвесные (2581742)',
                ],
                18 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Папки с файлами (2595767)',
                ],
                19 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Архивные короба и боксы (2666302)',
                ],
                20 => [
                    'A' => 'Видео к товару (2)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Папки, регистраторы (2581722)',
                    'F' => 'Папки специальные (4626584)',
                ],
                21 => [
                    'A' => '(не привязано)',
                    'B' => 'Одежда, обувь и аксессуары (1162030)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                22 => [
                    'A' => '(не привязано)',
                    'B' => 'Товары для дома (2394287)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                23 => [
                    'A' => '(не привязано)',
                    'B' => 'Дача, сад, огород (2394297)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                24 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                25 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                26 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => '',
                    'F' => '',
                ],
                27 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => '',
                    'F' => '',
                ],
                27 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Штемпельная продукция (2514877)',
                    'F' => '',
                ],
                28 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Штемпельная продукция (2514877)',
                    'F' => 'Самонаборные штампы, кассы букв (2898382)',
                ],
                29 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Штемпельная продукция (2514877)',
                    'F' => 'Штемпельные краски и подушки (2898387)',
                ],
                30 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Штемпельная продукция (2514877)',
                    'F' => 'Датеры (4628926)',
                ],
                31 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Штемпельная продукция (2514877)',
                    'F' => 'Оснастки, штампы стандартные (4629073)',
                ],
                32 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Разделители и закладки (2660622)',
                    'F' => '',
                ],
                33 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Новая категория (2973057)',
                    'F' => '',
                ],
                34 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Новая категория (3167120)',
                    'F' => '',
                ],
                35 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Шило, нити и шпагаты (4630034)',
                    'F' => '',
                ],
                36 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Настольные картотеки (4641568)',
                    'F' => '',
                ],
                37 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Пломбы и пломбираторы (4655242)',
                    'F' => '',
                ],
                38 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Сургуч (4655266)',
                    'F' => '',
                ],
                39 => [
                    'A' => '(не привязано)',
                    'B' => 'Офис, школа, книги (4625734)',
                    'C' => 'Канцелярия (2460392)',
                    'D' => 'Архивирование и делопроизводство (2460402)',
                    'E' => 'Досточки для оттиска (4655272)',
                    'F' => '',
                ],
                40 => [
                    'A' => '(не привязано)',
                    'B' => 'Товары для бизнеса (4627851)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                41 => [
                    'A' => '(не привязано)',
                    'B' => 'Спорт и увлечения (4627893)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                42 => [
                    'A' => '(не привязано)',
                    'B' => 'Смартфоны, ТВ и электроника (4627949)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                43 => [
                    'A' => '(не привязано)',
                    'B' => 'Сантехника и ремонт (4628418)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                44 => [
                    'A' => '(не привязано)',
                    'B' => 'Красота и здоровье (4629305)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                45 => [
                    'A' => '(не привязано)',
                    'B' => 'Услуги и сервисы (4630262)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                46 => [
                    'A' => '(не привязано)',
                    'B' => 'Скрытые (4655025)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                47 => [
                    'A' => '(не привязано)',
                    'B' => 'Сельское хозяйство (4655216)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                48 => [
                    'A' => '(не привязано)',
                    'B' => 'Скрытые товары (4656380)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                49 => [
                    'A' => '(не привязано)',
                    'B' => 'Бытовая техника, интерьер (80025)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                50 => [
                    'A' => '(не привязано)',
                    'B' => 'Компьютеры и ноутбуки (80253)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                51 => [
                    'A' => '(не привязано)',
                    'B' => 'Подарки и товары для праздников (80260)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                52 => [
                    'A' => '(не привязано)',
                    'B' => 'Скрытые категории (80262)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                53 => [
                    'A' => '(не привязано)',
                    'B' => 'Уцененные товары (83850)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                54 => [
                    'A' => '(не привязано)',
                    'B' => 'Оружие (84625)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
                55 => [
                    'A' => '(не привязано)',
                    'B' => 'Товары для детей (88468)',
                    'C' => '',
                    'D' => '',
                    'E' => '',
                    'F' => '',
                ],
            ]
        ]
    ],

];