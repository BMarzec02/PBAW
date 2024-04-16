<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
	private $form;
	private $result;

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->amount = getFromRequest('amount');
		$this->form->years = getFromRequest('years');
		$this->form->apr = getFromRequest('apr');
	}
	

	public function validate() {
		if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->apr ))) {
			return false;
		}
        if ($this->form->amount == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            getMessages()->addError('Nie podano okresu spłaty');
        }
        if ($this->form->apr == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }


        if (! getMessages()->isError()) {
			if (! is_numeric ( $this->form->amount )) {
                getMessages()->addError('Pierwsza wartość nie jest liczbą.');
			}
			
			if (! is_numeric ( $this->form->years )) {
                getMessages()->addError('Druga wartość nie jest liczbą.');
			}

            if (! is_numeric ( $this->form->apr )) {
                getMessages()->addError('Trzecia wartość nie jest liczbą.');
            }
		}
		
		return ! getMessages()->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->amount = intval($this->form->amount);
            $this->form->years = intval($this->form->years);
            $this->form->apr = intval($this->form->apr);
            getMessages()->addInfo('Parametry poprawne.');

            $this->result->result = number_format(($this->form->amount * ($this->form->apr/100) + $this->form->amount) / ($this->form->years * 12), 2, '.', '');

            getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	

	public function generateView(){


		getSmarty()->assign('page_title','5 a i b');
		getSmarty()->assign('page_description','5. (a i b) kontroler główny, nowa struktura i autoloader');
		getSmarty()->assign('page_header','PHP');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html');
	}
}
