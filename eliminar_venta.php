<?php

include 'conexion.php';

$idVentas = $_POST['idVentas'];

$consulta="delete from ventas where idVentas = '".$idVentas."'";

mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>