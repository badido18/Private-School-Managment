<?php

namespace Controllers\Admin ;

use Classes\other\Contact;
use Models\ClassModel;
use Models\ContactModel;
use Models\ScheduleModel;

class ScheduleManagmentController extends AdminController {


	public function addSchedule(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;
			$value = $_POST['scheduleUrl'] ;
			$success = (new ClassModel)->updateClass($id,"scheduleurl",$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}
	public function deleteSchedule(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;
			$success = (new ClassModel)->updateClass($id,"scheduleurl",'') ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}


	public function loadSchedules(){
		return (new ScheduleModel())->getSchedules();
	}

	public function render($params){
		$this->view('Admin/ScheduleManagment');
	}

}