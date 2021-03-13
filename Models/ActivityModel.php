<?php

namespace Models ;

class ActivityModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getActivities($studentId){
        $pre = "SELECT * FROM practice WHERE studentid = ?" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(1,$studentId,\PDO::PARAM_INT);
        $activityids = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $activityids[] = $row['activityid'] ;
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $activityids ;
    }


    public function getActivity($id){
        $pre = "SELECT * FROM activities WHERE id = ?" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(1,$id,\PDO::PARAM_INT);
        $activity= NULL ;
        if ($req->execute()){  
            try {
                  $activity = $req->fetch();
                }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $activity ;
    }

}