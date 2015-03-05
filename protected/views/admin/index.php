<?php    

$yii=dirname(__FILE__).'/../../framework/yii.php';
$config=dirname(__FILE__).'/../../config/autoadmin.local.php';	//Path to back-end config

require_once($yii);
Yii::createWebApplication($config)->run();
?>