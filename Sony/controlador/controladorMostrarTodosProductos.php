<?php
	require_once('../modelo/ModeloProducto.php');
	$objProducto = new Producto();
	$listaProductos = $objProducto->MostrarProductos_todos();
?>
