<?php

include'conexion.php';
$idVentas=$_GET['idVentas'];


$consulta = "select * from ventas where idVentas = '$idVentas'";

$resultado = $conexion -> query($consulta);

while($fila = $resultado ->fetch_array()){
$elemento[] = array_map('utf8_encode', $fila);
}
echo json_encode($elemento);
$resultado -> close();
?>