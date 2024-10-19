
<?php
// KONTROLER strony kalkulatora kredytowego
require_once dirname(__FILE__).'/../config.php';

// 1. Pobranie parametrów
$amount = $_REQUEST['amount'];
$years = $_REQUEST['years'];
$interest = $_REQUEST['interest'];

// 2. Walidacja parametrów
if (!isset($amount) || !isset($years) || !isset($interest)) {
    $messages[] = 'Brak jednego z parametrów.';
}

if ($amount == "") {
    $messages[] = 'Nie podano kwoty kredytu.';
}
if ($years == "") {
    $messages[] = 'Nie podano liczby lat.';
}
if ($interest == "") {
    $messages[] = 'Nie podano oprocentowania.';
}

if (empty($messages)) {
    if (!is_numeric($amount)) {
        $messages[] = 'Kwota kredytu nie jest liczbą.';
    }
    if (!is_numeric($years)) {
        $messages[] = 'Liczba lat nie jest liczbą.';
    }
    if (!is_numeric($interest)) {
        $messages[] = 'Oprocentowanie nie jest liczbą.';
    }
}

// 3. Obliczenie miesięcznej raty
if (empty($messages)) {
    $amount = floatval($amount);
    $years = intval($years);
    $interest = floatval($interest);

    $monthly_interest = ($interest / 100) / 12; // miesięczna stopa procentowa
    $months = $years * 12; // liczba miesięcy

    if ($monthly_interest == 0) {
        $result = $amount / $months; // brak oprocentowania, rata to kwota/ilość miesięcy
    } else {
        $result = $amount * ($monthly_interest * pow(1 + $monthly_interest, $months)) / (pow(1 + $monthly_interest, $months) - 1);
    }
}

// 4. Wywołanie widoku z przekazaniem zmiennych
include 'calc_view.php';
?>
