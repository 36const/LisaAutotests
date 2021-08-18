<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Пустая страница фильтров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/filter/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 0,
                        'pageCount' => 0,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Пустая страница фильтров с сортировкой и фильтром по названию ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => 'name',
                'filter[name]' => 'qwer1234',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/filter/list?sort=name&filter%5Bname%5D=qwer1234&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 0,
                        'pageCount' => 0,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'name' => 'qwer1234',
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница с фильтрами без сортировки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'user_id' => 4,
                            'name' => 'Фильтр1',
                            'conditions' => 'Номер задачи | Статус | Заголовок | Тип | Приоритет | Автор | Направление задачи | ID связанной задачи | Продавец | Дата регистрации задачи в системе | Контент-менеджер | Категория товаров | Описание | Супервайзер | Количество в работу | Комментарий к результату задачи | Направление команды | Рекомендации | Отчетный период КМ | Фактическая дата начала работ | Отчетные периоды СВ | Фактическая дата завершения | Комментарий на исправление | Плановая дата начала работ | Комментарий супервайзера | На исправление | Плановая дата завершения | Дата последнего изменения статуса | Дата обработки задачи супервайзером | Ручная загрузка | Пакетная загрузка | Виза супервайзера | С фотосъемкой | Стоп-бренды | Точки входа | Добавление графики | С размерной сеткой | С тегами к товарам | Уценка | Уценка 2 | На основе отзыва клиента на сайте | Жалоба на товар продавца маркета | Промо-описание | С видео | Лоты | БУ, REF | Добавление товаров в новую категорию | С палитрой | Уровень сложности задачи | Наличие характеристик к товарам | Наличие фото к товарам | Наличие описаний к товарам | Обработка фото',
                        ],
                        1 => [
                            'id' => 2,
                            'user_id' => 4,
                            'name' => 'Фильтр2',
                            'conditions' => 'Автор | Контент-менеджер | Супервайзер | Отчетный период КМ | Статус загрузки фото | Отчетные периоды СВ | Фактическая дата завершения | Комментарий на исправление | Кросс-чек статус | Комментарий супервайзера | На исправление | Дата проверки задачи супервайзером | Дата последнего изменения статуса | Дата обработки задачи супервайзером | Ручная загрузка | Пакетная загрузка | Виза супервайзера | С фотосъемкой | Стоп-бренды | Точки входа | Добавление графики | С размерной сеткой | С тегами к товарам',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/filter/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/filter/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/filter/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 2,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница с фильтрами с обратной сортировкой по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[name]' => '2',
                'sort' => '-name',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 2,
                            'user_id' => 4,
                            'name' => 'Фильтр2',
                            'conditions' => 'Автор | Контент-менеджер | Супервайзер | Отчетный период КМ | Статус загрузки фото | Отчетные периоды СВ | Фактическая дата завершения | Комментарий на исправление | Кросс-чек статус | Комментарий супервайзера | На исправление | Дата проверки задачи супервайзером | Дата последнего изменения статуса | Дата обработки задачи супервайзером | Ручная загрузка | Пакетная загрузка | Виза супервайзера | С фотосъемкой | Стоп-бренды | Точки входа | Добавление графики | С размерной сеткой | С тегами к товарам',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/filter/list?filter%5Bname%5D=2&sort=-name&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/filter/list?filter%5Bname%5D=2&sort=-name&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/filter/list?filter%5Bname%5D=2&sort=-name&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 1,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'name' => '2',
                ],
            ],
        ]
    ],
    
];