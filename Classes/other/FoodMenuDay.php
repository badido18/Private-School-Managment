<?php

namespace Classes\other ;

class FoodMenuDay extends \Classes\ClassGlobal{

    private $id ;
    private $meal;
    private $dayName;

    public function __construct( $id ,$meal,$dayName){
		$this->id = $id ;
		$this->meal = $meal;
		$this->dayName = $dayName;
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