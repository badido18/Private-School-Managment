<?php

namespace Models ;

use Classes\other\Contact;

class ContactModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function getContacts(){
        $pre = "SELECT * FROM contacts" ;
        $req = $this->dbconnection->prepare($pre) ;
        $contacts = [] ;
        if ($req->execute()){  
            try {
                foreach( $req->fetchAll() as $row) {
                    $contacts[] = new Contact(intval($row['id']),$row['type'],$row['content']);
                }
            }
            catch(\Exception $e){
                die("ERROR: Could not connect. " . $e->getMessage());
            }
        }
        else {
            echo "Something went Bad :(";
        }
        return $contacts ;
    }

    public function addContact($contact){
		$pre = "INSERT INTO contacts (type, content) VALUES (?,?)" ;
		$req = $this->dbconnection->prepare($pre) ;
		$req->bindParam(1,$contact->__get('type'),\PDO::PARAM_STR);
		$req->bindParam(2,$contact->__get('content'),\PDO::PARAM_STR);
		if ($req->execute()){ 
			return TRUE ; 
		}
		else {
			echo "Something went Bad :(";
		}
		return FALSE ;
	}

	public function deleteContact($id){
		$pre = "DELETE FROM contacts WHERE id = ?" ;
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


	public function updateContact($id,$arg,$value){
		$arg = trim($arg);
		$pre = "UPDATE contacts SET $arg = ? WHERE id = ?" ;
		$req = $this->dbconnection->prepare($pre) ;
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