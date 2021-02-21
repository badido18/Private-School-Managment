<?php

namespace Models ;

use Classes\Classe;

class ScheduleModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getSchedules(){
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


    public function getSchedule($classid){
        $pre = "SELECT scheduleurl FROM classes where id = :id" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(':id',$classid,\PDO::PARAM_INT);
        $schedule = '';
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $schedule = $row['scheduleurl'];
                }
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
}