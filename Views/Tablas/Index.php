<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <title>Helmets Bike</title>
        <link rel="stylesheet" href="styles.css">
        <script src="Bootstrap/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Dirección</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Germán</td>
                                <td>Galindo</td>
                                <td>german.galindo@cun.co</td>
                                <td>Cra 80b cun Bogotá</td>
                            </tr>
                            <tr>
                                <td>Juan</td>
                                <td>Portilla</td>
                                <td>Juan.portilla@cun.co</td>
                                <td>Cra 17J cun Bogotá</td>
                            </tr>
                            <tr>
                                <td>Viviana</td>
                                <td>Palomares</td>
                                <td>Vpalomares9@cun.co</td>
                                <td>Cra 12#4 cun Bogotá</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
require_once("../../modelos/cliente.php")
    //$datosLectura = new clienteService();
    //$datosDeTabla = $datosLectura->lectura();
    $leer = new cliente();
    $datos = $leer->getClientes();
    echo $leer;
?> 
