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