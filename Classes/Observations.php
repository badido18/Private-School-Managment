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
    

    public function __get($property) {
      if (property_exists($this, $property))
          return $this->$property;
  }

  public function __set($property, $value) {
      if (property_exists($this, $property)) 
          $this->$property = $value;
      return $this;
  }
	public function jsonSerialize() {
        return (object) get_object_vars($this);
    }
}