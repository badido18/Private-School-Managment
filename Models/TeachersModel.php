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

    public function getTeachers($level=3){
        $pre = "SELECT id,firstname,lastname,level,receptiontime FROM teachers WHERE level = ?" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(1,$level,\PDO::PARAM_INT) ;
        $teachers = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $teachers[] = new Teacher(intval($row['id']),$row['firstname'],$row['lastname'],$row['birthdate'],$row['level'],$row['workhours'],$row['receptiontime']);
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


	public function addTeacher($user){
		$pre = "INSERT INTO teachers (id,firstname, lastname, birthdate, level , workhours, receptiontime) VALUES (?,?,?,?,?,?,?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$user->__get('id'),\PDO::PARAM_INT);
		$req->bindParam(2,$user->__get('firstName'),\PDO::PARAM_STR);
		$req->bindParam(3,$user->__get('lastName'),\PDO::PARAM_STR);
		$req->bindParam(4,$user->__get('birthDate'),\PDO::PARAM_STR);
		$req->bindParam(5,$user->__get('level'),\PDO::PARAM_STR);
		$req->bindParam(6,$user->__get('workHours'),\PDO::PARAM_STR);
		$req->bindParam(7,$user->__get('receptionTime'),\PDO::PARAM_STR);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

	public function deleteTeacher($id){
		$pre = "DELETE FROM teachers WHERE id = ?" ;
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


	public function updateTeacher($id,$arg,$value){
		$arg = trim($arg);
		$pre = "UPDATE teachers SET $arg = ? WHERE id = ?" ;
		$req = $this->dbconnection->prepare($pre) ;
        if($arg == 'passwd')
		    $req->bindParam(1,sha1($value),\PDO::PARAM_STR);
        else
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