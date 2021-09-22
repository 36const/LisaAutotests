<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                //"id" => 1,
                'author_id' => 16,
                'type_id' => 2,
                'supervisor_id' => 10,
                'manager_id' => null,
                'status' => 1,
                'direction' => 1,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-09 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => 9423,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 3,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 2,
                'author_id' => 16,
                'type_id' => 1,
                'supervisor_id' => 5,
                'manager_id' => null,
                'status' => 1,
                'direction' => 2,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-11 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                'description' => "Описание\r\nhttp://gomer.local/bpm/request/view?id=11&forCrossCheck=0\r\nhttp://gomer.local/bpm/request/view?id=11&forCrossCheck=0\r\n=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<\\|1234567890абвгдеёжзийклмноп513\r\nhttp://gomer.local/bpm/request/view?id=11&forCrossCheck=0",
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-26 21:05:03',
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 3,
                'author_id' => 18,
                'type_id' => 4,
                'supervisor_id' => 33,
                'manager_id' => null,
                'status' => 1,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-14 00:00:00',
                'correction_comment' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОП\r\nhttp://gomer.local/bpm/request/view?id=14&forCrossCheck=0",
                'amount_to_work' => 10,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 474,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-20 21:05:03',
                'team_direction' => 4,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 1,
                'photo_load_status' => 0,
                'previous_status' => null,
                'supplier_cabinet_id' => null,
                'rz_category_id' => 83850,
            ],
            [
                //"id" => 4,
                'author_id' => 17,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 2,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-02-01 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 5,
                'author_id' => 18,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 2,
                'direction' => 1,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-02-10 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 5,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-26 21:05:03',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 6,
                'author_id' => 17,
                'type_id' => 3,
                'supervisor_id' => 5,
                'manager_id' => null,
                'status' => 2,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-02-13 00:00:00',
                'correction_comment' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-20 21:05:03',
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 7,
                'author_id' => 21,
                'type_id' => 5,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 3,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-03-02 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 5,
                'recommendations' => null,
                'reason' => 'Затребовать изменения',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2021-03-26 21:05:03',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 8,
                'author_id' => 15,
                'type_id' => 2,
                'supervisor_id' => 10,
                'manager_id' => null,
                'status' => 3,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-03-12 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'description' => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)\r\n",
                'category_id' => null,
                'seller_id' => 9423,
                'recommendations' => 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyzабвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyz',
                'reason' => "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory\n",
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 2,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 9,
                'author_id' => 17,
                'type_id' => 4,
                'supervisor_id' => 33,
                'manager_id' => null,
                'status' => 3,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-03-15 00:00:00',
                'correction_comment' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО
http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:\'\',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\'6\',w:24,x:24,y:30),id:\'7ba18f80-2238-11ea-a052-1d55fc41757c\',panelIndex:\'6\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'7\',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\'7\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'8\',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\'8\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'9\',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\'9\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'10\',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\'10\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'11\',w:24,x:24,y:45),id:\'1e605320-2287-11ea-825a-395acaa4d6c3\',panelIndex:\'11\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'12\',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\'12\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'13\',w:24,x:24,y:15),id:\'36fe2110-24bb-11ea-a052-1d55fc41757c\',panelIndex:\'13\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'14\',w:24,x:0,y:30),id:\'6f8eba80-24ca-11ea-825a-395acaa4d6c3\',panelIndex:\'14\',type:visualization,version:\'6.4.2\')),query:(language:kuery,query:\'\'),timeRestore:!t,title:\'Goods%20Experimental%20Copy\',viewMode:view)',
                'amount_to_work' => 10,
                'subject' => 'Группировка товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => '',
                'reason' => 'На доработку',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 4,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 2,
                'supplier_cabinet_id' => null,
                'rz_category_id' => 753399,
            ],
            [
                //"id" => 10,
                'author_id' => 19,
                'type_id' => 10,
                'supervisor_id' => 34,
                'manager_id' => 13,
                'status' => 4,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-04-18 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => 'Отменить',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:40:59',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-08-20 14:42:31',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-26 21:05:03',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 5,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 11,
                'author_id' => 17,
                'type_id' => 11,
                'supervisor_id' => 34,
                'manager_id' => 12,
                'status' => 4,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-04-25 08:01:56',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => null,
                'recommendations' => '',
                'reason' => 'Отменить',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-04-25 11:03:19',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-04-25 11:03:37',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1", "2": "2"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 12,
                'author_id' => 15,
                'type_id' => 7,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 5,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-05-03 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => '2020-01-01 00:00:55',
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 13,
                'author_id' => 15,
                'type_id' => 1,
                'supervisor_id' => 6,
                'manager_id' => 12,
                'status' => 5,
                'direction' => 1,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-05-08 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => '2020-01-02 00:12:55',
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-26 21:05:03',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 14,
                'author_id' => 17,
                'type_id' => 12,
                'supervisor_id' => 6,
                'manager_id' => 13,
                'status' => 5,
                'direction' => 1,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-05-16 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-20 21:05:03',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 2,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 15,
                'author_id' => 19,
                'type_id' => 9,
                'supervisor_id' => 34,
                'manager_id' => 12,
                'status' => 6,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 1,
                'created_at' => '2020-06-04 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2021-03-27 21:05:03',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory\n",
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 9,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 16,
                'author_id' => 20,
                'type_id' => 9,
                'supervisor_id' => 34,
                'manager_id' => 14,
                'status' => 6,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 1,
                'created_at' => '2020-06-17 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:40:59',
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 1,
                'cross_check_manager_id' => 13,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 8,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 17,
                'author_id' => 16,
                'type_id' => 11,
                'supervisor_id' => 37,
                'manager_id' => 14,
                'status' => 6,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-06-19 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Проектирование структуры (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:40:58',
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => "256\r\n=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*()_+-=256",
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 5,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 18,
                'author_id' => 20,
                'type_id' => 10,
                'supervisor_id' => 37,
                'manager_id' => 11,
                'status' => 7,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-07-05 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => 'Ожидать',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 19,
                'author_id' => 16,
                'type_id' => 14,
                'supervisor_id' => 38,
                'manager_id' => 14,
                'status' => 7,
                'direction' => 0,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-07-21 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение размерной сетки (Определяется типом задачи)',
                'description' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<\\|1234567890абвгдеёжзийклмноп5131234567890абвгдеёжзийклмноп5131234567890абвгдеёжзийклмноп5131234567890абвгдеёжзийклмноп5131234567890абвгдеёжзийклмноп5131234567890абвгдеёжзийклмноп513\r\n1234567890абвгдеёжзийклмноп513\r\n\r\n",
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => 'http://gomer.local/bpm/request/view?id=21&forCrossCheck=0',
                'reason' => 'Ожидать',
                'parent_id' => 3,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:48:21',
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-20 21:05:03',
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 20,
                'author_id' => 15,
                'type_id' => 13,
                'supervisor_id' => 38,
                'manager_id' => 12,
                'status' => 8,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-08-06 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'description' => "http://gomer.local/bpm/request/view?id=11&forCrossCheck=0\nhttp://gomer.local/bpm/request/view?id=11&forCrossCheck=0\n=~}!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2021-03-27 21:05:03',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => "Комментарий к результату задачи\nКомментарий к результату задачи\nКомментарий к результату задачи\nКомментарий к результату задачи\nКомментарий к результату задачи\nКомментарий к результату задачи",
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 21,
                'author_id' => 18,
                'type_id' => 15,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-09-07 21:05:03',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2021-03-27 21:05:03',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 22,
                'author_id' => 18,
                'type_id' => 13,
                'supervisor_id' => 35,
                'manager_id' => 13,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-08-21 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'description' => "Описание\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0\n№20 Добавление/изменение видео (Определяется типом задачи)\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0\n№20 Добавление/изменение видео (Определяется типом задачи)\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0\n№20 Добавление/изменение видео (Определяется типом задачи)\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0\n№20 Добавление/изменение видео (Определяется типом задачи)\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0\n№20 Добавление/изменение видео (Определяется типом задачи)\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0\n№20 Добавление/изменение видео (Определяется типом задачи)\n",
                'category_id' => 2,
                'seller_id' => 9423,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:48:21',
                'actual_finish_date' => '2020-08-20 14:50:51',
                'supervisor_process_date' => '2020-08-20 14:50:51',
                'supervisor_check_date' => null,
                'result_comment' => "Выполнена\r\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0\r\nhttp://gomer.local/bpm/request/view?id=20&forCrossCheck=0",
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-26 21:05:03',
                'team_direction' => 6,
                'report_period_id' => 2,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 23,
                'author_id' => 17,
                'type_id' => 15,
                'supervisor_id' => 35,
                'manager_id' => 13,
                'status' => 11,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-11-22 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'description' => "http://gomer.local/bpm/request/view?id=22&forCrossCheck=0\r\nhttp://gomer.local/bpm/request/view?id=22&forCrossCheck=0\r\nОписание",
                'category_id' => null,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-08-20 14:48:20',
                'actual_finish_date' => '2021-03-27 20:05:03',
                'supervisor_process_date' => '2020-08-20 14:49:03',
                'supervisor_check_date' => '2020-08-20 14:51:53',
                'result_comment' => "Выполнена\nабвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі\nАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ\nabcdefghijklmnopqrstuvwxyz\nабвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі\nАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ\nabcdefghijklmnopqrstuvwxyzабвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІabcdefghijklmnopqrstuvwxyz\n",
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 2,
                'cross_check_manager_id' => 14,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 8,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 24,
                'author_id' => 16,
                'type_id' => 7,
                'supervisor_id' => 35,
                'manager_id' => 14,
                'status' => 11,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-11-23 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => null,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-11-23 14:54:56',
                'actual_finish_date' => '2021-03-26 21:05:03',
                'supervisor_process_date' => '2020-11-23 14:57:30',
                'supervisor_check_date' => '2020-11-23 14:57:48',
                'result_comment' => 'Выполнена',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-27 21:05:03',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 9,
                'supplier_cabinet_id' => null
            ],
            [
                //"id" => 25,
                'author_id' => 15,
                'type_id' => 8,
                'supervisor_id' => 38,
                'manager_id' => 13,
                'status' => 11,
                'direction' => 0,
                'priority' => 1,
                'awaiting_correction' => 0,
                'created_at' => '2020-11-24 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 2,
                'seller_id' => 0,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-11-24 14:54:43',
                'actual_finish_date' => '2021-03-25 21:05:03',
                'supervisor_process_date' => '2020-11-24 14:56:40',
                'supervisor_check_date' => '2020-11-24 14:57:06',
                'result_comment' => 'Выполнена',
                'supervisor_comment' => '',
                'last_change_status_date' => '2021-03-26 21:05:03',
                'team_direction' => 6,
                'report_period_id' => 3,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": "1", "2": "2"}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 9,
                'supplier_cabinet_id' => null
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 1,
                'field_id' => 4,
                'value' => '1'
            ],
            [
                'request_id' => 1,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 52,
                'value' => '3'
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 1,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 1,
                'field_id' => 159,
                'value' => '1'
            ],
            [
                'request_id' => 2,
                'field_id' => 8,
                'value' => '1'
            ],
            [
                'request_id' => 2,
                'field_id' => 15,
                'value' => '1'
            ],
            [
                'request_id' => 2,
                'field_id' => 19,
                'value' => '1'
            ],
            [
                'request_id' => 2,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 53,
                'value' => '3'
            ],
            [
                'request_id' => 2,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 114,
                'value' => '3'
            ],
            [
                'request_id' => 2,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 2,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 3,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 3,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 3,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 3,
                'field_id' => 61,
                'value' => '0'
            ],
            [
                'request_id' => 3,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 3,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 3,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 3,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 4,
                'field_id' => 8,
                'value' => '1'
            ],
            [
                'request_id' => 4,
                'field_id' => 15,
                'value' => '1'
            ],
            [
                'request_id' => 4,
                'field_id' => 19,
                'value' => '1'
            ],
            [
                'request_id' => 4,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 53,
                'value' => '3'
            ],
            [
                'request_id' => 4,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 67,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 72,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 73,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 74,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 75,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 93,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 94,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 114,
                'value' => '3'
            ],
            [
                'request_id' => 4,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 4,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 5,
                'field_id' => 8,
                'value' => '1'
            ],
            [
                'request_id' => 5,
                'field_id' => 9,
                'value' => '1'
            ],
            [
                'request_id' => 5,
                'field_id' => 15,
                'value' => '1'
            ],
            [
                'request_id' => 5,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 52,
                'value' => '2'
            ],
            [
                'request_id' => 5,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 5,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 67,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 68,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 69,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 70,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 71,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 76,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 77,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 88,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 93,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 94,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 111,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 5,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 6,
                'field_id' => 17,
                'value' => '1'
            ],
            [
                'request_id' => 6,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 67,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 72,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 73,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 74,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 75,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 93,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 94,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 114,
                'value' => '3'
            ],
            [
                'request_id' => 6,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 6,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 7,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 7,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 7,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 7,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 7,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 7,
                'field_id' => 52,
                'value' => '2'
            ],
            [
                'request_id' => 7,
                'field_id' => 53,
                'value' => '0.5'
            ],
            [
                'request_id' => 7,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 7,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 7,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 7,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 7,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 8,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 67,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 72,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 73,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 74,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 75,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 93,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 94,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 114,
                'value' => '3'
            ],
            [
                'request_id' => 8,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 8,
                'field_id' => 159,
                'value' => '1'
            ],
            [
                'request_id' => 9,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 9,
                'field_id' => 61,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 91,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 93,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 94,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 95,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 103,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 116,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 145,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 148,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 161,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 162,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 163,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 164,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 165,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 166,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 167,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 168,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 170,
                'value' => '0'
            ],
            [
                'request_id' => 9,
                'field_id' => 171,
                'value' => '0.07'
            ],
            [
                'request_id' => 9,
                'field_id' => 172,
                'value' => '0.15'
            ],
            [
                'request_id' => 9,
                'field_id' => 173,
                'value' => '0.1'
            ],
            [
                'request_id' => 10,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 10,
                'field_id' => 53,
                'value' => '0.5'
            ],
            [
                'request_id' => 10,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 10,
                'field_id' => 59,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 79,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 80,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 84,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 91,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 97,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 98,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 99,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 113,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 10,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 11,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 11,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 11,
                'field_id' => 59,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 79,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 80,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 84,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 91,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 97,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 98,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 99,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 113,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 11,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 12,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 12,
                'field_id' => 6,
                'value' => '1'
            ],
            [
                'request_id' => 12,
                'field_id' => 7,
                'value' => '1'
            ],
            [
                'request_id' => 12,
                'field_id' => 29,
                'value' => '36'
            ],
            [
                'request_id' => 12,
                'field_id' => 30,
                'value' => '47'
            ],
            [
                'request_id' => 12,
                'field_id' => 53,
                'value' => '3'
            ],
            [
                'request_id' => 12,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 12,
                'field_id' => 55,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 79,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 80,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 81,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 84,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 85,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 90,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 97,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 98,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 99,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 107,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 109,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 112,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 113,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 115,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 152,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 154,
                'value' => '0'
            ],
            [
                'request_id' => 12,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 13,
                'field_id' => 8,
                'value' => '1'
            ],
            [
                'request_id' => 13,
                'field_id' => 10,
                'value' => '1'
            ],
            [
                'request_id' => 13,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 52,
                'value' => '2'
            ],
            [
                'request_id' => 13,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 13,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 66,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 68,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 69,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 70,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 71,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 76,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 77,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 88,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 93,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 94,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 111,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 13,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 14,
                'field_id' => 12,
                'value' => '1'
            ],
            [
                'request_id' => 14,
                'field_id' => 20,
                'value' => '64'
            ],
            [
                'request_id' => 14,
                'field_id' => 49,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 50,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 51,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 52,
                'value' => '2'
            ],
            [
                'request_id' => 14,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 54,
                'value' => '1.3'
            ],
            [
                'request_id' => 14,
                'field_id' => 60,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 64,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 67,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 68,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 69,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 70,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 71,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 76,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 77,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 88,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 93,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 94,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 111,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 142,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 143,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 14,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 15,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 15,
                'field_id' => 20,
                'value' => '63'
            ],
            [
                'request_id' => 15,
                'field_id' => 53,
                'value' => '0.5'
            ],
            [
                'request_id' => 15,
                'field_id' => 54,
                'value' => '1.2'
            ],
            [
                'request_id' => 15,
                'field_id' => 59,
                'value' => '36.66'
            ],
            [
                'request_id' => 15,
                'field_id' => 79,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 80,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 84,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 91,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 97,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 98,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 99,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 113,
                'value' => '10'
            ],
            [
                'request_id' => 15,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 15,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 16,
                'field_id' => 53,
                'value' => '0.5'
            ],
            [
                'request_id' => 16,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 16,
                'field_id' => 59,
                'value' => '15.025'
            ],
            [
                'request_id' => 16,
                'field_id' => 79,
                'value' => '10'
            ],
            [
                'request_id' => 16,
                'field_id' => 80,
                'value' => '10'
            ],
            [
                'request_id' => 16,
                'field_id' => 84,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 91,
                'value' => '10'
            ],
            [
                'request_id' => 16,
                'field_id' => 97,
                'value' => '5'
            ],
            [
                'request_id' => 16,
                'field_id' => 98,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 99,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 113,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 16,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 17,
                'field_id' => 20,
                'value' => '66'
            ],
            [
                'request_id' => 17,
                'field_id' => 29,
                'value' => '34'
            ],
            [
                'request_id' => 17,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 17,
                'field_id' => 54,
                'value' => '2'
            ],
            [
                'request_id' => 17,
                'field_id' => 59,
                'value' => '102'
            ],
            [
                'request_id' => 17,
                'field_id' => 79,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 80,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 84,
                'value' => '10'
            ],
            [
                'request_id' => 17,
                'field_id' => 91,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 97,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 98,
                'value' => '5'
            ],
            [
                'request_id' => 17,
                'field_id' => 99,
                'value' => '5'
            ],
            [
                'request_id' => 17,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 113,
                'value' => '10'
            ],
            [
                'request_id' => 17,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 17,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 18,
                'field_id' => 20,
                'value' => '66'
            ],
            [
                'request_id' => 18,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 18,
                'field_id' => 54,
                'value' => '2'
            ],
            [
                'request_id' => 18,
                'field_id' => 59,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 79,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 80,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 84,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 91,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 97,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 98,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 99,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 113,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 18,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 19,
                'field_id' => 26,
                'value' => '22'
            ],
            [
                'request_id' => 19,
                'field_id' => 53,
                'value' => '0.5'
            ],
            [
                'request_id' => 19,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 19,
                'field_id' => 57,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 80,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 82,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 108,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 153,
                'value' => '0'
            ],
            [
                'request_id' => 19,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 20,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 20,
                'field_id' => 20,
                'value' => '66'
            ],
            [
                'request_id' => 20,
                'field_id' => 27,
                'value' => '24'
            ],
            [
                'request_id' => 20,
                'field_id' => 47,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 48,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 20,
                'field_id' => 54,
                'value' => '2'
            ],
            [
                'request_id' => 20,
                'field_id' => 56,
                'value' => '80'
            ],
            [
                'request_id' => 20,
                'field_id' => 62,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 63,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 70,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 86,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 87,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 88,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 100,
                'value' => '10'
            ],
            [
                'request_id' => 20,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 20,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 21,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 21,
                'field_id' => 20,
                'value' => '66'
            ],
            [
                'request_id' => 21,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 21,
                'field_id' => 54,
                'value' => '2'
            ],
            [
                'request_id' => 21,
                'field_id' => 58,
                'value' => '120'
            ],
            [
                'request_id' => 21,
                'field_id' => 65,
                'value' => '20'
            ],
            [
                'request_id' => 21,
                'field_id' => 83,
                'value' => '10'
            ],
            [
                'request_id' => 21,
                'field_id' => 92,
                'value' => '10'
            ],
            [
                'request_id' => 21,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 21,
                'field_id' => 110,
                'value' => '10'
            ],
            [
                'request_id' => 21,
                'field_id' => 117,
                'value' => '5'
            ],
            [
                'request_id' => 21,
                'field_id' => 121,
                'value' => "http://gomer.local/bpm/request/view?id=7&forCrossCheck=0\r\nhttp://gomer.local/bpm/request/view?id=7&forCrossCheck=0"
            ],
            [
                'request_id' => 21,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 21,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 21,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 21,
                'field_id' => 155,
                'value' => '0'
            ],
            [
                'request_id' => 21,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 22,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 22,
                'field_id' => 3,
                'value' => '1'
            ],
            [
                'request_id' => 22,
                'field_id' => 27,
                'value' => '24'
            ],
            [
                'request_id' => 22,
                'field_id' => 47,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 48,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 22,
                'field_id' => 54,
                'value' => '1'
            ],
            [
                'request_id' => 22,
                'field_id' => 56,
                'value' => '40'
            ],
            [
                'request_id' => 22,
                'field_id' => 62,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 63,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 22,
                'field_id' => 70,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 86,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 87,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 88,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 100,
                'value' => '10'
            ],
            [
                'request_id' => 22,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 22,
                'field_id' => 102,
                'value' => '2'
            ],
            [
                'request_id' => 22,
                'field_id' => 121,
                'value' => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)"
            ],
            [
                'request_id' => 22,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 22,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 22,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 22,
                'field_id' => 147,
                'value' => '0'
            ],
            [
                'request_id' => 22,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 23,
                'field_id' => 20,
                'value' => '66'
            ],
            [
                'request_id' => 23,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 23,
                'field_id' => 54,
                'value' => '2'
            ],
            [
                'request_id' => 23,
                'field_id' => 58,
                'value' => '120'
            ],
            [
                'request_id' => 23,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 83,
                'value' => '10'
            ],
            [
                'request_id' => 23,
                'field_id' => 92,
                'value' => '10'
            ],
            [
                'request_id' => 23,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 110,
                'value' => '10'
            ],
            [
                'request_id' => 23,
                'field_id' => 117,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 155,
                'value' => '0'
            ],
            [
                'request_id' => 23,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 1,
                'value' => '1'
            ],
            [
                'request_id' => 24,
                'field_id' => 6,
                'value' => '1'
            ],
            [
                'request_id' => 24,
                'field_id' => 20,
                'value' => '65'
            ],
            [
                'request_id' => 24,
                'field_id' => 28,
                'value' => '27'
            ],
            [
                'request_id' => 24,
                'field_id' => 29,
                'value' => '38'
            ],
            [
                'request_id' => 24,
                'field_id' => 30,
                'value' => '47'
            ],
            [
                'request_id' => 24,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 54,
                'value' => '1.5'
            ],
            [
                'request_id' => 24,
                'field_id' => 55,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 79,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 80,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 81,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 84,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 85,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 90,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 97,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 98,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 99,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 107,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 109,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 112,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 113,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 115,
                'value' => '10'
            ],
            [
                'request_id' => 24,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 152,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 154,
                'value' => '0'
            ],
            [
                'request_id' => 24,
                'field_id' => 158,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 25,
                'field_id' => 7,
                'value' => '1'
            ],
            [
                'request_id' => 25,
                'field_id' => 20,
                'value' => '66'
            ],
            [
                'request_id' => 25,
                'field_id' => 28,
                'value' => '27'
            ],
            [
                'request_id' => 25,
                'field_id' => 29,
                'value' => '32'
            ],
            [
                'request_id' => 25,
                'field_id' => 30,
                'value' => '41'
            ],
            [
                'request_id' => 25,
                'field_id' => 53,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 54,
                'value' => '2'
            ],
            [
                'request_id' => 25,
                'field_id' => 55,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 65,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 79,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 80,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 81,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 84,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 85,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 90,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 97,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 98,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 99,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 101,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 104,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 105,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 106,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 107,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 109,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 112,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 113,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 115,
                'value' => '10'
            ],
            [
                'request_id' => 25,
                'field_id' => 122,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 144,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 146,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 149,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 150,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 151,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 152,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 154,
                'value' => '0'
            ],
            [
                'request_id' => 25,
                'field_id' => 158,
                'value' => '0'
            ],
        ],
        'request_attachments' => [],
        'report_periods' => [
            [
                //'id' => 1,
                'begin' => '2020-01-01 00:00:00',
                'end' => '2020-03-31 00:00:00',
                'created_at' => '2020-01-01 00:00:01',
                'updated_at' => null,
            ],
            [
                //'id' => 2,
                'begin' => '2020-04-01 00:00:00',
                'end' => '2020-06-30 00:00:00',
                'created_at' => '2020-01-01 00:00:02',
                'updated_at' => null,
            ],
            [
                //'id' => 3,
                'begin' => '2020-07-01 00:00:00',
                'end' => '2020-09-30 00:00:00',
                'created_at' => '2020-01-01 00:00:03',
                'updated_at' => null,
            ],
            [
                //'id' => 4,
                'begin' => '2020-10-01 00:00:00',
                'end' => '2020-12-31 00:00:00',
                'created_at' => '2020-01-01 00:00:04',
                'updated_at' => null,
            ],
        ],
        'grid_settings' => [
            [
                'id' => 1,
                'user_id' => 4,
                'columns_list' => '["author_id", "supervisor_id", "manager_id", "status", "previous_status", "cross_check_manager_id", "cross_check_status", "direction", "team_direction", "category_id", "rz_category_id", "seller_id"]'
            ]
        ],
        'requests_reasons' => [
            [
                'request_id' => 7,
                'reason_id' => 11,
            ],
            [
                'request_id' => 8,
                'reason_id' => 12,
            ],
            [
                'request_id' => 8,
                'reason_id' => 13,
            ],
            [
                'request_id' => 9,
                'reason_id' => 11,
            ],
            [
                'request_id' => 9,
                'reason_id' => 13,
            ],
            [
                'request_id' => 10,
                'reason_id' => 9,
            ],
            [
                'request_id' => 11,
                'reason_id' => 9,
            ],
            [
                'request_id' => 11,
                'reason_id' => 10,
            ],
            [
                'request_id' => 18,
                'reason_id' => 1,
            ],
            [
                'request_id' => 18,
                'reason_id' => 11,
            ],
            [
                'request_id' => 19,
                'reason_id' => 14,
            ],
            [
                'request_id' => 20,
                'reason_id' => 6,
            ],
        ],
        'request_status_history' => [
            [
                //"id" => 1,
                'request_id' => 10,
                'user_id' => 4,
                'old_status' => 5,
                'new_status' => 4,
                'reason' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                'created_at' => '2020-01-01 10:10:10',
                'manager_id' => 13,
                'reasons' => 'Дубль задачи'
            ],
            [
                //"id" => 1,
                'request_id' => 11,
                'user_id' => 4,
                'old_status' => 6,
                'new_status' => 4,
                'reason' => '2501234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ2501234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'created_at' => '2020-01-02 12:12:12',
                'manager_id' => 12,
                'reasons' => 'Дубль задачи | Все товары уже есть на сайте'
            ],
            [
                //'id' => 3,
                'request_id' => 14,
                'user_id' => 4,
                'old_status' => 2,
                'new_status' => 3,
                'reason' => 'http://gomer.local/lisa/#/request/list/in-check',
                'created_at' => '2021-09-03 13:37:55',
                'manager_id' => 13,
                'reasons' => 'Другое (описан в коментариях)',
            ],
            [
                //'id' => 4,
                'request_id' => 14,
                'user_id' => 4,
                'old_status' => 3,
                'new_status' => 1,
                'reason' => 'йцук',
                'created_at' => '2021-09-03 13:38:09',
                'manager_id' => 13,
                'reasons' => NULL,
            ],
            [
                //'id' => 5,
                'request_id' => 14,
                'user_id' => 4,
                'old_status' => 1,
                'new_status' => 3,
                'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'created_at' => '2021-09-03 13:38:55',
                'manager_id' => 13,
                'reasons' => 'Другое (описан в коментариях) | Нада',
            ],
            [
                //'id' => 6,
                'request_id' => 14,
                'user_id' => 4,
                'old_status' => 3,
                'new_status' => 1,
                'reason' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory',
                'created_at' => '2021-09-03 13:39:22',
                'manager_id' => 13,
                'reasons' => NULL,
            ],
        ],
    ],
];