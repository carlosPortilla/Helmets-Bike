<?php
 require_once("autoload.php");

class marca extends Conexion {
    private $ID_MARCA;
    private $ID_PRODUCTO;
    private $NAME_MARCA;
    private $COLOR;
    private $TALLA;
    private $MATERIAL;
    private $conexion;
    
    

    public function __construct(){
     $this->conexion = new Conexion();  
     $this->conexion = $this->conexion->connect();

   }   
   public function insertMarca(int $marca,string  $idProducto,string $nombreMarca,string $color,string $talla, string $material)
   {
          $this->ID_MARCA=$marca;
          $this->ID_PRODUCTO=$idProducto;
          $this->NAME_MARCA=$nombreMarca;
          $this->COLOR=$color;
          $this->TALLA=$talla;
          $this->MATERIAL=$material;
          

          $sql = "INSERT INTO tbl_marca (ID_MARCA, ID_PRODUCTO, NAME_MARCA,COLOR,TALLA,MATERIAL) VALUES(?,?,?,?,?,?)";
          $insert = $this->conexion->prepare($sql);
          $arrData = array($this->ID_MARCA, $this->ID_PRODUCTO,$this->NAME_MARCA,$this->COLOR,$this->TALLA,$this->MATERIAL);
          $resInsert= $insert->execute($arrData);
          $idInsert =$this->conexion->LastInsertId();
          return $idInsert;

    }
 public function getmarca()
 {
     $sql = "SELECT * FROM tbl_marca";
     $execute = $this->conexion->query($sql);
     $request = $execute->fetchall(PDO::FETCH_ASSOC);
     return $request;

 }
 }
?>