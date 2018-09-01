<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<div id="servicio-general" class="cotizar">
	<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
		<?php $post_thumbnail_id = get_post_thumbnail_id();
		$url = wp_get_attachment_url( $post_thumbnail_id);?>
		<div class="servicio">
			<div class="servicio" style="background-image: url(<?php echo $url; ?>);
			height: 600px;
			background-position: bottom;
			background-size: cover;">
			<div class="txt-general contenido-p">
				<h2><span><?php the_title(); ?></span></h2>
				<p><?php the_content(); ?></p>
				<?php $description_agendar = get_field('descripcion_agendar'); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php include ('ayuda.php') ?>
<!--************************************************section uno************************************************-->
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<section id="cotizar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 cap-detalle">
					<?php if($currentlang=="es-ES"):?>
						<!-- español-->
						<?php echo $description_agendar; ?>
						<div class="">
							<a href="#cotizador"><button type="submit" class="btn  cita-boton">COTIZADOR DE SERVICIO</button></a>
						</div>
						<!-- end español -->
					<?php else: ?>
						<!-- english -->
						<?php echo $description_agendar; ?>
						<div class="">
							<a href="#cotizador"><button type="submit" class="btn  cita-boton">SERVICE QUOTE</button></a>
						</div>
						<!-- end English -->
					<?php endif; ?>
				</div>
				<div class="col-md-6 img-cotizar">
					<img data-srcset ="<?php echo the_field('imagen_agendar');?>" alt="capacidades" class="lazy img-responsive">
				</div>
			</div>
		</div>
	</section>
</div>
<section id="capacidad" class="sect-clientes" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/02_banner_opinion_clientes.jpg);    background-repeat: no-repeat;  width: 100%;;background-size: cover; position:relative;">
	<div class="mask-cliente"></div>
	<div class=" clientes">
		<div class="row">
			<?php if($currentlang=="es-ES"):?>
				<!-- español-->
				<div class="col-md-6 order-2 order-md-1">
					<a href=""><button type="submit" class="btn  capacidad-boton ">Ver proyecto</button></a>
				</div>
				<div class="col-md-6 order-1 order-md-2">
					<div class="txt-clientes">
						<h3>Opinión de <span>clientes</span></h3>
						<p class="color-naranja">Experiencia en <?php the_title(); ?></p>
						<p><?php echo the_field('opinion_del_cliente'); ?></p>
					</div>
				</div>
				<!-- end español -->
			<?php else: ?>
				<!-- english -->
				<div class="col-md-6">
					<a href="<?php echo the_field('proyecto'); ?>"><button type="submit" class="btn  capacidad-boton ">See Project</button></a>

				</div>
				<div class="col-md-6">
					<div class="txt-clientes">
						<h3>Customers' <span>Opinion</span></h3>
						<p class="color-naranja">Experience at  <?php the_title(); ?></p>
						<p><?php echo the_field('opinion_del_cliente'); ?></p>
					</div>
				</div>
				<!-- end English -->
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>

<div class="container otros-server" style="font-size: 1.6rem;padding-top: 20px;">
	<?php if($currentlang=="es-ES"):?>
		<!-- español-->
		<h3 class="color-naranja" style="">Otros Servicios</h3>
		<p>Con 45 años de experiencia conocemos las exigencias y nececidades de nuestros </p>
		<p>clientes, teniendo en cuenta los estándares de calidad y certificaciones. También </p>
		<p>le puede interesar.</p>
		<!-- end español -->
	<?php else: ?>
		<!-- english -->
		<a href="<?php echo bloginfo('url').'/index.php/servicios/otros-servicios/'; ?>" class="color-naranja">Other Services</a>
		<p>After 45 years of experience we know the demands and needs of our clients,</p>
		<p>taking into account the quality standards and certifications.</p>
		<p>You may also be interested</p>
		<!-- end English -->
	<?php endif; ?>
</div>


<!--************************************************SERVICIO************************************************-->
<?php include('render_servicios.php'); ?>
<!--************************************************SERVIVIO END************************************************-->

<!--************************************************FORMULARIO************************************************-->

<div id="cotizador" style="padding-top: 5px;">

	<section   id="formulario">
		<div class="container">
			<div class="txt-formulario">
				<?php if($currentlang=="es-ES"):?>
					<!-- español-->
					<p class="color-naranja">Cotizador de servicio</p>
					<h1>Cotiza y agenda tu próxima <span>subida a dique</span> </h1>
					<p>Estamos para atender su necesidad y trabajar en su proyecto. llene los campos a continuacion</p>
					<p>recibirá informacion de su servicio</p>
					<!-- end español -->
				<?php else: ?>
					<!-- english -->
					<p class="color-naranja">Service Quote</p>
					<h1>Schedule your next<span>docking</span> </h1>
					<p>We're here to attend your need and to work in your project. fill the following form</p>
					<p>and you'll receive information about your service</p>
					<!-- end English -->
				<?php endif; ?>
			</div>
			<div class="formulario-servicio">

				<form>
					<?php echo do_shortcode('[formidable id=5]'); ?>
				</form>
			</div>
		</div>
		<div class="img-form img-form2 d-none d-md-block">
			<img data-srcset ="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
		</div>


	</section>
	<!--<a href="<?php //echo 'whatsapp://send?text='.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Whatsapp</a>-->
	<!--************************************************FORMULARIO************************************************-->
</div>
<?php get_footer(); ?>
<style>
.cap-detalle ul{
	list-style: initial !important;
}
</style>
<script>
	$(document).ready(function(){
		$("a").click(function(event) {
// Make sure this.hash has a value before overriding default behavior
if (this.hash !== "") {
// Prevent default anchor click behavior
event.preventDefault();

// Store hash
var hash = this.hash;

// Using jQuery's animate() method to add smooth page scroll
// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
$('html, body').animate({
	scrollTop: $(hash).offset().top - 50
}, 1500, function(){
// Add hash (#) to URL when done scrolling (default click behavior)
window.location.hash = hash;
});
} // End if
});

	});
</script>