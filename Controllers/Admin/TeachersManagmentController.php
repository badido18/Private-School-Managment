<?php

namespace Controllers\Admin ;

use Classes\Teacher;
use Classes\User;
use Models\FoodMenuModel;
use Models\TeachersModel;
use Models\UsersModel;

class TeachersManagmentController extends AdminController {

	public function addTeacher(){
		if(isset($_POST['firstName'])){
			$first = $_POST['firstName'] ;
			$last = $_POST['lastName'] ;
			$birthth = $_POST['birthDate'];
            $level = $_POST['level'] ;
			$workhours = $_POST['workHours'];
			$reception = $_POST['receptionTime'] ;
			$teacher = NULL ;
            $user = new User(0,$first,$first.'@esi.dz','mdp','1');
            $success1 = (new UsersModel)->addUser($user);
            $getuser = (new UsersModel)->getUser($first,sha1('mdp'));
            var_dump($getuser);
            $success2 = false ;
            if(isset($getuser))
            {
                $teacher = new Teacher($getuser->__get('id'),$first,$last,$birthth,$level,$workhours,$reception) ;
			    $success2 = (new TeachersModel)->addTeacher($teacher) ;
            }
			if($success1 and $success2){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}
	public function deleteTeacher(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new TeachersModel)->deleteTeacher($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function updateTeacher(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$arg = $_POST['arg'] ;	
			$value = $_POST['value'] ;
			$success = (new TeachersModel)->updateTeacher(intval($id),$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function loadTeachers(){
		return (new TeachersModel())->getTeachers();
	}



	public function render($params){
		$this->view('Admin/TeachersManagment');
	}

}