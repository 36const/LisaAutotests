<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' => [
            [
                //"id" => 1,
                'name' => 'Система',
                'login' => 'systemBPM',
                'email' => 'system@rozetka.com.ua',
                'team' => null,
                'parent_id' => 0,
                'position' => 'system',
                'status' => 1,
                'create_ts' => '2020-03-10 12:07:48',
                'created_by' => 0,
                'change_date' => '2020-03-10 12:07:48',
                'drfo' => '0'
            ],
            [
                //"id" => 2,
                'name' => 'Администратор',
                'login' => 'adminBPM',
                'email' => 'admin@admin.com',
                'team' => null,
                'parent_id' => 0,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-03-10 12:07:48',
                'created_by' => 0,
                'change_date' => '2020-03-10 12:07:48',
                'drfo' => '0'
            ],
            [
                //"id" => 3,
                'name' => 'Гость',
                'login' => 'guestBPM',
                'email' => 'guest@guest.com',
                'team' => null,
                'parent_id' => 0,
                'position' => 'guest',
                'status' => 1,
                'create_ts' => '2020-03-10 12:07:48',
                'created_by' => 0,
                'change_date' => '2020-03-10 12:07:48',
                'drfo' => '0'
            ],
            [
                //"id" => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:32',
                'created_by' => 1,
                'change_date' => '2020-06-30 13:18:50',
                'drfo' => "'000000004"
            ],
            [
                //"id" => 5,
                'name' => 'Супервайзер Руководько 1',
                'login' => 'bpm_headSupervisor_1',
                'email' => 'bpm_headSupervisor_1@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 4,
                'position' => 'headSupervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:33',
                'created_by' => 1,
                'change_date' => '2020-06-28 11:46:09',
                'drfo' => "'000000005"
            ],
            [
                //"id" => 6,
                'name' => 'Супервайзер Начальникович 1',
                'login' => 'bpm_supervisor_1',
                'email' => 'bpm_supervisor_1@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:33',
                'created_by' => 1,
                'change_date' => '2020-06-28 11:47:31',
                'drfo' => "'000000006"
            ],
            [
                //"id" => 7,
                'name' => 'Splitter.Moderation',
                'login' => 'splitter_moderation',
                'email' => 'splitter_moderation@rozetka.com.ua',
                'team' => null,
                'parent_id' => 0,
                'position' => 'system',
                'status' => 1,
                'create_ts' => '2020-04-13 13:17:20',
                'created_by' => 1,
                'change_date' => '2020-04-13 13:17:20',
                'drfo' => "'000000007"
            ],
            [
                //"id" => 8,
                'name' => 'Mobile Courier',
                'login' => 'mobile_courier',
                'email' => 'mobile_courier@rozetka.com.ua',
                'team' => null,
                'parent_id' => 0,
                'position' => 'system',
                'status' => 1,
                'create_ts' => '2020-04-13 13:17:20',
                'created_by' => 1,
                'change_date' => '2020-04-13 13:17:20',
                'drfo' => '0'
            ],
            [
                //"id" => 9,
                'name' => 'JIRA COMI-запрос на замер',
                'login' => 'jira_comi',
                'email' => 'jira_comi@rozetka.com.ua',
                'team' => null,
                'parent_id' => 0,
                'position' => 'system',
                'status' => 1,
                'create_ts' => '2020-04-13 13:17:20',
                'created_by' => 1,
                'change_date' => '2020-04-13 13:17:20',
                'drfo' => '0'
            ],
            [
                //"id" => 10,
                'name' => 'Супервайзер Начальникович 2',
                'login' => 'bpm_supervisor_2',
                'email' => 'bpm_supervisor_2@rozetka.com.ua',
                'team' => 7,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:34',
                'created_by' => 1,
                'change_date' => '2020-06-28 11:46:51',
                'drfo' => "'000000010"
            ],
            [
                //"id" => 11,
                'name' => 'Менеджер Контентович 1А',
                'login' => 'bpm_contentManager_1a',
                'email' => 'bpm_contentManager_1a@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 6,
                'position' => 'contentManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:34',
                'created_by' => 1,
                'change_date' => '2020-06-28 11:47:12',
                'drfo' => "'000000011"
            ],
            [
                //"id" => 12,
                'name' => 'Менеджер Контентович 1Б',
                'login' => 'bpm_contentManager_1b',
                'email' => 'bpm_contentManager_1b@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 6,
                'position' => 'contentManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:35',
                'created_by' => 1,
                'change_date' => '2020-06-28 11:47:21',
                'drfo' => "'000000012"
            ],
            [
                //"id" => 13,
                'name' => 'Менеджер Контентович 2А',
                'login' => 'bpm_contentManager_2a',
                'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                'team' => 7,
                'parent_id' => 10,
                'position' => 'contentManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:35',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:40:25',
                'drfo' => "'000000013"
            ],
            [
                //"id" => 14,
                'name' => 'Менеджер Контентович 2Б',
                'login' => 'bpm_contentManager_2b',
                'email' => 'bpm_contentManager_2b@rozetka.com.ua',
                'team' => 7,
                'parent_id' => 10,
                'position' => 'contentManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:35',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:40:31',
                'drfo' => "'000000014"
            ],
            [
                //"id" => 15,
                'name' => 'Тим Лидович 1',
                'login' => 'bpm_teamLead_1',
                'email' => 'bpm_teamLead_1@rozetka.com.ua',
                'team' => 19,
                'parent_id' => 4,
                'position' => 'teamLead',
                'status' => 0,
                'create_ts' => '2020-04-13 13:15:35',
                'created_by' => 1,
                'change_date' => '2020-06-28 13:19:51',
                'drfo' => "'000000015"
            ],
            [
                //"id" => 16,
                'name' => 'Тим Лидович 2',
                'login' => 'bpm_teamLead_2',
                'email' => 'bpm_teamLead_2@rozetka.com.ua',
                'team' => 19,
                'parent_id' => 4,
                'position' => 'teamLead',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:36',
                'created_by' => 1,
                'change_date' => '2020-06-25 10:49:20',
                'drfo' => "'000000016"
            ],
            [
                //"id" => 17,
                'name' => 'Менеджер Продактович 1',
                'login' => 'bpm_productManager_1',
                'email' => 'bpm_productManager_1@rozetka.com.ua',
                'team' => 19,
                'parent_id' => 4,
                'position' => 'productManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:36',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:41:00',
                'drfo' => "'000000017"
            ],
            [
                //"id" => 18,
                'name' => 'Менеджер Продактович 2',
                'login' => 'bpm_productManager_2',
                'email' => 'bpm_productManager_2@rozetka.com.ua',
                'team' => 19,
                'parent_id' => 4,
                'position' => 'productManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:36',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:41:05',
                'drfo' => "'000000018"
            ],
            [
                //"id" => 19,
                'name' => 'Сео Сеошевич 1',
                'login' => 'bpm_seo_1',
                'email' => 'bpm_seo_1@rozetka.com.ua',
                'team' => 20,
                'parent_id' => 4,
                'position' => 'seo',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:37',
                'created_by' => 1,
                'change_date' => '2020-06-25 13:18:41',
                'drfo' => "'000000018"
            ],
            [
                //"id" => 20,
                'name' => 'Сео Сеошевич 2',
                'login' => 'bpm_seo_2',
                'email' => 'bpm_seo_2@rozetka.com.ua',
                'team' => 20,
                'parent_id' => 4,
                'position' => 'seo',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:37',
                'created_by' => 1,
                'change_date' => '2020-06-25 11:13:13',
                'drfo' => '0'
            ],
            [
                //"id" => 21,
                'name' => 'Менеджер Фоткович 1',
                'login' => 'bpm_photoManager_1',
                'email' => 'bpm_photoManager_1@rozetka.com.ua',
                'team' => 21,
                'parent_id' => 4,
                'position' => 'photoManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:37',
                'created_by' => 1,
                'change_date' => '2020-06-25 11:13:37',
                'drfo' => '0'
            ],
            [
                //"id" => 22,
                'name' => 'Менеджер Фоткович 2',
                'login' => 'bpm_photoManager_2',
                'email' => 'bpm_photoManager_2@rozetka.com.ua',
                'team' => 21,
                'parent_id' => 4,
                'position' => 'photoManager',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:37',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:41:42',
                'drfo' => '0'
            ],
            [
                //"id" => 23,
                'name' => 'Супервайзер Начальникович 3',
                'login' => 'bpm_supervisor_3',
                'email' => 'bpm_supervisor_3@rozetka.com.ua',
                'team' => 9,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:37',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:42:34',
                'drfo' => '0'
            ],
            [
                //"id" => 24,
                'name' => 'Супервайзер Начальникович 4',
                'login' => 'bpm_supervisor_4',
                'email' => 'bpm_supervisor_4@rozetka.com.ua',
                'team' => 2,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:38',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:42:39',
                'drfo' => '0'
            ],
            [
                //"id" => 25,
                'name' => 'Супервайзер Начальникович 5',
                'login' => 'bpm_supervisor_5',
                'email' => 'bpm_supervisor_5@rozetka.com.ua',
                'team' => 3,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:39',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:42:43',
                'drfo' => '0'
            ],
            [
                //"id" => 26,
                'name' => 'Супервайзер Начальникович 6',
                'login' => 'bpm_supervisor_6',
                'email' => 'bpm_supervisor_6@rozetka.com.ua',
                'team' => 4,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:39',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:42:47',
                'drfo' => '0'
            ],
            [
                //"id" => 27,
                'name' => 'Супервайзер Начальникович 7',
                'login' => 'bpm_supervisor_7',
                'email' => 'bpm_supervisor_7@rozetka.com.ua',
                'team' => 8,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:40',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:42:52',
                'drfo' => '0'
            ],
            [
                //"id" => 28,
                'name' => 'Супервайзер Начальникович 8',
                'login' => 'bpm_supervisor_8',
                'email' => 'bpm_supervisor_8@rozetka.com.ua',
                'team' => 9,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:40',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:43:24',
                'drfo' => '0'
            ],
            [
                //"id" => 29,
                'name' => 'Супервайзер Начальникович 9',
                'login' => 'bpm_supervisor_9',
                'email' => 'bpm_supervisor_9@rozetka.com.ua',
                'team' => 10,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:41',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:43:30',
                'drfo' => '0'
            ],
            [
                //"id" => 30,
                'name' => 'Супервайзер Начальникович 10',
                'login' => 'bpm_supervisor_10',
                'email' => 'bpm_supervisor_10@rozetka.com.ua',
                'team' => 11,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:41',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:43:35',
                'drfo' => '0'
            ],
            [
                //"id" => 31,
                'name' => 'Супервайзер Начальникович 11',
                'login' => 'bpm_supervisor_11',
                'email' => 'bpm_supervisor_11@rozetka.com.ua',
                'team' => 12,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:42',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:43:39',
                'drfo' => '0'
            ],
            [
                //"id" => 32,
                'name' => 'Супервайзер Начальникович 12',
                'login' => 'bpm_supervisor_12',
                'email' => 'bpm_supervisor_12@rozetka.com.ua',
                'team' => 13,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:42',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:43:44',
                'drfo' => '0'
            ],
            [
                //"id" => 33,
                'name' => 'Супервайзер Групповушкин 13',
                'login' => 'bpm_supervisor_13',
                'email' => 'bpm_supervisor_13@rozetka.com.ua',
                'team' => 14,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:43',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:44:01',
                'drfo' => '0'
            ],
            [
                //"id" => 34,
                'name' => 'Супервайзер Проектенко 14',
                'login' => 'bpm_supervisor_14',
                'email' => 'bpm_supervisor_14@rozetka.com.ua',
                'team' => 15,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:44',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:44:05',
                'drfo' => '0'
            ],
            [
                //"id" => 35,
                'name' => 'Супервайзер Категоркин 15',
                'login' => 'bpm_supervisor_15',
                'email' => 'bpm_supervisor_15@rozetka.com.ua',
                'team' => 16,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:44',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:44:10',
                'drfo' => '0'
            ],
            [
                //"id" => 36,
                'name' => 'Супервайзер Групповушкин 16',
                'login' => 'bpm_supervisor_16',
                'email' => 'bpm_supervisor_16@rozetka.com.ua',
                'team' => 14,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:45',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:44:28',
                'drfo' => '0'
            ],
            [
                //"id" => 37,
                'name' => 'Супервайзер Проектенко 17',
                'login' => 'bpm_supervisor_17',
                'email' => 'bpm_supervisor_17@rozetka.com.ua',
                'team' => 15,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:45',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:44:32',
                'drfo' => '0'
            ],
            [
                //"id" => 38,
                'name' => 'Супервайзер Категоркин 18',
                'login' => 'bpm_supervisor_18',
                'email' => 'bpm_supervisor_18@rozetka.com.ua',
                'team' => 16,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:46',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:44:36',
                'drfo' => '0'
            ],
            [
                //"id" => 39,
                'name' => 'Менеджер Модерашкин',
                'login' => 'bpm_moderation',
                'email' => 'bpm_moderation@rozetka.com.ua',
                'team' => null,
                'parent_id' => 1,
                'position' => 'moderator',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:46',
                'created_by' => 1,
                'change_date' => '2020-06-24 08:44:54',
                'drfo' => '0'
            ],
        ],
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_assignment' => [
            [
                'item_name' => 'blockUser',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'categoryUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'coefUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'createUser',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'errorsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'excludedFieldsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'fieldsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'massEdit',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'priorityUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'reasonsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'reportLoadAllUsers',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'reportLoadMarketUsers',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'reportLoadYourTeam',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'reportView',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestAddAttrOrValues',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestAddFatPortalCat',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestAddNewItems',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestAddUpdateSC',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestAddUpdateSizeGrid',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestAddUpdateTags',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestAddUpdateVideo',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestCheckHidden',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestCreate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestCreateRelated',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestDeleteAttachments',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestGroupItems',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestStructureDesign',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestTransferItems',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestUpdateAttrOrValues',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestUpdateFatPortalCat',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestUpdateItems',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestUploadPhoto',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestViewAllRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestViewDirectionRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestViewOwnRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'requestViewTeamRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'seeAllTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'seeDirectionTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'seeTeamTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'sellerUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'takeToWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'teamUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferCompletedToClosed',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferCompletedToInWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInCheckToDeclined',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInCheckToRequireChange',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInCheckToWaitWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInWorkToCompleted',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInWorkToDeclined',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInWorkToOnHold',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInWorkToPartialComplete',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferInWorkToWaitWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferOnHoldToCompleted',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferOnHoldToInWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferOnHoldToPartialComplete',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferPartialCompleteToClosed',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferPartialCompleteToInWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferRequireChangeToWaitCheck',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferWaitCheckToDeclined',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferWaitCheckToInCheck',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferWaitCheckToRequireChange',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferWaitCheckToWaitWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferWaitWorkToDeclined',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'transferWaitWorkToInWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'updateTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'updateUser',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'viewAllDashboards',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'viewDashboardsByCommand',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'viewDashboardsByDirection',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'viewOwnDashboards',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'viewSplitterModerationRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'viewUser',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 1
            ],
            [
                'item_name' => 'blockUser',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'categoryUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'coefUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'createUser',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'errorsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'excludedFieldsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'fieldsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'massEdit',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'priorityUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'reasonsUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'reportLoadAllUsers',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'reportLoadMarketUsers',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'reportLoadYourTeam',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'reportView',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestAddAttrOrValues',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestAddFatPortalCat',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestAddNewItems',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestAddUpdateSC',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestAddUpdateSizeGrid',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestAddUpdateTags',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestAddUpdateVideo',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestCheckHidden',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestCreate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestCreateRelated',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestDeleteAttachments',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestGroupItems',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestStructureDesign',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestTransferItems',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestUpdateAttrOrValues',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestUpdateFatPortalCat',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestUpdateItems',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestUploadPhoto',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestViewAllRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestViewDirectionRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestViewOwnRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'requestViewTeamRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'seeAllTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'seeDirectionTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'seeTeamTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'sellerUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'takeToWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'teamUpdate',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferCompletedToClosed',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferCompletedToInWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInCheckToDeclined',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInCheckToRequireChange',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInCheckToWaitWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInWorkToCompleted',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInWorkToDeclined',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInWorkToOnHold',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInWorkToPartialComplete',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferInWorkToWaitWork',
                'created_at' => '2021-04-04 13:27:58',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferOnHoldToCompleted',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferOnHoldToInWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferOnHoldToPartialComplete',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferPartialCompleteToClosed',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferPartialCompleteToInWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferRequireChangeToWaitCheck',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferWaitCheckToDeclined',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferWaitCheckToInCheck',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferWaitCheckToRequireChange',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferWaitCheckToWaitWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferWaitWorkToDeclined',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'transferWaitWorkToInWork',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'updateTemplates',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'updateUser',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'viewAllDashboards',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'viewDashboardsByCommand',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'viewDashboardsByDirection',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'viewOwnDashboards',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'viewSplitterModerationRequests',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'blockUser',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'categoryUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'coefUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'createUser',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'errorsUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'excludedFieldsUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'fieldsUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'massEdit',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'priorityUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'reasonsUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'reportLoadAllUsers',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'reportLoadMarketUsers',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'reportLoadYourTeam',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'reportView',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestAddAttrOrValues',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestAddFatPortalCat',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestAddNewItems',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestAddUpdateSC',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestAddUpdateSizeGrid',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestAddUpdateTags',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestAddUpdateVideo',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestCheckHidden',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestCreate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestCreateRelated',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestDeleteAttachments',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestGroupItems',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestStructureDesign',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestTransferItems',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestUpdateAttrOrValues',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestUpdateFatPortalCat',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestUpdateItems',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestUploadPhoto',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestViewAllRequests',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestViewDirectionRequests',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestViewOwnRequests',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'requestViewTeamRequests',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'seeAllTemplates',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'seeDirectionTemplates',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'seeTeamTemplates',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'sellerUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'takeToWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'teamUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'updateTemplates',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'updateUser',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewAllDashboards',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewDashboardsByCommand',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewDashboardsByDirection',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewOwnDashboards',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewSplitterModerationRequests',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewUser',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewUser',
                'created_at' => '2021-04-04 13:27:59',
                'user_id' => 2
            ],
            [
                'item_name' => 'blockUser',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'createUser',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'massEdit',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'reportLoadMarketUsers',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'reportView',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestAddAttrOrValues',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestAddFatPortalCat',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestAddNewItems',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestAddUpdateSC',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestAddUpdateSizeGrid',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestAddUpdateTags',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestAddUpdateVideo',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestCheckHidden',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestCreate',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestCreateRelated',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestGroupItems',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestStructureDesign',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestTransferItems',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestUpdate',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestUpdateAttrOrValues',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestUpdateFatPortalCat',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestUpdateItems',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestUploadPhoto',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'requestViewAllRequests',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'seeDirectionTemplates',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'seeTeamTemplates',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'takeToWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferCompletedToClosed',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferCompletedToInWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInCheckToDeclined',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInCheckToRequireChange',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInCheckToWaitWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInWorkToCompleted',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInWorkToDeclined',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInWorkToOnHold',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInWorkToPartialComplete',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferInWorkToWaitWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferOnHoldToInWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferPartialCompleteToClosed',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferPartialCompleteToInWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferRequireChangeToWaitCheck',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferWaitCheckToDeclined',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferWaitCheckToInCheck',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferWaitCheckToRequireChange',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferWaitCheckToWaitWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferWaitWorkToDeclined',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'transferWaitWorkToInWork',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'updateTemplates',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'updateUser',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'viewDashboardsByDirection',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'viewSplitterModerationRequests',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ],
            [
                'item_name' => 'viewUser',
                'created_at' => '2021-04-04 13:31:19',
                'user_id' => 5
            ]
        ],
        'auth.user_changing_history' => [],
    ],
];