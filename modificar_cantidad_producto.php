<?php

include 'conexion.php';
$codigoBarras = $_POST['codigoBarras'];
$cantidad = $_POST['cantidad'];

/////////////usuario
$consulta="update producto set cantidad = '$cantidad' where codigoBarras ='$codigoBarras'";
mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_close($conexion);
?>