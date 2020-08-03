<?php


$mysql_usuario = "root";
$mysql_password = "123456789";
$mysql_host = "localhost";
$mysql_database = "jooimpresos";


$conexion = mysql_connect($mysql_host, $mysql_usuario, $mysql_password, true);


mysql_select_db($mysql_database, $conexion) || die('No pudo conectarse: '.mysql_error());


$consulta = "SELECT * FROM facturas";


$resultado = mysql_query($consulta, $conexion) or die(mysql_error());


$table = "<table border='1' cellpadding='10'>\n";
$table .= "<tr><th>ID</th><th>Numero_Factura</th><th>Proveedor</th><th>Producto</th><th>Monto</th><th>Abono</th><th>Saldo</th><th>Fecha_Ingreso</th><th>Fecha_Vencimiento</th><th></th></tr>\n";
while($fila = mysql_fetch_assoc($resultado)){
$table .= "<tr>
      <td>".$fila["Numero_Factura"]."</td>
      <td>".$fila["Proveedor"]."</td>
      <td>".$fila["Producto"]."</td>
      <td>".$fila["Monto"]."</td>
      <td>".$fila["Abono"]."</td>
      <td>".$fila["Saldo"]."</td>
      <td>".$fila["Fecha_Ingreso"]."</td>
      <td>".$fila["Fecha_Vencimiento"]."</td>
      <td><form method='post' action=''> \n
      <input type='hidden' name='Numero_Factura' value='".$fila["Numero_Factura"]."'>
      <input type='submit' value='Eliminar'>
      </form></td>
      
   </tr>\n";
    }

$table .= "</table>\n"; 




if (isset($_POST["Numero_Factura"]))
{

$Numero_Factura = $_POST["Numero_Factura"];


$consulta = "DELETE FROM facturas WHERE Numero_Factura=$Numero_Factura";


$resultado = mysql_query($consulta, $conexion) or die(mysql_error());


header("location: inventariom.php");
}
  
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Eliminar registros de una Factura</title>
</head>
<body>

<?php 


echo $table; 

?>

</body>
</html>
<a href="inventariom.php" target="_self">Volver</a>
<?php 

mysql_close($conexion); 
?>