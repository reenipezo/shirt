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
<title>HappyShirt | Registro </title>
<?php
require_once('Header.php');
?>
<script>
	function validar_campos()
	{             
		if (frmregistro.txtClave.value == ""){
		alert("Complete la Contraseña");
		frmregistro.txtClave.focus();
		return (false);
		}
		if (frmregistro.txtClave.value.length < 4){
		alert("La contraseña debe ser mayor de 4 digitos")
		frmregistro.txtClave.focus();
		return (false);
		}

		if (frmregistro.txtClave2.value == ""){
		alert("Debe confirmar la contraseña");
		frmregistro.txtClave2.focus();
		return (false);
		} 

		if (frmregistro.txtClave.value != frmregistro.txtClave2.value){
		alert("La contraseña confirmada no concuerda con la contraseña escrita");
		frmregistro.txtClave2.focus();
		return (false);
		}

		if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(frmregistro.txtEmail.value)){
		  } else {
		   alert("La dirección de email es incorrecta!.");
		  }
		 if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(frmregistro.txtEmail2.value)){
		 } else {
		  alert("La dirección de email de verificacion es incorrecta!.");
		 }

		if (frmregistro.txtEmail.value == ""){
		alert("Complete el email");
		frmregistro.txtEmail.focus();
		return (false);
		}

		if (frmregistro.txtEmail2.value == ""){
		alert("Debe confirmar la el email");
		frmregistro.txtEmail2.focus();
		return (false);
		} 

		if (frmregistro.txtEmail.value != frmregistro.txtEmail2.value){
		alert("el email confirmado no concuerda con el email escrita");
		frmregistro.txtEmail2.focus();
		return (false);
		}
		if (frmregistro.txtEmail.value == frmregistro.txtEmail2.value && frmregistro.txtClave.value == frmregistro.txtClave2.value){
		frmregistro.submit();
		}
	}
</script> 

<!--header end here-->
<!--log in start here-->
<!--sign in start here-->
<form id="frmregistro" name="frmregistro" method="post" action="../controlador/controladorRegistrarCliente.php">
	<div class="signin">
	<div class="container">
		<div class="signin-main">
			<h1 style="text-align: left">Formulario de Registro</h1>
			<h2>Información Personal</h2>
			<form>
				<input type="text"  id="txtNombres" name="txtNombres" placeholder="Ingresa tu Nombre" maxlength="30" required="">
				<input type="text" id="txtApellidos" name="txtApellidos" class="no-margin" placeholder="Ingresa tus Apellidos" maxlength="60" required=""/>
				<input type="text" id="txtDNI" name="txtDNI" placeholder="Ingresa tu DNI" required="" maxlength="8">
				<input type="text" id="txtCelular" name="txtCelular" class="no-margin" placeholder="Ingresa tu número de Celular" maxlength="9" />
				<input type="text" id="txtEmail" name="txtEmail" placeholder="Ingresa tu Email" required="" maxlength="60">
				<input type="text" id="txtEmail2" name="txtEmail2" class="no-margin" placeholder="Correo Alternativo"  maxlength="60"/>
				<input type="password" id="txtClave" name="txtClave" placeholder="Ingresa tu contraseña" required="" maxlength="20">
				<input type="password" id="txtClave2" name="txtClave2" class="no-margin" placeholder="Reingresa tu contraseña" maxlength="20" required=""/>
				<span class="checkbox1">
				<label class="checkbox"><input type="checkbox" name="chkestado" checked="" required=""><i></i><a target="_blank" href="terminos.php">Acepto los Términos y Condiciones</a></label>
			    </span>
				<button  onclick="validar_campos();" value="" class="btn btn-success" style="float:right;">Registrarme</button>
			</form>
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