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
        'item.description_available' => [
            'value' => 'description_available',
            'text' => 'Наличие описаний к товарам',
            'fieldId' => 23,
            'type' => 'select',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => '14',
                        'text' => 'Не предоставлены продактом. Выполнен поиск.',
                    ],
                    1 => [
                        'id' => '11',
                        'text' => 'Предоставлены продактом',
                    ],
                    2 => [
                        'id' => '12',
                        'text' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                    ],
                    3 => [
                        'id' => '13',
                        'text' => 'Предоставлены продактом частично. С дополнительным поиском.',
                    ],
                    4 => [
                        'id' => NULL,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.language' => [
            'value' => 'language',
            'text' => 'Язык информации',
            'fieldId' => 26,
            'type' => 'select',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => '23',
                        'text' => 'Английский',
                    ],
                    1 => [
                        'id' => '21',
                        'text' => 'Русский',
                    ],
                    2 => [
                        'id' => '22',
                        'text' => 'Украинский',
                    ],
                    3 => [
                        'id' => NULL,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.description' => [
            'value' => 'description',
            'text' => 'Описание',
        ],
        'item.added_goods' => [
            'value' => 'added_goods',
            'text' => 'Количество добавленных товаров',
            'fieldId' => 66,
            'type' => 'integer',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.changed_goods' => [
            'value' => 'changed_goods',
            'text' => 'Количество изменённых товаров',
            'fieldId' => 67,
            'type' => 'integer',
            'sortable' => false,
            'filter' => 'text',
        ],
        'item.actual_start_date' => [
            'value' => 'actual_start_date',
            'text' => 'Фактическая дата начала работ',
        ],
        'item.actual_finish_date' => [
            'value' => 'actual_finish_date',
            'text' => 'Фактическая дата завершения',
        ],
        'item.supervisor_process_date' => [
            'value' => 'supervisor_process_date',
            'text' => 'Дата обработки задачи супервайзером',
        ],
    ],
    'currentTab' => 'completed',
    'data' => [
        'models' => [
            0 => [
                'id' => 22,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'type_id' => 'Добавление/изменение видео',
                'description' => 'Описание
http://splitter.docker/bpm/request/view?id=20&forCrossCheck=0
№20 Добавление/изменение видео (Определяется типом задачи)
http://splitter.docker/bpm/request/view?id=20&forCrossCheck=0
№20 Добавление/изменение видео (Определяется типом задачи)
http://splitter.docker/bpm/request/view?id=20&forCrossCheck=0
№20 Добавление/изменение видео (Определяется типом задачи)
http://splitter.docker/bpm/request/view?id=20&forCrossCheck=0
№20 Добавление/изменение видео (Определяется типом задачи)
http://splitter.docker/bpm/request/view?id=20&forCrossCheck=0
№20 Добавление/изменение видео (Определяется типом задачи)
http://splitter.docker/bpm/request/view?id=20&forCrossCheck=0
№20 Добавление/изменение видео (Определяется типом задачи)
',
                'actual_start_date' => '2020-08-20 14:48:21',
                'actual_finish_date' => '2020-08-20 14:50:51',
                'supervisor_process_date' => '2020-08-20 14:50:51',
                'fields' => [
                ],
            ],
            1 => [
                'id' => 21,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'type_id' => 'Добавление/изменение тегов',
                'description' => 'Описание',
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2021-03-27 21:05:03',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'fields' => [
                ],
            ],
            2 => [
                'id' => 20,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'type_id' => 'Добавление/изменение видео',
                'description' => 'http://splitter.docker/bpm/request/view?id=11&forCrossCheck=0
http://splitter.docker/bpm/request/view?id=11&forCrossCheck=0
=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2021-03-27 21:05:03',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'fields' => [
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa-api.docker/request/list/completed?per-page=500&page=1',
            ],
            'first' => [
                'href' => 'http://lisa-api.docker/request/list/completed?per-page=500&page=1',
            ],
            'last' => [
                'href' => 'http://lisa-api.docker/request/list/completed?per-page=500&page=1',
            ],
        ],
        '_meta' => [
            'totalCount' => 3,
            'pageCount' => 1,
            'currentPage' => 1,
            'perPage' => 500,
        ],
    ],
];