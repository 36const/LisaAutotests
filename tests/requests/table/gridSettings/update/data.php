<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Сбросить все установленные колонки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'grid_settings_4eb368f0862999c8fa0bbef8506b11e2a',
            ],
            'requestBody' => [],
            'responseBody' => [
                'id' => 1,
                'user_id' => 4,
                'columns_list' => '[]',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '[]'
                        ]
                    ]
                ]
            ]
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Установить колонки набора 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'grid_settings_4eb368f0862999c8fa0bbef8506b11e2a',
            ],
            'requestBody' => [
                [
                    'label' => 'Создатель заявки',
                    'column' => 'author_id',
                ],
                [
                    'label' => 'Супервайзер заявки',
                    'column' => 'supervisor_id',
                ],
                [
                    'label' => 'Менеджер заявки',
                    'column' => 'manager_id',
                ],
                [
                    'label' => 'Статус',
                    'column' => 'status',
                ],
                [
                    'label' => 'Предыдущий статус',
                    'column' => 'previous_status',
                ],
                [
                    'label' => 'Кросс-чек менеджер',
                    'column' => 'cross_check_manager_id',
                ],
                [
                    'label' => 'Кросс-чек статус',
                    'column' => 'cross_check_status',
                ],
                [
                    'label' => 'Направление задачи',
                    'column' => 'direction',
                ],
                [
                    'label' => 'Направление команды',
                    'column' => 'team_direction',
                ],
                [
                    'label' => 'Категория товаров',
                    'column' => 'category_id',
                ],
                [
                    'label' => 'Продавец',
                    'column' => 'seller_id',
                ],
                [
                    'label' => 'Ручная загрузка',
                    'column' => 'hand_load',
                ],
                [
                    'label' => 'Пакетная загрузка',
                    'column' => 'pack_load',
                ],
                [
                    'label' => 'Виза супервайзера',
                    'column' => 'visa',
                ],
                [
                    'label' => 'С фотосъемкой',
                    'column' => 'with_photo',
                ],
                [
                    'label' => 'Точки входа',
                    'column' => 'enter_points',
                ],
                [
                    'label' => 'Добавление графики',
                    'column' => 'adding_graphics',
                ],
                [
                    'label' => 'С размерной сеткой',
                    'column' => 'with_grid',
                ],
                [
                    'label' => 'С тегами к товарам',
                    'column' => 'with_tags',
                ],
                [
                    'label' => 'Уценка',
                    'column' => 'markdown',
                ],
            ],
            'responseBody' => [
                'user_id' => 4,
                'columns_list' => '["author_id","supervisor_id","manager_id","status","previous_status","cross_check_manager_id","cross_check_status","direction","team_direction","category_id","seller_id","hand_load","pack_load","visa","with_photo","enter_points","adding_graphics","with_grid","with_tags","markdown"]',
                'id' => 1,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '["author_id", "supervisor_id", "manager_id", "status", "previous_status", "cross_check_manager_id", "cross_check_status", "direction", "team_direction", "category_id", "seller_id", "hand_load", "pack_load", "visa", "with_photo", "enter_points", "adding_graphics", "with_grid", "with_tags", "markdown"]'
                        ]
                    ]
                ]
            ]
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Установить колонки набора 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'grid_settings_4eb368f0862999c8fa0bbef8506b11e2a',
            ],
            'requestBody' => [
                [
                    'label' => 'Уценка 2',
                    'column' => 'markdown_2',
                ],
                [
                    'label' => 'На основе отзыва клиента на сайте',
                    'column' => 'by_client_review',
                ],
                [
                    'label' => 'Жалоба на товар продавца маркета',
                    'column' => 'complaint_for_good',
                ],
                [
                    'label' => 'Промо-описание',
                    'column' => 'promo_desc',
                ],
                [
                    'label' => 'Добавление товаров в новую категорию',
                    'column' => 'adding_goods_to_new_category',
                ],
                [
                    'label' => 'БУ, REF',
                    'column' => 'used_ref',
                ],
                [
                    'label' => 'Обновление фото',
                    'column' => 'updating_photos',
                ],
                [
                    'label' => 'Обновление описания',
                    'column' => 'updating_description',
                ],
                [
                    'label' => 'Обновление характеристик',
                    'column' => 'updating_characteristics',
                ],
                [
                    'label' => 'Автомодерация',
                    'column' => 'automoderation',
                ],
                [
                    'label' => 'Добавление/обновление инструкций',
                    'column' => 'adding_instructions',
                ],
                [
                    'label' => 'Стоп-бренды',
                    'column' => 'stop_brands',
                ],
                [
                    'label' => 'С палитрой',
                    'column' => 'with_pallets',
                ],
                [
                    'label' => 'Лоты',
                    'column' => 'lots',
                ],
                [
                    'label' => 'С видео',
                    'column' => 'with_photo',
                ],
                [
                    'label' => 'По заявке с MobileCourier',
                    'column' => 'mobile_courier',
                ],
                [
                    'label' => 'Укр. поля',
                    'column' => 'ua_fields',
                ],
                [
                    'label' => 'Алгоритм',
                    'column' => 'algorithm',
                ],
                [
                    'label' => 'Рекомендации',
                    'column' => 'recommendations',
                ],
                [
                    'label' => 'Комментарий на исправление',
                    'column' => 'correction_comment',
                ],
            ],
            'responseBody' => [
                'user_id' => 4,
                'columns_list' => '["markdown_2","by_client_review","complaint_for_good","promo_desc","adding_goods_to_new_category","used_ref","updating_photos","updating_description","updating_characteristics","automoderation","adding_instructions","stop_brands","with_pallets","lots","with_photo","mobile_courier","ua_fields","algorithm","recommendations","correction_comment"]',
                'id' => 1,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '["markdown_2", "by_client_review", "complaint_for_good", "promo_desc", "adding_goods_to_new_category", "used_ref", "updating_photos", "updating_description", "updating_characteristics", "automoderation", "adding_instructions", "stop_brands", "with_pallets", "lots", "with_photo", "mobile_courier", "ua_fields", "algorithm", "recommendations", "correction_comment"]'
                        ]
                    ]
                ]
            ]
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Установить колонки набора 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'grid_settings_4eb368f0862999c8fa0bbef8506b11e2a',
            ],
            'requestBody' => [
                [
                    'label' => 'Приоритет',
                    'column' => 'priority',
                ],
                [
                    'label' => 'Причина',
                    'column' => 'reasons',
                ],
                [
                    'label' => 'Количество в работу',
                    'column' => 'amount_to_work',
                ],
                [
                    'label' => 'Уровень сложности задачи',
                    'column' => 'difficulty_level',
                ],
                [
                    'label' => 'Причина отмены/доработки',
                    'column' => 'reason',
                ],
                [
                    'label' => 'Количество товаров, которые уже есть в БД',
                    'column' => 'goods_in_db',
                ],
                [
                    'label' => 'Дата последнего изменения статуса',
                    'column' => 'last_change_status_date',
                ],
                [
                    'label' => 'Дата регистрации задачи в системе',
                    'column' => 'created_at',
                ],
                [
                    'label' => 'Плановая дата начала работ',
                    'column' => 'planned_start_date',
                ],
                [
                    'label' => 'Плановая дата завершения',
                    'column' => 'planned_finish_date',
                ],
                [
                    'label' => 'Количество обработанных, но не сгруппированных товаров',
                    'column' => 'quantity_of_handled_but_not_grouped',
                ],
                [
                    'label' => 'Количество настроек групп (управление группами)',
                    'column' => 'group_settings',
                ],
                [
                    'label' => 'Количество слов в словарях',
                    'column' => 'quantity_of_words_in_dictionaries',
                ],
                [
                    'label' => 'Общее рассчитанное количество показателей',
                    'column' => 'calc_quantity_of_indicators',
                ],
                [
                    'label' => 'Рассчитанное количество не сгруппированных товаров',
                    'column' => 'calc_quantity_of_not_grouped',
                ],
                [
                    'label' => 'Рассчитанное количество отправленных писем',
                    'column' => 'calc_quantity_of_sent_emails',
                ],
                [
                    'label' => 'Рассчитанное количество созданных подзадач',
                    'column' => 'calc_quantity_of_child_requests',
                ],
                [
                    'label' => 'Рассчитанное количество слов в словарях',
                    'column' => 'calc_quantity_of_words_in_dictionaries',
                ],
                [
                    'label' => 'Среднее количество товаров в группе',
                    'column' => 'average_amount_of_goods_in_group',
                ],
                [
                    'label' => 'ID связанной задачи',
                    'column' => 'parent_id',
                ],
            ],
            'responseBody' => [
                'user_id' => 4,
                'columns_list' => '["priority","reasons","amount_to_work","difficulty_level","reason","goods_in_db","last_change_status_date","created_at","planned_start_date","planned_finish_date","quantity_of_handled_but_not_grouped","group_settings","quantity_of_words_in_dictionaries","calc_quantity_of_indicators","calc_quantity_of_not_grouped","calc_quantity_of_sent_emails","calc_quantity_of_child_requests","calc_quantity_of_words_in_dictionaries","average_amount_of_goods_in_group","parent_id"]',
                'id' => 1,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '["priority", "reasons", "amount_to_work", "difficulty_level", "reason", "goods_in_db", "last_change_status_date", "created_at", "planned_start_date", "planned_finish_date", "quantity_of_handled_but_not_grouped", "group_settings", "quantity_of_words_in_dictionaries", "calc_quantity_of_indicators", "calc_quantity_of_not_grouped", "calc_quantity_of_sent_emails", "calc_quantity_of_child_requests", "calc_quantity_of_words_in_dictionaries", "average_amount_of_goods_in_group", "parent_id"]'
                        ]
                    ]
                ]
            ]
        ],
    ],

    'case5' => [
        'setting' => [
            'description' => 'Установить колонки набора 4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'grid_settings_4eb368f0862999c8fa0bbef8506b11e2a',
            ],
            'requestBody' => [
                [
                    'label' => 'На исправление',
                    'column' => 'awaiting_correction',
                ],
                [
                    'label' => 'Уточнения. Количество уточнений у автора.',
                    'column' => 'author_clarifications',
                ],
                [
                    'label' => 'Наличие фото к товарам',
                    'column' => 'photos_available',
                ],
                [
                    'label' => 'Наличие характеристик к товарам',
                    'column' => 'characteristics_available',
                ],
                [
                    'label' => 'Наличие описаний к товарам',
                    'column' => 'description_available',
                ],
                [
                    'label' => 'Язык информации',
                    'column' => 'language',
                ],
                [
                    'label' => 'Описание',
                    'column' => 'description',
                ],
                [
                    'label' => 'Количество добавленных товаров',
                    'column' => 'added_goods',
                ],
                [
                    'label' => 'Количество измененных товаров',
                    'column' => 'changed_goods',
                ],
                [
                    'label' => 'Фактическая дата начала работ',
                    'column' => 'actual_start_date',
                ],
                [
                    'label' => 'Фактическая дата завершения',
                    'column' => 'actual_finish_date',
                ],
                [
                    'label' => 'Дата обработки задачи супервайзером',
                    'column' => 'supervisor_process_date',
                ],
                [
                    'label' => 'Дата проверки задачи супервайзером',
                    'column' => 'supervisor_check_date',
                ],
                [
                    'label' => 'Отчетный период КМ',
                    'column' => 'report_period_id',
                ],
                [
                    'label' => 'Отчетные периоды СВ',
                    'column' => 'sv_report_periods',
                ],
                [
                    'label' => 'Комментарий к результату задачи',
                    'column' => 'reasons',
                ],
                [
                    'label' => 'Рассчитанное количество проверенных товаров',
                    'column' => 'calc_quantity_of_checked_goods',
                ],
                [
                    'label' => 'Рассчитанное количество проверенных товаров с ошибками',
                    'column' => 'calc_quantity_of_checked_goods_with_errors',
                ],
                [
                    'label' => 'Рассчитанное количество проверенных товаров кросс-чек',
                    'column' => 'calc_quantity_of_checked_goods_cc',
                ],
                [
                    'label' => 'Рассчитанное количество проверенных товаров с ошибками кросс-чек',
                    'column' => 'calc_quantity_of_checked_goods_with_errors_cc',
                ],
            ],
            'responseBody' => [
                'user_id' => 4,
                'columns_list' => '["awaiting_correction","author_clarifications","photos_available","characteristics_available","description_available","language","description","added_goods","changed_goods","actual_start_date","actual_finish_date","supervisor_process_date","supervisor_check_date","report_period_id","sv_report_periods","reasons","calc_quantity_of_checked_goods","calc_quantity_of_checked_goods_with_errors","calc_quantity_of_checked_goods_cc","calc_quantity_of_checked_goods_with_errors_cc"]',
                'id' => 1,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '["awaiting_correction", "author_clarifications", "photos_available", "characteristics_available", "description_available", "language", "description", "added_goods", "changed_goods", "actual_start_date", "actual_finish_date", "supervisor_process_date", "supervisor_check_date", "report_period_id", "sv_report_periods", "reasons", "calc_quantity_of_checked_goods", "calc_quantity_of_checked_goods_with_errors", "calc_quantity_of_checked_goods_cc", "calc_quantity_of_checked_goods_with_errors_cc"]'
                        ]
                    ]
                ]
            ]
        ],
    ],

    'case6' => [
        'setting' => [
            'description' => 'Изменить только порядок колонок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'grid_settings_4eb368f0862999c8fa0bbef8506b11e2a',
            ],
            'requestBody' => [
                [
                    'label' => 'Направление задачи',
                    'column' => 'direction',
                ],
                [
                    'label' => 'Направление команды',
                    'column' => 'team_direction',
                ],
                [
                    'label' => 'Категория товаров',
                    'column' => 'category_id',
                ],
                [
                    'label' => 'Менеджер заявки',
                    'column' => 'manager_id',
                ],
                [
                    'label' => 'Статус',
                    'column' => 'status',
                ],
                [
                    'label' => 'Кросс-чек менеджер',
                    'column' => 'cross_check_manager_id',
                ],
                [
                    'label' => 'Приоритет',
                    'column' => 'priority',
                ],
                [
                    'label' => 'Продавец',
                    'column' => 'seller_id',
                ],
                [
                    'label' => 'Создатель заявки',
                    'column' => 'author_id',
                ],
                [
                    'label' => 'Супервайзер заявки',
                    'column' => 'supervisor_id',
                ],
                [
                    'label' => 'Кросс-чек статус',
                    'column' => 'cross_check_status',
                ],
            ],
            'responseBody' => [
                'id' => 1,
                'user_id' => 4,
                'columns_list' => '["direction","team_direction","category_id","manager_id","status","cross_check_manager_id","priority","seller_id","author_id","supervisor_id","cross_check_status"]',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '["direction", "team_direction", "category_id", "manager_id", "status", "cross_check_manager_id", "priority", "seller_id", "author_id", "supervisor_id", "cross_check_status"]'
                        ]
                    ]
                ]
            ]
        ],
    ],

];
