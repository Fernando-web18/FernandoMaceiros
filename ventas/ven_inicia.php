<?php 
session_start();
//$codven=rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9);
date_default_timezone_set("America/Caracas");
$codven=Date("ymd-His");
$_SESSION["codven"]=$codven;
header("location:ven_registro.php");

?>