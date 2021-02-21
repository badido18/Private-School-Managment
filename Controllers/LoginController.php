<?php

namespace Controllers ;

class LoginController extends Controller {
	
    public function render(){
		$this->verifAuth('anyone');
		$this->view('LoginView');
	}
}