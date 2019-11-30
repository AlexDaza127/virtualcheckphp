<?php

include 'conexion.php';
$idVendedor = $_POST['idVendedor'];
$Usuario_idUsuario = $_POST['Usuario_idUsuario'];

/////////////usuario
$consulta="update vendedor set Usuario_idUsuario = '$Usuario_idUsuario' where idVendedor ='$idVendedor'";
mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_close($conexion);
?>