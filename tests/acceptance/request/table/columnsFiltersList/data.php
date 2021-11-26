<?php

use lisa\Page\Requests\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки приоритета',
            'column' => 'priority',
            'case' => '1_',
            'tableSummary_1' => 14,
            'tableSummary_2' => 10,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Информация необходима для склада'),
                    Request::columnValueFromList('Исправление критичной ошибки'),
                    Request::columnValueFromList('Товар-новинка/эксклюзив (трафикообразующий)'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                    Request::columnValueFromList('Исправление критичной ошибки'),
                    Request::columnValueFromList('Товар-новинка/эксклюзив (трафикообразующий)'),
                    Request::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('priority', 'Исправление критичной ошибки'),
                    Request::selectedValueFromList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                    Request::selectedValueFromList('priority', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('priority', 'Информация необходима для склада'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('priority', 'Исправление критичной ошибки'),
                    Request::selectedValueFromList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('priority', '(не задано)'),
                    Request::selectedValueFromList('priority', 'Информация необходима для склада'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('priority', 'Исправление критичной ошибки'),
                    Request::selectedValueFromList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                    Request::selectedValueFromList('priority', '(не задано)'),
                    Request::selectedValueFromList('priority', 'Информация необходима для склада'),
                ],
            ],

        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки причины',
            'column' => 'reasons',
            'case' => '2_',
            'tableSummary_1' => 19,
            'tableSummary_2' => 2,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Все товары уже есть на сайте (Отменена)'),
                    Request::columnValueFromList('Другое (описан в коментариях) (Все)'),
                    Request::columnValueFromList('Дубль задачи (Отменена)'),
                    Request::columnValueFromList('Изменен приоритет задачи (Ожидает)'),
                    Request::columnValueFromList('Нада (На доработке)'),
                    Request::columnValueFromList('Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::columnValueFromList('Нинада (На доработке)'),
                    Request::columnValueFromList('Ожидает группировки (Ожидает)'),
                    Request::columnValueFromList('Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::columnValueFromList('Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::columnValueFromList('Ожидается загрузка фото в товары (Ожидает)'),
                    Request::columnValueFromList('Товары на модерации (Ожидает)'),
                    Request::columnValueFromList('Товары ушли в ошибки (Частично выполнена)'),
                    Request::columnValueFromList('Требуется уточнение информации по задаче (Ожидает)'),
                    Request::columnValueFromList('Часть товаров ушла в ошибки (Частично выполнена)'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('Нада (На доработке)'),
                Request::columnValueFromList('Ожидается загрузка фото в товары (Ожидает)'),
                Request::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('reasons', 'Нада (На доработке)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                    Request::selectedValueFromList('reasons', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    Request::selectedValueFromList('reasons', 'Другое (описан в коментариях) (Все)'),
                    Request::selectedValueFromList('reasons', 'Дубль задачи (Отменена)'),
                    Request::selectedValueFromList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', 'Нинада (На доработке)'),
                    Request::selectedValueFromList('reasons', 'Ожидает группировки (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Товары на модерации (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('reasons', 'Нада (На доработке)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    Request::selectedValueFromList('reasons', 'Другое (описан в коментариях) (Все)'),
                    Request::selectedValueFromList('reasons', 'Дубль задачи (Отменена)'),
                    Request::selectedValueFromList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', 'Нинада (На доработке)'),
                    Request::selectedValueFromList('reasons', 'Ожидает группировки (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Товары на модерации (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    Request::selectedValueFromList('reasons', 'Другое (описан в коментариях) (Все)'),
                    Request::selectedValueFromList('reasons', 'Дубль задачи (Отменена)'),
                    Request::selectedValueFromList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Нада (На доработке)'),
                    Request::selectedValueFromList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', 'Нинада (На доработке)'),
                    Request::selectedValueFromList('reasons', 'Ожидает группировки (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Товары на модерации (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    Request::selectedValueFromList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                    Request::selectedValueFromList('reasons', '(не задано)'),
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки уточнений',
            'column' => 'author_clarifications',
            'case' => '3_',
            'tableSummary_1' => 19,
            'tableSummary_2' => 4,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Без уточнений'),
                    Request::columnValueFromList('Более 5 уточнений'),
                    Request::columnValueFromList('Менее 5 уточнений'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('Без уточнений'),
                Request::columnValueFromList('Более 5 уточнений'),
                Request::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('author_clarifications', 'Без уточнений'),
                    Request::selectedValueFromList('author_clarifications', 'Более 5 уточнений'),
                    Request::selectedValueFromList('author_clarifications', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('author_clarifications', 'Менее 5 уточнений'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('author_clarifications', 'Без уточнений'),
                    Request::selectedValueFromList('author_clarifications', 'Более 5 уточнений'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('author_clarifications', 'Менее 5 уточнений'),
                    Request::selectedValueFromList('author_clarifications', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('author_clarifications', 'Без уточнений'),
                    Request::selectedValueFromList('author_clarifications', 'Более 5 уточнений'),
                    Request::selectedValueFromList('author_clarifications', 'Менее 5 уточнений'),
                    Request::selectedValueFromList('author_clarifications', '(не задано)'),
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки типов',
            'column' => 'type_id',
            'value' => 'Добавление нового портала/раздела фат-меню/категории товаров',
            'case' => '4_',
            'tableSummary_1' => 10,
            'tableSummary_2' => 8,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Добавление новых товаров'),
                    Request::columnValueFromList('Добавление/изменение информации в существующих товарах'),
                    Request::columnValueFromList('Перенос товаров'),
                    Request::columnValueFromList('Группировка товаров'),
                    Request::columnValueFromList('Заливка фото с фотостудии'),
                    Request::columnValueFromList('Проверка скрытых товаров'),
                    Request::columnValueFromList('Добавление нового портала/раздела фат-меню/категории товаров'),
                    Request::columnValueFromList('Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::columnValueFromList('Добавление параметров/значений'),
                    Request::columnValueFromList('Изменение существующих параметров/значений'),
                    Request::columnValueFromList('Проектирование структуры'),
                    Request::columnValueFromList('Добавление новых СЦ/изменение существующих СЦ'),
                    Request::columnValueFromList('Добавление/изменение видео'),
                    Request::columnValueFromList('Добавление/изменение размерной сетки'),
                    Request::columnValueFromList('Добавление/изменение тегов'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('Группировка товаров'),
                Request::columnValueFromList('Заливка фото с фотостудии'),
                Request::columnValueFromList('Проверка скрытых товаров'),
                Request::columnValueFromList('Добавление нового портала/раздела фат-меню/категории товаров'),
                Request::columnValueFromList('Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                Request::columnValueFromList('Добавление параметров/значений'),
                Request::columnValueFromList('Изменение существующих параметров/значений'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('type_id', 'Группировка товаров'),
                    Request::selectedValueFromList('type_id', 'Заливка фото с фотостудии'),
                    Request::selectedValueFromList('type_id', 'Проверка скрытых товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление параметров/значений'),
                    Request::selectedValueFromList('type_id', 'Изменение существующих параметров/значений'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('type_id', 'Добавление новых товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    Request::selectedValueFromList('type_id', 'Перенос товаров'),
                    Request::selectedValueFromList('type_id', 'Проектирование структуры'),
                    Request::selectedValueFromList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение видео'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение размерной сетки'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение тегов'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('type_id', 'Группировка товаров'),
                    Request::selectedValueFromList('type_id', 'Заливка фото с фотостудии'),
                    Request::selectedValueFromList('type_id', 'Проверка скрытых товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление параметров/значений'),
                    Request::selectedValueFromList('type_id', 'Изменение существующих параметров/значений'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('type_id', 'Добавление новых товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    Request::selectedValueFromList('type_id', 'Перенос товаров'),
                    Request::selectedValueFromList('type_id', 'Проектирование структуры'),
                    Request::selectedValueFromList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение видео'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение размерной сетки'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение тегов'),
                    Request::selectedValueFromList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('type_id', 'Добавление новых товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    Request::selectedValueFromList('type_id', 'Перенос товаров'),
                    Request::selectedValueFromList('type_id', 'Группировка товаров'),
                    Request::selectedValueFromList('type_id', 'Заливка фото с фотостудии'),
                    Request::selectedValueFromList('type_id', 'Проверка скрытых товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    Request::selectedValueFromList('type_id', 'Добавление параметров/значений'),
                    Request::selectedValueFromList('type_id', 'Изменение существующих параметров/значений'),
                    Request::selectedValueFromList('type_id', 'Проектирование структуры'),
                    Request::selectedValueFromList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение видео'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение размерной сетки'),
                    Request::selectedValueFromList('type_id', 'Добавление/изменение тегов'),
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки отчётных периодов КМ',
            'column' => 'report_period_id',
            'case' => '5_',
            'tableSummary_1' => 22,
            'tableSummary_2' => 4,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('2021-01-01 - 2021-03-31'),
                    Request::columnValueFromList('2021-04-01 - 2021-06-30'),
                    Request::columnValueFromList('2021-07-01 - 2021-09-30'),
                    Request::columnValueFromList('2021-10-01 - 2021-12-31'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('2021-01-01 - 2021-03-31'),
                Request::columnValueFromList('2021-10-01 - 2021-12-31'),
                Request::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('report_period_id', '2021-01-01 - 2021-03-31'),
                    Request::selectedValueFromList('report_period_id', '2021-10-01 - 2021-12-31'),
                    Request::selectedValueFromList('report_period_id', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('report_period_id', '2021-04-01 - 2021-06-30'),
                    Request::selectedValueFromList('report_period_id', '2021-07-01 - 2021-09-30'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('report_period_id', '2021-01-01 - 2021-03-31'),
                    Request::selectedValueFromList('report_period_id', '2021-10-01 - 2021-12-31'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('report_period_id', '2021-04-01 - 2021-06-30'),
                    Request::selectedValueFromList('report_period_id', '2021-07-01 - 2021-09-30'),
                    Request::selectedValueFromList('report_period_id', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('report_period_id', '2021-01-01 - 2021-03-31'),
                    Request::selectedValueFromList('report_period_id', '2021-04-01 - 2021-06-30'),
                    Request::selectedValueFromList('report_period_id', '2021-07-01 - 2021-09-30'),
                    Request::selectedValueFromList('report_period_id', '2021-10-01 - 2021-12-31'),
                    Request::selectedValueFromList('report_period_id', '(не задано)'),
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки отчётных периодов СВ',
            'column' => 'sv_report_periods',
            'case' => '6_',
            'tableSummary_1' => 7,
            'tableSummary_2' => 7,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('2021-01-01 - 2021-03-31'),
                    Request::columnValueFromList('2021-04-01 - 2021-06-30'),
                    Request::columnValueFromList('2021-07-01 - 2021-09-30'),
                    Request::columnValueFromList('2021-10-01 - 2021-12-31'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('2021-01-01 - 2021-03-31'),
                Request::columnValueFromList('2021-04-01 - 2021-06-30'),
                Request::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('sv_report_periods', '2021-01-01 - 2021-03-31'),
                    Request::selectedValueFromList('sv_report_periods', '2021-04-01 - 2021-06-30'),
                    Request::selectedValueFromList('sv_report_periods', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('sv_report_periods', '2021-10-01 - 2021-12-31'),
                    Request::selectedValueFromList('sv_report_periods', '2021-07-01 - 2021-09-30'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('sv_report_periods', '2021-01-01 - 2021-03-31'),
                    Request::selectedValueFromList('sv_report_periods', '2021-04-01 - 2021-06-30'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('sv_report_periods', '2021-07-01 - 2021-09-30'),
                    Request::selectedValueFromList('sv_report_periods', '2021-10-01 - 2021-12-31'),
                    Request::selectedValueFromList('sv_report_periods', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('sv_report_periods', '2021-01-01 - 2021-03-31'),
                    Request::selectedValueFromList('sv_report_periods', '2021-04-01 - 2021-06-30'),
                    Request::selectedValueFromList('sv_report_periods', '2021-07-01 - 2021-09-30'),
                    Request::selectedValueFromList('sv_report_periods', '2021-10-01 - 2021-12-31'),
                    Request::selectedValueFromList('sv_report_periods', '(не задано)'),
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки кросс-чек статуса',
            'column' => 'cross_check_status',
            'value' => 'На кросс-чеке',
            'case' => '7_',
            'tableSummary_1' => 4,
            'tableSummary_2' => 1,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Не прошла кросс-чек'),
                    Request::columnValueFromList('На кросс-чеке'),
                    Request::columnValueFromList('Кросс-чек пройден'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('На кросс-чеке'),
                Request::columnValueFromList('Кросс-чек пройден'),
                Request::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('cross_check_status', 'На кросс-чеке'),
                    Request::selectedValueFromList('cross_check_status', 'Кросс-чек пройден'),
                    Request::selectedValueFromList('cross_check_status', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('cross_check_status', 'Не прошла кросс-чек'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('cross_check_status', 'Кросс-чек пройден'),
                    Request::selectedValueFromList('cross_check_status', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('cross_check_status', 'Не прошла кросс-чек'),
                    Request::selectedValueFromList('cross_check_status', 'На кросс-чеке'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('cross_check_status', 'Не прошла кросс-чек'),
                    Request::selectedValueFromList('cross_check_status', 'На кросс-чеке'),
                    Request::selectedValueFromList('cross_check_status', 'Кросс-чек пройден'),
                    Request::selectedValueFromList('cross_check_status', '(не задано)'),
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки направления задачи',
            'column' => 'direction',
            'value' => 'Работа с товарами Розетки',
            'case' => '8_',
            'tableSummary_1' => 20,
            'tableSummary_2' => 15,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Определяется типом задачи'),
                    Request::columnValueFromList('Работа с товарами Розетки'),
                    Request::columnValueFromList('Работа с товарами Маркетплейса'),
                ],
                'cantSee' => [
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('Определяется типом задачи'),
                Request::columnValueFromList('Работа с товарами Розетки'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('direction', 'Определяется типом задачи'),
                    Request::selectedValueFromList('direction', 'Работа с товарами Розетки'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('direction', 'Работа с товарами Маркетплейса'),
                    Request::selectedValueFromList('direction', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('direction', 'Определяется типом задачи'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('direction', 'Работа с товарами Маркетплейса'),
                    Request::selectedValueFromList('direction', 'Работа с товарами Розетки'),
                    Request::selectedValueFromList('direction', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('direction', 'Определяется типом задачи'),
                    Request::selectedValueFromList('direction', 'Работа с товарами Розетки'),
                    Request::selectedValueFromList('direction', 'Работа с товарами Маркетплейса'),
                    Request::selectedValueFromList('direction', '(не задано)'),
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки направления команды',
            'column' => 'team_direction',
            'value' => 'Работа с группами',
            'case' => '9_',
            'tableSummary_1' => 12,
            'tableSummary_2' => 10,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Управление отделом'),
                    Request::columnValueFromList('Работа с товарами Маркетплейса'),
                    Request::columnValueFromList('Работа с товарами Rozetka'),
                    Request::columnValueFromList('Работа с группами'),
                    Request::columnValueFromList('Работа с проектированием структур + фильтрами'),
                    Request::columnValueFromList('Работа с порталами, фат-меню, категориями'),
                ],
                'cantSee' => [
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('Работа с товарами Rozetka'),
                Request::columnValueFromList('Работа с группами'),
                Request::columnValueFromList('Работа с проектированием структур + фильтрами'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('team_direction', 'Работа с товарами Rozetka'),
                    Request::selectedValueFromList('team_direction', 'Работа с группами'),
                    Request::selectedValueFromList('team_direction', 'Работа с проектированием структур + фильтрами'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('team_direction', 'Управление отделом'),
                    Request::selectedValueFromList('team_direction', 'Работа с товарами Маркетплейса'),
                    Request::selectedValueFromList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    Request::selectedValueFromList('team_direction', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('team_direction', 'Работа с товарами Rozetka'),
                    Request::selectedValueFromList('team_direction', 'Работа с проектированием структур + фильтрами'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('team_direction', 'Управление отделом'),
                    Request::selectedValueFromList('team_direction', 'Работа с группами'),
                    Request::selectedValueFromList('team_direction', 'Работа с товарами Маркетплейса'),
                    Request::selectedValueFromList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    Request::selectedValueFromList('team_direction', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('team_direction', 'Управление отделом'),
                    Request::selectedValueFromList('team_direction', 'Работа с товарами Маркетплейса'),
                    Request::selectedValueFromList('team_direction', 'Работа с товарами Rozetka'),
                    Request::selectedValueFromList('team_direction', 'Работа с группами'),
                    Request::selectedValueFromList('team_direction', 'Работа с проектированием структур + фильтрами'),
                    Request::selectedValueFromList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    Request::selectedValueFromList('team_direction', '(не задано)'),
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки уровня сложности',
            'column' => 'difficulty_level',
            'case' => '10_',
            'tableSummary_1' => 19,
            'tableSummary_2' => 4,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('1'),
                    Request::columnValueFromList('2'),
                    Request::columnValueFromList('3'),
                    Request::columnValueFromList('4'),
                    Request::columnValueFromList('5'),
                    Request::columnValueFromList('6'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('3'),
                Request::columnValueFromList('4'),
                Request::columnValueFromList('5'),
                Request::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('difficulty_level', '3'),
                    Request::selectedValueFromList('difficulty_level', '4'),
                    Request::selectedValueFromList('difficulty_level', '5'),
                    Request::selectedValueFromList('difficulty_level', '(не задано)'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('difficulty_level', '1'),
                    Request::selectedValueFromList('difficulty_level', '2'),
                    Request::selectedValueFromList('difficulty_level', '6'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('difficulty_level', '3'),
                    Request::selectedValueFromList('difficulty_level', '4'),
                    Request::selectedValueFromList('difficulty_level', '5'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('difficulty_level', '1'),
                    Request::selectedValueFromList('difficulty_level', '2'),
                    Request::selectedValueFromList('difficulty_level', '6'),
                    Request::selectedValueFromList('difficulty_level', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('difficulty_level', '1'),
                    Request::selectedValueFromList('difficulty_level', '2'),
                    Request::selectedValueFromList('difficulty_level', '3'),
                    Request::selectedValueFromList('difficulty_level', '4'),
                    Request::selectedValueFromList('difficulty_level', '5'),
                    Request::selectedValueFromList('difficulty_level', '6'),
                    Request::selectedValueFromList('difficulty_level', '(не задано)'),
                ],
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки статуса',
            'column' => 'status',
            'value' => 'Отменена',
            'case' => '11_',
            'tableSummary_1' => 9,
            'tableSummary_2' => 8,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Новая'),
                    Request::columnValueFromList('Готова для распределения'),
                    Request::columnValueFromList('На доработке'),
                    Request::columnValueFromList('Отменена'),
                    Request::columnValueFromList('Ожидает взятия в работу'),
                    Request::columnValueFromList('В работе'),
                    Request::columnValueFromList('Ожидает'),
                    Request::columnValueFromList('Частично выполнена'),
                    Request::columnValueFromList('Выполнена'),
                    Request::columnValueFromList('Закрыта'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('Отменена'),
                Request::columnValueFromList('Ожидает взятия в работу'),
                Request::columnValueFromList('В работе'),
                Request::columnValueFromList('Ожидает'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('status', 'Отменена'),
                    Request::selectedValueFromList('status', 'Ожидает взятия в работу'),
                    Request::selectedValueFromList('status', 'В работе'),
                    Request::selectedValueFromList('status', 'Ожидает'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('status', 'Новая'),
                    Request::selectedValueFromList('status', 'Готова для распределения'),
                    Request::selectedValueFromList('status', 'На доработке'),
                    Request::selectedValueFromList('status', 'Частично выполнена'),
                    Request::selectedValueFromList('status', 'Выполнена'),
                    Request::selectedValueFromList('status', 'Закрыта'),
                    Request::selectedValueFromList('status', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('status', 'Ожидает взятия в работу'),
                    Request::selectedValueFromList('status', 'В работе'),
                    Request::selectedValueFromList('status', 'Ожидает'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('status', 'Новая'),
                    Request::selectedValueFromList('status', 'Готова для распределения'),
                    Request::selectedValueFromList('status', 'На доработке'),
                    Request::selectedValueFromList('status', 'Отменена'),
                    Request::selectedValueFromList('status', 'Частично выполнена'),
                    Request::selectedValueFromList('status', 'Выполнена'),
                    Request::selectedValueFromList('status', 'Закрыта'),
                    Request::selectedValueFromList('status', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('status', 'Новая'),
                    Request::selectedValueFromList('status', 'Готова для распределения'),
                    Request::selectedValueFromList('status', 'На доработке'),
                    Request::selectedValueFromList('status', 'Отменена'),
                    Request::selectedValueFromList('status', 'Ожидает взятия в работу'),
                    Request::selectedValueFromList('status', 'В работе'),
                    Request::selectedValueFromList('status', 'Ожидает'),
                    Request::selectedValueFromList('status', 'Частично выполнена'),
                    Request::selectedValueFromList('status', 'Выполнена'),
                    Request::selectedValueFromList('status', 'Закрыта'),
                    Request::selectedValueFromList('status', '(не задано)'),
                ],
            ],
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки предыдущего статуса',
            'column' => 'previous_status',
            'value' => 'Выполнена',
            'case' => '12_',
            'tableSummary_1' => 12,
            'tableSummary_2' => 10,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    Request::columnValueFromList('Новая'),
                    Request::columnValueFromList('Готова для распределения'),
                    Request::columnValueFromList('На доработке'),
                    Request::columnValueFromList('Отменена'),
                    Request::columnValueFromList('Ожидает взятия в работу'),
                    Request::columnValueFromList('В работе'),
                    Request::columnValueFromList('Ожидает'),
                    Request::columnValueFromList('Частично выполнена'),
                    Request::columnValueFromList('Выполнена'),
                    Request::columnValueFromList('Закрыта'),
                    Request::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                Request::columnValueFromList('Новая'),
                Request::columnValueFromList('Готова для распределения'),
                Request::columnValueFromList('На доработке'),
                Request::columnValueFromList('Выполнена'),
                Request::columnValueFromList('Закрыта'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    Request::selectedValueFromList('previous_status', 'Новая'),
                    Request::selectedValueFromList('previous_status', 'Готова для распределения'),
                    Request::selectedValueFromList('previous_status', 'На доработке'),
                    Request::selectedValueFromList('previous_status', 'Выполнена'),
                    Request::selectedValueFromList('previous_status', 'Закрыта'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('previous_status', 'Отменена'),
                    Request::selectedValueFromList('previous_status', 'Ожидает взятия в работу'),
                    Request::selectedValueFromList('previous_status', 'В работе'),
                    Request::selectedValueFromList('previous_status', 'Ожидает'),
                    Request::selectedValueFromList('previous_status', 'Частично выполнена'),
                    Request::selectedValueFromList('previous_status', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    Request::selectedValueFromList('previous_status', 'Новая'),
                    Request::selectedValueFromList('previous_status', 'Готова для распределения'),
                    Request::selectedValueFromList('previous_status', 'На доработке'),
                    Request::selectedValueFromList('previous_status', 'Закрыта'),
                ],
                'cantSee' => [
                    Request::selectedValueFromList('previous_status', 'Отменена'),
                    Request::selectedValueFromList('previous_status', 'Ожидает взятия в работу'),
                    Request::selectedValueFromList('previous_status', 'В работе'),
                    Request::selectedValueFromList('previous_status', 'Ожидает'),
                    Request::selectedValueFromList('previous_status', 'Частично выполнена'),
                    Request::selectedValueFromList('previous_status', 'Выполнена'),
                    Request::selectedValueFromList('previous_status', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    Request::selectedValueFromList('previous_status', 'Новая'),
                    Request::selectedValueFromList('previous_status', 'Готова для распределения'),
                    Request::selectedValueFromList('previous_status', 'На доработке'),
                    Request::selectedValueFromList('previous_status', 'Отменена'),
                    Request::selectedValueFromList('previous_status', 'Ожидает взятия в работу'),
                    Request::selectedValueFromList('previous_status', 'В работе'),
                    Request::selectedValueFromList('previous_status', 'Ожидает'),
                    Request::selectedValueFromList('previous_status', 'Частично выполнена'),
                    Request::selectedValueFromList('previous_status', 'Выполнена'),
                    Request::selectedValueFromList('previous_status', 'Закрыта'),
                    Request::selectedValueFromList('previous_status', '(не задано)'),
                ],
            ],
        ]
    ],
];
