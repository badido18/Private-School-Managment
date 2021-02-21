<?php

namespace Classes\other ;

class Carrousel extends \Classes\ClassGlobal{

    private $id ;
    private $imgUrl;

    public function __construct( $id ,$imgUrl){
		$this->id = $id ;
		$this->imgUrl = $imgUrl;
    }
}