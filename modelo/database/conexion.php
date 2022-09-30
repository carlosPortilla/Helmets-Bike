<?php
// PDO
class conexion{

    public static function connect(){
        try{
           $pdo= new PDO('mysql:host=localhost;dbname=helmets_bikes;charset=utf8','root','');
           $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           echo "hola mundo try";
           return $pdo;
        }catch (Exception $e){
            echo "hola mundo catch";
            die($e->getMessage());
        }
    }
    // PDO::ATTR_ERRMODE
    // PDO::ERRMODE_EXCEPTION
}
echo "hola mundo 19";