<?php

return [
    'lisa_fixtures' => [
        'requests' => [
            //1
            [
                'id' => 9,
                'author_id' => 16,
                'type_id' => 2,
                'supervisor_id' => 10,
                'manager_id' => null,
                'status' => 1,
                'direction' => 1,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-09 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => 9423,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 3,
            ],
        ],
        'requests_fields' => [
            [
                'request_id' => 9,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 9,
                'field_id' => 53,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 9,
                'field_id' => 52,
                'value' => 3
            ],
            [
                'request_id' => 9,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 21,
                'value' => 5
            ],
            [
                'request_id' => 9,
                'field_id' => 23,
                'value' => 14
            ],
            [
                'request_id' => 9,
                'field_id' => 22,
                'value' => 10
            ],
            [
                'request_id' => 9,
                'field_id' => 24,
                'value' => 17
            ],
            [
                'request_id' => 9,
                'field_id' => 27,
                'value' => 25
            ],
            [
                'request_id' => 9,
                'field_id' => 31,
                'value' => 48
            ],
            [
                'request_id' => 9,
                'field_id' => 25,
                'value' => 18
            ],
            [
                'request_id' => 9,
                'field_id' => 26,
                'value' => 22
            ],
            [
                'request_id' => 9,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 159,
                'value' => 1
            ],
        ],
        'report_periods' => [
            [
                //'id' => 1,
                'begin' => '2020-01-01 00:00:00',
                'end' => '2020-01-31 00:00:00',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 2,
                'begin' => '2020-02-01 00:00:00',
                'end' => '2020-02-28 00:00:00',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 3,
                'begin' => '2020-03-01 00:00:00',
                'end' => '2020-03-31 00:00:00',
                'created_at' => '2020-02-01 00:00:00',
                'updated_at' => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                'begin' => '2020-04-01 00:00:00',
                'end' => '2020-04-30 00:00:00',
                'created_at' => '2020-03-01 00:00:00',
                'updated_at' => '2020-09-01 19:01:01',
            ],
        ],
        'grid_settings' => [
            [
                //"id" => 1,
                'user_id' => 4,
                'columns_list' => '["author_id","supervisor_id","manager_id","cross_check_manager_id","status","cross_check_status","with_grid","used_ref","updating_photos","automoderation","mobile_courier","hand_load","enter_points","with_tags","by_client_review","updating_characteristics","stop_brands","adding_instructions","updating_description","markdown_2","with_video","with_pallets","adding_goods_to_new_category","lots","promo_desc","complaint_for_good","visa","markdown","difficulty_level","photos_available","with_photo","adding_graphics","calc_quantity_of_checked_goods","changed_goods","added_goods","pack_load","goods_in_db","language","description_available","characteristics_available","calc_quantity_of_checked_goods_with_errors_cc","author_clarifications","calc_quantity_of_checked_goods_cc","awaiting_correction","calc_quantity_of_checked_goods_with_errors","result_comment","team_direction","last_change_status_date","amount_to_work","sv_report_periods","supervisor_check_date","category_id","priority","actual_start_date","report_period_id","supervisor_process_date","actual_finish_date","planned_finish_date","recommendations","planned_start_date","created_at","parent_id","seller_id","description","reasons","correction_comment","reason","direction","ua_fields","handled_goods","quantity_of_handled_but_not_grouped", "group_settings", "quantity_of_words_in_dictionaries", "child_count", "calc_quantity_of_indicators", "calc_quantity_of_not_grouped", "calc_quantity_of_sent_emails", "calc_quantity_of_child_requests", "calc_quantity_of_words_in_dictionaries", "average_amount_of_goods_in_group", "algorithm", "previous_status"]'
            ]
        ],
        'exports_logs' => [],
        'user_exports' => [],
    ]
];