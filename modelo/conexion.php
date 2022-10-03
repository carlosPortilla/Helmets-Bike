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
$conectar = new conection;
echo $conectar;      
?>
    


