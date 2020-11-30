<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница нотификаций',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Страница нотификаций с сортировкой по номеру заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=request_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница нотификаций с сортировкой по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница нотификаций с обратной сортировкой по дате',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-created_at',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница нотификаций с сортировкой по приоритету',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=priority',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Страница нотификаций с фильтром по номеру заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=1&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=&NotificationSearch[priority]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Страница нотификаций с фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=&NotificationSearch[notification]=&NotificationSearch[status]=1&created_at=&NotificationSearch[priority]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "2" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Страница нотификаций с фильтром по дате',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=2020-06-03+14%3A00%3A00to2020-06-03+14%3A10%3A00&NotificationSearch[priority]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Страница нотификаций с фильтром по приоритету',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=&NotificationSearch[priority]=3',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "2" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Страница нотификаций с фильтром по номеру заявки > 999 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=9999999999&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=&NotificationSearch[priority]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «Номер заявки» не должно превышать 999999999."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Страница нотификаций с нечисловым фильтром по номеру заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=%3D~%7D%21%40%23%24%25%5E%26*%28%29_%2B%60-]%27%2F[%3B.%2C%7D"%3F%7B%3A>%5C%7C&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=&NotificationSearch[priority]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «Номер заявки» должно быть целым числом."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Номер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Текст нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата нотификации"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-06-03 14:14:37"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-06-03 14:11:08"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Не прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-06-03 14:09:53"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Прочитано"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-06-03 14:07:22"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Страница нотификаций с несуществующим фильтром по номеру заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=999&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=&NotificationSearch[priority]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                    "2" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Страница нотификаций с несуществующим фильтром по дате',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=2020-06-04+00%3A00%3A00to2020-06-04+23%3A59%3A00&NotificationSearch[priority]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                    "2" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case19' => [
        'setting' => [
            'description' => 'Страница нотификаций с несуществующим фильтром по приоритету',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?NotificationSearch[request_id]=&NotificationSearch[notification]=&NotificationSearch[status]=&created_at=&NotificationSearch[priority]=1',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                    "2" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 перевел(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО в статус "Готова для распределения"'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=5']",
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 создал(а) заявку №1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=1']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 упомянул(а) вас в заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=9']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'Менеджер Продактович 1 оставил(а) комментарий к заявке №2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО'
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/notification/toggle-status?id=11']",
                        ],
                    ],
                ]
            ]
        ]
    ],

];
