<?php

// Подключение к бд
define("HOST", "127.0.0.1");
define("USER", "root");
define("PASSWORD", "");
define("DB", "shipment");

// Соединение с бд
$GLOBALS["db"] = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Ошибка подключения MySql");

// Кодировка для текущего соединения
mysqli_set_charset($GLOBALS["db"], 'utf8');
