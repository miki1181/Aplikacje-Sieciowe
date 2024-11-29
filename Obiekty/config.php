<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/Obiekty');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define('_ROOT_PATH', dirname(__FILE__));

require_once _ROOT_PATH.'/Config.class.php';

$conf = new Config();
$conf->server_name = _SERVER_NAME;
$conf->server_url = _SERVER_URL;
$conf->app_root = _APP_ROOT;
$conf->app_url = _APP_URL;
$conf->root_path = _ROOT_PATH;
?>
