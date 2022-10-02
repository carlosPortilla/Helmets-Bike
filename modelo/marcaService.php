<?php
require_once("autoload.php");
$objmarca =new marca();

//insertar certificacion
//$insert = $objcliente->insertcliente(151, 151, "PA", 93013, "529 Clarendon Pass", "otto", "sefue", 16/02/2003, "otosefue@aol.com", 209-347-5039);
//echo $insert;

//ESTRAER TODOS LOS REGISTROS 
$marca= $objmarca->getmarca();
print_r("<pre>");
print_r($marca);

?>