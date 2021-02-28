<?php 

namespace Classes ;

class Classe extends ClassGlobal {

	private $id ;
	private $level ;
	private $year ;
	private $number ;
	private $major ;
	private $scheduleUrl ;

	public function __construct($id ,$level, $year,$number, $major = NULL, $scheduleUrl = NULL){
		$this->id = $id ;
		$this->level = $level ;
		$this->year = $year ;
		$this->number = $number ; 
		$this->major = $major ;
		$this->scheduleUrl = $scheduleUrl ;
	}

	static public function getLevelName($level){
		switch($level){
			case 1 : return "Primaire" ; break;
			case 2 : return "Moyen" ; break;
			case 3 : return "Secondaire" ; break;
			default : return null ;
		}
	}

	public function getstudents(){
		//call model for that request
		return NULL ;
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