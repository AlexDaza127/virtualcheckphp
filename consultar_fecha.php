<?php

include'conexion.php';
$fechaInicio=$_GET['fechaInicio'];
$fechaFinal=$_GET['fechaFinal'];


$consulta = "select * from virtualcheckdb.ventas where fecha between '$fechaInicio' AND '$fechaFinal';";

$resultado = $conexion -> query($consulta);

while($fila = $resultado ->fetch_array()){
$elemento[] = array_map('utf8_encode', $fila);
}
echo json_encode($elemento);
$resultado -> close();
?>