<?php

include 'conexion.php';
$idUsuario = $_POST['idUsuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$salario = $_POST['salario'];
$contrasenia = $_POST['contrasenia'];
$palabraClave = $_POST['palabraClave'];
$email = $_POST['email'];
$idCargo = $_POST['idCargo'];
$idTelefono = $_POST['idTelefono'];

$consulta1="insert into virtualcheckdb.usuario values('$idUsuario','$nombre','$apellido','$salario','$contrasenia','$palabraClave','$email','$idCargo');
";
mysqli_query($conexion,$consulta1) or die(mysqli_error());
////

$consulta3="insert into virtualcheckdb.telefono values('$idTelefono','$idUsuario')";
mysqli_query($conexion,$consulta3) or die(mysqli_error());

mysqli_close($conexion);
?>