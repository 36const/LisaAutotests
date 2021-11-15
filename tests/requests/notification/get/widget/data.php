<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Открытие виджета нотификаций с непрочитанными сообщениями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'models' => [
                    2 => [
                        'id' => 11,
                        'text' => 'Менеджер Продактович 1 <b>оставил(а) комментарий к заявке</b> <a href="http://admin.splitter.docker/lisa/#/request/view/2?notifyId=11">№2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a>',
                        'amountToWork' => 10,
                        'priority' => 'Исправление критичной ошибки',
                    ],
                    1 => [
                        'id' => 9,
                        'text' => 'Менеджер Продактович 1 <b>перевел(а) заявку</b> <a href="http://admin.splitter.docker/lisa/#/request/view/2?notifyId=9">№2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a> в статус "<b>Частично выполнена</b>"',
                        'amountToWork' => 10,
                        'priority' => '',
                    ],
                    0 => [
                        'id' => 5,
                        'text' => 'Менеджер Продактович 1 <b>перевел(а) заявку</b> <a href="http://admin.splitter.docker/lisa/#/request/view/1?notifyId=5">№1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a> в статус "<b>Готова для распределения</b>"',
                        'amountToWork' => 10,
                        'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                ],
                'totalCount' => 3,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['notification_settings'],
                    'user_notifications' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_notifications'],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Открытие виджета нотификаций без сообщений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'responseBody' => [
                'models' => [],
                'totalCount' => 0,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['notification_settings'],
                    'user_notifications' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['user_notifications'],
                ]
            ]
        ]
    ],

];
