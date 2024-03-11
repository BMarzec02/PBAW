<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST ['kwota'];
$lat = $_REQUEST ['lat'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];

if ( ! (isset($kwota) && isset($lat) && isset($oprocentowanie))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $lat == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ( $oprocentowanie == "") {
    $messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {

	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $lat )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}

    if (! is_numeric( $oprocentowanie )) {
        $messages [] = 'Trzecia wartość nie jest liczbą dziesiętną';
    }
}

if (empty ( $messages )) {

	$kwota = intval($kwota);
	$lat = intval($lat);
    $oprocentowanie = floatval($oprocentowanie);

    $result = number_format(($kwota * ($oprocentowanie/100) + $kwota) / ($lat * 12), 2, '.', '');
}

include 'calc_view.php';