<?php

namespace Classes ;

class ParentClass extends ClassGlobal{

    private $id ;
    private $firstName ;
    private $lastName ;
    private $birthDate ;
    private $profession;

    public function __construct( $id ,$firstName, $lastName,$birthDate,$profession = NULL){
		$this->id = $id ;
		$this->firstName = $firstName ;
		$this->lastName = $lastName ;
		$this->birthDate = $birthDate ; 
		$this->profession = $profession;
    }
    
}