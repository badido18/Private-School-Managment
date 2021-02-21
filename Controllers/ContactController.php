<?php

namespace Controllers ;

use Models\ContactModel;
class ContactController extends Controller{

	public function loadContacts(){
		return (new ContactModel())->getContacts();
	}

	public function render(){
		print_r($this->loadContacts());
		$this->view('ContactView');
	}

}