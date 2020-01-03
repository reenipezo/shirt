<?php
/*
* Agrega el producto a la variable de sesion de productos.
*/
session_start();
if(!empty($_POST)){
	if(isset($_POST["txtproducto_id"]) && isset($_POST["txtCantidad"])){
		// si es el primer producto simplemente lo agregamos
		if(empty($_SESSION["carrito"])){
			$_SESSION["carrito"]=array( array("producto_id"=>$_POST["txtproducto_id"],"cantidad"=> $_POST["txtCantidad"]));
		}else{
			// apartie del segundo producto:
			$carrito = $_SESSION["carrito"];
			$repeated = false;
			// recorremos el carrito en busqueda de producto repetido
			foreach ($carrito as $c) {
				// si el producto esta repetido rompemos el ciclo
				if($c["producto_id"]==$_POST["txtproducto_id"]){
					$repeated=true;
					break;
				}
			}
			// si el producto es repetido no hacemos nada, simplemente redirigimos
			if($repeated){
				print "<script>alert('Error: Producto Repetido!');</script>";
			}else{
				// si el producto no esta repetido entonces lo agregamos a la variable cart y despues asignamos la variable cart a la variable de sesion
				array_push($carrito, array("producto_id"=>$_POST["txtproducto_id"],"cantidad"=> $_POST["txtCantidad"]));
				$_SESSION["carrito"] = $carrito;
			}
		}
		print "<script>window.location='../vista/Carrito.php';</script>";
	}
}

?>

