<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HappyShirt | Carrito de Compras</title>
<?php
require_once('Header.php');
?>
<!--header end here-->
<!--log in start here-->
<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h1>Mi Carrito de Compras</h1>
			 <hr/>
				
			<?php
			require_once('../config/conexion2.php');

			$productos = $con->query("Select * from producto");
			if(isset($_SESSION["carrito"]) && !empty($_SESSION["carrito"])):
			?>	
			<div class="in-check" >
				<div class="table-responsive">
                <table class="table table-clear table-responsive-md bs-example table-hover">
                    <thead class="thead-light" style="background: black;color:white;">
                        <tr>
                            <th  style="text-align: center;">Producto</th>
                            <th  style="text-align: center;">Descripcion</th>
                            <th  style="text-align: center;">Precio Unitario</th>
                            <th  style="text-align: center;">Cantidad</th>
                            <th  style="text-align: center;">Total</th>
                            <th  style="text-align: center;"></th>
                        </tr>
                    </thead>
                    <tbody>	
                    	<?php
						foreach($_SESSION["carrito"] as $c):
						$productos = $con->query("select * from producto where id_producto=$c[producto_id]");
						$r = $productos->fetch_object();
						?>
                        <tr align="center">
                            <td height="100px" width="100px"><img src="<?php echo $r->img_producto1;?>" class="img-responsive" ></td>
                            <td style="padding-top: 35px;height="50px" width="300px"><?php echo utf8_encode($r->nom_producto);?> <?php echo utf8_encode($r->mod_producto);?></td>
							<td style="padding-top: 35px; height="50px" width="150px">S/ <?php echo $r->precio_producto;?></td>
							<td style="padding-top: 35px;"><?php echo $c["cantidad"];?></td>
							<td style="padding-top: 35px;">S/ <?php echo $c["cantidad"]*$r->precio_producto; ?>.00</td>
                       		<td style="padding-top: 20px;">
							<?php
							$found = false;
							foreach ($_SESSION["carrito"] as $c) { if($c["producto_id"]==$r->id_producto){ $found=true; break; }}
							?>
								<a href="../controlador/eliminardelcarrito.php?id=<?php echo $c["producto_id"];?>" class="btn btn-warning">Eliminar del carrito</a></td>
							<?php endforeach; ?>	
						</tr>
                    </tbody>
                </table>
                </div>
		 	</div>
			<hr/>	 
			<center>
			<div class="form-group">
				<input type="button" class="btn btn-danger" onclick="location.href='productos.php'" value="Seguir Comprando" style="height: 50px;width: 150px;">
				&nbsp&nbsp&nbsp&nbsp
				<input type="button" class="btn btn-success" onclick="location.href='pago.php'" value="Confirmar Compra" style="height: 50px;width: 150px;">
			</div>	
			</center>
	<?php else:?>	
		<a  class="btn btn-success btn-lg btn-block" href="index.php">Seguir Comprado</a>
		<br><br>
		<p class="alert alert-warning">El carrito esta vacio.</p>
	<?php endif;?>
	<br><br><hr>
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
