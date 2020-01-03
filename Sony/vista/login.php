<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>HappyShirt | Login</title>
<?php
require_once('Header.php');
?>
<!--header end here-->
<!--log in start here-->
<div class="login">
	<div class="container">
		<div class="login-main">
			  <h1>Inicio de Sesión</h1>
		  <div class="col-md-6 login-left">
			<h2>Inciar Sessión</h2>
			<form action="../controlador/controladorLogin.php" method="post" id="frmlogin" >
				<input type="hidden" name="accion" id="accion" value="validar">
				<input type="text" id="txtEmail" name="txtEmail" placeholder="tu@example.com" required="">
				<input type="password"  id="txtClave" name="txtClave" placeholder="Clave" required="">
				<input type="submit" value="Ingresar">
			</form>
		  </div>
		  <div class="col-md-6 login-right">
		  	 <h3>¿Aún no estás registrado? Crea una cuenta</h3>
		  	 <p>Para nosotros es importante mantener la confidencialidad de tus datos, por ello jamás te pediremos información sensible, además te brindamos la seguridad y confianza de que tus datos serán gestionados con total transparencia.</p>
		     <a href="registro.php" class="login-btn">Crear Cuenta</a>
		  </div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--log in end here-->
<!--footer strat here-->
<?php
require_once('Footer.php');
?>
<!--footer end here-->
</body>
</html>