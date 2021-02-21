<?php

namespace Controllers\Admin ;


class AdminController extends \Controllers\Controller {

	public function render(){
		$this->verifAuth('admin');
		$this->view('Admin/AdminPanel');
	}

}