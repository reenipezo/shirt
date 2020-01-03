<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Happpy Shirt | Inicio </title>
<!--header end here-->
 <?php 
 	require_once('Header.php');
 ?>
<!--block-layer1 start here-->
<section class="hero-banner hero-banner-sm">
    <div class="container text-center">
      <h2>Nuestra Tienda Virtual</h2>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.html">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Productos</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Descuento
								<span>15%</span></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">La
								<span>Gran</span>
								Venta
							</h3>
							
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Call of
								<span>DUTY</span></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">El
								<span>Mejor juego de Accion</span>
							</h3>
					
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>FORNITE
								<span>5%</span> Descuento</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Producto
								<span>Nuevo</span>
							</h3>
					
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>FIFA 19
								<span>25%</span> Descuento</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Vàlido
								<span>15 dìas</span>
							</h3>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Antes</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>
<div class="blc-layer3">
	<div class="container">
		<div class=" product-menu-bar">
			    <div class="col-md-12 prdt-right">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h1>Nuestros Productos</h1>
						</section>
					</div>
				</div>
		</div>
	  <div class="blc-layer3-main">
		    <?php 
				require_once('../controlador/controladorMostrarProductos.php');
				foreach ($listaProductos as $vistaProducto) {    
			?>
			<form action="detalleproducto.php" method="post" id="prodsubmit<?php echo $vistaProducto[0]?>">
				<div class="col-md-3 home-grid">
					<div class="home-product-main">
						<div class="home-product-top">	
							<a href="#" onclick="javascript:document.getElementById('prodsubmit<?php echo $vistaProducto[0]?>').submit(); return false"><img src="<?php echo $vistaProducto[7]?>" alt="" class="img-responsive zoom-img"></a>
							</div>
							<input type="hidden" name="id" value="<?php echo $vistaProducto[0]?>">
							<input type="hidden" name="cat" value="<?php echo $vistaProducto[5]?>">
							<div class="home-product-bottom">
							<h3><a  href="#" onclick="javascript:document.getElementById('prodsubmit<?php echo $vistaProducto[0]?>').submit(); return false"><?php echo utf8_encode($vistaProducto[1])?></a></h3>
								<p><?php echo $vistaProducto[2]?></p>						
							</div>
							<div class="srch">
							<span>S/. <?php echo $vistaProducto[3]?></span>
							</div>
					</div>
				</div>
			</form>
		<?php 
		}
		?>
			<div class="col-md-3 home-grid" style="padding-top: 43px;">
					<div class="home-product-main">
						<div class="home-product-top">
						 <a href="productos.php"><img src="Images/vermas.webp" alt="" class="img-responsive zoom-img"></a>
						</div>
						<div class="home-product-bottom">
							<h3><a href="productos.php">Ver más</a></h3>					
						</div>
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>					   
	</div>
</div>
<!--block-layer1 end here-->
 <?php 
 	require_once('Footer.php');
 ?>
<!--footer end here-->
</body>
</html>