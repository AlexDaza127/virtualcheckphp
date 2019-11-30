<?php

include 'conexion.php';
$idUsuario = $_GET['idUsuario'];

$consulta ="select * from virtualcheckdb.telefono where Usuario_idUsuario = '$idUsuario'";

$resultado = $conexion -> query($consulta);

while($fila=$resultado->fetch_array()){
	$accesos[] = array_map("utf8_encode", $fila);
}

echo json_encode($accesos);
$resultado -> close();

?>