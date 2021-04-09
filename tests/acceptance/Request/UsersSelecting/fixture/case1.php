<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //"id" => 1,
                "author_id" => 4,
                "type_id" => 3,
                "supervisor_id" => 6,
                "manager_id" => null,
                "status" => 2,
                "direction" => 2,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => "2020-01-01 00:00:00",
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Перенос товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 83,
                "recommendations" => null,
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
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
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
                "value" => null
            ],
            [
                "request_id" => 1,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 1,
                "field_id" => 122,
                "value" => null
            ],
        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-03-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-04-01 00:00:00',
                "end" => '2020-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2020-07-01 00:00:00',
                "end" => date('Y-m-d', strtotime('+1 week')) . ' 00:00:00',
                "created_at" => '2020-02-01 00:00:00',
                "updated_at" => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                "begin" => date('Y-m-d', strtotime('+8 days')) . ' 00:00:00',
                "end" => '2021-12-31 00:00:00',
                "created_at" => '2020-03-01 00:00:00',
                "updated_at" => '2020-09-01 19:01:01',
            ],
        ],
        "request_errors" => [],
        'notification_settings' => [],
        "user_notifications" => [],
        "request_status_history" => [],
        "observers" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "public.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "auth.users" => [
            [
                //"id" => 1,
                "name" => "Система",
                "login" => "systemBPM",
                "email" => "system@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-03-10 12:07:48",
                "created_by" => 0,
                "change_date" => "2020-03-10 12:07:48",
                "drfo" => "0"
            ],
            [
                //"id" => 2,
                "name" => "Администратор",
                "login" => "adminBPM",
                "email" => "admin@admin.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "admin",
                "status" => 1,
                "create_ts" => "2020-03-10 12:07:48",
                "created_by" => 0,
                "change_date" => "2020-03-10 12:07:48",
                "drfo" => "0"
            ],
            [
                //"id" => 3,
                "name" => "Гость",
                "login" => "guestBPM",
                "email" => "guest@guest.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "guest",
                "status" => 1,
                "create_ts" => "2020-03-10 12:07:48",
                "created_by" => 0,
                "change_date" => "2020-03-10 12:07:48",
                "drfo" => "0"
            ],
            [
                //"id" => 4,
                "name" => "Константин Куцан",
                "login" => "kutsan.k",
                "email" => "kutsan.k@rozetka.com.ua",
                "team" => 1,
                "parent_id" => 1,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:32",
                "created_by" => 1,
                "change_date" => "2020-06-30 13:18:50",
                "drfo" => "'000000004"
            ],
            [
                //"id" => 5,
                "name" => "Супервайзер Руководько 1",
                "login" => "bpm_headSupervisor_1",
                "email" => "bpm_headSupervisor_1@rozetka.com.ua",
                "team" => 17,
                "parent_id" => 4,
                "position" => "headSupervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:33",
                "created_by" => 1,
                "change_date" => "2020-06-28 11:46:09",
                "drfo" => "'000000005"
            ],
            [
                //"id" => 6,
                "name" => "Супервайзер Начальникович 1",
                "login" => "bpm_supervisor_1",
                "email" => "bpm_supervisor_1@rozetka.com.ua",
                "team" => 1,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:33",
                "created_by" => 1,
                "change_date" => "2020-06-28 11:47:31",
                "drfo" => "'000000006"
            ],
            [
                //"id" => 7,
                "name" => "Splitter.Moderation",
                "login" => "splitter_moderation",
                "email" => "splitter_moderation@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-04-13 13:17:20",
                "created_by" => 1,
                "change_date" => "2020-04-13 13:17:20",
                "drfo" => "'000000007"
            ],
            [
                //"id" => 8,
                "name" => "Mobile Courier",
                "login" => "mobile_courier",
                "email" => "mobile_courier@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-04-13 13:17:20",
                "created_by" => 1,
                "change_date" => "2020-04-13 13:17:20",
                "drfo" => "0"
            ],
            [
                //"id" => 9,
                "name" => "JIRA COMI-запрос на замер",
                "login" => "jira_comi",
                "email" => "jira_comi@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-04-13 13:17:20",
                "created_by" => 1,
                "change_date" => "2020-04-13 13:17:20",
                "drfo" => "0"
            ],
            [
                //"id" => 10,
                "name" => "Супервайзер Начальникович 2",
                "login" => "bpm_supervisor_2",
                "email" => "bpm_supervisor_2@rozetka.com.ua",
                "team" => 7,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:34",
                "created_by" => 1,
                "change_date" => "2020-06-28 11:46:51",
                "drfo" => "'000000010"
            ],
            [
                //"id" => 11,
                "name" => "Менеджер Контентович 1А",
                "login" => "bpm_contentManager_1a",
                "email" => "bpm_contentManager_1a@rozetka.com.ua",
                "team" => 1,
                "parent_id" => 4,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:34",
                "created_by" => 1,
                "change_date" => "2020-06-28 11:47:12",
                "drfo" => "'000000011"
            ],
            [
                //"id" => 12,
                "name" => "Менеджер Контентович 1Б",
                "login" => "bpm_contentManager_1b",
                "email" => "bpm_contentManager_1b@rozetka.com.ua",
                "team" => 1,
                "parent_id" => 4,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:35",
                "created_by" => 1,
                "change_date" => "2020-06-28 11:47:21",
                "drfo" => "'000000012"
            ],
            [
                //"id" => 13,
                "name" => "Менеджер Контентович 2А",
                "login" => "bpm_contentManager_2a",
                "email" => "bpm_contentManager_2a@rozetka.com.ua",
                "team" => 7,
                "parent_id" => 10,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:35",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:40:25",
                "drfo" => "'000000013"
            ],
            [
                //"id" => 14,
                "name" => "Менеджер Контентович 2Б",
                "login" => "bpm_contentManager_2b",
                "email" => "bpm_contentManager_2b@rozetka.com.ua",
                "team" => 7,
                "parent_id" => 10,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:35",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:40:31",
                "drfo" => "'000000014"
            ],
            [
                //"id" => 15,
                "name" => "Тим Лидович 1",
                "login" => "bpm_teamLead_1",
                "email" => "bpm_teamLead_1@rozetka.com.ua",
                "team" => 19,
                "parent_id" => 4,
                "position" => "teamLead",
                "status" => 0,
                "create_ts" => "2020-04-13 13:15:35",
                "created_by" => 1,
                "change_date" => "2020-06-28 13:19:51",
                "drfo" => "'000000015"
            ],
            [
                //"id" => 16,
                "name" => "Тим Лидович 2",
                "login" => "bpm_teamLead_2",
                "email" => "bpm_teamLead_2@rozetka.com.ua",
                "team" => 19,
                "parent_id" => 4,
                "position" => "teamLead",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:36",
                "created_by" => 1,
                "change_date" => "2020-06-25 10:49:20",
                "drfo" => "'000000016"
            ],
            [
                //"id" => 17,
                "name" => "Менеджер Продактович 1",
                "login" => "bpm_productManager_1",
                "email" => "bpm_productManager_1@rozetka.com.ua",
                "team" => 19,
                "parent_id" => 4,
                "position" => "productManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:36",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:41:00",
                "drfo" => "'000000017"
            ],
            [
                //"id" => 18,
                "name" => "Менеджер Продактович 2",
                "login" => "bpm_productManager_2",
                "email" => "bpm_productManager_2@rozetka.com.ua",
                "team" => 19,
                "parent_id" => 4,
                "position" => "productManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:36",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:41:05",
                "drfo" => "'000000018"
            ],
            [
                //"id" => 19,
                "name" => "Сео Сеошевич 1",
                "login" => "bpm_seo_1",
                "email" => "bpm_seo_1@rozetka.com.ua",
                "team" => 20,
                "parent_id" => 4,
                "position" => "seo",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:37",
                "created_by" => 1,
                "change_date" => "2020-06-25 13:18:41",
                "drfo" => "'000000018"
            ],
            [
                //"id" => 20,
                "name" => "Сео Сеошевич 2",
                "login" => "bpm_seo_2",
                "email" => "bpm_seo_2@rozetka.com.ua",
                "team" => 20,
                "parent_id" => 4,
                "position" => "seo",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:37",
                "created_by" => 1,
                "change_date" => "2020-06-25 11:13:13",
                "drfo" => "0"
            ],
            [
                //"id" => 21,
                "name" => "Менеджер Фоткович 1",
                "login" => "bpm_photoManager_1",
                "email" => "bpm_photoManager_1@rozetka.com.ua",
                "team" => 21,
                "parent_id" => 4,
                "position" => "photoManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:37",
                "created_by" => 1,
                "change_date" => "2020-06-25 11:13:37",
                "drfo" => "0"
            ],
            [
                //"id" => 22,
                "name" => "Менеджер Фоткович 2",
                "login" => "bpm_photoManager_2",
                "email" => "bpm_photoManager_2@rozetka.com.ua",
                "team" => 21,
                "parent_id" => 4,
                "position" => "photoManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:37",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:41:42",
                "drfo" => "0"
            ],
            [
                //"id" => 23,
                "name" => "Супервайзер Начальникович 3",
                "login" => "bpm_supervisor_3",
                "email" => "bpm_supervisor_3@rozetka.com.ua",
                "team" => 9,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:37",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:42:34",
                "drfo" => "0"
            ],
            [
                //"id" => 24,
                "name" => "Супервайзер Начальникович 4",
                "login" => "bpm_supervisor_4",
                "email" => "bpm_supervisor_4@rozetka.com.ua",
                "team" => 2,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:38",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:42:39",
                "drfo" => "0"
            ],
            [
                //"id" => 25,
                "name" => "Супервайзер Начальникович 5",
                "login" => "bpm_supervisor_5",
                "email" => "bpm_supervisor_5@rozetka.com.ua",
                "team" => 3,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:39",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:42:43",
                "drfo" => "0"
            ],
            [
                //"id" => 26,
                "name" => "Супервайзер Начальникович 6",
                "login" => "bpm_supervisor_6",
                "email" => "bpm_supervisor_6@rozetka.com.ua",
                "team" => 4,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:39",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:42:47",
                "drfo" => "0"
            ],
            [
                //"id" => 27,
                "name" => "Супервайзер Начальникович 7",
                "login" => "bpm_supervisor_7",
                "email" => "bpm_supervisor_7@rozetka.com.ua",
                "team" => 8,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:40",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:42:52",
                "drfo" => "0"
            ],
            [
                //"id" => 28,
                "name" => "Супервайзер Начальникович 8",
                "login" => "bpm_supervisor_8",
                "email" => "bpm_supervisor_8@rozetka.com.ua",
                "team" => 9,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:40",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:43:24",
                "drfo" => "0"
            ],
            [
                //"id" => 29,
                "name" => "Супервайзер Начальникович 9",
                "login" => "bpm_supervisor_9",
                "email" => "bpm_supervisor_9@rozetka.com.ua",
                "team" => 10,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:41",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:43:30",
                "drfo" => "0"
            ],
            [
                //"id" => 30,
                "name" => "Супервайзер Начальникович 10",
                "login" => "bpm_supervisor_10",
                "email" => "bpm_supervisor_10@rozetka.com.ua",
                "team" => 11,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:41",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:43:35",
                "drfo" => "0"
            ],
            [
                //"id" => 31,
                "name" => "Супервайзер Начальникович 11",
                "login" => "bpm_supervisor_11",
                "email" => "bpm_supervisor_11@rozetka.com.ua",
                "team" => 12,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:42",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:43:39",
                "drfo" => "0"
            ],
            [
                //"id" => 32,
                "name" => "Супервайзер Начальникович 12",
                "login" => "bpm_supervisor_12",
                "email" => "bpm_supervisor_12@rozetka.com.ua",
                "team" => 13,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:42",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:43:44",
                "drfo" => "0"
            ],
            [
                //"id" => 33,
                "name" => "Супервайзер Групповушкин 13",
                "login" => "bpm_supervisor_13",
                "email" => "bpm_supervisor_13@rozetka.com.ua",
                "team" => 14,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:43",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:44:01",
                "drfo" => "0"
            ],
            [
                //"id" => 34,
                "name" => "Супервайзер Проектенко 14",
                "login" => "bpm_supervisor_14",
                "email" => "bpm_supervisor_14@rozetka.com.ua",
                "team" => 15,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:44",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:44:05",
                "drfo" => "0"
            ],
            [
                //"id" => 35,
                "name" => "Супервайзер Категоркин 15",
                "login" => "bpm_supervisor_15",
                "email" => "bpm_supervisor_15@rozetka.com.ua",
                "team" => 16,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:44",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:44:10",
                "drfo" => "0"
            ],
            [
                //"id" => 36,
                "name" => "Супервайзер Групповушкин 16",
                "login" => "bpm_supervisor_16",
                "email" => "bpm_supervisor_16@rozetka.com.ua",
                "team" => 14,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:45",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:44:28",
                "drfo" => "0"
            ],
            [
                //"id" => 37,
                "name" => "Супервайзер Проектенко 17",
                "login" => "bpm_supervisor_17",
                "email" => "bpm_supervisor_17@rozetka.com.ua",
                "team" => 15,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:45",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:44:32",
                "drfo" => "0"
            ],
            [
                //"id" => 38,
                "name" => "Супервайзер Категоркин 18",
                "login" => "bpm_supervisor_18",
                "email" => "bpm_supervisor_18@rozetka.com.ua",
                "team" => 16,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:46",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:44:36",
                "drfo" => "0"
            ],
            [
                //"id" => 39,
                "name" => "Менеджер Модерашкин",
                "login" => "bpm_moderation",
                "email" => "bpm_moderation@rozetka.com.ua",
                "team" => null,
                "parent_id" => 1,
                "position" => "moderator",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:46",
                "created_by" => 1,
                "change_date" => "2020-06-24 08:44:54",
                "drfo" => "0"
            ],
        ],
        "auth.auth_item" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        "auth.auth_assignment" => [
            [
                "user_id" => 4,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "reportLoadYourTeam"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewDashboardsByCommand"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestViewDirectionRequests"
            ],
            [
                "user_id" => 4,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 4,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToRequireFix"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToWaitCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferDeclinedToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToWaitWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToAny"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferAnyToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferClosedToAny"
            ],
            [
                "user_id" => 5,
                "item_name" => "reportLoadMarketUsers"
            ],
            [
                "user_id" => 5,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 5,
                "item_name" => "viewDashboardsByDirection"
            ],
            [
                "user_id" => 5,
                "item_name" => "blockUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "updateUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "createUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 5,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "user_id" => 5,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToWaitWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInCheckToWaitWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitCheckToRequireChange"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitCheckToWaitWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitCheckToDeclined"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitWorkToDeclined"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferOnHoldToCompleted"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferOnHoldToPartialComplete"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferPartialCompleteToClosed"
            ],
            [
                "user_id" => 6,
                "item_name" => "reportLoadYourTeam"
            ],
            [
                "user_id" => 6,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 6,
                "item_name" => "viewDashboardsByCommand"
            ],
            [
                "user_id" => 6,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 6,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 6,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 6,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestViewDirectionRequests"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 6,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInWorkToWaitWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInCheckToWaitWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferWaitCheckToRequireChange"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferWaitCheckToWaitWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferWaitCheckToDeclined"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferWaitWorkToDeclined"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferOnHoldToCompleted"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferOnHoldToPartialComplete"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 6,
                "item_name" => "transferPartialCompleteToClosed"
            ],
            [
                "user_id" => 10,
                "item_name" => "reportLoadYourTeam"
            ],
            [
                "user_id" => 10,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 10,
                "item_name" => "viewDashboardsByCommand"
            ],
            [
                "user_id" => 10,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 10,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 10,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 10,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestViewDirectionRequests"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 10,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInWorkToWaitWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInCheckToWaitWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferWaitCheckToRequireChange"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferWaitCheckToWaitWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferWaitCheckToDeclined"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferWaitWorkToDeclined"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferOnHoldToCompleted"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferOnHoldToPartialComplete"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 10,
                "item_name" => "transferPartialCompleteToClosed"
            ],
            [
                "user_id" => 11,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 11,
                "item_name" => "viewOwnDashboards"
            ],
            [
                "user_id" => 11,
                "item_name" => "requestViewOwnRequests"
            ],
            [
                "user_id" => 11,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 11,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 11,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 11,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 11,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 11,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 11,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 12,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 12,
                "item_name" => "viewOwnDashboards"
            ],
            [
                "user_id" => 12,
                "item_name" => "requestViewOwnRequests"
            ],
            [
                "user_id" => 12,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 12,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 12,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 12,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 12,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 12,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 12,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 13,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 13,
                "item_name" => "viewOwnDashboards"
            ],
            [
                "user_id" => 13,
                "item_name" => "requestViewOwnRequests"
            ],
            [
                "user_id" => 13,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 13,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 13,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 13,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 13,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 13,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 13,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 14,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 14,
                "item_name" => "viewOwnDashboards"
            ],
            [
                "user_id" => 14,
                "item_name" => "requestViewOwnRequests"
            ],
            [
                "user_id" => 14,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 14,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 14,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 14,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 14,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "user_id" => 14,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 14,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestViewTeamRequests"
            ],
            [
                "user_id" => 15,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 15,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 15,
                "item_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                "user_id" => 15,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestViewTeamRequests"
            ],
            [
                "user_id" => 16,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 16,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 16,
                "item_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                "user_id" => 16,
                "item_name" => "transferOnHoldToInWork"
            ]
        ]
    ],
    "gomer_fixtures" => [
        "users" => [
            [
                "id" => 1,
                "username" => "kutsan.k",
                "auth_key" => "WXkN0YPJ3zjiyIptDy4NzCYQnSn4Qejo",
                "password_hash" => '$2y$13$C9087r6ipKg6Q9Q.2ykXHuHFsBriKMGAbpGCqs6ezLpNWatKnTxPi',
                "password_reset_token" => null,
                "email" => "kutsan.k@rozetka.com.ua",
                "created_at" => 1584396309,
                "updated_at" => 1584475046,
                "status" => 1,
                "color" => null,
                "first_name" => "Куцан",
                "second_name" => "Константин",
                "avatar_image" => null,
                "reason_for_edit" => "kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k",
                "ldap_sync_code" => null,
                "site_theme" => null
            ],
        ],
    ],
];