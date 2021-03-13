<?php


namespace Classes ;

class Teacher extends ClassGlobal{

    private $id ;
    private $firstName ;
    private $lastName ;
    private $birthDate ;
    private $level ;
    private $workHours;
    private $receptionTime;
    private $scheduleUrl ;

    public function __construct( $id ,$firstName, $lastName, $birthDate = NULL  ,$level,$workHours = 0 ,$receptionTime = NULL, $scheduleUrl = NULL){
		$this->id = $id ;
		$this->firstName = $firstName ;
		$this->lastName = $lastName ;
        $this->level = $level ;
		$this->birthDate = $birthDate ; 
		$this->workHours = $workHours ;
		$this->receptionTime = $receptionTime ;
        $this->scheduleUrl = $scheduleUrl ;
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