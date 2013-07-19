<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();

date_default_timezone_set('Europe/Warsaw');

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or
define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();

echo "Generation time ".(microtime_float()-$time_start);
