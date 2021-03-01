<?php

namespace Controllers ;

use Models\ClassModel;
use Models\ScheduleModel;

class ScheduleController extends Controller{

	private $classId ;
	private $level ;
	public $classe ;

	/*
	public function loadSchedules(){
		return (new ScheduleModel())->getSchedules();
	}*/

	public function loadClasses(){
		return (new ClassModel)->getClassesWithLevel($this->level);
	}

	public function loadClasse(){
		return (new ClassModel)->getClasse($this->classId);
	}

	public function loadSchedule(){
		return (new ScheduleModel())->getSchedule($this->classId);
	}

	public function render($params){
		$this->level = $params['level'] ;
		if(isset($params['classid'])){
			$this->classId = $params['classid'] ;
			$this->classe = $this->loadClasse() ;
		}
			
		$this->view('SchedulesView');
	}

}