<?php

namespace Classes ;

class Course extends ClassGlobal{

    private $id ;
    private $name ;
    private $teacherId ;

    public function __construct( $id ,$name, $teacherId){
		$this->id = $id ;
		$this->name = $name ;
		$this->teacherId = $teacherId ;
    }
    
}