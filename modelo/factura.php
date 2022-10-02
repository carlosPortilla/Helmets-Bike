<?php
 require_once("autoload.php");

class factura extends Conexion {
    private $ID_FACTURA;
    private $ID_ENTREGA;
    private $FECHA_FACTURA;
    private $CANTIDAD;
    private $ID_T_PAGO;
    private $conexion;
    
    

    public function __construct(){
     $this->conexion = new Conexion();  
     $this->conexion = $this->conexion->connect();

   }   
   public function insertFactura(int $numeroFactura,string  $idEntrega,string $fechaFactura,string $cantidad,string $idPago)
   {
          $this->ID_FACTURA=$numeroFactura;
          $this->ID_ENTREGA=$idEntrega;
          $this->FECHA_FACTURA=$fechaFactura;
          $this->CANTIDAD=$cantidad;
          $this->ID_T_PAGO=$idPago;
          

          $sql = "INSERT INTO tbl_factura (ID_FACTURA,ID_ENTREGA, FECHA_FACTURA,CANTIDAD,ID_T_PAGO) VALUES(?,?,?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData = array($this->ID_FACTURA, $this->ID_ENTREGA,$this->FECHA_FACTURA,$this->CANTIDAD,$this->ID_T_PAGO);
          $resInsert= $insert->execute($arrData);
          $idInsert =$this->conexion->LastInsertId();
          return $idInsert;

    }
 public function getfactura()
 {
     $sql = "SELECT * FROM tbl_factura";
     $execute = $this->conexion->query($sql);
     $request = $execute->fetchall(PDO::FETCH_ASSOC);
     return $request;

 }
 }
?>