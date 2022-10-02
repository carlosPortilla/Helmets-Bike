<?php
 require_once("autoload.php");

class certificacion extends Conexion {
    private $ID_CERTIFICADO;
    private $ID_PRODUCTO;
    private $TIPO_NORMA;
    private $PAIS_NORMA;
    private $conexion;
    
    

    public function __construct(){
     $this->conexion = new Conexion();  
     $this->conexion = $this->conexion->connect();

   }   
   public function insertCliente(int $numeroCasco,string  $numeroProducto,string $tipoNorma,string $paisNorma)
   {
          $this->ID_CERTIFICADO=$numeroCasco;
          $this->ID_PRODUCTO=$numeroProducto;
          $this->TIPO_NORMA=$tipoNorma;
          $this->PAIS_NORMA=$paisNorma;
        

          $sql = "INSERT INTO tbl_certificacion (ID_CERTIFICADO, ID_PRODUCTO, TIPO_NORMA, PAIS_NORMA) VALUES(?,?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData = array($this->ID_CERTIFICADO, $this->ID_PRODUCTO,$this->TIPO_NORMA,$this->PAIS_NORMA);
          $resInsert= $insert->execute($arrData);
          $idInsert =$this->conexion->LastInsertId();
          return $idInsert;

    }
 public function getcertificacion()
 {
     $sql = "SELECT * FROM tbl_certificacion";
     $execute = $this->conexion->query($sql);
     $request = $execute->fetchall(PDO::FETCH_ASSOC);
     return $request;

 }
 }
?>


