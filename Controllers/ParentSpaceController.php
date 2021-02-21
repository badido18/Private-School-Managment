<?php

namespace Controllers ;

class ParentSpaceController extends Controller {
    
    public function render(){
        $this->verifAuth('parent');
        $this->view('ParentSpaceView');
	}
}