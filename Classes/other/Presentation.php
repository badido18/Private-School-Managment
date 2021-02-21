<?php

namespace Classes\other ;

class Presentation extends \Classes\ClassGlobal{

    private $id ;
    private $imgUrl;
    private $paragraph;

    public function __construct( $id ,$paragraph,$imgUrl){
		$this->id = $id ;
		$this->paragraph = $paragraph;
		$this->imgUrl = $imgUrl;
    }
}