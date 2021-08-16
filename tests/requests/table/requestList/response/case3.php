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
        'item.recommendations' => [
            'value' => 'recommendations',
            'text' => 'Рекомендации',
        ],
        'item.correction_comment' => [
            'value' => 'correction_comment',
            'text' => 'Комментарий на исправление',
        ],
        'item.priority' => [
            'value' => 'priority',
            'text' => 'Приоритет',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Информация необходима для склада',
                    ],
                    1 => [
                        'id' => '3',
                        'text' => 'Исправление критичной ошибки',
                    ],
                    2 => [
                        'id' => '2',
                        'text' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                    3 => [
                        'id' => NULL,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.reasons' => [
            'value' => 'reasons',
            'text' => 'Причины',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => '10',
                        'text' => 'Все товары уже есть на сайте (Отменена)',
                    ],
                    1 => [
                        'id' => '11',
                        'text' => 'Другое (описан в коментариях) (Все)',
                    ],
                    2 => [
                        'id' => '9',
                        'text' => 'Дубль задачи (Отменена)',
                    ],
                    3 => [
                        'id' => '3',
                        'text' => 'Изменен приоритет задачи (Ожидает)',
                    ],
                    4 => [
                        'id' => '13',
                        'text' => 'Нада (На доработке)',
                    ],
                    5 => [
                        'id' => '6',
                        'text' => 'Не получена запрошенная недостающая информация (Частично выполнена)',
                    ],
                    6 => [
                        'id' => '12',
                        'text' => 'Нинада (На доработке)',
                    ],
                    7 => [
                        'id' => '14',
                        'text' => 'Ожидает группировки (Ожидает)',
                    ],
                    8 => [
                        'id' => '5',
                        'text' => 'Ожидается загрузка обновлений в систему (Ожидает)',
                    ],
                    9 => [
                        'id' => '4',
                        'text' => 'Ожидается загрузка товаров в систему (Ожидает)',
                    ],
                    10 => [
                        'id' => '1',
                        'text' => 'Ожидается загрузка фото в товары (Ожидает)',
                    ],
                    11 => [
                        'id' => '15',
                        'text' => 'Товары на модерации (Ожидает)',
                    ],
                    12 => [
                        'id' => '7',
                        'text' => 'Товары ушли в ошибки (Частично выполнена)',
                    ],
                    13 => [
                        'id' => '2',
                        'text' => 'Требуется уточнение информации по задаче (Ожидает)',
                    ],
                    14 => [
                        'id' => '8',
                        'text' => 'Часть товаров ушла в ошибки (Частично выполнена)',
                    ],
                    15 => [
                        'id' => NULL,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
    ],
    'currentTab' => 'require-changes',
    'data' => [
        'models' => [
            0 => [
                'id' => 9,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'type_id' => 'Группировка товаров',
                'recommendations' => '',
                'correction_comment' => '',
                'priority' => NULL,
                'reasons' => 'Другое (описан в коментариях) | Нада',
            ],
            1 => [
                'id' => 8,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'type_id' => 'Добавление/изменение информации в существующих товарах',
                'recommendations' => 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyzабвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyz',
                'correction_comment' => '',
                'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                'reasons' => 'Нада | Нинада',
            ],
            2 => [
                'id' => 7,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'type_id' => 'Заливка фото с фотостудии',
                'recommendations' => NULL,
                'correction_comment' => NULL,
                'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                'reasons' => 'Другое (описан в коментариях)',
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa.api/request/list/require-changes?per-page=100&page=1',
            ],
            'first' => [
                'href' => 'http://lisa.api/request/list/require-changes?per-page=100&page=1',
            ],
            'last' => [
                'href' => 'http://lisa.api/request/list/require-changes?per-page=100&page=1',
            ],
        ],
        '_meta' => [
            'totalCount' => 3,
            'pageCount' => 1,
            'currentPage' => 1,
            'perPage' => 100,
        ],
    ],
];