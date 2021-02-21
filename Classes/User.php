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
    
    public function __construct($id,$username,$email,$passwd,$type,$address = NULL,$phones=[]){
        $this->id = $id ;
		$this->username = $username ;
		$this->email = $email ;
		$this->passwd = $passwd ; 
		$this->type = $this->translateAccType($type) ;
		$this->address = $address ;
		$this->phones = $phones ;
    }   

    private function translateAccType($type){
        switch ($type) {
            case 0 :
                return 'admin' ;
                break;
            case 1 :
                return 'teacher' ;
                break;
            case 2 :
                return 'parent' ;
                break;
            case 3 :
                return 'student' ;
                break;
            default:
                return 'not specified';
                break;
        }
    }

    public function addPhoneNumber($numbers){
        $this->phones[] = $numbers ; 
    }

}