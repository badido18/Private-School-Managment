<?php

namespace Classes ;

class Student extends ClassGlobal{

    private $id ;
    private $firstName ;
    private $lastName ;
    private $birthDate ;
    private $classId;
    private $parentId;

    public function __construct( $id ,$firstName, $lastName,$birthDate,$classId = NULL,$parentId = NULL){
		$this->id = $id ;
		$this->firstName = $firstName ;
		$this->lastName = $lastName ;
		$this->birthDate = $birthDate ; 
		$this->classId = $classId ;
		$this->parentId = $parentId ;
    }
    
}