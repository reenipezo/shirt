<?php

$Data[0] = $_POST["txtNombres"];
$Data[1] = $_POST["txtApellidos"];
$Data[2] = $_POST["txtDNI"];
$Data[3] = $_POST["txtEmail"];
$Data[4] = $_POST["txtClave"];
$Data[5] = $_POST["txtCelular"];

require_once('../modelo/ModeloCliente.php');

$objCliente = new Cliente();
$Result = $objCliente->AgregarCliente($Data);
if($Result == 1){
	?>
	<script>alert('¡Registrado con Exito!, Te llevaremos al inicio de Sesión');</script>
	<META http-equiv="Refresh" CONTENT="0; 
	URL=../vista/login.php">
	<?php
}
else{
	?>
	<script>alert('¡No pudimos registrarte!, por favor verifica tus datos');</script>
	<META http-equiv="Refresh" CONTENT="0; URL=../vista/registro.php">
<?php }

?>

