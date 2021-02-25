<?php

namespace Models ;

use Classes\other\Presentation ;

class PresentationModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getPres(){
        $pre = "SELECT * FROM presentation" ;
        $req = $this->dbconnection->prepare($pre) ;
        $pres = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $pres[] = new Presentation(intval($row['id']),$row['paragraph'],$row['imgurl']);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $pres ;
    }


    public function addPres($paragraph,$imgUrl){
		$pre = "INSERT INTO presentation (paragraph, imgurl) VALUES (?,?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$paragraph,\PDO::PARAM_STR);
		$req->bindParam(2,$imgUrl,\PDO::PARAM_STR);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

	public function deletePres($id){
		$pre = "DELETE FROM presentation WHERE id = ?" ;
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


	public function updatePres($id,$arg,$value){
		$arg = trim($arg);
		$pre = "UPDATE presentation SET $arg = ? WHERE id = ?" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$value,\PDO::PARAM_STR);
		$req->bindParam(2,$id,\PDO::PARAM_INT);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}


}