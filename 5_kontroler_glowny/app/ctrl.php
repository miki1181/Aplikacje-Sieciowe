<?php
// Skrypt kontrolera głównego uruchamiający określoną akcję użytkownika na podstawie parametru

require_once dirname (__FILE__).'/../config.php';

// Pobierz nazwę akcji
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'calcView';

// Wykonanie akcji
switch ($action) {
    default: // 'calcView'
        include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
        break;

    case 'calcCompute':
        include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
}
?>
