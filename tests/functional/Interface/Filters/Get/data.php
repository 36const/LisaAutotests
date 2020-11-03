<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Пустая страница фильтров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "emptyTable" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ]
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Пустая страница фильтров с сортировкой по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=name',
            "pageObjects" => [
                "canSee" => [
                    "emptyTable" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ]
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Пустая страница фильтров с сортировкой по условию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=conditions',
            "pageObjects" => [
                "canSee" => [
                    "emptyTable" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ]
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница с существующими фильтрами без сортировки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Фильтр 1" => [
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[1]',
                            "value" => "Фильтр1"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[2]',
                            "value" => "ID задачи, Уценка, Уценка 2, Обновление фото, Обновление описания, Обновление характеристик, Добавление/обновление инструкций, Автомодерация, На основе отзыва клиента на сайте, Жалоба на товар продавца маркета, Промо-описание, С видео, Лоты, БУ, REF, Добавление товаров в новую категорию, С палитрой, Ручная загрузка, Пакетная загрузка, Виза супервайзера, С фотосъемкой, Стоп-бренды, Точки входа, Добавление графики, С размерной сеткой, С тегами к товарам, Статус исполнения, Заголовок, Тип, Приоритет, Создатель заявки, Направление задачи, ID связанной задачи, Причина, Продавец, Дата регистрации задачи в системе, Менеджер заявки, Категория товаров, Описание, Супервайзер заявки, Количество в работу, Комментарий к результату задачи, Направление команды, Рекомендации, Отчетный период КМ, Фактическая дата начала работ, Отчетные периоды СВ, Фактическая дата завершения, Комментарий на исправление, Плановая дата начала работ, Комментарий супервайзера, На исправление, Плановая дата завершения, Дата последнего изменения статуса, Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[3]//a[@href="/bpm/filter/update?id=1"]',
                            "value" => null
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[3]//a[@href="/bpm/filter/delete?id=1"]',
                            "value" => null
                        ],
                    ],
                    "Фильтр 2" => [
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[1]',
                            "value" => "Фильтр2"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[2]',
                            "value" => "ID задачи, Уценка, Уценка 2, Обновление фото, Обновление описания, Обновление характеристик, Добавление/обновление инструкций, Автомодерация, На основе отзыва клиента на сайте, Жалоба на товар продавца маркета, Промо-описание, С видео, Лоты, БУ, REF, Добавление товаров в новую категорию, С палитрой, Ручная загрузка, Пакетная загрузка, Виза супервайзера, С фотосъемкой, Стоп-бренды, Точки входа, Добавление графики, С размерной сеткой, С тегами к товарам, Статус исполнения, Заголовок, Тип, Приоритет, Создатель заявки, Направление задачи, ID связанной задачи, Причина, Продавец, Дата регистрации задачи в системе, Менеджер заявки, Категория товаров, Описание, Супервайзер заявки, Количество в работу, Комментарий к результату задачи, Направление команды, Рекомендации, Отчетный период КМ, Фактическая дата начала работ, Отчетные периоды СВ, Фактическая дата завершения, Комментарий на исправление, Плановая дата начала работ, Комментарий супервайзера, На исправление, Плановая дата завершения, Дата последнего изменения статуса, Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[3]//a[@href="/bpm/filter/update?id=2"]',
                            "value" => null
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[3]//a[@href="/bpm/filter/delete?id=2"]',
                            "value" => null
                        ],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница с существующими фильтрами с обратной сортировкой по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "url" => "?sort=-name",
            "pageObjects" => [
                "canSee" => [
                    "Фильтр 2" => [
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[1]',
                            "value" => "Фильтр2"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[2]',
                            "value" => "ID задачи, Уценка, Уценка 2, Обновление фото, Обновление описания, Обновление характеристик, Добавление/обновление инструкций, Автомодерация, На основе отзыва клиента на сайте, Жалоба на товар продавца маркета, Промо-описание, С видео, Лоты, БУ, REF, Добавление товаров в новую категорию, С палитрой, Ручная загрузка, Пакетная загрузка, Виза супервайзера, С фотосъемкой, Стоп-бренды, Точки входа, Добавление графики, С размерной сеткой, С тегами к товарам, Статус исполнения, Заголовок, Тип, Приоритет, Создатель заявки, Направление задачи, ID связанной задачи, Причина, Продавец, Дата регистрации задачи в системе, Менеджер заявки, Категория товаров, Описание, Супервайзер заявки, Количество в работу, Комментарий к результату задачи, Направление команды, Рекомендации, Отчетный период КМ, Фактическая дата начала работ, Отчетные периоды СВ, Фактическая дата завершения, Комментарий на исправление, Плановая дата начала работ, Комментарий супервайзера, На исправление, Плановая дата завершения, Дата последнего изменения статуса, Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[3]//a[@href="/bpm/filter/update?id=2"]',
                            "value" => null
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[3]//a[@href="/bpm/filter/delete?id=2"]',
                            "value" => null
                        ],
                    ],
                    "Фильтр 1" => [
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[1]',
                            "value" => "Фильтр1"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[2]',
                            "value" => "ID задачи, Уценка, Уценка 2, Обновление фото, Обновление описания, Обновление характеристик, Добавление/обновление инструкций, Автомодерация, На основе отзыва клиента на сайте, Жалоба на товар продавца маркета, Промо-описание, С видео, Лоты, БУ, REF, Добавление товаров в новую категорию, С палитрой, Ручная загрузка, Пакетная загрузка, Виза супервайзера, С фотосъемкой, Стоп-бренды, Точки входа, Добавление графики, С размерной сеткой, С тегами к товарам, Статус исполнения, Заголовок, Тип, Приоритет, Создатель заявки, Направление задачи, ID связанной задачи, Причина, Продавец, Дата регистрации задачи в системе, Менеджер заявки, Категория товаров, Описание, Супервайзер заявки, Количество в работу, Комментарий к результату задачи, Направление команды, Рекомендации, Отчетный период КМ, Фактическая дата начала работ, Отчетные периоды СВ, Фактическая дата завершения, Комментарий на исправление, Плановая дата начала работ, Комментарий супервайзера, На исправление, Плановая дата завершения, Дата последнего изменения статуса, Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[3]//a[@href="/bpm/filter/update?id=1"]',
                            "value" => null
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[3]//a[@href="/bpm/filter/delete?id=1"]',
                            "value" => null
                        ],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница с существующими фильтрами и поиском по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "url" => "?FilterSearch%5Bname%5D=Фильтр1",
            "pageObjects" => [
                "canSee" => [
                    "Фильтр 1" => [
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[1]',
                            "value" => "Фильтр1"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[2]',
                            "value" => "ID задачи, Уценка, Уценка 2, Обновление фото, Обновление описания, Обновление характеристик, Добавление/обновление инструкций, Автомодерация, На основе отзыва клиента на сайте, Жалоба на товар продавца маркета, Промо-описание, С видео, Лоты, БУ, REF, Добавление товаров в новую категорию, С палитрой, Ручная загрузка, Пакетная загрузка, Виза супервайзера, С фотосъемкой, Стоп-бренды, Точки входа, Добавление графики, С размерной сеткой, С тегами к товарам, Статус исполнения, Заголовок, Тип, Приоритет, Создатель заявки, Направление задачи, ID связанной задачи, Причина, Продавец, Дата регистрации задачи в системе, Менеджер заявки, Категория товаров, Описание, Супервайзер заявки, Количество в работу, Комментарий к результату задачи, Направление команды, Рекомендации, Отчетный период КМ, Фактическая дата начала работ, Отчетные периоды СВ, Фактическая дата завершения, Комментарий на исправление, Плановая дата начала работ, Комментарий супервайзера, На исправление, Плановая дата завершения, Дата последнего изменения статуса, Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[3]//a[@href="/bpm/filter/update?id=1"]',
                            "value" => null
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[1]//td[3]//a[@href="/bpm/filter/delete?id=1"]',
                            "value" => null
                        ],
                    ]
                ],
                "cantSee" => [
                    "Фильтр 2" => [
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[1]',
                            "value" => "Фильтр2"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[2]',
                            "value" => "ID задачи, Уценка, Уценка 2, Обновление фото, Обновление описания, Обновление характеристик, Добавление/обновление инструкций, Автомодерация, На основе отзыва клиента на сайте, Жалоба на товар продавца маркета, Промо-описание, С видео, Лоты, БУ, REF, Добавление товаров в новую категорию, С палитрой, Ручная загрузка, Пакетная загрузка, Виза супервайзера, С фотосъемкой, Стоп-бренды, Точки входа, Добавление графики, С размерной сеткой, С тегами к товарам, Статус исполнения, Заголовок, Тип, Приоритет, Создатель заявки, Направление задачи, ID связанной задачи, Причина, Продавец, Дата регистрации задачи в системе, Менеджер заявки, Категория товаров, Описание, Супервайзер заявки, Количество в работу, Комментарий к результату задачи, Направление команды, Рекомендации, Отчетный период КМ, Фактическая дата начала работ, Отчетные периоды СВ, Фактическая дата завершения, Комментарий на исправление, Плановая дата начала работ, Комментарий супервайзера, На исправление, Плановая дата завершения, Дата последнего изменения статуса, Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[3]//a[@href="/bpm/filter/update?id=2"]',
                            "value" => null
                        ],
                        [
                            "selector" => '//*[@id="w0"]//tbody//tr[2]//td[3]//a[@href="/bpm/filter/delete?id=2"]',
                            "value" => null
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Поля существующего фильтра',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            "url" => "/update?id=1",
            "pageObjects" => [
                "canSee" => [
                    "Создатель" => [
                        [
                            "selector" => "//select[@name='request_field[author_id][]']/option[1][@value='17']",
                            "value" => "Менеджер Продактович 1"
                        ],
                        [
                            "selector" => "//select[@name='request_field[author_id][]']/option[2][@value='19']",
                            "value" => "Сео Сеошевич 1"
                        ],
                        [
                            "selector" => "//select[@name='request_field[author_id][]']/option[3][@value='15']",
                            "value" => "Тим Лидович 1"
                        ],
                    ],
                    "Менеджер" => [
                        [
                            "selector" => "//select[@name='request_field[manager_id][]']/option[1][@value='11']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//select[@name='request_field[manager_id][]']/option[2][@value='13']",
                            "value" => "Менеджер Контентович 2А"
                        ],
                    ],
                    "Кросс-чек менеджер" => [
                        [
                            "selector" => "//select[@name='request_field[cross_check_manager_id][]']/option[1][@value='12']",
                            "value" => "Менеджер Контентович 1Б"
                        ],
                        [
                            "selector" => "//select[@name='request_field[cross_check_manager_id][]']/option[2][@value='14']",
                            "value" => "Менеджер Контентович 2Б"
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//select[@name='request_field[supervisor_id][]']/option[1][@value='33']",
                            "value" => "Супервайзер Групповушкин 13"
                        ],
                        [
                            "selector" => "//select[@name='request_field[supervisor_id][]']/option[2][@value='35']",
                            "value" => "Супервайзер Категоркин 15"
                        ],
                        [
                            "selector" => "//select[@name='request_field[supervisor_id][]']/option[3][@value='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                    ],
                    "Продавец" => [
                        [
                            "selector" => "//select[@name='request_field[seller_id][]']/option[1][@value='5']",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//select[@name='request_field[seller_id][]']/option[2][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='request_field[seller_id][]']/option[3][@value='0']",
                            "value" => "Маркетплейс (общий)"
                        ],
                    ],
                    "Категория" => [
                        [
                            "selector" => "//select[@name='request_field[category_id][]']/option[1][@value='1']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//select[@name='request_field[category_id][]']/option[2][@value='2']",
                            "value" => "Видео к товару"
                        ],
                    ],
                    "Тип" => [
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[1][@value='1']",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[2][@value='2']",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[3][@value='7']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[4][@value='8']",
                            "value" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[5][@value='9']",
                            "value" => "Добавление параметров/значений"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[6][@value='12']",
                            "value" => "Добавление новых СЦ/изменение существующих СЦ"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[7][@value='13']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[8][@value='14']",
                            "value" => "Добавление/изменение размерной сетки"
                        ],
                        [
                            "selector" => "//select[@name='request_field[type_id][]']/option[9][@value='15']",
                            "value" => "Добавление/изменение тегов"
                        ],
                    ],
                    "Чек-боксы" => [
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[1]' and @checked]",
                            //"value" => " Ручная загрузка"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[2]' and @checked]",
                            //"value" => " Пакетная загрузка"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[3]' and @checked]",
                            //"value" => " Виза супервайзера"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[4]' and @checked]",
                            //"value" => " С фотосъемкой"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[5]' and @checked]",
                            //"value" => " Стоп-бренды"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[6]' and @checked]",
                            //"value" => " Точки входа"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[7]' and @checked]",
                            //"value" => " Добавление графики"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[8]' and @checked]",
                            //"value" => " С размерной сеткой"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[9]' and @checked]",
                            //"value" => " С тегами к товарам"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[10]' and @checked]",
                            //"value" => " Уценка"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[11]' and @checked]",
                            //"value" => "  Уценка 2"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[12]' and @checked]",
                            //"value" => " На основе отзыва клиента на сайте"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[13]' and @checked]",
                            //"value" => " Жалоба на товар продавца маркета"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[14]' and @checked]",
                            //"value" => " Промо-описание"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[15]' and @checked]",
                            //"value" => " С видео"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[16]' and @checked]",
                            //"value" => " Лоты"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[17]' and @checked]",
                            //"value" => " БУ, REF"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[18]' and @checked]",
                            //"value" => " Добавление товаров в новую категорию"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[19]' and @checked]",
                            //"value" => " С палитрой"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[123]' and @checked]",
                            //"value" => " Обновление фото"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[124]' and @checked]",
                            //"value" => " Обновление описания"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[125]' and @checked]",
                            //"value" => " Обновление характеристик"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[126]' and @checked]",
                            //"value" => " С палитрой"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[127]' and @checked]",
                            //"value" => " Автомодерация"
                        ],
                        [
                            "selector" => "//div[@id='field-ids']/table//input[@name='fields[159]' and @checked]",
                            //"value" => " По заявке с MobileCourier"
                        ],
                    ],
                    "Даты" => [
                        ["selector" => "//div[@class='col-md-6 attachments-update'][2]//input[@name='date[created_at]' and @value='2020-04-27 00:00to2020-05-03 23:59']",],
                        ["selector" => "//div[@class='col-md-6 attachments-update'][2]//input[@name='date[planned_start_date]' and @value='2020-05-04 00:00to2020-05-10 23:59']",],
                        ["selector" => "//div[@class='col-md-6 attachments-update'][2]//input[@name='date[planned_finish_date]' and @value='2020-05-11 00:00to2020-05-17 23:59']",],
                        ["selector" => "//div[@class='col-md-6 attachments-update'][2]//input[@name='date[actual_start_date]' and @value='2020-05-18 00:00to2020-05-24 23:59']",],
                        ["selector" => "//div[@class='col-md-6 attachments-update'][2]//input[@name='date[actual_finish_date]' and @value='2020-05-25 00:00to2020-05-31 23:59']",],
                        ["selector" => "//div[@class='col-md-6 attachments-update'][2]//input[@name='date[supervisor_process_date]' and @value='2020-06-01 00:00to2020-06-07 23:59']",],
                        ["selector" => "//div[@class='col-md-6 attachments-update'][2]//input[@name='date[last_change_status_date]' and @value='2020-06-08 00:00to2020-06-14 23:59']",],
                    ],
                    "Дополнительные фильтры (названия)" => [
                        [
                            "selector" => "//select[@id='filter-select2']/option[1][@value='id' and @selected]",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[2][@value='status' and @selected]",
                            "value" => "Статус исполнения"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[3][@value='awaiting_correction' and @selected]",
                            "value" => "На исправление"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[4][@value='subject' and @selected]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[5][@value='description' and @selected]",
                            "value" => "Описание"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[6][@value='direction' and @selected]",
                            "value" => "Направление задачи"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[7][@value='amount_to_work' and @selected]",
                            "value" => "Количество в работу"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[8][@value='recommendations' and @selected]",
                            "value" => "Рекомендации"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[9][@value='reason_id' and @selected]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[10][@value='parent_id' and @selected]",
                            "value" => "ID связанной задачи"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[11][@value='supervisor_check_date' and not(@selected)]",
                            "value" => "Дата проверки задачи супервайзером"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[12][@value='result_comment' and @selected]",
                            "value" => "Комментарий к результату задачи"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[13][@value='supervisor_comment' and @selected]",
                            "value" => "Комментарий супервайзера"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[14][@value='report_period_id' and @selected]",
                            "value" => "Отчетный период КМ"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[15][@value='team_direction' and @selected]",
                            "value" => "Направление команды"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[16][@value='correction_comment' and @selected]",
                            "value" => "Комментарий на исправление"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[17][@value='priority' and @selected]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[18][@value='sv_report_periods' and @selected]",
                            "value" => "Отчетные периоды СВ"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[19][@value='cross_check_status' and @selected]",
                            "value" => "Кросс-чек статус"
                        ],
                        [
                            "selector" => "//select[@id='filter-select2']/option[20][@value='employee_code_1c' and @selected]",
                            "value" => "Код работника 1С"
                        ],
                    ],
                    "Дополнительные фильтры (значения)" => [
                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[id]'][@value='10']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[1][@value='1' and @selected]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[2][@value='2' and @selected]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[3][@value='3' and @selected]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[4][@value='4' and @selected]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[5][@value='5' and @selected]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[6][@value='6' and @selected]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[7][@value='7' and @selected]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[8][@value='8' and @selected]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[9][@value='9' and @selected]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[status][]']/option[10][@value='11' and @selected]",
                            "value" => "Закрыта"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[subject]'][@value='250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[priority][]']/option[1][@value='1' and @selected]",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[priority][]']/option[2][@value='3' and @selected]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[priority][]']/option[3][@value='2' and @selected]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[direction][]']/option[1][@value='0' and @selected]",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[direction][]']/option[2][@value='1' and @selected]",
                            "value" => "Работа с товарами Розетки"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[direction][]']/option[3][@value='2' and @selected]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[parent_id]'][@value='11']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[1][@value='14' and @selected]",
                            "value" => "Все товары уже есть на сайте (Готова для распределения -> Отменена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[2][@value='10' and @selected]",
                            "value" => "Все товары уже есть на сайте (В работе -> Отменена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[3][@value='12' and @selected]",
                            "value" => "Все товары уже есть на сайте (Новая -> Отменена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[4][@value='15' and @selected]",
                            "value" => "Другое (описан в коментариях) (Все -> Все)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[5][@value='11' and @selected]",
                            "value" => "Дубль задачи (Новая -> Отменена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[6][@value='13' and @selected]",
                            "value" => "Дубль задачи (Готова для распределения -> Отменена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[7][@value='9' and @selected]",
                            "value" => "Дубль задачи (В работе -> Отменена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[8][@value='3' and @selected]",
                            "value" => "Изменен приоритет задачи (В работе -> Ожидает)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[9][@value='6' and @selected]",
                            "value" => "Не получена запрошенная недостающая информация (В работе -> Частично выполнена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[10][@value='16' and not(@selected)]",
                            "value" => "Нинада (Готова для распределения -> На доработке)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[11][@value='17' and not(@selected)]",
                            "value" => "Ожидает группировки (В работе -> Ожидает)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[12][@value='5' and @selected]",
                            "value" => "Ожидается загрузка обновлений в систему (В работе -> Ожидает)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[13][@value='4' and @selected]",
                            "value" => "Ожидается загрузка товаров в систему (В работе -> Ожидает)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[14][@value='1' and @selected]",
                            "value" => "Ожидается загрузка фото в товары (В работе -> Ожидает)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[15][@value='7' and @selected]",
                            "value" => "Товары ушли в ошибки (В работе -> Частично выполнена)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[16][@value='2' and @selected]",
                            "value" => "Требуется уточнение информации по задаче (В работе -> Ожидает)"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[reason_id][]']/option[17][@value='8' and @selected]",
                            "value" => "Часть товаров ушла в ошибки (В работе -> Частично выполнена)"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[description]'][@value='250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[amount_to_work]'][@value='10']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[result_comment]'][@value='250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[team_direction][]']/option[1][@value='1' and @selected]",
                            "value" => "Управление отделом"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[team_direction][]']/option[2][@value='2' and @selected]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[team_direction][]']/option[3][@value='3' and @selected]",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[team_direction][]']/option[4][@value='4' and @selected]",
                            "value" => "Работа с группами"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[team_direction][]']/option[5][@value='5' and @selected]",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[team_direction][]']/option[6][@value='6' and @selected]",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[recommendations]'][@value='250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[employee_code_1c]'][@value='012']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[report_period_id][]']/option[1][@value='1' and @selected]",
                            "value" => "2020-01-01 - 2020-06-30"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[report_period_id][]']/option[2][@value='2' and @selected]",
                            "value" => "2020-07-01 - 2020-12-31"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[sv_report_periods][]']/option[1][@value='1' and @selected]",
                            "value" => "2020-01-01 - 2020-06-30"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[sv_report_periods][]']/option[2][@value='2' and @selected]",
                            "value" => "2020-07-01 - 2020-12-31"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[correction_comment]'][@value='250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[cross_check_status][]']/option[1][@value='0' and @selected]",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[cross_check_status][]']/option[2][@value='1' and @selected]",
                            "value" => "На кросс-чеке"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[cross_check_status][]']/option[3][@value='2']",
                            "value" => "Кросс-чек пройден"
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//input[@name='request_field[supervisor_comment]'][@value='250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ']",
                        ],

                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[awaiting_correction]']/option[1][@value='0' and not(@selected)]",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//div[@id='other-filters']//select[@name='request_field[awaiting_correction]']/option[2][@value='1' and @selected]",
                            "value" => "Да"
                        ],

                    ]
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],
];
