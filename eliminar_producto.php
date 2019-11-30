<?php

include 'conexion.php';

$codigoBarras = $_POST['codigoBarras'];

$consulta="delete from producto where codigoBarras = '".$codigoBarras."'";

mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>