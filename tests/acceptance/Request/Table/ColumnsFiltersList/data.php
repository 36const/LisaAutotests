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
                    Request::columnValueList('Информация необходима для склада'),
                    Request::columnValueList('Исправление критичной ошибки'),
                    Request::columnValueList('Товар-новинка/эксклюзив (трафикообразующий)'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('priority', 'Информация необходима для склада'),
                    Request::searchValueList('priority', 'Исправление критичной ошибки'),
                    Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                    Request::searchValueList('priority', '(не задано)'),
                ],
                "cantSee" => [],
            ],

            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('priority', 'Исправление критичной ошибки'),
                    Request::searchValueList('priority', 'Информация необходима для склада'),
                    Request::searchValueList('priority', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                ],
            ],

            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('priority', 'Исправление критичной ошибки'),
                    Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                    Request::searchValueList('priority', '(не задано)'),
                    Request::searchValueList('priority', 'Информация необходима для склада'),
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
                    Request::columnValueList('Все товары уже есть на сайте'),
                    Request::columnValueList('Другое (описан в коментариях)'),
                    Request::columnValueList('Дубль задачи'),
                    Request::columnValueList('Изменен приоритет задачи'),
                    Request::columnValueList('Не получена запрошенная недостающая информация'),
                    Request::columnValueList('Нинада'),
                    Request::columnValueList('Ожидается загрузка обновлений в систему'),
                    Request::columnValueList('Ожидается загрузка товаров в систему'),
                    Request::columnValueList('Ожидается загрузка фото в товары'),
                    Request::columnValueList('Товары ушли в ошибки'),
                    Request::columnValueList('Требуется уточнение информации по задаче'),
                    Request::columnValueList('Часть товаров ушла в ошибки'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('reason_id', 'Все товары уже есть на сайте'),
                    Request::searchValueList('reason_id', 'Другое (описан в коментариях)'),
                    Request::searchValueList('reason_id', 'Дубль задачи'),
                    Request::searchValueList('reason_id', 'Изменен приоритет задачи'),
                    Request::searchValueList('reason_id', 'Не получена запрошенная недостающая информация'),
                    Request::searchValueList('reason_id', 'Нинада'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка обновлений в систему'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка товаров в систему'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка фото в товары'),
                    Request::searchValueList('reason_id', 'Товары ушли в ошибки'),
                    Request::searchValueList('reason_id', 'Требуется уточнение информации по задаче'),
                    Request::searchValueList('reason_id', 'Часть товаров ушла в ошибки'),
                    Request::searchValueList('reason_id', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('reason_id', 'Все товары уже есть на сайте'),
                    Request::searchValueList('reason_id', 'Другое (описан в коментариях)'),
                    Request::searchValueList('reason_id', 'Дубль задачи'),
                    Request::searchValueList('reason_id', 'Изменен приоритет задачи'),
                    Request::searchValueList('reason_id', 'Не получена запрошенная недостающая информация'),
                    Request::searchValueList('reason_id', 'Нинада'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка обновлений в систему'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка товаров в систему'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка фото в товары'),
                    Request::searchValueList('reason_id', 'Товары ушли в ошибки'),
                    Request::searchValueList('reason_id', 'Требуется уточнение информации по задаче'),
                    Request::searchValueList('reason_id', 'Часть товаров ушла в ошибки'),
                ],
                "cantSee" => [
                    Request::searchValueList('reason_id', '(не задано)'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('reason_id', 'Все товары уже есть на сайте'),
                    Request::searchValueList('reason_id', 'Другое (описан в коментариях)'),
                    Request::searchValueList('reason_id', 'Дубль задачи'),
                    Request::searchValueList('reason_id', 'Изменен приоритет задачи'),
                    Request::searchValueList('reason_id', 'Не получена запрошенная недостающая информация'),
                    Request::searchValueList('reason_id', 'Нинада'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка обновлений в систему'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка товаров в систему'),
                    Request::searchValueList('reason_id', 'Ожидается загрузка фото в товары'),
                    Request::searchValueList('reason_id', 'Товары ушли в ошибки'),
                    Request::searchValueList('reason_id', 'Требуется уточнение информации по задаче'),
                    Request::searchValueList('reason_id', 'Часть товаров ушла в ошибки'),
                    Request::searchValueList('reason_id', '(не задано)'),
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
                    Request::columnValueList('Без уточнений'),
                    Request::columnValueList('Более 5 уточнений'),
                    Request::columnValueList('Менее 5 уточнений'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('author_clarifications', 'Без уточнений'),
                    Request::searchValueList('author_clarifications', 'Более 5 уточнений'),
                    Request::searchValueList('author_clarifications', 'Менее 5 уточнений'),
                    Request::searchValueList('author_clarifications', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('author_clarifications', 'Без уточнений'),
                    Request::searchValueList('author_clarifications', 'Менее 5 уточнений'),
                    Request::searchValueList('author_clarifications', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('author_clarifications', 'Более 5 уточнений'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('author_clarifications', 'Без уточнений'),
                    Request::searchValueList('author_clarifications', 'Более 5 уточнений'),
                    Request::searchValueList('author_clarifications', 'Менее 5 уточнений'),
                    Request::searchValueList('author_clarifications', '(не задано)'),
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
                    Request::columnValueList('Добавление новых товаров'),
                    Request::columnValueList('Добавление/изменение информации в существующих товарах'),
                    Request::columnValueList('Перенос товаров'),
                    Request::columnValueList('Группировка товаров'),
                    Request::columnValueList('Заливка фото с фотостудии'),
                    Request::columnValueList('Проверка скрытых товаров'),
                    Request::columnValueList('Добавление нового портала/раздела фат-меню/категории товаров'),
                    Request::columnValueList('Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::columnValueList('Добавление параметров/значений'),
                    Request::columnValueList('Изменение существующих параметров/значений'),
                    Request::columnValueList('Проектирование структуры'),
                    Request::columnValueList('Добавление новых СЦ/изменение существующих СЦ'),
                    Request::columnValueList('Добавление/изменение видео'),
                    Request::columnValueList('Добавление/изменение размерной сетки'),
                    Request::columnValueList('Добавление/изменение тегов'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('type_id', 'Добавление новых товаров'),
                    Request::searchValueList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    Request::searchValueList('type_id', 'Перенос товаров'),
                    Request::searchValueList('type_id', 'Группировка товаров'),
                    Request::searchValueList('type_id', 'Заливка фото с фотостудии'),
                    Request::searchValueList('type_id', 'Проверка скрытых товаров'),
                    Request::searchValueList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                    Request::searchValueList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::searchValueList('type_id', 'Добавление параметров/значений'),
                    Request::searchValueList('type_id', 'Изменение существующих параметров/значений'),
                    Request::searchValueList('type_id', 'Проектирование структуры'),
                    Request::searchValueList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    Request::searchValueList('type_id', 'Добавление/изменение видео'),
                    Request::searchValueList('type_id', 'Добавление/изменение размерной сетки'),
                    Request::searchValueList('type_id', 'Добавление/изменение тегов'),
                    Request::searchValueList('type_id', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('type_id', 'Добавление новых товаров'),
                    Request::searchValueList('type_id', 'Перенос товаров'),
                    Request::searchValueList('type_id', 'Группировка товаров'),
                    Request::searchValueList('type_id', 'Заливка фото с фотостудии'),
                    Request::searchValueList('type_id', 'Проверка скрытых товаров'),
                    Request::searchValueList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                    Request::searchValueList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::searchValueList('type_id', 'Добавление параметров/значений'),
                    Request::searchValueList('type_id', 'Изменение существующих параметров/значений'),
                    Request::searchValueList('type_id', 'Проектирование структуры'),
                    Request::searchValueList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    Request::searchValueList('type_id', 'Добавление/изменение видео'),
                    Request::searchValueList('type_id', 'Добавление/изменение размерной сетки'),
                    Request::searchValueList('type_id', 'Добавление/изменение тегов'),
                    Request::searchValueList('type_id', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('type_id', 'Добавление/изменение информации в существующих товарах'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('type_id', 'Добавление новых товаров'),
                    Request::searchValueList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    Request::searchValueList('type_id', 'Перенос товаров'),
                    Request::searchValueList('type_id', 'Группировка товаров'),
                    Request::searchValueList('type_id', 'Заливка фото с фотостудии'),
                    Request::searchValueList('type_id', 'Проверка скрытых товаров'),
                    Request::searchValueList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                    Request::searchValueList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::searchValueList('type_id', 'Добавление параметров/значений'),
                    Request::searchValueList('type_id', 'Изменение существующих параметров/значений'),
                    Request::searchValueList('type_id', 'Проектирование структуры'),
                    Request::searchValueList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    Request::searchValueList('type_id', 'Добавление/изменение видео'),
                    Request::searchValueList('type_id', 'Добавление/изменение размерной сетки'),
                    Request::searchValueList('type_id', 'Добавление/изменение тегов'),
                    Request::searchValueList('type_id', '(не задано)'),
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
                    Request::columnValueList('2020-01-01 - 2020-03-31'),
                    Request::columnValueList('2020-04-01 - 2020-06-30'),
                    Request::columnValueList('2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::columnValueList(date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('report_period_id', '2020-01-01 - 2020-03-31'),
                    Request::searchValueList('report_period_id', '2020-04-01 - 2020-06-30'),
                    Request::searchValueList('report_period_id', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::searchValueList('report_period_id', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                    Request::searchValueList('report_period_id', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('report_period_id', '2020-01-01 - 2020-03-31'),
                    Request::searchValueList('report_period_id', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::searchValueList('report_period_id', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                    Request::searchValueList('report_period_id', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('report_period_id', '2020-04-01 - 2020-06-30'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('report_period_id', '2020-01-01 - 2020-03-31'),
                    Request::searchValueList('report_period_id', '2020-04-01 - 2020-06-30'),
                    Request::searchValueList('report_period_id', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::searchValueList('report_period_id', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                    Request::searchValueList('report_period_id', '(не задано)'),
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
                    Request::columnValueList('2020-01-01 - 2020-03-31'),
                    Request::columnValueList('2020-04-01 - 2020-06-30'),
                    Request::columnValueList('2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::columnValueList(date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('sv_report_periods', '2020-01-01 - 2020-03-31'),
                    Request::searchValueList('sv_report_periods', '2020-04-01 - 2020-06-30'),
                    Request::searchValueList('sv_report_periods', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::searchValueList('sv_report_periods', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                    Request::searchValueList('sv_report_periods', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('sv_report_periods', '2020-01-01 - 2020-03-31'),
                    Request::searchValueList('sv_report_periods', '2020-04-01 - 2020-06-30'),
                    Request::searchValueList('sv_report_periods', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::searchValueList('sv_report_periods', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                ],
                "cantSee" => [
                    Request::searchValueList('sv_report_periods', '(не задано)'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('sv_report_periods', '2020-01-01 - 2020-03-31'),
                    Request::searchValueList('sv_report_periods', '2020-04-01 - 2020-06-30'),
                    Request::searchValueList('sv_report_periods', '2020-07-01 - ' . date('Y-m-d', strtotime('+1 week'))),
                    Request::searchValueList('sv_report_periods', date('Y-m-d', strtotime('+8 days')) . ' - 2021-12-31'),
                    Request::searchValueList('sv_report_periods', '(не задано)'),
                ],
            ],
        ]
    ],

];
