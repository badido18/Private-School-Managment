<?php

namespace Models ;
use Classes\other\Carrousel ; 


class CarrouselModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getImageUrls(){
        $pre = "SELECT * FROM carrousels" ;
        $req = $this->dbconnection->prepare($pre) ;
        $imgUrls = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $imgUrls[] = new Carrousel(intval($row['id']),$row['imgurl']);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $imgUrls ;
    }

    public function addToCarrousel($imgUrl){
		$pre = "INSERT INTO carrousels (imgUrl) VALUES (?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$imgUrl,\PDO::PARAM_STR);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

	public function deleteFromCarrousel($id){
		$pre = "DELETE FROM carrousels WHERE id = ?" ;
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



}