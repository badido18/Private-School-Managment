<?php

namespace Classes\other ;

class Presentation extends \Classes\ClassGlobal{

    private $id ;
    private $imgUrl;
    private $paragraph;

    public function __construct( $id ,$paragraph,$imgUrl){
		$this->id = $id ;
		$this->paragraph = $paragraph;
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