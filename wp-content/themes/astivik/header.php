<!DOCTYPE html>
<html lang="en" id="body-scroll">
<head>
	<meta charset="UTF-8">
	<meta name="Title" content="astivik">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="description" content="">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
	<title>Astivik</title>
</head>
<body >
	<?php include('loader.php'); ?>
	<?php $currentlang = get_bloginfo('language'); ?>
	<div class="menu-principal">
		<div class="container">
			<section id="topbar" class=" d-lg-block">
				<div class="container clearfix content-sol">
					<div class="contact-info float-left">
						<button type="button" data-toggle="modal" data-target="#modalTime">
							<div class="sol">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/cloud.png" alt="">
							</div>
						</button>

					</div>
					<div class="social-links float-right">

						<!-- español-->
						<?php if($currentlang=="es-ES"):?>
							<!-- español-->
							<a href="?lang=en" class="instagram" style="vertical-align: middle;"><i class="" aria-hidden="true"></i><i class="sf">English</i></a>

							<!-- end español -->
						<?php else: ?>
							<!-- english -->
							<a href="?lang=es" class="instagram" style="vertical-align: middle;"><i class="t" aria-hidden="true"></i><i class="sf">Español</i></a>
							<!-- end English -->
						<?php endif; ?>


						<a href="#" class="instagram shared-border " role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="icon-shared-orange"><img src="<?php echo get_template_directory_uri();?>/assets/img/compartir.svg" alt=""></div>
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<?php if (is_front_page()): ?>
								<a class="dropdown-item item-shared-nav" href="https://www.facebook.com/sharer/sharer.php?u=<?php bloginfo('url'); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
								<a class="dropdown-item item-shared-nav" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php bloginfo('url'); ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
								<a class="dropdown-item item-shared-nav" href="<?php echo 'whatsapp://send?text='.str_replace( ' ', '%20', 'Astivik') . ' ' . urlencode('http://staging.astivik.com.co');?>" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>

							<?php elseif (is_tax('Servicios')): ?>
								<a class="dropdown-item item-shared-nav" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo bloginfo('url').'/index.php/servicios/'.basename($_SERVER['PHP_SELF']); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
								<a class="dropdown-item item-shared-nav" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo bloginfo('url').'/index.php/servicios/'.basename($_SERVER['PHP_SELF']); ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
								<a class="dropdown-item item-shared-nav" href="<?php echo 'whatsapp://send?text='.str_replace( ' ', '%20', $category->name) . ' ' . urlencode(get_term_link( $category->term_id ));?>" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>

							<?php elseif (is_tax('tipo_proyectos')): ?>
								<a class="dropdown-item item-shared-nav" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo bloginfo('url').'/index.php/tipo_proyectos/'.basename($_SERVER['PHP_SELF']); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
								<a class="dropdown-item item-shared-nav" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo bloginfo('url').'/index.php/tipo_proyectos/'.basename($_SERVER['PHP_SELF']); ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
								<a class="dropdown-item item-shared-nav" href="<?php echo 'whatsapp://send?text='.str_replace( ' ', '%20', $category->name) . ' ' . urlencode(get_term_link( $category->term_id ));?>" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>

							<?php else: ?>
								<a class="dropdown-item item-shared-nav" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
								<a class="dropdown-item item-shared-nav" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
								<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>


									<a class="dropdown-item item-shared-nav" href="<?php echo 'whatsapp://send?text='.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>

								<?php endwhile; endif; ?>

							<?php  endif;?>
						</div>
						<?php if($currentlang=="es-ES"):?>
							<!-- Español-->
							<a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>" class="facebook" style="vertical-align: middle;"><i class="sf">Proveedores</i></a>
							<a class="emergencia" href="https://astivik-a.herokuapp.com/" class="twitter" target="_blank"><i class="fa fa-shi">


								<button type="submit" class="btn  cliente-boton  fa fa-ship" ><span class="item-button">cliente astivik</span></button></i>
							</a>

							<!-- End Español -->
						<?php else: ?>
							<!-- English -->
							<a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>" class="facebook" style="vertical-align: middle;"><i class="sf">Suppliers</i></a>
							<a class="emergencia" href="https://astivik-a.herokuapp.com/" class="twitter" target="_blank"><i class="fa fa-shi">


								<button type="submit" class="btn  cliente-boton  fa fa-ship" ><span class="item-button">Astivik Client</span></button></i>
							</a>

							<!-- End English -->
						<?php endif; ?>

					</div>
				</div>
			</section>
			<header id="header">
				<div class="container">

					<div id="logo" class="pull-left">
						<a href="<?php echo bloginfo('url').'/index.php'; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo_astivik.svg" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container ">
						<ul class=" nav-menu-firt">

							<?php if($currentlang=="es-ES"):?>
								<!-- Español-->
								<li class="menu-active"><a href="<?php echo bloginfo('url').'/index.php/servicio/'; ?>">Servicios</a></li>
								<li><a href="<?php echo bloginfo('url').'/index.php/proyecto'; ?>">Proyectos realizados</a></li>
								<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Instalaciones</a></li>
								<?php $menu ='MENÚ' ?>
								<!-- End Español -->
							<?php else: ?>
								<!-- English -->
								<li class="menu-active"><a href="<?php echo bloginfo('url').'/index.php/servicio/'; ?>">Services</a></li>
								<li><a href="<?php echo bloginfo('url').'/index.php/proyecto'; ?>">Successful Projects</a></li>
								<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Facilities</a></li>
								<!-- End English -->
								<?php $menu ='MENU' ?>
							<?php endif; ?>




							<div class="button-burger" id="burguer-desktop">
								<li style="border: 1px solid #0051db;background: #fff; color:#0051db; "><a><?php echo $menu; ?>
									<div class="hamburger hamburger--squeeze" id="squeeze">
										<div class="hamburger-box">
											<div class="hamburger-inner"></div>
										</div>
									</div>
								</div>
							</a>
						</li>

					</ul>
					<div class="button-burger  d-sm-block d-md-none" id="burguer-xs">
						<div class="hamburger hamburger--squeeze" id="squeeze_xs">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</div>
					<nav class="menu" id="menu">
						<div class="frame-menu"> <!-- Desktop frame menu-->
							<div class="container">
								<div class="row">
									<div class=" col-6  ">
										<div class="logo-frame">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/logo_astivik.svg" alt="">
										</div>
										<style>
										.logo-frame{
											width: 200px;
											height: 50px;
											margin-bottom: 50px;
										}
										.logo-frame img{
											max-height: 100%;
										}
										.icons-social-navbar{
											float: right;
											padding: ;
											padding-right: 50px;
										}

										.icons-social-navbar li{
											margin: 0 11px;
										}
										.icons-social-navbar li a i{
											color: #000;
											cursor: pointer;
											font-size: 1.5em;
										}




									</style>
								</div>
								<div class="col-6">
									<div class="icons-social-navbar">
										<ul style="display: inline-flex;">
											<!-- <li> <a href="https://www.facebook.com/ASTIVIK"> <i class="fa fa-facebook fa-2x "></i></a>  </li> -->
											<li><a  target="_blank" href="https://www.instagram.com/astivikshipyard"> <i class="fa fa-instagram fa-2x "></i></a> </li>
											<li><a  target="_blank" href="https://www.linkedin.com/company/industrias-astivik"> <i class="fa fa-linkedin fa-2x "></i></a></span></li>
											<li><a  target="_blank" href="https://www.youtube.com/user/Astivik1"> <i class="fa fa-youtube-play fa-2x "></i></a></span></li>
										</ul>
									</div>
								</div>
								<ul class="col-lg-3 col-sm-auto col-sm-12">

									<?php if($currentlang=="es-ES"):?>
										<!-- Español-->
										<li class="proyecto-menu">Acerca de Astivik</li>
										<li><a href="<?php echo bloginfo('url').'/index.php/about/#quienes-somos'; ?>">Quiénes somos</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/about/#mision'; ?>">Proyección y misión</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/about/#valores'; ?>">Valores de Astivik</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Control y medio ambiente</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Seguridad y responsabilidad</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/politica-para-el-tratamiento-de-datos-personales'; ?>">Políticas de Privacidad</a></li>
										<?php $service = 'Servicios';
										$contact = 'Contacto y Soporte';
										$capacity = 'Capacidades'; 
										$acerca = 'Acerca de Astivik'; ?>
										<!-- End Español -->
									<?php else: ?>
										<!-- English -->
										<li class="proyecto-menu">About Astivik</li>
										<li><a href="<?php echo bloginfo('url').'/index.php/about/#quienes-somos'; ?>">About Us</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/about/#mision'; ?>">Mission and Vision</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/about/#valores'; ?>">Our Values</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Control and Environment</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Safety and Responsibility</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/politica-para-el-tratamiento-de-datos-personales'; ?>">Privacy Policies</a></li>
										<?php $service = 'Servicios';
										$contact = 'Contacto y Soporte';
										$capacity = 'Capacidades';
										$acerca = 'Acerca de Astivik'; ?>
										<!-- End English -->
									<?php endif; ?>



								</ul>
								<ul class="col-lg-3 col-sm-auto col-sm-12">
									<li class="proyecto-menu"><?php echo $service; ?></li>
									<?php $categories = get_categories( array('taxonomy' => 'Servicios','hide_empty' => false,'orderby' => 'name','order' => 'ASC'));?>
									<?php foreach ($categories as $category):?>
										<li><a href="<?php echo get_term_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
									<?php endforeach; ?>

								</ul>
								<ul class="col-lg-3 col-sm-auto col-sm-12">
									<li class="proyecto-menu"><?php echo $capacity.' Astivik'; ?></li>
									<?php $the_query = new WP_Query('post_type=capacidades&order=ASC'); ?>
									<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

										<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
									<?php endwhile; endif; ?>

									<?php if($currentlang=="es-ES"):?>
										<!-- Español-->
										<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Mapa de Infraestructura</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/'; ?>">Programar cita</a></li>
										<!-- End Español -->
									<?php else: ?>
										<!-- English -->
										<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Map of Infrastructure</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/'; ?>">Schedule Appointment</a></li>
										<!-- End English -->
									<?php endif; ?>


								</ul>
								<ul class="col-lg-3 col-sm-auto col-sm-12">

									<?php if($currentlang=="es-ES"):?>
										<!-- Español-->
										<li class="proyecto-menu">Contacto y Soporte</li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab5'; ?>">Directorio corporativo</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab4'; ?>">Proveedores</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>">Cotizar Servicios</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>">PQRS</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab3'; ?>">Hablar con un asesor</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>">Preguntas Frecuentes</a></li>
										<!-- End Español -->
									<?php else: ?>
										<!-- English -->
										<li class="proyecto-menu">Contact and Support</li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab5'; ?>">Corporate Directory</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab4'; ?>">Suppliers</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>">Quote Service</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>">Quality Survey</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab3'; ?>">Talk to an Agent</a></li>
										<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>">FAQ</a></li>
										<!-- End English -->
									<?php endif; ?>

								</ul>
								<ul class="col-lg-3 color-negro col-sm-auto col-sm-12">

									<?php if($currentlang=="es-ES"):?>
										<!-- Español-->
										<li class="color-negro"><a href="<?php echo bloginfo('url').'/index.php/proyecto/'; ?>">Proyectos Realizados</a></li>
										<li class="proyecto-menu"><a href="<?php echo bloginfo('url').'/index.php/about/noticias'; ?>">Noticias y Eventos</a></li>

										<li class="proyecto-menu"><a href="<?php echo bloginfo('url').'/index.php/about/#quienes-somos'; ?>">Quienes somos</a></li>
										<!-- End Español -->
									<?php else: ?>
										<!-- English -->
										<li class="color-negro"><a href="<?php echo bloginfo('url').'/index.php/proyecto/'; ?>">Succesful Projects</a></li>
										<li class="proyecto-menu"><a href="<?php echo bloginfo('url').'/index.php/about/noticias'; ?>">News and Events</a></li>

										<li class="proyecto-menu"><a href="<?php echo bloginfo('url').'/index.php/about/#quienes-somos'; ?>">About Us</a></li>
										<!-- End English -->
									<?php endif; ?>


									<div class="img-menu">
										<img style="        width: 270px;
										margin: 48px 27px 0px;;position: absolute; " src="<?php echo get_template_directory_uri();?>/assets/img/detalle-capacidad/03_background_ship.png" alt="">
									</div>
								</ul>

							</div>
						</div>
					</div>
				</nav>
				<nav class="menu" id="menu_xs">
					<!-- xs********************************************************************************************************************** -->
					<div class="frame-menu_xs"> <!-- Desktop frame menu-->
						<div class="container">
							<div class="row">
								<div class="img-menu-logo col-md-12 col-sm-auto  ">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/logo_astivik.svg" alt="">
								</div>
							</div>
							<div class="menu-accordion">
								<div id="accordion">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0">

												<!-- español-->
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<a class="proyecto-menu"><?php echo $acerca; ?></a>
												</button>
												<!-- end español -->

											</h5>
										</div>

										<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
												<ul>

													<?php if($currentlang=="es-ES"):?>
														<!-- Español-->
														<li><a href="<?php echo bloginfo('url').'/index.php/about/#quienes-somos'; ?>">Quiénes somos</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/about/#mision'; ?>">Proyección y misión</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/about/#valores'; ?>">Valores de Astivik</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Control y medio ambiente</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Seguridad y responsabilidad</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/politica-para-el-tratamiento-de-datos-personales'; ?>">Politicas de Privacidad</a></li>
														<!-- End Español -->
													<?php else: ?>
														<!-- English -->
														<li><a href="<?php echo bloginfo('url').'/index.php/about/#quienes-somos'; ?>">About Us</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/about/#mision'; ?>">Mission and Vision</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/about/#valores'; ?>">Our Values</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Control and Environment</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/seguridad/'; ?>">Safety and Responsibility</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/politica-para-el-tratamiento-de-datos-personales'; ?>">Privacy Policy</a></li>
														<!-- End English -->
													<?php endif; ?>

												</ul>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													<a class="proyecto-menu"><?php echo $service; ?></a>
												</button>
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
												<ul>
													<?php $categories = get_categories( array('taxonomy' => 'Servicios','hide_empty' => false,'orderby' => 'name','order' => 'DES'));?>
													<?php foreach ($categories as $category):?>
														<li><a href="<?php echo get_term_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
													<?php endforeach; ?>
												</ul>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													<a class="proyecto-menu"><?php echo $capacity.' Astivik'; ?></a>
												</button>
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
												<ul>
													<?php $the_query = new WP_Query('post_type=capacidades&order=ASC'); ?>
													<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

														<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
													<?php endwhile; endif; ?>
													<?php if($currentlang=="es-ES"):?>
														<!-- español-->
														<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Mapa de Infraestructura</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/'; ?>">Programar cita</a></li>
														<!-- end español -->
													<?php else: ?>
														<!-- english -->
														<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Infrastructure Map</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/'; ?>">Schedule Appointment</a></li>
														<!-- end English -->
													<?php endif; ?>

												</ul>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingFour">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
													<a class="proyecto-menu"><?php echo $contact; ?></a>
												</button>
											</h5>
										</div>
										<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
											<div class="card-body">
												<ul>
													<?php if($currentlang=="es-ES"):?>
														<!-- español-->
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab5'; ?>">Directorio corporativo</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>">Proveedores</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>">Cotizar Servicios</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>">PQRS</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>">Hablar con un asesor</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>">Preguntas Frecuentes</a></li>
														<!-- end español -->
													<?php else: ?>
														<!-- english -->
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab5'; ?>">Corporate Directory</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>">Suppliers</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>">Quote services</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>">Quality Survey</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>">Talk to an Agent</a></li>
														<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>">FAQ</a></li>
														<!-- end English -->
													<?php endif; ?>
												</ul>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</nav>
			</li>
		</nav>
	</div>
</header>
</div>
</nav>
</ul>
</nav>
</div>
</header>
</div>
</div>
</div>
<section class="content"><!--  starconten -->
	<!-- Modal Time -->
	<div class="modal fade" id="modalTime" tabindefx="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-time" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div>

						<div id="tyt_wdgt_1531939102983" style="overflow:hidden;width:312px;height:320px" data-options="color=azul&text=&content=1111100&temp_unit=c&wind_unit=kmh"><script src="http://tiempoytemperatura.es/widgets/js/medium-1day/3687238/tyt_wdgt_1531939102983/?v=0"></script></div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<style type="text/css">
	.modal-dialog-time {
		max-width: 335px !important;
	}

	.active-scroll{
		overflow: hidden  !important;
	}
</style>
<section class="content"><!--  starconten -->