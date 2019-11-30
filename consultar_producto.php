<?php

include'conexion.php';
$codigoBarras=$_GET['codigoBarras'];


$consulta = "select * from producto where codigoBarras = '$codigoBarras'";

$resultado = $conexion -> query($consulta);

while($fila = $resultado ->fetch_array()){
$elemento[] = array_map('utf8_encode', $fila);
}
echo json_encode($elemento);
$resultado -> close();
?>