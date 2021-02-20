<?php 

namespace Classes ;

Interface ToModel {
    public function saveChangesToDb();
    public function deleteFromDb() ;
    public function addToDb() ;
}