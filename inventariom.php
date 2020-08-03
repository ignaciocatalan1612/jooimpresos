<head>
<meta http-equiv="estilos.css" content="text/html; charset=utf-8" />

<title>Base de datos facturas</title>

</head>

<body>
<p>Base de datos Facturas</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="751" border="1">
  <tr>
    <td width="55">N°Factura/Guia despacho/Boleta</td>
    <td width="76">Proveedor</td>
    <td width="150">Producto</td>
    <td width="76">Monto</td>
    <td width="76">Abono</td>
    <td width="76">Saldo</td>
    <td width="76">Fecha_Ingreso</td>
    <td width="76">Fecha_Vencimiento</td>
  </tr>

<?php

	$conexion=mysqli_connect("localhost","root","123456789");
$bd=mysqli_select_db($conexion,"jooimpresos");
	$cadena=$_GET['facturas'];

	$sql="select * from facturas where Numero_Factura like '".$cadena."%' order by Fecha_Ingreso asc";
	$result=mysqli_query($conexion,$sql);
while($datos=mysqli_fetch_array($result))
  		{
?>


  <tr>
    <td><?php   echo $datos['Numero_Factura'];    ?></td>
    <td><?php   echo $datos['Proveedor'];    ?></td>
    <td><?php   echo $datos['Producto'];    ?></td>
    <td><?php   echo $datos['Monto'];    ?></td>
    <td><?php   echo $datos['Abono'];    ?></td>
    <td><?php   echo $datos['Saldo'];    ?></td>
    <td><?php   echo $datos['Fecha_Ingreso'];    ?></td>
    <td><?php   echo $datos['Fecha_Vencimiento'];    ?></td>

    <td><a href="eliminar.php?facturas=<?php   echo $datos['facturas'];?>">Eliminar </a>
        <a href="modificar.php?facturas=<?php   echo $datos['facturas'];?>">Editar</a>

        
  </tr>


<?php

		}
?>

</table>
<p>&nbsp;</p>

	<a href="agregar.php">Agregar nueva factura </
<p>&nbsp;</p></a>
		<li><a href="index.php">Inicio</a></li>
</body>
</html>
