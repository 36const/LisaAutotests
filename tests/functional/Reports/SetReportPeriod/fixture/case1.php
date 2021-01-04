<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            //1
            [
                "id" => 9,
                "author_id" => 16,
                "type_id" => 2,
                "supervisor_id" => 10,
                "manager_id" => null,
                "status" => 1,
                "direction" => 1,
                "priority" => null,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "description" => "Описание",
                "category_id" => 2,
                "seller_id" => 9423,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
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
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory",
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
                //"reason_id" => null,
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
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            [
                "id" => 14,
                "author_id" => 18,
                "type_id" => 4,
                "supervisor_id" => 33,
                "manager_id" => null,
                "status" => 1,
                "direction" => 0,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Группировка товаров (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 week')),
                "team_direction" => 4,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            //2
            [
                "id" => 1,
                "author_id" => 17,
                "type_id" => 3,
                "supervisor_id" => 6,
                "manager_id" => null,
                "status" => 2,
                "direction" => 2,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Перенос товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 83,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => "2020-01-01 00:00:02",
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ],
            [
                "id" => 10,
                "author_id" => 18,
                "type_id" => 3,
                "supervisor_id" => 6,
                "manager_id" => null,
                "status" => 2,
                "direction" => 1,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Перенос товаров (Работа с товарами Розетки)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 5,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            [
                "id" => 13,
                "author_id" => 17,
                "type_id" => 3,
                "supervisor_id" => 5,
                "manager_id" => null,
                "status" => 2,
                "direction" => 2,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Перенос товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 week')),
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            //5
            [
                "id" => 3,
                "author_id" => 15,
                "type_id" => 7,
                "supervisor_id" => 35,
                "manager_id" => 11,
                "status" => 5,
                "direction" => 0,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => "2020-01-01 00:00:02",
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 6,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ],
            [
                "id" => 8,
                "author_id" => 15,
                "type_id" => 1,
                "supervisor_id" => 6,
                "manager_id" => 12,
                "status" => 5,
                "direction" => 1,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            [
                "id" => 16,
                "author_id" => 17,
                "type_id" => 12,
                "supervisor_id" => 6,
                "manager_id" => 13,
                "status" => 5,
                "direction" => 1,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 week')),
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            //6
            [
                "id" => 4,
                "author_id" => 19,
                "type_id" => 9,
                "supervisor_id" => 34,
                "manager_id" => 12,
                "status" => 6,
                "direction" => 0,
                "priority" => 2,
                "awaiting_correction" => 1,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => "2020-01-01 00:00:03",
                "actual_finish_date" => "2020-01-01 00:00:04",
                "supervisor_process_date" => "2020-01-01 00:00:02",
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 5,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ],
            [
                "id" => 17,
                "author_id" => 20,
                "type_id" => 9,
                "supervisor_id" => 34,
                "manager_id" => 14,
                "status" => 6,
                "direction" => 0,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 2,
                "seller_id" => 0,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => "2020-01-01 00:00:03",
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 5,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            [
                "id" => 19,
                "author_id" => 16,
                "type_id" => 11,
                "supervisor_id" => 37,
                "manager_id" => 14,
                "status" => 6,
                "direction" => 0,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Проектирование структуры (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => null,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => "2020-01-01 00:00:03",
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 5,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            //7
            [
                "id" => 5,
                "author_id" => 20,
                "type_id" => 10,
                "supervisor_id" => 37,
                "manager_id" => 11,
                "status" => 7,
                "direction" => 0,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                //"reason_id" => 5,
                "reason" => "Ожидать",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => "2020-01-01 00:00:03",
                "actual_finish_date" => null,
                "supervisor_process_date" => "2020-01-01 00:00:02",
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => "Комментарий",
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 5,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ],
            [
                "id" => 21,
                "author_id" => 16,
                "type_id" => 14,
                "supervisor_id" => 38,
                "manager_id" => 14,
                "status" => 7,
                "direction" => 0,
                "priority" => null,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => null,
                "recommendations" => null,
                //"reason_id" => 3,
                "reason" => "Ожидать",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => "2020-01-01 00:00:03",
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 week')),
                "team_direction" => 6,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            //3
            [
                "id" => 2,
                "author_id" => 21,
                "type_id" => 5,
                "supervisor_id" => 6,
                "manager_id" => null,
                "status" => 3,
                "direction" => 1,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 5,
                "recommendations" => null,
                //"reason_id" => 15,
                "reason" => "Затребовать изменения",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => "2020-01-01 00:00:02",
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ],
            [
                "id" => 12,
                "author_id" => 15,
                "type_id" => 2,
                "supervisor_id" => 10,
                "manager_id" => null,
                "status" => 3,
                "direction" => 2,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 9423,
                "recommendations" => null,
                //"reason_id" => 1,
                "reason" => "Дубль задачи",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
            [
                "id" => 15,
                "author_id" => 17,
                "type_id" => 4,
                "supervisor_id" => 33,
                "manager_id" => null,
                "status" => 3,
                "direction" => 0,
                "priority" => null,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => "",
                "amount_to_work" => 10,
                "subject" => "Группировка товаров (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => null,
                "recommendations" => "",
                //"reason_id" => 1,
                "reason" => "На доработку",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => "",
                "supervisor_comment" => "",
                "last_change_status_date" => date("Y-m-d H:i:s"),
                "team_direction" => 4,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 1,
                "field_id" => 3,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 8,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 15,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 19,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 53,
                "value" => "3"
            ],
            [
                "request_id" => 1,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 1,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 1,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 2,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 2,
                "field_id" => 3,
                "value" => "1"
            ],
            [
                "request_id" => 2,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 2,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 2,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 2,
                "field_id" => 52,
                "value" => "2"
            ],
            [
                "request_id" => 2,
                "field_id" => 53,
                "value" => "0.5"
            ],
            [
                "request_id" => 2,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 2,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 2,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 2,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 2,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 3,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 3,
                "field_id" => 3,
                "value" => "1"
            ],
            [
                "request_id" => 3,
                "field_id" => 6,
                "value" => "1"
            ],
            [
                "request_id" => 3,
                "field_id" => 7,
                "value" => "1"
            ],
            [
                "request_id" => 3,
                "field_id" => 29,
                "value" => "36"
            ],
            [
                "request_id" => 3,
                "field_id" => 30,
                "value" => "47"
            ],
            [
                "request_id" => 3,
                "field_id" => 53,
                "value" => "3"
            ],
            [
                "request_id" => 3,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 3,
                "field_id" => 55,
                "value" => "0"
            ],
            [
                "request_id" => 3,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 3,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 4,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 4,
                "field_id" => 20,
                "value" => "63"
            ],
            [
                "request_id" => 4,
                "field_id" => 53,
                "value" => "0.5"
            ],
            [
                "request_id" => 4,
                "field_id" => 54,
                "value" => "1.2"
            ],
            [
                "request_id" => 4,
                "field_id" => 59,
                "value" => "36.66"
            ],
            [
                "request_id" => 4,
                "field_id" => 79,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 80,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 84,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 91,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 97,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 98,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 99,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 4,
                "field_id" => 113,
                "value" => "10"
            ],
            [
                "request_id" => 4,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 4,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 4,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 5,
                "field_id" => 2,
                "value" => "1"
            ],
            [
                "request_id" => 5,
                "field_id" => 20,
                "value" => "66"
            ],
            [
                "request_id" => 5,
                "field_id" => 53,
                "value" => "2"
            ],
            [
                "request_id" => 5,
                "field_id" => 54,
                "value" => "2"
            ],
            [
                "request_id" => 5,
                "field_id" => 59,
                "value" => "0"
            ],
            [
                "request_id" => 5,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 5,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 8,
                "field_id" => 2,
                "value" => "1"
            ],
            [
                "request_id" => 8,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 8,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 8,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 8,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 8,
                "field_id" => 53,
                "value" => "2"
            ],
            [
                "request_id" => 8,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 8,
                "field_id" => 52,
                "value" => "2"
            ],
            [
                "request_id" => 8,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 8,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 8,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 8,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 8,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 8,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 8,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 159,
                "value" => "1"
            ],
            [
                "request_id" => 9,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 9,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 9,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 9,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 9,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 9,
                "field_id" => 53,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 9,
                "field_id" => 52,
                "value" => "3"
            ],
            [
                "request_id" => 9,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 10,
                "field_id" => 15,
                "value" => "1"
            ],
            [
                "request_id" => 10,
                "field_id" => 8,
                "value" => "1"
            ],
            [
                "request_id" => 10,
                "field_id" => 9,
                "value" => "1"
            ],
            [
                "request_id" => 10,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 10,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 10,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 10,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 10,
                "field_id" => 53,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 10,
                "field_id" => 52,
                "value" => "2"
            ],
            [
                "request_id" => 10,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 10,
                "field_id" => 143,
                "value" => "0"
            ],
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
            [
                "request_id" => 12,
                "field_id" => 159,
                "value" => "1"
            ],
            [
                "request_id" => 12,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 12,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 12,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 12,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 12,
                "field_id" => 53,
                "value" => "0"
            ],
            [
                "request_id" => 12,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 12,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 12,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 12,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 12,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 12,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 12,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 12,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 13,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 13,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 13,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 13,
                "field_id" => 53,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 13,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 13,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 14,
                "field_id" => 2,
                "value" => "1"
            ],
            [
                "request_id" => 14,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 14,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 14,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 14,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 14,
                "field_id" => 53,
                "value" => "2"
            ],
            [
                "request_id" => 14,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 14,
                "field_id" => 61,
                "value" => "0"
            ],
            [
                "request_id" => 15,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 15,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 15,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 15,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 15,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 15,
                "field_id" => 53,
                "value" => "0.5"
            ],
            [
                "request_id" => 15,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 15,
                "field_id" => 61,
                "value" => "0"
            ],
            [
                "request_id" => 16,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 16,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 16,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 16,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 16,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 16,
                "field_id" => 53,
                "value" => "0.5"
            ],
            [
                "request_id" => 16,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 16,
                "field_id" => 52,
                "value" => "2"
            ],
            [
                "request_id" => 16,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 16,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 16,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 16,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 16,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 16,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 16,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 17,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 17,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 17,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 17,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 17,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 17,
                "field_id" => 53,
                "value" => "0.5"
            ],
            [
                "request_id" => 17,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 17,
                "field_id" => 59,
                "value" => "0"
            ],
            [
                "request_id" => 19,
                "field_id" => 2,
                "value" => "1"
            ],
            [
                "request_id" => 19,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 19,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 19,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 19,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 19,
                "field_id" => 53,
                "value" => "2"
            ],
            [
                "request_id" => 19,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 19,
                "field_id" => 59,
                "value" => "0"
            ],
            [
                "request_id" => 21,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 21,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 21,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 21,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 21,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 21,
                "field_id" => 53,
                "value" => "0.5"
            ],
            [
                "request_id" => 21,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 21,
                "field_id" => 57,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 25,
                "value" => "18"
            ],
            [
                "request_id" => 1,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 1,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 1,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 9,
                "field_id" => 21,
                "value" => "5"
            ],
            [
                "request_id" => 9,
                "field_id" => 23,
                "value" => "14"
            ],
            [
                "request_id" => 9,
                "field_id" => 22,
                "value" => "10"
            ],
            [
                "request_id" => 9,
                "field_id" => 24,
                "value" => "17"
            ],
            [
                "request_id" => 9,
                "field_id" => 27,
                "value" => "25"
            ],
            [
                "request_id" => 9,
                "field_id" => 31,
                "value" => "48"
            ],
            [
                "request_id" => 9,
                "field_id" => 25,
                "value" => "18"
            ],
            [
                "request_id" => 9,
                "field_id" => 26,
                "value" => "22"
            ]

        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-07-01 00:00:00',
                "end" => '2020-12-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2021-01-01 00:00:00',
                "end" => '2021-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                "begin" => '2021-07-01 00:00:00',
                "end" => '2021-12-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => '2020-09-01 19:01:01',
            ],
        ],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];