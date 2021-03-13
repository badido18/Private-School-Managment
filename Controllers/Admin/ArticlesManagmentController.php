<?php

namespace Controllers\Admin ;

use Classes\Article;
use Models\ArticlesModel;

class ArticlesManagmentController extends AdminController {

	public $currentPage = 1 ;
	public $link = "/admin/articles/managment" ;
	public $space = "admin";

	public function loadPages($perPage=4){
		return (new ArticlesModel())->getPages('1',$perPage);
	}

	public function loadArticles($perPage=4){
		return (new ArticlesModel())->getArticles('1',$this->currentPage,$perPage);
	}

	public function addArticle(){
		if(isset($_POST['title'])){
			$title = $_POST['title'] ;
			$content = $_POST['content'] ;
			$imgUrl = isset($_POST['imgUrl']) ? $_POST['imgUrl'] : NULL ;
			$public = [] ;
			foreach (Article::$Categories as $arg) {
				if(isset($_POST[$arg]))
					$public[$arg] = 1;
			}
			$Article = new Article(0,$title,$content,$imgUrl,$public) ;
			$success =  (new ArticlesModel)->addArticle($Article) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}
	public function deleteArticle(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$success = (new ArticlesModel)->deleteArticle($id) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function updateArticle(){
		if(isset($_POST['id'])){
			$id = $_POST['id'] ;	
			$arg = $_POST['arg'] ;
			$value = $_POST['value'] ;
			if(str_contains($arg,"category")) {
				$tmp = $arg ;
				$arg = $value ;
				if(str_contains($tmp,"del"))
					$value = 0 ;
				else
					$value = 1 ;
			}
			$success = (new ArticlesModel)->updateArticle($id,$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function render($params){
		if (isset($params['page']))
			$this->currentPage = $params['page'] ;
		$this->view('Admin/ArticlesManagment');
	}

}