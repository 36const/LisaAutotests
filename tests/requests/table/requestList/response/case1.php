<?php

use lisa\UsersTester;

return [
    'tabsData' => UsersTester::tableMassButtons(1),
    'currentTab' => 'new',
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
        'item.hand_load' => [
            'value' => 'hand_load',
            'text' => 'Ручная загрузка',
            'fieldId' => 1,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.pack_load' => [
            'value' => 'pack_load',
            'text' => 'Пакетная загрузка',
            'fieldId' => 2,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.visa' => [
            'value' => 'visa',
            'text' => 'Виза супервайзера',
            'fieldId' => 3,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.with_photo' => [
            'value' => 'with_photo',
            'text' => 'С фотосъемкой',
            'fieldId' => 4,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.enter_points' => [
            'value' => 'enter_points',
            'text' => 'Точки входа',
            'fieldId' => 6,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.adding_graphics' => [
            'value' => 'adding_graphics',
            'text' => 'Добавление графики',
            'fieldId' => 7,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.with_grid' => [
            'value' => 'with_grid',
            'text' => 'С размерной сеткой',
            'fieldId' => 8,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.with_tags' => [
            'value' => 'with_tags',
            'text' => 'С тегами к товарам',
            'fieldId' => 9,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.markdown' => [
            'value' => 'markdown',
            'text' => 'Уценка',
            'fieldId' => 10,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.markdown_2' => [
            'value' => 'markdown_2',
            'text' => 'Уценка 2',
            'fieldId' => 11,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.by_client_review' => [
            'value' => 'by_client_review',
            'text' => 'На основе отзыва клиента на сайте',
            'fieldId' => 12,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
        ],
        'item.complaint_for_good' => [
            'value' => 'complaint_for_good',
            'text' => 'Жалоба на товар продавца маркета',
            'fieldId' => 13,
            'type' => 'checkBox',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Да',
                    ],
                    1 => [
                        'id' => 0,
                        'text' => 'Нет',
                    ],
                ],
            ],
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
                'child_count' => 1,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'status' => [
                    'text' => 'Новая',
                    'value' => 1,
                ],
                'awaiting_correction' => 0,
                'id' => 3,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Группировка товаров',
                    'value' => 4,
                ],
                'requestAttachments' => [
                ],
                'fields' => [
                    3 => [
                        'request_id' => 3,
                        'field_id' => 3,
                        'value' => '1',
                    ],
                ],
            ],
            1 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'status' => [
                    'text' => 'Новая',
                    'value' => 1,
                ],
                'awaiting_correction' => 0,
                'id' => 2,
                'subject' => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                'type_id' => [
                    'text' => 'Добавление новых товаров',
                    'value' => 1,
                ],
                'requestAttachments' => [
                ],
                'fields' => [
                    8 => [
                        'request_id' => 2,
                        'field_id' => 8,
                        'value' => '1',
                    ],
                ],
            ],
            2 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'На доработке',
                    'value' => 3,
                ],
                'status' => [
                    'text' => 'Новая  (Вернулась с доработки)',
                    'value' => 1,
                ],
                'awaiting_correction' => 0,
                'id' => 1,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
                'type_id' => [
                    'text' => 'Добавление/изменение информации в существующих товарах',
                    'value' => 2,
                ],
                'requestAttachments' => [
                ],
                'fields' => [
                    1 => [
                        'request_id' => 1,
                        'field_id' => 1,
                        'value' => '1',
                    ],
                    4 => [
                        'request_id' => 1,
                        'field_id' => 4,
                        'value' => '1',
                    ],
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa.api/request/list/new?page=1',
            ],
            'first' => [
                'href' => 'http://lisa.api/request/list/new?page=1',
            ],
            'last' => [
                'href' => 'http://lisa.api/request/list/new?page=1',
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