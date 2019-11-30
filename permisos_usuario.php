<?php

include'conexion.php';
$idUsuario = $_GET['idUsuario'];


$consulta = "select Cargo_idCargo from virtualcheckdb.usuario  where idUsuario = '$idUsuario'";

$resultado = $conexion -> query($consulta);

while($fila = $resultado ->fetch_array()){
$persona[] = array_map('utf8_encode', $fila);
}
echo json_encode($persona);
$resultado -> close();
?>