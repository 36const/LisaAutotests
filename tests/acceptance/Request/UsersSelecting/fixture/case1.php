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
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "default_role_permissions" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/default_role_permissions.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "user_bpm" => [
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
        "user_permissions" => [
            [
                //"id" => 2,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 3,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 5,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 6,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 7,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 8,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 9,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 13,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 16,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 28,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 29,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 30,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 31,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 33,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 36,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 37,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 38,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 39,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 40,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 41,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 42,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 43,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 44,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 45,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 46,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 47,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 48,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 49,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 50,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 51,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 52,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 53,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 54,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 55,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 56,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 57,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 58,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 59,
                "user_id" => 4,
                "permission_name" => "transferInCheckToWaitCheck"
            ],
            [
                //"id" => 60,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 61,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 62,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToWaitCheck"
            ],
            [
                //"id" => 63,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 64,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToInCheck"
            ],
            [
                //"id" => 65,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToRequireChange"
            ],
            [
                //"id" => 66,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToDeclined"
            ],
            [
                //"id" => 67,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToWaitCheck"
            ],
            [
                //"id" => 68,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 69,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInCheck"
            ],
            [
                //"id" => 70,
                "user_id" => 4,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 71,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToRequireChange"
            ],
            [
                //"id" => 72,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitWork"
            ],
            [
                //"id" => 73,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 74,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToWaitWork"
            ],
            [
                //"id" => 75,
                "user_id" => 4,
                "permission_name" => "transferInWorkToWaitCheck"
            ],
            [
                //"id" => 76,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInWork"
            ],
            [
                //"id" => 77,
                "user_id" => 4,
                "permission_name" => "transferInWorkToInCheck"
            ],
            [
                //"id" => 78,
                "user_id" => 4,
                "permission_name" => "transferInCheckToInWork"
            ],
            [
                //"id" => 79,
                "user_id" => 4,
                "permission_name" => "transferInWorkToRequireChange"
            ],
            [
                //"id" => 80,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInWork"
            ],
            [
                //"id" => 81,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToInWork"
            ],
            [
                //"id" => 82,
                "user_id" => 4,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 83,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToWaitCheck"
            ],
            [
                //"id" => 84,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToOnHold"
            ],
            [
                //"id" => 85,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInCheck"
            ],
            [
                //"id" => 86,
                "user_id" => 4,
                "permission_name" => "transferInCheckToOnHold"
            ],
            [
                //"id" => 87,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToRequireChange"
            ],
            [
                //"id" => 88,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToOnHold"
            ],
            [
                //"id" => 89,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToDeclined"
            ],
            [
                //"id" => 90,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToOnHold"
            ],
            [
                //"id" => 91,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToWaitWork"
            ],
            [
                //"id" => 92,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToOnHold"
            ],
            [
                //"id" => 93,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToWaitCheck"
            ],
            [
                //"id" => 94,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToPartialComplete"
            ],
            [
                //"id" => 95,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToInCheck"
            ],
            [
                //"id" => 96,
                "user_id" => 4,
                "permission_name" => "transferInCheckToPartialComplete"
            ],
            [
                //"id" => 97,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToRequireChange"
            ],
            [
                //"id" => 98,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToPartialComplete"
            ],
            [
                //"id" => 99,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToDeclined"
            ],
            [
                //"id" => 100,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToPartialComplete"
            ],
            [
                //"id" => 101,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToWaitWork"
            ],
            [
                //"id" => 102,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToPartialComplete"
            ],
            [
                //"id" => 103,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 104,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToOnHold"
            ],
            [
                //"id" => 105,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToPartialComplete"
            ],
            [
                //"id" => 106,
                "user_id" => 4,
                "permission_name" => "transferCompletedToWaitCheck"
            ],
            [
                //"id" => 107,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToCompleted"
            ],
            [
                //"id" => 108,
                "user_id" => 4,
                "permission_name" => "transferCompletedToInCheck"
            ],
            [
                //"id" => 109,
                "user_id" => 4,
                "permission_name" => "transferInCheckToCompleted"
            ],
            [
                //"id" => 110,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireChange"
            ],
            [
                //"id" => 111,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToCompleted"
            ],
            [
                //"id" => 112,
                "user_id" => 4,
                "permission_name" => "transferCompletedToDeclined"
            ],
            [
                //"id" => 113,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToCompleted"
            ],
            [
                //"id" => 114,
                "user_id" => 4,
                "permission_name" => "transferCompletedToWaitWork"
            ],
            [
                //"id" => 115,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToCompleted"
            ],
            [
                //"id" => 116,
                "user_id" => 4,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 117,
                "user_id" => 4,
                "permission_name" => "transferCompletedToOnHold"
            ],
            [
                //"id" => 118,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToCompleted"
            ],
            [
                //"id" => 119,
                "user_id" => 4,
                "permission_name" => "transferCompletedToPartialComplete"
            ],
            [
                //"id" => 120,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToCompleted"
            ],
            [
                //"id" => 121,
                "user_id" => 4,
                "permission_name" => "transferClosedToWaitCheck"
            ],
            [
                //"id" => 122,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToClosed"
            ],
            [
                //"id" => 123,
                "user_id" => 4,
                "permission_name" => "transferClosedToInCheck"
            ],
            [
                //"id" => 124,
                "user_id" => 4,
                "permission_name" => "transferInCheckToClosed"
            ],
            [
                //"id" => 125,
                "user_id" => 4,
                "permission_name" => "transferClosedToRequireChange"
            ],
            [
                //"id" => 126,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToClosed"
            ],
            [
                //"id" => 127,
                "user_id" => 4,
                "permission_name" => "transferClosedToDeclined"
            ],
            [
                //"id" => 128,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToClosed"
            ],
            [
                //"id" => 129,
                "user_id" => 4,
                "permission_name" => "transferClosedToWaitWork"
            ],
            [
                //"id" => 130,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToClosed"
            ],
            [
                //"id" => 131,
                "user_id" => 4,
                "permission_name" => "transferClosedToInWork"
            ],
            [
                //"id" => 132,
                "user_id" => 4,
                "permission_name" => "transferInWorkToClosed"
            ],
            [
                //"id" => 133,
                "user_id" => 4,
                "permission_name" => "transferClosedToOnHold"
            ],
            [
                //"id" => 134,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToClosed"
            ],
            [
                //"id" => 135,
                "user_id" => 4,
                "permission_name" => "transferClosedToPartialComplete"
            ],
            [
                //"id" => 136,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 137,
                "user_id" => 4,
                "permission_name" => "transferClosedToCompleted"
            ],
            [
                //"id" => 138,
                "user_id" => 4,
                "permission_name" => "transferAnyToWaitCheck"
            ],
            [
                //"id" => 139,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToAny"
            ],
            [
                //"id" => 140,
                "user_id" => 4,
                "permission_name" => "transferAnyToInCheck"
            ],
            [
                //"id" => 141,
                "user_id" => 4,
                "permission_name" => "transferInCheckToAny"
            ],
            [
                //"id" => 142,
                "user_id" => 4,
                "permission_name" => "transferAnyToRequireChange"
            ],
            [
                //"id" => 143,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToAny"
            ],
            [
                //"id" => 144,
                "user_id" => 4,
                "permission_name" => "transferAnyToDeclined"
            ],
            [
                //"id" => 145,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToAny"
            ],
            [
                //"id" => 146,
                "user_id" => 4,
                "permission_name" => "transferAnyToWaitWork"
            ],
            [
                //"id" => 147,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToAny"
            ],
            [
                //"id" => 148,
                "user_id" => 4,
                "permission_name" => "transferAnyToInWork"
            ],
            [
                //"id" => 149,
                "user_id" => 4,
                "permission_name" => "transferInWorkToAny"
            ],
            [
                //"id" => 150,
                "user_id" => 4,
                "permission_name" => "transferAnyToOnHold"
            ],
            [
                //"id" => 151,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToAny"
            ],
            [
                //"id" => 152,
                "user_id" => 4,
                "permission_name" => "transferAnyToPartialComplete"
            ],
            [
                //"id" => 153,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToAny"
            ],
            [
                //"id" => 154,
                "user_id" => 4,
                "permission_name" => "transferAnyToCompleted"
            ],
            [
                //"id" => 155,
                "user_id" => 4,
                "permission_name" => "transferCompletedToAny"
            ],
            [
                //"id" => 156,
                "user_id" => 4,
                "permission_name" => "transferAnyToClosed"
            ],
            [
                //"id" => 157,
                "user_id" => 4,
                "permission_name" => "transferClosedToAny"
            ],
            [
                //"id" => 158,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 335,
                "user_id" => 5,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 336,
                "user_id" => 5,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 337,
                "user_id" => 5,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 338,
                "user_id" => 5,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 339,
                "user_id" => 5,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 340,
                "user_id" => 5,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 341,
                "user_id" => 5,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 342,
                "user_id" => 5,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 343,
                "user_id" => 5,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 344,
                "user_id" => 5,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 345,
                "user_id" => 5,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 346,
                "user_id" => 5,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 347,
                "user_id" => 5,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 348,
                "user_id" => 5,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 349,
                "user_id" => 5,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 350,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 351,
                "user_id" => 5,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 352,
                "user_id" => 5,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 353,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 354,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 355,
                "user_id" => 5,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 356,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 357,
                "user_id" => 5,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 358,
                "user_id" => 5,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 359,
                "user_id" => 5,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 360,
                "user_id" => 5,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 361,
                "user_id" => 5,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 362,
                "user_id" => 5,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 363,
                "user_id" => 5,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 364,
                "user_id" => 5,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 365,
                "user_id" => 5,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 366,
                "user_id" => 5,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 367,
                "user_id" => 5,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 368,
                "user_id" => 5,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 369,
                "user_id" => 5,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 370,
                "user_id" => 5,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 371,
                "user_id" => 5,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 372,
                "user_id" => 5,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 373,
                "user_id" => 5,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 374,
                "user_id" => 5,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 375,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 376,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 377,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 378,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 379,
                "user_id" => 5,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 380,
                "user_id" => 5,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 381,
                "user_id" => 5,
                "permission_name" => "transferOnHoldToCompleted"
            ],
            [
                //"id" => 382,
                "user_id" => 5,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 383,
                "user_id" => 5,
                "permission_name" => "transferOnHoldToPartialComplete"
            ],
            [
                //"id" => 384,
                "user_id" => 5,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 385,
                "user_id" => 5,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 287,
                "user_id" => 6,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 288,
                "user_id" => 6,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 289,
                "user_id" => 6,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 290,
                "user_id" => 6,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 291,
                "user_id" => 6,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 292,
                "user_id" => 6,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 293,
                "user_id" => 6,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 294,
                "user_id" => 6,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 295,
                "user_id" => 6,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 296,
                "user_id" => 6,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 297,
                "user_id" => 6,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 298,
                "user_id" => 6,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 299,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 300,
                "user_id" => 6,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 301,
                "user_id" => 6,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 302,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 303,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 304,
                "user_id" => 6,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 305,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 306,
                "user_id" => 6,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 307,
                "user_id" => 6,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 308,
                "user_id" => 6,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 309,
                "user_id" => 6,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 310,
                "user_id" => 6,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 311,
                "user_id" => 6,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 312,
                "user_id" => 6,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 313,
                "user_id" => 6,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 314,
                "user_id" => 6,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 315,
                "user_id" => 6,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 316,
                "user_id" => 6,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 317,
                "user_id" => 6,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 318,
                "user_id" => 6,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 319,
                "user_id" => 6,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 320,
                "user_id" => 6,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 321,
                "user_id" => 6,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 322,
                "user_id" => 6,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 323,
                "user_id" => 6,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 324,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 325,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 326,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 327,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 328,
                "user_id" => 6,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 329,
                "user_id" => 6,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 330,
                "user_id" => 6,
                "permission_name" => "transferOnHoldToCompleted"
            ],
            [
                //"id" => 331,
                "user_id" => 6,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 332,
                "user_id" => 6,
                "permission_name" => "transferOnHoldToPartialComplete"
            ],
            [
                //"id" => 333,
                "user_id" => 6,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 334,
                "user_id" => 6,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 239,
                "user_id" => 10,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 240,
                "user_id" => 10,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 241,
                "user_id" => 10,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 242,
                "user_id" => 10,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 243,
                "user_id" => 10,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 244,
                "user_id" => 10,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 245,
                "user_id" => 10,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 246,
                "user_id" => 10,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 247,
                "user_id" => 10,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 248,
                "user_id" => 10,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 249,
                "user_id" => 10,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 250,
                "user_id" => 10,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 251,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 252,
                "user_id" => 10,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 253,
                "user_id" => 10,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 254,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 255,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 256,
                "user_id" => 10,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 257,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 258,
                "user_id" => 10,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 259,
                "user_id" => 10,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 260,
                "user_id" => 10,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 261,
                "user_id" => 10,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 262,
                "user_id" => 10,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 263,
                "user_id" => 10,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 264,
                "user_id" => 10,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 265,
                "user_id" => 10,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 266,
                "user_id" => 10,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 267,
                "user_id" => 10,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 268,
                "user_id" => 10,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 269,
                "user_id" => 10,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 270,
                "user_id" => 10,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 271,
                "user_id" => 10,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 272,
                "user_id" => 10,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 273,
                "user_id" => 10,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 274,
                "user_id" => 10,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 275,
                "user_id" => 10,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 276,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 277,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 278,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 279,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 280,
                "user_id" => 10,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 281,
                "user_id" => 10,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 282,
                "user_id" => 10,
                "permission_name" => "transferOnHoldToCompleted"
            ],
            [
                //"id" => 283,
                "user_id" => 10,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 284,
                "user_id" => 10,
                "permission_name" => "transferOnHoldToPartialComplete"
            ],
            [
                //"id" => 285,
                "user_id" => 10,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 286,
                "user_id" => 10,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 229,
                "user_id" => 11,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 230,
                "user_id" => 11,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 231,
                "user_id" => 11,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 232,
                "user_id" => 11,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 233,
                "user_id" => 11,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 234,
                "user_id" => 11,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 235,
                "user_id" => 11,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 236,
                "user_id" => 11,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 237,
                "user_id" => 11,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 238,
                "user_id" => 11,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 219,
                "user_id" => 12,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 220,
                "user_id" => 12,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 221,
                "user_id" => 12,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 222,
                "user_id" => 12,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 223,
                "user_id" => 12,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 224,
                "user_id" => 12,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 225,
                "user_id" => 12,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 226,
                "user_id" => 12,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 227,
                "user_id" => 12,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 228,
                "user_id" => 12,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 209,
                "user_id" => 13,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 210,
                "user_id" => 13,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 211,
                "user_id" => 13,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 212,
                "user_id" => 13,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 213,
                "user_id" => 13,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 214,
                "user_id" => 13,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 215,
                "user_id" => 13,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 216,
                "user_id" => 13,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 217,
                "user_id" => 13,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 218,
                "user_id" => 13,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 199,
                "user_id" => 14,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 200,
                "user_id" => 14,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 201,
                "user_id" => 14,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 202,
                "user_id" => 14,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 203,
                "user_id" => 14,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 204,
                "user_id" => 14,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 205,
                "user_id" => 14,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 206,
                "user_id" => 14,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 207,
                "user_id" => 14,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 208,
                "user_id" => 14,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 179,
                "user_id" => 15,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 180,
                "user_id" => 15,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 181,
                "user_id" => 15,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 182,
                "user_id" => 15,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 183,
                "user_id" => 15,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 184,
                "user_id" => 15,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 185,
                "user_id" => 15,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 186,
                "user_id" => 15,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 187,
                "user_id" => 15,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 188,
                "user_id" => 15,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 189,
                "user_id" => 15,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 190,
                "user_id" => 15,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 191,
                "user_id" => 15,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 192,
                "user_id" => 15,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 193,
                "user_id" => 15,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 194,
                "user_id" => 15,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 195,
                "user_id" => 15,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 196,
                "user_id" => 15,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 197,
                "user_id" => 15,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 198,
                "user_id" => 15,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 159,
                "user_id" => 16,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 160,
                "user_id" => 16,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 161,
                "user_id" => 16,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 162,
                "user_id" => 16,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 163,
                "user_id" => 16,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 164,
                "user_id" => 16,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 165,
                "user_id" => 16,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 166,
                "user_id" => 16,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 167,
                "user_id" => 16,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 168,
                "user_id" => 16,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 169,
                "user_id" => 16,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 170,
                "user_id" => 16,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 171,
                "user_id" => 16,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 172,
                "user_id" => 16,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 173,
                "user_id" => 16,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 174,
                "user_id" => 16,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 175,
                "user_id" => 16,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 176,
                "user_id" => 16,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 177,
                "user_id" => 16,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 178,
                "user_id" => 16,
                "permission_name" => "transferOnHoldToInWork"
            ]
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
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