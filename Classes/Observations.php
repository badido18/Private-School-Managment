<?php

namespace Classes ;

//remarque
class Observations extends ClassGlobal{

    private $id ;
    private $studentId;
    private $courseId;
    private $teacherId ;
    private $content ;

    public function __construct( $id ,$studentId, $courseId = NULL,$teacherId = NULL,$content){
		$this->id = $id ;
		$this->studentId = $studentId;
		$this->courseId = $courseId;
		$this->teacherId = $teacherId ; 
		$this->content= $content ;
    }
    
}