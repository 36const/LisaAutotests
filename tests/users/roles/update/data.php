<?php

use lisa\UsersTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменить набор пермишенов и описание роли, проект Контент',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'available_perms',
                'perms_names',
                'perms_by_role_supervisor',
                'user_permissions_4',
                'user_permissions_11',
            ],
            'requestBody' => [
                'name' => 'supervisor',
                'type' => 1,
                'description' => 'Суперпупервайзер',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
                'project_id' => 1,
                'permissions' => [
                    'requestViewAllRequests',
                    'requestViewTeamRequests',
                    'requestViewDirectionRequests',
                    'errorsUpdate',
                    'requestCreateRelated',
                    'createUser',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'supervisor',
                    'type' => 1,
                    'description' => 'Суперпупервайзер',
                    'group' => NULL,
                    'rule_name' => NULL,
                    'data' => NULL,
                    'created_at' => '2020-03-10 12:07:48',
                    'updated_at' => [
                        'expression' => 'NOW()',
                        'params' => [
                        ],
                    ],
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_item' => [
                        [
                            'name' => 'admin',
                            'type' => 1,
                            'description' => 'Администратор',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 0
                        ],
                        [
                            'name' => 'contentManager',
                            'type' => 1,
                            'description' => 'Контент-менеджер',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'headSupervisor',
                            'type' => 1,
                            'description' => 'Руководитель супервайзеров',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'moderator',
                            'type' => 1,
                            'description' => 'Сотрудник отдела модерации',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-04-16 07:52:40',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'photoManager',
                            'type' => 1,
                            'description' => 'Сотрудник фотостудии',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'productManager',
                            'type' => 1,
                            'description' => 'Продакт-менеджер',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'seo',
                            'type' => 1,
                            'description' => 'Сотрудник seo-отдела',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'supervisor',
                            'type' => 1,
                            'description' => 'Суперпупервайзер',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at >=' => date('Y-m-d'),
                            'project_id' => 1
                        ],
                        [
                            'name' => 'system',
                            'type' => 1,
                            'description' => 'Система',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 0
                        ],
                        [
                            'name' => 'teamLead',
                            'type' => 1,
                            'description' => 'Руководитель направления (тимлид)',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 0
                        ],
                        [
                            'name' => 'viewAllDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов с заявками всех направлений, команд и пользователей',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'viewDashboardsByCommand',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов для супервизоров по своей команде',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'viewDashboardsByDirection',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по заявкам направления Маркет',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'viewOwnDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по своим заявкам',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'blockUser',
                            'type' => 2,
                            'description' => 'Блокирование пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 0
                        ],
                        [
                            'name' => 'createUser',
                            'type' => 2,
                            'description' => 'Создание пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 0
                        ],
                        [
                            'name' => 'errorsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование истории ошибок',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'updateUser',
                            'type' => 2,
                            'description' => 'Изменение пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 0
                        ],
                        [
                            'name' => 'viewUser',
                            'type' => 2,
                            'description' => 'Просмотр пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 0
                        ],
                        [
                            'name' => 'reportLoadAllUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по всем пользователям',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'reportLoadMarketUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по пользователям направления Маркетплейс',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'reportLoadYourTeam',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по своей комманде',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'reportView',
                            'type' => 2,
                            'description' => 'Просмотр отчетов',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestAddAttrOrValues',
                            'type' => 2,
                            'description' => 'Добавление параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestAddFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestAddNewItems',
                            'type' => 2,
                            'description' => 'Добавление новых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestAddUpdateSC',
                            'type' => 2,
                            'description' => 'Добавление новых СЦ/изменение существующих СЦ',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestAddUpdateSizeGrid',
                            'type' => 2,
                            'description' => 'Добавление/изменение размерной сетки',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestAddUpdateTags',
                            'type' => 2,
                            'description' => 'Добавление/изменение тегов',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestAddUpdateVideo',
                            'type' => 2,
                            'description' => 'Добавление/изменение видео',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestCheckHidden',
                            'type' => 2,
                            'description' => 'Проверка скрытых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestGroupItems',
                            'type' => 2,
                            'description' => 'Группировка товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestStructureDesign',
                            'type' => 2,
                            'description' => 'Проектирование структуры',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestTransferItems',
                            'type' => 2,
                            'description' => 'Перенос товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestUpdateAttrOrValues',
                            'type' => 2,
                            'description' => 'Изменение существующих параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestUpdateFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestUpdateItems',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих товарах',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestUploadPhoto',
                            'type' => 2,
                            'description' => 'Заливка фото с фотостудии',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'massEdit',
                            'type' => 2,
                            'description' => 'Пакетное редактирование',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestCreate',
                            'type' => 2,
                            'description' => 'Создание задач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestCreateRelated',
                            'type' => 2,
                            'description' => 'Создание подзадач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestDeleteAttachments',
                            'type' => 2,
                            'description' => 'Удаление вложеных файлов',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestUpdate',
                            'type' => 2,
                            'description' => 'Обновление полей заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestViewAllRequests',
                            'type' => 2,
                            'description' => 'Просмотр всех заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestViewDirectionRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок своего направления',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestViewOwnRequests',
                            'type' => 2,
                            'description' => 'Просмотр своих заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'requestViewTeamRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок команды',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'takeToWork',
                            'type' => 2,
                            'description' => 'Взятие в работу и выполнение/отмена заявок (не менеджером заявки)',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:10',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'viewSplitterModerationRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок отдела модерации',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'categoryUpdate',
                            'type' => 2,
                            'description' => 'Редактирование категорий',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'coefUpdate',
                            'type' => 2,
                            'description' => 'Редактирование коэфициентов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'excludedFieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование взаимоисключающих чекбоксов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'fieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование полей',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'priorityUpdate',
                            'type' => 2,
                            'description' => 'Редактирование приоритетов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'reasonsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование причин',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'sellerUpdate',
                            'type' => 2,
                            'description' => 'Редактирование магазинов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'teamUpdate',
                            'type' => 2,
                            'description' => 'Редактирование команд',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'seeAllTemplates',
                            'type' => 2,
                            'description' => 'Просмотр всех шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'seeDirectionTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов направления',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'seeTeamTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов команды',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'updateTemplates',
                            'type' => 2,
                            'description' => 'Обновление чужих шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToClosed',
                            'type' => 2,
                            'description' => 'Все -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToCompleted',
                            'type' => 2,
                            'description' => 'Все -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToDeclined',
                            'type' => 2,
                            'description' => 'Все -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToInCheck',
                            'type' => 2,
                            'description' => 'Все -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToInWork',
                            'type' => 2,
                            'description' => 'Все -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToOnHold',
                            'type' => 2,
                            'description' => 'Все -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToPartialComplete',
                            'type' => 2,
                            'description' => 'Все -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToRequireChange',
                            'type' => 2,
                            'description' => 'Все -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToWaitCheck',
                            'type' => 2,
                            'description' => 'Все -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferAnyToWaitWork',
                            'type' => 2,
                            'description' => 'Все -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToAny',
                            'type' => 2,
                            'description' => 'Закрыта -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToCompleted',
                            'type' => 2,
                            'description' => 'Закрыта -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToDeclined',
                            'type' => 2,
                            'description' => 'Закрыта -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToInCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToInWork',
                            'type' => 2,
                            'description' => 'Закрыта -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToOnHold',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToPartialComplete',
                            'type' => 2,
                            'description' => 'Закрыта -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToRequireChange',
                            'type' => 2,
                            'description' => 'Закрыта -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToWaitCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferClosedToWaitWork',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToAny',
                            'type' => 2,
                            'description' => 'Выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToClosed',
                            'type' => 2,
                            'description' => 'Выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToDeclined',
                            'type' => 2,
                            'description' => 'Выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToInCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToInWork',
                            'type' => 2,
                            'description' => 'Выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToOnHold',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToPartialComplete',
                            'type' => 2,
                            'description' => 'Выполнена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToRequireChange',
                            'type' => 2,
                            'description' => 'Выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToWaitCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferCompletedToWaitWork',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToAny',
                            'type' => 2,
                            'description' => 'Отменена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToClosed',
                            'type' => 2,
                            'description' => 'Отменена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToCompleted',
                            'type' => 2,
                            'description' => 'Отменена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToInCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToInWork',
                            'type' => 2,
                            'description' => 'Отменена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToOnHold',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToPartialComplete',
                            'type' => 2,
                            'description' => 'Отменена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToRequireChange',
                            'type' => 2,
                            'description' => 'Отменена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToWaitCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferDeclinedToWaitWork',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToAny',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToClosed',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToCompleted',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToDeclined',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToInWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToOnHold',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Готова для распределения -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToWaitCheck',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToAny',
                            'type' => 2,
                            'description' => 'В работе -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToClosed',
                            'type' => 2,
                            'description' => 'В работе -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToCompleted',
                            'type' => 2,
                            'description' => "В работе\t-> Выполнена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToDeclined',
                            'type' => 2,
                            'description' => "В работе\t-> Отменена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToInCheck',
                            'type' => 2,
                            'description' => 'В работе -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToOnHold',
                            'type' => 2,
                            'description' => "В работе\t-> Ожидает (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToPartialComplete',
                            'type' => 2,
                            'description' => "В работе\t-> Частично выполнена (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToRequireChange',
                            'type' => 2,
                            'description' => 'В работе -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'В работе -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferInWorkToWaitWork',
                            'type' => 2,
                            'description' => 'В работе -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToAny',
                            'type' => 2,
                            'description' => 'Ожидает -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToClosed',
                            'type' => 2,
                            'description' => 'Ожидает -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToInWork',
                            'type' => 2,
                            'description' => 'Ожидает (нужны ризоны) -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferOnHoldToWaitWork',
                            'type' => 2,
                            'description' => 'Ожидает -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToAny',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToClosed',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToCompleted',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToDeclined',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToInCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToInWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToOnHold',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToRequireChange',
                            'type' => 2,
                            'description' => 'Частично выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToAny',
                            'type' => 2,
                            'description' => 'На доработке -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToClosed',
                            'type' => 2,
                            'description' => 'На доработке -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToCompleted',
                            'type' => 2,
                            'description' => 'На доработке -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToDeclined',
                            'type' => 2,
                            'description' => 'На доработке -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToInCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToInWork',
                            'type' => 2,
                            'description' => 'На доработке -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToOnHold',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToPartialComplete',
                            'type' => 2,
                            'description' => 'На доработке -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitWork',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToAny',
                            'type' => 2,
                            'description' => 'Новая -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToClosed',
                            'type' => 2,
                            'description' => 'Новая -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToCompleted',
                            'type' => 2,
                            'description' => 'Новая -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToDeclined',
                            'type' => 2,
                            'description' => 'Новая -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToInCheck',
                            'type' => 2,
                            'description' => 'Новые -> Готовы для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToInWork',
                            'type' => 2,
                            'description' => 'Новая -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToOnHold',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Новая -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Новая -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToAny',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToClosed',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToInWork',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToOnHold',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'transferWaitWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null,
                            'project_id' => 1
                        ],
                        [
                            'name' => 'viewOwnRequestsMrkt',
                            'type' => 2,
                            'description' => 'Просмотр только своих задач',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                        [
                            'name' => 'viewTeamRequestsMrkt',
                            'type' => 2,
                            'description' => 'Просмотр задач команды',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                        [
                            'name' => 'viewAllRequestsMrkt',
                            'type' => 2,
                            'description' => 'Просмотр всех задач',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                        [
                            'name' => 'createFilterMrkt',
                            'type' => 2,
                            'description' => 'Создание фильтра',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                        [
                            'name' => 'createRequestMrkt',
                            'type' => 2,
                            'description' => 'Создание задач',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                        [
                            'name' => 'createSubRequestMrkt',
                            'type' => 2,
                            'description' => 'Создание подзадач',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                        [
                            'name' => 'updateRequestMrkt',
                            'type' => 2,
                            'description' => 'Редактирование задач',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                        [
                            'name' => 'commentRequestMrkt',
                            'type' => 2,
                            'description' => 'Комментирование задач',
                            'group' => 'request',
                            'rule_name' => NULL,
                            'data' => NULL,
                            'created_at' => '2021-08-26 08:26:56',
                            'updated_at' => NULL,
                            'project_id' => 2,
                        ],
                    ],
                    'auth.auth_assignment' => [
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
                            'item_name' => 'createUser',
                            'user_id' => 6,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 6,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 10,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 10,
                            'created_at >=' => date('Y-m-d')
                        ]
                    ],
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'blockUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'blockUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 4,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 5,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewTeamRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 6,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewTeamRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 7,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 8,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ]
                    ],
                ]
            ]
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Сохранение индивидуально проставленных/удалённых пермишенов пользователя при изменении роли, проект Контент',
            //без изменения описания
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'available_perms',
                'perms_names',
                'perms_by_role_supervisor',
                'user_permissions_4',
                'user_permissions_11',
            ],
            'requestBody' => [
                'name' => 'supervisor',
                'type' => 1,
                'description' => 'Супервайзер',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
                'project_id' => 1,
                'permissions' => [
                    'blockUser',
                    'takeToWork',
                    'updateUser',
                    'requestViewAllRequests',
                    'viewUser',
                    'errorsUpdate',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'supervisor',
                    'type' => 1,
                    'description' => 'Супервайзер',
                    'group' => NULL,
                    'rule_name' => NULL,
                    'data' => NULL,
                    'created_at' => '2020-03-10 12:07:48',
                    'updated_at' => NULL,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_item' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['auth.auth_item'],
                    'auth.auth_assignment' => [
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
                            'item_name' => 'blockUser',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 17:06:08'
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 6,
                            'created_at' => '2021-04-15 17:06:08'
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 6,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:37'
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 16:19:36'
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 10,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 10,
                            'created_at' => '2021-04-15 17:06:17'
                        ]
                    ],
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 10,
                            'changed_user_login' => 'bpm_supervisor_2',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            'id' => 4,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ]
                    ],
                ]
            ]
        ],
    ],

];
