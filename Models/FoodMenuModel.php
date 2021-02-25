<?php

namespace Models ;

use Classes\other\FoodMenuDay;

class FoodMenuModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getMenu(){
        $pre = "SELECT * FROM foodmenu" ;
        $req = $this->dbconnection->prepare($pre) ;
        $menu = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $menu[] = new FoodMenuDay(intval($row['id']),$row['meal'],$row['dayname']);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $menu ;
    }


    public function addFoodMenu($meal,$dayName){
		$pre = "INSERT INTO foodmenu (meal, dayname) VALUES (?,?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$meal,\PDO::PARAM_STR);
		$req->bindParam(2,$dayName,\PDO::PARAM_STR);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

	public function deleteFoodMenu($id){
		$pre = "DELETE FROM foodmenu WHERE id = ?" ;
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


	public function updateFoodMenu($id,$arg,$value){
		$arg = trim($arg);
		$pre = "UPDATE foodmenu SET $arg = ? WHERE id = ?" ;
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