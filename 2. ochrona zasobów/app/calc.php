<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount,&$years,&$apr){
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $apr = isset($_REQUEST['apr']) ? $_REQUEST['apr'] : null;
}

function validate(&$amount,&$years,&$apr,&$messages){
    if ( ! (isset($amount) && isset($years) && isset($apr))) {
        return false;
    }

    if ( $amount == "") {
        $messages [] = 'Nie podano kwoty';
    }
    if ( $years == "") {
        $messages [] = 'Nie podano liczby lat';
    }

    if ( $apr == "") {
        $messages [] = 'Nie podano oprocentowania';
    }

    if (count ( $messages ) != 0) return false;

    if (! is_numeric( $amount )) {
        $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $years )) {
        $messages [] = 'Druga wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $apr )) {
        $messages [] = 'Trzecia wartość nie jest liczbą dziesiętną';
    }

    if (count ( $messages ) != 0) return false;
    else return true;
}

function process(&$amount, &$years, &$apr, &$messages, &$result){
    global $role;

    $amount = intval($amount);
    $years = intval($years);
    $apr = floatval($apr);

    if ($amount > 10000 && $role != 'admin') {
        $messages[] = 'Aby obliczyć ratę kredytu dla kwoty większej od 10 000 zł, wymagana jest rola administratora';
    } else {
        $result = number_format(($amount * ($apr/100) + $amount) / ($years * 12), 2, '.', '');
    }
}


$amount = null;
$years = null;
$apr = null;
$result = null;
$messages = array();

getParams($amount,$years,$apr);
if ( validate($amount,$years,$apr,$messages) ) {
    process($amount,$years,$apr,$messages,$result);
}

include 'calc_view.php';