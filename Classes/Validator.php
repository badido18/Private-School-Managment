<?php

namespace Classes ;

class Validator{

    static public function Category($category){
        if (in_array($category,['teacher','parents','students','level1','level2','level3']))
            return $category ;
        return 1 ;  
    }
}