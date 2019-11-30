<?php

include 'conexion.php';

$idCliente = $_POST['idCliente'];

$consulta="delete from cliente where idCliente = '".$idCliente."'";

mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>