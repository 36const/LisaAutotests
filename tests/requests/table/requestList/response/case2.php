<?php

use lisa\UsersTester;

return [
    'tabsData' => UsersTester::tableMassButtons(2),
    'currentTab' => 'in-check',
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
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Новая',
                    'value' => 1,
                ],
                'status' => [
                    'text' => 'Готова для распределения',
                    'value' => 2,
                ],
                'awaiting_correction' => 0,
                'id' => 6,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'type_id' => [
                    'text' => 'Перенос товаров',
                    'value' => 3,
                ],
                'requestAttachments' => [
                ],
                'fields' => [
                    17 => [
                        'request_id' => 6,
                        'field_id' => 17,
                        'value' => '1',
                    ],
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
                    'text' => 'Готова для распределения',
                    'value' => 2,
                ],
                'awaiting_correction' => 0,
                'id' => 5,
                'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                'type_id' => [
                    'text' => 'Перенос товаров',
                    'value' => 3,
                ],
                'requestAttachments' => [
                ],
                'fields' => [
                    15 => [
                        'request_id' => 5,
                        'field_id' => 15,
                        'value' => '1',
                    ],
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
                    'text' => 'Готова для распределения',
                    'value' => 2,
                ],
                'awaiting_correction' => 0,
                'id' => 4,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'type_id' => [
                    'text' => 'Перенос товаров',
                    'value' => 3,
                ],
                'requestAttachments' => [
                ],
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