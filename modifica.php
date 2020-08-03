
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
 <?php

$conexion=mysqli_connect("localhost","root","123456789");
$db=mysqli_select_db($conexion,"jooimpresos");

$Numero_Factura=$_GET['Numero_Factura'];



$sql=("SELECT * FROM facturas WHERE Numero_Factura='$Numero_Factura'");

$result=mysqli_query($conexion,$sql);
if($dato=mysqli_fetch_array($result))
{
	echo "Actualizar Base de Datos";

}
?>

<form id="form1" name="form1" method="get" action="guardar.php ">
  <input id="prodId" name="tipo" type="hidden" value=<?php echo $Numero_Factura?>
  </p>
  <label for="Numero_Factura">Numero_Factura</label>
    <input name="Numero_Factura" type="varchar" id="Numero_Factura" value="<?php echo $dato['Numero_Factura'];    ?>" />
    </p>
    <label for="Proveedor">Proveedor</label>
    <input name="Proveedor" type="varchar" id="Proveedor" value="<?php echo $dato['Proveedor'];    ?>" />
  </p>
  <label for="Producto">Producto</label>
    <input name="Producto" type="varchar" id="Producto" value="<?php echo $dato['Producto'];    ?>" />
  </p>
  <label for="Monto">Monto</label>
    <input name="Monto" type="varchar" id="Monto" value="<?php echo $dato['Monto'];    ?>" />
  </p>
  <label for="Abono">Abono</label>
    <input name="Abono" type="varchar" id="Abono" value="<?php echo $dato['Abono'];    ?>" />
  </p>
  <label for="Saldo">Saldo</label>
    <input name="Saldo" type="varchar" id="Saldo" value="<?php echo $dato['Saldo'];    ?>" />
  </p>
  <label for="Fecha_Ingreso">Fecha_Ingreso</label>
    <input name="Fecha_Ingreso" type="date" id="Fecha_Ingreso" value="<?php echo $dato['Fecha_Ingreso'];    ?>" />
  </p>
  <label for="Fecha_Vencimiento">Fecha_Vencimiento</label>
    <input name="Fecha_Vencimiento" type="date" id="Fecha_Vencimiento" value="<?php echo $dato['Fecha_Vencimiento'];    ?>" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>

</form>

<p><a href="index.php">inicio</a></a></p>
<a href="inventariom.php"><p>Base de Datos</p></a>

</body>
</html>
