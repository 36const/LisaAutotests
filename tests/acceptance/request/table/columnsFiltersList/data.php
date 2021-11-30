<?php

use lisa\Page\Requests\RequestTable;

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки приоритета',
            'column' => 'priority',
            'case' => '1_',
            'tableSummary_1' => 14,
            'tableSummary_2' => 10,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    RequestTable::columnValueFromList('Информация необходима для склада'),
                    RequestTable::columnValueFromList('Исправление критичной ошибки'),
                    RequestTable::columnValueFromList('Товар-новинка/эксклюзив (трафикообразующий)'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                    RequestTable::columnValueFromList('Исправление критичной ошибки'),
                    RequestTable::columnValueFromList('Товар-новинка/эксклюзив (трафикообразующий)'),
                    RequestTable::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('priority', 'Исправление критичной ошибки'),
                    RequestTable::selectedValueFromList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                    RequestTable::selectedValueFromList('priority', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('priority', 'Информация необходима для склада'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('priority', 'Исправление критичной ошибки'),
                    RequestTable::selectedValueFromList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('priority', '(не задано)'),
                    RequestTable::selectedValueFromList('priority', 'Информация необходима для склада'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('priority', 'Исправление критичной ошибки'),
                    RequestTable::selectedValueFromList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)'),
                    RequestTable::selectedValueFromList('priority', '(не задано)'),
                    RequestTable::selectedValueFromList('priority', 'Информация необходима для склада'),
                ],
            ],

        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки причины',
            'column' => 'reasons',
            'case' => '2_',
            'tableSummary_1' => 19,
            'tableSummary_2' => 2,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    RequestTable::columnValueFromList('Все товары уже есть на сайте (Отменена)'),
                    RequestTable::columnValueFromList('Другое (описан в коментариях) (Все)'),
                    RequestTable::columnValueFromList('Дубль задачи (Отменена)'),
                    RequestTable::columnValueFromList('Изменен приоритет задачи (Ожидает)'),
                    RequestTable::columnValueFromList('Нада (На доработке)'),
                    RequestTable::columnValueFromList('Не получена запрошенная недостающая информация (Частично выполнена)'),
                    RequestTable::columnValueFromList('Нинада (На доработке)'),
                    RequestTable::columnValueFromList('Ожидает группировки (Ожидает)'),
                    RequestTable::columnValueFromList('Ожидается загрузка обновлений в систему (Ожидает)'),
                    RequestTable::columnValueFromList('Ожидается загрузка товаров в систему (Ожидает)'),
                    RequestTable::columnValueFromList('Ожидается загрузка фото в товары (Ожидает)'),
                    RequestTable::columnValueFromList('Товары на модерации (Ожидает)'),
                    RequestTable::columnValueFromList('Товары ушли в ошибки (Частично выполнена)'),
                    RequestTable::columnValueFromList('Требуется уточнение информации по задаче (Ожидает)'),
                    RequestTable::columnValueFromList('Часть товаров ушла в ошибки (Частично выполнена)'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('Нада (На доработке)'),
                RequestTable::columnValueFromList('Ожидается загрузка фото в товары (Ожидает)'),
                RequestTable::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('reasons', 'Нада (На доработке)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    RequestTable::selectedValueFromList('reasons', 'Другое (описан в коментариях) (Все)'),
                    RequestTable::selectedValueFromList('reasons', 'Дубль задачи (Отменена)'),
                    RequestTable::selectedValueFromList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', 'Нинада (На доработке)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидает группировки (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Товары на модерации (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('reasons', 'Нада (На доработке)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    RequestTable::selectedValueFromList('reasons', 'Другое (описан в коментариях) (Все)'),
                    RequestTable::selectedValueFromList('reasons', 'Дубль задачи (Отменена)'),
                    RequestTable::selectedValueFromList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', 'Нинада (На доработке)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидает группировки (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Товары на модерации (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    RequestTable::selectedValueFromList('reasons', 'Другое (описан в коментариях) (Все)'),
                    RequestTable::selectedValueFromList('reasons', 'Дубль задачи (Отменена)'),
                    RequestTable::selectedValueFromList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Нада (На доработке)'),
                    RequestTable::selectedValueFromList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', 'Нинада (На доработке)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидает группировки (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Товары на модерации (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    RequestTable::selectedValueFromList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                    RequestTable::selectedValueFromList('reasons', '(не задано)'),
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки уточнений',
            'column' => 'author_clarifications',
            'case' => '3_',
            'tableSummary_1' => 19,
            'tableSummary_2' => 4,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    RequestTable::columnValueFromList('Без уточнений'),
                    RequestTable::columnValueFromList('Более 5 уточнений'),
                    RequestTable::columnValueFromList('Менее 5 уточнений'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('Без уточнений'),
                RequestTable::columnValueFromList('Более 5 уточнений'),
                RequestTable::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('author_clarifications', 'Без уточнений'),
                    RequestTable::selectedValueFromList('author_clarifications', 'Более 5 уточнений'),
                    RequestTable::selectedValueFromList('author_clarifications', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('author_clarifications', 'Менее 5 уточнений'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('author_clarifications', 'Без уточнений'),
                    RequestTable::selectedValueFromList('author_clarifications', 'Более 5 уточнений'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('author_clarifications', 'Менее 5 уточнений'),
                    RequestTable::selectedValueFromList('author_clarifications', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('author_clarifications', 'Без уточнений'),
                    RequestTable::selectedValueFromList('author_clarifications', 'Более 5 уточнений'),
                    RequestTable::selectedValueFromList('author_clarifications', 'Менее 5 уточнений'),
                    RequestTable::selectedValueFromList('author_clarifications', '(не задано)'),
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки типов',
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
                    RequestTable::columnValueFromList('Добавление новых товаров'),
                    RequestTable::columnValueFromList('Добавление/изменение информации в существующих товарах'),
                    RequestTable::columnValueFromList('Перенос товаров'),
                    RequestTable::columnValueFromList('Группировка товаров'),
                    RequestTable::columnValueFromList('Заливка фото с фотостудии'),
                    RequestTable::columnValueFromList('Проверка скрытых товаров'),
                    RequestTable::columnValueFromList('Добавление нового портала/раздела фат-меню/категории товаров'),
                    RequestTable::columnValueFromList('Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    RequestTable::columnValueFromList('Добавление параметров/значений'),
                    RequestTable::columnValueFromList('Изменение существующих параметров/значений'),
                    RequestTable::columnValueFromList('Проектирование структуры'),
                    RequestTable::columnValueFromList('Добавление новых СЦ/изменение существующих СЦ'),
                    RequestTable::columnValueFromList('Добавление/изменение видео'),
                    RequestTable::columnValueFromList('Добавление/изменение размерной сетки'),
                    RequestTable::columnValueFromList('Добавление/изменение тегов'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('Группировка товаров'),
                RequestTable::columnValueFromList('Заливка фото с фотостудии'),
                RequestTable::columnValueFromList('Проверка скрытых товаров'),
                RequestTable::columnValueFromList('Добавление нового портала/раздела фат-меню/категории товаров'),
                RequestTable::columnValueFromList('Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                RequestTable::columnValueFromList('Добавление параметров/значений'),
                RequestTable::columnValueFromList('Изменение существующих параметров/значений'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('type_id', 'Группировка товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Заливка фото с фотостудии'),
                    RequestTable::selectedValueFromList('type_id', 'Проверка скрытых товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление параметров/значений'),
                    RequestTable::selectedValueFromList('type_id', 'Изменение существующих параметров/значений'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('type_id', 'Добавление новых товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    RequestTable::selectedValueFromList('type_id', 'Перенос товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Проектирование структуры'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение видео'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение размерной сетки'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение тегов'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('type_id', 'Группировка товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Заливка фото с фотостудии'),
                    RequestTable::selectedValueFromList('type_id', 'Проверка скрытых товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление параметров/значений'),
                    RequestTable::selectedValueFromList('type_id', 'Изменение существующих параметров/значений'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('type_id', 'Добавление новых товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    RequestTable::selectedValueFromList('type_id', 'Перенос товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Проектирование структуры'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение видео'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение размерной сетки'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение тегов'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('type_id', 'Добавление новых товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих товарах'),
                    RequestTable::selectedValueFromList('type_id', 'Перенос товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Группировка товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Заливка фото с фотостудии'),
                    RequestTable::selectedValueFromList('type_id', 'Проверка скрытых товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление параметров/значений'),
                    RequestTable::selectedValueFromList('type_id', 'Изменение существующих параметров/значений'),
                    RequestTable::selectedValueFromList('type_id', 'Проектирование структуры'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление новых СЦ/изменение существующих СЦ'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение видео'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение размерной сетки'),
                    RequestTable::selectedValueFromList('type_id', 'Добавление/изменение тегов'),
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки отчётных периодов КМ',
            'column' => 'report_period_id',
            'case' => '5_',
            'tableSummary_1' => 22,
            'tableSummary_2' => 4,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    RequestTable::columnValueFromList('2021-01-01 - 2021-03-31'),
                    RequestTable::columnValueFromList('2021-04-01 - 2021-06-30'),
                    RequestTable::columnValueFromList('2021-07-01 - 2021-09-30'),
                    RequestTable::columnValueFromList('2021-10-01 - 2021-12-31'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('2021-01-01 - 2021-03-31'),
                RequestTable::columnValueFromList('2021-10-01 - 2021-12-31'),
                RequestTable::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('report_period_id', '2021-01-01 - 2021-03-31'),
                    RequestTable::selectedValueFromList('report_period_id', '2021-10-01 - 2021-12-31'),
                    RequestTable::selectedValueFromList('report_period_id', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('report_period_id', '2021-04-01 - 2021-06-30'),
                    RequestTable::selectedValueFromList('report_period_id', '2021-07-01 - 2021-09-30'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('report_period_id', '2021-01-01 - 2021-03-31'),
                    RequestTable::selectedValueFromList('report_period_id', '2021-10-01 - 2021-12-31'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('report_period_id', '2021-04-01 - 2021-06-30'),
                    RequestTable::selectedValueFromList('report_period_id', '2021-07-01 - 2021-09-30'),
                    RequestTable::selectedValueFromList('report_period_id', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('report_period_id', '2021-01-01 - 2021-03-31'),
                    RequestTable::selectedValueFromList('report_period_id', '2021-04-01 - 2021-06-30'),
                    RequestTable::selectedValueFromList('report_period_id', '2021-07-01 - 2021-09-30'),
                    RequestTable::selectedValueFromList('report_period_id', '2021-10-01 - 2021-12-31'),
                    RequestTable::selectedValueFromList('report_period_id', '(не задано)'),
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки отчётных периодов СВ',
            'column' => 'sv_report_periods',
            'case' => '6_',
            'tableSummary_1' => 7,
            'tableSummary_2' => 7,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    RequestTable::columnValueFromList('2021-01-01 - 2021-03-31'),
                    RequestTable::columnValueFromList('2021-04-01 - 2021-06-30'),
                    RequestTable::columnValueFromList('2021-07-01 - 2021-09-30'),
                    RequestTable::columnValueFromList('2021-10-01 - 2021-12-31'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('2021-01-01 - 2021-03-31'),
                RequestTable::columnValueFromList('2021-04-01 - 2021-06-30'),
                RequestTable::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-01-01 - 2021-03-31'),
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-04-01 - 2021-06-30'),
                    RequestTable::selectedValueFromList('sv_report_periods', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-10-01 - 2021-12-31'),
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-07-01 - 2021-09-30'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-01-01 - 2021-03-31'),
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-04-01 - 2021-06-30'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-07-01 - 2021-09-30'),
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-10-01 - 2021-12-31'),
                    RequestTable::selectedValueFromList('sv_report_periods', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-01-01 - 2021-03-31'),
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-04-01 - 2021-06-30'),
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-07-01 - 2021-09-30'),
                    RequestTable::selectedValueFromList('sv_report_periods', '2021-10-01 - 2021-12-31'),
                    RequestTable::selectedValueFromList('sv_report_periods', '(не задано)'),
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки кросс-чек статуса',
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
                    RequestTable::columnValueFromList('Не прошла кросс-чек'),
                    RequestTable::columnValueFromList('На кросс-чеке'),
                    RequestTable::columnValueFromList('Кросс-чек пройден'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('На кросс-чеке'),
                RequestTable::columnValueFromList('Кросс-чек пройден'),
                RequestTable::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('cross_check_status', 'На кросс-чеке'),
                    RequestTable::selectedValueFromList('cross_check_status', 'Кросс-чек пройден'),
                    RequestTable::selectedValueFromList('cross_check_status', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('cross_check_status', 'Не прошла кросс-чек'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('cross_check_status', 'Кросс-чек пройден'),
                    RequestTable::selectedValueFromList('cross_check_status', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('cross_check_status', 'Не прошла кросс-чек'),
                    RequestTable::selectedValueFromList('cross_check_status', 'На кросс-чеке'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('cross_check_status', 'Не прошла кросс-чек'),
                    RequestTable::selectedValueFromList('cross_check_status', 'На кросс-чеке'),
                    RequestTable::selectedValueFromList('cross_check_status', 'Кросс-чек пройден'),
                    RequestTable::selectedValueFromList('cross_check_status', '(не задано)'),
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки направления задачи',
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
                    RequestTable::columnValueFromList('Определяется типом задачи'),
                    RequestTable::columnValueFromList('Работа с товарами Розетки'),
                    RequestTable::columnValueFromList('Работа с товарами Маркетплейса'),
                ],
                'cantSee' => [
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('Определяется типом задачи'),
                RequestTable::columnValueFromList('Работа с товарами Розетки'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('direction', 'Определяется типом задачи'),
                    RequestTable::selectedValueFromList('direction', 'Работа с товарами Розетки'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('direction', 'Работа с товарами Маркетплейса'),
                    RequestTable::selectedValueFromList('direction', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('direction', 'Определяется типом задачи'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('direction', 'Работа с товарами Маркетплейса'),
                    RequestTable::selectedValueFromList('direction', 'Работа с товарами Розетки'),
                    RequestTable::selectedValueFromList('direction', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('direction', 'Определяется типом задачи'),
                    RequestTable::selectedValueFromList('direction', 'Работа с товарами Розетки'),
                    RequestTable::selectedValueFromList('direction', 'Работа с товарами Маркетплейса'),
                    RequestTable::selectedValueFromList('direction', '(не задано)'),
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки направления команды',
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
                    RequestTable::columnValueFromList('Управление отделом'),
                    RequestTable::columnValueFromList('Работа с товарами Маркетплейса'),
                    RequestTable::columnValueFromList('Работа с товарами Rozetka'),
                    RequestTable::columnValueFromList('Работа с группами'),
                    RequestTable::columnValueFromList('Работа с проектированием структур + фильтрами'),
                    RequestTable::columnValueFromList('Работа с порталами, фат-меню, категориями'),
                ],
                'cantSee' => [
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('Работа с товарами Rozetka'),
                RequestTable::columnValueFromList('Работа с группами'),
                RequestTable::columnValueFromList('Работа с проектированием структур + фильтрами'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('team_direction', 'Работа с товарами Rozetka'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с группами'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с проектированием структур + фильтрами'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('team_direction', 'Управление отделом'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с товарами Маркетплейса'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    RequestTable::selectedValueFromList('team_direction', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('team_direction', 'Работа с товарами Rozetka'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с проектированием структур + фильтрами'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('team_direction', 'Управление отделом'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с группами'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с товарами Маркетплейса'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    RequestTable::selectedValueFromList('team_direction', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('team_direction', 'Управление отделом'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с товарами Маркетплейса'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с товарами Rozetka'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с группами'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с проектированием структур + фильтрами'),
                    RequestTable::selectedValueFromList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    RequestTable::selectedValueFromList('team_direction', '(не задано)'),
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки уровня сложности',
            'column' => 'difficulty_level',
            'case' => '10_',
            'tableSummary_1' => 19,
            'tableSummary_2' => 4,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                'canSee' => [
                    RequestTable::columnValueFromList('1'),
                    RequestTable::columnValueFromList('2'),
                    RequestTable::columnValueFromList('3'),
                    RequestTable::columnValueFromList('4'),
                    RequestTable::columnValueFromList('5'),
                    RequestTable::columnValueFromList('6'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('3'),
                RequestTable::columnValueFromList('4'),
                RequestTable::columnValueFromList('5'),
                RequestTable::columnValueFromList('(не задано)'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('difficulty_level', '3'),
                    RequestTable::selectedValueFromList('difficulty_level', '4'),
                    RequestTable::selectedValueFromList('difficulty_level', '5'),
                    RequestTable::selectedValueFromList('difficulty_level', '(не задано)'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('difficulty_level', '1'),
                    RequestTable::selectedValueFromList('difficulty_level', '2'),
                    RequestTable::selectedValueFromList('difficulty_level', '6'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('difficulty_level', '3'),
                    RequestTable::selectedValueFromList('difficulty_level', '4'),
                    RequestTable::selectedValueFromList('difficulty_level', '5'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('difficulty_level', '1'),
                    RequestTable::selectedValueFromList('difficulty_level', '2'),
                    RequestTable::selectedValueFromList('difficulty_level', '6'),
                    RequestTable::selectedValueFromList('difficulty_level', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('difficulty_level', '1'),
                    RequestTable::selectedValueFromList('difficulty_level', '2'),
                    RequestTable::selectedValueFromList('difficulty_level', '3'),
                    RequestTable::selectedValueFromList('difficulty_level', '4'),
                    RequestTable::selectedValueFromList('difficulty_level', '5'),
                    RequestTable::selectedValueFromList('difficulty_level', '6'),
                    RequestTable::selectedValueFromList('difficulty_level', '(не задано)'),
                ],
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки статуса',
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
                    RequestTable::columnValueFromList('Новая'),
                    RequestTable::columnValueFromList('Готова для распределения'),
                    RequestTable::columnValueFromList('На доработке'),
                    RequestTable::columnValueFromList('Отменена'),
                    RequestTable::columnValueFromList('Ожидает взятия в работу'),
                    RequestTable::columnValueFromList('В работе'),
                    RequestTable::columnValueFromList('Ожидает'),
                    RequestTable::columnValueFromList('Частично выполнена'),
                    RequestTable::columnValueFromList('Выполнена'),
                    RequestTable::columnValueFromList('Закрыта'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('Отменена'),
                RequestTable::columnValueFromList('Ожидает взятия в работу'),
                RequestTable::columnValueFromList('В работе'),
                RequestTable::columnValueFromList('Ожидает'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('status', 'Отменена'),
                    RequestTable::selectedValueFromList('status', 'Ожидает взятия в работу'),
                    RequestTable::selectedValueFromList('status', 'В работе'),
                    RequestTable::selectedValueFromList('status', 'Ожидает'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('status', 'Новая'),
                    RequestTable::selectedValueFromList('status', 'Готова для распределения'),
                    RequestTable::selectedValueFromList('status', 'На доработке'),
                    RequestTable::selectedValueFromList('status', 'Частично выполнена'),
                    RequestTable::selectedValueFromList('status', 'Выполнена'),
                    RequestTable::selectedValueFromList('status', 'Закрыта'),
                    RequestTable::selectedValueFromList('status', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('status', 'Ожидает взятия в работу'),
                    RequestTable::selectedValueFromList('status', 'В работе'),
                    RequestTable::selectedValueFromList('status', 'Ожидает'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('status', 'Новая'),
                    RequestTable::selectedValueFromList('status', 'Готова для распределения'),
                    RequestTable::selectedValueFromList('status', 'На доработке'),
                    RequestTable::selectedValueFromList('status', 'Отменена'),
                    RequestTable::selectedValueFromList('status', 'Частично выполнена'),
                    RequestTable::selectedValueFromList('status', 'Выполнена'),
                    RequestTable::selectedValueFromList('status', 'Закрыта'),
                    RequestTable::selectedValueFromList('status', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('status', 'Новая'),
                    RequestTable::selectedValueFromList('status', 'Готова для распределения'),
                    RequestTable::selectedValueFromList('status', 'На доработке'),
                    RequestTable::selectedValueFromList('status', 'Отменена'),
                    RequestTable::selectedValueFromList('status', 'Ожидает взятия в работу'),
                    RequestTable::selectedValueFromList('status', 'В работе'),
                    RequestTable::selectedValueFromList('status', 'Ожидает'),
                    RequestTable::selectedValueFromList('status', 'Частично выполнена'),
                    RequestTable::selectedValueFromList('status', 'Выполнена'),
                    RequestTable::selectedValueFromList('status', 'Закрыта'),
                    RequestTable::selectedValueFromList('status', '(не задано)'),
                ],
            ],
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Установка, изменение и сброс фильтра колонки предыдущего статуса',
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
                    RequestTable::columnValueFromList('Новая'),
                    RequestTable::columnValueFromList('Готова для распределения'),
                    RequestTable::columnValueFromList('На доработке'),
                    RequestTable::columnValueFromList('Отменена'),
                    RequestTable::columnValueFromList('Ожидает взятия в работу'),
                    RequestTable::columnValueFromList('В работе'),
                    RequestTable::columnValueFromList('Ожидает'),
                    RequestTable::columnValueFromList('Частично выполнена'),
                    RequestTable::columnValueFromList('Выполнена'),
                    RequestTable::columnValueFromList('Закрыта'),
                    RequestTable::columnValueFromList('(не задано)'),
                ],
            ],
            'columnValueListToSelect' => [
                RequestTable::columnValueFromList('Новая'),
                RequestTable::columnValueFromList('Готова для распределения'),
                RequestTable::columnValueFromList('На доработке'),
                RequestTable::columnValueFromList('Выполнена'),
                RequestTable::columnValueFromList('Закрыта'),
            ],
            'searchValueList_1' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('previous_status', 'Новая'),
                    RequestTable::selectedValueFromList('previous_status', 'Готова для распределения'),
                    RequestTable::selectedValueFromList('previous_status', 'На доработке'),
                    RequestTable::selectedValueFromList('previous_status', 'Выполнена'),
                    RequestTable::selectedValueFromList('previous_status', 'Закрыта'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('previous_status', 'Отменена'),
                    RequestTable::selectedValueFromList('previous_status', 'Ожидает взятия в работу'),
                    RequestTable::selectedValueFromList('previous_status', 'В работе'),
                    RequestTable::selectedValueFromList('previous_status', 'Ожидает'),
                    RequestTable::selectedValueFromList('previous_status', 'Частично выполнена'),
                    RequestTable::selectedValueFromList('previous_status', '(не задано)'),
                ],
            ],
            'searchValueList_2' => [
                'canSee' => [
                    RequestTable::selectedValueFromList('previous_status', 'Новая'),
                    RequestTable::selectedValueFromList('previous_status', 'Готова для распределения'),
                    RequestTable::selectedValueFromList('previous_status', 'На доработке'),
                    RequestTable::selectedValueFromList('previous_status', 'Закрыта'),
                ],
                'cantSee' => [
                    RequestTable::selectedValueFromList('previous_status', 'Отменена'),
                    RequestTable::selectedValueFromList('previous_status', 'Ожидает взятия в работу'),
                    RequestTable::selectedValueFromList('previous_status', 'В работе'),
                    RequestTable::selectedValueFromList('previous_status', 'Ожидает'),
                    RequestTable::selectedValueFromList('previous_status', 'Частично выполнена'),
                    RequestTable::selectedValueFromList('previous_status', 'Выполнена'),
                    RequestTable::selectedValueFromList('previous_status', '(не задано)'),
                ],
            ],
            'searchValueList_3' => [
                'canSee' => [],
                'cantSee' => [
                    RequestTable::selectedValueFromList('previous_status', 'Новая'),
                    RequestTable::selectedValueFromList('previous_status', 'Готова для распределения'),
                    RequestTable::selectedValueFromList('previous_status', 'На доработке'),
                    RequestTable::selectedValueFromList('previous_status', 'Отменена'),
                    RequestTable::selectedValueFromList('previous_status', 'Ожидает взятия в работу'),
                    RequestTable::selectedValueFromList('previous_status', 'В работе'),
                    RequestTable::selectedValueFromList('previous_status', 'Ожидает'),
                    RequestTable::selectedValueFromList('previous_status', 'Частично выполнена'),
                    RequestTable::selectedValueFromList('previous_status', 'Выполнена'),
                    RequestTable::selectedValueFromList('previous_status', 'Закрыта'),
                    RequestTable::selectedValueFromList('previous_status', '(не задано)'),
                ],
            ],
        ]
    ],
];
