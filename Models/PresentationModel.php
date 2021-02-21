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



}