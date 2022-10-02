<?php
 require_once("autoload.php");

class cliente extends Conexion {
    private $ID_CLIENTE;
    private $ID_PRODUCTO;
    private $TIPO_DOC;
    private $NUM_DOC;
    private $DIRECCION;
    private $NOMBRE;
    private $APELLIDO;
    private $EDAD;
    private $CORREO;
    private $TELEFONO;
    private $conexion;
    
    

    public function __construct(){
     $this->conexion = new Conexion();  
     $this->conexion = $this->conexion->connect();

   }   
   public function insertCliente(int $numeroCliente,string  $numeroProducto,string $tipoDocumento,string  $numeroDocumento,string $direccion, string $nombre, string $apellido, string $edad, string $correo, string $telefono)
   {
          $this->ID_CLIENTE=$numeroCliente;
          $this->ID_PRODUCTO=$numeroProducto;
          $this->TIPO_DOC=$tipoDocumento;
          $this->NUM_DOC=$numeroDocumento;
          $this->DIRECCION=$direccion;
          $this->NOMBRE=$nombre;
          $this->APELLIDO=$apellido;
          $this->EDAD=$edad;
          $this->CORREO=$correo;
          $this->TELEFONO=$telefono;

          $sql = "INSERT INTO cliente (ID_CLIENTE, ID_PRODUCTO, TIPO_DOC, NUM_DOC, DIRECCION, NOMBRE, APELLIDO, EDAD, CORREO, TELEFONO) VALUES(?,?,?,?,?,?,?,?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData = array($this->ID_CLIENTE, $this->ID_PRODUCTO,$this->TIPO_DOC,$this->NUM_DOC,$this->DIRECCION,$this->NOMBRE,$this->APELLIDO,$this->EDAD,$this->CORREO,$this->TELEFONO);
          $resInsert= $insert->execute($arrData);
          $idInsert =$this->conexion->LastInsertId();
          return $idInsert;

    }
 public function getcliente()
 {
     $sql = "SELECT * FROM cliente";
     $execute = $this->conexion->query($sql);
     $request = $execute->fetchall(PDO::FETCH_ASSOC);
     return $request;

 }
 }
?>


