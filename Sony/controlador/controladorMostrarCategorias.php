<?php
	require_once('../modelo/ModeloCategoria.php');
	$objCategoria = new Categoria();
	$listaCategoria = $objCategoria->MostrarCategorias();
?>
