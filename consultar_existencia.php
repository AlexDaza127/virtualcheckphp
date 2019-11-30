<?php

include'conexion.php';
$Marca_idMarca=$_GET['Marca_idMarca'];


$consulta = "select nombreProd,cantidad from producto WHERE Marca_idMarca = '$Marca_idMarca'";

$resultado = $conexion -> query($consulta);

while($fila = $resultado ->fetch_array()){
$elemento[] = array_map('utf8_encode', $fila);
}
echo json_encode($elemento);
$resultado -> close();
?>