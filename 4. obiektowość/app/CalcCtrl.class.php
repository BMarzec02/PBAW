<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;
	private $form;
	private $result;
	private $hide_intro;

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	public function getParams(){
		$this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
		$this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
		$this->form->apr = isset($_REQUEST['apr']) ? $_REQUEST['apr'] : null;
	}
	

	public function validate() {
		if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->apr ))) {
			return false;
		} else { 
			$this->hide_intro = true;
		}

        if ($this->form->amount == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            $this->msgs->addError('Nie podano okresu spłaty');
        }
        if ($this->form->apr == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }


        if (! $this->msgs->isError()) {
			if (! is_numeric ( $this->form->amount )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą.');
			}
			
			if (! is_numeric ( $this->form->years )) {
				$this->msgs->addError('Druga wartość nie jest liczbą.');
			}

            if (! is_numeric ( $this->form->apr )) {
                $this->msgs->addError('Trzecia wartość nie jest liczbą.');
            }
		}
		
		return ! $this->msgs->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->amount = intval($this->form->amount);
            $this->form->years = intval($this->form->years);
            $this->form->apr = intval($this->form->apr);
			$this->msgs->addInfo('Parametry poprawne.');

            $this->result->result = number_format(($this->form->amount * ($this->form->apr/100) + $this->form->amount) / ($this->form->years * 12), 2, '.', '');

			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','4. Obiektowość');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
