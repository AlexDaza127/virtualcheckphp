<?php
include 'conexion.php';
$idVendedor = $_POST['idVendedor'];
$Usuario_idUsuario = $_POST['Usuario_idUsuario'];
$idCargo = $_POST['idCargo'];


$consulta="insert into virtualcheckdb.vendedor values('$idVendedor','$Usuario_idUsuario')";

$consulta3="update usuario set Cargo_idCargo = '$idCargo' where idUsuario = '$Usuario_idUsuario'";


mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_query($conexion,$consulta3) or die(mysqli_error());

mysqli_close($conexion);	
?>
