<?php 
$ci=$_GET["ci"];
include("modelo.php");
$con=new modelo;
$conexion=$con->conectar();
$consulta=mysqli_query($conexion,"select * from clientes where ci='$ci'");
$n=mysqli_num_rows($consulta);
if ($n==0) {
	echo "Cliente no Registrado";
}else{
	$fila=mysqli_fetch_array($consulta);
	echo $fila["nom"];
}
?>