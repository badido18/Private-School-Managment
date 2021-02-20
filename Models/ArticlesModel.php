<?php

namespace Models ;
use Classes\Article ;
use Classes\Validator;

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
        LIMIT $perPage 
        OFFSET $offset  " ;
        $req = $this->dbconnection->prepare($pre) ;
        $articles = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $articles[] = new Article(intval($row['id']),$row['title'],$row['content']);
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



}