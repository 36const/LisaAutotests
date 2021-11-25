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
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 3,
            ],
            [
                'id' => 11,
                'author_id' => 16,
                'type_id' => 1,
                'supervisor_id' => 5,
                'manager_id' => null,
                'status' => 1,
                'direction' => 2,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-11 00:00:00',
                'correction_comment' => 'https://zabbix3.local/latest.php?groupids[%5D=251&hostids[%5D=12686&hostids[%5D=16666&hostids[%5D=16728&hostids[%5D=17592&hostids[%5D=17607&hostids[%5D=17714&hostids[%5D=17720&hostids[%5D=18537&hostids[%5D=19198&application=Memory',
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => null,
                'reason' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => null,
            ],
            [
                'id' => 14,
                'author_id' => 18,
                'type_id' => 4,
                'supervisor_id' => 33,
                'manager_id' => null,
                'status' => 1,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-14 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 0,
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
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 week')),
                'team_direction' => 4,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => null,
                'rz_category_id' => 83850
            ],
            //2
            [
                'id' => 1,
                'author_id' => 17,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 2,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-02-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 1,
            ],
            [
                'id' => 10,
                'author_id' => 18,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 2,
                'direction' => 1,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-02-10 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 5,
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
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 1,
            ],
            [
                'id' => 13,
                'author_id' => 17,
                'type_id' => 3,
                'supervisor_id' => 5,
                'manager_id' => null,
                'status' => 2,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-02-13 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 0,
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
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 week')),
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 1,
            ],
            //5
            [
                'id' => 3,
                'author_id' => 15,
                'type_id' => 7,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 5,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-05-03 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 1,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 1,
            ],
            [
                'id' => 8,
                'author_id' => 15,
                'type_id' => 1,
                'supervisor_id' => 6,
                'manager_id' => 12,
                'status' => 5,
                'direction' => 1,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-05-08 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
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
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 1,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
            [
                'id' => 16,
                'author_id' => 17,
                'type_id' => 12,
                'supervisor_id' => 6,
                'manager_id' => 13,
                'status' => 5,
                'direction' => 1,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-05-16 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
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
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 week')),
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 1,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 1,
                'manager_team' => 7,
            ],
            //6
            [
                'id' => 4,
                'author_id' => 19,
                'type_id' => 9,
                'supervisor_id' => 34,
                'manager_id' => 12,
                'status' => 6,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 1,
                'created_at' => '2020-06-04 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => date('Y-m-d H:i:s'),
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 5,
                'rz_category_id' => null,
                'author_team' => 8,
                'supervisor_team' => 15,
                'manager_team' => 7,
            ],
            [
                'id' => 17,
                'author_id' => 20,
                'type_id' => 9,
                'supervisor_id' => 34,
                'manager_id' => 14,
                'status' => 6,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-06-17 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => 0,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:40:59',
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 5,
                'rz_category_id' => null,
                'author_team' => 8,
                'supervisor_team' => 15,
                'manager_team' => 7,
            ],
            [
                'id' => 19,
                'author_id' => 16,
                'type_id' => 11,
                'supervisor_id' => 37,
                'manager_id' => 14,
                'status' => 6,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-06-19 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:40:58',
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 5,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 14,
                'manager_team' => 7,
            ],
            //7
            [
                'id' => 5,
                'author_id' => 20,
                'type_id' => 10,
                'supervisor_id' => 37,
                'manager_id' => 11,
                'status' => 7,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-07-05 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => 'Ожидать',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 6,
                'rz_category_id' => null,
                'author_team' => 8,
                'supervisor_team' => 15,
                'manager_team' => 1,
            ],
            [
                'id' => 21,
                'author_id' => 16,
                'type_id' => 14,
                'supervisor_id' => 38,
                'manager_id' => 14,
                'status' => 7,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-07-21 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение размерной сетки (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => null,
                'reason' => 'Ожидать',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:48:21',
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 week')),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 6,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 7,
            ],

            //3
            [
                'id' => 2,
                'author_id' => 21,
                'type_id' => 5,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 3,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-03-02 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 5,
                'recommendations' => null,
                'reason' => 'Затребовать изменения',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 1,
            ],
            [
                'id' => 12,
                'author_id' => 15,
                'type_id' => 2,
                'supervisor_id' => 10,
                'manager_id' => null,
                'status' => 3,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-03-12 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 9423,
                'recommendations' => null,
                'reason' => 'Дубль задачи',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 1,
            ],
            [
                'id' => 15,
                'author_id' => 17,
                'type_id' => 4,
                'supervisor_id' => 33,
                'manager_id' => null,
                'status' => 3,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-03-15 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => '',
                'reason' => 'На доработку',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 4,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'previous_status' => 1,
                'rz_category_id' => 753399
            ],
            //4
            [
                'id' => 18,
                'author_id' => 19,
                'type_id' => 10,
                'supervisor_id' => 34,
                'manager_id' => 13,
                'status' => 4,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-04-18 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => null,
                'reason' => 'Отменить',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:40:59',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-08-20 14:42:31',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 1,
                'rz_category_id' => null,
                'author_team' => 8,
                'supervisor_team' => 15,
                'manager_team' => 7,
            ],
            [
                'id' => 25,
                'author_id' => 17,
                'type_id' => 11,
                'supervisor_id' => 34,
                'manager_id' => 12,
                'status' => 4,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-04-25 08:01:56',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => null,
                'recommendations' => '',
                'reason' => 'Отменить',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-04-25 11:03:19',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-04-25 11:03:37',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 2,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 15,
                'manager_team' => 7,
            ],
            //11
            [
                'id' => 22,
                'author_id' => 17,
                'type_id' => 15,
                'supervisor_id' => 35,
                'manager_id' => 13,
                'status' => 11,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-11-22 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:48:20',
                'actual_finish_date' => date('Y-m-d H:i:s', strtotime('-1 hour')),
                'supervisor_process_date' => '2020-08-20 14:49:03',
                'supervisor_check_date' => '2020-08-20 14:51:53',
                'result_comment' => 'Выполнена',
                'supervisor_comment' => '',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1", "2": "2", "3": "3", "4": "4"}',
                'previous_status' => 8,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 7,
            ],
            [
                'id' => 23,
                'author_id' => 16,
                'type_id' => 7,
                'supervisor_id' => 35,
                'manager_id' => 14,
                'status' => 11,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-11-23 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-11-23 14:54:56',
                'actual_finish_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'supervisor_process_date' => '2020-11-23 14:57:30',
                'supervisor_check_date' => '2020-11-23 14:57:48',
                'result_comment' => 'Выполнена',
                'supervisor_comment' => '',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 9,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 7,
            ],
            [
                'id' => 24,
                'author_id' => 15,
                'type_id' => 8,
                'supervisor_id' => 38,
                'manager_id' => 13,
                'status' => 11,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-11-24 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-11-24 14:54:43',
                'actual_finish_date' => date('Y-m-d H:i:s', strtotime('-2 day')),
                'supervisor_process_date' => '2020-11-24 14:56:40',
                'supervisor_check_date' => '2020-11-24 14:57:06',
                'result_comment' => 'Выполнена',
                'supervisor_comment' => '',
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 9,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 7,
            ],

            //8,9
            [
                'id' => 6,
                'author_id' => 15,
                'type_id' => 13,
                'supervisor_id' => 38,
                'manager_id' => 12,
                'status' => 8,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 hour')),
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => date('Y-m-d H:i:s'),
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 6,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 7,
            ],
            [
                'id' => 7,
                'author_id' => 18,
                'type_id' => 15,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'correction_comment' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'description' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => date('Y-m-d H:i:s'),
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'supervisor_comment' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'previous_status' => 6,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 1,
            ],
            [
                'id' => 20,
                'author_id' => 18,
                'type_id' => 13,
                'supervisor_id' => 35,
                'manager_id' => 13,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 day')),
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => 9423,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:48:21',
                'actual_finish_date' => '2020-08-20 14:50:51',
                'supervisor_process_date' => '2020-08-20 14:50:51',
                'supervisor_check_date' => null,
                'result_comment' => 'Выполнена',
                'supervisor_comment' => null,
                'last_change_status_date' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'previous_status' => 6,
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 16,
                'manager_team' => 7,
            ],
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 3,
                'value' => 1
            ],
            [
                'request_id' => 1,
                'field_id' => 8,
                'value' => 1
            ],
            [
                'request_id' => 1,
                'field_id' => 15,
                'value' => 1
            ],
            [
                'request_id' => 1,
                'field_id' => 19,
                'value' => 1
            ],
            [
                'request_id' => 1,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => 3
            ],
            [
                'request_id' => 1,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 114,
                'value' => 3
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 2,
                'field_id' => 3,
                'value' => 1
            ],
            [
                'request_id' => 2,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 52,
                'value' => 2
            ],
            [
                'request_id' => 2,
                'field_id' => 53,
                'value' => 0.5
            ],
            [
                'request_id' => 2,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 2,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 3,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 3,
                'field_id' => 3,
                'value' => 1
            ],
            [
                'request_id' => 3,
                'field_id' => 6,
                'value' => 1
            ],
            [
                'request_id' => 3,
                'field_id' => 7,
                'value' => 1
            ],
            [
                'request_id' => 3,
                'field_id' => 29,
                'value' => 36
            ],
            [
                'request_id' => 3,
                'field_id' => 30,
                'value' => 47
            ],
            [
                'request_id' => 3,
                'field_id' => 53,
                'value' => 3
            ],
            [
                'request_id' => 3,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 3,
                'field_id' => 55,
                'value' => 0
            ],
            [
                'request_id' => 3,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 3,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 4,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 4,
                'field_id' => 20,
                'value' => 63
            ],
            [
                'request_id' => 4,
                'field_id' => 53,
                'value' => 0.5
            ],
            [
                'request_id' => 4,
                'field_id' => 54,
                'value' => 1.2
            ],
            [
                'request_id' => 4,
                'field_id' => 59,
                'value' => 36.66
            ],
            [
                'request_id' => 4,
                'field_id' => 79,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 80,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 84,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 91,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 97,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 98,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 99,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 4,
                'field_id' => 113,
                'value' => 10
            ],
            [
                'request_id' => 4,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 4,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 4,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 5,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 5,
                'field_id' => 20,
                'value' => 66
            ],
            [
                'request_id' => 5,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 5,
                'field_id' => 54,
                'value' => 2
            ],
            [
                'request_id' => 5,
                'field_id' => 59,
                'value' => 0
            ],
            [
                'request_id' => 5,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 5,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 6,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 6,
                'field_id' => 20,
                'value' => 66
            ],
            [
                'request_id' => 6,
                'field_id' => 27,
                'value' => 24
            ],
            [
                'request_id' => 6,
                'field_id' => 47,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 48,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 6,
                'field_id' => 54,
                'value' => 2
            ],
            [
                'request_id' => 6,
                'field_id' => 56,
                'value' => 80
            ],
            [
                'request_id' => 6,
                'field_id' => 62,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 63,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 70,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 86,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 87,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 88,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 100,
                'value' => 10
            ],
            [
                'request_id' => 6,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 6,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 7,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 7,
                'field_id' => 20,
                'value' => 66
            ],
            [
                'request_id' => 7,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 7,
                'field_id' => 54,
                'value' => 2
            ],
            [
                'request_id' => 7,
                'field_id' => 58,
                'value' => 120
            ],
            [
                'request_id' => 7,
                'field_id' => 83,
                'value' => 10
            ],
            [
                'request_id' => 7,
                'field_id' => 92,
                'value' => 10
            ],
            [
                'request_id' => 7,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 7,
                'field_id' => 110,
                'value' => 10
            ],
            [
                'request_id' => 7,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 8,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 8,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 8,
                'field_id' => 52,
                'value' => 2
            ],
            [
                'request_id' => 8,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 8,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 159,
                'value' => 1
            ],
            [
                'request_id' => 9,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 9,
                'field_id' => 101,
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
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 9,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 10,
                'field_id' => 15,
                'value' => 1
            ],
            [
                'request_id' => 10,
                'field_id' => 8,
                'value' => 1
            ],
            [
                'request_id' => 10,
                'field_id' => 9,
                'value' => 1
            ],
            [
                'request_id' => 10,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 53,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 10,
                'field_id' => 52,
                'value' => 2
            ],
            [
                'request_id' => 10,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 10,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 15,
                'value' => 1
            ],
            [
                'request_id' => 11,
                'field_id' => 19,
                'value' => 1
            ],
            [
                'request_id' => 11,
                'field_id' => 8,
                'value' => 1
            ],
            [
                'request_id' => 11,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 53,
                'value' => 3
            ],
            [
                'request_id' => 11,
                'field_id' => 114,
                'value' => 3
            ],
            [
                'request_id' => 11,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 11,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 159,
                'value' => 1
            ],
            [
                'request_id' => 12,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 53,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 114,
                'value' => 3
            ],
            [
                'request_id' => 12,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 12,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 53,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 114,
                'value' => 3
            ],
            [
                'request_id' => 13,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 13,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 14,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 14,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 14,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 14,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 14,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 14,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 14,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 14,
                'field_id' => 61,
                'value' => 0
            ],
            [
                'request_id' => 15,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 15,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 15,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 15,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 15,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 15,
                'field_id' => 53,
                'value' => 0.5
            ],
            [
                'request_id' => 15,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 15,
                'field_id' => 61,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 16,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 53,
                'value' => 0.5
            ],
            [
                'request_id' => 16,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 16,
                'field_id' => 52,
                'value' => 2
            ],
            [
                'request_id' => 16,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 16,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 17,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 17,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 17,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 17,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 17,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 17,
                'field_id' => 53,
                'value' => 0.5
            ],
            [
                'request_id' => 17,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 17,
                'field_id' => 59,
                'value' => 0
            ],
            [
                'request_id' => 18,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 18,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 18,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 18,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 18,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 18,
                'field_id' => 53,
                'value' => 0.5
            ],
            [
                'request_id' => 18,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 18,
                'field_id' => 59,
                'value' => 0
            ],
            [
                'request_id' => 19,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 19,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 19,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 19,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 19,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 19,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 19,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 19,
                'field_id' => 59,
                'value' => 0
            ],
            [
                'request_id' => 20,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 20,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 20,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 20,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 20,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 20,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 20,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 21,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 21,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 21,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 21,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 21,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 21,
                'field_id' => 53,
                'value' => 0.5
            ],
            [
                'request_id' => 21,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 21,
                'field_id' => 57,
                'value' => 0
            ],
            [
                'request_id' => 22,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 22,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 22,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 22,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 22,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 22,
                'field_id' => 53,
                'value' => 2
            ],
            [
                'request_id' => 22,
                'field_id' => 83,
                'value' => 10
            ],
            [
                'request_id' => 22,
                'field_id' => 92,
                'value' => 10
            ],
            [
                'request_id' => 22,
                'field_id' => 110,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 70,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 100,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 88,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 62,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 63,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 87,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 86,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 47,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 48,
                'value' => 10
            ],
            [
                'request_id' => 20,
                'field_id' => 27,
                'value' => 24
            ],
            [
                'request_id' => 20,
                'field_id' => 56,
                'value' => 40
            ],
            [
                'request_id' => 22,
                'field_id' => 20,
                'value' => 66
            ],
            [
                'request_id' => 22,
                'field_id' => 54,
                'value' => 2
            ],
            [
                'request_id' => 22,
                'field_id' => 58,
                'value' => 120
            ],
            [
                'request_id' => 23,
                'field_id' => 1,
                'value' => 1
            ],
            [
                'request_id' => 23,
                'field_id' => 6,
                'value' => 1
            ],
            [
                'request_id' => 23,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 23,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 23,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 23,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 23,
                'field_id' => 53,
                'value' => 0
            ],
            [
                'request_id' => 23,
                'field_id' => 55,
                'value' => 0
            ],
            [
                'request_id' => 24,
                'field_id' => 7,
                'value' => 1
            ],
            [
                'request_id' => 24,
                'field_id' => 2,
                'value' => 1
            ],
            [
                'request_id' => 24,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 24,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 24,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 24,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 24,
                'field_id' => 53,
                'value' => 0
            ],
            [
                'request_id' => 24,
                'field_id' => 55,
                'value' => 0
            ],
            [
                'request_id' => 24,
                'field_id' => 79,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 80,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 112,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 81,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 115,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 90,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 97,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 98,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 99,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 84,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 85,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 113,
                'value' => 10
            ],
            [
                'request_id' => 24,
                'field_id' => 28,
                'value' => 27
            ],
            [
                'request_id' => 24,
                'field_id' => 20,
                'value' => 66
            ],
            [
                'request_id' => 24,
                'field_id' => 30,
                'value' => 41
            ],
            [
                'request_id' => 24,
                'field_id' => 29,
                'value' => 32
            ],
            [
                'request_id' => 24,
                'field_id' => 54,
                'value' => 2
            ],
            [
                'request_id' => 23,
                'field_id' => 79,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 80,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 112,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 81,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 115,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 90,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 97,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 98,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 99,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 84,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 85,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 113,
                'value' => 10
            ],
            [
                'request_id' => 23,
                'field_id' => 28,
                'value' => 27
            ],
            [
                'request_id' => 23,
                'field_id' => 20,
                'value' => 65
            ],
            [
                'request_id' => 23,
                'field_id' => 30,
                'value' => 47
            ],
            [
                'request_id' => 23,
                'field_id' => 29,
                'value' => 38
            ],
            [
                'request_id' => 23,
                'field_id' => 54,
                'value' => 1.5
            ],
            [
                'request_id' => 25,
                'field_id' => 53,
                'value' => 0
            ],
            [
                'request_id' => 25,
                'field_id' => 54,
                'value' => 1
            ],
            [
                'request_id' => 25,
                'field_id' => 59,
                'value' => 0
            ],
            [
                'request_id' => 25,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 25,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 25,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 25,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 143,
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
            ]
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
        'requests_reasons' => [
            [
                'request_id' => 21,
                'reason_id' => 3
            ],
            [
                'request_id' => 5,
                'reason_id' => 5
            ],
            [
                'request_id' => 2,
                'reason_id' => 11
            ],
            [
                'request_id' => 12,
                'reason_id' => 1
            ],
            [
                'request_id' => 15,
                'reason_id' => 1
            ],
            [
                'request_id' => 18,
                'reason_id' => 2
            ],
            [
                'request_id' => 25,
                'reason_id' => 9
            ],
            [
                'request_id' => 6,
                'reason_id' => 6
            ]
        ],
        'grid_settings' => [
            [
                //"id" => 1,
                'user_id' => 4,
                'columns_list' => '["author_id", "supervisor_id", "manager_id", "cross_check_manager_id", "status", "cross_check_status", "with_grid", "used_ref", "updating_photos", "automoderation", "mobile_courier", "hand_load", "enter_points", "with_tags", "by_client_review", "updating_characteristics", "stop_brands", "adding_instructions", "updating_description", "markdown_2", "with_video", "with_pallets", "adding_goods_to_new_category", "lots", "promo_desc", "complaint_for_good", "visa", "markdown", "difficulty_level", "photos_available", "with_photo", "adding_graphics", "calc_quantity_of_checked_goods", "changed_goods", "added_goods", "pack_load", "goods_in_db", "language", "description_available", "characteristics_available", "calc_quantity_of_checked_goods_with_errors_cc", "author_clarifications", "calc_quantity_of_checked_goods_cc", "awaiting_correction", "calc_quantity_of_checked_goods_with_errors", "result_comment", "team_direction", "last_change_status_date", "amount_to_work", "sv_report_periods", "supervisor_check_date", "category_id", "priority", "actual_start_date", "report_period_id", "supervisor_process_date", "actual_finish_date", "planned_finish_date", "recommendations", "planned_start_date", "created_at", "parent_id", "seller_id", "description", "reasons", "correction_comment", "reason", "direction", "ua_fields", "handled_goods", "quantity_of_handled_but_not_grouped", "group_settings", "quantity_of_words_in_dictionaries", "child_count", "calc_quantity_of_indicators", "calc_quantity_of_not_grouped", "calc_quantity_of_sent_emails", "calc_quantity_of_child_requests", "calc_quantity_of_words_in_dictionaries", "average_amount_of_goods_in_group", "algorithm", "previous_status", "rz_category_id"]'
            ]
        ],
        'request_status_history' => [
            [
                //"id" => 1,
                'request_id' => 11,
                'user_id' => 4,
                'old_status' => 1,
                'new_status' => 3,
                'reason' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'created_at' => '2021-02-05 13:47:33',
                'manager_id' => null,
                'reasons' => 'Другое (описан в коментариях) | Нада'
            ],
            [
                //"id" => 2,
                'request_id' => 11,
                'user_id' => 4,
                'old_status' => 3,
                'new_status' => 1,
                'reason' => 'https://zabbix3.local/latest.php?groupids[%5D=251&hostids[%5D=12686&hostids[%5D=16666&hostids[%5D=16728&hostids[%5D=17592&hostids[%5D=17607&hostids[%5D=17714&hostids[%5D=17720&hostids[%5D=18537&hostids[%5D=19198&application=Memory',
                'created_at' => '2021-02-05 13:50:33',
                'manager_id' => null,
                'reasons' => null
            ],
            [
                //"id" => 3,
                'request_id' => 11,
                'user_id' => 4,
                'old_status' => 1,
                'new_status' => 4,
                'reason' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'created_at' => '2021-02-05 13:51:26',
                'manager_id' => null,
                'reasons' => 'Все товары уже есть на сайте | Дубль задачи'
            ]
        ],
        'exports_logs' => [
            [
//                "export_id" => 1,
                'user_id' => 4,
                'conditions' => '{"queryParams": "{\"tab\":\"all\",\"filter\":{\"author_id\":\"4\"}}"}',
                'created_at' => date('Y-m-d H:i:s', strtotime('-25 minutes')),
                'generated_at' => date('Y-m-d H:i:s', strtotime('-25 minutes')),
                'generation_time' => 1,
            ],
        ],
        'user_exports' => [
            [
//                "id" => 1,
                'user_id' => 4,
                'title' => 'export_4_' . date('Y-m-d') . '_18-18-18.xlsx',
                'status' => 2,
            ]
        ],

    ]
];