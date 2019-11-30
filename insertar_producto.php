<?php
include 'conexion.php';
$codigoBarras = $_POST['codigoBarras'];
$nombreProd = $_POST['nombreProd'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$Cargo_idCargo = $_POST['Cargo_idCargo'];
$Marca_idMarca = $_POST['Marca_idMarca'];

/*
$consulta1="insert into virtualcheckdb.Marca values('$idMarca','$Marca')";
mysqli_query($conexion,$consulta1) or die(mysqli_error());*/

$consulta="insert into virtualcheckdb.producto values('$codigoBarras','$nombreProd','$cantidad','$precio','$Cargo_idCargo','$Marca_idMarca')";
mysqli_query($conexion,$consulta) or die(mysqli_error());




mysqli_close($conexion);	
?>
