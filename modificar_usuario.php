<?php

include 'conexion.php';

$idUsuario = $_POST['idUsuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$salario = $_POST['salario'];
$contrasenia = $_POST['contrasenia'];
$palabraClave = $_POST['palabraClave'];
$email = $_POST['email'];
$Cargo_idCargo = $_POST['Cargo_idCargo'];
$idTelefono = $_POST['idTelefono'];

//////////////usuario
$consulta1="update usuario set nombre = '$nombre', apellido = '$apellido', salario = '$salario', contrasenia = '$contrasenia', palabraClave = '$palabraClave', email = '$email', Cargo_idCargo = '$Cargo_idCargo' where idUsuario = '$idUsuario'";


/////////////telefono
$consulta3="update telefono set idUsuario = '$idUsuario' where idTelefono = '$idTelefono'";


mysqli_query($conexion,$consulta1) or die(mysqli_error());
mysqli_query($conexion,$consulta3) or die(mysqli_error());



mysqli_close($conexion);
?>