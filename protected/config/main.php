<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'defaultController'=>'site',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		//'ext.YiiMongoDbSuite.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'masterkey',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),
	
	

	// application components
		'components'=>array(

        'request'=>array(
            'enableCookieValidation'=>true,
            'enableCsrfValidation'=>true,
        ),

		'user'=>array(
			// enable cookie-based authentication
            'class' => 'WebUser',
			'allowAutoLogin'=>true,
            'loginUrl'=>array('site/login'),
		),

		// uncomment the following to enable URLs in path-format
/*       'urlManager'=>array(
			'urlFormat'=>'path',
            'class'=>'application.extensions.urlManager.LangUrlManager',
			'showScriptName'=>false,
            'languages'=>array('ru','ua'),
            'langParam'=>'language',
			'rules'=>array(
'<language:(ru|ua)>/<_m:(srbac)>/<_c>/<_a>*' => '<_m>/<_c>/<_a>', '<language:(ru|ua)>/<_c>/<_a>*' => '<_c>/<_a>', '<language:(ru|ua)>/<_c>' => '<_c>', '<language:(ru|ua)>' => '',
			),
        ),
	*/	
	/*
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
        'urlManager'=>array(
            'class'=>'application.components.UrlManager',
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                '/<language:(de|ru|en)>/' => 'site/index',
                '/<language:(de|ru|en)>/<action:(contact|login|logout)>/*' => 'site/<action>',
                '/<language:(de|ru|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '/<language:(de|ru|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '/<language:(de|ru|en)>/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
                '/<action:(contact|login|logout)>/*' => 'site/<action>',
                '/<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '/<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
            ),
        ),

		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=vg-music',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
        'authManager'=>array(
            'class'=>'PhpAuthManager',
            'defaultRoles' => array('guest'),
        ),
		/*'mongodb' => array(
            'class'            => 'EMongoDB',
            'connectionString' => 'mongodb://localhost',
            'dbName'           => 'fingerdb',
            'fsyncFlag'        => true,
            'safeFlag'         => true,
            'useCursor'        => false,
        ),*/

		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		'viewRenderer' => array(
			'class' => 'ext.ETwigViewRenderer',

			'fileExtension' => '.twig',
			'options' => array(
				'autoescape' => true,
			),
			'globals' => array(
				'html' => 'CHtml'
			),
			'functions' => array(
				'rot13' => 'str_rot13',
			),
			'filters' => array(
				'jencode' => 'CJSON::encode',
			),

		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
    'sourceLanguage'=>'en',
    'language'=>'ru',
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'sirroland@yandex.ru',
        'languages'=>array('ru'=>'Russian', 'en'=>'English', 'de'=>'Deutsch'),
	),
);