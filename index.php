<?php


// FRONT CONTROLLER

// 1) Настраиваем
ini_set('display_errors', 1);
error_reporting(E_ALL);
define('PDO_SHOW_ERROR', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


// 2) Подключаем файлы

define('ROOT', dirname(__FILE__));
require_once ROOT . '/components/Autoload.php';


// 3) Соединяемся с БД

// 4) Вызывам роутер

echo "<pre>";
$router = new Router();
$router->run();