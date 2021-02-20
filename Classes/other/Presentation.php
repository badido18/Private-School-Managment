<?php

namespace Classes ;

class Presentation extends ClassGlobal{

    private $id ;
    private $imgUrl;
    private $paragraph;

    public function __construct( $id ,$paragraph,$imgUrl){
		$this->id = $id ;
		$this->paragraph = $paragraph;
		$this->imgUrl = $imgUrl;
    }
}