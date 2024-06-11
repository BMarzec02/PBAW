<?php

namespace app\controllers\auth;

use app\forms\auth\RegisterForm;
use core\App;
use core\ParamUtils;
use core\Utils;
use PDOException;
use core\Validator;

class RegisterCtrl {
    private $form;

    public function __construct() {
        $this->form = new RegisterForm();
    }

    public function validateSave() {
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji1');
        $this->form->password = ParamUtils::getFromRequest('password', true, 'Błędne wywołanie aplikacji2');
        $this->form->password_confirm = ParamUtils::getFromRequest('password_confirm', true, 'Błędne wywołanie aplikacji6');
        $this->form->role = ParamUtils::getFromRequest('role', true, 'Błędne wywołanie aplikacji3');
        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji4');
        $this->form->email_confirm = ParamUtils::getFromRequest('email_confirm', true, 'Błędne wywołanie aplikacji7');
        $this->form->phone_number = ParamUtils::getFromRequest('phone_number', true, 'Błędne wywołanie aplikacji5');

        $v = new Validator();

        $v->validateFromPost('login', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj swój login',
        ]);
        $v->validateFromPost('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj Hasło',
        ]);
        $v->validateFromPost('password_confirm', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj Hasło po raz drugi',
        ]);
        $v->validateFromPost('email', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź adres email',
        ]);
        $v->validateFromPost('email_confirm', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź adres email po raz drugi',
        ]);
        $v->validateFromPost('phone_number', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj swój numer telefonu',
        ]);

        if ($this->form->password !== $this->form->password_confirm) {
            Utils::addErrorMessage('Podane hasła nie są identyczne');
            return false;
        }

        if ($this->form->email !== $this->form->email_confirm) {
            Utils::addErrorMessage('Podane adresy e-mail nie są identyczne');
            return false;
        }

        return !App::getMessages()->isError();
    }

    public function action_register() {
        $this->generateView();
    }

    public function action_registerSave() {
        $default_role = "user";
        if ($this->validateSave()) {
            try {
                App::getDB()->insert("uzytkownicy", [
                    "login" => $this->form->login,
//                    "password" => password_hash($this->form->password, PASSWORD_DEFAULT),
                    "password" => $this->form->password,
                    "email" => $this->form->email,
                    "phone_number" => $this->form->phone_number,
                    "role" => $default_role
                ]);
                Utils::addInfoMessage('Udało ci się utworzyć konto');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('login');
        } else {
            App::getRouter()->forwardTo('register');
        }
    }


    public function generateView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->display("Register.tpl");
    }
}
