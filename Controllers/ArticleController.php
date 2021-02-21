<?php

namespace Controllers ;

use Classes\Validator;
use Models\ArticlesModel;

class ArticleController extends Controller{

	public function loadArticle($id){
		return (new ArticlesModel())->getArticle(Validator::Num($id));
	}

	public function render($params){
		$data = $this->loadArticle($params['id']) ;
		$this->verifData($data);
		$this->view('ArticlePageView');
	}

}