<?php 

namespace Models ;

class Model{

    protected $dbconnection ;

    public function __construct(){
        //db connection
        try{
            $this->dbconnection = new \PDO($_ENV['DB_DRIVER'].":host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD']);
            $this->dbconnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e){
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    public function __destruct(){
        $this->dbconnection = NULL;
    }

}