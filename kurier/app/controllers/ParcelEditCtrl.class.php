<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\Validator;
use core\Utils;
use app\forms\ParcelEditForm;

class ParcelEditCtrl {
    private $form;

    public function __construct() {
        $this->form = new ParcelEditForm();
    }

    public function validateSave() {
        $this->form->id_przesylki = ParamUtils::getFromRequest('id_przesylki', true,'Błędne wywołanie aplikacji');
        $this->form->numer_przesylki = ParamUtils::getFromRequest('numer_przesylki', true, 'Błędne wywołanie aplikacji');
        $this->form->waga = ParamUtils::getFromRequest('waga', true, 'Błędne wywołanie aplikacji');
        $this->form->rozmiar = ParamUtils::getFromRequest('rozmiar', true, 'Błędne wywołanie aplikacji');
        $this->form->imie_odbiorcy = ParamUtils::getFromRequest('imie_odbiorcy', true, 'Błędne wywołanie aplikacji');
        $this->form->nazwisko_odbiorcy = ParamUtils::getFromRequest('nazwisko_odbiorcy', true, 'Błędne wywołanie aplikacji');
        $this->form->ulica = ParamUtils::getFromRequest('ulica', true, 'Błędne wywołanie aplikacji');
        $this->form->numer_domu = ParamUtils::getFromRequest('numer_domu', true, 'Błędne wywołanie aplikacji');
        $this->form->kod_pocztowy = ParamUtils::getFromRequest('kod_pocztowy', true, 'Błędne wywołanie aplikacji');
        $this->form->miasto = ParamUtils::getFromRequest('miasto', true, 'Błędne wywołanie aplikacji');
        $this->form->numer_odbiorcy = ParamUtils::getFromRequest('numer_odbiorcy', true, 'Błędne wywołanie aplikacji');
        $this->form->status = ParamUtils::getFromRequest('status', false, 'Błędne wywołanie aplikacji');
        $this->form->data_nadania = ParamUtils::getFromRequest('data_nadania', true, 'Błędne wywołanie aplikacji');

        $v = new Validator();

        $this->form->waga = $v->validateFromPost('waga', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj wagę',
            'float' => true,
            'validator_message' => 'Waga powinna być liczbą wyrażona w kg.',
            'min' => 0,
            'max' => 99,
            'min_message' => 'Waga powinna być nie mniejsza niż 0 kg.',
            'max_message' => 'Waga powinna być nie większa niż 99 kg.'
        ]);
        $this->form->rozmiar = $v->validateFromPost('rozmiar', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj rozmiar',
            'regexp' => '/^(S|M|L)$/',
            'validator_message' => 'Dostępne wymiary przesyłek S / M / L'
        ]);
        $this->form->imie_odbiorcy = $v->validateFromPost('imie_odbiorcy', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj imię odbiorcy',
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Imię odbiorcy powinno mieć od 2 do 50 znaków'
        ]);
        $this->form->nazwisko_odbiorcy = $v->validateFromPost('nazwisko_odbiorcy', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nazwisko odbiorcy',
            'min_length' => 2,
            'max_length' => 50,
            'validator_message' => 'Nazwisko odbiorcy powinno mieć od 2 do 50 znaków'
        ]);
        $this->form->miasto = $v->validateFromPost('miasto', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj miasto',
        ]);
        $this->form->kod_pocztowy = $v->validateFromPost('kod_pocztowy', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj kod pocztowy',
            'min_length' => 5,
            'max_length' => 5,
            'validator_message' => 'Podaj kod pocztowy w formacie 01234'
        ]);
        $this->form->ulica = $v->validateFromPost('ulica', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj ulicę',
        ]);
        $this->form->numer_domu = $v->validateFromPost('numer_domu', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj numer domu/mieszkania',
            'regex' => '/^\d{1,4}(\/\d{1,4})?$/',
            'regex_message' => 'Numer domu/mieszkania powinien być w formacie "X" lub "X/Y", gdzie X i Y to od 1 do 4 cyfr.',
        ]);

        $this->form->numer_odbiorcy = $v->validateFromPost('numer_odbiorcy', [
            'trim' => true,
            'required' => true,
            'min_length' => 9,
            'max_length' => 9,
            'required_message' => 'Podaj numer telefonu odbiorcy',
            'validator_message' => 'Podaj numer w formacie 123123123'
        ]);
        return !App::getMessages()->isError();
    }


    public function validateEdit() {
        $this->form->id_przesylki = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return true;
    }

    public function action_parcelAdd() {
        $this->generateView();
    }

    public function action_parcelEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("przesylki", "*", [
                    "id_przesylki" => $this->form->id_przesylki
                ]);
                $this->form->id_przesylki = $record['id_przesylki'];
                $this->form->numer_przesylki = $record['numer_przesylki'];
                $this->form->waga = $record['waga'];
                $this->form->rozmiar = $record['rozmiar'];
                $this->form->imie_odbiorcy = $record['imie_odbiorcy'];
                $this->form->nazwisko_odbiorcy = $record['nazwisko_odbiorcy'];
                $this->form->ulica = $record['ulica'];
                $this->form->numer_domu = $record['numer_domu'];
                $this->form->kod_pocztowy = $record['kod_pocztowy'];
                $this->form->miasto = $record['miasto'];
                $this->form->numer_odbiorcy = $record['numer_odbiorcy'];
                $this->form->status = $record['status'];
                $this->form->data_nadania = $record['data_nadania'];
                $this->form->id_uzytkownik = $record['id_uzytkownik'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_parcelRemove(){
        if ($this->validateEdit()) {

            try {
                App::getDB()->delete("przesylki", [
                    "id_przesylki" => $this->form->id_przesylki
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('parcelList');
    }

    public function action_parcelSave() {
        $status = "Nadana";
        $trackingNumber = strtoupper(uniqid("PL")).date("dmY");
        $date = date("Y-m-d H:i:s");
        if ($this->validateSave()) {
            try {
                if ($this->form->id_przesylki == '') {
                    App::getDB()->insert("przesylki", [
                        "waga" => $this->form->waga,
                        "rozmiar" => $this->form->rozmiar,
                        "imie_odbiorcy" => $this->form->imie_odbiorcy,
                        "nazwisko_odbiorcy" => $this->form->nazwisko_odbiorcy,
                        "ulica" => $this->form->ulica,
                        "numer_domu" => $this->form->numer_domu,
                        "kod_pocztowy" => $this->form->kod_pocztowy,
                        "miasto" => $this->form->miasto,
                        "numer_odbiorcy" => $this->form->numer_odbiorcy,
                        "data_nadania" => $date,
                        "numer_przesylki" => $trackingNumber,
                        "status" => $status
                    ]);
                } else {
                    App::getDB()->update("przesylki", [
                        "waga" => $this->form->waga,
                        "rozmiar" => $this->form->rozmiar,
                        "imie_odbiorcy" => $this->form->imie_odbiorcy,
                        "nazwisko_odbiorcy" => $this->form->nazwisko_odbiorcy,
                        "ulica" => $this->form->ulica,
                        "numer_domu" => $this->form->numer_domu,
                        "kod_pocztowy" => $this->form->kod_pocztowy,
                        "miasto" => $this->form->miasto,
                        "numer_odbiorcy" => $this->form->numer_odbiorcy,
                        "status" => $this->form->status
                    ], [
                        "id_przesylki" => $this->form->id_przesylki
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('parcelList');
        } else {
            App::getRouter()->forwardTo('parcelAdd');
        }
    }



    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('ParcelEdit.tpl');
    }
}