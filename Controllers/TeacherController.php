<?php

namespace Controllers ;

use Models\TeachersModel;

class TeacherController extends Controller{

	public function loadTeachers(){
		return (new TeachersModel())->getTeachers();
	}

	public function render(){
        $data = $this->loadTeachers() ;
		$this->view('TeachersView');
	}

}