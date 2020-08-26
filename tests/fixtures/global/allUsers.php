<?php
return [
    "lisa_fixtures" => [
        "user_bpm" => [
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
        "user_permissions" => [
            [
                //"id" => 1048,
                "user_id" => 4,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 1049,
                "user_id" => 4,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 1050,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 1051,
                "user_id" => 4,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 1052,
                "user_id" => 4,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 1053,
                "user_id" => 4,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 1054,
                "user_id" => 4,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 1055,
                "user_id" => 4,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 1056,
                "user_id" => 4,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 1057,
                "user_id" => 4,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 1058,
                "user_id" => 4,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 1059,
                "user_id" => 4,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 1060,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 1061,
                "user_id" => 4,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 1062,
                "user_id" => 4,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 1333,
                "user_id" => 4,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 1334,
                "user_id" => 4,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 1335,
                "user_id" => 4,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 1336,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 1337,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 1338,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 1339,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 1340,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 1341,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 1342,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 1343,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 1344,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 1345,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 1346,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 1347,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 1348,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 1349,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 1350,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 1351,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 1352,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 1353,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 1354,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 1355,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 1356,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 1357,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 1358,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 1359,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 1360,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 1361,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 1362,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 1363,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 1364,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 1365,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 1366,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 1369,
                "user_id" => 4,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 1370,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 1371,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 2223,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 2328,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 2563,
                "user_id" => 4,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 3010,
                "user_id" => 4,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 3015,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 3037,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 3044,
                "user_id" => 4,
                "permission_name" => "viewOwnDashboards"
            ],
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
                "first_name" => "",
                "second_name" => "",
                "avatar_image" => null,
                "reason_for_edit" => "kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k",
                "ldap_sync_code" => null,
                "site_theme" => null
            ],
        ],
    ]
];