<?php
session_start();
$codven=$_SESSION["codven"];
$idprod=$_GET["idprod"];
$cantv=$_GET["cantv"];
//echo "$codven - $idprod- $cantv";
include("modelo.php");
$con=new modelo;
$conexion=$con->conectar();
$consulta=mysqli_query($conexion,"insert into detalledeventas values(null,'$codven','$idprod','$cantv')");

// Listar los productos vendidos
$consulta=mysqli_query($conexion,"select * from detalledeventas where codven='$codven'");
$n=mysqli_num_rows($consulta);
echo "<center><h3 class='color'><b>Detalle de la Venta</b></h3></center>";
echo "<table class='table color'>";
echo "<thead>
    <tr><th>ID</th><th>Codigo de Venta</th><th>ID del Producto</th><th>Cantidad</th><th>Precio</th><th>Monto</th></tr>
    </thead><tbody>";
include("libreria.php");
   $total=0;
for ($i=1;$i<=$n;$i++){
	$fila=mysqli_fetch_array($consulta);
	$idd=$fila["iddet"];
	$codven=$fila["codven"];
	$idprod=$fila["idprod"];
	$cantv=$fila["cantv"];
	$precio=precio($fila["idprod"]);
	$monto=$cantv*$precio;
	$total=$total+$monto;
echo "<tr><td>$idd</td><td>$codven</td><td>$idprod</td><td>$cantv</td><td>$precio</td><td>$monto</td></tr>";
}
echo "</tbody></table> <div class='form-inline'>";
echo "<h3><label>Total a Cancelar: </label><input type='text' style='font-size:15px' id='total' value='$total' class='form-control' readonly> Bs.</h3><div>";
?>