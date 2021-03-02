<?php

namespace Controllers ;

use Models\FoodMenuModel;

class FoodMenuController extends Controller{

	public function loadFoodMenu(){
		return (new FoodMenuModel())->getMenu();
	}

	public function render(){
		$this->view('FoodMenuView');
	}

}