<?php

namespace Controllers ;

use Models\TeachersModel;

class TeacherController extends Controller{

	public function loadTeachers(){
		return (new TeachersModel())->getTeachers();
	}
	public function render(){
		$this->view('TeachersView');
	}

	public function renderDashboard(){
        $this->verifAuth('teacher');
		$this->view('TeacherSpaceView');
	}

}