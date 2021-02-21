<?php

namespace Controllers ;

class Controller {

	protected function view($view) {
		require_once __DIR__.'/../Views/'.$view.'.php' ;
	} 

	protected function NotFound(){
		//http_response_code(404);
		$this->view("404");
		exit;
	}

	protected function verifData($data){
		if (empty($data))
			$this->NotFound();
		return ;
	}

	//function that verifies credential for aceess to do here
}

