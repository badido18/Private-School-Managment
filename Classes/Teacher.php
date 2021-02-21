<?php


namespace Classes ;

class Teacher extends ClassGlobal{

    private $id ;
    private $firstName ;
    private $lastName ;
    private $birthDate ;
    private $workHours;
    private $receptionTime;
    private $scheduleUrl ;

    public function __construct( $id ,$firstName, $lastName, $birthDate = NULL  ,$receptionTime = NULL,$workHours = 0 , $scheduleUrl = NULL){
		$this->id = $id ;
		$this->firstName = $firstName ;
		$this->lastName = $lastName ;
		$this->birthDate = $birthDate ; 
		$this->workHours = $workHours ;
		$this->receptionTime = $receptionTime ;
        $this->scheduleUrl = $scheduleUrl ;
    }
}