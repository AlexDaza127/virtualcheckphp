<?php

include 'conexion.php';
$idCliente = $_POST['idCliente'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dirreccion = $_POST['dirreccion'];
$telefono = $_POST['telefono'];
$Vendedor_idVendedor = $_POST['Vendedor_idVendedor'];

/////////////usuario
$consulta="update cliente set nombre = '$nombre', apellido = '$apellido', dirreccion = '$dirreccion', telefono = '$telefono', Vendedor_idVendedor = '$Vendedor_idVendedor' where idCliente ='$idCliente'";
mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_close($conexion);
?>