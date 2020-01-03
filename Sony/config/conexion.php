
<?php

Class Conexion{

private $Usuario;
private $Clave;
private $Server; 
private $NombreBD;

	function __construct(){
		$this->Usuario = "root";
		//$this->Clave = "";
		$this->Clave = "";
		$this->Server = "localhost";
		$this->NombreBD = "DB_SONY1";
	}

	function AbrirConexion(){
		$cadena = mysqli_connect($this->Server,$this->Usuario,$this->Clave,$this->NombreBD);
		if($cadena){
			return $cadena;
		}else{
			return mysqli_error();
		}
	}

	function CerrarConexion($cadena){
		mysqli_close($cadena);
		$cadena=null;
	}
}
?>

