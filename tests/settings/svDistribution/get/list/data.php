<?php

use lisa\Constants;

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить все правила автораспределения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'request_direction' => 1,
                            'request_type_ids' => '[]',
                            'field_ids' => '[]',
                            'seller_ids' => '[]',
                            'user_positions' => '[]',
                            'added_users' => '[]',
                            'removed_users' => '[]',
                            'lisa_category_ids' => '[]',
                            'rz_category_ids' => '[]',
                            'author_id' => NULL,
                            'team_ids' => '[]',
                            'status' => 1,
                            'is_system_rule' => true,
                            'distribute_by' => 2,
                            'weight' => 1,
                            'select_order' => NULL,
                            'statuses_for_order' => '[]',
                            'observers' => '[]',
                            'observer_names' => '',
                            'author_name' => NULL,
                            'added_users_names' => '',
                            'distribute_by_name' => 'справочнику категорий Lisa',
                            'request_type_names' => '',
                            'field_names' => '',
                            'seller_names' => '',
                            'lisa_cat_names' => '',
                            'rz_cat_names' => '',
                            'request_direction_name' => 'Работа с товарами Розетки',
                        ],
                        1 => [
                            'id' => 2,
                            'request_direction' => 2,
                            'request_type_ids' => '[]',
                            'field_ids' => '[]',
                            'seller_ids' => '[]',
                            'user_positions' => '[]',
                            'added_users' => '[]',
                            'removed_users' => '[]',
                            'lisa_category_ids' => '[]',
                            'rz_category_ids' => '[]',
                            'author_id' => NULL,
                            'team_ids' => '[]',
                            'status' => 1,
                            'is_system_rule' => true,
                            'distribute_by' => 1,
                            'weight' => 1,
                            'select_order' => NULL,
                            'statuses_for_order' => '[]',
                            'observers' => '[]',
                            'observer_names' => '',
                            'author_name' => NULL,
                            'added_users_names' => '',
                            'distribute_by_name' => 'справочнику продавцов',
                            'request_type_names' => '',
                            'field_names' => '',
                            'seller_names' => '',
                            'lisa_cat_names' => '',
                            'rz_cat_names' => '',
                            'request_direction_name' => 'Работа с товарами Маркетплейса',
                        ],
                        2 => [
                            'id' => 3,
                            'request_direction' => 0,
                            'request_type_ids' => '["4"]',
                            'field_ids' => '[]',
                            'seller_ids' => '[]',
                            'user_positions' => '["supervisor"]',
                            'added_users' => '[]',
                            'removed_users' => '[]',
                            'lisa_category_ids' => '[]',
                            'rz_category_ids' => '[]',
                            'author_id' => NULL,
                            'team_ids' => '["14"]',
                            'status' => 1,
                            'is_system_rule' => true,
                            'distribute_by' => 4,
                            'weight' => 1,
                            'select_order' => 0,
                            'statuses_for_order' => '["2", "7", "1", "9", "8"]',
                            'observers' => '[]',
                            'observer_names' => '',
                            'author_name' => NULL,
                            'added_users_names' => '',
                            'distribute_by_name' => 'пользователям',
                            'request_type_names' => 'Группировка товаров',
                            'field_names' => '',
                            'seller_names' => '',
                            'lisa_cat_names' => '',
                            'rz_cat_names' => '',
                            'request_direction_name' => 'Определяется типом задачи',
                        ],
                        3 => [
                            'id' => 4,
                            'request_direction' => 0,
                            'request_type_ids' => '["7", "8", "13", "14", "15"]',
                            'field_ids' => '[]',
                            'seller_ids' => '[]',
                            'user_positions' => '["supervisor"]',
                            'added_users' => '[]',
                            'removed_users' => '[]',
                            'lisa_category_ids' => '[]',
                            'rz_category_ids' => '[]',
                            'author_id' => NULL,
                            'team_ids' => '["16"]',
                            'status' => 1,
                            'is_system_rule' => true,
                            'distribute_by' => 4,
                            'weight' => 1,
                            'select_order' => 0,
                            'statuses_for_order' => '["2", "7", "1", "9", "8"]',
                            'observers' => '[]',
                            'observer_names' => '',
                            'author_name' => NULL,
                            'added_users_names' => '',
                            'distribute_by_name' => 'пользователям',
                            'request_type_names' => 'Добавление нового портала/раздела фат-меню/категории товаров | Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров | Добавление/изменение видео | Добавление/изменение размерной сетки | Добавление/изменение тегов',
                            'field_names' => '',
                            'seller_names' => '',
                            'lisa_cat_names' => '',
                            'rz_cat_names' => '',
                            'request_direction_name' => 'Определяется типом задачи',
                        ],
                        4 => [
                            'id' => 5,
                            'request_direction' => 0,
                            'request_type_ids' => '["9", "10", "11"]',
                            'field_ids' => '[]',
                            'seller_ids' => '[]',
                            'user_positions' => '["supervisor"]',
                            'added_users' => '[]',
                            'removed_users' => '[]',
                            'lisa_category_ids' => '[]',
                            'rz_category_ids' => '[]',
                            'author_id' => NULL,
                            'team_ids' => '["15", "19"]',
                            'status' => 1,
                            'is_system_rule' => true,
                            'distribute_by' => 4,
                            'weight' => 1,
                            'select_order' => 0,
                            'statuses_for_order' => '["2", "7", "1", "9", "8"]',
                            'observers' => '[]',
                            'observer_names' => '',
                            'author_name' => NULL,
                            'added_users_names' => '',
                            'distribute_by_name' => 'пользователям',
                            'request_type_names' => 'Добавление параметров/значений | Изменение существующих параметров/значений | Проектирование структуры',
                            'field_names' => '',
                            'seller_names' => '',
                            'lisa_cat_names' => '',
                            'rz_cat_names' => '',
                            'request_direction_name' => 'Определяется типом задачи',
                        ],
                        5 => [
                            'id' => 6,
                            'request_direction' => 0,
                            'request_type_ids' => '["4"]',
                            'field_ids' => '[]',
                            'seller_ids' => '[]',
                            'user_positions' => '[]',
                            'added_users' => '[]',
                            'removed_users' => '[]',
                            'lisa_category_ids' => '[]',
                            'rz_category_ids' => '[]',
                            'author_id' => NULL,
                            'team_ids' => '[]',
                            'status' => 0,
                            'is_system_rule' => false,
                            'distribute_by' => 3,
                            'weight' => 3,
                            'select_order' => NULL,
                            'statuses_for_order' => '[]',
                            'observers' => '[]',
                            'observer_names' => '',
                            'author_name' => NULL,
                            'added_users_names' => '',
                            'distribute_by_name' => 'справочнику категорий Rozetka',
                            'request_type_names' => 'Группировка товаров',
                            'field_names' => '',
                            'seller_names' => '',
                            'lisa_cat_names' => '',
                            'rz_cat_names' => '',
                            'request_direction_name' => 'Определяется типом задачи',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/sv-distribution/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/sv-distribution/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/sv-distribution/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 6,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => [
                    'directions' => [
                        0 => 'Определяется типом задачи',
                        1 => 'Работа с товарами Розетки',
                        2 => 'Работа с товарами Маркетплейса',
                    ],
                    'types' => Constants::TYPES,
                    'checkBoxes' => [
                        1 => 'Ручная загрузка',
                        2 => 'Пакетная загрузка',
                        3 => 'Виза супервайзера',
                        4 => 'С фотосъемкой',
                        6 => 'Точки входа',
                        7 => 'Добавление графики',
                        8 => 'С размерной сеткой',
                        9 => 'С тегами к товарам',
                        10 => 'Уценка',
                        11 => 'Уценка 2',
                        12 => 'На основе отзыва клиента на сайте',
                        13 => 'Жалоба на товар продавца маркета',
                        14 => 'Промо-описание',
                        15 => 'С видео',
                        16 => 'Лоты',
                        17 => 'БУ, REF',
                        18 => 'Добавление товаров в новую категорию',
                        19 => 'С палитрой',
                        123 => 'Обновление фото',
                        124 => 'Обновление описания',
                        125 => 'Обновление характеристик',
                        126 => 'Добавление/обновление инструкций',
                        5 => 'Стоп-бренды',
                        127 => 'Автомодерация',
                        159 => 'По заявке с MobileCourier',
                        160 => 'Укр. поля',
                        169 => 'Алгоритм',
                    ],
                    'distributeBy' => [
                        1 => 'справочнику продавцов',
                        2 => 'справочнику категорий Lisa',
                        3 => 'справочнику категорий Rozetka',
                        4 => 'пользователям',
                    ],
                    'sellers' => [
                        0 => [
                            'owox_id' => 9423,
                            'title' => 'anytech',
                        ],
                        1 => [
                            'owox_id' => 67757,
                            'title' => 'iTook',
                        ],
                        2 => [
                            'owox_id' => 83,
                            'title' => 'Euromart',
                        ],
                        3 => [
                            'owox_id' => 5,
                            'title' => 'Rozetka',
                        ],
                        4 => [
                            'owox_id' => 72141,
                            'title' => 'Rozetka.md',
                        ],
                        5 => [
                            'owox_id' => 128603,
                            'title' => 'RozetkaEU',
                        ],
                        6 => [
                            'owox_id' => 124276,
                            'title' => 'Rozetka.uz',
                        ],
                        7 => [
                            'owox_id' => -2,
                            'title' => 'Все продавцы',
                        ],
                    ],
                    'teams' => [
                        1 => 'Маркетплейс 1',
                        2 => 'Маркетплейс 2',
                        3 => 'Маркетплейс 3',
                        4 => 'Маркетплейс 4',
                        5 => 'Маркетплейс 5',
                        7 => 'Маркетплейс Freelance',
                        8 => 'Fashion',
                        9 => 'FMCG, Косметика и парфюмерия',
                        10 => 'IT, Аксесуари, Уценка',
                        11 => 'Бытовая техника, сантехника',
                        13 => 'Rozetka Freelance',
                        14 => 'Группировка товаров',
                        15 => 'Проектирование структур категорий + фильтры',
                        16 => 'Изменения в категориях',
                        17 => 'Административная команда',
                        18 => 'Маркетплейс (инициаторы)',
                        19 => 'SEO-отдел',
                        20 => 'Фотостудия',
                        21 => 'Маркетинг',
                    ],
                ],
            ],
        ]
    ],

];
