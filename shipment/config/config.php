<?php

//--константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPrefixAdmin', '../controllers/admin/');
define('PathPostfix', 'Controller.php');
//--

//--шаблон
$templateImg = 'images';
$template = 'default';
$templateAdmin = 'admin';
//пути к файлам шаблонов(.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define('TemplatePostfix', '.tpl');

//пути к фалам шаблонов в вебпространстве
define('TemplateImgPath', "/shipment/www/templates/{$templateImg}/");
define('TemplateWebPath', "/shipment/www/templates/{$template}/");
define('TemplateAdminWebPath', "/shipment/www/templates/{$templateAdmin}/");
//--

//--инициализация шаблонизатора Смарти
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
$smarty->assign('templateImgPath', TemplateImgPath);
$smarty->assign('templateAdminPath', TemplateAdminWebPath);

//--