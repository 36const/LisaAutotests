<?php

use lisa\UsersTester;

return [
    'tabsData' => UsersTester::tableMassButtons(5),
    'currentTab' => 'wait-work',
    'columns' => [
        'item.id' => [
            'value' => 'id',
            'text' => 'Номер задачи',
        ],
        'item.subject' => [
            'value' => 'subject',
            'text' => 'Заголовок',
        ],
        'item.type_id' => [
            'value' => 'type_id',
            'text' => 'Тип',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Добавление новых товаров',
                    ],
                    1 => [
                        'id' => 2,
                        'text' => 'Добавление/изменение информации в существующих товарах',
                    ],
                    2 => [
                        'id' => 3,
                        'text' => 'Перенос товаров',
                    ],
                    3 => [
                        'id' => 4,
                        'text' => 'Группировка товаров',
                    ],
                    4 => [
                        'id' => 5,
                        'text' => 'Заливка фото с фотостудии',
                    ],
                    5 => [
                        'id' => 6,
                        'text' => 'Проверка скрытых товаров',
                    ],
                    6 => [
                        'id' => 7,
                        'text' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    ],
                    7 => [
                        'id' => 8,
                        'text' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                    ],
                    8 => [
                        'id' => 9,
                        'text' => 'Добавление параметров/значений',
                    ],
                    9 => [
                        'id' => 10,
                        'text' => 'Изменение существующих параметров/значений',
                    ],
                    10 => [
                        'id' => 11,
                        'text' => 'Проектирование структуры',
                    ],
                    11 => [
                        'id' => 12,
                        'text' => 'Добавление новых СЦ/изменение существующих СЦ',
                    ],
                    12 => [
                        'id' => 13,
                        'text' => 'Добавление/изменение видео',
                    ],
                    13 => [
                        'id' => 14,
                        'text' => 'Добавление/изменение размерной сетки',
                    ],
                    14 => [
                        'id' => 15,
                        'text' => 'Добавление/изменение тегов',
                    ],
                ],
            ],
        ],
        'item.last_change_status_date' => [
            'value' => 'last_change_status_date',
            'text' => 'Дата последнего изменения статуса',
            'filter' => 'date',
        ],
        'item.created_at' => [
            'value' => 'created_at',
            'text' => 'Дата регистрации задачи в системе',
            'filter' => 'date',
        ],
        'item.planned_start_date' => [
            'value' => 'planned_start_date',
            'text' => 'Плановая дата начала работ',
            'filter' => 'date',
        ],
        'item.planned_finish_date' => [
            'value' => 'planned_finish_date',
            'text' => 'Плановая дата завершения',
            'filter' => 'date',
        ],
    ],
    'filters' => [
    ],
    'permissions' => [
        'requestCreate' => true,
    ],
    'data' => [
        'models' => [
            0 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Готова для распределения',
                    'value' => 2,
                ],
                'status' => [
                    'text' => 'Ожидает взятия в работу',
                    'value' => 5,
                ],
                'awaiting_correction' => 0,
                'id' => 14,
                'subject' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
                'type_id' => [
                    'text' => 'Добавление новых СЦ/изменение существующих СЦ',
                    'value' => 12,
                ],
                'last_change_status_date' => '2021-03-20 21:05:03',
                'created_at' => '2020-05-16 00:00:00',
                'planned_start_date' => NULL,
                'planned_finish_date' => NULL,
                'requestAttachments' => [
                ],
            ],
            1 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Новая',
                    'value' => 1,
                ],
                'status' => [
                    'text' => 'Ожидает взятия в работу',
                    'value' => 5,
                ],
                'awaiting_correction' => 0,
                'id' => 13,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'type_id' => [
                    'text' => 'Добавление новых товаров',
                    'value' => 1,
                ],
                'last_change_status_date' => '2021-03-26 21:05:03',
                'created_at' => '2020-05-08 00:00:00',
                'planned_start_date' => '2020-01-02 00:12:55',
                'planned_finish_date' => NULL,
                'requestAttachments' => [
                ],
            ],
            2 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Новая',
                    'value' => 1,
                ],
                'status' => [
                    'text' => 'Ожидает взятия в работу',
                    'value' => 5,
                ],
                'awaiting_correction' => 0,
                'id' => 12,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    'value' => 7,
                ],
                'last_change_status_date' => '2021-03-27 21:05:03',
                'created_at' => '2020-05-03 00:00:00',
                'planned_start_date' => '2020-01-01 00:00:55',
                'planned_finish_date' => NULL,
                'requestAttachments' => [
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa.api/request/list/wait-work?page=1',
            ],
            'first' => [
                'href' => 'http://lisa.api/request/list/wait-work?page=1',
            ],
            'last' => [
                'href' => 'http://lisa.api/request/list/wait-work?page=1',
            ],
        ],
        '_meta' => [
            'totalCount' => 3,
            'pageCount' => 1,
            'currentPage' => 1,
            'perPage' => 20,
        ],
    ],
];