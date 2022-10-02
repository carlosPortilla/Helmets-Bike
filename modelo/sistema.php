<?php
require_once("autoload.php");
$objcliente =new cliente();

//insertar cliente
//$insert = $objcliente->insertcliente(151, 151, "PA", 93013, "529 Clarendon Pass", "otto", "sefue", 16/02/2003, "otosefue@aol.com", 209-347-5039);
//echo $insert;

//ESTRAER TODOS LOS REGISTROS 
$cliente = $objcliente->getcliente();
print_r("<pre>");
print_r($cliente);

?>