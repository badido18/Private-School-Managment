<?php

namespace Controllers ;

class HomeController extends Controller{

	public function render(){
		$this->view('HomeView');
	}

}