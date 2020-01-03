<?php 


	require_once('../config/conexion.php');

	class Distrito 
	{
		private $ListaDistritos;

		function __construct(){
			$this->ListaDistritos=array();
		}

		function MostrarDistritos(){
			//Se Inicializa los datos de conexion
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query = "select * FROM Distrito";
			$Datos= mysqli_query($Cadena, $Query);
			while($fila = mysqli_fetch_array($Datos)){
				$this->ListaDistritos[]=$fila;
			}
			$cnx->CerrarConexion($Cadena);
			return $this->ListaDistritos;
		}	

	}
?>