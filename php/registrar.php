<?php

$conexion = mysqli_connect('localhost','prueba','c8u$7ShG','cb_mantenimiento') or die(mysql_error($msyqli));

insertar($conexion);
function insertar($conexion){
    $fecha=$_POST['fecha'];
    $taller=$_POST['taller'];
    $kilometraje=$_POST['kilometraje'];
    $costom=$_POST['costomantenimiento'];
    $costor=$_POST['repuestos'];
    $costot=$costom+$costor;
    $observaciones=$_POST['observaciones'];
    $tipo='ninguno';



$consulta="INSERT INTO registro(fecha,taller,kilometraje,costo,tipo,observaciones)
    VALUES ('$fecha','$taller','$kilometraje','$costot','$tipo','$observaciones')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}
?>
