<?php 
session_start();
$ci=$_GET["ci"];
$total=$_GET["total"];
$codven=$_SESSION["codven"];
date_default_timezone_set("America/Caracas");
$fven=Date("y-m-d-H-i-s");
include("modelo.php");
$con=new modelo;
$conexion=$con->conectar();
$consulta=mysqli_query($conexion,"INSERT INTO ventas VALUES (null,'$codven','$ci','$fven','$total')");

//Actualizar cantidades de productos

$consulta=mysqli_query($conexion,"SELECT * FROM detalledeventas WHERE codven='$codven'");
$n=mysqli_num_rows($consulta);
for($i=1;$i<=$n;$i++){
    $fila=mysqli_fetch_array($consulta);
    $idprod = $fila["idprod"];
    $cantv = $fila["cantv"];
    $consulta2=mysqli_query($conexion,"UPDATE productos set existe=existe-$cantv where idprod='$idprod'");
}

?>