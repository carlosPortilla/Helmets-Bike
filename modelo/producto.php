<?php
 require_once("autoload.php");

class producto extends Conexion {
    private $ID_PRODUCTO;
    private $ID_FABRICA;
    private $ID_FACTURA;
    private $NOMBRE_PRODUCTO;
    private $REF_PRODUCTO;
    private $ID_FABRICANTE;
    private $DISPONIBILIDAD;
    private $PRCIO;
    private $conexion;
    
    

    public function __construct(){
     $this->conexion = new Conexion();  
     $this->conexion = $this->conexion->connect();

   }   
   public function insertProducto(int $idProducto,string $idFabrica,string $idFactura,string $nombreProducto,string $referencia,string $fabricante,string $disponibilidad,string $precio)
   {
          $this->ID_PRODUCTO=$idProducto;
          $this->ID_FABRICA=$idFabrica;
          $this->ID_FACTURA=$idFactura;
          $this->NOMBRE_PRODUCTO=$nombreProducto;
          $this->REF_PRODUCTO=$referencia;
          $this->ID_FABRICANTE=$fabricante;
          $this->DISPONIBILIDAD=$disponibilidad;
          $this->PRCIO=$precio;
         
          

          $sql = "INSERT INTO tbl_producto (ID_PRODUCTO, ID_FABRICA, ID_FACTURA,NOMBRE_PRODUCTO,REF_PRODUCTO,ID_FABRICANTE,DISPONIBILIDAD,PRCIO) VALUES(?,?,?,?,?,?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData = array($this->ID_PRODUCTO, $this->ID_FABRICANTE,$this->ID_FACTURA,$this->NOMBRE_PRODUCTO,$this->ID_FABRICANTE,$this->DISPONIBILIDAD,$this->$PRCIO);
          $resInsert= $insert->execute($arrData);
          $idInsert =$this->conexion->LastInsertId();
          return $idInsert;

    }
 public function getproducto()
 {
     $sql = "SELECT * FROM tbl_producto";
     $execute = $this->conexion->query($sql);
     $request = $execute->fetchall(PDO::FETCH_ASSOC);
     return $request;

 }
 }
?>