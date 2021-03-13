<?php

namespace Controllers\Admin ;


class AdminController extends \Controllers\Controller {

	public $space = "admin" ;

	public function __construct(){
		$this->verifAuth('admin');
	}

	public function render($params){
		$this->view('Admin/AdminPanel');
	}

}