<?php

namespace Controllers\Admin ;

use Models\FoodMenuModel;

class StudentManagmentController extends AdminController {



	public function render($params){
		$this->view('Admin/student/managment');
	}

}