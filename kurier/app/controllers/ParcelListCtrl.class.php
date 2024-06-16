<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;

class ParcelListCtrl
{
    private $records;
    public function action_parcelList()
    {
        try {
            $this->records = App::getDB()->select("przesylki", [
                "[>]uzytkownicy" => ["id_uzytkownika" => "id"],
            ], [
                "przesylki.id_przesylki",
                "uzytkownicy.login",
                "uzytkownicy.phone_number",
                "przesylki.numer_przesylki",
                "przesylki.waga",
                "przesylki.rozmiar",
                "przesylki.imie_odbiorcy",
                "przesylki.nazwisko_odbiorcy",
                "przesylki.ulica",
                "przesylki.numer_domu",
                "przesylki.kod_pocztowy",
                "przesylki.miasto",
                "przesylki.numer_odbiorcy",
                "przesylki.status",
                "przesylki.data_nadania"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getSmarty()->assign('parcel', $this->records);
        App::getSmarty()->display('ParcelList.tpl');
    }

    public function action_parcelOwn() {
        $id_uzytkownika = SessionUtils::load("id", true);
        try {
            $this->records = App::getDB()->select("przesylki", [
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
            ], [
                "id_uzytkownika" => $id_uzytkownika
            ]);

            if (empty($this->records)) {
                App::getSmarty()->assign('no_parcels_message', 'Nie masz przesyłek.');
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getSmarty()->assign('parcel', $this->records);
        App::getSmarty()->display('ParcelOwn.tpl');
    }

}