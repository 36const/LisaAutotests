<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение комментария',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'request_id' => 1,
                'user_id' => 4,
                'created_at' => '2020-01-01 00:00:01',
                'updated_at' => NULL,
                'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:\'\',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\'6\',w:24,x:24,y:30),id:\'7ba18f80-2238-11ea-a052-1d55fc41757c\',panelIndex:\'6\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'7\',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\'7\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'8\',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\'8\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'9\',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\'9\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'10\',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\'10\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'11\',w:24,x:24,y:45),id:\'1e605320-2287-11ea-825a-395acaa4d6c3\',panelIndex:\'11\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'12\',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\'12\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'13\',w:24,x:24,y:15),id:\'36fe2110-24bb-11ea-a052-1d55fc41757c\',panelIndex:\'13\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'14\',w:24,x:0,y:30),id:\'6f8eba80-24ca-11ea-825a-395acaa4d6c3\',panelIndex:\'14\',type:visualization,version:\'6.4.2\')),query:(language:kuery,query:\'\'),timeRestore:!t,title:\'Goods%20Experimental%20Copy\',viewMode:view)',
                'attachments' => NULL,
                'status' => 1,
                'commentatorName' => 'Константин Куцан',
                'commentatorLogin' => 'kutsan.k',
                'editable' => true,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'id' => 1,
                'request_id' => 1,
                'user_id' => 4,
                'created_at' => '2020-01-01 00:00:01',
                'updated_at >=' => date('Y-m-d'),
                'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:&#039;&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:&#039;6&#039;,w:24,x:24,y:30),id:&#039;7ba18f80-2238-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;6&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;7&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:&#039;7&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;8&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:&#039;8&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;9&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:&#039;9&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;10&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:&#039;10&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;11&#039;,w:24,x:24,y:45),id:&#039;1e605320-2287-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;11&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;12&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:&#039;12&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;13&#039;,w:24,x:24,y:15),id:&#039;36fe2110-24bb-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;13&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;14&#039;,w:24,x:0,y:30),id:&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;14&#039;,type:visualization,version:&#039;6.4.2&#039;)),query:(language:kuery,query:&#039;&#039;),timeRestore:!t,title:&#039;Goods%20Experimental%20Copy&#039;,viewMode:view)',
                'attachments' => NULL,
                'status' => 1,
                'commentatorName' => 'Константин Куцан',
                'commentatorLogin' => 'kutsan.k',
                'editable' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'request_comments' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'created_at' => '2020-01-01 00:00:01',
                            'updated_at >=' => date('Y-m-d'),
                            'comment' => 'http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:&#039;&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:&#039;6&#039;,w:24,x:24,y:30),id:&#039;7ba18f80-2238-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;6&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;7&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:&#039;7&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;8&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:&#039;8&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;9&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:&#039;9&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;10&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:&#039;10&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;11&#039;,w:24,x:24,y:45),id:&#039;1e605320-2287-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;11&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;12&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:&#039;12&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;13&#039;,w:24,x:24,y:15),id:&#039;36fe2110-24bb-11ea-a052-1d55fc41757c&#039;,panelIndex:&#039;13&#039;,type:visualization,version:&#039;6.4.2&#039;),(embeddableConfig:(),gridData:(h:15,i:&#039;14&#039;,w:24,x:0,y:30),id:&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3&#039;,panelIndex:&#039;14&#039;,type:visualization,version:&#039;6.4.2&#039;)),query:(language:kuery,query:&#039;&#039;),timeRestore:!t,title:&#039;Goods%20Experimental%20Copy&#039;,viewMode:view)',
                            'attachments' => null,
                            'status' => 1
                        ]
                    ],
                    'request_comments_history' => [],
                    'user_notifications' => [],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Ошибка при изменении комментария только на пробелы/переносы',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'request_id' => 1,
                'user_id' => 4,
                'created_at' => '2020-01-01 00:00:01',
                'updated_at' => NULL,
                'comment' => '     
     ',
                'attachments' => NULL,
                'status' => 1,
                'commentatorName' => 'Константин Куцан',
                'commentatorLogin' => 'kutsan.k',
                'editable' => true,
            ],
            'responseCode' => 422,
            'responseBody' => [
                [
                    'field' => 'comment',
                    'message' => 'Необходимо заполнить «Комментарий».',
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'request_comments' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_comments'],
                    'request_comments_history' => [],
                    'user_notifications' => [],
                ],
            ]
        ]
    ],

];
