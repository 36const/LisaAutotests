<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Основные, вкладка Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'ef6ef760,50cd524a,bf04724b,4a16cdfb,805bbc04,3d33757d,ddcc7b4a,54eab21f,6f4cf3ff',
                '_csrf-backend' => null,
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='2']",
                        "value" => "ID задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='3']",
                        "value" => "Заголовок"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='4']",
                        "value" => "Тип"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='5']",
                        "value" => "Создатель заявки"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='6']",
                        "value" => "Супервайзер заявки"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='7']",
                        "value" => "Менеджер заявки"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='8']",
                        "value" => "Статус"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='9']",
                        "value" => "Направление задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='10']",
                        "value" => "Направление команды"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='11']",
                        "value" => "Категория товаров"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='12']",
                        "value" => "Продавец"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='13']",
                        "value" => "Приоритет"
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Списки, вкладка Ожидает взятия в работу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'in-check',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'd82b34cd,7551a25e,216af811,195c6167,7100d06f,9f3bab20,3a15b8f6,12fe4397,132cbbd2',
                '_csrf-backend' => null,
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='2']",
                        "value" => "ID задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='3']",
                        "value" => "Заголовок"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='4']",
                        "value" => "Тип"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='5']",
                        "value" => "ID связанной задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='6']",
                        "value" => "Уровень сложности задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='7']",
                        "value" => "На исправление"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='8']",
                        "value" => "Причина"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='9']",
                        "value" => "Уточнения. Количество уточнений у автора"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='10']",
                        "value" => "Наличие фото к товарам"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='11']",
                        "value" => "Наличие характеристик к товарам"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='12']",
                        "value" => "Наличие описаний к товарам"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='13']",
                        "value" => "Язык информации"
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Текстовые поля, вкладка На проверке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'require-changes',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'f237cb47,cb2e0668,f5a35a47,a5480d6b,00bab8f4',
                '_csrf-backend' => null,
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='2']",
                        "value" => "ID задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='3']",
                        "value" => "Заголовок"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='4']",
                        "value" => "Тип"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='5']",
                        "value" => "Описание"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='6']",
                        "value" => "Причина отмены/доработки"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='7']",
                        "value" => "Рекомендации"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='8']",
                        "value" => "Комментарий на исправление"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='9']",
                        "value" => "Комментарий к результату задачи"
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Числовые поля, вкладка Ожидает взятия в работу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'wait-work',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => '45671659,9cf76095,4017ea5d,fdd5e993,f69e93e9,e7ee29ab',
                '_csrf-backend' => null,
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='2']",
                        "value" => "ID задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='3']",
                        "value" => "Заголовок"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='4']",
                        "value" => "Тип"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='5']",
                        "value" => "Количество в работу"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='6']",
                        "value" => "Количество добавленных товаров"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='7']",
                        "value" => "Количество измененных товаров"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='8']",
                        "value" => "Количество товаров, которые уже есть в БД"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='9']",
                        "value" => "Рассчитанное количество проверенных товаров"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='10']",
                        "value" => "Рассчитанное количество проверенных товаров с ошибками"
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Даты, вкладка В работе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'in-work',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'd4c95f87,9036328c,4a81e2dd,d0e05655,41125d67,5e00cc71,93b970aa,266c381f,0788d3f1,06b2967b,67b74568,ee469705',
                '_csrf-backend' => null,
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='2']",
                        "value" => "ID задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='3']",
                        "value" => "Заголовок"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='4']",
                        "value" => "Тип"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='5']",
                        "value" => "Ручная загрузка"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='6']",
                        "value" => "Пакетная загрузка"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='7']",
                        "value" => "Виза супервайзера"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='8']",
                        "value" => "С фотосъемкой"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='9']",
                        "value" => "Точки входа"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='10']",
                        "value" => "Добавление графики"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='11']",
                        "value" => "С размерной сеткой"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='12']",
                        "value" => "С тегами к товарам"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='13']",
                        "value" => "Уценка"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='14']",
                        "value" => "Уценка 2"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='15']",
                        "value" => "На основе отзыва клиента на сайте"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='16']",
                        "value" => "Жалоба на товар продавца маркета"
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Чек-боксы, вкладка Ожидает',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'on-hold',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'f4f49851,329730bf,100af6ba,f3809f80,2cbe2443,29902e9a,e7f76e0d,5800ee87,07546bc1,43f73178,4c698919,80fd31f5',
                '_csrf-backend' => null,
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='2']",
                        "value" => "ID задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='3']",
                        "value" => "Заголовок"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='4']",
                        "value" => "Тип"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='5']",
                        "value" => "Промо-описание"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='6']",
                        "value" => "Добавление товаров в новую категорию"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='7']",
                        "value" => "БУ, REF"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='8']",
                        "value" => "Обновление фото"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='9']",
                        "value" => "Обновление описания"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='10']",
                        "value" => "Обновление характеристик"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='11']",
                        "value" => "Автомодерация"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='12']",
                        "value" => "Добавление/обновление инструкций"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='13']",
                        "value" => "Стоп-бренды"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='14']",
                        "value" => "С палитрой"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='15']",
                        "value" => "Лоты"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='16']",
                        "value" => "С видео"
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Чек-боксы, вкладка Выполнены',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'completed',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'f4f49851,329730bf,100af6ba,f3809f80,2cbe2443,29902e9a,e7f76e0d,5800ee87,07546bc1,43f73178,4c698919,80fd31f5',
                '_csrf-backend' => null,
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='2']",
                        "value" => "ID задачи"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='3']",
                        "value" => "Заголовок"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='4']",
                        "value" => "Тип"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='5']",
                        "value" => "Промо-описание"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='6']",
                        "value" => "Добавление товаров в новую категорию"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='7']",
                        "value" => "БУ, REF"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='8']",
                        "value" => "Обновление фото"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='9']",
                        "value" => "Обновление описания"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='10']",
                        "value" => "Обновление характеристик"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='11']",
                        "value" => "Автомодерация"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='12']",
                        "value" => "Добавление/обновление инструкций"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='13']",
                        "value" => "Стоп-бренды"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='14']",
                        "value" => "С палитрой"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='15']",
                        "value" => "Лоты"
                    ],
                    [
                        "selector" => "//thead/tr/th[@data-col-seq='16']",
                        "value" => "С видео"
                    ],
                ]
            ]
        ]
    ],

];
