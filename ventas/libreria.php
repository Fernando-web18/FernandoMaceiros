<?php

function precio($idprod){
	$con=new modelo;
	$conexion=$con->conectar();
	$consulta=mysqli_query($conexion,"select * from productos where idprod='$idprod'");
	$fila=mysqli_fetch_array($consulta);
	return $fila["pven"];
}

?>