<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Base de Facturas</title>
</head>

<body>
 <p>
  <?php

$conexion=mysqli_connect("localhost","root","123456789");
$db=mysqli_select_db($conexion,"jooimpresos");

                    $Numero_Factura=$_GET['Numero_Factura'];
                    $Proveedor=$_GET['Proveedor'];
                    $Producto=$_GET['Producto'];
                    $Monto=$_GET['Monto'];
                    $Abono=$_GET['Abono'];
                    $Saldo=$_GET['Saldo'];
                    $Fecha_Ingreso=$_GET['Fecha_Ingreso'];
                    $Fecha_Vencimiento=$_GET['Fecha_Vencimiento'];


$sql="SELECT * FROM facturas WHERE Numero_Factura='$Numero_Factura'";

$result=mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($result))
{
	//si existe -- modificar

	$sql2="UPDATE facturas SET Numero_Factura='".$Numero_Factura."', Proveedor='".$Proveedor."',  Producto='".$Producto."', Monto='".$Monto."', Abono='".$Abono."', Saldo='".$Saldo."', Fecha_Ingreso='".$Fecha_Ingreso."', Fecha_Vencimiento='".$Fecha_Vencimiento."'"
	;
	$result2=mysqli_query($conexion,$sql2);
}
else
	//no existe
{
	$sql2="INSERT INTO facturas(Numero_Factura, Proveedor, Producto, Monto, Abono, Saldo, Fecha_Ingreso, Fecha_Vencimiento) VALUES ('$Numero_Factura', '$Proveedor', '$Producto', '$Monto', '$Abono', '$Saldo', '$Fecha_Ingreso', '$Fecha_Vencimiento')";
	$result2=mysqli_query($conexion,$sql2);
}
?>
   
Sus datos han sido actualizados</p>
 <p><a href="index.php">inicio</a></a></p>
<a href="inventariom.php"><p>volver</p></a>
</body>
</html>
