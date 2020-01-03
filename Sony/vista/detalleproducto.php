
<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>HappyShirt| Detalle Producto</title>
<?php
require_once('Header.php');
?>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<!--header end here-->
<!--single start here-->
<div class="single">
   <div class="container">
   	 <div class="single-main"> 	 	
   	 	<div class="single-top-main">	
   	 		<?php 
					$id = $_POST['id'];

					require_once('../modelo/ModeloProducto.php');
					$objProducto = new Producto();
					$Result = $objProducto->BuscarProductos_id($id);
					foreach ($Result as $vistaProducto) {
			?>	   		
			<form action="../controlador/agregarCarrito.php" method="post" id="detallesubmit<?php echo $vistaProducto[0]?>">
			<div class="col-md-5 single-top">	
			   <div class="flexslider">
				  <ul class="slides">
				    <li data-thumb="<?php echo $vistaProducto[7]?>">
				        <div class="thumb-image"> <img src="<?php echo $vistaProducto[7]?>" data-imagezoom="true" class="img-responsive"> </div>
				    </li>
				    <li data-thumb="<?php echo $vistaProducto[8]?>">
				         <div class="thumb-image"> <img src="<?php echo $vistaProducto[8]?>" data-imagezoom="true" class="img-responsive"> </div>
				    </li>
				    <li data-thumb="<?php echo $vistaProducto[9]?>">
				       <div class="thumb-image"> <img src="<?php echo $vistaProducto[9]?>" data-imagezoom="true" class="img-responsive"> </div>
				    </li> 
				  </ul>
			   </div>
			</div>
			<div class="col-md-7 single-top-left simpleCart_shelfItem">
				<input type="hidden" name="txtproducto_id" name="producto_id" value="<?php echo $vistaProducto[0]?>">
				<input type="hidden" name="categoria" value="<?php echo $vistaProducto[5]?>">
				<h1><?php echo utf8_encode($vistaProducto[1])?></h1>
				<h2><?php echo utf8_encode($vistaProducto[2])?></h2>
				<h6></h6><h6 class="item_price">S/ <?php echo $vistaProducto[3]?></h6>			
				<p><?php echo utf8_encode($vistaProducto[4])?></p>
				<h4>Unidades</h4>
				<ul class="bann-btns">
					<li><select name="txtCantidad" id="txtCantidad" class="bann-size">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select></li>
					
				<?php	
				$found = false;
				if(isset($_SESSION["carrito"])){ 
					foreach ($_SESSION["carrito"] as $var) 
						{ 
							if($var["producto_id"]== $vistaProducto[0]){ 
							$found=true; 
							break; 
						}
					}
				}
				?>
				<?php if($found):?>
					<li><a href="carrito.php" >Producto ya agregado</a></li>
				<?php else:?>
				     <li><a href="#" onclick="javascript:document.getElementById('detallesubmit<?php echo $vistaProducto[0]?>').submit(); return false" class="item_add">Añadir al Carrito</a></li>	
				<?php endif; ?>			
				</ul>    
			</div>
			</form>
			<?php 
			}
			?>
		   <div class="clearfix"> </div>
	   </div>
	   <div class="singlepage-product">
	   	<center><h1 style="color:orange;">Productos Similares</h1></center>

	   	<hr/>
	   		<?php 
					$cat = $_POST['cat'];

					require_once('../modelo/ModeloProducto.php');
					$objProducto = new Producto();
					$Result = $objProducto->BuscarProductosSimilares_id($cat);
					foreach ($Result as $vistaProducto) {
			?>	
		   	<form action="detalleproducto.php" method="post" id="prodsubmit<?php echo $vistaProducto[0]?>">
		   		 <div class="col-md-3 home-grid">
		   	 		<input type="hidden" name="id" value="<?php echo $vistaProducto[0]?>">
		   	 		<input type="hidden" name="cat" value="<?php echo $vistaProducto[5]?>">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="#"><img src="<?php echo $vistaProducto[7]?>" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="#" onclick="javascript:document.getElementById('prodsubmit<?php echo $vistaProducto[0]?>').submit(); return false"><?php echo utf8_encode($vistaProducto[1])?></a></h3>
								<p><?php echo $vistaProducto[2]?></p>						
						</div>
						<div class="srch">
							<span>S/.<?php echo $vistaProducto[3]?></span>
						</div>
					</div>
		   	</form>
		   </div>
			<?php 
			}
			?>
		  <div class="clearfix"> </div>
	   </div>
   	 </div>
   </div>
</div>
<!--single end here-->
<!--footer strat here-->
<?php
require_once('Footer.php');
?>
<!--footer end here-->
</body>
</html>


