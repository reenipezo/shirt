<?php

	require_once('../config/conexion.php');

	class Producto 
	{
		private $ListaProductos;

		function __construct(){
			$this->ListaProductos=array();
		}

		function MostrarProductos_index(){
			//Se Inicializa los datos de conexion
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query = "select * FROM Producto limit 7";
			$Datos= mysqli_query($Cadena, $Query);
			while($fila = mysqli_fetch_array($Datos)){
				$this->ListaProductos[]=$fila;
			}
			$cnx->CerrarConexion($Cadena);
			return $this->ListaProductos;
		}	

		function MostrarProductos_todos(){
			//Se Inicializa los datos de conexion
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query = "select * FROM Producto";
			$Datos= mysqli_query($Cadena, $Query);
			while($fila = mysqli_fetch_array($Datos)){
				$this->ListaProductos[]=$fila;
			}
			$cnx->CerrarConexion($Cadena);
			return $this->ListaProductos;
		}	


		function BuscarProductos_id($id){
			//Se Inicializa los datos de conexion
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query = "select * FROM Producto where id_producto=$id";
			$Datos= mysqli_query($Cadena, $Query);
			while($fila = mysqli_fetch_array($Datos)){
				$this->ListaProductos[]=$fila;
			}
			$cnx->CerrarConexion($Cadena);
			return $this->ListaProductos;
		}	

		function BuscarProductosSimilares_id($cat){
			//Se Inicializa los datos de conexion
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query = "Select * from producto where id_categoria =$cat limit 4";
			$Datos= mysqli_query($Cadena, $Query);
			while($fila = mysqli_fetch_array($Datos)){
				$this->ListaProductos[]=$fila;
			}
			$cnx->CerrarConexion($Cadena);
			return $this->ListaProductos;
		}	

	}
?>