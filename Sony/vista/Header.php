<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery-1.9.1.js"></script><!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="icon" href="../../vistas/img/img/favicon-16x16.png" type="image/png">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Happy Shirt - tienda virtual de ventas de productos de polos a tu gusto, modelos
v y ovalado todo a tu gusto" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<link rel="stylesheet" href="css/fonts.css">
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!--header strat here-->

<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="top-nav">
				<div class="content white">
	              <nav class="navbar navbar-default" role="navigation">
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					        </button>
					        <div class="navbar-brand logo">
								<a href="../../index.html"><img src="../../vistas/img/img/logo.jpg" width="130px" height="30px"></a>
							</div>
					    </div>
					    <!--/.navbar-header-->
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
					        	   <li><a href="index.php">Inicio | Listado de Productos</a></li>
						           <li><a href="productos.php" >Productos<b></b></a></li>
						        <li><a href="contactanos.php">Contáctanos</a></li>
					        </ul>
					    </div>
					    <!--/.navbar-collapse-->
					</nav>
					<!--/.navbar-->
				</div>
			</div>
			<div class="header-right">
				<div class="search">
					<div class="cart box_1">
						<a href="carrito.php">
						<h3>
							<img src="images/cart.jpg" alt=""/>
							
							</h3>
						</a>	

					</div>  
				  
 
  <a  onclick="document.getElementById('id01').style.display='block'">					
							<img src="images/user.jpg" alt=""/ width="50" height="50" >
						</a>
						<div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <div class="head-singin">
					<?php 
					
					if((isset($_SESSION["autenticado"]) == true)){
						$nombre= $_SESSION['nombres'] ;
						$apellidos = $_SESSION['apellidos'];
						$email = $_SESSION['email'];
						echo "<font size='2' style='padding-left:20px;'><strong>$nombre $apellidos</strong></font><font size='1'><br></br><a href='actualizar.php' class='btn btn-primary' style='height:30px;width:150px;padding:5px;'><i class='hd-dign'></i>Actualizar</a><a href='../config/salir.php' class='btn btn-danger' style='height:30px;width:150px;padding:5px;'><i class='hd-dign'></i>Cerrar Sesión</a></font>";
					
					}elseif(isset($_SESSION["autenticado"]) == false) {
						echo "<font size='1'><a href='login.php'  class='btn btn-success' style='height:40px;width:150px;padding:10px;'><i class='hd-dign'></i>Iniciar Sesión</a></font>";
					}?>
					<br>
					</div>	

                     
					 
      </div>
    </div>
  </div>
				</div>
			</div>
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>