<?php

namespace Controllers ;

class StudentSpaceController extends Controller {
    
    public function __construct(){
        $this->verifAuth('student');
    }

    public function render(){
		$this->view('StudentSpaceView');
	}
}