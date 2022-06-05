<?php
include_once '../config/config.php';
include_once '../config/db.php';
include_once '../library/mainFunctions.php';

session_start();

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$smarty->assign('controllerName', $controllerName);

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
$smarty->assign('actionName', $actionName);

loadPage($smarty, $controllerName, $actionName);