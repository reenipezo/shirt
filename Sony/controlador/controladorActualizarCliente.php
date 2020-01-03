<?php
//Guardamos los datos el post
$Data[0] = $_POST["txtID"];
$Data[1] = $_POST["txtNombres"];
$Data[2] = $_POST["txtApellidos"];
$Data[3] = $_POST["txtDNI"];
$Data[4] = $_POST["txtEmail"];
$Data[5] = $_POST["password"];
$Data[6] = $_POST["txtTelefono"];

require_once('../modelo/ModeloCliente.php');

$objCliente = new Cliente();

$Result = $objCliente->ActualizarClienteo($Data);

if($Result == 1){
	?>
	<script>alert('¡Datos actualizados con Exito!, Usted debera volver a iniciar sessión para que sus datos se actualizen');</script>
	<META http-equiv="Refresh" CONTENT="0; 
	URL=../vista/index.php">
	<?php
}
else{
	?>
	<script>alert('¡No pudimos Actualizar tus Datos!, intentalo nuevamente');</script>
	<META http-equiv="Refresh" CONTENT="2; URL=../vista/actualizar.php">
	<?php }

?>