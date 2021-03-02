<?php

namespace Controllers ;

use Classes\Article;
use Models\ArticlesModel;

class SpacePageController extends Controller {
	
	public $currentPage = 1 ;
	public $category ;
    public $categoryFr ;

	public function loadPages($perPage=4){
		return (new ArticlesModel())->getPages($this->category,$perPage);
	}

	public function loadArticles($perPage=4){
		return (new ArticlesModel())->getArticles($this->category,$this->currentPage,$perPage);
	}


    public function render($params){
		if(isset($params['category']))
		{	
			$this->category = $params['category']."s";
			$this->categoryFr = Article::categoryToFrench($this->category);
            $this->view('SpaceView');
		}
        else
            $this->NotFound();
	}
}