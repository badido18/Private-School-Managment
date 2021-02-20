<?php

namespace Classes ;

class Activity extends ClassGlobal{

    private $id ;
    private $title;

    public function __construct( $id ,$title){
		$this->id = $id ;
		$this->title = $title;
    }
}