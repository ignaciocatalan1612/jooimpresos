<?php  


include_once("apertura-base.php"); 

$Numero_Factura = @$_GET["Numero_Factura"]; 
 
$ssql = "select * from facturas where Numero_Factura=" . $Numero_Factura; 

$rs_libros = mysql_query($ssql); 

while(@$fila = mysql_fetch_array($rs_libros)) { 
 
echo "Numero_Factura: "; 
echo $fila["Numero_Factura"] . " | "; 
echo "Proveedor: "; 
echo $fila["Proveedor"] . " | "; 
echo "Producto: "; 
echo $fila["Producto"] . " | "; 
echo "Monto: "; 
echo $fila["Monto"] . " | "; 
echo "Abono: "; 
echo $fila["Abono"] . " | "; 
echo "Saldo: "; 
echo $fila["Saldo"] . " | "; 
echo "Fecha_Ingreso: "; 
echo $fila["Fecha_Ingreso"] . " | "; 
echo "Fecha_Vencimiento: "; 
echo $fila["Fecha_Vencimiento"] . " | ";  "<br /><br />"; 

$_SESSION["Numero_Factura"]=$Numero_Factura; 
$_SESSION["Proveedor"]=$fila["Proveedor"]; 
$_SESSION["Producto"]=$fila["Producto"]; 
$_SESSION["Monto"]=$fila["Monto"]; $_SESSION["Abono"]=$fila["Abono"]; $_SESSION["Saldo"]=$fila["Saldo"]; $_SESSION["Fecha_Ingreso"]=$fila["Fecha_Ingreso"]; $_SESSION["Fecha_Vencimiento"]=$fila["Fecha_Vencimiento"]; 
} 

?> 
<a href="inventariom.php" target="_self">Atras</a><br /> 
<form action="update-campo.php" method="post">  
<input type="hidden" name="Numero_Factura" value="<?php echo  $_SESSION['Numero_Factura'];?>">
<br /> 
Numero_Factura: 
<br /> 
<input type="varchar" name="Numero_Factura" value="<?php echo $_SESSION['Numero_Factura'];?>"> 
<br/><br/> 
Proveedor: 
<br /> 
<input type="varchar" name="Proveedor" value="<?php echo $_SESSION['Proveedor'];?>"> 
<br/><br/> 
Producto: 
<br /> 
<input type="varchar" name="Producto" value="<?php echo $_SESSION['Producto'];?>"> <br/><br/> 
Monto: 
<br /> 
<input type="varchar" name="Monto" value="<?php echo
$_SESSION['Monto'];?>"> <br/><br/> 
Abono: <br /> 
<input type="varchar" name="Abono" value="<?php echo $_SESSION['Abono'];?>"> <br/><br/> 
Saldo: <br /> 
<input type="varchar" name="Saldo" value="<?php echo $_SESSION['Saldo'];?>"> <br/><br/>
Fecha_Ingreso: <br /> 
<input type="date" name="Fecha_Ingreso" value="<?php echo $_SESSION['Fecha_Ingreso'];?>"> <br/><br/>
Fecha_Vencimiento: <br /> 
<input type="date" name="Fecha_Vencimiento" value="<?php echo $_SESSION['Fecha_Vencimiento'];?>"> <br/><br/>

<input type="submit" value="Editar"> 
</form>