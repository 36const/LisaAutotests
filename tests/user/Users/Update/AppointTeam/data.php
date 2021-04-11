<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Групповое изменение команды у нескольких пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'keys' => '5,6,8,11,15,30',
                'team' => 8
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
                        [
                            "id" => 1,
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
                            "id" => 2,
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
                            "id" => 3,
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
                            "id" => 4,
                            "name" => "Константин Куцан",
                            "login" => "kutsan.k",
                            "email" => "kutsan.k@rozetka.com.ua",
                            "team" => 17,
                            "parent_id" => 1,
                            "position" => "admin",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:32",
                            "created_by" => 1,
                            "change_date" => "2020-06-30 13:18:50",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
                            "name" => "Супервайзер Руководько 1",
                            "login" => "bpm_headSupervisor_1",
                            "email" => "bpm_headSupervisor_1@rozetka.com.ua",
                            "team" => 8,
                            "parent_id" => 4,
                            "position" => "headSupervisor",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:33",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000005"
                        ],
                        [
                            "id" => 6,
                            "name" => "Супервайзер Начальникович 1",
                            "login" => "bpm_supervisor_1",
                            "email" => "bpm_supervisor_1@rozetka.com.ua",
                            "team" => 8,
                            "parent_id" => 5,
                            "position" => "supervisor",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:33",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000006"
                        ],
                        [
                            "id" => 7,
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
                            "id" => 8,
                            "name" => "Mobile Courier",
                            "login" => "mobile_courier",
                            "email" => "mobile_courier@rozetka.com.ua",
                            "team" => 8,
                            "parent_id" => 0,
                            "position" => "system",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:17:20",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "0"
                        ],
                        [
                            "id" => 9,
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
                            "id" => 10,
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
                            "id" => 11,
                            "name" => "Менеджер Контентович 1А",
                            "login" => "bpm_contentManager_1a",
                            "email" => "bpm_contentManager_1a@rozetka.com.ua",
                            "team" => 8,
                            "parent_id" => 6,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:34",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000011"
                        ],
                        [
                            "id" => 12,
                            "name" => "Менеджер Контентович 1Б",
                            "login" => "bpm_contentManager_1b",
                            "email" => "bpm_contentManager_1b@rozetka.com.ua",
                            "team" => 1,
                            "parent_id" => 6,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:35",
                            "created_by" => 1,
                            "change_date" => "2020-06-28 11:47:21",
                            "drfo" => "'000000012"
                        ],
                        [
                            "id" => 13,
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
                            "id" => 14,
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
                            "id" => 15,
                            "name" => "Тим Лидович 1",
                            "login" => "bpm_teamLead_1",
                            "email" => "bpm_teamLead_1@rozetka.com.ua",
                            "team" => 8,
                            "parent_id" => 4,
                            "position" => "teamLead",
                            "status" => 0,
                            "create_ts" => "2020-04-13 13:15:35",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000015"
                        ],
                        [
                            "id" => 16,
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
                            "id" => 17,
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
                            "id" => 18,
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
                            "id" => 19,
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
                            "id" => 20,
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
                            "id" => 21,
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
                            "id" => 22,
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
                            "id" => 23,
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
                            "id" => 24,
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
                            "id" => 25,
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
                            "id" => 26,
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
                            "id" => 27,
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
                            "id" => 28,
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
                            "id" => 29,
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
                            "id" => 30,
                            "name" => "Супервайзер Начальникович 10",
                            "login" => "bpm_supervisor_10",
                            "email" => "bpm_supervisor_10@rozetka.com.ua",
                            "team" => 8,
                            "parent_id" => 5,
                            "position" => "supervisor",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:41",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "0"
                        ],
                        [
                            "id" => 31,
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
                            "id" => 32,
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
                            "id" => 33,
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
                            "id" => 34,
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
                            "id" => 35,
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
                            "id" => 36,
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
                            "id" => 37,
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
                            "id" => 38,
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
                            "id" => 39,
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
                    "auth.auth_assignment" => [
                        [
                            //"id" => 3143,
                            "user_id" => 4,
                            "item_name" => "updateUser"
                        ],
                        [
                            //"id" => 3144,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            //"id" => 3151,
                            "user_id" => 4,
                            "item_name" => "viewUser"
                        ],
                        [
                            //"id" => 3162,
                            "user_id" => 4,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 3167,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 3168,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 3169,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 3170,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 3171,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 3214,
                            "user_id" => 4,
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            //"id" => 3256,
                            "user_id" => 4,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 3257,
                            "user_id" => 4,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 3258,
                            "user_id" => 4,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 3259,
                            "user_id" => 4,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            //"id" => 3260,
                            "user_id" => 4,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            //"id" => 3261,
                            "user_id" => 4,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            //"id" => 3262,
                            "user_id" => 4,
                            "item_name" => "createUser"
                        ],
                        [
                            //"id" => 3263,
                            "user_id" => 4,
                            "item_name" => "blockUser"
                        ],
                        [
                            //"id" => 3264,
                            "user_id" => 4,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 3265,
                            "user_id" => 4,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 3266,
                            "user_id" => 4,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 3267,
                            "user_id" => 4,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 3268,
                            "user_id" => 4,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 3269,
                            "user_id" => 4,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 3270,
                            "user_id" => 4,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 3271,
                            "user_id" => 4,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 3272,
                            "user_id" => 4,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 3273,
                            "user_id" => 4,
                            "item_name" => "requestCreate"
                        ],
                        [
                            //"id" => 3274,
                            "user_id" => 4,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 3275,
                            "user_id" => 4,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 3276,
                            "user_id" => 4,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 3277,
                            "user_id" => 4,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 3278,
                            "user_id" => 4,
                            "item_name" => "massEdit"
                        ],
                        [
                            //"id" => 3279,
                            "user_id" => 4,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 3280,
                            "user_id" => 4,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 3281,
                            "user_id" => 4,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 3282,
                            "user_id" => 4,
                            "item_name" => "takeToWork"
                        ],
                        [
                            //"id" => 3283,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 3284,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 3285,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 3286,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 3287,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 3288,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 3290,
                            "user_id" => 4,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 3291,
                            "user_id" => 4,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 3292,
                            "user_id" => 4,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 3293,
                            "user_id" => 4,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 3294,
                            "user_id" => 4,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 3295,
                            "user_id" => 4,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 3296,
                            "user_id" => 4,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 3297,
                            "user_id" => 4,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 3298,
                            "user_id" => 4,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 3299,
                            "user_id" => 4,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 3300,
                            "user_id" => 4,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 3301,
                            "user_id" => 4,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 3302,
                            "user_id" => 4,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 3303,
                            "user_id" => 4,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 3304,
                            "user_id" => 4,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 3317,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToWaitCheck"
                        ],
                        [
                            //"id" => 3341,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            //"id" => 3365,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            //"id" => 3389,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToWaitCheck"
                        ],
                        [
                            //"id" => 3413,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            //"id" => 3437,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToInCheck"
                        ],
                        [
                            //"id" => 3461,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToRequireChange"
                        ],
                        [
                            //"id" => 3485,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToDeclined"
                        ],
                        [
                            //"id" => 3509,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToWaitCheck"
                        ],
                        [
                            //"id" => 3533,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            //"id" => 3557,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToInCheck"
                        ],
                        [
                            //"id" => 3581,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            //"id" => 3605,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToRequireChange"
                        ],
                        [
                            //"id" => 3629,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToWaitWork"
                        ],
                        [
                            //"id" => 3653,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            //"id" => 3677,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToWaitWork"
                        ],
                        [
                            //"id" => 3701,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToWaitCheck"
                        ],
                        [
                            //"id" => 3725,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToInWork"
                        ],
                        [
                            //"id" => 3749,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToInCheck"
                        ],
                        [
                            //"id" => 3773,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToInWork"
                        ],
                        [
                            //"id" => 3797,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToRequireChange"
                        ],
                        [
                            //"id" => 3821,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToInWork"
                        ],
                        [
                            //"id" => 3845,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToInWork"
                        ],
                        [
                            //"id" => 3869,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            //"id" => 3893,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToWaitCheck"
                        ],
                        [
                            //"id" => 3917,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToOnHold"
                        ],
                        [
                            //"id" => 3941,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToInCheck"
                        ],
                        [
                            //"id" => 3965,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToOnHold"
                        ],
                        [
                            //"id" => 3989,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToRequireChange"
                        ],
                        [
                            //"id" => 4013,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToOnHold"
                        ],
                        [
                            //"id" => 4037,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToDeclined"
                        ],
                        [
                            //"id" => 4061,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToOnHold"
                        ],
                        [
                            //"id" => 4085,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToWaitWork"
                        ],
                        [
                            //"id" => 4109,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToOnHold"
                        ],
                        [
                            //"id" => 4133,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToWaitCheck"
                        ],
                        [
                            //"id" => 4157,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToPartialComplete"
                        ],
                        [
                            //"id" => 4181,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToInCheck"
                        ],
                        [
                            //"id" => 4205,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToPartialComplete"
                        ],
                        [
                            //"id" => 4229,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToRequireChange"
                        ],
                        [
                            //"id" => 4253,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToPartialComplete"
                        ],
                        [
                            //"id" => 4277,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToDeclined"
                        ],
                        [
                            //"id" => 4301,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToPartialComplete"
                        ],
                        [
                            //"id" => 4325,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToWaitWork"
                        ],
                        [
                            //"id" => 4349,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToPartialComplete"
                        ],
                        [
                            //"id" => 4373,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            //"id" => 4397,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToOnHold"
                        ],
                        [
                            //"id" => 4421,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToPartialComplete"
                        ],
                        [
                            //"id" => 4445,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToWaitCheck"
                        ],
                        [
                            //"id" => 4469,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToCompleted"
                        ],
                        [
                            //"id" => 4493,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToInCheck"
                        ],
                        [
                            //"id" => 4517,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToCompleted"
                        ],
                        [
                            //"id" => 4541,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToRequireChange"
                        ],
                        [
                            //"id" => 4565,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToCompleted"
                        ],
                        [
                            //"id" => 4589,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToDeclined"
                        ],
                        [
                            //"id" => 4613,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToCompleted"
                        ],
                        [
                            //"id" => 4637,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToWaitWork"
                        ],
                        [
                            //"id" => 4661,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToCompleted"
                        ],
                        [
                            //"id" => 4685,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToInWork"
                        ],
                        [
                            //"id" => 4709,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToOnHold"
                        ],
                        [
                            //"id" => 4733,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToCompleted"
                        ],
                        [
                            //"id" => 4757,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToPartialComplete"
                        ],
                        [
                            //"id" => 4781,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToCompleted"
                        ],
                        [
                            //"id" => 4805,
                            "user_id" => 4,
                            "item_name" => "transferClosedToWaitCheck"
                        ],
                        [
                            //"id" => 4829,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToClosed"
                        ],
                        [
                            //"id" => 4853,
                            "user_id" => 4,
                            "item_name" => "transferClosedToInCheck"
                        ],
                        [
                            //"id" => 4877,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToClosed"
                        ],
                        [
                            //"id" => 4901,
                            "user_id" => 4,
                            "item_name" => "transferClosedToRequireChange"
                        ],
                        [
                            //"id" => 4925,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToClosed"
                        ],
                        [
                            //"id" => 4949,
                            "user_id" => 4,
                            "item_name" => "transferClosedToDeclined"
                        ],
                        [
                            //"id" => 4973,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToClosed"
                        ],
                        [
                            //"id" => 4997,
                            "user_id" => 4,
                            "item_name" => "transferClosedToWaitWork"
                        ],
                        [
                            //"id" => 5021,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToClosed"
                        ],
                        [
                            //"id" => 5045,
                            "user_id" => 4,
                            "item_name" => "transferClosedToInWork"
                        ],
                        [
                            //"id" => 5069,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToClosed"
                        ],
                        [
                            //"id" => 5093,
                            "user_id" => 4,
                            "item_name" => "transferClosedToOnHold"
                        ],
                        [
                            //"id" => 5117,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToClosed"
                        ],
                        [
                            //"id" => 5141,
                            "user_id" => 4,
                            "item_name" => "transferClosedToPartialComplete"
                        ],
                        [
                            //"id" => 5165,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            //"id" => 5189,
                            "user_id" => 4,
                            "item_name" => "transferClosedToCompleted"
                        ],
                        [
                            //"id" => 5213,
                            "user_id" => 4,
                            "item_name" => "transferAnyToWaitCheck"
                        ],
                        [
                            //"id" => 5237,
                            "user_id" => 4,
                            "item_name" => "transferWaitCheckToAny"
                        ],
                        [
                            //"id" => 5261,
                            "user_id" => 4,
                            "item_name" => "transferAnyToInCheck"
                        ],
                        [
                            //"id" => 5285,
                            "user_id" => 4,
                            "item_name" => "transferInCheckToAny"
                        ],
                        [
                            //"id" => 5309,
                            "user_id" => 4,
                            "item_name" => "transferAnyToRequireChange"
                        ],
                        [
                            //"id" => 5333,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToAny"
                        ],
                        [
                            //"id" => 5357,
                            "user_id" => 4,
                            "item_name" => "transferAnyToDeclined"
                        ],
                        [
                            //"id" => 5381,
                            "user_id" => 4,
                            "item_name" => "transferDeclinedToAny"
                        ],
                        [
                            //"id" => 5405,
                            "user_id" => 4,
                            "item_name" => "transferAnyToWaitWork"
                        ],
                        [
                            //"id" => 5429,
                            "user_id" => 4,
                            "item_name" => "transferWaitWorkToAny"
                        ],
                        [
                            //"id" => 5453,
                            "user_id" => 4,
                            "item_name" => "transferAnyToInWork"
                        ],
                        [
                            //"id" => 5477,
                            "user_id" => 4,
                            "item_name" => "transferInWorkToAny"
                        ],
                        [
                            //"id" => 5501,
                            "user_id" => 4,
                            "item_name" => "transferAnyToOnHold"
                        ],
                        [
                            //"id" => 5525,
                            "user_id" => 4,
                            "item_name" => "transferOnHoldToAny"
                        ],
                        [
                            //"id" => 5549,
                            "user_id" => 4,
                            "item_name" => "transferAnyToPartialComplete"
                        ],
                        [
                            //"id" => 5573,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToAny"
                        ],
                        [
                            //"id" => 5597,
                            "user_id" => 4,
                            "item_name" => "transferAnyToCompleted"
                        ],
                        [
                            //"id" => 5621,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToAny"
                        ],
                        [
                            //"id" => 5645,
                            "user_id" => 4,
                            "item_name" => "transferAnyToClosed"
                        ],
                        [
                            //"id" => 5669,
                            "user_id" => 4,
                            "item_name" => "transferClosedToAny"
                        ],
                        [
                            //"id" => 5715,
                            "user_id" => 4,
                            "item_name" => "updateTemplates"
                        ],
                        [
                            //"id" => 5715,
                            "user_id" => 4,
                            "item_name" => "seeAllTemplates"
                        ],
                        [
                            //"id" => 5715,
                            "user_id" => 4,
                            "item_name" => "seeDirectionTemplates"
                        ],
                        [
                            //"id" => 5715,
                            "user_id" => 4,
                            "item_name" => "seeTeamTemplates"
                        ],

                        [
                            'created_at' => null,
                            'user_id' => 1,
                            'item_name' => 'requestUpdate'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToWaitCheck'
                        ],

                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'requestUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 5,
                            "changed_user_login" => "bpm_headSupervisor_1",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "17",
                            "new_value" => "8",
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 2,
                            "changed_user_id" => 6,
                            "changed_user_login" => "bpm_supervisor_1",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "1",
                            "new_value" => "8",
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 3,
                            "changed_user_id" => 8,
                            "changed_user_login" => "mobile_courier",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "",
                            "new_value" => "8",
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 4,
                            "changed_user_id" => 11,
                            "changed_user_login" => "bpm_contentManager_1a",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "1",
                            "new_value" => "8",
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 5,
                            "changed_user_id" => 15,
                            "changed_user_login" => "bpm_teamLead_1",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "19",
                            "new_value" => "8",
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 6,
                            "changed_user_id" => 30,
                            "changed_user_login" => "bpm_supervisor_10",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "11",
                            "new_value" => "8",
                            "date >=" => date("Y-m-d"),
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность группового изменения команды без указания пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'keys' => '',
                'team' => 8
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
                        [
                            "id" => 1,
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
                            "id" => 2,
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
                            "id" => 3,
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
                            "id" => 4,
                            "name" => "Константин Куцан",
                            "login" => "kutsan.k",
                            "email" => "kutsan.k@rozetka.com.ua",
                            "team" => 17,
                            "parent_id" => 1,
                            "position" => "admin",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:32",
                            "created_by" => 1,
                            "change_date" => "2020-06-30 13:18:50",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
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
                            "id" => 6,
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
                            "id" => 7,
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
                            "id" => 8,
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
                            "id" => 9,
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
                            "id" => 10,
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
                            "id" => 11,
                            "name" => "Менеджер Контентович 1А",
                            "login" => "bpm_contentManager_1a",
                            "email" => "bpm_contentManager_1a@rozetka.com.ua",
                            "team" => 1,
                            "parent_id" => 6,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:34",
                            "created_by" => 1,
                            "change_date" => "2020-06-28 11:47:12",
                            "drfo" => "'000000011"
                        ],
                        [
                            "id" => 12,
                            "name" => "Менеджер Контентович 1Б",
                            "login" => "bpm_contentManager_1b",
                            "email" => "bpm_contentManager_1b@rozetka.com.ua",
                            "team" => 1,
                            "parent_id" => 6,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:15:35",
                            "created_by" => 1,
                            "change_date" => "2020-06-28 11:47:21",
                            "drfo" => "'000000012"
                        ],
                        [
                            "id" => 13,
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
                            "id" => 14,
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
                            "id" => 15,
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
                            "id" => 16,
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
                            "id" => 17,
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
                            "id" => 18,
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
                            "id" => 19,
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
                            "id" => 20,
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
                            "id" => 21,
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
                            "id" => 22,
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
                            "id" => 23,
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
                            "id" => 24,
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
                            "id" => 25,
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
                            "id" => 26,
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
                            "id" => 27,
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
                            "id" => 28,
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
                            "id" => 29,
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
                            "id" => 30,
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
                            "id" => 31,
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
                            "id" => 32,
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
                            "id" => 33,
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
                            "id" => 34,
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
                            "id" => 35,
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
                            "id" => 36,
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
                            "id" => 37,
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
                            "id" => 38,
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
                            "id" => 39,
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
                    'auth.auth_assignment' => [
                        [
                            'created_at' => null,
                            'user_id' => 1,
                            'item_name' => 'requestUpdate'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferAnyToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferClosedToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferCompletedToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferDeclinedToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferOnHoldToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferPartialCompleteToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferRequireChangeToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToAny'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToClosed'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToCompleted'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToInCheck'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToOnHold'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToPartialComplete'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToRequireChange'
                        ],
                        [
                            'user_id' => 1,
                            'item_name' => 'transferWaitWorkToWaitCheck'
                        ],

                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'updateUser'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'reportView'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'viewUser'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestViewOwnRequests'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'viewOwnDashboards'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'reportLoadAllUsers'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'reportLoadMarketUsers'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'reportLoadYourTeam'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'viewAllDashboards'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'viewDashboardsByDirection'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'viewDashboardsByCommand'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'createUser'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'blockUser'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'errorsUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'sellerUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'categoryUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'teamUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'coefUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'fieldsUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'reasonsUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'excludedFieldsUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'priorityUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestCreate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestCreateRelated'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestViewDirectionRequests'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestViewAllRequests'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'massEdit'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestViewTeamRequests'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestDeleteAttachments'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'viewSplitterModerationRequests'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'takeToWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToRequireFix'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestAddNewItems'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestUpdateItems'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestTransferItems'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestGroupItems'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestUploadPhoto'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestCheckHidden'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestAddFatPortalCat'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestAddAttrOrValues'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestStructureDesign'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestAddUpdateSC'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestAddUpdateVideo'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'requestAddUpdateTags'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToWaitCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitCheckToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToInCheck'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInCheckToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToRequireChange'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferRequireChangeToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToDeclined'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferDeclinedToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToWaitWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferWaitWorkToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToInWork'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferInWorkToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToOnHold'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferOnHoldToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferPartialCompleteToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferCompletedToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferAnyToClosed'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'transferClosedToAny'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'updateTemplates'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'seeAllTemplates'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'seeDirectionTemplates'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 4,
                            'item_name' => 'seeTeamTemplates'
                        ],

                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'requestUpdate'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'created_at' => null,
                            'user_id' => 2,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                    ],
                    "auth.user_changing_history" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.user_changing_history'],
                ],
            ]
        ]
    ],

];
