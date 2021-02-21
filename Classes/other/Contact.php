<?php

namespace Classes\other ;

class Contact extends \Classes\ClassGlobal{

    private $id ;
    private $type;
    private $content;

    public function __construct( $id ,$type,$content){
		$this->id = $id ;
		$this->type = $type;
		$this->content = $content;
    }
}