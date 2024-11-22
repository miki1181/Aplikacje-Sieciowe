<?php
class CalcForm {
    public $amount;
    public $interest;
    public $years;

    public function __construct($amount = null, $interest = null, $years = null) {
        $this->amount = $amount;
        $this->interest = $interest;
        $this->years = $years;
    }
}
?>
