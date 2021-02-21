<?php

namespace Controllers ;

use Models\UsersModel;

class LoginController extends Controller {
	
	public function login($username , $passwd){
		$userCredentials = (new UsersModel)->getUser($username,$passwd);
		return $userCredentials ;
	}

    public function render(){
		print_r($this->login('hm_boudis@esi.dz','mdp'));
		$this->view('LoginView');
	}
}