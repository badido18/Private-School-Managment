<?php

namespace Models ;

use Classes\Teacher ;

class TeachersModel extends Model {

    public function __construct(){
        parent::__construct();
        //following
    }

    /*
    Reminder
    When i will create the teacher , i need to create a user first get his id 
    and then generate with a formula a username and a temporary password
    Same thing for Student's creation
    */

    public function getTeachers($level){
        $pre = "SELECT id,firstname,lastname,receptiontime FROM teachers WHERE level = ?" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(1,$level,\PDO::PARAM_INT) ;
        $teachers = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $teachers[] = new Teacher(intval($row['id']),$row['firstname'],$row['lastname'],NULL,$row['receptiontime']);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $teachers ;
    }

}