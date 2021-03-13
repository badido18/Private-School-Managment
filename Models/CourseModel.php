<?php

namespace Models ;

use Classes\Course;
use Classes\Mark;

class CourseModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getCourse($id){
        $pre = "SELECT * FROM courses WHERE id = ?" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(1,$id,\PDO::PARAM_INT);
        $course = NULL;
        if ($req->execute()){  
            try {
                $row = $req->fetch() ;
                $course = new Course($row['id'],$row['name'],$row['teacherid']);
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $course ;
    }
}