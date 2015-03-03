<?php

$yii=dirname(__FILE__).'/../../protected/framework/yii.php';	//Path to Yii distributive
$config=dirname(__FILE__).'/../../protected/config/autoadmin.local.php';	//Path to back-end config

require_once($yii);
Yii::createWebApplication($config)->run();
?>