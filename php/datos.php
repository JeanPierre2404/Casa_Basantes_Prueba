<?php
$conexion = mysqli_connect('localhost','prueba','c8u$7ShG','cb_mantenimiento') or die(mysql_error($msyqli));

crear($conexion);

function crear($conexion){
 $consulta="CREATE TABLE cb_mantenimiento.registro ( fecha DATE NOT NULL, taller TEXT NOT NULL, kilometraje INT NOT NULL, costo INT NOT NULL, tipo TEXT NOT NULL, observaciones TEXT NOT NULL)";
 mysqli_query($conexion,$consulta);
 msqyli_close($conexion);
}




?>