<?php

namespace Controllers ;

use Classes\Classe;
use Models\TeachersModel;

class TeacherController extends Controller{

	public $level ;
	public $levelName ;

	public function loadTeachers(){
		return (new TeachersModel())->getTeachers($this->level);
	}
	
	public function render($params){
		if(isset($params['level'])){
			$this->level = $params['level'] ;
			$this->levelName = Classe::getLevelName($this->level) ;
			$this->view('TeachersView');
		}
	}

	public function renderDashboard(){
        $this->verifAuth('teacher');
		$this->view('TeacherSpaceView');
	}

}