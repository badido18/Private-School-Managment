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



}