<?php

include 'conexion.php';

$consulta2="insert into virtualcheckdb.cargo values('1','Administrador')";
mysqli_query($conexion,$consulta2) or die(mysqli_error());

$consulta2="insert into virtualcheckdb.cargo values('0','Empleado')";
mysqli_query($conexion,$consulta2) or die(mysqli_error());

$consulta2="insert into virtualcheckdb.marca values('10','')";
mysqli_query($conexion,$consulta2) or die(mysqli_error());


mysqli_close($conexion);
?>