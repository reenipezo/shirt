<?php
	require_once('../modelo/ModeloCliente.php');
	$objUsuario = new Usuario();
	$listausuarios = $objUsuario->MostrarUsuarios();
?>
