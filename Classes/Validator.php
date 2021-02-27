<?php

namespace Classes ;

class Validator{

    static public function Category($category){
        if (in_array($category,Article::$Categories))
            return $category ;
        return 1 ;  
    }
    static public function Num($id){
        if (preg_match("/^[0-9]+$/", $id))
            return $id ;
        return NULL ;  
    }
}