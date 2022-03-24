<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение файлов
define('ROOT', dirname(__FILE__));
require_once (dirname(__FILE__) . '/components/Router.php');
require_once (dirname(__FILE__) . '/components/Db.php');

// Подключение Router
    $router = new Router();
    $router->run();
