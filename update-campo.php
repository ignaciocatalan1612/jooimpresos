<?php include("apertura-base.php"); 
$Numero_Factura= @$_POST['Numero_Factura']; 
$Proveedor = @$_POST['Proveedor']; 
$Producto = @$_POST['Producto']; 
$Monto = @$_POST['Monto']; 
$Abono = @$_POST['Abono']; 
$Saldo = @$_POST['Saldo']; 
$Fecha_Ingreso = @$_POST['Fecha_Ingreso'];
$Fecha_Vencimiento = @$_POST['Fecha_Vencimiento'];

$sql = "UPDATE `facturas` SET `Numero_Factura`='$Numero_Factura',`Proveedor`='$Proveedor',`Producto`='$Producto',`Monto`='$Monto',`Abono`='$Abono',`Saldo`='$Saldo',`Fecha_Ingreso`='$Fecha_Ingreso' ,`Fecha_Vencimiento`='$Fecha_Vencimiento'  WHERE `Numero_Factura`='$Numero_Factura'"; 
if (mysql_query($sql)) { 
echo "Actualización exitosa "; 
} else { 
echo "Error de actualizacion "; 
} 
echo 'Numero_Factura ' . $_POST['Numero_Factura'] . ', ' . $_POST['Proveedor'] . ', ' . $_POST['Producto'] . ', ' . $_POST['Monto'] . ', ' . $_POST['Abono'] . ', ' . $_POST['Saldo'] .', ' . $_POST['Fecha_Ingreso'] .', ' . $_POST['Fecha_Vencimiento'] . '<br /><br />'; 
mysql_close($conexion);
?> 
<a href="inventariom.php" target="_self">Volver</a>