<?php

use lisa\UsersTester;

return [
    'tabsData' => UsersTester::tableMassButtons(4),
    'currentTab' => 'declined',
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
        'item.amount_to_work' => [
            'value' => 'amount_to_work',
            'text' => 'Количество в работу',
        ],
        'item.difficulty_level' => [
            'value' => 'difficulty_level',
            'text' => 'Уровень сложности задачи',
            'fieldId' => 20,
            'type' => 'select',
            'sortable' => false,
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => 61,
                        'text' => '1',
                    ],
                    1 => [
                        'id' => 62,
                        'text' => '2',
                    ],
                    2 => [
                        'id' => 63,
                        'text' => '3',
                    ],
                    3 => [
                        'id' => 64,
                        'text' => '4',
                    ],
                    4 => [
                        'id' => 65,
                        'text' => '5',
                    ],
                    5 => [
                        'id' => 66,
                        'text' => '6',
                    ],
                    6 => [
                        'id' => -1,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.reason' => [
            'value' => 'reason',
            'text' => 'Причина отмены/доработки',
            'filter' => false,
        ],
        'item.goods_in_db' => [
            'value' => 'goods_in_db',
            'text' => 'Количество товаров, которые уже есть в БД',
            'fieldId' => 111,
            'type' => 'integer',
            'sortable' => false,
            'filter' => 'text',
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
                    'text' => 'В работе',
                    'value' => 6,
                ],
                'status' => [
                    'text' => 'Отменена',
                    'value' => 4,
                ],
                'awaiting_correction' => 0,
                'id' => 11,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Проектирование структуры',
                    'value' => 11,
                ],
                'amount_to_work' => 10,
                'reason' => [
                    'text' => '<br><span><b>Дата:</b> 2020-01-02 12:12:12 <b>Причина:</b> Дубль задачи | Все товары уже есть на сайте <br><b>Комментарий:</b> 2501234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ2501234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ </span><br>',
                    'value' => 'Отменить',
                ],
                'requestAttachments' => [
                ],
                'fields' => [
                ],
            ],
            1 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Ожидает взятия в работу',
                    'value' => 5,
                ],
                'status' => [
                    'text' => 'Отменена',
                    'value' => 4,
                ],
                'awaiting_correction' => 0,
                'id' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Изменение существующих параметров/значений',
                    'value' => 10,
                ],
                'amount_to_work' => 10,
                'reason' => [
                    'text' => '<br><span><b>Дата:</b> 2020-01-01 10:10:10 <b>Причина:</b> Дубль задачи <br><b>Комментарий:</b> https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory </span><br>',
                    'value' => 'Отменить',
                ],
                'requestAttachments' => [
                ],
                'fields' => [
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa-api.docker/request/list/declined?per-page=500&page=1',
            ],
            'first' => [
                'href' => 'http://lisa-api.docker/request/list/declined?per-page=500&page=1',
            ],
            'last' => [
                'href' => 'http://lisa-api.docker/request/list/declined?per-page=500&page=1',
            ],
        ],
        '_meta' => [
            'totalCount' => 2,
            'pageCount' => 1,
            'currentPage' => 1,
            'perPage' => 500,
        ],
    ],
];