<?php

namespace Classes ;

class Activity extends ClassGlobal{

    private $id ;
    private $title;

    public function __construct( $id ,$title){
		$this->id = $id ;
		$this->title = $title;
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