<?php

include 'conexion.php';

$idVendedor = $_POST['idVendedor'];

$consulta="delete from vendedor where idVendedor = '".$idVendedor."'";

mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>