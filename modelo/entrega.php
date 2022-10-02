<?php
 require_once("autoload.php");

class entrega extends Conexion {
    private $ID_ENTREGA;
    private $TIPO_ENTREGA;
    private $FECHA__ENTREGA;
    private $conexion;
    
    

    public function __construct(){
     $this->conexion = new Conexion();  
     $this->conexion = $this->conexion->connect();

   }   
   public function insertEntrega(int $numeroEntrega,string  $tipoEntrega,string $fechaEntrega)
   {
          $this->ID_ENTREGA=$numeroEntrega;
          $this->TIPO_ENTREGA=$tipoEntrega;
          $this->FECHA__ENTREGA=$fechaEntrega;
          

          $sql = "INSERT INTO tbl_entrega (ID_ENTREGA, TIPO_ENTREGA, FECHA_ENTREGA) VALUES(?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData = array($this->ID_ENTREGA, $this->TIPO_ENTREGA,$this->FECHA__ENTREGA,);
          $resInsert= $insert->execute($arrData);
          $idInsert =$this->conexion->LastInsertId();
          return $idInsert;

    }
 public function getentrega()
 {
     $sql = "SELECT * FROM tbl_entrega";
     $execute = $this->conexion->query($sql);
     $request = $execute->fetchall(PDO::FETCH_ASSOC);
     return $request;

 }
 }
?>