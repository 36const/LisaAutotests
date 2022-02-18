<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'request_templates' => [
            [
//                'id' => 1,
                'parent_id' => null,
                'name' => 'Добавление',
                'user_id' => 4,
            ],
            [
//                'id' => 1,
                'parent_id' => null,
                'name' => 'Добавление2',
                'user_id' => 5,
            ],
            [
//                'id' => 1,
                'parent_id' => null,
                'name' => 'Добавление3',
                'user_id' => 6,
            ],
            [
//                'id' => 1,
                'parent_id' => null,
                'name' => 'Добавление4',
                'user_id' => 10,
            ],
            [
//                'id' => 1,
                'parent_id' => null,
                'name' => 'Добавление5',
                'user_id' => 15,
            ],
            [
//                'id' => 1,
                'parent_id' => null,
                'name' => 'Добавление6',
                'user_id' => 16,
            ],
        ],
        'auth.users' => [
            [
                //'id' => 1,
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
                //'id' => 2,
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
                //'id' => 3,
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
                //'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-04-13 13:15:32',
                'created_by' => 1,
                'change_date' => '2020-06-30 13:18:50',
                'drfo' => '\'000000004'
            ],
            [
                //'id' => 5,
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
                'drfo' => '\'000000005'
            ],
            [
                //'id' => 6,
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
                'drfo' => '\'000000006'
            ],
            [
                //'id' => 7,
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
                'drfo' => '\'000000007'
            ],
            [
                //'id' => 8,
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
                //'id' => 9,
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
                //'id' => 10,
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
                'drfo' => '\'000000010'
            ],
            [
                //'id' => 11,
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
                'drfo' => '\'000000011'
            ],
            [
                //'id' => 12,
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
                'drfo' => '\'000000012'
            ],
            [
                //'id' => 13,
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
                'drfo' => '\'000000013'
            ],
            [
                //'id' => 14,
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
                'drfo' => '\'000000014'
            ],
            [
                //'id' => 15,
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
                'drfo' => '\'000000015'
            ],
            [
                //'id' => 16,
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
                'drfo' => '\'000000016'
            ],
            [
                //'id' => 17,
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
                'drfo' => '\'000000017'
            ],
            [
                //'id' => 18,
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
                'drfo' => '\'000000018'
            ],
            [
                //'id' => 19,
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
                'drfo' => '\'000000018'
            ],
            [
                //'id' => 20,
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
                //'id' => 21,
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
                //'id' => 22,
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
                //'id' => 23,
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
                //'id' => 24,
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
                //'id' => 25,
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
                //'id' => 26,
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
                //'id' => 27,
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
                //'id' => 28,
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
                //'id' => 29,
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
                //'id' => 30,
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
                //'id' => 31,
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
                //'id' => 32,
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
                //'id' => 33,
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
                //'id' => 34,
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
                //'id' => 35,
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
                //'id' => 36,
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
                //'id' => 37,
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
                //'id' => 38,
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
                //'id' => 39,
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
        'auth.auth_assignment' => [
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
                'item_name' => 'transferRequireChangeToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'updateTemplates'
            ],
//            [
//                //'id' => 5715,
//                'user_id' => 4,
//                'item_name' => 'seeAllTemplates'
//            ],
//            [
//                //'id' => 5715,
//                'user_id' => 4,
//                'item_name' => 'seeDirectionTemplates'
//            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'seeTeamTemplates'
            ],
        ]
    ],
];