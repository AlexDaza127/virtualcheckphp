<?php
include 'conexion.php';
$idCliente = $_POST['idCliente'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dirreccion = $_POST['dirreccion'];
$telefono = $_POST['telefono'];
$Vendedor_idVendedor = $_POST['Vendedor_idVendedor'];


$consulta="insert into virtualcheckdb.cliente values('$idCliente','$nombre','$apellido','$dirreccion','$telefono','$Vendedor_idVendedor')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_close($conexion);	
?>
