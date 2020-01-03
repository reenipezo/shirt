<?php
	require_once('../modelo/ModeloDistritos.php');
	$objDistrito = new Distrito();
	$listaDistritos = $objDistrito->MostrarDistritos();
?>
