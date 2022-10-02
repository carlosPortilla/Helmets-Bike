<?php
require_once("autoload.php");
// $objentrega =new entrega();

// $objcertificacion =new certificacion();
class entregaService extends cliente{
    private $leer;
    private $crear;
    private $datos;
    
    function lectura () {
        $this->leer = new cliente();
        $this->$datos= $this->leer->getentrega();
        
}
function creacion () {
    $this->crear = new cliente();
    $this->$datos=$this->crear->insertentrega(?,?,?,?,?,?,?,?,?,?);

}
}

//insertar certificacion
//$insert = $objcliente->insertcliente(151, 151, "PA", 93013, "529 Clarendon Pass", "otto", "sefue", 16/02/2003, "otosefue@aol.com", 209-347-5039);
//echo $insert;

//ESTRAER TODOS LOS REGISTROS 
// $entrega = $objentrega->getentrega();
// print_r("<pre>");
// print_r($entrega);

?>