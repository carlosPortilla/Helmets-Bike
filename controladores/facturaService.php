<?php
require_once("autoload.php");
// $objfactura =new factura();

class facturaService extends cliente{
    private $leer;
    private $crear;
    private $datos;
    
    function lectura () {
        $this->leer = new cliente();
        $this->$datos= $this->leer->getfactura();
        
}
function creacion () {
    $this->crear = new cliente();
    $this->$datos=$this->crear->insertfactura(?,?,?,?,?,?,?,?,?,?);

}
}

//insertar certificacion
//$insert = $objcliente->insertcliente(151, 151, "PA", 93013, "529 Clarendon Pass", "otto", "sefue", 16/02/2003, "otosefue@aol.com", 209-347-5039);
//echo $insert;

// //ESTRAER TODOS LOS REGISTROS 
// $factura= $objfactura->getfactura();
// print_r("<pre>");
// print_r($factura);

?>