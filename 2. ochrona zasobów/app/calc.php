<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota,&$lat,&$oprocentowanie){
    $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
    $oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}

function validate(&$kwota,&$lat,&$oprocentowanie,&$messages){
    // sprawdzenie, czy parametry zostały przekazane
    if ( ! (isset($kwota) && isset($lat) && isset($oprocentowanie))) {
        return false;
    }

    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ( $kwota == "") {
        $messages [] = 'Nie podano kwoty';
    }
    if ( $lat == "") {
        $messages [] = 'Nie podano liczby lat';
    }

    if ( $oprocentowanie == "") {
        $messages [] = 'Nie podano oprocentowania';
    }

    //nie ma sensu walidować dalej gdy brak parametrów
    if (count ( $messages ) != 0) return false;

    // sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $kwota )) {
        $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $lat )) {
        $messages [] = 'Druga wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $oprocentowanie )) {
        $messages [] = 'Trzecia wartość nie jest liczbą dziesiętną';
    }

    if (count ( $messages ) != 0) return false;
    else return true;
}

function process(&$kwota,&$lat,&$oprocentowanie,&$messages,&$result){
    global $role;

    $kwota = intval($kwota);
    $lat = intval($lat);
    $oprocentowanie = floatval($oprocentowanie);

    $result = number_format(($kwota * ($oprocentowanie/100) + $kwota) / ($lat * 12), 2, '.', '');
}

$kwota = null;
$lat = null;
$oprocentowanie = null;
$result = null;
$messages = array();

getParams($kwota,$lat,$oprocentowanie);
if ( validate($kwota,$lat,$oprocentowanie,$messages) ) {
    process($oprocentowanie,$lat,$oprocentowanie,$messages,$result);
}

include 'calc_view.php';