<?php

namespace Models ;
use Classes\Article ;
use Classes\Validator;
use GrahamCampbell\ResultType\Result;

class ArticlesModel extends Model {

	public function __construct(){
		parent::__construct();
		//following
	}

	public function getArticles($category='',$page = 1,$perPage=4){
		$category = Validator::Category($category);
		$offset = $perPage*($page-1) ;
		$pre = "SELECT * FROM articles
		WHERE $category = 1
		ORDER BY id DESC
		LIMIT $perPage 
		OFFSET $offset  " ;
		$req = $this->dbconnection->prepare($pre) ;
		$articles = [] ;
		if ($req->execute()){  
			try {
				foreach( $req->fetchAll() as $row) {
					$articles[] = new Article(intval($row['id']),$row['title'],$row['content'],$row['imgurl']);
				}
			}
			catch(\Exception $e){
				die("ERROR: Could not connect. " . $e->getMessage());
			}
		}
		else {
			echo "Something went Bad :(";
		}
		return $articles ;
	}

	public function getPages($category,$perPage = 4){
		$category = Validator::Category($category);
		$pre = "SELECT count(*) FROM articles WHERE $category = 1" ;
		$req = $this->dbconnection->prepare($pre) ;
		if ($req->execute()){  
			try {
				return ceil($req->fetch()[0] / $perPage ) ;
			}
			catch(\Exception $e){
				die("ERROR: Could not connect. " . $e->getMessage());
			}
		}
		else {
			echo "Something went Bad :(";
		}
		return 0 ;
	}
	
	public function getArticle($id){
		$pre = "SELECT * FROM articles WHERE id = :id" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(':id',$id,\PDO::PARAM_INT);
		$article = [] ;
		if ($req->execute()){  
			try {
				foreach( $req->fetchAll() as $row) {
					$article = new Article(intval($row['id']),$row['title'],$row['content'],$row['imgurl']);
				}
			}
			catch(\Exception $e){
				die("ERROR: Could not connect. " . $e->getMessage());
			}
		}
		else {
			echo "Something went Bad :(";
		}
		return $article ;
	}

	public function addArticle($article){
		$pre = "INSERT INTO articles (title, content, imgurl, everyone, teachers, parents, students, level1, level2,level3) VALUES (?,?,?,?,?,?,?,?,?,?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$article->__get('title'),\PDO::PARAM_STR);
		$req->bindParam(2,$article->__get('content'),\PDO::PARAM_STR);
		$req->bindParam(3,$article->__get('imgUrl'),\PDO::PARAM_STR);
		$one = 1; $null = NULL ; $i=4 ;
		foreach (Article::$CategoriesForDb  as $arg){   
			if ( array_key_exists($arg,$article->public) )
				$req->bindParam($i,$one,\PDO::PARAM_INT);
			else
				$req->bindParam($i,$null,\PDO::PARAM_NULL);
			$i++;
		}
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return TRUE ;
	}

	public function deleteArticle($id){
		$pre = "DELETE FROM articles WHERE id = ?" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$id,\PDO::PARAM_INT);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}


	public function updateArticle($id,$arg,$value){
		$arg = trim($arg);
		$pre = "UPDATE articles SET $arg = :val WHERE id = :id" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(':val',$value,\PDO::PARAM_STR);
		$req->bindParam(':id',$id,\PDO::PARAM_INT);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

}