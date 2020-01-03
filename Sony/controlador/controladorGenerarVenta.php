<?php 


session_start();

require_once("../config/conexion2.php");

if(!empty($_POST)){
	$q1 = $con->query("insert into Pedido(email_cliente,fechahora_venta) value(\"$_POST[email]\",NOW())");
if($q1==1){
	$emp_id = $con->insert_id;
foreach($_SESSION["carrito"] as $c){
	$q1 = $con->query("insert into detallepedido(id_producto,cantidad,id_pedido) value($c[producto_id],$c[cantidad],$emp_id)");
	}
	unset($_SESSION["carrito"]);
}

}
print "<script>window.location='../vista/fincompra.php';</script>";
//print "<script>alert('Venta procesada exitosamente, ¡Gracias por comprar en nuestra tienda!, En breves momentos te llegará un correo electrónico con los detalles de tu compra.' );window.location='../vista/productos.php';</script>";

?>
