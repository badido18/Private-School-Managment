<?php

namespace Controllers\Admin ;

use Classes\Classe;
use Models\ClassModel;

class ClassManagmentController extends AdminController {


    public function getClasses(){
        return (new ClassModel())->getClasses();
    }

    public function getClassesJson(){
        $this->returnJson((new ClassModel())->getClasses());
    }

	public function addClass(){
		if(isset($_POST['level'])){
			$level = $_POST['level'] ;
			$year = $_POST['year'] ;
			$number = $_POST['number'] ;
			$major = $_POST['major'] ;
			$scheduleUrl = $_POST['scheduleUrl'] ;
            $classe = new Classe(0,$level,intval($year),intval($number),$major,$scheduleUrl) ;
			$success = (new ClassModel)->addClass($classe) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function deleteClass(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new ClassModel)->deleteClass($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function updateClass(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$arg = $_POST['arg'] ;	
			$value = $_POST['value'] ;
			$success = (new ClassModel)->updateClass(intval($id),$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}


	public function render(){
		$this->view('Admin/ClassManagment');
	}

}