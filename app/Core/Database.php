<?php
namespace App\Core;
use \PDO;
class Database{

    private static $pdo=null;

    private function __construct(){ }

    public static function getconnection(){
    if(self::$pdo ==null){
        try {
            $host="localhost";
            $dbname="CareerLink";
            $user="root";
            $pwd="";
            self::$pdo=new PDO("maysql:host=$host;dbname=$dbname;",$user,$pwd, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]); 
        return self::$pdo;
        } catch (\Throwable $th) {
            //throw $th;
        }
          
    }
    return self::$pdo;
    }
}