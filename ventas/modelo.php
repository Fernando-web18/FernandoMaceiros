<?php

class modelo{
	
	// private $host="sql200.byethost7.com";
	// private $user="b7_36583615";
	// private $pwd="jm.7407104or";
	// private $bd="b7_36583615_bdventas";
	
	private $host="localhost";
	private $user="root";
	private $pwd="";
	private $bd="bdventas";

	public function conectar(){
		$conexion=mysqli_connect($this->host,$this->user,$this->pwd,$this->bd);	
		return $conexion;
	}
}

?>