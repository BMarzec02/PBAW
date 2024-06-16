<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\Utils;
use app\forms\ParcelSearchForm;

class ParcelSearchCtrl {
    private $form, $recordsSearch;

    public function __construct() {
        $this->form = new ParcelSearchForm();
    }

    public function validate() {
        $this->form->parcelNumber = ParamUtils::getFromRequest('sf_parcelNumber');
        return !App::getMessages()->isError();
    }

    public function action_parcelTracking() {
        if ($this->validate()) {
            try {
                $this->recordsSearch = App::getDB()->select("przesylki", [
                    "status"
                ], [
                    "numer_przesylki" => $this->form->parcelNumber
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
            }
        }

        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('recordsSearch', $this->recordsSearch);
        App::getSmarty()->display('ParcelTracking.tpl');
    }
}
