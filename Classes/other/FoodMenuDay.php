<?php

namespace Classes\other ;

class FoodMenuDay extends ClassGlobal{

    private $id ;
    private $meal;
    private $dayName;

    public function __construct( $id ,$meal,$dayName){
		$this->id = $id ;
		$this->meal = $meal;
		$this->dayName = $dayName;
    }
}