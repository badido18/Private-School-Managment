<?php

namespace Controllers\Admin ;

use Classes\User;
use Models\UsersModel;

class UsersManagmentController extends AdminController {

	public function addUser(){
		if(isset($_POST['username'])){
			$username = $_POST['username'] ;
			$passwd = $_POST['passwd'] ;
			$email = $_POST['email'];
			$type = $_POST['type'];
			$address = $_POST['address'];
			$phones = [$_POST['phone1'],$_POST['phone2'],$_POST['phone3']] ;
			$User = new User(0,$username,$email,$passwd,$type,$address,$phones) ;
			$success = (new UsersModel)->addUser($User) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}
	public function deleteUser(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new UsersModel)->deleteUser($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function updateUser(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$arg = $_POST['arg'] ;	
			$value = $_POST['value'] ;
			$success = (new UsersModel)->updateUser(intval($id),$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}



	public function render(){
		$this->view('Admin/UsersManagment');
	}

}