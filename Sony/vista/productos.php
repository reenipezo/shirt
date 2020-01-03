<?php
	session_start();
?>

<!--header end here-->
<!--log in start here-->
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Happy Shirt | Productos</title>
<?php
require_once('Header.php');
?>
<script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>


<script>
 $(function(){
    var $tabla = $('#productos');

    $('#filtro_idcat').change(function(){
        var value = $(this).val();
        if (value!=0){
            $('section.'+value, $tabla).show();
            $('section:not(.'+value +')', $tabla).hide();
        }
        else if(value==0) {
            window.location="productos.php";
        }
    });
})
</script>


<!--header end here-->
<!--log in start here-->
<div class="product">
	<div class="container">
		<div class="product-main">
			  <div class=" product-menu-bar">
			    	<div class="col-md-12 prdt-right">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h1>Categorias</h1>
								
								<select id="filtro_idcat" name="categoria" class="form-control">
									<option value="0">Seleccione una categoria</option>
								<?php 
									require_once('../controlador/controladorMostrarCategorias.php');
									foreach ($listaCategoria as $vistaCategoria) {
								?>
								<option value="<?php echo $vistaCategoria[0]?>"><?php echo $vistaCategoria[1] ?></option>			
								<?php
								}
								?>
								</select>

						</section>
					</div>
				</div>
			  </div>	
			  <div class="col-md-12 product-block">
			  	<div id="productos">
			  	<?php 
					require_once('../controlador/controladorMostrarTodosProductos.php');
					foreach ($listaProductos as $vistaProducto) {
				?>
				
				  <section class="<?php echo $vistaProducto[5];?>">
					<form action="detalleproducto.php" method="post" id="prodsubmit<?php echo $vistaProducto[0]?>">
					    <div class="col-md-4 home-grid 0">
							<div class="home-product-main">
							   <div class="home-product-top">
							   		<input type="hidden" name="id" value="<?php echo $vistaProducto[0]?>">
									<input type="hidden" name="cat" value="<?php echo $vistaProducto[5]?>">
							      <a href="#" onclick="javascript:document.getElementById('prodsubmit<?php echo $vistaProducto[0]?>').submit(); return false"><img src="<?php echo $vistaProducto[7] ?>" alt="" class="img-responsive zoom-img"></a>
							    </div>
								<div class="home-product-bottom">
									<h3><a  href="#" onclick="javascript:document.getElementById('prodsubmit<?php echo $vistaProducto[0]?>').submit(); return false"><?php echo utf8_encode($vistaProducto[1])?></a></h3>
										<p><?php echo $vistaProducto[2]?></p>						
								</div>
								<div class="srch">
									<span>S/ <?php echo $vistaProducto[3] ?></span>
								</div>
							</div>
						</div>						
					</form>
				  </section>
				 
				 <?php 
					} 
				?>	
				</div> 
			</div>		 
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
