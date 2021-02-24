<?php

namespace Controllers\Admin ;

use Classes\other\Contact;
use Models\ContactModel;

class ContactManagmentController extends AdminController {

	public function addContact(){
		if(isset($_POST['content'])){
			$type = $_POST['type'] ;
			$content = $_POST['content'] ;
			$Contact = new Contact(0,$type,$content) ;
			$success = (new ContactModel)->addContact($Contact) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}
	public function deleteContact(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new ContactModel)->deleteContact($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function updateContact(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$arg = $_POST['arg'] ;	
			$value = $_POST['value'] ;
			$success = (new ContactModel)->updateContact(intval($id),$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}



	public function render(){
		$this->view('Admin/ContactManagment');
	}

}