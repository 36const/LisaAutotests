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
        'item.promo_desc' => [
            'value' => 'promo_desc',
            'text' => 'Промо-описание',
            'fieldId' => 14,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.adding_goods_to_new_category' => [
            'value' => 'adding_goods_to_new_category',
            'text' => 'Добавление товаров в новую категорию',
            'fieldId' => 18,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.used_ref' => [
            'value' => 'used_ref',
            'text' => 'БУ, REF',
            'fieldId' => 17,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.updating_photos' => [
            'value' => 'updating_photos',
            'text' => 'Обновление фото',
            'fieldId' => 123,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.updating_description' => [
            'value' => 'updating_description',
            'text' => 'Обновление описания',
            'fieldId' => 124,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.updating_characteristics' => [
            'value' => 'updating_characteristics',
            'text' => 'Обновление характеристик',
            'fieldId' => 125,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.automoderation' => [
            'value' => 'automoderation',
            'text' => 'Автомодерация',
            'fieldId' => 127,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.adding_instructions' => [
            'value' => 'adding_instructions',
            'text' => 'Добавление/обновление инструкций',
            'fieldId' => 126,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.stop_brands' => [
            'value' => 'stop_brands',
            'text' => 'Стоп-бренды',
            'fieldId' => 5,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.with_pallets' => [
            'value' => 'with_pallets',
            'text' => 'С палитрой',
            'fieldId' => 19,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.lots' => [
            'value' => 'lots',
            'text' => 'Лоты',
            'fieldId' => 16,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.with_video' => [
            'value' => 'with_video',
            'text' => 'С видео',
            'fieldId' => 15,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.mobile_courier' => [
            'value' => 'mobile_courier',
            'text' => 'По заявке с MobileCourier',
            'fieldId' => 159,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.ua_fields' => [
            'value' => 'ua_fields',
            'text' => 'Укр. поля',
            'fieldId' => 160,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.algorithm' => [
            'value' => 'algorithm',
            'text' => 'Алгоритм',
            'fieldId' => 169,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => '1',
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => '0',
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
    ],
    'currentTab' => 'in-check',
    'data' => [
        'models' => [
            0 => [
                'id' => 6,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'type_id' => 'Перенос товаров',
                'fields' => [
                ],
            ],
            1 => [
                'id' => 5,
                'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                'type_id' => 'Перенос товаров',
                'fields' => [
                    15 => [
                        'request_id' => 5,
                        'field_id' => 15,
                        'value' => '1',
                    ],
                ],
            ],
            2 => [
                'id' => 4,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'type_id' => 'Перенос товаров',
                'fields' => [
                    15 => [
                        'request_id' => 4,
                        'field_id' => 15,
                        'value' => '1',
                    ],
                    19 => [
                        'request_id' => 4,
                        'field_id' => 19,
                        'value' => '1',
                    ],
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa.api/request/list/in-check?per-page=50&page=1',
            ],
            'first' => [
                'href' => 'http://lisa.api/request/list/in-check?per-page=50&page=1',
            ],
            'last' => [
                'href' => 'http://lisa.api/request/list/in-check?per-page=50&page=1',
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