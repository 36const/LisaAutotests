<?php

use lisa\Page\Requests\Request;

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
            'column' => 'reasons',
            'value' => '(не задано)',
            'amount' => 7,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    Request::columnValueList('Все товары уже есть на сайте (Отменена)'),
                    Request::columnValueList('Другое (описан в коментариях) (Все)'),
                    Request::columnValueList('Дубль задачи (Отменена)'),
                    Request::columnValueList('Изменен приоритет задачи (Ожидает)'),
                    Request::columnValueList('Нада (На доработке)'),
                    Request::columnValueList('Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::columnValueList('Нинада (На доработке)'),
                    Request::columnValueList('Ожидает группировки (Ожидает)'),
                    Request::columnValueList('Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::columnValueList('Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::columnValueList('Ожидается загрузка фото в товары (Ожидает)'),
                    Request::columnValueList('Товары ушли в ошибки (Частично выполнена)'),
                    Request::columnValueList('Требуется уточнение информации по задаче (Ожидает)'),
                    Request::columnValueList('Часть товаров ушла в ошибки (Частично выполнена)'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [ //при выборе "Все товары уже есть на сайте" вторая заявка перестаёт показываться
                "canSee" => [
                    Request::searchValueList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    Request::searchValueList('reasons', 'Другое (описан в коментариях) (Все)'),
                    Request::searchValueList('reasons', 'Дубль задачи (Отменена)'),
                    Request::searchValueList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    Request::searchValueList('reasons', 'Нада (На доработке)'),
                    Request::searchValueList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::searchValueList('reasons', 'Нинада (На доработке)'),
                    Request::searchValueList('reasons', 'Ожидает группировки (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                    Request::searchValueList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    Request::searchValueList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    Request::searchValueList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                    Request::searchValueList('reasons', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    Request::searchValueList('reasons', 'Другое (описан в коментариях) (Все)'),
                    Request::searchValueList('reasons', 'Дубль задачи (Отменена)'),
                    Request::searchValueList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    Request::searchValueList('reasons', 'Нада (На доработке)'),
                    Request::searchValueList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::searchValueList('reasons', 'Нинада (На доработке)'),
                    Request::searchValueList('reasons', 'Ожидает группировки (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                    Request::searchValueList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    Request::searchValueList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    Request::searchValueList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                ],
                "cantSee" => [
                    Request::searchValueList('reasons', '(не задано)'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('reasons', 'Все товары уже есть на сайте (Отменена)'),
                    Request::searchValueList('reasons', 'Другое (описан в коментариях) (Все)'),
                    Request::searchValueList('reasons', 'Дубль задачи (Отменена)'),
                    Request::searchValueList('reasons', 'Изменен приоритет задачи (Ожидает)'),
                    Request::searchValueList('reasons', 'Нада (На доработке)'),
                    Request::searchValueList('reasons', 'Не получена запрошенная недостающая информация (Частично выполнена)'),
                    Request::searchValueList('reasons', 'Нинада (На доработке)'),
                    Request::searchValueList('reasons', 'Ожидает группировки (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка обновлений в систему (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка товаров в систему (Ожидает)'),
                    Request::searchValueList('reasons', 'Ожидается загрузка фото в товары (Ожидает)'),
                    Request::searchValueList('reasons', 'Товары ушли в ошибки (Частично выполнена)'),
                    Request::searchValueList('reasons', 'Требуется уточнение информации по задаче (Ожидает)'),
                    Request::searchValueList('reasons', 'Часть товаров ушла в ошибки (Частично выполнена)'),
                    Request::searchValueList('reasons', '(не задано)'),
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
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
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
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
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
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
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
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
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

    'case7' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки кросс-чек статуса',
            'column' => 'cross_check_status',
            'value' => 'Не прошла кросс-чек',
            'amount' => 1,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    Request::columnValueList('Не прошла кросс-чек'),
                    Request::columnValueList('На кросс-чеке'),
                    Request::columnValueList('Кросс-чек пройден'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('cross_check_status', 'Не прошла кросс-чек'),
                    Request::searchValueList('cross_check_status', 'На кросс-чеке'),
                    Request::searchValueList('cross_check_status', 'Кросс-чек пройден'),
                    Request::searchValueList('cross_check_status', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('cross_check_status', 'На кросс-чеке'),
                    Request::searchValueList('cross_check_status', 'Кросс-чек пройден'),
                    Request::searchValueList('cross_check_status', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('cross_check_status', 'Не прошла кросс-чек'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('cross_check_status', 'Не прошла кросс-чек'),
                    Request::searchValueList('cross_check_status', 'На кросс-чеке'),
                    Request::searchValueList('cross_check_status', 'Кросс-чек пройден'),
                    Request::searchValueList('cross_check_status', '(не задано)'),
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки направления задачи',
            'column' => 'direction',
            'value' => 'Работа с товарами Розетки',
            'amount' => 19,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    Request::columnValueList('Определяется типом задачи'),
                    Request::columnValueList('Работа с товарами Розетки'),
                    Request::columnValueList('Работа с товарами Маркетплейса'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('direction', 'Определяется типом задачи'),
                    Request::searchValueList('direction', 'Работа с товарами Розетки'),
                    Request::searchValueList('direction', 'Работа с товарами Маркетплейса'),
                    Request::searchValueList('direction', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('direction', 'Определяется типом задачи'),
                    Request::searchValueList('direction', 'Работа с товарами Маркетплейса'),
                    Request::searchValueList('direction', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('direction', 'Работа с товарами Розетки'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('direction', 'Определяется типом задачи'),
                    Request::searchValueList('direction', 'Работа с товарами Розетки'),
                    Request::searchValueList('direction', 'Работа с товарами Маркетплейса'),
                    Request::searchValueList('direction', '(не задано)'),
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки направления команды',
            'column' => 'team_direction',
            'value' => 'Работа с проектированием структур + фильтрами',
            'amount' => 19,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    Request::columnValueList('Управление отделом'),
                    Request::columnValueList('Работа с товарами Маркетплейса'),
                    Request::columnValueList('Работа с товарами Rozetka'),
                    Request::columnValueList('Работа с группами'),
                    Request::columnValueList('Работа с проектированием структур + фильтрами'),
                    Request::columnValueList('Работа с порталами, фат-меню, категориями'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('team_direction', 'Управление отделом'),
                    Request::searchValueList('team_direction', 'Работа с товарами Маркетплейса'),
                    Request::searchValueList('team_direction', 'Работа с товарами Rozetka'),
                    Request::searchValueList('team_direction', 'Работа с группами'),
                    Request::searchValueList('team_direction', 'Работа с проектированием структур + фильтрами'),
                    Request::searchValueList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    Request::searchValueList('team_direction', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('team_direction', 'Управление отделом'),
                    Request::searchValueList('team_direction', 'Работа с товарами Маркетплейса'),
                    Request::searchValueList('team_direction', 'Работа с товарами Rozetka'),
                    Request::searchValueList('team_direction', 'Работа с группами'),
                    Request::searchValueList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    Request::searchValueList('team_direction', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('team_direction', 'Работа с проектированием структур + фильтрами'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('team_direction', 'Управление отделом'),
                    Request::searchValueList('team_direction', 'Работа с товарами Маркетплейса'),
                    Request::searchValueList('team_direction', 'Работа с товарами Rozetka'),
                    Request::searchValueList('team_direction', 'Работа с группами'),
                    Request::searchValueList('team_direction', 'Работа с проектированием структур + фильтрами'),
                    Request::searchValueList('team_direction', 'Работа с порталами, фат-меню, категориями'),
                    Request::searchValueList('team_direction', '(не задано)'),
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки уровня сложности',
            'column' => 'difficulty_level',
            'value' => '5',
            'amount' => 23,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    Request::columnValueList('1'),
                    Request::columnValueList('2'),
                    Request::columnValueList('3'),
                    Request::columnValueList('4'),
                    Request::columnValueList('5'),
                    Request::columnValueList('6'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('difficulty_level', '1'),
                    Request::searchValueList('difficulty_level', '2'),
                    Request::searchValueList('difficulty_level', '3'),
                    Request::searchValueList('difficulty_level', '4'),
                    Request::searchValueList('difficulty_level', '5'),
                    Request::searchValueList('difficulty_level', '6'),
                    Request::searchValueList('difficulty_level', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('difficulty_level', '1'),
                    Request::searchValueList('difficulty_level', '2'),
                    Request::searchValueList('difficulty_level', '3'),
                    Request::searchValueList('difficulty_level', '4'),
                    Request::searchValueList('difficulty_level', '6'),
                    Request::searchValueList('difficulty_level', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('difficulty_level', '5'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('difficulty_level', '1'),
                    Request::searchValueList('difficulty_level', '2'),
                    Request::searchValueList('difficulty_level', '3'),
                    Request::searchValueList('difficulty_level', '4'),
                    Request::searchValueList('difficulty_level', '5'),
                    Request::searchValueList('difficulty_level', '6'),
                    Request::searchValueList('difficulty_level', '(не задано)'),
                ],
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра колонки статуса',
            'column' => 'status',
            'value' => 'В работе',
            'amount' => 21,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    Request::columnValueList('Новая'),
                    Request::columnValueList('Готова для распределения'),
                    Request::columnValueList('На доработке'),
                    Request::columnValueList('Отменена'),
                    Request::columnValueList('Ожидает взятия в работу'),
                    Request::columnValueList('В работе'),
                    Request::columnValueList('Ожидает'),
                    Request::columnValueList('Частично выполнена'),
                    Request::columnValueList('Выполнена'),
                    Request::columnValueList('Закрыта'),
                    Request::columnValueList('(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    Request::searchValueList('status', 'Новая'),
                    Request::searchValueList('status', 'Готова для распределения'),
                    Request::searchValueList('status', 'На доработке'),
                    Request::searchValueList('status', 'Отменена'),
                    Request::searchValueList('status', 'Ожидает взятия в работу'),
                    Request::searchValueList('status', 'В работе'),
                    Request::searchValueList('status', 'Ожидает'),
                    Request::searchValueList('status', 'Частично выполнена'),
                    Request::searchValueList('status', 'Выполнена'),
                    Request::searchValueList('status', 'Закрыта'),
                    Request::searchValueList('status', '(не задано)'),
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    Request::searchValueList('status', 'Новая'),
                    Request::searchValueList('status', 'Готова для распределения'),
                    Request::searchValueList('status', 'На доработке'),
                    Request::searchValueList('status', 'Отменена'),
                    Request::searchValueList('status', 'Ожидает взятия в работу'),
                    Request::searchValueList('status', 'Ожидает'),
                    Request::searchValueList('status', 'Частично выполнена'),
                    Request::searchValueList('status', 'Выполнена'),
                    Request::searchValueList('status', 'Закрыта'),
                    Request::searchValueList('status', '(не задано)'),
                ],
                "cantSee" => [
                    Request::searchValueList('status', 'В работе'),
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    Request::searchValueList('status', 'Новая'),
                    Request::searchValueList('status', 'Готова для распределения'),
                    Request::searchValueList('status', 'На доработке'),
                    Request::searchValueList('status', 'Отменена'),
                    Request::searchValueList('status', 'Ожидает взятия в работу'),
                    Request::searchValueList('status', 'В работе'),
                    Request::searchValueList('status', 'Ожидает'),
                    Request::searchValueList('status', 'Частично выполнена'),
                    Request::searchValueList('status', 'Выполнена'),
                    Request::searchValueList('status', 'Закрыта'),
                    Request::searchValueList('status', '(не задано)'),
                ],
            ],
        ]
    ],
];
