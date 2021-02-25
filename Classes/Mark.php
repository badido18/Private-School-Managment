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