<?php

namespace Controllers ;

use Classes\Validator;
use Models\ArticlesModel;

class ArticleController extends Controller{

	private $id ;
	public $article ;

	public function loadArticle(){
		return (new ArticlesModel())->getArticle(Validator::Num($this->id));
	}

	public function render($params){
		if(isset($params['id'])){
			$this->id = $params['id'] ;
			$this->article = $this->loadArticle() ;
			$this->verifData($this->article);
		}
		$this->view('ArticlePageView');
	}

}