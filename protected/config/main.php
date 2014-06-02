<?php
return array(
    'name' => 'Crewing',
    'defaultController' => 'home',

    'import' => array(
        'application.controllers.*',
        'application.extensions.*',
        'application.components.*',
        'application.models.*',
    ),
    'modules' => array(
        'admin' => array(//            'class' => 'application.modules.admin.AdminModule'
        )
    ),
    'components' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123'
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=yii_crewing',
            'username' => 'root',
            'password' => '52856321',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => true,
            'rules' => array(
                'admin/<controller:\w+>/<id:\d+>' => 'admin/<controller>/view',
//                'admin/<controller:\w+>/<action:\w+>' => 'admin/<controller>/<action>',
            ),
        )
    ),

);