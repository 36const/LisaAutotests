<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание первого комментария',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'request_id' => '1',
                'comment' => '=~!@#$%^&*()_+`=-]\\\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&*()_+`=-]\\\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:\\\'\\\',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\'6\\\',w:24,x:24,y:30),id:\\\'7ba18f80-2238-11ea-a052-1d55fc41757c\\\',panelIndex:\\\'6\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'7\\\',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\'7\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'8\\\',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\'8\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'9\\\',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\'9\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'10\\\',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\'10\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'11\\\',w:24,x:24,y:45),id:\\\'1e605320-2287-11ea-825a-395acaa4d6c3\\\',panelIndex:\\\'11\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'12\\\',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\'12\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'13\\\',w:24,x:24,y:15),id:\\\'36fe2110-24bb-11ea-a052-1d55fc41757c\\\',panelIndex:\\\'13\\\',type:visualization,version:\\\'6.4.2\\\'),(embeddableConfig:(),gridData:(h:15,i:\\\'14\\\',w:24,x:0,y:30),id:\\\'6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\',panelIndex:\\\'14\\\',type:visualization,version:\\\'6.4.2\\\')),query:(language:kuery,query:\\\'\\\'),timeRestore:!t,title:\\\'Goods%20Experimental%20Copy\\\',viewMode:view)
<<SCRIPT>alert("XSS");//\\<</SCRIPT>
',
            ],
            'responseBody' => [
                'model' => [
                    'request_id' => '1',
                    'comment' => '!@#$%^&amp;*()_+`=-]\&#039;/[;.,}&quot;?{:&gt;&lt;\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\&#039;\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\&#039;6\&#039;,w:24,x:24,y:30),id:\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\&#039;,panelIndex:\&#039;6\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;7\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\&#039;7\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;8\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\&#039;8\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;9\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\&#039;9\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;10\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\&#039;10\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;11\&#039;,w:24,x:24,y:45),id:\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\&#039;,panelIndex:\&#039;11\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;12\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\&#039;12\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;13\&#039;,w:24,x:24,y:15),id:\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\&#039;,panelIndex:\&#039;13\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;14\&#039;,w:24,x:0,y:30),id:\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\&#039;,panelIndex:\&#039;14\&#039;,type:visualization,version:\&#039;6.4.2\&#039;)),query:(language:kuery,query:\&#039;\&#039;),timeRestore:!t,title:\&#039;Goods%20Experimental%20Copy\&#039;,viewMode:view)
alert(&quot;XSS&quot;);//\
',
                    'user_id' => 4,
                    'status' => 1,
                    'id' => 1,
                    'created_at >=' => date('Y-m-d'),
                    'commentatorName' => 'Константин Куцан',
                    'commentatorLogin' => 'kutsan.k',
                    'editable' => true,
                ],
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
                            'created_at >=' => date('Y-m-d'),
                            'updated_at' => null,
                            'comment' => '!@#$%^&amp;*()_+`=-]\&#039;/[;.,}&quot;?{:&gt;&lt;\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\&#039;\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\&#039;6\&#039;,w:24,x:24,y:30),id:\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\&#039;,panelIndex:\&#039;6\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;7\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\&#039;7\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;8\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\&#039;8\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;9\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\&#039;9\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;10\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\&#039;10\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;11\&#039;,w:24,x:24,y:45),id:\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\&#039;,panelIndex:\&#039;11\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;12\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\&#039;12\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;13\&#039;,w:24,x:24,y:15),id:\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\&#039;,panelIndex:\&#039;13\&#039;,type:visualization,version:\&#039;6.4.2\&#039;),(embeddableConfig:(),gridData:(h:15,i:\&#039;14\&#039;,w:24,x:0,y:30),id:\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\&#039;,panelIndex:\&#039;14\&#039;,type:visualization,version:\&#039;6.4.2\&#039;)),query:(language:kuery,query:\&#039;\&#039;),timeRestore:!t,title:\&#039;Goods%20Experimental%20Copy\&#039;,viewMode:view)
alert(&quot;XSS&quot;);//\
',
                            'attachments' => null,
                            'status' => 1
                        ]
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\nalert(&quot;XSS&quot;);//\\\\\n", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\nalert(&quot;XSS&quot;);//\\\\\n", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\nalert(&quot;XSS&quot;);//\\\\\n", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\nalert(&quot;XSS&quot;);//\\\\\n", "oldValue": ""}',
                            'notify_service_id' => null,
                        ]
                    ]
                ],
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    '{"notificationId":1,"userId":4,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: добавлен новый комментарий","notification":"Константин Куцан <b>оставил(а) комментарий к заявке</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]: <i>\"!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( <a href=\"http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\" target=\"_blank\">http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)</a>\nalert(&quot;XSS&quot;);//\\\\\n\"</i>","requestId":1}',
                    '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: добавлен новый комментарий","notification":"Константин Куцан <b>оставил(а) комментарий к заявке</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]: <i>\"!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( <a href=\"http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\" target=\"_blank\">http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)</a>\nalert(&quot;XSS&quot;);//\\\\\n\"</i>","requestId":1}',
                    '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: добавлен новый комментарий","notification":"Константин Куцан <b>оставил(а) комментарий к заявке</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]: <i>\"!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( <a href=\"http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\" target=\"_blank\">http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)</a>\nalert(&quot;XSS&quot;);//\\\\\n\"</i>","requestId":1}',
                    '{"notificationId":4,"userId":17,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)`: добавлен новый комментарий","notification":"Константин Куцан <b>оставил(а) комментарий к заявке</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=4\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)]: <i>\"!@#$%^&amp;*()_+`=-]\\\&#039;/[;.,}&quot;?{:&gt;&lt;\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&amp;*( <a href=\"http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)\" target=\"_blank\">http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&amp;not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&amp;_a=(description:\\\&#039;\\\&#039;,filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\\\&#039;6\\\&#039;,w:24,x:24,y:30),id:\\\&#039;7ba18f80-2238-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;6\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;7\\\&#039;,w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;7\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;8\\\&#039;,w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;8\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;9\\\&#039;,w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;9\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;10\\\&#039;,w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\\\&#039;10\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;11\\\&#039;,w:24,x:24,y:45),id:\\\&#039;1e605320-2287-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;11\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;12\\\&#039;,w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\\\&#039;12\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;13\\\&#039;,w:24,x:24,y:15),id:\\\&#039;36fe2110-24bb-11ea-a052-1d55fc41757c\\\&#039;,panelIndex:\\\&#039;13\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;),(embeddableConfig:(),gridData:(h:15,i:\\\&#039;14\\\&#039;,w:24,x:0,y:30),id:\\\&#039;6f8eba80-24ca-11ea-825a-395acaa4d6c3\\\&#039;,panelIndex:\\\&#039;14\\\&#039;,type:visualization,version:\\\&#039;6.4.2\\\&#039;)),query:(language:kuery,query:\\\&#039;\\\&#039;),timeRestore:!t,title:\\\&#039;Goods%20Experimental%20Copy\\\&#039;,viewMode:view)</a>\nalert(&quot;XSS&quot;);//\\\\\n\"</i>","requestId":1}',
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Добавление второго комментария',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'request_id' => '1',
                'comment' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
            ],
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'request_id' => '1',
                    'comment' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&amp;hostids%5B%5D=12686&amp;hostids%5B%5D=16666&amp;hostids%5B%5D=16728&amp;hostids%5B%5D=17592&amp;hostids%5B%5D=17607&amp;hostids%5B%5D=17714&amp;hostids%5B%5D=17720&amp;hostids%5B%5D=18537&amp;hostids%5B%5D=19198&amp;application=Memory&amp;select=&amp;show_without_data=1&amp;show_details=1&amp;filter_set=1',
                    'user_id' => 4,
                    'status' => 1,
                    'created_at >=' => date('Y-m-d'),
                    'commentatorName' => 'Константин Куцан',
                    'commentatorLogin' => 'kutsan.k'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_fields'],
                    'request_comments' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'user_id' => 4,
                            'created_at' => '2020-01-01 00:00:01',
                            'updated_at' => null,
                            'comment' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ =~!@#$%^&*( http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:\'\',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:\'6\',w:24,x:24,y:30),id:\'7ba18f80-2238-11ea-a052-1d55fc41757c\',panelIndex:\'6\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'7\',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:\'7\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'8\',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:\'8\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'9\',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:\'9\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'10\',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:\'10\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'11\',w:24,x:24,y:45),id:\'1e605320-2287-11ea-825a-395acaa4d6c3\',panelIndex:\'11\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'12\',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:\'12\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'13\',w:24,x:24,y:15),id:\'36fe2110-24bb-11ea-a052-1d55fc41757c\',panelIndex:\'13\',type:visualization,version:\'6.4.2\'),(embeddableConfig:(),gridData:(h:15,i:\'14\',w:24,x:0,y:30),id:\'6f8eba80-24ca-11ea-825a-395acaa4d6c3\',panelIndex:\'14\',type:visualization,version:\'6.4.2\')),query:(language:kuery,query:\'\'),timeRestore:!t,title:\'Goods%20Experimental%20Copy\',viewMode:view)
alert("XSS");//\\
',
                            'attachments' => null,
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'request_id' => 1,
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'updated_at' => null,
                            'comment' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&amp;hostids%5B%5D=12686&amp;hostids%5B%5D=16666&amp;hostids%5B%5D=16728&amp;hostids%5B%5D=17592&amp;hostids%5B%5D=17607&amp;hostids%5B%5D=17714&amp;hostids%5B%5D=17720&amp;hostids%5B%5D=18537&amp;hostids%5B%5D=19198&amp;application=Memory&amp;select=&amp;show_without_data=1&amp;show_details=1&amp;filter_set=1',
                            'attachments' => null,
                            'status' => 1
                        ]
                    ],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "https://zabbix3.local/latest.php?groupids%5B%5D=251&amp;hostids%5B%5D=12686&amp;hostids%5B%5D=16666&amp;hostids%5B%5D=16728&amp;hostids%5B%5D=17592&amp;hostids%5B%5D=17607&amp;hostids%5B%5D=17714&amp;hostids%5B%5D=17720&amp;hostids%5B%5D=18537&amp;hostids%5B%5D=19198&amp;application=Memory&amp;select=&amp;show_without_data=1&amp;show_details=1&amp;filter_set=1", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "https://zabbix3.local/latest.php?groupids%5B%5D=251&amp;hostids%5B%5D=12686&amp;hostids%5B%5D=16666&amp;hostids%5B%5D=16728&amp;hostids%5B%5D=17592&amp;hostids%5B%5D=17607&amp;hostids%5B%5D=17714&amp;hostids%5B%5D=17720&amp;hostids%5B%5D=18537&amp;hostids%5B%5D=19198&amp;application=Memory&amp;select=&amp;show_without_data=1&amp;show_details=1&amp;filter_set=1", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "https://zabbix3.local/latest.php?groupids%5B%5D=251&amp;hostids%5B%5D=12686&amp;hostids%5B%5D=16666&amp;hostids%5B%5D=16728&amp;hostids%5B%5D=17592&amp;hostids%5B%5D=17607&amp;hostids%5B%5D=17714&amp;hostids%5B%5D=17720&amp;hostids%5B%5D=18537&amp;hostids%5B%5D=19198&amp;application=Memory&amp;select=&amp;show_without_data=1&amp;show_details=1&amp;filter_set=1", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Константин Куцан',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "https://zabbix3.local/latest.php?groupids%5B%5D=251&amp;hostids%5B%5D=12686&amp;hostids%5B%5D=16666&amp;hostids%5B%5D=16728&amp;hostids%5B%5D=17592&amp;hostids%5B%5D=17607&amp;hostids%5B%5D=17714&amp;hostids%5B%5D=17720&amp;hostids%5B%5D=18537&amp;hostids%5B%5D=19198&amp;application=Memory&amp;select=&amp;show_without_data=1&amp;show_details=1&amp;filter_set=1", "oldValue": ""}',
                            'notify_service_id' => null,
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Ошибка при создании комментария только из пробелов/переносов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'request_id' => '1',
                'comment' => '      

',
            ],
            'responseBody' => [
                'errors' => [
                    'comment' => [
                        0 => 'Необходимо заполнить «Комментарий».',
                    ],
                ],
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
    ]
];
