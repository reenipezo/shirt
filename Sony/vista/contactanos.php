<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>HappyShirt | Contáctanos </title>

<?php
require_once('Header.php');
?>
<!--log in start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h1>Contáctanos</h1>
				<p>Por favor llenar los campos del formulario para enviar su pregunta al equipo de Asistencia de Sony</p>
			</div>
			<div class="col-md-6 contact-left">
				<h2>Información</h2>
				<h4>Por favor llena los campos para que podamos comunicarnos contigo:</h4>
				<p>Sony Perú está cerca de ti, en donde te encuentres y a la hora que lo necesites. Con gusto nuestros ejecutivos especializados atenderán tus dudas, recibirán tus comentarios y te brindarán el servicio que requieres. Ponemos a tu alcance el medio de comunicación más cómodo para ti.
				</p>
			    <ul>
			    	<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span>Av. Alejandro Velasco Astete 966, San Borja 15037</li>
			    	<li><span class="glyphicon glyphicon-phone" aria-hidden="true"> </span>+51 (01) 2012600</li>			    	
			    	<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span><a href="mailto:info@example.com">sso.peru@am.sony.com</a></li>
			    </ul>
			</div>
			<div class="col-md-6 contact-right">
				<h3>Formulario de Contacto</h3>
			<form action="../controlador/enviarcomentario.php">
				<input type="text" name="nombre" placeholder="Nombres" required="">
				<input type="text" name="email" placeholder="Correo Electrónico" required="">
				<textarea placeholder="Mensaje" name="mensaje"required=""></textarea>
				<input type="submit" value="Enviar">
			</form>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>>
</div>
<!--log in end here-->
<!--footer strat here-->
<?php
require_once('Footer.php');
?>
<!--footer end here-->
</body>
</html>