
<HTML>
<HEAD>
<TITLE>inventariom.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Actualizar un registro</h1>
<br>
<?
//Conexion con la base
mysql_connect("localhost","root","123456789") or die("error en al ingresar");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("jooimpresos") or die("error al ingresar a la base de datos"); 

echo '<FORM METHOD="POST" ACTION="inventariom.php"><br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select facturas From Numero_Factura, Proveedor, Producto, Monto, Abono, Saldo, Fecha_Ingreso, Fecha_Vencimiento Order By Fecha_Ingreso";
$result=mysql_query($sSQL);

echo '<select facturas From Numero_Facturas="$Numero_Factura", Proveedor="$Proveedor", Producto="$Producto">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["Numero_Factura"];}
?>
echo "$Numero_Factura";

</select>
<br>
Numero_Factura<br>
<INPUT TYPE="TEXT" NAME="Numero_Factura"><br>
Proveedor<br>
<INPUT TYPE="TEXT" NAME="Proveedor"><br>
Producto<br>
<INPUT TYPE="TEXT" NAME="Producto"><br>
Monto<br>
<INPUT TYPE="TEXT" NAME="Monto"><br>
Abono<br>
<INPUT TYPE="TEXT" NAME="Abono"><br>
Saldo<br>
<INPUT TYPE="TEXT" NAME="Saldo"><br>
Fecha_Ingreso<br>
<INPUT TYPE="date" NAME="Fecha_Ingreso"><br>
Fecha_Vencimiento<br>
<INPUT TYPE="date" NAME="Fecha_Vencimiento"><br>

<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</div>

</BODY>
</HTML>
