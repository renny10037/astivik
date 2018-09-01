<?php get_header(); ?>

<?php 
// Listado de categorias
$categories = get_categories( array(
	'orderby' => 'name',
	'order'   => 'DES',
	'posts_per_page' => 1
	) );?>
	<?php $idcategoria = get_query_var('cat');?>
	<?php foreach ($categories as $category):?>
		<?php if ($idcategoria == $category->term_id):?>
			<div id="servicio-general" class="cotizar">
				<div class="servicio">
					<div class="servicio" style="background-image: linear-gradient(#fff,transparent),url(<?php echo the_field('imagen_del_banner', $category); ?>);
					height: auto;
					background-position: bottom;
					background-size: cover;">

					<div class="txt-general contenido-p">
						<?php $contador = 0; ?>
						<?php $strings = explode (' ',$category->name);?>
						<?php $count_string = count($strings); ?>
						<?php $string_one = $string_two = ''; ?>
						<?php foreach ($strings as $string) {
							$contador++;
							if ($count_string == 1) {
								$string_one = $string.' ';
							}elseif($contador < $count_string) {
								$string_one = $string.' ';
							}else{
								$string_two = $string.' ';
							}
						} ?>
						<h2><?php echo $string_one; ?><span><?php echo $string_two; ?></span></h2>
						<p><?php the_archive_description();//llama la descripcion de la categoria?></p>


					</div>
				</div>
			</div>
			<?php include ('ayuda.php') ?>
			<!--************************************************section uno************************************************-->
			<section id="cotizar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							
							<h1><?php echo the_field('descripcion_del_contenido', $category); ?></h1>

							<div class="">
								<a href=""><button type="submit" class="btn  cita-boton">COTIZADOR DE SERVICIO</button></a>
							</div>
						</div>
						<div class="col-md-6 img-cotizar">
							<img src="<?php echo the_field('imagen_del_contenido', $category); ?>" alt="">
						</div>
					</div>
				</div>
			</section>
		</div>

		<!--************************************************bARCOS************************************************-->
		<section id="anuncio " class="embarcaciones">
			<div class="container">
				<h4 class="color-azul">Embarcaciones que reparamos</h4>
				<div class="row anuncios conatiner">
					<div class="col-md-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/06_icon1_embarcacion.png" alt="">
						<p>Barcazas</p>
					</div>
					<div class="col-md-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/06_icon2_embarcacion.png" alt="">
						<p>Tanqueros</p>
					</div>
					<div class="col-md-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/07_icon3_embarcacion.png" alt="">
						<p>Remolcadores</p>
					</div>
					<div class="col-md-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/08_icon4_embarcacion.png" alt="">
						<p>Dragas</p>
					</div>
					<div class="col-md-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/09_icon5_embarcacion.png" alt="">
						<p>Supply Vessel</p>
					</div>
					<div class="col-md-2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/10_icon6_embarcacion.png" alt="">
						<p>Jack Up</p>
					</div>
					<a href="">tienes un proyecto especial? Contacta operaciones</a>
				</div>

			</div>
		</section><!--************************************************bARCOS END************************************************-->
		<section id="capacidad">
			<div class="capacidad-h">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-serv/02_bug_banner_proyectos_capacidades.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-6">

							<div class="txt-capacidad">
								<p class="color-naranja">Capacidad y alcance de Servicio Reparación Astivik</p>
								
								<?php		
								$args = array(
									'post_type' => 'capacidades',
									'category_name' => $category_name,
									'posts_per_page' => 3,
									'orderby' => 'DES'
								);
								$loop = new WP_Query( $args );
								if ($loop -> have_posts()) : while( $loop -> have_posts() ) : $loop -> the_post(); ?> 
								<h1><?php the_title(); ?></h1>
								
								<a class="contenido-a" href="<?php the_permalink(); ?>">
									
									
									<?php the_content(); ?>
								</a>
							<?php endwhile; endif; ?>
						</div>
					</div>
					<div class="col-md-6">

						<a href=""><button type="submit" class="btn  capacidad-boton">Ver ultimos proyectos de reparacion</button></a>
						
					</div>
				</div>

			</div>	
		</div>
		
	</section>
	<section id="proyectos">
		<div class="container">
			<div class="txt-proyectos">
				<h4>Astivik Shipyard cuenta con <span class="color-negro">4 Diques flotantes y 2 trojas</span> de alto rendimiento </h4>
				<h4>con capacidades diferentes, buscando atender diferentes proyectos</h4>
				<p class="color-negro"><span class="color-azul">Capacidad de levante de</span> Astivik Shipyard-Diques</p>
			</div>
			<div class="row">
				
				<?php $the_query = new WP_Query('post_type=diques&order=ASC'); ?> 
				<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?> 
					
					<div class="col-md-3">
						<div class="img-proyecto">
							<?php the_post_thumbnail(); ?>
						</div>
						<h1 class="color-azul"><?php the_title(); ?><span></span></h1>	
						<div class="text-proyecto">
							<p>Capacidad: <span><?php echo the_field('capacidad').' ton.'; ?></span></p>
							<p>Eslora: <span></span><?php echo the_field('eslora').' mts.'; ?></p>
							<p>Manga interna: <span></span><?php echo the_field('manga_interna').' mts.'; ?></p>
						</div>
					</div>
				<?php endwhile; endif; ?>
				

				<div class="">
					<p class="color-negro textoo"><span class="color-azul">Capacidad de levante de</span> Astivik Shipyard-Diques</p>
					<div class="row">
						<?php $the_query = new WP_Query('post_type=trojas&order=ASC'); ?> 
						<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?> 
							<div class="col-md-6">
								<div class="img-proyecto">
									<?php the_post_thumbnail() ?>
								</div>
								<h1 class="color-azul"><?php the_title(); ?></h1>
								<div class="text-proyecto">
									<p>Calado Máximo Popa: <span><?php echo the_field('calado_maximo_popa').' mts.'; ?></span></p>
									<p>Capacidad: <span><?php echo the_field('capacidad').' ton.'; ?></span></p>
									<p>Eslora Máxima: <span><?php echo the_field('eslora_maxima').' mts.'; ?></span></p>
									<p>Manga Máxima: <span><?php echo the_field('manga_maxima').' mts.'; ?></span></p>
								</div>
							</div>
						<?php endwhile; endif; ?>
						<div class="col-md-6">
							
						</div>
					</div>

				</div>
			</div>
		</section>
		<?php break;endif; ?>
	<?php endforeach; ?>	
	<?php get_footer(); ?>