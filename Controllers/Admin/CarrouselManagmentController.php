<?php

namespace Controllers\Admin ;

use Models\CarrouselModel;

class CarrouselManagmentController extends AdminController {

	public function addToCarrousel(){
		if(isset($_POST['imgUrl'])){
			$imgUrl = $_POST['imgUrl'] ;
			$success = (new CarrouselModel)->addToCarrousel($imgUrl) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function deleteFromCarrousel(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new CarrouselModel)->deleteFromCarrousel($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function render($params){
		$this->view('Admin/CarrouselManagment');
	}

}