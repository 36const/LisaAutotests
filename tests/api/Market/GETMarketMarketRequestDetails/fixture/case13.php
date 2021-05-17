<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 9,
                "status" => 9,
                "direction" => 2,
                "seller_id" => 83,
                "reason" => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                "actual_finish_date" => '2020-01-01 00:00:04',
            ],
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 82,
                'value' => 10,
            ]
        ],
        'reasons' => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        'requests_reasons' => [
            [
                'request_id' => 1,
                'reason_id' => 10,
            ],
            [
                'request_id' => 1,
                'reason_id' => 11,
            ],
        ],
    ],
];