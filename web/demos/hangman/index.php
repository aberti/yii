<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);

$yii = __DIR__ . '/../../../vendor/yiisoft/yii/framework/yii.php';
$config = dirname(__FILE__).'/protected/config/main.php';

require_once($yii);
Yii::createWebApplication($config)->run();