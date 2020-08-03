<?php  include("apertura-base.php"); 
$ssql = "select Numero_Factura, Proveedor, Producto, Monto, Abono, Saldo, Fecha_Ingreso, Fecha_Vencimiento name from facturas"; 
$rs_libros = mysql_query($ssql); 
while($fila = mysql_fetch_array($rs_libros)) { 
echo'<a href="modificar.php?id=' . $fila['Numero_Factura'] . '">Editar</a> '; 
echo $fila["Numero_Factura"] . "<br />";
echo $fila["Proveedor"] . "<br />";
echo $fila["Producto"] . "<br />";
echo $fila["Monto"] . "<br />";
echo $fila["Abono"] . "<br />";
echo $fila["Saldo"] . "<br />";
echo $fila["Fecha_Ingreso"] . "<br />";
echo $fila["Fecha_Vencimiento"] . "<br />"; }
?>
<a href="inventariom.php" target="_self">Volver</a>