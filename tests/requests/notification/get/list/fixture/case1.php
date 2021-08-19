<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'notification_settings' => [
            [
                //'id' => 1,
                'user_id' => 4,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "30", "53", "54", "67", "supervisor_id", "description", "priority"]',
                'statuses_for_notification' => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}',
                'url_id' => 1,
            ],
            [
                //'id' => 2,
                'user_id' => 6,
                'types_for_notification' => '{"create": 1, "comment": 2, "mention": "1", "manager_id": 0, "attachments": 1, "supervisor_id": 0}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 0, "2": 1, "3": 2, "4": 2, "5": 1, "6": 0, "7": 0, "8": 0, "9": 0, "11": 0}',
                'url_id' => 0,
            ],
            [
                //'id' => 3,
                'user_id' => 11,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}',
                'url_id' => 0,
            ],
        ],
        'user_notifications' => [
            [
                //"id" => 1,
                'user_id' => 4,
                'notification' => '',
                'status' => 1,
                'created_at' => '2020-06-03 14:07:22',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'create',
                'changed_fields' => '{"newValue": 1, "oldValue": null}',
                'notify_service_id' => '5fe1a264253dc6.52838091',
            ],
            [
                //"id" => 2,
                'user_id' => 6,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:07:22',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'create',
                'changed_fields' => '{"newValue": 1, "oldValue": null}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 3,
                'user_id' => 15,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:07:22',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'create',
                'changed_fields' => '{"newValue": 1, "oldValue": null}',
                'notify_service_id' => '5fe1a264253dc6.52838091',
            ],
            [
                //"id" => 4,
                'user_id' => 17,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:07:22',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'create',
                'changed_fields' => '{"newValue": 1, "oldValue": null}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 5,
                'user_id' => 4,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:09:53',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'status',
                'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 6,
                'user_id' => 6,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:09:53',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'status',
                'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 7,
                'user_id' => 15,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:09:53',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'status',
                'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 8,
                'user_id' => 17,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:09:53',
                'request_id' => 1,
                'priority' => 2,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'status',
                'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 9,
                'user_id' => 4,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-07-03 14:11:08',
                'request_id' => 2,
                'priority' => null,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '{"Описание": "Описание", "Приоритет": "Товар-новинка/эксклюзив (трафикообразующий)", "Супервайзер": "Супервайзер Категоркин 15", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Коэффициент уровня сложности задачи": "2"}',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'status',
                'changed_fields' => '{"newValue": 8, "oldValue": 6}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 10,
                'user_id' => 34,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:11:08',
                'request_id' => 2,
                'priority' => 3,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'mention',
                'changed_fields' => '[]',
                'notify_service_id' => '5fe1a264253dc6.52838091',
            ],
            [
                //"id" => 11,
                'user_id' => 4,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-07-03 14:14:37',
                'request_id' => 2,
                'priority' => 3,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'comment',
                'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\n@bpm_teamLead_1  ", "oldValue": ""}',
                'notify_service_id' => null,
            ],
            [
                //"id" => 12,
                'user_id' => 34,
                'notification' => '',
                'status' => 0,
                'created_at' => '2020-06-03 14:14:37',
                'request_id' => 2,
                'priority' => 3,
                'amount_to_work' => 10,
                'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'fields_for_complete' => '[]',
                'triggered_by' => 'Менеджер Продактович 1',
                'event' => 'comment',
                'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\n@bpm_teamLead_1  ", "oldValue": ""}',
                'notify_service_id' => '5fe1a264253dc6.52838091',
            ]
        ],
    ],
];