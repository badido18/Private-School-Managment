<?php

namespace Controllers ;

class PresentationController extends Controller{

	public function render(){
		$this->view('PresentationView');
	}

}