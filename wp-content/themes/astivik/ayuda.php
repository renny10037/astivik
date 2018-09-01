<div class="container ayudaa">
	<?php $currentlang = get_bloginfo('language'); ?>
	<div class="ayuda-txt">
		<p>
			<?php if($currentlang=="es-ES"):?>
				<!-- español-->
				<a href="#" class="ayuda">¿Necesitas ayuda?</a>				
				<!-- end español -->
			<?php else: ?>
				<!-- english -->	
				<a href="#" class="ayuda">Do you need help?</a>			
				<!-- end English -->
			<?php endif; ?>
		</p>
	</div>
	<div class="about-icons" id="about-icons">
		<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab1'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ayuda/02_cotizador_icon.png" alt=""></a>
		<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab1'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ayuda/03_agendar_icon.png"></a>
		<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab3'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ayuda/04_asistencia_icon.png"> </a>
		<a class="buscador-icono" data-toggle="modal" data-target="#modal-search">
			<div id="container">
				<form role="search" method="get" id="searchform" action="">
					<label for="s" >
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/lupa.png">
					</label>
					<input type="text" value="" placeholder="Buscar" class="input-search" id="s" />
				</form>
			</div>
		</a>
	</div>
</div>
<script>
	$search.addEventListener('click', openAbout);
	$search.addEventListener('blur', closeAbout, true);
</script>
<!-- Button trigger modal -->
<div class="modal fade" id="modal-search"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content modal-content-custom">
			<div class="modal-body">
				<div class="box-modal">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/02_buscador_inteligente.png" alt="">
					<div class="content-info" >
						<div class="search-ayuda">
							<div class="container">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
										<?php if($currentlang=="es-ES"):?>
											<!-- español-->
											<h4>buscador inteligente astivik</h4>
											<h1>¿en qué te </h1>
											<h1>ayudamos?</h1>
											<?php $question = 'Introduzca una pregunta' ?>

											<!-- end español -->
										<?php else: ?>
											<!-- english -->	
											<h4>Smart Search</h4>
											<h1>What can we </h1>
											<h1>help you with?</h1>
											<?php $question = 'Enter a question' ?>
											<!-- end English -->
										<?php endif; ?>
										<select class="js-example-basic-single" name="state"onchange="window.location.href=this.value;">
											<option selected disabled><?php echo $question; ?></option>
											<?php $the_query = new WP_Query('post_type=search&order=ASC'); ?>
											<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
												<option value="<?php the_permalink(); ?>"><?php the_title();?></option>
											<?php endwhile; endif; ?>

										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
.select2{
	width: auto !important;
}
.select2-container{
	width: 100% !important;
}
</style>
<script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
	$('.js-example-basic-single').select2();
});
</script>
