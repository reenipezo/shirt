<?php

$codigo_usuario = $_POST['id'];

require_once('../modelo/ModeloUsuario.php');

$objUsuario = new Usuario();

$Resultado = $objUsuario->EliminarUsuario($codigo_usuario);

if($Resultado == 1){
	?>
	<h2>Se eliminado correctamente</h2>
	<META http-equiv="Refresh" CONTENT="2; 
	URL=../vista/MostrarUsuarios.php">
	<?php
}
else{
	?>
	<h2>Error</h2>
	<?php echo mysqli_errno($Cadena);
}

?>