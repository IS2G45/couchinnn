<?php

//Paths del sistema

//Desarrollo
/*
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'toor');
define('DB_NAME', 'grupo_60');
define('DB_CHAR', 'utf8');
define('ROOT', substr(realpath(dirname(__FILE__)), 0, -6));
define('PATH_CSS', ROOT . '/public/css/');
define('PATH_IMG', ROOT . '/public/images/');
define('PATH_JS', ROOT . '/public/js/');
define('PATH_VENDOR', ROOT . '/vendor/');
define('PATH_VIEW', ROOT . '/view/');
define('PATH_CONTROLLER', ROOT . '/controller/');
define('PATH_MODEL', ROOT . '/model/');
//define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT))));
define('ROOT_URL', 'http://vserver/is2/couchinn/');
define('PATH_URL_CSS', ROOT_URL . 'public/css/');
define('PATH_URL_IMG', ROOT_URL . 'public/images/');
define('PATH_URL_JS', ROOT_URL . 'public/js/');
define('PATH_URL_VENDOR', ROOT_URL . 'vendor/');
define('PATH_URL_VIEW', ROOT_URL . 'view/');
define('PATH_URL_CONTROLLER', ROOT_URL . 'controller/');
define('PATH_URL_MODEL', ROOT_URL . 'model/');
*/

//Produccion

define('DB_HOST', 'localhost');
define('DB_USER', 'grupo_60');
define('DB_PASS', 'XdybY8cUqnTXi5EH');
define('DB_NAME', 'grupo_60');
define('DB_CHAR', 'utf8');

define('ROOT',  substr(dirname(__FILE__),0, -6));
define('PATH_CSS', ROOT . 'public/css/');
define('PATH_IMG', ROOT . 'public/images/');
define('PATH_JS', ROOT . 'public/js/');
define('PATH_VENDOR', ROOT . 'vendor/');
define('PATH_VIEW', ROOT . 'view/');
define('PATH_CONTROLLER', ROOT . 'controller/');
define('PATH_MODEL', ROOT . 'model/');
define('ROOT_URL',  'http://couchinn.esy.es/');
define('PATH_URL_CSS', ROOT_URL.'public/css/');
define('PATH_URL_IMG',ROOT_URL.'public/images/');
define('PATH_URL_JS', ROOT_URL . 'public/js/');
define('PATH_URL_VENDOR', ROOT_URL . 'vendor/');
define('PATH_URL_VIEW', ROOT_URL . 'view/');
define('PATH_URL_CONTROLLER', ROOT_URL . 'controller/');
define('PATH_URL_MODEL', ROOT_URL . 'model/');

