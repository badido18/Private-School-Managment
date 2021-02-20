<?php 

namespace Classes ;

class Classe extends ClassGlobal{

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

	public function getstudents(){
		//call model for that request
		return NULL ;
	}
}