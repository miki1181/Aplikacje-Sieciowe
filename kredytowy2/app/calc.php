<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

// Funkcja pobierająca i walidująca parametry
function getParams(&$amount, &$years, &$interest) {
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

// Funkcja walidująca dane wejściowe i sprawdzająca role użytkownika
function validate(&$amount, &$years, &$interest, &$messages) {
    global $role;

    // Ograniczenia dla użytkownika z rolą "user"
    $maxAmount = 1000000; // Maksymalna kwota kredytu dla usera
    $minInterest = 4.0; // Minimalne oprocentowanie dla usera

    // Sprawdzenie, czy wszystkie parametry są przekazane
    if (!isset($amount) || !isset($years) || !isset($interest)) {
        $messages[] = 'Wprowadź wszystkie dane (kwota, liczba lat, oprocentowanie).';
        return false;
    }

    // Konwersja i walidacja liczbowa
    $amount = floatval($amount);
    $years = intval($years);
    $interest = floatval($interest);

    // Ograniczenia dla roli "user"
    if ($role == 'user') {
        if ($amount > $maxAmount) {
            $messages[] = 'Kwota przekracza dozwolony limit 1 miliona. Skontaktuj się z managerem banku.';
        }
        if ($interest < $minInterest) {
            $messages[] = 'Oprocentowanie nie może być mniejsze niż 4%. Skontaktuj się z managerem banku.';
        }
    }

    // Jeśli wystąpiły ograniczenia, walidacja kończy się niepowodzeniem
    return count($messages) == 0;
}

// Funkcja przetwarzająca obliczenia
function calculateLoan(&$amount, &$years, &$interest, &$result) {
    $monthlyInterest = ($interest / 100) / 12;
    $months = $years * 12;

    if ($monthlyInterest == 0) {
        $result = $amount / $months;
    } else {
        $result = $amount * ($monthlyInterest * pow(1 + $monthlyInterest, $months)) / (pow(1 + $monthlyInterest, $months) - 1);
    }
}

$amount = null;
$years = null;
$interest = null;
$result = null;
$messages = array();

getParams($amount, $years, $interest);
if (validate($amount, $years, $interest, $messages)) {
    calculateLoan($amount, $years, $interest, $result);
}

include 'calc_view.php';
?>
