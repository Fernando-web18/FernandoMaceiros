<?php 
$ci=$_GET["ci"];
$nom=$_GET["nom"];
include("modelo.php");
$con=new modelo;
$conexion=$con->conectar();
$consulta=mysqli_query($conexion,"UPDATE clientes SET nom='$nom' WHERE ci='$ci'");
?>