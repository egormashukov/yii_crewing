<?php
$yii = __DIR__.'/../../framework/yii.php';
$config = __DIR__.'/protected/config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);

if (YII_DEBUG){
    error_reporting(E_ERROR);
    ini_set('display_errors', 'On');
} else {
    error_reporting(0);
    ini_set('display_errors', 'Off');
}

require_once($yii);
Yii::createWebApplication($config)->run();
