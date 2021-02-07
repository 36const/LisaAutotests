<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
                "id" => 11,
                "author_id" => 16,
                "type_id" => 1,
                "supervisor_id" => 5,
                "manager_id" => null,
                "status" => 1,
                "direction" => 2,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => "2020-01-11 00:00:00",
                "correction_comment" => "https://zabbix3.local/latest.php?groupids[%5D=251&hostids[%5D=12686&hostids[%5D=16666&hostids[%5D=16728&hostids[%5D=17592&hostids[%5D=17607&hostids[%5D=17714&hostids[%5D=17720&hostids[%5D=18537&hostids[%5D=19198&application=Memory",
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
                "reason" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 11,
                "field_id" => 15,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 19,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 8,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 53,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 143,
                "value" => "0"
            ],
        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-01-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-02-01 00:00:00',
                "end" => '2020-02-28 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2020-03-01 00:00:00',
                "end" => '2020-03-31 00:00:00',
                "created_at" => '2020-02-01 00:00:00',
                "updated_at" => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                "begin" => '2020-04-01 00:00:00',
                "end" => '2020-04-30 00:00:00',
                "created_at" => '2020-03-01 00:00:00',
                "updated_at" => '2020-09-01 19:01:01',
            ],
        ],
        "grid_settings" => [
            [
                //"id" => 1,
                "user_id" => 4,
                "columns_list" => '["author_id","supervisor_id","manager_id","cross_check_manager_id","status","cross_check_status","with_grid","used_ref","updating_photos","automoderation","mobile_courier","hand_load","enter_points","with_tags","by_client_review","updating_characteristics","stop_brands","adding_instructions","updating_description","markdown_2","with_video","with_pallets","adding_goods_to_new_category","lots","promo_desc","complaint_for_good","visa","markdown","difficulty_level","photos_available","with_photo","adding_graphics","calc_quantity_of_checked_goods","changed_goods","added_goods","pack_load","goods_in_db","language","description_available","characteristics_available","calc_quantity_of_checked_goods_with_errors_cc","author_clarifications","calc_quantity_of_checked_goods_cc","awaiting_correction","calc_quantity_of_checked_goods_with_errors","result_comment","team_direction","last_change_status_date","amount_to_work","sv_report_periods","supervisor_check_date","category_id","priority","actual_start_date","report_period_id","supervisor_process_date","actual_finish_date","planned_finish_date","recommendations","planned_start_date","created_at","parent_id","seller_id","description","reasons","correction_comment","reason","direction","ua_fields","handled_goods"]'
            ]
        ],
        "request_status_history" => [
            [
                //"id" => 1,
                "request_id" => 11,
                "user_id" => 4,
                "old_status" => 1,
                "new_status" => 3,
                "reason" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                "created_at" => "2021-02-05 13:47:33",
                "manager_id" => null,
                "reasons" => "Другое (описан в коментариях) | Нада"
            ],
            [
                //"id" => 2,
                "request_id" => 11,
                "user_id" => 4,
                "old_status" => 3,
                "new_status" => 1,
                "reason" => "https://zabbix3.local/latest.php?groupids[%5D=251&hostids[%5D=12686&hostids[%5D=16666&hostids[%5D=16728&hostids[%5D=17592&hostids[%5D=17607&hostids[%5D=17714&hostids[%5D=17720&hostids[%5D=18537&hostids[%5D=19198&application=Memory",
                "created_at" => "2021-02-05 13:50:33",
                "manager_id" => null,
                "reasons" => null
            ],
            [
                //"id" => 3,
                "request_id" => 11,
                "user_id" => 4,
                "old_status" => 1,
                "new_status" => 4,
                "reason" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                "created_at" => "2021-02-05 13:51:26",
                "manager_id" => null,
                "reasons" => "Все товары уже есть на сайте | Дубль задачи"
            ]
        ],
        "exports_logs" => [],
        "user_exports" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "reasons" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
    ],
];