<?php

namespace Controllers ;

class IndexController extends Controller{

	public function render(){
		$this->view('HomeView');
	}

}