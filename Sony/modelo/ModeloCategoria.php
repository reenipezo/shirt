<?php 


	require_once('../config/conexion.php');
	class Categoria 
	{
		private $ListaCategorias;

		function __construct(){
			$this->ListaCategorias=array();
		}

		function MostrarCategorias(){
			//Se Inicializa los datos de conexion
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query = "select * FROM Categoria";
			$Datos= mysqli_query($Cadena, $Query);
			while($fila = mysqli_fetch_array($Datos)){
				$this->ListaCategorias[]=$fila;
			}
			$cnx->CerrarConexion($Cadena);
			return $this->ListaCategorias;
		}	

	}
?>