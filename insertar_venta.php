<?php
include 'conexion.php';
$idVentas = $_POST['idVentas'];
$sucursal = $_POST['sucursal'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$cantidadPedido = $_POST['cantidadPedido'];
$total = $_POST['total'];
$Producto_codigoBarras = $_POST['Producto_codigoBarras'];
$Vendedor_idVendedor = $_POST['Vendedor_idVendedor'];
$Cliente_idCliente = $_POST['Cliente_idCliente'];


$consulta="insert into virtualcheckdb.ventas values('$idVentas','$sucursal','$fecha','$cantidad','$total','$Producto_codigoBarras','$Vendedor_idVendedor','$Cliente_idCliente')";
mysqli_query($conexion,$consulta) or die(mysqli_error());

$consulta1="update producto set cantidad = '$cantidadPedido' where codigoBarras ='$Producto_codigoBarras'";
mysqli_query($conexion,$consulta1) or die(mysqli_error());

mysqli_close($conexion);	
?>
