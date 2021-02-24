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
        $userCredentials = NULL ;
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

    public function getUsers($type){ 
        $pre = "SELECT id , username FROM users WHERE type = ?" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(1,$type,\PDO::PARAM_INT);
        $users = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $users[] = new User(intval($row['id']),$row['username'],NULL,NULL,$type);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $users ;
    }


    public function verifyUser($username,$passwd,$type){
        $pre = "SELECT * FROM users WHERE (username = :username OR email = :username) AND (passwd = :passwd)" ;
        $req = $this->dbconnection->prepare($pre) ;
        $req->bindParam(':username',$username,\PDO::PARAM_STR);
        $req->bindParam(':passwd',$passwd,\PDO::PARAM_STR);
        if ($req->execute()){  
            try { 
                $result = $req->fetch();
                if ($result and User::translateAccType($result['type'])===$type)
                    return TRUE ;
                return FALSE ;
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
    }

	public function addUser($user){
		$pre = "INSERT INTO users (username, email, passwd, type, address, phone1, phone2, phone3) VALUES (?,?,SHA1(?),?,?,?,?,?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$user->__get('username'),\PDO::PARAM_STR);
		$req->bindParam(2,$user->__get('email'),\PDO::PARAM_STR);
		$req->bindParam(3,$user->__get('passwd'),\PDO::PARAM_STR);
		$req->bindParam(4,$user->__get('type'),\PDO::PARAM_INT);
		$req->bindParam(5,$user->__get('address'),\PDO::PARAM_STR);
		$req->bindParam(6,$user->__get('phone1'),\PDO::PARAM_STR);
		$req->bindParam(7,$user->__get('phone2'),\PDO::PARAM_STR);
		$req->bindParam(8,$user->__get('phone3'),\PDO::PARAM_STR);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

	public function deleteUser($id){
		$pre = "DELETE FROM users WHERE id = ?" ;
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


	public function updateUser($id,$arg,$value){
		$arg = trim($arg);
		$pre = "UPDATE users SET $arg = ? WHERE id = ?" ;
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