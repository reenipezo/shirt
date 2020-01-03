<?php

print "<script>alert('Gracias por escribir, en breve te contactaremos por correo electronico');window.location='../vista/contactanos.php';</script>";

$remitente = $_POST['email'];
$mensaje = $_POST['mensaje'];
$nombre = $_POST¨['nombre'];
$destinatario = "reenierpezo.digitex@gmail.com"; 
$asunto = "Contáctanos"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Formulario Contáctanos</title> 
</head> 
<body> 
<h1>Hola mi nombre es $nombre</h1> 
<p> 
$mensaje
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: $Remitente <pepito@desarrolloweb.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: alex142407@gmail.com\r\n"; 



mail($destinatario,$asunto,$cuerpo,$headers) 


?>