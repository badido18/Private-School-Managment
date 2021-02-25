<?php

namespace Classes\other ;

class Carrousel extends \Classes\ClassGlobal{

    private $id ;
    private $imgUrl;

    public function __construct( $id ,$imgUrl){
		$this->id = $id ;
		$this->imgUrl = $imgUrl;
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