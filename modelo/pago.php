<?php
 require_once("autoload.php");

class pago extends Conexion {
    private $ID_PAGO;
    private $ID_FACTURA;
    private $NOMBRE_PAGO;
    private $TIPO_PAGO;
    private $conexion;
    
    

    public function __construct(){
     $this->conexion = new Conexion();  
     $this->conexion = $this->conexion->connect();

   }   
   public function insertPago(int $idPago,string  $idFactura,string $nombrePago,string $tipoPago)
   {
          $this->ID_PAGO=$idPago;
          $this->ID_FACTURA=$idFactura;
          $this->NOMBRE_PAGO=$nombrePago;
          $this->TIPO_PAGO=$tipoPago;
         
          

          $sql = "INSERT INTO tbl_pago (ID_PAGO, ID_FACTURA, NOMBRE_PAGO,TIPO_PAGO) VALUES(?,?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData = array($this->ID_PAGO, $this->ID_FACTURA,$this->NOMBRE_PAGO,$this->TIPO_PAGO);
          $resInsert= $insert->execute($arrData);
          $idInsert =$this->conexion->LastInsertId();
          return $idInsert;

    }
 public function getpago()
 {
     $sql = "SELECT * FROM tbl_pago";
     $execute = $this->conexion->query($sql);
     $request = $execute->fetchall(PDO::FETCH_ASSOC);
     return $request;

 }
 }
?>