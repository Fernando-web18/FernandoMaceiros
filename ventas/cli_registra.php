<?php 
$ci=$_GET["ci"];
$nom=$_GET["nom"];
include("modelo.php");
$con=new modelo;
$conexion=$con->conectar();
$consulta=mysqli_query($conexion,"INSERT INTO clientes VALUES (null,'$ci','$nom')");
?>