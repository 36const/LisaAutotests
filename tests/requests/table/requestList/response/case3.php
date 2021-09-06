<?php

use lisa\UsersTester;

return [
    'tabsData' => UsersTester::tableMassButtons(3),
    'currentTab' => 'require-changes',
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
                        'id' => 1,
                        'text' => 'Информация необходима для склада',
                    ],
                    1 => [
                        'id' => 3,
                        'text' => 'Исправление критичной ошибки',
                    ],
                    2 => [
                        'id' => 2,
                        'text' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                    3 => [
                        'id' => -1,
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
                        'id' => 10,
                        'text' => 'Все товары уже есть на сайте (Отменена)',
                    ],
                    1 => [
                        'id' => 11,
                        'text' => 'Другое (описан в коментариях) (Все)',
                    ],
                    2 => [
                        'id' => 9,
                        'text' => 'Дубль задачи (Отменена)',
                    ],
                    3 => [
                        'id' => 3,
                        'text' => 'Изменен приоритет задачи (Ожидает)',
                    ],
                    4 => [
                        'id' => 13,
                        'text' => 'Нада (На доработке)',
                    ],
                    5 => [
                        'id' => 6,
                        'text' => 'Не получена запрошенная недостающая информация (Частично выполнена)',
                    ],
                    6 => [
                        'id' => 12,
                        'text' => 'Нинада (На доработке)',
                    ],
                    7 => [
                        'id' => 14,
                        'text' => 'Ожидает группировки (Ожидает)',
                    ],
                    8 => [
                        'id' => 5,
                        'text' => 'Ожидается загрузка обновлений в систему (Ожидает)',
                    ],
                    9 => [
                        'id' => 4,
                        'text' => 'Ожидается загрузка товаров в систему (Ожидает)',
                    ],
                    10 => [
                        'id' => 1,
                        'text' => 'Ожидается загрузка фото в товары (Ожидает)',
                    ],
                    11 => [
                        'id' => 15,
                        'text' => 'Товары на модерации (Ожидает)',
                    ],
                    12 => [
                        'id' => 7,
                        'text' => 'Товары ушли в ошибки (Частично выполнена)',
                    ],
                    13 => [
                        'id' => 2,
                        'text' => 'Требуется уточнение информации по задаче (Ожидает)',
                    ],
                    14 => [
                        'id' => 8,
                        'text' => 'Часть товаров ушла в ошибки (Частично выполнена)',
                    ],
                    15 => [
                        'id' => -1,
                        'text' => '(не задано)',
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
                'recommendations' => '',
                'correction_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО
http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:\'\',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\'6\',w:24,x:24,y:30),id:\'7ba18f80-2238-11ea-a052-1d55fc41757c\',panelIndex:\'6\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'7\',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\'7\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'8\',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\'8\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'9\',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\'9\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'10\',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\'10\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'11\',w:24,x:24,y:45),id:\'1e605320-2287-11ea-825a-395acaa4d6c3\',panelIndex:\'11\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'12\',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\'12\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'13\',w:24,x:24,y:15),id:\'36fe2110-24bb-11ea-a052-1d55fc41757c\',panelIndex:\'13\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'14\',w:24,x:0,y:30),id:\'6f8eba80-24ca-11ea-825a-395acaa4d6c3\',panelIndex:\'14\',type:visualization,version:\'6.4.2\')),query:(language:kuery,query:\'\'),timeRestore:!t,title:\'Goods%20Experimental%20Copy\',viewMode:view)',
                'priority' => [
                    'text' => NULL,
                    'value' => NULL,
                ],
                'requestAttachments' => [
                ],
                'reasons' => [
                    'text' => 'Другое (описан в коментариях) | Нада',
                    'value' => [
                        0 => 11,
                        1 => 13,
                    ],
                ],
            ],
            1 => [
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
                'recommendations' => 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyzабвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyz',
                'correction_comment' => '',
                'priority' => [
                    'text' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    'value' => 2,
                ],
                'requestAttachments' => [
                ],
                'reasons' => [
                    'text' => 'Нада | Нинада',
                    'value' => [
                        0 => 12,
                        1 => 13,
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
                'recommendations' => NULL,
                'correction_comment' => NULL,
                'priority' => [
                    'text' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    'value' => 2,
                ],
                'requestAttachments' => [
                ],
                'reasons' => [
                    'text' => 'Другое (описан в коментариях)',
                    'value' => [
                        0 => 11,
                    ],
                ],
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