<?php

namespace Controllers\Admin ;

use Models\FoodMenuModel;

class FoodMenuManagmentController extends AdminController {

	public function addFoodMenu(){
		if(isset($_POST['meal'])){
			$meal = $_POST['meal'] ;
			$dayName = $_POST['dayName'] ;
			$success = (new FoodMenuModel)->addFoodMenu($meal,$dayName) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}
	public function deleteFoodMenu(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new FoodMenuModel)->deleteFoodMenu($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function updateFoodMenu(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$arg = $_POST['arg'] ;	
			$value = $_POST['value'] ;
			$success = (new FoodMenuModel)->updateFoodMenu(intval($id),$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}



	public function render(){
		$this->view('Admin/FoodMenuManagment');
	}

}