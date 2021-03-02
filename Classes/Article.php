<?php

namespace Classes ;

class Article extends ClassGlobal{

    private $id ;
    private $title ;
    private $content ;
    private $imgUrl ;
    public $public ;
    public static $NumberOfCategories = 7;
    public static  $Categories = ['everyone','teacher','parents','students','level1','level2','level3'] ;

    public function __construct($id,$title,$content,$imgUrl=NULL,$public=[]){  
        $this->id = $id ;
        $this->content = $content ;
        $this->title = $title ;
        $this->imgUrl = $imgUrl ;
        $this->public = $public ;
    }

    public static function categoryToFrench($categ){
        switch ($categ) {
            case 'students': return 'eleves'; break;
            case 'teachers': return 'enseigants'; break;
            case 'parents': return 'parents'; break;
            default: return 'tout le monde'; break;
        }
    }

    public function setpublic($arg,$val){
        $this->public[$arg] = $val ;
    }

    public function getpublic(){
        $result = [];
        foreach($this->public as $arg => $val ){
            if($val == 1)
                $result[] = $arg ;
        }
        return $result ;
    }

    public function isinpublic($arg){
        return in_array($arg,$this->public) ;
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