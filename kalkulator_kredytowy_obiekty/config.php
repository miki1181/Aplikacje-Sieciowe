<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/kalkulator_kredytowy_obiekty');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

require_once _ROOT_PATH.'/libs/Smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir(_ROOT_PATH.'/app/templates');
$smarty->setCompileDir(_ROOT_PATH.'/app/templates_c');
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
?>
