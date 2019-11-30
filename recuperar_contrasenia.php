<?php

include 'conexion.php';

$idUsuario = $_POST['idUsuario'];
$contrasenia = $_POST['contrasenia'];

//////////////login
$consulta="update virtualcheckdb.usuario set contrasenia = '$contrasenia' where idUsuario = '$idUsuario';";

mysqli_query($conexion,$consulta) or die(mysqli_error());
mysqli_close($conexion);
?>