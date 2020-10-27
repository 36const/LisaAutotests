<?php

use lisa\Page\Functional\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки приоритета',
            'column' => 'priority',
            'value' => 'Товар-новинка/эксклюзив (трафикообразующий)',
            'amount' => 14,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Информация необходима для склада')],
                        ["selector" => Request::columnValueList('Исправление критичной ошибки')],
                        ["selector" => Request::columnValueList('Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Информация необходима для склада')],
                        ["selector" => Request::searchValueList('priority', 'Исправление критичной ошибки')],
                        ["selector" => Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::searchValueList('priority', '(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],

            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Исправление критичной ошибки')],
                        ["selector" => Request::searchValueList('priority', 'Информация необходима для склада')],
                        ["selector" => Request::searchValueList('priority', '(не задано)')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                    ]
                ],
            ],

            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Исправление критичной ошибки')],
                        ["selector" => Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::searchValueList('priority', '(не задано)')],
                        ["selector" => Request::searchValueList('priority', 'Информация необходима для склада')],
                    ]
                ],
            ],

        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки причины',
            'column' => 'reason_id',
            'value' => '(не задано)',
            'amount' => 7,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Все товары уже есть на сайте')],
                        ["selector" => Request::columnValueList('Другое (описан в коментариях)')],
                        ["selector" => Request::columnValueList('Дубль задачи')],
                        ["selector" => Request::columnValueList('Изменен приоритет задачи')],
                        ["selector" => Request::columnValueList('Не получена запрошенная недостающая информация')],
                        ["selector" => Request::columnValueList('Нинада')],
                        ["selector" => Request::columnValueList('Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::columnValueList('Ожидается загрузка товаров в систему')],
                        ["selector" => Request::columnValueList('Ожидается загрузка фото в товары')],
                        ["selector" => Request::columnValueList('Товары ушли в ошибки')],
                        ["selector" => Request::columnValueList('Требуется уточнение информации по задаче')],
                        ["selector" => Request::columnValueList('Часть товаров ушла в ошибки')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id', 'Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id', 'Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id', 'Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id', 'Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id', 'Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id', 'Нинада')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id', 'Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id', 'Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id', 'Часть товаров ушла в ошибки')],
                        ["selector" => Request::searchValueList('reason_id', '(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id', 'Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id', 'Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id', 'Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id', 'Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id', 'Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id', 'Нинада')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id', 'Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id', 'Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id', 'Часть товаров ушла в ошибки')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id', '(не задано)')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id', 'Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id', 'Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id', 'Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id', 'Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id', 'Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id', 'Нинада')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id', 'Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id', 'Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id', 'Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id', 'Часть товаров ушла в ошибки')],
                        ["selector" => Request::searchValueList('reason_id', '(не задано)')],
                    ]
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки уточнений',
            'column' => 'author_clarifications',
            'value' => 'Более 5 уточнений',
            'amount' => 22,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Без уточнений')],
                        ["selector" => Request::columnValueList('Более 5 уточнений')],
                        ["selector" => Request::columnValueList('Менее 5 уточнений')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications', 'Без уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', 'Более 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', 'Менее 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', '(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications', 'Без уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', 'Менее 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', '(не задано)')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications', 'Более 5 уточнений')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications', 'Без уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', 'Более 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', 'Менее 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications', '(не задано)')],
                    ]
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки типов',
            'column' => 'type_id',
            'value' => 'Добавление/изменение информации в существующих товарах',
            'amount' => 22,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Добавление новых товаров')],
                        ["selector" => Request::columnValueList('Добавление/изменение информации в существующих товарах')],
                        ["selector" => Request::columnValueList('Перенос товаров')],
                        ["selector" => Request::columnValueList('Группировка товаров')],
                        ["selector" => Request::columnValueList('Заливка фото с фотостудии')],
                        ["selector" => Request::columnValueList('Проверка скрытых товаров')],
                        ["selector" => Request::columnValueList('Добавление нового портала/раздела фат-меню/категории товаров')],
                        ["selector" => Request::columnValueList('Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров')],
                        ["selector" => Request::columnValueList('Добавление параметров/значений')],
                        ["selector" => Request::columnValueList('Изменение существующих параметров/значений')],
                        ["selector" => Request::columnValueList('Проектирование структуры')],
                        ["selector" => Request::columnValueList('Добавление новых СЦ/изменение существующих СЦ')],
                        ["selector" => Request::columnValueList('Добавление/изменение видео')],
                        ["selector" => Request::columnValueList('Добавление/изменение размерной сетки')],
                        ["selector" => Request::columnValueList('Добавление/изменение тегов')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('type_id', 'Добавление новых товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение информации в существующих товарах')],
                        ["selector" => Request::searchValueList('type_id', 'Перенос товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Группировка товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Заливка фото с фотостудии')],
                        ["selector" => Request::searchValueList('type_id', 'Проверка скрытых товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление параметров/значений')],
                        ["selector" => Request::searchValueList('type_id', 'Изменение существующих параметров/значений')],
                        ["selector" => Request::searchValueList('type_id', 'Проектирование структуры')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление новых СЦ/изменение существующих СЦ')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение видео')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение размерной сетки')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение тегов')],
                        ["selector" => Request::searchValueList('type_id', '(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('type_id', 'Добавление новых товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Перенос товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Группировка товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Заливка фото с фотостудии')],
                        ["selector" => Request::searchValueList('type_id', 'Проверка скрытых товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление параметров/значений')],
                        ["selector" => Request::searchValueList('type_id', 'Изменение существующих параметров/значений')],
                        ["selector" => Request::searchValueList('type_id', 'Проектирование структуры')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление новых СЦ/изменение существующих СЦ')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение видео')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение размерной сетки')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение тегов')],
                        ["selector" => Request::searchValueList('type_id', '(не задано)')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение информации в существующих товарах')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('type_id', 'Добавление новых товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение информации в существующих товарах')],
                        ["selector" => Request::searchValueList('type_id', 'Перенос товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Группировка товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Заливка фото с фотостудии')],
                        ["selector" => Request::searchValueList('type_id', 'Проверка скрытых товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление параметров/значений')],
                        ["selector" => Request::searchValueList('type_id', 'Изменение существующих параметров/значений')],
                        ["selector" => Request::searchValueList('type_id', 'Проектирование структуры')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление новых СЦ/изменение существующих СЦ')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение видео')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение размерной сетки')],
                        ["selector" => Request::searchValueList('type_id', 'Добавление/изменение тегов')],
                        ["selector" => Request::searchValueList('type_id', '(не задано)')],
                    ]
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки отчётных периодов КМ',
            'column' => 'report_period_id',
            'value' => '2020-04-01 - 2020-06-30',
            'amount' => 24,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('2020-01-01 - 2020-03-31')],
                        ["selector" => Request::columnValueList('2020-04-01 - 2020-06-30')],
                        ["selector" => Request::columnValueList('2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::columnValueList(date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('report_period_id', '2020-01-01 - 2020-03-31')],
                        ["selector" => Request::searchValueList('report_period_id', '2020-04-01 - 2020-06-30')],
                        ["selector" => Request::searchValueList('report_period_id', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::searchValueList('report_period_id', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                        ["selector" => Request::searchValueList('report_period_id', '(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('report_period_id', '2020-01-01 - 2020-03-31')],
                        ["selector" => Request::searchValueList('report_period_id', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::searchValueList('report_period_id', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                        ["selector" => Request::searchValueList('report_period_id', '(не задано)')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('report_period_id', '2020-04-01 - 2020-06-30')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('report_period_id', '2020-01-01 - 2020-03-31')],
                        ["selector" => Request::searchValueList('report_period_id', '2020-04-01 - 2020-06-30')],
                        ["selector" => Request::searchValueList('report_period_id', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::searchValueList('report_period_id', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                        ["selector" => Request::searchValueList('report_period_id', '(не задано)')],
                    ]
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки отчётных периодов СВ',
            'column' => 'sv_report_periods',
            'value' => '(не задано)',
            'amount' => 12,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('2020-01-01 - 2020-03-31')],
                        ["selector" => Request::columnValueList('2020-04-01 - 2020-06-30')],
                        ["selector" => Request::columnValueList('2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::columnValueList(date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-01-01 - 2020-03-31')],
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-04-01 - 2020-06-30')],
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::searchValueList('sv_report_periods', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                        ["selector" => Request::searchValueList('sv_report_periods', '(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-01-01 - 2020-03-31')],
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-04-01 - 2020-06-30')],
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::searchValueList('sv_report_periods', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('sv_report_periods', '(не задано)')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-01-01 - 2020-03-31')],
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-04-01 - 2020-06-30')],
                        ["selector" => Request::searchValueList('sv_report_periods', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week')))],
                        ["selector" => Request::searchValueList('sv_report_periods', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31')],
                        ["selector" => Request::searchValueList('sv_report_periods', '(не задано)')],
                    ]
                ],
            ],
        ]
    ],

];