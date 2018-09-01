</section> <!-- content-end -->
<footer>
	<?php $currentlang = get_bloginfo('language'); ?>
	<div class="container footer">
		<div class="row">
			<div class="content-logo";>
				

				<div class="img-footer-astivik"><img data-srcset="<?php echo get_template_directory_uri();?>/assets/img/logo_astivik_footer.svg" alt="Logotipo Astivik" title="" class="lazy img-responsive"/></div>
				<div class="separacion"></div>
				<div class="img-footer-certification " ><img data-srcset="<?php echo get_template_directory_uri();?>/assets/img/alllogos.png" alt="certificaciones de astivik" title="" class="lazy img-responsive"/></div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="linea"></div>
		</div>
		<style>
		@media (min-width: 0px) and (max-width: 767px) {
			.ocultar{
				display:none;
			}
		}
	</style>
	<div class="row ocultar">
		<div class="col-md-2 col-sm-auto wow">
			<?php if($currentlang=="es-ES"):?>
				<!-- español-->
				<h4>Acerca de astivik</h4>
				<ul>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#quienes-somos'; ?>">Quiénes somos</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#mision'; ?>">Proyección y misión</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#valores'; ?>">Valores de Astivik</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Control y medio ambiente</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Seguridad y responsabilidad</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/politica-para-el-tratamiento-de-datos-personales'; ?>">Politicas y cookies</a></li>
					<?php $service = 'Servicios'; ?>
					<?php $taller = 'Taller'; ?>
				</ul>
				<!-- end español -->
			<?php else: ?>
				<!-- english -->
				<h4>About Astivik</h4>
				<ul>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#quienes-somos'; ?>">About Us</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#mision'; ?>">Mission and Vision</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#valores'; ?>">Our Values</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Control and Environment</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Safety and Responsibility</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/politica-para-el-tratamiento-de-datos-personales'; ?>">Policies and cookies</a></li>
					<?php $service = 'Services'; ?>
					<?php $taller = 'Workshop'; ?>
				</ul>
				<!-- end English -->
			<?php endif; ?>

		</div>
		<div class="col-md-2 col-sm-auto wow">
			<h4><?php echo $service; ?></h4>
			<ul>
				<?php $categories = get_categories( array('taxonomy' => 'Servicios','hide_empty' => false,'orderby' => 'name','order' => 'DES'));?>
				<?php foreach ($categories as $category):?>
					<li><a href="<?php echo get_term_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="col-md-2 col-sm-auto wow">
			<h4><?php echo $taller.' Astivik'; ?></h4>
			<ul>
				<?php $the_query = new WP_Query('post_type=capacidades&order=ASC'); ?>
				<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

					<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
				<?php endwhile; endif; ?>
				<?php if($currentlang=="es-ES"):?>
					<!-- español-->
					<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Mapa de Infraestructura</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>">Programar cita</a></li>
					<!-- end español -->
				<?php else: ?>
					<!-- english -->
					<li><a href="<?php echo bloginfo('url').'/index.php/mapa-infraestructura/'; ?>">Map of Infrastructure</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>">Schedule Appointment</a></li>
					<!-- end English -->
				<?php endif; ?>
			</ul>
		</div>

		<?php if($currentlang=="es-ES"):?>
			<!-- español-->
			<div class="col-md-3 col-sm-auto wow">
				<h4>Contacto y soporte</h4>
				<ul>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab5'; ?>" title="">Directorio Corporativo</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab2'; ?>" title="">Trabaje con Nosotros</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>" title="">Proveedores</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>" title="">Cotizar Servicios</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>" title="">PQRS</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>" title="">Hablar con un asesor</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>" title="">Preguntas frecuentes</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-auto wow">
				<ul>
					<li class="color-negro"><a style="font-size: 15px;

					color: #000;
					font-family: 'Ubuntu', sans-serif;
					font-weight: bold;" href="<?php echo bloginfo('url').'/index.php/proyecto/'; ?>">Proyectos Realizados</a></li>
					<li class="color-negro"><a style="font-size: 15px;

					color: #000;
					font-family: 'Ubuntu', sans-serif;
					font-weight: bold;" href="<?php echo bloginfo('url').'/index.php/noticias'; ?>">Noticias y Eventos</a></li>

					<div class="icons-social">
						<p>Astivik Social</p>
						<ul style="display: inline-flex;">

							<!--<li> <a href="https://www.facebook.com/ASTIVIK"> <i class="fa fa-facebook fa-2x "></i></a>  </li>-->
							<li> <a href="https://www.instagram.com/astivikshipyard/" target="_blank"> <i class="fa fa-instagram fa-2x "></i></a> </li>
							<li><a href="https://www.linkedin.com/company/industrias-astivik/" target="_blank"> <i class="fa fa-linkedin fa-2x "></i></a></span></li>
							<li><a href="https://www.youtube.com/user/Astivik1" target="_blank"> <i class="fa fa-youtube-play fa-2x "></i></a></span></li>
							

						</ul>
					</div>
				</ul>
			</div>
			<!-- end español -->
		<?php else: ?>
			<!-- english -->
			<div class="col-md-3 col-sm-auto wow">
				<h4>Contact and Support</h4>
				<ul>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab5'; ?>" title="">Corporative Directory</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab2'; ?>" title="">Work with us</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>" title="">Suppliers</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>" title="">Service Quote</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>" title="">Quality Survey</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>" title="">Talk to an agent</a></li>
					<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>" title="">FAQ</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-auto wow">
				<ul>
					<li class="color-negro"><a style="font-size: 15px;

					color: #000;
					font-family: 'Ubuntu', sans-serif;
					font-weight: bold;" href="<?php echo bloginfo('url').'/index.php/proyecto/'; ?>">Successful Projects</a></li>
					<li class="color-negro"><a style="font-size: 15px;

					color: #000;
					font-family: 'Ubuntu', sans-serif;
					font-weight: bold;" href="<?php echo bloginfo('url').'/index.php/noticias'; ?>">News and Events</a></li>

					<div class="icons-social">
						<p>Astivik Social</p>
						<ul style="display: inline-flex;">
							<!--	<li> <a href=""> <i class="fa fa-facebook fa-2x "></i></a>  </li>-->
							<li> <a href="https://www.instagram.com/astivikshipyard/" target="_blank"> <i class="fa fa-instagram fa-2x "></i></a> </li>
							<li><a href="https://www.linkedin.com/company/industrias-astivik/" target="_blank"> <i class="fa fa-linkedin fa-2x "></i></a></span></li>
							<li><a  target="_blank" href="https://www.youtube.com/user/Astivik1"> <i class="fa fa-youtube-play fa-2x "></i></a></span></li>

						</ul>
					</div>
				</ul>
			</div>
			<!-- end English -->
		<?php endif; ?>
	</div>

</div>


<!---*******************************NUEVO FOOTER MENU****************************************-->

<div class="panel-group footer d-lg-none d-md-none" id="accordion-footer">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				<h4 style="border-bottom: 1px solid #0000001a;padding: 12px;" class="accordion-toggle item-links" data-toggle="collapse" data-parent="#accordion-footer" href="#panel1">Acerca de Astivik<span class="separator-arrow"><i class="fa fa-caret-down fa-1x"></i></span></h4>
			</div>
		</div>
		<div id="panel1" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="col-md-2 col-sm-auto wow" id="menu_footer">
					<?php if($currentlang=="es-ES"):?>
						<!-- español-->
						<ul>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#quienes-somos'; ?>">Quiénes somos</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#mision'; ?>">Proyección y misión</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#valores'; ?>">Valores de Astivik</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Control y medio ambiente</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Seguridad y responsabilidad</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/'; ?>">Politicas y cookies</a></li>
							<?php $service = 'Servicios'; ?>
							<?php $taller = 'Taller'; ?>
						</ul>
						<!-- end español -->
					<?php else: ?>
						<!-- english -->

						<ul>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#quienes-somos'; ?>">About Us</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#mision'; ?>">Mission and Vision</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/about/#valores'; ?>">Our Values</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Control and Environment</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/seguridad/'; ?>">Safety and Responsibility</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/index.php/'; ?>">Policies and cookies</a></li>
							<?php $service = 'Services'; ?>
							<?php $taller = 'Workshop'; ?>
						</ul>
						<!-- end English -->
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				<h4 style="border-bottom: 1px solid #0000001a;padding: 12px;" class="accordion-toggle item-links" data-toggle="collapse" data-parent="#accordion-footer" href="#panel2">Servicios<span class="separator-arrow" ><i class="fa fa-caret-down fa-1x"></i></span></h4>
			</div>
		</div>
		<div id="panel2" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="col-md-2 col-sm-auto wow">

					<ul>
						<?php $categories = get_categories( array('taxonomy' => 'Servicios','hide_empty' => false,'orderby' => 'name','order' => 'DES'));?>
						<?php foreach ($categories as $category):?>
							<li><a href="<?php echo get_term_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					<h4 style="border-bottom: 1px solid #0000001a; padding: 12px;" class="accordion-toggle item-links" data-toggle="collapse" data-parent="#accordion-footer" href="#panel3">Taller<span class="separator-arrow" ><i class="fa fa-caret-down fa-1x"></i></span></h4>
				</div>
			</div>
			<div id="panel3" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="col-md-2 col-sm-auto wow">

						<ul>
							<?php $the_query = new WP_Query('post_type=capacidades&order=ASC'); ?>
							<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

								<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; ?>

							<?php if($currentlang=="es-ES"):?>
								<!-- español-->
								<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>">Programar cita</a></li>
								<!-- end español -->
							<?php else: ?>
								<!-- english -->
								<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab3'; ?>">Schedule Appointment</a></li>
								<!-- end English -->
							<?php endif; ?>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				<h4 style="border-bottom: 1px solid #0000001a;padding: 12px;" class="accordion-toggle item-links" data-toggle="collapse" data-parent="#accordion-footer" href="#panel4">Contacto y Soporte<span class="separator-arrow" ><i class="fa fa-caret-down fa-1x"></i></span></h4>
			</div>
		</div>
		<div id="panel4" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="col-md-3 col-sm-auto wow">
					<ul>
						<?php if($currentlang=="es-ES"):?>
							<!-- español-->
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab5'; ?>" title="">Directorio Corporativo</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab2'; ?>" title="">Trabaje con Nosotros</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>" title="">Proveedores</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab1'; ?>" title="">Cotizar Servicios</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>" title="">PQRS</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab3'; ?>" title="">Hablar con un asesor</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>" title="">Preguntas frecuentes</a></li>
							<!-- end español -->
						<?php else: ?>
							<!-- english -->
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab5'; ?>" title="">Corporate Directory</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab2'; ?>" title="">Work With Us</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab4'; ?>" title="">Suppliers</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab1'; ?>" title="">Quote Service</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab7'; ?>" title="">Quality Survey</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda/#tab3'; ?>" title="">Talk to an agent</a></li>
							<li><a href="<?php echo bloginfo('url').'/index.php/ayuda#tab6'; ?>" title="">FAQ</a></li>
							<!-- end English -->
						<?php endif; ?>
					</ul>
				</div>
				<!-- end English -->

			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">
				<h4 style="border-bottom: 1px solid #0000001a;padding: 12px;font-size: 15px;color: #000;font-family: 'Ubuntu', sans-serif;font-weight: bold;" class="accordion-toggle item-links" data-toggle="collapse" data-parent="#accordion-footer" href="#panel6">Proyectos<span class="separator-arrow" ><i class="fa fa-caret-down fa-1x"></i></span></h4>
			</div>
		</div>
		<div id="panel6" class="panel-collapse collapse">
			<div class="panel-body">
				<div class="col-md-2 col-sm-auto wow">
					<?php if($currentlang=="es-ES"):?>
						<!-- Español-->
						<h4>Proyectos Realizados</h4>
						<h4>Noticias y Eventos</h4>
						<!-- End Español -->
					<?php else: ?>
						<!-- English -->
						<h4>Successful Projects</h4>
						<h4>News and Events</h4>
						<!-- End English -->
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<style type="text/css">
.separator-arrow{
	margin: 0 4px;
}
</style>

<script type="text/javascript">

	$(document).ready(function(){
// Event capture click to the Collections item
$(".item-links").click(function() {
	if ($(this).find('i').hasClass('fa-caret-down')){
		$(this).find('i').removeClass('fa-caret-down').addClass('fa-caret-up');
	}else{
		$(this).find('i').removeClass('fa-caret-up').addClass('fa-caret-down');
	}
});
});



</script>


<!---*****************************************************************************-->

<div class="container-fluid ">
	<div class="row">
		<div style="width: 100%">
			<div class="copy">
				<?php if($currentlang=="es-ES"):?>
					<!-- español-->
					<p> Copyright Astivik 2018 | Diseño de sitio web inteligente por: <a href="www.grupobrieva.com"> www.grupobrieva.com 2018 </a> | Desarrollo <a href="www.slicegroup.xyz"> www.slicegroup.xyz</a> | Fuentes de Google Fonts | Diseño en: Bootstrap </p>
					<!-- end español -->
				<?php else: ?>
					<!-- english -->
					<p> Copyright Astivik 2018 | Intelligent website design by: <a href="www.grupobrieva.com"> www.grupobrieva.com 2018 </a> | Developed by <a href="www.slicegroup.xyz"> www.slicegroup.xyz</a> | Google Fonts | Designed with: Bootstrap </p>
					<!-- end English -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!---*****************************************************************************-->
<script>

	$(".openpanel").on("click", function() {
		$("#panel6").collapse('show');
	});
	$(".closepanel").on("click", function() {
		$("#panel6").collapse('hide');
	});

	$('#accordion-footer').on('show.bs.collapse', function () {
		$('#accordion-footer .in').collapse('hide');
	});
</script>
<!---*****************************************************************************-->





</footer>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.14.0/lazyload.min.js"></script>
<script>
// $(function() {
//     $("img.lazy").lazyload({effect : "fadeIn"});
// });

var myLazyLoad = new LazyLoad({
	elements_selector: ".lazy"
});

</script>
</body>
</html>
