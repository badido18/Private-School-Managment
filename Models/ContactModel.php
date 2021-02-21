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



}