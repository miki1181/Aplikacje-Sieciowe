
<?php
require_once dirname(__FILE__).'/../libs/Smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir(dirname(__FILE__).'/templates');
$smarty->setCompileDir(dirname(__FILE__).'/templates_c');
$smarty->assign('app_url', '/kalkulator_kredytowy_smarty');

// Pobranie danych z formularza
$amount = isset($_POST['amount']) ? $_POST['amount'] : null;
$interest = isset($_POST['interest']) ? $_POST['interest'] : null;
$years = isset($_POST['years']) ? $_POST['years'] : null;
$result = null;

if ($amount && $interest && $years) {
    $monthly_interest = $interest / 100 / 12;
    $months = $years * 12;
    $result = ($amount * $monthly_interest) / (1 - pow(1 + $monthly_interest, -$months));
    $smarty->assign('result', round($result, 2));
}

$smarty->assign('amount', $amount);
$smarty->assign('interest', $interest);
$smarty->assign('years', $years);
$smarty->assign('page_title', 'Kalkulator Kredytowy');

$smarty->display('calc.tpl');
?>
