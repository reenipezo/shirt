<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/img/favicon-16x16.png" type="image/png">
    <title>Happy Shirt</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.rawgit.com/mburakerman/prognroll/master/src/prognroll.js"></script>
    <script>
        function vermas(id) {
            if (id == "mas") {
                document.getElementById("desplegar").style.display = "block";
                document.getElementById("mas").style.display = "none";
            }
            else {
                document.getElementById("desplegar").style.display = "none";
                document.getElementById("mas").style.display = "inline";
            }
        }
    </script>

<script language="JavaScript">
        var TRange = null

        function busca(str) {
            if (parseInt(navigator.appVersion) < 4) return;
            var strFound;
            if (window.find) {

                strFound = self.find(str);
                if (!strFound) {
                    strFound = self.find(str, 0, 1)
                    while (self.find(str, 0, 1)) continue
                }
            }
            else if (navigator.appName.indexOf("Microsoft") != -1) {

                if (TRange != null) {
                    TRange.collapse(false)
                    strFound = TRange.findText(str)
                    if (strFound) TRange.select()
                }
                if (TRange == null || strFound == 0) {
                    TRange = self.document.body.createTextRange()
                    strFound = TRange.findText(str)
                    if (strFound) TRange.select()
                }
            }
            else if (navigator.appName == "Opera") {
                alert("Opera no soporta busqueda")
                return;
            }
            if (!strFound) alert("La palabra  '" + str + "' no fue Encontrada")
            return;
        }
    </script>
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area" id="header">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="tel: +51944028451"><i class="ti-mobile"></i>944 028 451</a>
                    <span class="dn_btn"> <i class="ti-location-pin"></i>Av. Tomas Marzano, Santiago de Surco</span>
                </div>
                <div class="float-right">
                    <span class="follow_us">Siguenos: </span>
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="../index.html"><img src="img/img/logo.jpg"" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="../index.html">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="about-us.html">Sobre Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="service.html">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="project.html">Nuestros Productos</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contáctenos</a></li>
                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li class="shop-icon"><a href="#"><i class="ti-shopping-cart-full"></i><span>0</span></a>
                            </li>
                            <li><a id="search" href="javascript:void(0)"><i class="ti-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </nav>

        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                    <input name="t1" placeholder="Buscar Texto" type="text" class="form-control" /> <input
                        onclick="busca(document.all.t1.value)" class="genric-btn danger-border radius" type="button"
                        value="Buscar" />
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
<!--================Header Menu Area =================-->

 
  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner hero-banner-sm">
    <div class="container text-center">
      <h2>Nuestra Tienda Virtual</h2>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
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

    <section class="portfolio_area area-padding" id="portfolio">
    <div class="container">
     <div class="area-heading">
        <h3 class="line">Polos al por mayor y menor</h3>
        <p>Compra lo que mas te gusta.</p>

    </div>

    <div class="filters portfolio-filter" style="font-size: 14px">
        <ul>
            <li class="active" data-filter="*">Todas las Categorias</li>
            <li data-filter=".popular">Diseños Apuestos</li>
            <li data-filter=".latest"> Estampados</li>
            <li data-filter=".following">Sin Diseños</li>
            <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false">Diseños Personalidados</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Dragon Ball Z</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Naturo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Dragon Ball Z</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Naturo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Dragon Ball Z</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Naturo</a></li>                       
                    </ul>
            </li>
            <input placeholder="  Buscar" type="text">
        </ul>
    </div>

    <div class="filters-content">
        <div class="row portfolio-grid">
            <div class="grid-sizer col-md-3 col-lg-6"></div>
            <div class="col-lg-6 col-md-6 all following">
                <div class="single_portfolio">
                    <img class="img-fluid w-100" src="img/project/1.jpg" alt="">
                    <div class="short_info">
                        <p>construction</p>
                        <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 all latest popular upcoming">
                <div class="single_portfolio">
                    <img class="img-fluid w-100" src="img/project/2.jpg" alt="">
                    <div class="short_info">
                        <p>construction</p>
                        <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 all latest following">
                <div class="single_portfolio">
                    <img class="img-fluid w-100" src="img/project/3.jpg" alt="">
                    <div class="short_info">
                        <p>construction</p>
                        <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 all latest upcoming">
                <div class="single_portfolio">
                    <img class="img-fluid w-100" src="img/project/4.jpg" alt="">
                    <div class="short_info">
                        <p>construction</p>
                        <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>                            
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</section>
  <!-- ================ contact section start ================= -->
 
  <!-- ================ contact section end ================= -->

<!--================ start footer Area =================-->
<footer class="footer-area ">
  <div class="container">
      <div class="row">
          <div class="col-lg-4  col-md-6">
              <div class="single-footer-widget">
                  <h6>Enlaces de usuario</h6>
                  <div class="row">
                      <div class="col-lg-6">
                          <ul class="footer-nav">
                              <li><i class="ti-angle-right"></i>
                                  <a href="../index.html">Inicio</a>
                              </li>
                              <li><i class="ti-angle-right"></i>
                                  <a href="about-us.html">Sobre Nosotros</a>
                              </li>
                              <li><i class="ti-angle-right"></i>
                                  <a href="service.html">Servicios</a>
                              </li>
                              
                              <li><i class="ti-angle-right"></i>
                                  <a href="contact.html">Contáctenos</a>
                              </li>
                          </ul>

                      </div>
                      <div class="col-lg-6">
                          <ul class="footer-nav">
                              
                              <li><i class="ti-angle-right"></i>
                                  <a href="terminos.html">Terminos y Condiciones</a>
                              </li>
                              <li><i class="ti-angle-right"></i>
                                  <a href="cart.php">Tienda</a>
                              </li>
                              
                          </ul>
                      </div>
                  </div>

              </div>
          </div>
          <div class="col-lg-4  col-md-6">
              <div class="single-footer-widget mail-chimp">
                  <h6 class="mb-20">Horas de trabajo</h6>
                  <ul class="business-hour">
                      <li>Lunes a Viernes : <span>9:00 am - 18:00 pm</span> </li>
                      <li>Sabados :<span>9:00 am - 16:00 pm</span></li>
                      <li>Domingos :<span>Cerrádo</span></li>
                  </ul>
                  <p>¡Trabajamos todas las vacaciones!</p>
              </div>
          </div>
          <div class="col-lg-4  col-md-12">
              <div class="single-footer-widget newsletter">
                  <h6>Boletín electrónico</h6>
                  <div id="mc_embed_signup">
                      <form target="_blank"
                          action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                          method="get" class="form-inline">

                          <div class="form-group row no-gutters">
                              <div class="col-lg-8 col-md-8 col-7">
                                  <input name="EMAIL" placeholder="Tu correo electrónico"
                                      onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = 'Tu correo electrónico '" required=""
                                      type="email">
                              </div>

                              <div class="col-lg-4 col-md-4 col-5">
                                  <button class="nw-btn main_btn circle">SUSCRÍBETE
                                      <span class="lnr lnr-arrow-right"></span>
                                  </button>
                              </div>
                          </div>
                          <div class="info"></div>
                      </form>
                  </div>
                  <br><br>
                  <p> Regístrese para recibir nuevos contenidos,
                      actualizaciones, encuestas y ofertas de
                      Happy Shirt.</p>
                  <a class="footer-link" href="politicas.html">Política de privacidad</a>
              </div>
          </div>
      </div>


  </div>

  <div class="footer-bottom">
      <div class="container">
          <div class="row ">
              <p class="col-lg-12 footer-text ">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Happy
                  Shirt
                  <i class="fa fa-heart" aria-hidden="true"></i>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
      </div>
  </div>

</footer>
<!--================ End footer Area =================-->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/barra.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>

</html>
