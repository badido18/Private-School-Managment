<?php

namespace Controllers ;

use Models\ScheduleModel;

class ScheduleController extends Controller{

	public function loadSchedules(){
		return (new ScheduleModel())->getSchedules();
	}


	public function loadSchedule($classid){
		return (new ScheduleModel())->getSchedule($classid);
	}

	public function render(){
		print_r($this->loadSchedules());
		$this->view('SchedulesView');
	}

}