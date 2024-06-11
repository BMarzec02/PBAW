<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\Utils;

class ParcelListCtrl {
    private $records;

    public function action_parcelList() {

        try {
            $this->records = App::getDB()->select("przesylki", [
                "id_przesylki",
                "numer_przesylki",
                "waga",
                "rozmiar",
                "imie_odbiorcy",
                "nazwisko_odbiorcy",
                "ulica",
                "numer_domu",
                "kod_pocztowy",
                "miasto",
                "numer_odbiorcy",
                "status",
                "data_nadania"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('parcel', $this->records);
        App::getSmarty()->display('ParcelList.tpl');
    }
}
