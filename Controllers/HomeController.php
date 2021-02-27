<?php

namespace Controllers ;

use Models\ArticlesModel;
use Models\CarrouselModel;
class HomeController extends Controller{

	public $currentPage = 1 ;

	public function loadPages($perPage=8){
		return (new ArticlesModel())->getPages($perPage);
	}

	public function loadArticles($category='',$perPage=8){
		return (new ArticlesModel())->getArticles($category,$this->currentPage,$perPage);
	}

	public function loadDiapo(){
		return (new CarrouselModel())->getImageUrls();
	}

	public function render($params){
		if (isset($params['page']))
			$this->currentPage = $params['page'] ;
		$this->view('HomeView');
	}

}