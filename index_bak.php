<?php

// change the following paths if necessary
//$yii='H:\xampp\htdocs\yii\framework\yii.php';
$yii='/home/content/54/6452854/html/bskkvnursery/framework/yii.php';
$config= dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
