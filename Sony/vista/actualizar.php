<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>HappyShirt | MiPerfil </title>
<?php
require_once('Header.php');
?>
<!--header end here-->
<!--log in start here-->
<!--sign in start here-->
<form id="frmactuaizar" name="frmactuaizar" method="post" action="../controlador/controladorActualizarCliente.php">
	<div class="signin">
	<div class="container">
		<div class="signin-main">
			<h1 style="text-align: left">Mi Perfil</h1>
			<h2>Mi información Personal</h2>
			
			<?php 
			if((isset($_SESSION["autenticado"]) == true)){
						$id= $_SESSION['id'] ;
						$nombre= $_SESSION['nombres'] ;
						$apellidos = $_SESSION['apellidos'];
						$email = $_SESSION['email'];
						$dni = $_SESSION['dni'];
						$clave = $_SESSION['clave'];
						$telefono = $_SESSION['telefono'];
						
						echo "<input type='hidden'  id='txtID' 
						name='txtID' value='$id'> ";
						echo "<input type='text'  id='txtNombres' 
						name='txtNombres' value='$nombre'
						maxlength='30'>";
						echo "<input type='text'  id='txtApellidos' 
						name='txtApellidos' value='$apellidos' >";
						echo "<input type='text'  id='txtDNI' 
						name='txtDNI' value='$dni'
						maxlength='8'>";						
						echo "<input type='text'  id='txtEmail' 
						name='txtEmail' value='$email'
						maxlength='30'>";
						echo "<input type='password' id='password' type='password' 
						name='password' value='$clave'
						maxlength='30'>
						<input id='show_password' type='checkbox' /> Mostrar contraseña";
						echo "<input type='text'  id='txtTelefono' 
						name='txtTelefono' value='$telefono'>";
						
						}?>
				
				<br>
				<input type="submit" value="Actualizar Datos">
			
		</div>
	</div>
</div>
</form>
<!--sign in end here-->
<!--footer strat here-->
<?php
require_once('Footer.php');
?>
<!--footer end here-->
</body>
</html>