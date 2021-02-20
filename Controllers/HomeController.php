<?php

namespace Controllers ;

use Classes\Article;
use Models\ArticlesModel;

class HomeController extends Controller{

	public function loadArticles($category='',$page=1){
		$model = new ArticlesModel();
		return $model->getArticles($category,$page);
	}


	public function render(){
		print_r($this->loadArticles());
		$this->view('HomeView');
	}

}