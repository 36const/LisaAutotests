<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            //4
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
                'created_at' => '2020-01-01 00:00:00',
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
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
            ],
            //11
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
                'created_at' => '2020-01-01 00:00:00',
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
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => '2020-01-01 00:00:05',
                'result_comment' => 'Выполнена',
                'supervisor_comment' => '',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}'
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
                'created_at' => '2020-01-01 00:00:00',
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
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}'
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
                'created_at' => '2020-01-01 00:00:00',
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
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'supervisor_comment' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                'last_change_status_date' => date('Y-m-d H:i:s'),
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}'
            ],
        ],
        'report_periods' => [
            [
                //'id' => 1,
                'begin' => date('Y-m-01 00:00:00', strtotime('-2 month')),
                'end' => date('Y-m-t 00:00:00', strtotime('-2 month')),
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 2,
                'begin' => date('Y-m-01 00:00:00', strtotime('-1 month')),
                'end' => date('Y-m-t 00:00:00', strtotime('-1 month')),
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 3,
                'begin' => date('Y-m-01 00:00:00'),
                'end' => date('Y-m-t 00:00:00'),
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                'begin' => date('Y-m-01 00:00:00', strtotime('+1 month')),
                'end' => date('Y-m-t 00:00:00', strtotime('+1 month')),
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => '2020-09-01 19:01:01',
            ],
        ],
    ]
];