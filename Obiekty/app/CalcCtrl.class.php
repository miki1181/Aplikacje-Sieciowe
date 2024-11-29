<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $form;
    private $result;
    private $msgs;

    public function __construct() {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->msgs = [];
    }

    public function getParams() {
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
        $this->form->rate = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;
    }

    public function validate() {
        if (!isset($this->form->amount, $this->form->years, $this->form->rate)) {
            return false;
        }

        if ($this->form->amount === "" || $this->form->years === "" || $this->form->rate === "") {
            $this->msgs[] = "Wszystkie pola muszą być wypełnione.";
            return false;
        }

        if (!is_numeric($this->form->amount) || !is_numeric($this->form->years) || !is_numeric($this->form->rate)) {
            $this->msgs[] = "Wszystkie wartości muszą być liczbami.";
            return false;
        }

        return true;
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {
            $amount = floatval($this->form->amount);
            $years = intval($this->form->years);
            $rate = floatval($this->form->rate);

            $monthly_rate = $rate / 100 / 12;
            $months = $years * 12;

                $this->result->monthly_payment = number_format(
                    $monthly_rate > 0
                        ? $amount * ($monthly_rate * pow(1 + $monthly_rate, $months)) / (pow(1 + $monthly_rate, $months) - 1)
                        : $amount / $months,
                    2,  
                    ',', 
                    ' '  
                ) . ' zł';
                

            $this->msgs[] = "<h4>Parametry poprawne. Wykonuję obliczenia.<h4>";
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);
        $smarty->assign('form', $this->form);
        $smarty->assign('result', $this->result);
        $smarty->assign('msgs', $this->msgs);

        $smarty->display($conf->root_path.'/app/CalcView.html');
    }
}
?>
