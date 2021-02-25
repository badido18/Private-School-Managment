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