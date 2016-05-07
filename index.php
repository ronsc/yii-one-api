<?php 

define('DS',            DIRECTORY_SEPARATOR); 
define('DIR_ROOT',      getcwd() . DS);


// Define pathes
$autoload = DIR_ROOT . 'vendor' . DS . 'autoload.php';
$config   = DIR_ROOT . 'app/config' . DS . 'main.php';
$yii      = DIR_ROOT . 'vendor' . DS . 'yiisoft' . DS . 'yii' . DS . 'framework' . DS . 'yii.php';

// First include Yii
require_once($yii);

// Then include automatically generated autoloader
require_once($autoload);

// Run app as usual
Yii::createWebApplication($config)->run();