<?php

ini_set("error_log", dirname(__FILE__).'../vista/error_log.txt');

require_once('../vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
header('Content-Type: text/html; charset=utf-8');

$log = new Logger('usuarios');
$log->pushHandler(new StreamHandler(__DIR__.'../var/logs/usuarios.log'));

	if(isset($_POST['txtEmail']) && isset($_POST['txtClave'])){
		$email= $_POST['txtEmail'];
        $clave = $_POST['txtClave'];
        
	}

	if($email=="" && $clave==""){
		echo "Datos no definidos";
		?> <META http-equiv="Refresh" content="2;URL=../index.php">
		<?php
	}else{

		require_once('../modelo/ModeloCliente.php');

		
		$objCliente = new Cliente();

		$Result = $objCliente->validarlogin($email,$clave);
		while($file= mysqli_fetch_row($Result)){

			if($file[0] == -1){
				echo "<script>alert('email: ".$email." no registrado');</script>";

				?>
				<META http-equiv="Refresh" CONTENT="1; 
				URL=../vista/login.php">
				<?php
			}
			if($file[0]== -2){
				echo "<script>alert('password incorrecto: intente de nuevo');</script>";
				usuario:"$clave";
				?>
				<META http-equiv="Refresh" CONTENT="1; 
				URL=../vista/login.php">
				<?php
			}
			if($file[0] > 0){
				session_start();
				$_SESSION['autenticado'] = "Si";
				$_SESSION['id'] = $file[0];
				$_SESSION['nombres'] = $file[1];
				$_SESSION['apellidos'] = $file[2];
				$_SESSION['dni'] = $file[3];
				$_SESSION['email'] = $file[4];
				$_SESSION['clave'] = $file[5];
				$_SESSION['telefono'] = $file[6];

				?>
				<META http-equiv="Refresh" CONTENT="0; URL=../vista/index.php">
				<?php
			}
		}
	}
?>