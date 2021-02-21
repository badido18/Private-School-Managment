<?php

namespace Controllers ;

use Models\PresentationModel;

class PresentationController extends Controller{

	public function loadPresentation(){
		return (new PresentationModel())->getPres();
	}

	public function render(){
		print_r($this->loadPresentation());
		$this->view('PresentationView');
	}

}