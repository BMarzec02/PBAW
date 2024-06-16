<?php

namespace app\controllers\auth;

use app\forms\auth\LoginForm;
use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use PDOException;

class LoginCtrl {
    private $form, $user_data;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate(): bool {
        if(!empty(SessionUtils::load("id", true))) return true;

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');

        $v = new Validator();
        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'validator_message' => 'Login jest niepoprawny'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'validator_message' => 'Hasło jest niepoprawne'
        ]);

        if(App::getMessages()->isError()) return false;

        try{
            $this->user_data = App::getDB()->get("uzytkownicy", ["id", "login", "email", "phone_number"],[
                "login" => $this->form->login,
                "password" => md5($this->form->password)
            ]);
            if(empty($this->user_data)){
                Utils::addErrorMessage("Nieprawidłowa nazwa użytkownika lub hasło");
            }
        }catch(PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        return !App::getMessages()->isError();
    }

    private function addRoles(): bool{
        try{
            $roles = App::getDB()->select("uzytkownicy", ["role"], ["id" => $this->user_data["id"]]);
            if(is_null($roles)) {
                Utils::addErrorMessage("Nie masz żadnej roli");
                return true;
            };

            foreach($roles as $role){
                RoleUtils::addRole($role["role"]);
            }
            return true;
        }catch(PDOException $e){
            Utils::addErrorMessage("Nie udało się połączyć z bazą danych.");
        }
        return false;
    }

    public function action_login_show() {
        $this->generateView();
    }
    public function action_login() {
        if($this->validate() && $this->addRoles()){
            SessionUtils::store("id", $this->user_data["id"]);
            SessionUtils::store("login", $this->user_data["login"]);
            SessionUtils::store("email", $this->user_data["email"]);
            SessionUtils::store("phone_number", $this->user_data["phone_number"]);
            App::getRouter()->redirectTo("info");
        }else{
            $this->form->password = "";
            $this->generateView();
        }
    }
    public function action_logout() {
        SessionUtils::remove("id");
        SessionUtils::remove("login");
        SessionUtils::remove("email");
        SessionUtils::remove("phone_number");

        $_SESSION = null;
        session_destroy();
        App::getRouter()->redirectTo('login_show');
    }

    public function generateView(){
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->display("UserLogin.tpl");
    }
}
