<?php

namespace Controllers\Admin ;

use Models\PresentationModel;

class PresentationManagmentController extends AdminController {


	public function loadPresentation(){
		return (new PresentationModel())->getPres();
	}

	public function addPresentation(){
		if(isset($_POST['paragraph']) or isset($_POST['imgUrl']) ){
			$paragraph = $_POST['paragraph'] ;
			$imgUrl = $_POST['imgUrl'] ;
			$success = (new PresentationModel)->addPres($paragraph,$imgUrl) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}
	public function deletePresentation(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new PresentationModel)->deletePres($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function updatePresentation(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$arg = $_POST['arg'] ;	
			$value = $_POST['value'] ;
			$success = (new PresentationModel)->updatePres(intval($id),$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}



	public function render($params){
		$this->view('Admin/PresentationManagment');
	}

}