
<!-- 
// PDO
/*class conexion{
?php
*por mejorar 
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
     PDO::ATTR_ERRMODE
    PDO::ERRMODE_EXCEPTION
}
echo "hola mundo 19"; -->

<?php

class Conexion{
    private $servidor="localhost";
    private $usuario="root";
    private $db="helmets_bikes";
    private $password="";
    private $conect;

    public function __construct(){
        $connectionString = "mysql:hos=".$this->servidor.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conect = new PDO($connectionString,$this->usuario,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa";
        } catch (Exception $e) {
            $this->conect ='error conexion';
            echo "error: ". $e->getMessage();
        }
    

    }
    public function connect()
{
   return $this->conect;
}
}       
?>
    


