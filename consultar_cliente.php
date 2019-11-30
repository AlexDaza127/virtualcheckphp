<?php

include'conexion.php';
$idCliente=$_GET['idCliente'];


$consulta = "select * from cliente where idCliente = '$idCliente'";

$resultado = $conexion -> query($consulta);

while($fila = $resultado ->fetch_array()){
$elemento[] = array_map('utf8_encode', $fila);
}
echo json_encode($elemento);
$resultado -> close();
?>