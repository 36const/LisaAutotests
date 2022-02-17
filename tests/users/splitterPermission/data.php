<?php

use Codeception\Module\TestHelper;
use lisa\UsersTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Боковая панель при пермишене сплиттера adminBPM',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'sidebarElements' => [
                'canSee' => [
                    UsersTester::sidebarItem(1, '', 'Пользователи Lisa'),
                    UsersTester::sidebarItem(1, '/#/user/list', 'Просмотр пользователей'),
                    UsersTester::sidebarItem(1, '/#/user-changing-history/list', 'История изменения пользователей'),
                    UsersTester::sidebarItem(1, '/#/auth-item/list', 'Роли пользователей'),

                    UsersTester::sidebarItem(2, '', 'Настройки'),
                    UsersTester::sidebarItem(2, '/#/category/list', 'Категории'),
                    UsersTester::sidebarItem(2, '/#/market-supervisor/list', 'Магазины'),
                    UsersTester::sidebarItem(2, '/#/priority/list', 'Приоритеты'),
                    UsersTester::sidebarItem(2, '/#/team/list', 'Команды'),
                    UsersTester::sidebarItem(2, '/#/field-value/list', 'Значения полей заявок'),
                    UsersTester::sidebarItem(2, '/#/difficulty-coef/list', 'Коэффициенты типов задач'),
                    UsersTester::sidebarItem(2, '/#/formula-coef/list', 'Коэффициенты формул'),
                    UsersTester::sidebarItem(2, '/#/reason/list', 'Причины изменения статусов'),
                    UsersTester::sidebarItem(2, '/#/excluded-field/list', 'Взаимоисключающие чекбоксы'),
                    UsersTester::sidebarItem(2, '/#/request-editing/list', 'Редактирование полей заявок'),
                    UsersTester::sidebarItem(2, '/#/auto-diff-field/list', 'Поля автосложности'),
                    UsersTester::sidebarItem(2, '/#/auto-diff-condition/list', 'Условия автосложности'),
                    UsersTester::sidebarItem(2, '/#/cross-check-filter/update/1', 'Условия выборки кросс-чек'),
                    UsersTester::sidebarItem(2, '/#/sv-distribution/list', 'Автораспределение задач'),

                    UsersTester::sidebarItem(3, '', 'Личные настройки'),
                    UsersTester::sidebarItem(3, '/#/filter/list', 'Фильтры'),
                    UsersTester::sidebarItem(3, '/#/request-template/list', 'Шаблоны заявок'),
                    UsersTester::sidebarItem(3, '/#/notification-settings/update', 'Настройки нотификаций'),

                    UsersTester::sidebarItem(4, '/#/request/list/all', 'Заявки'),
                    UsersTester::sidebarItem(5, '/#/export/list', 'Выгрузки'),
                    UsersTester::sidebarItem(6, '/#/notification/list', 'Нотификации'),

                    UsersTester::sidebarItem(7, '', 'Отчеты'),
                    UsersTester::sidebarItem(7, '/#/report/generate', 'Выгрузка'),
                    UsersTester::sidebarItem(7, '/#/report/list', 'Шаблоны отчетов'),
                    UsersTester::sidebarItem(7, '/#/report-period/list', 'Отчетные периоды'),

                    UsersTester::sidebarItem(8, '', 'Управление'),
                    UsersTester::sidebarItem(8, '/#/queue/list', 'Очереди'),
                ],
                'cantSee' => []
            ]
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Боковая панель при пермишене сплиттера userViewerBPM',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'sidebarElements' => [
                'canSee' => [
                    UsersTester::sidebarItem(1, '', 'Пользователи Lisa'),
                    UsersTester::sidebarItem(1, '/#/user/list', 'Просмотр пользователей'),
                    UsersTester::sidebarItem(1, '/#/user-changing-history/list', 'История изменения пользователей'),

                    UsersTester::sidebarItem(2, '', 'Настройки'),
                    UsersTester::sidebarItem(2, '/#/category/list', 'Категории'),
                    UsersTester::sidebarItem(2, '/#/market-supervisor/list', 'Магазины'),
                    UsersTester::sidebarItem(2, '/#/priority/list', 'Приоритеты'),
                    UsersTester::sidebarItem(2, '/#/team/list', 'Команды'),
                    UsersTester::sidebarItem(2, '/#/field-value/list', 'Значения полей заявок'),
                    UsersTester::sidebarItem(2, '/#/difficulty-coef/list', 'Коэффициенты типов задач'),
                    UsersTester::sidebarItem(2, '/#/formula-coef/list', 'Коэффициенты формул'),
                    UsersTester::sidebarItem(2, '/#/reason/list', 'Причины изменения статусов'),
                    UsersTester::sidebarItem(2, '/#/excluded-field/list', 'Взаимоисключающие чекбоксы'),

                    UsersTester::sidebarItem(3, '', 'Личные настройки'),
                    UsersTester::sidebarItem(3, '/#/filter/list', 'Фильтры'),
                    UsersTester::sidebarItem(3, '/#/request-template/list', 'Шаблоны заявок'),
                    UsersTester::sidebarItem(3, '/#/notification-settings/update', 'Настройки нотификаций'),

                    UsersTester::sidebarItem(4, '/#/request/list/all', 'Заявки'),
                    UsersTester::sidebarItem(5, '/#/export/list', 'Выгрузки'),
                    UsersTester::sidebarItem(6, '/#/notification/list', 'Нотификации'),

                    UsersTester::sidebarItem(7, '', 'Отчеты'),
                    UsersTester::sidebarItem(7, '/#/report/generate', 'Выгрузка'),
                ],
                'cantSee' => [
                    UsersTester::sidebarItem(1, '/#/auth-item/list', 'Роли пользователей'),

                    UsersTester::sidebarItem(2, '/#/request-editing/list', 'Редактирование полей заявок'),
                    UsersTester::sidebarItem(2, '/#/auto-diff-field/list', 'Поля автосложности'),
                    UsersTester::sidebarItem(2, '/#/auto-diff-condition/list', 'Условия автосложности'),
                    UsersTester::sidebarItem(2, '/#/cross-check-filter/update/1', 'Условия выборки кросс-чек'),
                    UsersTester::sidebarItem(2, '/#/sv-distribution/list', 'Автораспределение задач'),

                    UsersTester::sidebarItem(7, '/#/report/list', 'Шаблоны отчетов'),
                    UsersTester::sidebarItem(7, '/#/report-period/list', 'Отчетные периоды'),

                    UsersTester::sidebarItem(8, '', 'Управление'),
                    UsersTester::sidebarItem(8, '/#/queue/list', 'Очереди'),
                ]
            ]
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Боковая панель при пермишене сплиттера userBPM',
            'negative' => true
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'sidebarElements' => [
                'canSee' => [
                    UsersTester::sidebarItem(1, '', 'Личные настройки'),
                    UsersTester::sidebarItem(1, '/#/filter/list', 'Фильтры'),
                    UsersTester::sidebarItem(1, '/#/request-template/list', 'Шаблоны заявок'),
                    UsersTester::sidebarItem(1, '/#/notification-settings/update', 'Настройки нотификаций'),

                    UsersTester::sidebarItem(2, '/#/request/list/all', 'Заявки'),
                    UsersTester::sidebarItem(3, '/#/export/list', 'Выгрузки'),
                    UsersTester::sidebarItem(4, '/#/notification/list', 'Нотификации'),

                    UsersTester::sidebarItem(5, '', 'Отчеты'),
                    UsersTester::sidebarItem(5, '/#/report/generate', 'Выгрузка'),
                ],
                'cantSee' => [
                    UsersTester::sidebarItem(1, '', 'Пользователи Lisa'),
                    UsersTester::sidebarItem(1, '/#/user/list', 'Просмотр пользователей'),
                    UsersTester::sidebarItem(1, '/#/user-changing-history/list', 'История изменения пользователей'),
                    UsersTester::sidebarItem(1, '/#/auth-item/list', 'Роли пользователей'),

                    UsersTester::sidebarItem(2, '', 'Настройки'),
                    UsersTester::sidebarItem(2, '/#/category/list', 'Категории'),
                    UsersTester::sidebarItem(2, '/#/market-supervisor/list', 'Магазины'),
                    UsersTester::sidebarItem(2, '/#/priority/list', 'Приоритеты'),
                    UsersTester::sidebarItem(2, '/#/team/list', 'Команды'),
                    UsersTester::sidebarItem(2, '/#/field-value/list', 'Значения полей заявок'),
                    UsersTester::sidebarItem(2, '/#/difficulty-coef/list', 'Коэффициенты типов задач'),
                    UsersTester::sidebarItem(2, '/#/formula-coef/list', 'Коэффициенты формул'),
                    UsersTester::sidebarItem(2, '/#/reason/list', 'Причины изменения статусов'),
                    UsersTester::sidebarItem(2, '/#/excluded-field/list', 'Взаимоисключающие чекбоксы'),
                    UsersTester::sidebarItem(2, '/#/request-editing/list', 'Редактирование полей заявок'),
                    UsersTester::sidebarItem(2, '/#/auto-diff-field/list', 'Поля автосложности'),
                    UsersTester::sidebarItem(2, '/#/auto-diff-condition/list', 'Условия автосложности'),
                    UsersTester::sidebarItem(2, '/#/cross-check-filter/update/1', 'Условия выборки кросс-чек'),
                    UsersTester::sidebarItem(2, '/#/sv-distribution/list', 'Автораспределение задач'),

                    UsersTester::sidebarItem(7, '/#/report/list', 'Шаблоны отчетов'),
                    UsersTester::sidebarItem(7, '/#/report-period/list', 'Отчетные периоды'),

                    UsersTester::sidebarItem(8, '', 'Управление'),
                    UsersTester::sidebarItem(8, '/#/queue/list', 'Очереди'),
                ]
            ]
        ],
    ],

];
