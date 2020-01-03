<?php

	require_once('../config/conexion.php');

	class Cliente 
	{
		private $ListaClientes;

		function __construct(){
			$this->ListaClientes=array();
		}

		function AgregarCliente($Data){
			$cnx= new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query ="call sp_AgregarCliente('".$Data[0]."','".$Data[1]."','".$Data[2]."','".$Data[3]."','".$Data[4]."','".$Data[5]."');";
			$Result = mysqli_query($Cadena,$Query);
			$cnx->CerrarConexion($Cadena);
			return $Result;
		}




		function EliminarCliente($codigo_usuario){
			$cnx= new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query = "Delete From tb_usuarios Where id_usuario='$codigo_usuario'";
			$Result= mysqli_query($Cadena, $Query);
			$cnx->CerrarConexion($Cadena);
			return $Result;
		}


		function ActualizarClienteo($Data){
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query ="call SP_ActualizarCliente('".$Data[0]."','".$Data[1]."','".$Data[2]."','".$Data[3]."','".$Data[4]."','".$Data[5]."','".$Data[6]."');";
			$Result= mysqli_query($Cadena, $Query);
			$cnx->CerrarConexion($Cadena);
			return $Result;
		}

		function validarlogin($email,$pass){
			$cnx = new Conexion();
			$Cadena = $cnx->AbrirConexion();
			$Query ="call SP_Login('".$email."','".$pass."');";
			$Result= mysqli_query($Cadena, $Query);
			$cnx->CerrarConexion($Cadena);
			return $Result;
		}
		


	}
?>