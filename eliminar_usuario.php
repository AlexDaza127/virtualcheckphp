<?php

include 'conexion.php';

$idUsuario = $_POST['idUsuario'];
$Usuario_idUsuario = $_POST['Usuario_idUsuario'];

$consulta3="delete from virtualcheckdb.telefono where Usuario_idUsuario = '$Usuario_idUsuario'";
mysqli_query($conexion,$consulta3) or die(mysqli_error());


$consulta2="delete from virtualcheckdb.usuario where idUsuario = '$idUsuario'";
mysqli_query($conexion,$consulta2) or die(mysqli_error());


mysqli_close($conexion);
?>