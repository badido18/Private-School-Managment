<?php 

namespace Classes ;

class User extends ClassGlobal{

    private $id ;
    private $username ;
    private $email ;
    private $passwd ;
    private $type;
    private $address ;
    private $phones = [] ;
    
    public function __construct($id,$username,$email,$passwd,$type,$address = NULL){
        $this->id = $id ;
		$this->username = $username ;
		$this->email = $email ;
		$this->passwd = $passwd ; 
		$this->type = $type ;
		$this->address = $address ;
    }   

    public function addPhoneNumber($numbers){
        $this->phones[] = $numbers ; 
    }

}