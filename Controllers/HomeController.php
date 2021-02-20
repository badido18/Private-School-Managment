<?php

namespace Controllers ;

use Classes\Article;
use Models\ArticlesModel;

class HomeController extends Controller{

	public function loadArticles(){
		$model = new ArticlesModel();
		return $model->getArticles();
	}

	public function render(){
		$this->view('HomeView');
	}

}