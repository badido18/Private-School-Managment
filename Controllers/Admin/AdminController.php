<?php

namespace Controllers\Admin ;


class AdminController extends \Controllers\Controller {

	public function __construct(){
		$this->verifAuth('admin');
	}

	public function render(){
		$this->view('Admin/AdminPanel');
	}

}