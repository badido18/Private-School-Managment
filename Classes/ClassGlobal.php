<?php

namespace Classes ;

abstract Class ClassGlobal{

    public function __get($property) {}
    public function __set($property, $value) {}
    public function saveChangesToDb(){}
    public function deleteFromDb(){}
    public function addToDb(){}
}