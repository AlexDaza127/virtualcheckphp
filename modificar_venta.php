<?php

include 'conexion.php';
$idVentas = $_POST['idVentas'];
$sucursal = $_POST['sucursal'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];
$Producto_codigoBarras = $_POST['Producto_codigoBarras'];
$Vendedor_idVendedor = $_POST['Vendedor_idVendedor'];
$Cliente_idCliente = $_POST['Cliente_idCliente'];

/////////////usuario
$consulta="update ventas set sucursal = '$sucursal', fecha = '$fecha', cantidad = '$cantidad', total = '$total', Producto_codigoBarras = '$Producto_codigoBarras', Vendedor_idVendedor = '$Vendedor_idVendedor', Cliente_idCliente = '$Cliente_idCliente' where idVentas ='$idVentas'";
mysqli_query($conexion,$consulta) or die(mysqli_error());

mysqli_close($conexion);
?>