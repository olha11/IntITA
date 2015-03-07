<?php
$main = require(dirname(__FILE__).'/main.local.php');	//reading base front-end config in order to not keep common sections independently.

$main['name'] = 'AutoAdmin CMS';

$main['sourceLanguage'] = 'en';
$main['language'] = 'en';

$main['modules'] = array(
	'autoadmin'=>array(
		'class'=>'ext.autoadmin.AutoAdmin',	//alias-path to AutoAdmin extension
		'basePath' => dirname(__FILE__).'/../modules/autoadmin',	//this is your module directory
		'wwwDirName' => 'views',	//this is your document root directory (where the webserver looks into)

		//Optional params of built-in auth-system:
		'authMode' => true,	//switch internal authentication system. can be switched on only if you import the regard SQL dump and configure dbAdmin connector.
		'openMode' => true,	//use it for temporary reseting all access limitations
		'logMode' => false,	//enable logging. can't be switched on if authMode=false
		/**
		 * If you'd like to use GIS-extension, download it to the extensions dir
		 *  and uncomment these lines
		 * 
		 * 'extensions' => array(
		 * 	'Gis' => array(
		 * 		'srid' => 4326,
		 * 	),
		 * ),
		 */
	),
);

$main['components'] = array(
	'urlManager' => array(
		'urlFormat'=>'path',
		'caseSensitive'=>false,
		'showScriptName'=>false,
		'urlSuffix' => '/',
		'rules'=>array(
			/**
			 * These settings are for the configuration, which you can see in 
			 *  this exemplary pack. Namely we use /_admin/index.php as Yii's 
			 *  enter point with it's own .htaccess copy. In this case URI
			 *  http://www.you_site.com/_admin/ becomes root in the rules:
			 */
			'/' => 'autoadmin/default/index',
			'<controller:\w+>' => 'autoadmin/<controller>/index',
			'<controller:\w+>/<action:\w+>' => 'autoadmin/<controller>/<action>',
			/**
			 * If you configure your front-end from the main enter point
			 *  /index.php, you should use non-root settings like these:
			 *  
			 * '<module:autoadmin>' => '<module>/default/index',
			 * '<module:autoadmin>/<controller:\w+>' => '<module>/<controller>/index',
			 * '<module:autoadmin>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
			 */
		)
	),
	'db' => require(dirname(__FILE__).'/database.php'),
	'dbAdmin' => require(dirname(__FILE__).'/database.php'),
);

return $main;
