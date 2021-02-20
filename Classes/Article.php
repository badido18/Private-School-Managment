<?php

namespace Classes ;

class Article extends ClassGlobal{

    private $id ;
    private $title ;
    private $content ;
    private $imgUrl ;
    public $public = [] ;

    public function __construct($id,$title,$content,$imgUrl=NULL){  
        $this->id = $id ;
        $this->content = $content ;
        $this->title = $title ;
        $this->imgUrl = $imgUrl ;
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
}