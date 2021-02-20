<?php

namespace Models ;
use Classes\Article ;

class ArticlesModel extends Model {

    public function __construct(){
        parent::__construct();
        //following
    }

    public function getArticles(){
        
        $req = $this->dbconnection->prepare("SELECT * FROM articles") ;
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