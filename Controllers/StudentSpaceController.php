<?php

namespace Controllers ;

class StudentSpaceController extends Controller {
    
    public function render(){
        $this->verifAuth('student');
		$this->view('StudentSpaceView');
	}
}