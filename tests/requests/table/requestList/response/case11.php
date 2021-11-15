<?php

return [
    'tabsData' => [
        'all' => [
            'label' => 'Все',
        ],
        'new' => [
            'label' => 'Новые',
            'visible' => true,
            'dialogs' => [
                0 => [
                    'component' => 'Confirm',
                    'title' => 'Готова для распределения',
                    'visible' => true,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'На доработку',
                    'visible' => true,
                    'targetStatus' => 3,
                ],
                2 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Назначить исполнителя',
                    'visible' => true,
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                ],
                4 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                5 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 5,
            ],
        ],
        'in-check' => [
            'label' => 'Готовы для распределения',
            'visible' => true,
            'dialogs' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'На доработку',
                    'visible' => true,
                    'targetStatus' => 3,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Назначить исполнителя',
                    'visible' => true,
                    'url' => '/user/managers',
                    'userTeam' => 17,
                    'prompt' => 'Поиск исполнителя...',
                ],
                3 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                4 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 10,
            ],
        ],
        'require-changes' => [
            'label' => 'На доработке',
            'visible' => true,
            'dialogs' => [
                0 => [
                    'component' => 'Comment',
                    'title' => 'Вернуть в новые',
                    'visible' => false,
                ],
                1 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                2 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 13,
            ],
        ],
        'wait-work' => [
            'label' => 'Ожидают взятия в работу',
            'dialogs' => [
                0 => [
                    'component' => 'Confirm',
                    'title' => 'В работу',
                    'visible' => true,
                ],
                1 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                2 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 16,
            ],
        ],
        'in-work' => [
            'label' => 'В работе',
            'dialogs' => [
                0 => [
                    'component' => 'Reason',
                    'title' => 'Ожидать',
                    'visible' => true,
                    'targetStatus' => 7,
                ],
                1 => [
                    'component' => 'Reason',
                    'title' => 'Отменить',
                    'visible' => true,
                    'targetStatus' => 4,
                ],
                2 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                3 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 20,
            ],
        ],
        'on-hold' => [
            'label' => 'Ожидают',
            'dialogs' => [
                0 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                1 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 22,
            ],
        ],
        'completed' => [
            'label' => 'Выполнены',
            'dialogs' => [
                0 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                1 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 24,
            ],
        ],
        'declined' => [
            'label' => 'Отменены',
            'dialogs' => [
                0 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 25,
            ],
        ],
        'closed' => [
            'label' => 'Закрыты',
            'dialogs' => [
                0 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 26,
            ],
        ],
        'observable' => [
            'label' => 'Наблюдаемые',
        ],
        'cross-check' => [
            'label' => 'Кросс-чек',
            'visible' => true,
            'dialogs' => [
                0 => [
                    'component' => 'Appoint',
                    'title' => 'Изменить супервайзера',
                    'visible' => true,
                    'url' => '/user/supervisors',
                    'prompt' => 'Поиск супервизора...',
                ],
                1 => [
                    'component' => 'Confirm',
                    'title' => ' Взять на Кросс-чек',
                ],
                2 => [
                    'component' => 'MassEdit',
                    'title' => 'Пакетное редактирование',
                    'visible' => true,
                ],
                'order' => 29,
            ],
        ],
    ],
    'currentTab' => 'closed',
    'columns' => [
        'item.id' => [
            'value' => 'id',
            'text' => 'ID задачи',
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
                        'id' => '1',
                        'text' => 'Добавление новых товаров',
                    ],
                    1 => [
                        'id' => '2',
                        'text' => 'Добавление/изменение информации в существующих товарах',
                    ],
                    2 => [
                        'id' => '3',
                        'text' => 'Перенос товаров',
                    ],
                    3 => [
                        'id' => '4',
                        'text' => 'Группировка товаров',
                    ],
                    4 => [
                        'id' => '5',
                        'text' => 'Заливка фото с фотостудии',
                    ],
                    5 => [
                        'id' => '6',
                        'text' => 'Проверка скрытых товаров',
                    ],
                    6 => [
                        'id' => '7',
                        'text' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    ],
                    7 => [
                        'id' => '8',
                        'text' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                    ],
                    8 => [
                        'id' => '9',
                        'text' => 'Добавление параметров/значений',
                    ],
                    9 => [
                        'id' => '10',
                        'text' => 'Изменение существующих параметров/значений',
                    ],
                    10 => [
                        'id' => '11',
                        'text' => 'Проектирование структуры',
                    ],
                    11 => [
                        'id' => '12',
                        'text' => 'Добавление новых СЦ/изменение существующих СЦ',
                    ],
                    12 => [
                        'id' => '13',
                        'text' => 'Добавление/изменение видео',
                    ],
                    13 => [
                        'id' => '14',
                        'text' => 'Добавление/изменение размерной сетки',
                    ],
                    14 => [
                        'id' => '15',
                        'text' => 'Добавление/изменение тегов',
                    ],
                ],
            ],
        ],
        'item.report_period_id' => [
            'value' => 'report_period_id',
            'text' => 'Отчетный период КМ',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => '2020-01-01 - 2020-03-31',
                    ],
                    1 => [
                        'id' => '2',
                        'text' => '2020-04-01 - 2020-06-30',
                    ],
                    2 => [
                        'id' => '3',
                        'text' => '2020-07-01 - 2020-09-30',
                    ],
                    3 => [
                        'id' => '4',
                        'text' => '2020-10-01 - 2020-12-31',
                    ],
                    4 => [
                        'id' => NULL,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.sv_report_periods' => [
            'value' => 'sv_report_periods',
            'text' => 'Отчетные периоды СВ',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => '2020-01-01 - 2020-03-31',
                    ],
                    1 => [
                        'id' => '2',
                        'text' => '2020-04-01 - 2020-06-30',
                    ],
                    2 => [
                        'id' => '3',
                        'text' => '2020-07-01 - 2020-09-30',
                    ],
                    3 => [
                        'id' => '4',
                        'text' => '2020-10-01 - 2020-12-31',
                    ],
                    4 => [
                        'id' => NULL,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.result_comment' => [
            'value' => 'result_comment',
            'text' => 'Комментарий к результату задачи',
        ],
        'item.supervisor_check_date' => [
            'value' => 'supervisor_check_date',
            'text' => 'Дата проверки задачи супервайзером',
        ],
        'item.calc_quantity_of_checked_goods' => [
            'value' => 'calc_quantity_of_checked_goods',
            'text' => 'Рассчитанное количество проверенных товаров',
            'fieldId' => 51,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_checked_goods_with_errors' => [
            'value' => 'calc_quantity_of_checked_goods_with_errors',
            'text' => 'Рассчитанное количество проверенных товаров с ошибками',
            'fieldId' => 60,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_checked_goods_cc' => [
            'value' => 'calc_quantity_of_checked_goods_cc',
            'text' => 'Рассчитанное количество проверенных товаров (Кросс-чек)',
            'fieldId' => 142,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_checked_goods_with_errors_cc' => [
            'value' => 'calc_quantity_of_checked_goods_with_errors_cc',
            'text' => 'Рассчитанное количество проверенных товаров с ошибками (Кросс-чек)',
            'fieldId' => 143,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
    ],
    'data' => [
        'models' => [
            0 => [
                'id' => 25,
                'subject' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
                'type_id' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                'report_period_id' => '2020-07-01 - 2020-09-30',
                'sv_report_periods' => '2020-01-01 - 2020-03-31, 2020-04-01 - 2020-06-30',
                'result_comment' => 'Выполнена',
                'supervisor_check_date' => '2020-11-24 14:57:06',
                'fields' => [
                ],
            ],
            1 => [
                'id' => 24,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'type_id' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                'report_period_id' => '2020-01-01 - 2020-03-31',
                'sv_report_periods' => '2020-01-01 - 2020-03-31',
                'result_comment' => 'Выполнена',
                'supervisor_check_date' => '2020-11-23 14:57:48',
                'fields' => [
                ],
            ],
            2 => [
                'id' => 23,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'type_id' => 'Добавление/изменение тегов',
                'report_period_id' => '2020-01-01 - 2020-03-31',
                'sv_report_periods' => '2020-01-01 - 2020-03-31',
                'result_comment' => 'Выполнена
абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі
АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ
abcdefghijklmnopqrstuvwxyz
абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі
АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ
abcdefghijklmnopqrstuvwxyzабвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyz
',
                'supervisor_check_date' => '2020-08-20 14:51:53',
                'fields' => [
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa-api.docker/request/list/closed?page=1',
            ],
            'first' => [
                'href' => 'http://lisa-api.docker/request/list/closed?page=1',
            ],
            'last' => [
                'href' => 'http://lisa-api.docker/request/list/closed?page=1',
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