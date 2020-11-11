<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение комментария',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'comment' => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                'commentId' => '1',
            ],
            'responseBody' => [
                "status" => 200,
                "comment" => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:&#039;&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:&#039;6&#039;,w:24,x:24,y:30),id:&#039;7ba18f80-2238-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;6&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;7&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:&#039;7&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;8&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:&#039;8&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;9&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:&#039;9&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;10&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:&#039;10&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;11&#039;,w:24,x:24,y:45),id:&#039;1e605320-2287-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;11&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;12&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:&#039;12&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;13&#039;,w:24,x:24,y:15),id:&#039;36fe2110-24bb-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;13&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;14&#039;,w:24,x:0,y:30),id:&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;14&#039;,type:visualization,version:&#039;6.4.2&#039;)),query:(language:kuery,query:&#039;&#039;),timeRestore:!t,title:&#039;Goods%20Experimental%20Copy&#039;,viewMode:view)",
            ],
            'db' => [
                "lisa_fixtures" => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ],
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 0,
                        ],
                    ],
                    "request_comments" => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "created_at" => "2020-01-01 00:00:01",
                            "comment" => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:&#039;&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:&#039;6&#039;,w:24,x:24,y:30),id:&#039;7ba18f80-2238-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;6&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;7&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:&#039;7&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;8&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:&#039;8&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;9&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:&#039;9&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;10&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:&#039;10&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;11&#039;,w:24,x:24,y:45),id:&#039;1e605320-2287-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;11&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;12&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:&#039;12&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;13&#039;,w:24,x:24,y:15),id:&#039;36fe2110-24bb-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;13&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;14&#039;,w:24,x:0,y:30),id:&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;14&#039;,type:visualization,version:&#039;6.4.2&#039;)),query:(language:kuery,query:&#039;&#039;),timeRestore:!t,title:&#039;Goods%20Experimental%20Copy&#039;,viewMode:view)",
                            "attachments" => null,
                            "status" => 1
                        ]
                    ],
                    "request_comments_history" => [
                        [
                            "id" => 1,
                            "comment_id" => 1,
                            "user_id" => 4,
                            'changes' => '{"comment": {"new_value": "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:&#039;&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:&#039;6&#039;,w:24,x:24,y:30),id:&#039;7ba18f80-2238-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;6&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;7&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:&#039;7&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;8&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:&#039;8&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;9&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:&#039;9&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;10&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:&#039;10&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;11&#039;,w:24,x:24,y:45),id:&#039;1e605320-2287-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;11&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;12&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:&#039;12&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;13&#039;,w:24,x:24,y:15),id:&#039;36fe2110-24bb-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;13&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;14&#039;,w:24,x:0,y:30),id:&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;14&#039;,type:visualization,version:&#039;6.4.2&#039;)),query:(language:kuery,query:&#039;&#039;),timeRestore:!t,title:&#039;Goods%20Experimental%20Copy&#039;,viewMode:view)", "old_value": "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1"}}',
                        ]
                    ],
                    'user_notifications' => [],
                ],
            ]
        ]
    ],

];
