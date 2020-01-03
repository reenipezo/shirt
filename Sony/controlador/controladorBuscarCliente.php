<?php
	$codigo_usuario = $_POST['id'];

	require_once('../modelo/ModeloUsuario.php');
	$objUsuario = new Usuario();
	$Result = $objUsuario->BuscarUsuario($codigo_usuario);
?>
<META http-equiv="Refresh" CONTENT="1; 
	URL=../vista/ActualizarUsuario.php">