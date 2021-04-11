<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Снять все чекбоксы, изменить описание',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'AuthItem[description]' => 'Изменяшки',
                'AuthItem[rolePermissions][transferCompletedToInWork]' => '0',
                'AuthItem[rolePermissions][requestCheckHidden]' => '0',
                'AuthItem[rolePermissions][requestAddFatPortalCat]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToClosed]' => '0',
                'AuthItem[rolePermissions][requestUpdateFatPortalCat]' => '0',
                'AuthItem[rolePermissions][requestAddAttrOrValues]' => '0',
                'AuthItem[rolePermissions][sellerUpdate]' => '0',
                'AuthItem[rolePermissions][categoryUpdate]' => '0',
                'AuthItem[rolePermissions][teamUpdate]' => '0',
                'AuthItem[rolePermissions][coefUpdate]' => '0',
                'AuthItem[rolePermissions][fieldsUpdate]' => '0',
                'AuthItem[rolePermissions][reasonsUpdate]' => '0',
                'AuthItem[rolePermissions][excludedFieldsUpdate]' => '0',
                'AuthItem[rolePermissions][requestUpdateAttrOrValues]' => '0',
                'AuthItem[rolePermissions][reportLoadAllUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadMarketUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadYourTeam]' => '0',
                'AuthItem[rolePermissions][errorsUpdate]' => '0',
                'AuthItem[rolePermissions][viewSplitterModerationRequests]' => '0',
                'AuthItem[rolePermissions][takeToWork]' => '0',
                'AuthItem[rolePermissions][priorityUpdate]' => '0',
                'AuthItem[rolePermissions][requestStructureDesign]' => '0',
                'AuthItem[rolePermissions][viewAllDashboards]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByDirection]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByCommand]' => '0',
                'AuthItem[rolePermissions][viewOwnDashboards]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSC]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateVideo]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSizeGrid]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateTags]' => '0',
                'AuthItem[rolePermissions][createUser]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToInCheck]' => '0',
                'AuthItem[rolePermissions][transferInCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferInCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToInWork]' => '0',
                'AuthItem[rolePermissions][transferInWorkToOnHold]' => '0',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '0',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '0',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][transferOnHoldToInWork]' => '0',
                'AuthItem[rolePermissions][updateUser]' => '0',
                'AuthItem[rolePermissions][transferCompletedToClosed]' => '0',
                'AuthItem[rolePermissions][requestCreate]' => '0',
                'AuthItem[rolePermissions][requestUpdate]' => '0',
                'AuthItem[rolePermissions][requestCreateRelated]' => '0',
                'AuthItem[rolePermissions][requestViewOwnRequests]' => '0',
                'AuthItem[rolePermissions][requestViewDirectionRequests]' => '0',
                'AuthItem[rolePermissions][requestViewAllRequests]' => '0',
                'AuthItem[rolePermissions][blockUser]' => '0',
                'AuthItem[rolePermissions][reportView]' => '0',
                'AuthItem[rolePermissions][massEdit]' => '0',
                'AuthItem[rolePermissions][requestViewTeamRequests]' => '0',
                'AuthItem[rolePermissions][requestDeleteAttachments]' => '0',
                'AuthItem[rolePermissions][transferRequireChangeToWaitCheck]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][viewUser]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferInCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][requestAddNewItems]' => '0',
                'AuthItem[rolePermissions][transferInWorkToWaitWork]' => '0',
                'AuthItem[rolePermissions][requestUpdateItems]' => '0',
                'AuthItem[rolePermissions][requestTransferItems]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToInWork]' => '0',
                'AuthItem[rolePermissions][requestGroupItems]' => '0',
                'AuthItem[rolePermissions][requestUploadPhoto]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    'auth.auth_item' => [
                        [
                            'name' => 'Должность',
                            'type' => 1,
                            'description' => 'Изменяшки',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at >=' => date('Y-m-d')
                        ],
                        [
                            'name' => 'Управление пользователями',
                            'type' => 1,
                            'description' => 'Управление пользователями',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadMarketUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по пользователям направления Маркетплейс',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadYourTeam',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по своей комманде',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportView',
                            'type' => 2,
                            'description' => 'Просмотр отчетов',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddAttrOrValues',
                            'type' => 2,
                            'description' => 'Добавление параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddNewItems',
                            'type' => 2,
                            'description' => 'Добавление новых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateSC',
                            'type' => 2,
                            'description' => 'Добавление новых СЦ/изменение существующих СЦ',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateSizeGrid',
                            'type' => 2,
                            'description' => 'Добавление/изменение размерной сетки',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateTags',
                            'type' => 2,
                            'description' => 'Добавление/изменение тегов',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateVideo',
                            'type' => 2,
                            'description' => 'Добавление/изменение видео',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCheckHidden',
                            'type' => 2,
                            'description' => 'Проверка скрытых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestGroupItems',
                            'type' => 2,
                            'description' => 'Группировка товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestStructureDesign',
                            'type' => 2,
                            'description' => 'Проектирование структуры',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestTransferItems',
                            'type' => 2,
                            'description' => 'Перенос товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateAttrOrValues',
                            'type' => 2,
                            'description' => 'Изменение существующих параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateItems',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих товарах',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUploadPhoto',
                            'type' => 2,
                            'description' => 'Заливка фото с фотостудии',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'massEdit',
                            'type' => 2,
                            'description' => 'Пакетное редактирование',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCreate',
                            'type' => 2,
                            'description' => 'Создание задач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCreateRelated',
                            'type' => 2,
                            'description' => 'Создание подзадач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestDeleteAttachments',
                            'type' => 2,
                            'description' => 'Удаление вложеных файлов',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdate',
                            'type' => 2,
                            'description' => 'Обновление полей заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewAllRequests',
                            'type' => 2,
                            'description' => 'Просмотр всех заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewDirectionRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок своего направления',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewOwnRequests',
                            'type' => 2,
                            'description' => 'Просмотр своих заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewTeamRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок команды',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'takeToWork',
                            'type' => 2,
                            'description' => 'Взятие в работу и выполнение/отмена заявок (не менеджером заявки)',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:10',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewSplitterModerationRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок отдела модерации',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'categoryUpdate',
                            'type' => 2,
                            'description' => 'Редактирование категорий',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'coefUpdate',
                            'type' => 2,
                            'description' => 'Редактирование коэфициентов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'excludedFieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование взаимоисключающих чекбоксов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'fieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование полей',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'priorityUpdate',
                            'type' => 2,
                            'description' => 'Редактирование приоритетов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reasonsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование причин',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'sellerUpdate',
                            'type' => 2,
                            'description' => 'Редактирование магазинов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'teamUpdate',
                            'type' => 2,
                            'description' => 'Редактирование команд',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeAllTemplates',
                            'type' => 2,
                            'description' => 'Просмотр всех шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeDirectionTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов направления',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeTeamTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов команды',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'updateTemplates',
                            'type' => 2,
                            'description' => 'Обновление чужих шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToClosed',
                            'type' => 2,
                            'description' => 'Все -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToCompleted',
                            'type' => 2,
                            'description' => 'Все -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToDeclined',
                            'type' => 2,
                            'description' => 'Все -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToInCheck',
                            'type' => 2,
                            'description' => 'Все -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToInWork',
                            'type' => 2,
                            'description' => 'Все -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToOnHold',
                            'type' => 2,
                            'description' => 'Все -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToPartialComplete',
                            'type' => 2,
                            'description' => 'Все -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToRequireChange',
                            'type' => 2,
                            'description' => 'Все -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToWaitCheck',
                            'type' => 2,
                            'description' => 'Все -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToWaitWork',
                            'type' => 2,
                            'description' => 'Все -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToAny',
                            'type' => 2,
                            'description' => 'Закрыта -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToCompleted',
                            'type' => 2,
                            'description' => 'Закрыта -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToDeclined',
                            'type' => 2,
                            'description' => 'Закрыта -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToInCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToInWork',
                            'type' => 2,
                            'description' => 'Закрыта -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToOnHold',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToPartialComplete',
                            'type' => 2,
                            'description' => 'Закрыта -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToRequireChange',
                            'type' => 2,
                            'description' => 'Закрыта -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToWaitCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToWaitWork',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToAny',
                            'type' => 2,
                            'description' => 'Выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToClosed',
                            'type' => 2,
                            'description' => 'Выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToDeclined',
                            'type' => 2,
                            'description' => 'Выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToInCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToInWork',
                            'type' => 2,
                            'description' => 'Выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToRequireFix',
                            'type' => 2,
                            'description' => 'Выполнена -> В работе (херня полная)',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToOnHold',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToPartialComplete',
                            'type' => 2,
                            'description' => 'Выполнена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToRequireChange',
                            'type' => 2,
                            'description' => 'Выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToWaitCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToWaitWork',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToAny',
                            'type' => 2,
                            'description' => 'Отменена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToClosed',
                            'type' => 2,
                            'description' => 'Отменена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToCompleted',
                            'type' => 2,
                            'description' => 'Отменена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToInCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToInWork',
                            'type' => 2,
                            'description' => 'Отменена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToOnHold',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToPartialComplete',
                            'type' => 2,
                            'description' => 'Отменена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToRequireChange',
                            'type' => 2,
                            'description' => 'Отменена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToWaitCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToWaitWork',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToAny',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToClosed',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToCompleted',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToDeclined',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToInWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToOnHold',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Готова для распределения -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToWaitCheck',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToAny',
                            'type' => 2,
                            'description' => 'В работе -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToClosed',
                            'type' => 2,
                            'description' => 'В работе -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToCompleted',
                            'type' => 2,
                            'description' => "В работе\t-> Выполнена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToDeclined',
                            'type' => 2,
                            'description' => "В работе\t-> Отменена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToInCheck',
                            'type' => 2,
                            'description' => 'В работе -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToOnHold',
                            'type' => 2,
                            'description' => "В работе\t-> Ожидает (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToPartialComplete',
                            'type' => 2,
                            'description' => "В работе\t-> Частично выполнена (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToRequireChange',
                            'type' => 2,
                            'description' => 'В работе -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'В работе -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToWaitWork',
                            'type' => 2,
                            'description' => 'В работе -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToAny',
                            'type' => 2,
                            'description' => 'Ожидает -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToClosed',
                            'type' => 2,
                            'description' => 'Ожидает -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToInWork',
                            'type' => 2,
                            'description' => 'Ожидает (нужны ризоны) -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToWaitWork',
                            'type' => 2,
                            'description' => 'Ожидает -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToAny',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToClosed',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToCompleted',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToDeclined',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToInCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToInWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToOnHold',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToRequireChange',
                            'type' => 2,
                            'description' => 'Частично выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToAny',
                            'type' => 2,
                            'description' => 'На доработке -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToClosed',
                            'type' => 2,
                            'description' => 'На доработке -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToCompleted',
                            'type' => 2,
                            'description' => 'На доработке -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToDeclined',
                            'type' => 2,
                            'description' => 'На доработке -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToInCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToInWork',
                            'type' => 2,
                            'description' => 'На доработке -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToOnHold',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToPartialComplete',
                            'type' => 2,
                            'description' => 'На доработке -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToAny',
                            'type' => 2,
                            'description' => 'Новая -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToClosed',
                            'type' => 2,
                            'description' => 'Новая -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToCompleted',
                            'type' => 2,
                            'description' => 'Новая -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToDeclined',
                            'type' => 2,
                            'description' => 'Новая -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToInCheck',
                            'type' => 2,
                            'description' => 'Новые -> Готовы для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToInWork',
                            'type' => 2,
                            'description' => 'Новая -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToOnHold',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Новая -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Новая -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToAny',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToClosed',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToInWork',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToOnHold',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitWork',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewAllDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов с заявками всех направлений, команд и пользователей',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewDashboardsByCommand',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов для супервизоров по своей команде',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewDashboardsByDirection',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по заявкам направления Маркет',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewOwnDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по своим заявкам',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'blockUser',
                            'type' => 2,
                            'description' => 'Блокирование пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'createUser',
                            'type' => 2,
                            'description' => 'Создание пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'errorsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование истории ошибок',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'updateUser',
                            'type' => 2,
                            'description' => 'Изменение пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewUser',
                            'type' => 2,
                            'description' => 'Просмотр пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadAllUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по всем пользователям',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ]
                    ],
                    "auth.auth_item_child" => [
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'createUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'updateUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'blockUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'viewUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'transferWaitWorkToInCheck'
                        ],
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменить только описание',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'AuthItem[description]' => 'Изменяшки',
                'AuthItem[rolePermissions][transferCompletedToInWork]' => '0',
                'AuthItem[rolePermissions][transferCompletedToInWork]' => '1',
                'AuthItem[rolePermissions][requestCheckHidden]' => '0',
                'AuthItem[rolePermissions][requestCheckHidden]' => '1',
                'AuthItem[rolePermissions][requestAddFatPortalCat]' => '0',
                'AuthItem[rolePermissions][requestAddFatPortalCat]' => '1',
                'AuthItem[rolePermissions][transferPartialCompleteToClosed]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToClosed]' => '1',
                'AuthItem[rolePermissions][requestUpdateFatPortalCat]' => '0',
                'AuthItem[rolePermissions][requestUpdateFatPortalCat]' => '1',
                'AuthItem[rolePermissions][requestAddAttrOrValues]' => '0',
                'AuthItem[rolePermissions][requestAddAttrOrValues]' => '1',
                'AuthItem[rolePermissions][sellerUpdate]' => '0',
                'AuthItem[rolePermissions][sellerUpdate]' => '1',
                'AuthItem[rolePermissions][categoryUpdate]' => '0',
                'AuthItem[rolePermissions][categoryUpdate]' => '1',
                'AuthItem[rolePermissions][teamUpdate]' => '0',
                'AuthItem[rolePermissions][teamUpdate]' => '1',
                'AuthItem[rolePermissions][coefUpdate]' => '0',
                'AuthItem[rolePermissions][coefUpdate]' => '1',
                'AuthItem[rolePermissions][fieldsUpdate]' => '0',
                'AuthItem[rolePermissions][fieldsUpdate]' => '1',
                'AuthItem[rolePermissions][reasonsUpdate]' => '0',
                'AuthItem[rolePermissions][reasonsUpdate]' => '1',
                'AuthItem[rolePermissions][excludedFieldsUpdate]' => '0',
                'AuthItem[rolePermissions][excludedFieldsUpdate]' => '1',
                'AuthItem[rolePermissions][requestUpdateAttrOrValues]' => '0',
                'AuthItem[rolePermissions][requestUpdateAttrOrValues]' => '1',
                'AuthItem[rolePermissions][reportLoadAllUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadAllUsers]' => '1',
                'AuthItem[rolePermissions][reportLoadMarketUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadMarketUsers]' => '1',
                'AuthItem[rolePermissions][reportLoadYourTeam]' => '0',
                'AuthItem[rolePermissions][reportLoadYourTeam]' => '1',
                'AuthItem[rolePermissions][errorsUpdate]' => '0',
                'AuthItem[rolePermissions][errorsUpdate]' => '1',
                'AuthItem[rolePermissions][viewSplitterModerationRequests]' => '0',
                'AuthItem[rolePermissions][viewSplitterModerationRequests]' => '1',
                'AuthItem[rolePermissions][takeToWork]' => '0',
                'AuthItem[rolePermissions][takeToWork]' => '1',
                'AuthItem[rolePermissions][priorityUpdate]' => '0',
                'AuthItem[rolePermissions][priorityUpdate]' => '1',
                'AuthItem[rolePermissions][requestStructureDesign]' => '0',
                'AuthItem[rolePermissions][requestStructureDesign]' => '1',
                'AuthItem[rolePermissions][viewAllDashboards]' => '0',
                'AuthItem[rolePermissions][viewAllDashboards]' => '1',
                'AuthItem[rolePermissions][viewDashboardsByDirection]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByDirection]' => '1',
                'AuthItem[rolePermissions][viewDashboardsByCommand]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByCommand]' => '1',
                'AuthItem[rolePermissions][viewOwnDashboards]' => '0',
                'AuthItem[rolePermissions][viewOwnDashboards]' => '1',
                'AuthItem[rolePermissions][requestAddUpdateSC]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSC]' => '1',
                'AuthItem[rolePermissions][requestAddUpdateVideo]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateVideo]' => '1',
                'AuthItem[rolePermissions][requestAddUpdateSizeGrid]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSizeGrid]' => '1',
                'AuthItem[rolePermissions][requestAddUpdateTags]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateTags]' => '1',
                'AuthItem[rolePermissions][createUser]' => '0',
                'AuthItem[rolePermissions][createUser]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToInCheck]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToInCheck]' => '1',
                'AuthItem[rolePermissions][transferInCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferInCheckToRequireChange]' => '1',
                'AuthItem[rolePermissions][transferInCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][transferInCheckToDeclined]' => '1',
                'AuthItem[rolePermissions][transferWaitWorkToInWork]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToInWork]' => '1',
                'AuthItem[rolePermissions][transferInWorkToOnHold]' => '0',
                'AuthItem[rolePermissions][transferInWorkToOnHold]' => '1',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '0',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '1',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '0',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '1',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '1',
                'AuthItem[rolePermissions][transferOnHoldToInWork]' => '0',
                'AuthItem[rolePermissions][transferOnHoldToInWork]' => '1',
                'AuthItem[rolePermissions][updateUser]' => '0',
                'AuthItem[rolePermissions][updateUser]' => '1',
                'AuthItem[rolePermissions][transferCompletedToClosed]' => '0',
                'AuthItem[rolePermissions][transferCompletedToClosed]' => '1',
                'AuthItem[rolePermissions][requestCreate]' => '0',
                'AuthItem[rolePermissions][requestCreate]' => '1',
                'AuthItem[rolePermissions][requestUpdate]' => '0',
                'AuthItem[rolePermissions][requestUpdate]' => '1',
                'AuthItem[rolePermissions][requestCreateRelated]' => '0',
                'AuthItem[rolePermissions][requestCreateRelated]' => '1',
                'AuthItem[rolePermissions][requestViewOwnRequests]' => '0',
                'AuthItem[rolePermissions][requestViewOwnRequests]' => '1',
                'AuthItem[rolePermissions][requestViewDirectionRequests]' => '0',
                'AuthItem[rolePermissions][requestViewDirectionRequests]' => '1',
                'AuthItem[rolePermissions][requestViewAllRequests]' => '0',
                'AuthItem[rolePermissions][requestViewAllRequests]' => '1',
                'AuthItem[rolePermissions][blockUser]' => '0',
                'AuthItem[rolePermissions][blockUser]' => '1',
                'AuthItem[rolePermissions][reportView]' => '0',
                'AuthItem[rolePermissions][reportView]' => '1',
                'AuthItem[rolePermissions][massEdit]' => '0',
                'AuthItem[rolePermissions][massEdit]' => '1',
                'AuthItem[rolePermissions][requestViewTeamRequests]' => '0',
                'AuthItem[rolePermissions][requestViewTeamRequests]' => '1',
                'AuthItem[rolePermissions][requestDeleteAttachments]' => '0',
                'AuthItem[rolePermissions][requestDeleteAttachments]' => '1',
                'AuthItem[rolePermissions][transferRequireChangeToWaitCheck]' => '0',
                'AuthItem[rolePermissions][transferRequireChangeToWaitCheck]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToRequireChange]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToDeclined]' => '1',
                'AuthItem[rolePermissions][viewUser]' => '0',
                'AuthItem[rolePermissions][viewUser]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToWaitWork]' => '1',
                'AuthItem[rolePermissions][transferInCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferInCheckToWaitWork]' => '1',
                'AuthItem[rolePermissions][transferWaitWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToDeclined]' => '1',
                'AuthItem[rolePermissions][requestAddNewItems]' => '0',
                'AuthItem[rolePermissions][requestAddNewItems]' => '1',
                'AuthItem[rolePermissions][transferInWorkToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferInWorkToWaitWork]' => '1',
                'AuthItem[rolePermissions][requestUpdateItems]' => '0',
                'AuthItem[rolePermissions][requestUpdateItems]' => '1',
                'AuthItem[rolePermissions][requestTransferItems]' => '0',
                'AuthItem[rolePermissions][requestTransferItems]' => '1',
                'AuthItem[rolePermissions][transferPartialCompleteToInWork]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToInWork]' => '1',
                'AuthItem[rolePermissions][requestGroupItems]' => '0',
                'AuthItem[rolePermissions][requestGroupItems]' => '1',
                'AuthItem[rolePermissions][requestUploadPhoto]' => '0',
                'AuthItem[rolePermissions][requestUploadPhoto]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    'auth.auth_item' => [
                        [
                            'name' => 'Должность',
                            'type' => 1,
                            'description' => 'Изменяшки',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at >=' => date('Y-m-d')
                        ],
                        [
                            'name' => 'Управление пользователями',
                            'type' => 1,
                            'description' => 'Управление пользователями',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadMarketUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по пользователям направления Маркетплейс',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadYourTeam',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по своей комманде',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportView',
                            'type' => 2,
                            'description' => 'Просмотр отчетов',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddAttrOrValues',
                            'type' => 2,
                            'description' => 'Добавление параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddNewItems',
                            'type' => 2,
                            'description' => 'Добавление новых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateSC',
                            'type' => 2,
                            'description' => 'Добавление новых СЦ/изменение существующих СЦ',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateSizeGrid',
                            'type' => 2,
                            'description' => 'Добавление/изменение размерной сетки',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateTags',
                            'type' => 2,
                            'description' => 'Добавление/изменение тегов',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateVideo',
                            'type' => 2,
                            'description' => 'Добавление/изменение видео',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCheckHidden',
                            'type' => 2,
                            'description' => 'Проверка скрытых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestGroupItems',
                            'type' => 2,
                            'description' => 'Группировка товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestStructureDesign',
                            'type' => 2,
                            'description' => 'Проектирование структуры',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestTransferItems',
                            'type' => 2,
                            'description' => 'Перенос товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateAttrOrValues',
                            'type' => 2,
                            'description' => 'Изменение существующих параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateItems',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих товарах',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUploadPhoto',
                            'type' => 2,
                            'description' => 'Заливка фото с фотостудии',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'massEdit',
                            'type' => 2,
                            'description' => 'Пакетное редактирование',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCreate',
                            'type' => 2,
                            'description' => 'Создание задач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCreateRelated',
                            'type' => 2,
                            'description' => 'Создание подзадач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestDeleteAttachments',
                            'type' => 2,
                            'description' => 'Удаление вложеных файлов',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdate',
                            'type' => 2,
                            'description' => 'Обновление полей заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewAllRequests',
                            'type' => 2,
                            'description' => 'Просмотр всех заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewDirectionRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок своего направления',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewOwnRequests',
                            'type' => 2,
                            'description' => 'Просмотр своих заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewTeamRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок команды',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'takeToWork',
                            'type' => 2,
                            'description' => 'Взятие в работу и выполнение/отмена заявок (не менеджером заявки)',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:10',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewSplitterModerationRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок отдела модерации',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'categoryUpdate',
                            'type' => 2,
                            'description' => 'Редактирование категорий',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'coefUpdate',
                            'type' => 2,
                            'description' => 'Редактирование коэфициентов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'excludedFieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование взаимоисключающих чекбоксов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'fieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование полей',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'priorityUpdate',
                            'type' => 2,
                            'description' => 'Редактирование приоритетов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reasonsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование причин',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'sellerUpdate',
                            'type' => 2,
                            'description' => 'Редактирование магазинов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'teamUpdate',
                            'type' => 2,
                            'description' => 'Редактирование команд',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeAllTemplates',
                            'type' => 2,
                            'description' => 'Просмотр всех шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeDirectionTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов направления',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeTeamTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов команды',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'updateTemplates',
                            'type' => 2,
                            'description' => 'Обновление чужих шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToClosed',
                            'type' => 2,
                            'description' => 'Все -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToCompleted',
                            'type' => 2,
                            'description' => 'Все -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToDeclined',
                            'type' => 2,
                            'description' => 'Все -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToInCheck',
                            'type' => 2,
                            'description' => 'Все -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToInWork',
                            'type' => 2,
                            'description' => 'Все -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToOnHold',
                            'type' => 2,
                            'description' => 'Все -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToPartialComplete',
                            'type' => 2,
                            'description' => 'Все -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToRequireChange',
                            'type' => 2,
                            'description' => 'Все -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToWaitCheck',
                            'type' => 2,
                            'description' => 'Все -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToWaitWork',
                            'type' => 2,
                            'description' => 'Все -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToAny',
                            'type' => 2,
                            'description' => 'Закрыта -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToCompleted',
                            'type' => 2,
                            'description' => 'Закрыта -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToDeclined',
                            'type' => 2,
                            'description' => 'Закрыта -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToInCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToInWork',
                            'type' => 2,
                            'description' => 'Закрыта -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToOnHold',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToPartialComplete',
                            'type' => 2,
                            'description' => 'Закрыта -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToRequireChange',
                            'type' => 2,
                            'description' => 'Закрыта -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToWaitCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToWaitWork',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToAny',
                            'type' => 2,
                            'description' => 'Выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToClosed',
                            'type' => 2,
                            'description' => 'Выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToDeclined',
                            'type' => 2,
                            'description' => 'Выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToInCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToInWork',
                            'type' => 2,
                            'description' => 'Выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToRequireFix',
                            'type' => 2,
                            'description' => 'Выполнена -> В работе (херня полная)',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToOnHold',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToPartialComplete',
                            'type' => 2,
                            'description' => 'Выполнена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToRequireChange',
                            'type' => 2,
                            'description' => 'Выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToWaitCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToWaitWork',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToAny',
                            'type' => 2,
                            'description' => 'Отменена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToClosed',
                            'type' => 2,
                            'description' => 'Отменена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToCompleted',
                            'type' => 2,
                            'description' => 'Отменена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToInCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToInWork',
                            'type' => 2,
                            'description' => 'Отменена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToOnHold',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToPartialComplete',
                            'type' => 2,
                            'description' => 'Отменена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToRequireChange',
                            'type' => 2,
                            'description' => 'Отменена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToWaitCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToWaitWork',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToAny',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToClosed',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToCompleted',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToDeclined',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToInWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToOnHold',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Готова для распределения -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToWaitCheck',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToAny',
                            'type' => 2,
                            'description' => 'В работе -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToClosed',
                            'type' => 2,
                            'description' => 'В работе -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToCompleted',
                            'type' => 2,
                            'description' => "В работе\t-> Выполнена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToDeclined',
                            'type' => 2,
                            'description' => "В работе\t-> Отменена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToInCheck',
                            'type' => 2,
                            'description' => 'В работе -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToOnHold',
                            'type' => 2,
                            'description' => "В работе\t-> Ожидает (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToPartialComplete',
                            'type' => 2,
                            'description' => "В работе\t-> Частично выполнена (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToRequireChange',
                            'type' => 2,
                            'description' => 'В работе -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'В работе -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToWaitWork',
                            'type' => 2,
                            'description' => 'В работе -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToAny',
                            'type' => 2,
                            'description' => 'Ожидает -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToClosed',
                            'type' => 2,
                            'description' => 'Ожидает -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToInWork',
                            'type' => 2,
                            'description' => 'Ожидает (нужны ризоны) -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToWaitWork',
                            'type' => 2,
                            'description' => 'Ожидает -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToAny',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToClosed',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToCompleted',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToDeclined',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToInCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToInWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToOnHold',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToRequireChange',
                            'type' => 2,
                            'description' => 'Частично выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToAny',
                            'type' => 2,
                            'description' => 'На доработке -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToClosed',
                            'type' => 2,
                            'description' => 'На доработке -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToCompleted',
                            'type' => 2,
                            'description' => 'На доработке -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToDeclined',
                            'type' => 2,
                            'description' => 'На доработке -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToInCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToInWork',
                            'type' => 2,
                            'description' => 'На доработке -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToOnHold',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToPartialComplete',
                            'type' => 2,
                            'description' => 'На доработке -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToAny',
                            'type' => 2,
                            'description' => 'Новая -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToClosed',
                            'type' => 2,
                            'description' => 'Новая -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToCompleted',
                            'type' => 2,
                            'description' => 'Новая -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToDeclined',
                            'type' => 2,
                            'description' => 'Новая -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToInCheck',
                            'type' => 2,
                            'description' => 'Новые -> Готовы для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToInWork',
                            'type' => 2,
                            'description' => 'Новая -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToOnHold',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Новая -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Новая -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToAny',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToClosed',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToInWork',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToOnHold',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitWork',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewAllDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов с заявками всех направлений, команд и пользователей',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewDashboardsByCommand',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов для супервизоров по своей команде',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewDashboardsByDirection',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по заявкам направления Маркет',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewOwnDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по своим заявкам',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'blockUser',
                            'type' => 2,
                            'description' => 'Блокирование пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'createUser',
                            'type' => 2,
                            'description' => 'Создание пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'errorsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование истории ошибок',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'updateUser',
                            'type' => 2,
                            'description' => 'Изменение пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewUser',
                            'type' => 2,
                            'description' => 'Просмотр пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadAllUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по всем пользователям',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ]
                    ],
                    "auth.auth_item_child" => [
                        [
                            "parent" => "Должность",
                            "child" => 'createUser'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'updateUser'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'blockUser'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'viewUser'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddNewItems'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestUpdateItems'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestTransferItems'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestGroupItems'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestUploadPhoto'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestCheckHidden'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddFatPortalCat'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestUpdateFatPortalCat'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddAttrOrValues'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestUpdateAttrOrValues'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestStructureDesign'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddUpdateSC'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddUpdateVideo'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddUpdateTags'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitCheckToInCheck'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInCheckToRequireChange'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInCheckToDeclined'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitWorkToInWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInWorkToOnHold'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInWorkToPartialComplete'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInWorkToCompleted'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInWorkToDeclined'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferOnHoldToInWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferCompletedToClosed'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestCreate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestCreateRelated'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestViewOwnRequests'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestViewDirectionRequests'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestViewAllRequests'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'reportView'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'massEdit'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestViewTeamRequests'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestDeleteAttachments'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitCheckToDeclined'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInCheckToWaitWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitWorkToDeclined'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInWorkToWaitWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferPartialCompleteToInWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferCompletedToInWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferPartialCompleteToClosed'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'sellerUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'categoryUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'teamUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'coefUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'fieldsUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'reasonsUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'excludedFieldsUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'reportLoadAllUsers'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'reportLoadMarketUsers'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'reportLoadYourTeam'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'errorsUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'viewSplitterModerationRequests'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'takeToWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'priorityUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'viewAllDashboards'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'viewDashboardsByDirection'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'viewDashboardsByCommand'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'viewOwnDashboards'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'createUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'updateUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'blockUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'viewUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'transferWaitWorkToInCheck'
                        ]
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Снять одни чекбоксы и поставить другие',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                'AuthItem[description]' => 'Описание описания',
                'AuthItem[rolePermissions][transferCompletedToInWork]' => '0',
                'AuthItem[rolePermissions][requestCheckHidden]' => '0',
                'AuthItem[rolePermissions][requestAddFatPortalCat]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToClosed]' => '0',
                'AuthItem[rolePermissions][requestUpdateFatPortalCat]' => '0',
                'AuthItem[rolePermissions][requestAddAttrOrValues]' => '0',
                'AuthItem[rolePermissions][sellerUpdate]' => '0',
                'AuthItem[rolePermissions][categoryUpdate]' => '0',
                'AuthItem[rolePermissions][categoryUpdate]' => '1',
                'AuthItem[rolePermissions][teamUpdate]' => '0',
                'AuthItem[rolePermissions][coefUpdate]' => '0',
                'AuthItem[rolePermissions][coefUpdate]' => '1',
                'AuthItem[rolePermissions][fieldsUpdate]' => '0',
                'AuthItem[rolePermissions][reasonsUpdate]' => '0',
                'AuthItem[rolePermissions][excludedFieldsUpdate]' => '0',
                'AuthItem[rolePermissions][requestUpdateAttrOrValues]' => '0',
                'AuthItem[rolePermissions][requestUpdateAttrOrValues]' => '1',
                'AuthItem[rolePermissions][reportLoadAllUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadMarketUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadMarketUsers]' => '1',
                'AuthItem[rolePermissions][reportLoadYourTeam]' => '0',
                'AuthItem[rolePermissions][errorsUpdate]' => '0',
                'AuthItem[rolePermissions][viewSplitterModerationRequests]' => '0',
                'AuthItem[rolePermissions][takeToWork]' => '0',
                'AuthItem[rolePermissions][priorityUpdate]' => '0',
                'AuthItem[rolePermissions][priorityUpdate]' => '1',
                'AuthItem[rolePermissions][requestStructureDesign]' => '0',
                'AuthItem[rolePermissions][viewAllDashboards]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByDirection]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByDirection]' => '1',
                'AuthItem[rolePermissions][viewDashboardsByCommand]' => '0',
                'AuthItem[rolePermissions][viewOwnDashboards]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSC]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateVideo]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateVideo]' => '1',
                'AuthItem[rolePermissions][requestAddUpdateSizeGrid]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSizeGrid]' => '1',
                'AuthItem[rolePermissions][requestAddUpdateTags]' => '0',
                'AuthItem[rolePermissions][createUser]' => '0',
                'AuthItem[rolePermissions][createUser]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToInCheck]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToInCheck]' => '1',
                'AuthItem[rolePermissions][transferInCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferInCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][transferInCheckToDeclined]' => '1',
                'AuthItem[rolePermissions][transferWaitWorkToInWork]' => '0',
                'AuthItem[rolePermissions][transferInWorkToOnHold]' => '0',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '0',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '1',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '0',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][transferOnHoldToInWork]' => '0',
                'AuthItem[rolePermissions][transferOnHoldToInWork]' => '1',
                'AuthItem[rolePermissions][updateUser]' => '0',
                'AuthItem[rolePermissions][updateUser]' => '1',
                'AuthItem[rolePermissions][transferCompletedToClosed]' => '0',
                'AuthItem[rolePermissions][requestCreate]' => '0',
                'AuthItem[rolePermissions][requestUpdate]' => '0',
                'AuthItem[rolePermissions][requestUpdate]' => '1',
                'AuthItem[rolePermissions][requestCreateRelated]' => '0',
                'AuthItem[rolePermissions][requestViewOwnRequests]' => '0',
                'AuthItem[rolePermissions][requestViewDirectionRequests]' => '0',
                'AuthItem[rolePermissions][requestViewDirectionRequests]' => '1',
                'AuthItem[rolePermissions][requestViewAllRequests]' => '0',
                'AuthItem[rolePermissions][requestViewAllRequests]' => '1',
                'AuthItem[rolePermissions][blockUser]' => '0',
                'AuthItem[rolePermissions][reportView]' => '0',
                'AuthItem[rolePermissions][massEdit]' => '0',
                'AuthItem[rolePermissions][requestViewTeamRequests]' => '0',
                'AuthItem[rolePermissions][requestDeleteAttachments]' => '0',
                'AuthItem[rolePermissions][requestDeleteAttachments]' => '1',
                'AuthItem[rolePermissions][transferRequireChangeToWaitCheck]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToRequireChange]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][viewUser]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferInCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][requestAddNewItems]' => '0',
                'AuthItem[rolePermissions][requestAddNewItems]' => '1',
                'AuthItem[rolePermissions][transferInWorkToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferInWorkToWaitWork]' => '1',
                'AuthItem[rolePermissions][requestUpdateItems]' => '0',
                'AuthItem[rolePermissions][requestTransferItems]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToInWork]' => '0',
                'AuthItem[rolePermissions][requestGroupItems]' => '0',
                'AuthItem[rolePermissions][requestUploadPhoto]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    'auth.auth_item' => [
                        [
                            'name' => 'Должность',
                            'type' => 1,
                            'description' => 'Описание описания',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at >=' => date('Y-m-d')
                        ],
                        [
                            'name' => 'Управление пользователями',
                            'type' => 1,
                            'description' => 'Управление пользователями',
                            'group' => null,
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadMarketUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по пользователям направления Маркетплейс',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadYourTeam',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по своей комманде',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportView',
                            'type' => 2,
                            'description' => 'Просмотр отчетов',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddAttrOrValues',
                            'type' => 2,
                            'description' => 'Добавление параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddNewItems',
                            'type' => 2,
                            'description' => 'Добавление новых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateSC',
                            'type' => 2,
                            'description' => 'Добавление новых СЦ/изменение существующих СЦ',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateSizeGrid',
                            'type' => 2,
                            'description' => 'Добавление/изменение размерной сетки',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateTags',
                            'type' => 2,
                            'description' => 'Добавление/изменение тегов',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestAddUpdateVideo',
                            'type' => 2,
                            'description' => 'Добавление/изменение видео',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCheckHidden',
                            'type' => 2,
                            'description' => 'Проверка скрытых товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestGroupItems',
                            'type' => 2,
                            'description' => 'Группировка товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestStructureDesign',
                            'type' => 2,
                            'description' => 'Проектирование структуры',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestTransferItems',
                            'type' => 2,
                            'description' => 'Перенос товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateAttrOrValues',
                            'type' => 2,
                            'description' => 'Изменение существующих параметров/значений',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateFatPortalCat',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdateItems',
                            'type' => 2,
                            'description' => 'Добавление/изменение информации в существующих товарах',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUploadPhoto',
                            'type' => 2,
                            'description' => 'Заливка фото с фотостудии',
                            'group' => 'request',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'massEdit',
                            'type' => 2,
                            'description' => 'Пакетное редактирование',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCreate',
                            'type' => 2,
                            'description' => 'Создание задач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestCreateRelated',
                            'type' => 2,
                            'description' => 'Создание подзадач',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestDeleteAttachments',
                            'type' => 2,
                            'description' => 'Удаление вложеных файлов',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestUpdate',
                            'type' => 2,
                            'description' => 'Обновление полей заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewAllRequests',
                            'type' => 2,
                            'description' => 'Просмотр всех заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewDirectionRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок своего направления',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewOwnRequests',
                            'type' => 2,
                            'description' => 'Просмотр своих заявок',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'requestViewTeamRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок команды',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:51',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'takeToWork',
                            'type' => 2,
                            'description' => 'Взятие в работу и выполнение/отмена заявок (не менеджером заявки)',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:10',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewSplitterModerationRequests',
                            'type' => 2,
                            'description' => 'Просмотр заявок отдела модерации',
                            'group' => 'requestManagement',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'categoryUpdate',
                            'type' => 2,
                            'description' => 'Редактирование категорий',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'coefUpdate',
                            'type' => 2,
                            'description' => 'Редактирование коэфициентов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'excludedFieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование взаимоисключающих чекбоксов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'fieldsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование полей',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'priorityUpdate',
                            'type' => 2,
                            'description' => 'Редактирование приоритетов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reasonsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование причин',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'sellerUpdate',
                            'type' => 2,
                            'description' => 'Редактирование магазинов',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'teamUpdate',
                            'type' => 2,
                            'description' => 'Редактирование команд',
                            'group' => 'settings',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeAllTemplates',
                            'type' => 2,
                            'description' => 'Просмотр всех шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeDirectionTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов направления',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'seeTeamTemplates',
                            'type' => 2,
                            'description' => 'Просмотр шаблонов команды',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'updateTemplates',
                            'type' => 2,
                            'description' => 'Обновление чужих шаблонов',
                            'group' => 'templates',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2021-03-19 08:41:28',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToClosed',
                            'type' => 2,
                            'description' => 'Все -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToCompleted',
                            'type' => 2,
                            'description' => 'Все -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToDeclined',
                            'type' => 2,
                            'description' => 'Все -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToInCheck',
                            'type' => 2,
                            'description' => 'Все -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToInWork',
                            'type' => 2,
                            'description' => 'Все -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToOnHold',
                            'type' => 2,
                            'description' => 'Все -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToPartialComplete',
                            'type' => 2,
                            'description' => 'Все -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToRequireChange',
                            'type' => 2,
                            'description' => 'Все -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToWaitCheck',
                            'type' => 2,
                            'description' => 'Все -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferAnyToWaitWork',
                            'type' => 2,
                            'description' => 'Все -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToAny',
                            'type' => 2,
                            'description' => 'Закрыта -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToCompleted',
                            'type' => 2,
                            'description' => 'Закрыта -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToDeclined',
                            'type' => 2,
                            'description' => 'Закрыта -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToInCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToInWork',
                            'type' => 2,
                            'description' => 'Закрыта -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToOnHold',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToPartialComplete',
                            'type' => 2,
                            'description' => 'Закрыта -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToRequireChange',
                            'type' => 2,
                            'description' => 'Закрыта -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToWaitCheck',
                            'type' => 2,
                            'description' => 'Закрыта -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferClosedToWaitWork',
                            'type' => 2,
                            'description' => 'Закрыта -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToAny',
                            'type' => 2,
                            'description' => 'Выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToClosed',
                            'type' => 2,
                            'description' => 'Выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToDeclined',
                            'type' => 2,
                            'description' => 'Выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToInCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToInWork',
                            'type' => 2,
                            'description' => 'Выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToRequireFix',
                            'type' => 2,
                            'description' => 'Выполнена -> В работе (херня полная)',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToOnHold',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToPartialComplete',
                            'type' => 2,
                            'description' => 'Выполнена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToRequireChange',
                            'type' => 2,
                            'description' => 'Выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToWaitCheck',
                            'type' => 2,
                            'description' => 'Выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferCompletedToWaitWork',
                            'type' => 2,
                            'description' => 'Выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToAny',
                            'type' => 2,
                            'description' => 'Отменена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToClosed',
                            'type' => 2,
                            'description' => 'Отменена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToCompleted',
                            'type' => 2,
                            'description' => 'Отменена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToInCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToInWork',
                            'type' => 2,
                            'description' => 'Отменена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToOnHold',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToPartialComplete',
                            'type' => 2,
                            'description' => 'Отменена -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToRequireChange',
                            'type' => 2,
                            'description' => 'Отменена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToWaitCheck',
                            'type' => 2,
                            'description' => 'Отменена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferDeclinedToWaitWork',
                            'type' => 2,
                            'description' => 'Отменена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToAny',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToClosed',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToCompleted',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToDeclined',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToInWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToOnHold',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Готова для распределения -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToWaitCheck',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Готова для распределения -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToAny',
                            'type' => 2,
                            'description' => 'В работе -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToClosed',
                            'type' => 2,
                            'description' => 'В работе -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToCompleted',
                            'type' => 2,
                            'description' => "В работе\t-> Выполнена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToDeclined',
                            'type' => 2,
                            'description' => "В работе\t-> Отменена",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToInCheck',
                            'type' => 2,
                            'description' => 'В работе -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToOnHold',
                            'type' => 2,
                            'description' => "В работе\t-> Ожидает (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToPartialComplete',
                            'type' => 2,
                            'description' => "В работе\t-> Частично выполнена (нужны ризоны)",
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToRequireChange',
                            'type' => 2,
                            'description' => 'В работе -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'В работе -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferInWorkToWaitWork',
                            'type' => 2,
                            'description' => 'В работе -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToAny',
                            'type' => 2,
                            'description' => 'Ожидает -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToClosed',
                            'type' => 2,
                            'description' => 'Ожидает -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToInWork',
                            'type' => 2,
                            'description' => 'Ожидает (нужны ризоны) -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferOnHoldToWaitWork',
                            'type' => 2,
                            'description' => 'Ожидает -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToAny',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToClosed',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToCompleted',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToDeclined',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToInCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToInWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToOnHold',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToRequireChange',
                            'type' => 2,
                            'description' => 'Частично выполнена -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitCheck',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferPartialCompleteToWaitWork',
                            'type' => 2,
                            'description' => 'Частично выполнена -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToAny',
                            'type' => 2,
                            'description' => 'На доработке -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToClosed',
                            'type' => 2,
                            'description' => 'На доработке -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToCompleted',
                            'type' => 2,
                            'description' => 'На доработке -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToDeclined',
                            'type' => 2,
                            'description' => 'На доработке -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToInCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToInWork',
                            'type' => 2,
                            'description' => 'На доработке -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToOnHold',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToPartialComplete',
                            'type' => 2,
                            'description' => 'На доработке -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitCheck',
                            'type' => 2,
                            'description' => 'На доработке -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToAny',
                            'type' => 2,
                            'description' => 'Новая -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToClosed',
                            'type' => 2,
                            'description' => 'Новая -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToCompleted',
                            'type' => 2,
                            'description' => 'Новая -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToDeclined',
                            'type' => 2,
                            'description' => 'Новая -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToInCheck',
                            'type' => 2,
                            'description' => 'Новые -> Готовы для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToInWork',
                            'type' => 2,
                            'description' => 'Новая -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToOnHold',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToPartialComplete',
                            'type' => 2,
                            'description' => 'Новая -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToRequireChange',
                            'type' => 2,
                            'description' => 'Новая -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitCheckToWaitWork',
                            'type' => 2,
                            'description' => 'Новая -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToAny',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Все',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToClosed',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Закрыта',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToCompleted',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToDeclined',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Отменена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToInCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Готова для распределения',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToInWork',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> В работе',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToOnHold',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Ожидает',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToPartialComplete',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Частично выполнена',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToRequireChange',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> На доработке',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferWaitWorkToWaitCheck',
                            'type' => 2,
                            'description' => 'Ожидает взятия в работу -> Новая',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'transferRequireChangeToWaitWork',
                            'type' => 2,
                            'description' => 'На доработке -> Ожидает взятия в работу',
                            'group' => 'transfer',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:07',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewAllDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов с заявками всех направлений, команд и пользователей',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewDashboardsByCommand',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов для супервизоров по своей команде',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewDashboardsByDirection',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по заявкам направления Маркет',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewOwnDashboards',
                            'type' => 2,
                            'description' => 'Просмотр дашбордов по своим заявкам',
                            'group' => 'dashboard',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:11',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'blockUser',
                            'type' => 2,
                            'description' => 'Блокирование пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'createUser',
                            'type' => 2,
                            'description' => 'Создание пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'errorsUpdate',
                            'type' => 2,
                            'description' => 'Редактирование истории ошибок',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'updateUser',
                            'type' => 2,
                            'description' => 'Изменение пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'viewUser',
                            'type' => 2,
                            'description' => 'Просмотр пользователей',
                            'group' => 'general',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-03-10 12:07:48',
                            'updated_at' => null
                        ],
                        [
                            'name' => 'reportLoadAllUsers',
                            'type' => 2,
                            'description' => 'Выгрузка отчетов по всем пользователям',
                            'group' => 'report',
                            'rule_name' => null,
                            'data' => null,
                            'created_at' => '2020-12-03 12:30:09',
                            'updated_at' => null
                        ]
                    ],
                    "auth.auth_item_child" => [
                        [
                            "parent" => "Должность",
                            "child" => 'createUser'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'updateUser'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddNewItems'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestUpdateAttrOrValues'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddUpdateVideo'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitCheckToInCheck'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInCheckToDeclined'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInWorkToPartialComplete'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferOnHoldToInWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestViewDirectionRequests'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestViewAllRequests'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'requestDeleteAttachments'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'transferInWorkToWaitWork'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'categoryUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'coefUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'reportLoadMarketUsers'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'priorityUpdate'
                        ],
                        [
                            "parent" => "Должность",
                            "child" => 'viewDashboardsByDirection'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'createUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'updateUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'blockUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'viewUser'
                        ],
                        [
                            "parent" => "Управление пользователями",
                            "child" => 'transferWaitWorkToInCheck'
                        ]
                    ]
                ]
            ]
        ]
    ],

];
