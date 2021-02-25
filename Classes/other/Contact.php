<?php

namespace Classes\other ;

class Contact extends \Classes\ClassGlobal{

    private $id ;
    private $type;
    private $content;

    public function __construct( $id ,$type,$content){
		$this->id = $id ;
		$this->type = $type;
		$this->content = $content;
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