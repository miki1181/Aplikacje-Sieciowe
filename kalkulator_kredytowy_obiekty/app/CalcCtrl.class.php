<?php
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';
require_once dirname(__FILE__).'/../libs/Smarty/Smarty.class.php';

class CalcCtrl {
    private $form;
    private $result;
    private $smarty;

    public function __construct() {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(dirname(__FILE__) . '/templates');
        $this->smarty->setCompileDir(dirname(__FILE__) . '/templates_c');
        $this->smarty->assign('app_url', '/kalkulator_kredytowy_obiekty');
    }

    public function getParams() {
        $this->form->amount = isset($_POST['amount']) ? $_POST['amount'] : null;
        $this->form->interest = isset($_POST['interest']) ? $_POST['interest'] : null;
        $this->form->years = isset($_POST['years']) ? $_POST['years'] : null;
    }

    public function validate() {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->form->amount === null || !is_numeric($this->form->amount)) {
                $errors[] = 'Kwota kredytu musi być liczbą.';
            }
            if ($this->form->interest === null || !is_numeric($this->form->interest)) {
                $errors[] = 'Oprocentowanie musi być liczbą.';
            }
            if ($this->form->years === null || !is_numeric($this->form->years)) {
                $errors[] = 'Okres (lata) musi być liczbą.';
            }
        }
        return $errors;
    }

    public function process() {
        $this->getParams();
        $errors = $this->validate();

        if (empty($errors)) {
            $monthly_interest = $this->form->interest / 100 / 12;
            $months = $this->form->years * 12;

            // Additional validation for zero values
            if ($monthly_interest == 0 || $months == 0) {
                $errors[] = 'Oprocentowanie i okres kredytu muszą być większe niż 0.';
            } else {
                $this->result->result = ($this->form->amount * $monthly_interest) / (1 - pow(1 + $monthly_interest, -$months));
                $this->smarty->assign('result', round($this->result->result, 2));
            }
        }

        // Always assign error_message, even if it's empty
        $this->smarty->assign('error_message', $errors);

        $this->smarty->assign('form', $this->form);
        $this->smarty->assign('page_title', 'Kalkulator Kredytowy');
        $this->smarty->display('calc.tpl');
    }
}
?>
