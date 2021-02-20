<?php

namespace Classes ;

class Mark extends ClassGlobal{

    private $id ;
    private $studentId;
    private $courseId;
    private $observation ;
    private $mark ;

    public function __construct( $id ,$studentId, $courseId,$mark,$observation = NULL){
		$this->id = $id ;
		$this->studentId = $studentId;
		$this->courseId = $courseId;
		$this->mark = $mark ; 
		$this->observation= $observation ;
    }
    
}