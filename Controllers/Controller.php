<?php

namespace Controllers ;

class Controller {

	public function sharedFunc()
	{
		echo "shared method";
	}

	protected function view($view) {
		require_once __DIR__.'/../Views/'.$view.'.php' ;
	} 

	//function that verifies credential for aceess
}