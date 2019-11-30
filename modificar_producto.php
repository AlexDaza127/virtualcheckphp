<?php

include 'conexion.php';
$codigoBarras = $_POST['codigoBarras'];
$nombreProd = $_POST['nombreProd'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$Cargo_idCargo = $_POST['Cargo_idCargo'];
$Marca_idMarca = $_POST['Marca_idMarca'];

/////////////usuario
$consulta="update producto set nombreProd = '$nombreProd', cantidad = '$cantidad', precio = '$precio', Cargo_idCargo = '$Cargo_idCargo', Marca_idMarca = '$Marca_idMarca' where codigoBarras ='$codigoBarras'";
mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_close($conexion);
?>