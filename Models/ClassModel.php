<?php

namespace Models ;

use Classes\Classe;

class ClassModel extends Model {

	public function __construct(){
		parent::__construct();
		//following
	}

	public function getClasses(){
		$pre = "SELECT * FROM classes" ;
		$req = $this->dbconnection->prepare($pre) ;
		$classes = [] ;
		if ($req->execute()){  
			try {
				foreach( $req->fetchAll() as $row) {
					$classes[] = new Classe(intval($row['id']),$row['level'],$row['year'],$row['number'],$row['major'],$row['scheduleurl']);
				}
			}
			catch(\Exception $e){
				die("ERROR: Could not connect. " . $e->getMessage());
			}
		}
		else {
			echo "Something went Bad :(";
		}
		return $classes ;
	}

	
	public function getClassSchedule($id){
		$pre = "SELECT scheduleUrl FROM classes WHERE id = :id" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(':id',$id,\PDO::PARAM_INT);
        $schedule = NULL ;
		if ($req->execute()){  
			try {
				$result = $req->fetch() ;
                $schedule = new Classe(intval($result['id']),$result['level'],$result['year'],$result['number'],$result['major'],$result['scheduleurl']);
			}
			catch(\Exception $e){
				die("ERROR: Could not connect. " . $e->getMessage());
			}
		}
		else {
			echo "Something went Bad :(";
		}
		return $schedule ;
	}

	public function addClass($classe){
		$pre = "INSERT INTO classes (level, year, major, number, scheduleurl) VALUES (?,?,?,?,?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$classe->__get('level'),\PDO::PARAM_STR);
		$req->bindParam(2,$classe->__get('year'),\PDO::PARAM_INT);
		$req->bindParam(3,$classe->__get('major'),\PDO::PARAM_STR);
		$req->bindParam(4,$classe->__get('number'),\PDO::PARAM_INT);
		$req->bindParam(5,$classe->__get('scheduleUrl'),\PDO::PARAM_STR);
        if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

	public function deleteClass($id){
		$pre = "DELETE FROM classes WHERE id = ?" ;
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


	public function updateClass($id,$arg,$value){
		$arg = trim($arg);
		$pre = "UPDATE classes SET $arg = :val WHERE id = :id" ;
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