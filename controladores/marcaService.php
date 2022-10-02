<?php
require_once("autoload.php");
// $objmarca =new marca();

class marcaService extends cliente{
    private $leer;
    private $crear;
    private $datos;
    
    function lectura () {
        $this->leer = new cliente();
        $this->$datos= $this->leer->getmarca();
        
}
function creacion () {
    $this->crear = new cliente();
    $this->$datos=$this->crear->insertmarca(?,?,?,?,?,?,?,?,?,?);

}
}

//insertar certificacion
//$insert = $objcliente->insertcliente(151, 151, "PA", 93013, "529 Clarendon Pass", "otto", "sefue", 16/02/2003, "otosefue@aol.com", 209-347-5039);
//echo $insert;

//ESTRAER TODOS LOS REGISTROS 
// $marca= $objmarca->getmarca();
// print_r("<pre>");
// print_r($marca);

?>