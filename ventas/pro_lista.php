<?php 
include("modelo.php");
$con=new modelo;
$conexion=$con->conectar();
$consulta=mysqli_query($conexion,"select * from productos");
$n=mysqli_num_rows($consulta);
echo "<select id='idprod' class='form-control'>";
for ($i=1;$i<=$n;$i++){
	$fila=mysqli_fetch_array($consulta);
    $idprod=$fila["idprod"];
    $des=$fila["des"];
    $marca=$fila["marca"];
    $pven=$fila["pven"];
    $existe=$fila["existe"];
	echo "<option value='$idprod'> $des [$marca]  $pven Bs. ($existe) Unidades</option>";
}
echo "</select>";
?>