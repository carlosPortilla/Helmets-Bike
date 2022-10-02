<?php
require_once("autoload.php");
class clienteService extends cliente{
    private $leer;
    private $crear;
    private $datos;
    
    function lectura () {
        $this->leer = new cliente();
        $this->$datos= $this->leer->getcliente();
        
}
function creacion () {
    $this->crear = new cliente();
    $this->$datos=$this->crear->insertcliente(?,?,?,?,?,?,?,?,?,?);

}
}


// $objcliente =new cliente();


// //insertar cliente
// //$insert = $objcliente->insertcliente(151, 151, "PA", 93013, "529 Clarendon Pass", "otto", "sefue", 16/02/2003, "otosefue@aol.com", 209-347-5039);
// //echo $insert;

// //ESTRAER TODOS LOS REGISTROS 
// $cliente = $objcliente->getcliente();
// print_r("<pre>");
// print_r($cliente);

?>