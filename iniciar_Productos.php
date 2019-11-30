<?php

include 'conexion.php';

$consulta="insert into virtualcheckdb.marca values('1','Electrodomesticos')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('2','Muebles')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('3','Frutas')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('4','Verduras')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('5','Mercado')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('6','Aseo')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('7','Moda')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('8','Deporte')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('9','Licores')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta="insert into virtualcheckdb.marca values('10','Confiteria')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_close($conexion);
?>