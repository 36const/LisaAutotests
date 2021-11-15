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
        'item.quantity_of_handled_but_not_grouped' => [
            'value' => 'quantity_of_handled_but_not_grouped',
            'text' => 'Количество обработанных, но не сгруппированных товаров',
            'fieldId' => 161,
            'type' => 'integer',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.group_settings' => [
            'value' => 'group_settings',
            'text' => 'Количество настроек групп (управление группами)',
            'fieldId' => 162,
            'type' => 'integer',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.quantity_of_words_in_dictionaries' => [
            'value' => 'quantity_of_words_in_dictionaries',
            'text' => 'Количество слов в словарях',
            'fieldId' => 163,
            'type' => 'integer',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_indicators' => [
            'value' => 'calc_quantity_of_indicators',
            'text' => 'Общее рассчитанное количество показателей',
            'fieldId' => 64,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_not_grouped' => [
            'value' => 'calc_quantity_of_not_grouped',
            'text' => 'Рассчитанное количество не сгруппированных товаров',
            'fieldId' => 164,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_sent_emails' => [
            'value' => 'calc_quantity_of_sent_emails',
            'text' => 'Рассчитанное количество отправленных писем',
            'fieldId' => 165,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_child_requests' => [
            'value' => 'calc_quantity_of_child_requests',
            'text' => 'Рассчитанное количество созданных подзадач',
            'fieldId' => 166,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.calc_quantity_of_words_in_dictionaries' => [
            'value' => 'calc_quantity_of_words_in_dictionaries',
            'text' => 'Рассчитанное количество слов в словарях',
            'fieldId' => 167,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.average_amount_of_goods_in_group' => [
            'value' => 'average_amount_of_goods_in_group',
            'text' => 'Среднее количество товаров в группе',
            'fieldId' => 168,
            'type' => 'decimal',
            'sortable' => false,
            'filter' => 'text',
        ],
    ],
    'currentTab' => 'in-work',
    'data' => [
        'models' => [
            0 => [
                'id' => 17,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'type_id' => 'Проектирование структуры',
                'fields' => [
                ],
            ],
            1 => [
                'id' => 16,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'type_id' => 'Добавление параметров/значений',
                'fields' => [
                ],
            ],
            2 => [
                'id' => 15,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'type_id' => 'Добавление параметров/значений',
                'fields' => [
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa-api.docker/request/list/in-work?per-page=50&page=1',
            ],
            'first' => [
                'href' => 'http://lisa-api.docker/request/list/in-work?per-page=50&page=1',
            ],
            'last' => [
                'href' => 'http://lisa-api.docker/request/list/in-work?per-page=50&page=1',
            ],
        ],
        '_meta' => [
            'totalCount' => 3,
            'pageCount' => 1,
            'currentPage' => 1,
            'perPage' => 50,
        ],
    ],
];