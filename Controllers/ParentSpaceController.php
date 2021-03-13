<?php

namespace Controllers ;

class ParentSpaceController extends Controller {
    
    public $space = "parents" ;
    public function __construct(){  
        $this->verifAuth('parent');
    }

    public function render(){
        $this->view('ParentSpaceView');
	}
}