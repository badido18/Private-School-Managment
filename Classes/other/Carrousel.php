<?php

namespace Classes ;

class Carrousel extends ClassGlobal{

    private $id ;
    private $imgUrl;

    public function __construct( $id ,$imgUrl){
		$this->id = $id ;
		$this->imgUrl = $imgUrl;
    }
}