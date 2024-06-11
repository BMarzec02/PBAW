<?php

namespace app\controllers;

use app\forms\ParcelEditForm;
use core\App;
use core\Message;
use core\ParamUtils;
use core\Utils;
use app\forms\UserEditForm;
use core\Validator;

class UserCtrl {
    private $form, $records; //rekordy pobrane z bazy danych

    public function __construct() {
        $this->form = new UserEditForm();
    }
    public function validateSave() {
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji1');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji1');
        $this->form->role = ParamUtils::getFromRequest('role', false, 'Błędne wywołanie aplikacji3');
        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji4');
        $this->form->phone_number = ParamUtils::getFromRequest('phone_number', true, 'Błędne wywołanie aplikacji5');

        $v = new Validator();

        $v->validateFromPost('login', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj swój login',
        ]);
        $v->validateFromPost('email', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź adres email',
        ]);
        $v->validateFromPost('phone_number', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj swój numer telefonu',
        ]);

        return !App::getMessages()->isError();
    }
    public function validateEdit()
    {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return true;
    }

    public function action_userRemove(){
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("uzytkownicy", [
                    "id" => $this->form->id
                ]);
                    Utils::addInfoMessage('Pomyślnie usunięto rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->forwardTo('userList');
    }

    public function action_userEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("uzytkownicy", "*", [
                    "id" => $this->form->id
                ]);
                $this->form->id = $record['id'];
                $this->form->login = $record['login'];
                $this->form->role = $record['role'];
                $this->form->email = $record['email'];
                $this->form->phone_number = $record['phone_number'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_userSave(){
        if ($this->validateSave()) {
            try {
                App::getDB()->update("uzytkownicy", [
                    "login" => $this->form->login,
                    "role" => $this->form->role,
                    "email" => $this->form->email,
                    "phone_number" => $this->form->phone_number,
                ], [
                    "id" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('userList');
    }
    public function action_userList() {
        try {
            $this->records = App::getDB()->select("uzytkownicy", [
                "id",
                "login",
                "role",
                "email",
                "phone_number",
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('user', $this->records);
        App::getSmarty()->display('UserList.tpl');
    }
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('UserEdit.tpl');
    }

}
