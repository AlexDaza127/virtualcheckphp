<?php

include 'conexion.php';
$idVendedor = $_GET['idVendedor'];

$consulta ="select * from virtualcheckdb.vendedor where idVendedor = '$idVendedor'";

$resultado = $conexion -> query($consulta);

while($fila=$resultado->fetch_array()){
	$accesos[] = array_map("utf8_encode", $fila);
}

echo json_encode($accesos);
$resultado -> close();

?>