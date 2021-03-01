<?php 

namespace Classes ;

class Classe extends ClassGlobal {

	private $id ;
	private $level ;
	private $levelNumber ;
	private $year ;
	private $number ;
	private $major ;
	private $scheduleUrl ;

	public function __construct($id ,$level, $year,$number, $major = NULL, $scheduleUrl = NULL){
		$this->id = $id ;
		$this->level = $this->getLevelName($level) ;
		$this->levelNumber = $level ;
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

	public static  $Majors = ['Scientifique','Math','Technique Math','Langues','Gestion'] ;

	private function getMajorFormat($major){
		switch ($major) {
			case 'Scientifique': return "S" ; break;
			case 'Math': return "M" ; break;
			case 'Technique Math': return "TM" ; break;
			case 'Langues': return "L" ; break;
			case 'Gestion': return "G" ; break;
			default: return "N" ; break;
		}
	}

	private function getLevelFormat($level,$major){
		switch ($level) {
			case 1 : return "AP" ;break;
			case 2 : return "AM" ;break;
			case 3 : return $this->getMajorFormat($major) ; break;
			default: return "A" ; break;
		}
	}

	public function getName(){
		return $this->year.$this->getLevelFormat($this->levelNumber,$this->major).$this->number ;
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