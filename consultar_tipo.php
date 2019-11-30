<?php

include'conexion.php';
$idMarca=$_GET['idMarca'];


$consulta = "select * from marca where idMarca = '$idMarca'";

$resultado = $conexion -> query($consulta);

while($fila = $resultado ->fetch_array()){
$elemento[] = array_map('utf8_encode', $fila);
}
echo json_encode($elemento);
$resultado -> close();
?>