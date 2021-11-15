<?php

use lisa\UsersTester;

return [
    'tabsData' => UsersTester::tableMassButtons(999),
    'currentTab' => 'all',
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
        'item.author_id' => [
            'value' => 'author_id',
            'text' => 'Автор',
            'filter' => [
                'type' => 'autocomplete',
                'url' => '/user/list?fields=id,name&parent&filter[name]=',
                'itemText' => 'name',
                'itemValue' => 'id',
            ],
        ],
        'item.supervisor_id' => [
            'value' => 'supervisor_id',
            'text' => 'Супервайзер',
            'filter' => [
                'type' => 'autocomplete',
                'url' => '/user/list?fields=id,name&parent&filter[name]=',
                'itemText' => 'name',
                'itemValue' => 'id',
            ],
        ],
        'item.manager_id' => [
            'value' => 'manager_id',
            'text' => 'Контент-менеджер',
            'filter' => [
                'type' => 'autocomplete',
                'url' => '/user/list?fields=id,name&parent&filter[name]=',
                'itemText' => 'name',
                'itemValue' => 'id',
            ],
        ],
        'item.status' => [
            'value' => 'status',
            'text' => 'Статус',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Новая',
                    ],
                    1 => [
                        'id' => 2,
                        'text' => 'Готова для распределения',
                    ],
                    2 => [
                        'id' => 3,
                        'text' => 'На доработке',
                    ],
                    3 => [
                        'id' => 4,
                        'text' => 'Отменена',
                    ],
                    4 => [
                        'id' => 5,
                        'text' => 'Ожидает взятия в работу',
                    ],
                    5 => [
                        'id' => 6,
                        'text' => 'В работе',
                    ],
                    6 => [
                        'id' => 7,
                        'text' => 'Ожидает',
                    ],
                    7 => [
                        'id' => 8,
                        'text' => 'Частично выполнена',
                    ],
                    8 => [
                        'id' => 9,
                        'text' => 'Выполнена',
                    ],
                    9 => [
                        'id' => 11,
                        'text' => 'Закрыта',
                    ],
                    10 => [
                        'id' => -1,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.previous_status' => [
            'value' => 'previous_status',
            'text' => 'Предыдущий статус',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Новая',
                    ],
                    1 => [
                        'id' => 2,
                        'text' => 'Готова для распределения',
                    ],
                    2 => [
                        'id' => 3,
                        'text' => 'На доработке',
                    ],
                    3 => [
                        'id' => 4,
                        'text' => 'Отменена',
                    ],
                    4 => [
                        'id' => 5,
                        'text' => 'Ожидает взятия в работу',
                    ],
                    5 => [
                        'id' => 6,
                        'text' => 'В работе',
                    ],
                    6 => [
                        'id' => 7,
                        'text' => 'Ожидает',
                    ],
                    7 => [
                        'id' => 8,
                        'text' => 'Частично выполнена',
                    ],
                    8 => [
                        'id' => 9,
                        'text' => 'Выполнена',
                    ],
                    9 => [
                        'id' => 11,
                        'text' => 'Закрыта',
                    ],
                    10 => [
                        'id' => -1,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.cross_check_manager_id' => [
            'value' => 'cross_check_manager_id',
            'text' => 'Кросс-чек менеджер',
            'filter' => [
                'type' => 'autocomplete',
                'url' => '/user/list?fields=id,name&parent&filter[name]=',
                'itemText' => 'name',
                'itemValue' => 'id',
            ],
        ],
        'item.cross_check_status' => [
            'value' => 'cross_check_status',
            'text' => 'Кросс-чек статус',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => 0,
                        'text' => 'Не прошла кросс-чек',
                    ],
                    1 => [
                        'id' => 1,
                        'text' => 'На кросс-чеке',
                    ],
                    2 => [
                        'id' => 2,
                        'text' => 'Кросс-чек пройден',
                    ],
                    3 => [
                        'id' => -1,
                        'text' => '(не задано)',
                    ],
                ],
            ],
        ],
        'item.direction' => [
            'value' => 'direction',
            'text' => 'Направление задачи',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => 0,
                        'text' => 'Определяется типом задачи',
                    ],
                    1 => [
                        'id' => 1,
                        'text' => 'Работа с товарами Розетки',
                    ],
                    2 => [
                        'id' => 2,
                        'text' => 'Работа с товарами Маркетплейса',
                    ],
                ],
            ],
        ],
        'item.team_direction' => [
            'value' => 'team_direction',
            'text' => 'Направление команды',
            'filter' => [
                'type' => 'select',
                'multiple' => true,
                'items' => [
                    0 => [
                        'id' => 1,
                        'text' => 'Управление отделом',
                    ],
                    1 => [
                        'id' => 2,
                        'text' => 'Работа с товарами Маркетплейса',
                    ],
                    2 => [
                        'id' => 3,
                        'text' => 'Работа с товарами Rozetka',
                    ],
                    3 => [
                        'id' => 4,
                        'text' => 'Работа с группами',
                    ],
                    4 => [
                        'id' => 5,
                        'text' => 'Работа с проектированием структур + фильтрами',
                    ],
                    5 => [
                        'id' => 6,
                        'text' => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
            ],
        ],
        'item.category_id' => [
            'value' => 'category_id',
            'text' => 'Категория товаров',
            'filter' => [
                'type' => 'autocomplete',
                'url' => '/category/list?fields=id,title&parent&filter[title]=',
                'itemText' => 'title',
                'itemValue' => 'id',
            ],
        ],
        'item.rz_category_id' => [
            'value' => 'rz_category_id',
            'text' => 'Категория Rozetka',
            'filter' => [
                'type' => 'autocomplete',
                'url' => '/rozetka-category/list?fields=id,title&parent&filter[title]=',
                'itemText' => 'title',
                'itemValue' => 'id',
            ],
        ],
        'item.seller_id' => [
            'filter' => [
                'itemText' => 'title',
                'itemValue' => 'owox_id',
                'type' => 'autocomplete',
                'url' => '/market-supervisor/list?fields=owox_id,title&parent&filter[title]=',
            ],
            'value' => 'seller_id',
            'text' => 'Продавец',
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
                    'text' => 'Выполнена',
                    'value' => 9,
                ],
                'status' => [
                    'text' => 'Закрыта',
                    'value' => 11,
                ],
                'awaiting_correction' => 0,
                'id' => 25,
                'subject' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                    'value' => 8,
                ],
                'author_id' => [
                    'text' => 'Тим Лидович 1',
                    'value' => 15,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 18',
                    'value' => 38,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2А',
                    'value' => 13,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => 'Видео к товару',
                    'value' => 2,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Маркетплейс (общий)',
                    'value' => 0,
                ],
                'requestAttachments' => [
                ],
            ],
            1 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Выполнена',
                    'value' => 9,
                ],
                'status' => [
                    'text' => 'Закрыта',
                    'value' => 11,
                ],
                'awaiting_correction' => 0,
                'id' => 24,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    'value' => 7,
                ],
                'author_id' => [
                    'text' => 'Тим Лидович 2',
                    'value' => 16,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 15',
                    'value' => 35,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2Б',
                    'value' => 14,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'requestAttachments' => [
                ],
            ],
            2 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Частично выполнена',
                    'value' => 8,
                ],
                'status' => [
                    'text' => 'Закрыта',
                    'value' => 11,
                ],
                'awaiting_correction' => 0,
                'id' => 23,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление/изменение тегов',
                    'value' => 15,
                ],
                'author_id' => [
                    'text' => 'Менеджер Продактович 1',
                    'value' => 17,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 15',
                    'value' => 35,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2А',
                    'value' => 13,
                ],
                'cross_check_manager_id' => [
                    'text' => 'Менеджер Контентович 2Б',
                    'value' => 14,
                ],
                'cross_check_status' => [
                    'text' => 'Кросс-чек пройден',
                    'value' => 2,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Маркетплейс (общий)',
                    'value' => 0,
                ],
                'requestAttachments' => [
                ],
            ],
            3 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'В работе',
                    'value' => 6,
                ],
                'status' => [
                    'text' => 'Выполнена',
                    'value' => 9,
                ],
                'awaiting_correction' => 0,
                'id' => 22,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление/изменение видео',
                    'value' => 13,
                ],
                'author_id' => [
                    'text' => 'Менеджер Продактович 2',
                    'value' => 18,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 15',
                    'value' => 35,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2А',
                    'value' => 13,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => 'Видео к товару',
                    'value' => 2,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'anytech',
                    'value' => 9423,
                ],
                'requestAttachments' => [
                ],
            ],
            4 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'В работе',
                    'value' => 6,
                ],
                'status' => [
                    'text' => 'Выполнена',
                    'value' => 9,
                ],
                'awaiting_correction' => 0,
                'id' => 21,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление/изменение тегов',
                    'value' => 15,
                ],
                'author_id' => [
                    'text' => 'Менеджер Продактович 2',
                    'value' => 18,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 15',
                    'value' => 35,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 1А',
                    'value' => 11,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            5 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'В работе',
                    'value' => 6,
                ],
                'status' => [
                    'text' => 'Частично выполнена',
                    'value' => 8,
                ],
                'awaiting_correction' => 0,
                'id' => 20,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление/изменение видео',
                    'value' => 13,
                ],
                'author_id' => [
                    'text' => 'Тим Лидович 1',
                    'value' => 15,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 18',
                    'value' => 38,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 1Б',
                    'value' => 12,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            6 => [
                'parent_id' => 3,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'В работе',
                    'value' => 6,
                ],
                'status' => [
                    'text' => 'Ожидает',
                    'value' => 7,
                ],
                'awaiting_correction' => 0,
                'id' => 19,
                'subject' => 'Добавление/изменение размерной сетки (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление/изменение размерной сетки',
                    'value' => 14,
                ],
                'author_id' => [
                    'text' => 'Тим Лидович 2',
                    'value' => 16,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 18',
                    'value' => 38,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2Б',
                    'value' => 14,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'requestAttachments' => [
                ],
            ],
            7 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'В работе',
                    'value' => 6,
                ],
                'status' => [
                    'text' => 'Ожидает',
                    'value' => 7,
                ],
                'awaiting_correction' => 0,
                'id' => 18,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Изменение существующих параметров/значений',
                    'value' => 10,
                ],
                'author_id' => [
                    'text' => 'Сео Сеошевич 2',
                    'value' => 20,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Проектенко 17',
                    'value' => 37,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 1А',
                    'value' => 11,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с проектированием структур + фильтрами',
                    'value' => 5,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            8 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Ожидает взятия в работу',
                    'value' => 5,
                ],
                'status' => [
                    'text' => 'В работе',
                    'value' => 6,
                ],
                'awaiting_correction' => 0,
                'id' => 17,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Проектирование структуры',
                    'value' => 11,
                ],
                'author_id' => [
                    'text' => 'Тим Лидович 2',
                    'value' => 16,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Проектенко 17',
                    'value' => 37,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2Б',
                    'value' => 14,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с проектированием структур + фильтрами',
                    'value' => 5,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'requestAttachments' => [
                ],
            ],
            9 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Частично выполнена',
                    'value' => 8,
                ],
                'status' => [
                    'text' => 'В работе (ожидает исправлений)',
                    'value' => 6,
                ],
                'awaiting_correction' => 1,
                'id' => 16,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление параметров/значений',
                    'value' => 9,
                ],
                'author_id' => [
                    'text' => 'Сео Сеошевич 2',
                    'value' => 20,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Проектенко 14',
                    'value' => 34,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2Б',
                    'value' => 14,
                ],
                'cross_check_manager_id' => [
                    'text' => 'Менеджер Контентович 2А',
                    'value' => 13,
                ],
                'cross_check_status' => [
                    'text' => 'На кросс-чеке',
                    'value' => 1,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с проектированием структур + фильтрами',
                    'value' => 5,
                ],
                'category_id' => [
                    'text' => 'Видео к товару',
                    'value' => 2,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Маркетплейс (общий)',
                    'value' => 0,
                ],
                'requestAttachments' => [
                ],
            ],
            10 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Выполнена',
                    'value' => 9,
                ],
                'status' => [
                    'text' => 'В работе (ожидает исправлений)',
                    'value' => 6,
                ],
                'awaiting_correction' => 1,
                'id' => 15,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Добавление параметров/значений',
                    'value' => 9,
                ],
                'author_id' => [
                    'text' => 'Сео Сеошевич 1',
                    'value' => 19,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Проектенко 14',
                    'value' => 34,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 1Б',
                    'value' => 12,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с проектированием структур + фильтрами',
                    'value' => 5,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            11 => [
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
                'author_id' => [
                    'text' => 'Менеджер Продактович 1',
                    'value' => 17,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Начальникович 1',
                    'value' => 6,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2А',
                    'value' => 13,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Розетки',
                    'value' => 1,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Rozetka',
                    'value' => 3,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            12 => [
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
                'author_id' => [
                    'text' => 'Тим Лидович 1',
                    'value' => 15,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Начальникович 1',
                    'value' => 6,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 1Б',
                    'value' => 12,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Розетки',
                    'value' => 1,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Rozetka',
                    'value' => 3,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            13 => [
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
                'author_id' => [
                    'text' => 'Тим Лидович 1',
                    'value' => 15,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Категоркин 15',
                    'value' => 35,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 1А',
                    'value' => 11,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с порталами, фат-меню, категориями',
                    'value' => 6,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            14 => [
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
                'author_id' => [
                    'text' => 'Менеджер Продактович 1',
                    'value' => 17,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Проектенко 14',
                    'value' => 34,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 1Б',
                    'value' => 12,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с проектированием структур + фильтрами',
                    'value' => 5,
                ],
                'category_id' => [
                    'text' => 'Видео к товару',
                    'value' => 2,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'requestAttachments' => [
                ],
            ],
            15 => [
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
                'author_id' => [
                    'text' => 'Сео Сеошевич 1',
                    'value' => 19,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Проектенко 14',
                    'value' => 34,
                ],
                'manager_id' => [
                    'text' => 'Менеджер Контентович 2А',
                    'value' => 13,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с проектированием структур + фильтрами',
                    'value' => 5,
                ],
                'category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Маркетплейс (общий)',
                    'value' => 0,
                ],
                'requestAttachments' => [
                ],
            ],
            16 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Готова для распределения',
                    'value' => 2,
                ],
                'status' => [
                    'text' => 'На доработке',
                    'value' => 3,
                ],
                'awaiting_correction' => 0,
                'id' => 9,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'type_id' => [
                    'text' => 'Группировка товаров',
                    'value' => 4,
                ],
                'author_id' => [
                    'text' => 'Менеджер Продактович 1',
                    'value' => 17,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Групповушкин 13',
                    'value' => 33,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с группами',
                    'value' => 4,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => 'Аксессуары для алкоголя',
                    'value' => 753399,
                ],
                'seller_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'requestAttachments' => [
                ],
            ],
            17 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Готова для распределения',
                    'value' => 2,
                ],
                'status' => [
                    'text' => 'На доработке',
                    'value' => 3,
                ],
                'awaiting_correction' => 0,
                'id' => 8,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'type_id' => [
                    'text' => 'Добавление/изменение информации в существующих товарах',
                    'value' => 2,
                ],
                'author_id' => [
                    'text' => 'Тим Лидович 1',
                    'value' => 15,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Начальникович 2',
                    'value' => 10,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'anytech',
                    'value' => 9423,
                ],
                'requestAttachments' => [
                ],
            ],
            18 => [
                'parent_id' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => [
                    'text' => 'Новая',
                    'value' => 1,
                ],
                'status' => [
                    'text' => 'На доработке',
                    'value' => 3,
                ],
                'awaiting_correction' => 0,
                'id' => 7,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'type_id' => [
                    'text' => 'Заливка фото с фотостудии',
                    'value' => 5,
                ],
                'author_id' => [
                    'text' => 'Менеджер Фоткович 1',
                    'value' => 21,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Начальникович 1',
                    'value' => 6,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Розетки',
                    'value' => 1,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Rozetka',
                    'value' => 3,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Rozetka',
                    'value' => 5,
                ],
                'requestAttachments' => [
                ],
            ],
            19 => [
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
                'author_id' => [
                    'text' => 'Менеджер Продактович 1',
                    'value' => 17,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Руководько 1',
                    'value' => 5,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Маркетплейс (общий)',
                    'value' => 0,
                ],
                'requestAttachments' => [
                ],
            ],
            20 => [
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
                'author_id' => [
                    'text' => 'Менеджер Продактович 2',
                    'value' => 18,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Начальникович 1',
                    'value' => 6,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Розетки',
                    'value' => 1,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Rozetka',
                    'value' => 3,
                ],
                'category_id' => [
                    'text' => 'Авиабилеты',
                    'value' => 1,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Rozetka',
                    'value' => 5,
                ],
                'requestAttachments' => [
                ],
            ],
            21 => [
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
                'author_id' => [
                    'text' => 'Менеджер Продактович 1',
                    'value' => 17,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Начальникович 1',
                    'value' => 6,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Euromart',
                    'value' => 83,
                ],
                'requestAttachments' => [
                ],
            ],
            22 => [
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
                'author_id' => [
                    'text' => 'Менеджер Продактович 2',
                    'value' => 18,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Групповушкин 13',
                    'value' => 33,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Определяется типом задачи',
                    'value' => 0,
                ],
                'team_direction' => [
                    'text' => 'Работа с группами',
                    'value' => 4,
                ],
                'category_id' => [
                    'text' => 'Распределить категорию в Lisa',
                    'value' => 474,
                ],
                'rz_category_id' => [
                    'text' => 'Уцененные товары',
                    'value' => 83850,
                ],
                'seller_id' => [
                    'text' => 'Маркетплейс (общий)',
                    'value' => 0,
                ],
                'requestAttachments' => [
                ],
            ],
            23 => [
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
                'author_id' => [
                    'text' => 'Тим Лидович 2',
                    'value' => 16,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Руководько 1',
                    'value' => 5,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Маркетплейса',
                    'value' => 2,
                ],
                'category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'Маркетплейс (общий)',
                    'value' => 0,
                ],
                'requestAttachments' => [
                ],
            ],
            24 => [
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
                'author_id' => [
                    'text' => 'Тим Лидович 2',
                    'value' => 16,
                ],
                'supervisor_id' => [
                    'text' => 'Супервайзер Начальникович 2',
                    'value' => 10,
                ],
                'manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_manager_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'cross_check_status' => [
                    'text' => 'Не прошла кросс-чек',
                    'value' => 0,
                ],
                'direction' => [
                    'text' => 'Работа с товарами Розетки',
                    'value' => 1,
                ],
                'team_direction' => [
                    'text' => 'Работа с товарами Rozetka',
                    'value' => 3,
                ],
                'category_id' => [
                    'text' => 'Видео к товару',
                    'value' => 2,
                ],
                'rz_category_id' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'seller_id' => [
                    'text' => 'anytech',
                    'value' => 9423,
                ],
                'requestAttachments' => [
                ],
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa-api.docker/request/list/all?per-page=50&page=1',
            ],
            'first' => [
                'href' => 'http://lisa-api.docker/request/list/all?per-page=50&page=1',
            ],
            'last' => [
                'href' => 'http://lisa-api.docker/request/list/all?per-page=50&page=1',
            ],
        ],
        '_meta' => [
            'totalCount' => 25,
            'pageCount' => 1,
            'currentPage' => 1,
            'perPage' => 50,
        ],
    ],
];