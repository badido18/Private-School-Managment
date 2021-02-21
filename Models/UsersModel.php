<?php

namespace Models ;

use Classes\User;

class UsersModel extends Model {

    public function __construct(){
        parent::__construct();
        //following
    }

    //passwords are hashed with sha1()

    public function getUser($username,$passwd){ 
        $pre = "SELECT * FROM users WHERE (username = :username OR email = :username) AND (passwd = SHA1(:passwd))" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(':username',$username,\PDO::PARAM_STR);
        $req->bindParam(':passwd',$passwd,\PDO::PARAM_STR);
        $userCredentials = [] ;
        
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $userCredentials = new User(intval($row['id']),$row['username'],$row['email'],$row['passwd'],$row['type'],$row['address'],[$row['phone1'],$row['phone2'],$row['phone3']]);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $userCredentials ;
    }

}