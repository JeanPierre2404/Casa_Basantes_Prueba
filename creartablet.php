<?php

$conexion=mysqli_connect('localhost','prueba','c8u$7ShG','cb_mantenimiento')
or die(mysql_error($mysqli));

crear($conexion);

function crear($conexion){

    $consulta="CREATE TABLE cb_mantenimiento.registro ( fecha DATE NOT NULL , taller TEXT NOT NULL , kilometraje INT NOT NULL , costo INT NOT NULL , tipo TEXT NOT NULL , observaciones TEXT NOT NULL )";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Instalacion exitoso
</h3>
<a href='instalacion.html'>
    <button>REGRESAR AL INICIO
</button></a>
</body>
</html>