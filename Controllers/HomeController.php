<?php

namespace Controllers ;

use Models\ArticlesModel;
use Models\CarrouselModel;
class HomeController extends Controller{

	public function loadArticles($category='',$page=1){
		return (new ArticlesModel())->getArticles($category,$page);
	}

	public function loadDiapo(){
		return (new CarrouselModel())->getImageUrls();
	}

	public function render(){
		$this->view('HomeView');
	}

}