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

//    public function validate(): bool {
//        if(!empty(SessionUtils::load("id", true))) return true;
//
//        $this->form->login = ParamUtils::getFromRequest('login');
//        $this->form->password = ParamUtils::getFromRequest('password');
//
//        $v = new Validator();
//        $v->validate($this->form->login,[
//            'trim' => true,
//            'min_length' => 3,
//            'max_length' => 32,
//            'validator_message' => 'Login powinien zawierać od 3 do 32 znaków'
//        ]);
//
//        $v->validate($this->form->password,[
//            'trim' => true,
//            'min_length' => 3,
//            'max_length' => 32,
//        ]);
//
//        if(App::getMessages()->isError()) return false;
//
//        try{
//            $this->user_data = App::getDB()->get("uzytkownicy", ["id", "login", "role"],[
//                "login" => $this->form->login,
//                "password" => $this->form->password,
////                "password" => password_hash($this->form->password, PASSWORD_DEFAULT)
//            ]);
//            if(empty($this->user_data)){
//                Utils::addErrorMessage("Nieprawidłowa nazwa użytkownika lub hasło");
//            }
//        }catch(PDOException $e){
//            Utils::addErrorMessage("Błąd połączenia z bazą danych");
//        }
//
//        return !App::getMessages()->isError();
//    }
////
//    private function addRoles(): bool{
//        try{
//            $roles = App::getDB()->select("uzytkownicy", ["role"], ["user_id" => $this->user_data["id"]]);
//            if(is_null($roles)) {
//                Utils::addErrorMessage("Nie masz żadnej roli");
//                return true;
//            };
//                RoleUtils::addRole($role["role"]);
//
//            return true;
//        }catch(PDOException $e){
//            Utils::addErrorMessage("Nie udało się połączyć z bazą danych.");
//        }
//        return false;
//    }

    public function action_login()
    {
//        if ($this->validate()) {
//            SessionUtils::store("id", $this->user_data["id"]);
//            SessionUtils::store("login", $this->user_data["login"]);
//            SessionUtils::store("role", $this->user_data["role"]);
//            SessionUtils::store("email", $this->user_data["email"]);
//            SessionUtils::store("phone_number", $this->user_data["phone_number"]);
//            App::getRouter()->redirectTo("main");
//        } else {
//            $this->form->password = "";
            $this->generateView();
//        }
    }

    public function action_logout() {
        SessionUtils::remove("id");
        SessionUtils::remove("role");
        SessionUtils::remove("login");
        SessionUtils::remove("firstName");
        SessionUtils::remove("lastName");

        $_SESSION = null;
        session_destroy();
        App::getRouter()->redirectTo('login');
    }

    public function generateView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->display("UserLogin.tpl");
    }
}
