<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/pago.css" rel="stylesheet" type="text/css" media="all"/>
<title>HappyShirt | Pago Seguro</title>
<?php
require_once('Header.php');
?>

<?php
	$st=0;
?>
<div class="container wrapper">
			    <div class="col-12 ">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h1>Confirmación de Pago</h1>
						</section>
					</div>
				</div>
            <?php
			require_once('../config/conexion2.php');
			$productos = $con->query("Select * from producto");
			if(isset($_SESSION["carrito"]) && !empty($_SESSION["carrito"])):
			?>	
            <div class="row cart-body">        
               <form id="frmpago" class="form-horizontal" method="post" action="../controlador/controladorGenerarVenta.php">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
          
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <p>Productos Seleccionados </p>					
                        </div>
                        <div class="panel-body">
                        		<?php
								foreach($_SESSION["carrito"] as $c):
								$productos = $con->query("select * from producto where id_producto=$c[producto_id]");
								$r = $productos->fetch_object();
								?>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="<?php echo $r->img_producto1;?>" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12"><strong><?php echo utf8_encode($r->nom_producto);?> <?php echo utf8_encode($r->mod_producto);?></strong></div>
                                    <div class="col-xs-12"><small>Precio Uni: S/. <span><?php echo $r->precio_producto;?></span></small></div>
                                    <div class="col-xs-12"><small>Cantidad:<span> <?php echo $c["cantidad"];?></span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h4><span>S/. </span><?php echo $c["cantidad"]*$r->precio_producto; ?>.00</h4>
                                </div>
                            </div>
                            <?php
                            $st=$st+($c["cantidad"]*$r->precio_producto);
							$found = false;
							foreach ($_SESSION["carrito"] as $c) { if($c["producto_id"]==$r->id_producto){ $found=true; break; }}
							?>
							<?php endforeach; ?>	
							<div class="form-group"></div>
                            <div class="form-group" style="background-color:#48A6C9;color:white;">
                                <div class="col-sm-12" >
                                    <font size="5">
                                    <strong>Total:</strong>
                                    <div class="pull-right"><span>S/.</span><span><?php echo $st?><span>.00</div>
                                	</font>
                                </div>   
                            </div>
                            <div>                           	
                            	<small>
                            		<a class="btn btn-block btn-danger" href="carrito.php" style="color:white;">
                            			Volver al Carrito
                            		</a>
                            	</small>
                            </div>		
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
	                </div>
	                
	                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
	                    <!--SHIPPING METHOD-->
	                    <div class="panel panel-info">
	                        <div class="panel-heading">Datos de Envío</div>
	                        <div class="panel-body">
	                            <div class="form-group">
	                                <div class="col-md-12">
	                                    <h4>Dirección de Entrega</h4>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <div class="col-md-6 col-xs-12">
	                                	<strong>Nombres</strong>
	                                    <?php if((isset($_SESSION["autenticado"]) == true)){
	                                    ?>
	                                	<input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $nombre?>" required="" disabled placeholder="Juan Andrés" maxlength="50"/>
	                                	<?php }else {?>
	                                		<input type="text" id="first_name" name="first_name" class="form-control" value="" required="" placeholder="Juan Andrés" maxlength="50" />
	                                	<?php 
										}
	                                	?>
	                                </div>
	                                <div class="span1"></div>
	                                <div class="col-md-6 col-xs-12">
	                                    <strong>Apellidos:</strong>
	                                    <?php if((isset($_SESSION["autenticado"]) == true)){
	                                    ?>
	                                	<input type="text" name="last_name" class="form-control" class="form-control" value="<?php echo $apellidos ?>" required="" disabled placeholder="Pérez Fernández" maxlength="50" />
	                                	<?php }else {?>
	                                		<input type="text" name="last_name" class="form-control" value="" required=""  placeholder="Pérez Fernández" maxlength="50" />
	                                	<?php 
										}
	                                	?>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <div class="col-md-6 col-xs-12">
	                                    <strong>Dirección:</strong>
	      								<input type="text" name="address" class="form-control" value="" required="" placeholder="Av. Villa María 1122" maxlength="60" />
	                                </div>
	                                <div class="span1"></div>
	                                <div class="col-md-6 col-xs-12">
	                                	 <strong>Distrito</strong>
	                                	 <Select name="city" class="form-control"  required="">
	                                	 	<option>Seleccione Distrito</option>
	                                <?php 
										require_once('../controlador/controladorMostrarDistritos.php');
										foreach ($listaDistritos as $vistadistrito) {    
									?>
	                                  		<option value="<?php echo $vistadistrito[0]?>"><?php echo utf8_encode($vistadistrito[1])?></option>
	                                  	<?php }?>
	                                  	</Select>	
	                                </div>
	                            </div>	
	                            <div class="form-group">
	                                <div class="col-md-6 col-xs-12">
	                                    <strong>Número de teléfono:</strong>
	                                	<input type="text" name="phone_number" class="form-control" value="" required="" placeholder="+51 952 952 952" maxlength="9" />
	                                </div>
	                                <div class="span1"></div>
	                                <div class="col-md-6 col-xs-12">
	                                    <strong>Correo Electrónico:</strong>
										 <?php if((isset($_SESSION["autenticado"]) == true)){
										 	$cuenta = $email;
	                                    }else {
	                                		$cuenta="";
	                                	}
	                                	?>
	                                	<input type="text" name="email" id="email" class="form-control" value="<?php echo $cuenta?>" required="" placeholder="miemail@example.com" maxlength="60"/>	
	                                </div>
	                            </div>	
	                        </div>
	                    </div>
	                    <!--SHIPPING METHOD END-->
	                    <!--CREDIT CART PAYMENT-->
	                    <div class="panel panel-info">
	                        <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Pago Seguro</div>
	                        <div class="panel-body">
	                        	 <div class="form-group">
	                                <div class="col-md-7" style="padding-top: 5px;">
	                                    <span>Paga seguro con tu tarjeta de crédito:</span>
	                                </div>
	                                <div class="col-md-5">
	                                    <ul class="cards">
	                                        <li class="visa hand">Visa</li>
	                                        <li class="mastercard hand">MasterCard</li>
	                                        <li class="amex hand">Amex</li>
	                                    </ul>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <div class="col-md-12"><strong>Tipo de Tarjeta:</strong></div>
	                                <div class="col-md-12">
	                                    <select id="CreditCardType" name="CreditCardType" class="form-control" required="">
	                                        <option value="5">Visa</option>
	                                        <option value="6">MasterCard</option>
	                                        <option value="7">American Express</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <div class="col-md-12"><strong>Número de Tarjeta de Crédito:</strong></div>
	                                <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" required="" placeholder="111122223333XXXX" maxlength="16" /></div>
	                            </div>
	                            <div class="form-group">
	                                <div class="col-md-12"><strong>CVV:</strong></div>
	                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" required="" placeholder="123" maxlength="3" /></div>
	                            </div>
	                            <div class="form-group">
	                                <div class="col-md-12">
	                                    <strong>Fecha de Vencimiento</strong>
	                                </div>
	                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                    <select class="form-control" name="">
	                                        <option value="">Mes</option>
	                                        <option value="01">01</option>
	                                        <option value="02">02</option>
	                                        <option value="03">03</option>
	                                        <option value="04">04</option>
	                                        <option value="05">05</option>
	                                        <option value="06">06</option>
	                                        <option value="07">07</option>
	                                        <option value="08">08</option>
	                                        <option value="09">09</option>
	                                        <option value="10">10</option>
	                                        <option value="11">11</option>
	                                        <option value="12">12</option>
	                                </select>
	                                </div>
	                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                    <select class="form-control" name="" required="">
	                                        <option value="">Año</option>
	                                        <option value="2015">2015</option>
	                                        <option value="2016">2016</option>
	                                        <option value="2017">2017</option>
	                                        <option value="2018">2018</option>
	                                        <option value="2019">2019</option>
	                                        <option value="2020">2020</option>
	                                        <option value="2021">2021</option>
	                                        <option value="2022">2022</option>
	                                        <option value="2023">2023</option>
	                                        <option value="2024">2024</option>
	                                        <option value="2025">2025</option>
	                                </select>
	                                </div>
	                            </div>
	                           
	                            <div class="form-group">
	                                <div class="col-md-12 col-sm-12 col-xs-12">
		                                    <input type="submit" class="btn btn-block btn-primary" value="Confirmar Pago">
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!--CREDIT CART PAYMENT END-->
                	</div>
           	    </form>
      		</div>
			<?php endif;?>
		</div>

<?php
require_once('Footer.php');
?>
<!--footer end here-->
</body>
</html>
