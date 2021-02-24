<?php

namespace Controllers ;

class LoginController extends Controller {
	
	public function __construct(){	
		$this->verifAuth('anyone');
	}

    public function render(){
		$this->view('LoginView');
	}
}