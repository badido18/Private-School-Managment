<?php

namespace Classes ;

abstract Class ClassGlobal{

    public function __get($property) {
        if (property_exists($this, $property))
            return $this->$property;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) 
            $this->$property = $value;
        return $this;
    }

    abstract public function saveChangesToDb() ;
    abstract public function deleteFromDb()  ;
    abstract public function addToDb() ;
}