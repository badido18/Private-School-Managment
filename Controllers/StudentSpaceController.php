<?php

namespace Controllers ;

class StudentSpaceController extends Controller {

    public $space = "students" ;
    
    public function __construct(){
        $this->verifAuth('student');
    }

    public function render(){
		$this->view('StudentSpaceView');
	}
}