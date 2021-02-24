<?php

namespace Controllers\Admin ;

use Classes\Article;
use Models\ArticlesModel;

class ArticlesManagmentController extends AdminController {

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
			$success = (new ArticlesModel)->addArticle($Article) ;
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
			$success = (new ArticlesModel)->updateArticle($id,$arg,$value) ;
			if($success){
				$this->redirectToReferer() ;
			} 
			else{
				echo "Unexpected error occured" ;
			}
		}
	}

	public function render(){
		$this->view('Admin/ArticlesManagment');
	}

}