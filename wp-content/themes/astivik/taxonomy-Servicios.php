<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php
// Listado de categorias
$categories = get_categories( array(
	'taxonomy' => 'Servicios',
	'hide_empty' => false,
	) );?>

	<?php // para las categorias $idcategoria = get_query_var('cat');?>
	<?php $idcategoria = get_queried_object()->term_id;//para las taxonomias ?>
	<?php foreach ($categories as $category):?>
		<?php if ($idcategoria == $category->term_id):?>

			<div id="servicio-general" class="cotizar">
				<div class="servicio">
					<div class="servicio" style="background-image: url(<?php echo the_field('imagen_del_banner', $category); ?>);
					height: 700px;
					background-position: bottom;
					background-size: cover;">

					<div class="txt-general txt-servicios contenido-p">
						<?php $contador = 0; ?>
						<?php $strings = explode (' ',$category->name);?>
						<?php $count_string = count($strings); ?>
						<?php $string_one = $string_two = ''; ?>
						<?php foreach ($strings as $string) {
							$contador++;
							if($contador < $count_string) {
								$string_one.= $string.' ';
							}else{
								$string_two.= $string.' ';
							}
						} ?>
						<h2><?php echo $string_one; ?><span><?php echo $string_two; ?></span></h2>
						<p><?php the_archive_description();//llama la descripcion de la categoria?></p>


					</div>
				</div>
			</div>
			<div class="col-md-12 otros-servicios"><p><a href="<?php echo bloginfo('url').'/index.php/servicios'?>">
				<?php if($currentlang=="es-ES"):?>
					<!-- español-->
					Ver otros servicios

					<!-- end español -->
				<?php else: ?>
					<!-- english -->
					See Other Services
					<!-- end English -->
				<?php endif; ?>
			</a></p></div>
			<?php include ('ayuda.php') ?>
			<!--************************************************section uno************************************************-->
			<section id="cotizar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">

							<h1><?php echo the_field('descripcion_del_contenido', $category); ?></h1>

							<div class="">
								<?php if($currentlang=="es-ES"):?>
									<!-- español-->
									<a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>"><button type="submit" class="btn  cita-boton">COTIZADOR DE SERVICIO</button></a>
									<!-- end español -->
								<?php else: ?>
									<!-- english -->
									<a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>"><button type="submit" class="btn  cita-boton">SERVICE QUOTE</button></a>
									<!-- end English -->
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6 img-cotizar">
							<img data-srcset="<?php echo the_field('imagen_del_contenido', $category); ?>" alt="" class="lazy img-responsive">
						</div>
					</div>
				</div>
			</section>
		</div>

		<!--************************************************bARCOS************************************************-->
		<section id="anuncio " class="embarcaciones">
			<?php if($currentlang=="es-ES"):?>
				<!-- Español-->
				<div class="container">
					<p class="color-azul">Tipos de embarcación con las que trabajamos</p>

					<!--************************************************BARCOS************************************************-->
					<?php include('render_barcos.php'); ?>
					<!--************************************************bARCOS END************************************************-->
					<a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>"><h5> ¿Tienes un proyecto especial? Contacta a operaciones</h5></a>

				</div>
				<!-- End Español -->
			<?php else: ?>
				<!-- English -->
				<div class="container">
					<p class="color-azul">Types of vessels we work with</p>

					<!--************************************************BARCOS************************************************-->
					<?php include('render_barcos.php'); ?>
					<!--************************************************bARCOS END************************************************-->
					<a href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>"><h5> Do you have a special project in mind? Contact an agent</h5></a>

				</div>
				<!-- End English -->
			<?php endif; ?>
		</section><!--************************************************bARCOS END************************************************-->
		<section id="capacidad" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/detalle-serv/02_bug_banner_proyectos_capacidades.jpg);   height: auto;
		background-position: center;
		background-size: cover;">
		<div class="capacidad-h">

			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<div class="txt-capacidad">
							<?php if($currentlang=="es-ES"):?>
								<!-- español-->
								<p class="color-naranja">Capacidad y alcance de Servicio de <?php echo $category->name; ?> Astivik</p>
								<!-- end español -->
							<?php else: ?>
								<!-- english -->
								<p class="color-naranja">Lifting Capacity and Service Scope of <?php echo $category->name; ?> Astivik</p>
								<!-- end English -->
							<?php endif; ?>

							<?php
							$args = array(
								'post_type' => 'capacidades',
								'posts_per_page' => 5,
								'tax_query' => array(
									array(
										'taxonomy' => 'Servicios',
										'field' => 'slug',
										'terms' => $category->slug
									))
							);
							$loop = new WP_Query( $args );
							if ($loop -> have_posts()) : while( $loop -> have_posts() ) : $loop -> the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<a class="contenido-a" href="<?php the_permalink(); ?>">

								<div class="content-description">
									<?php the_field('descripcion_del_contenido'); ?>
								</div>
							</a>
						<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="col-md-6">
					<?php if($currentlang=="es-ES"):?>
						<!-- español-->
						<a class="margin" href="<?php echo bloginfo('url').'/index.php/tipo_proyectos/'.$category->slug; ?>"><button type="submit" class="btn  capacidad-boton">Ver ultimos proyectos de <?php echo $category->name; ?></button></a>
						<!-- end español -->
					<?php else: ?>
						<!-- english -->
						<a class="margin" href="<?php echo bloginfo('url').'/index.php/tipo_proyectos/'.$category->slug; ?>"><button type="submit" class="btn  capacidad-boton">See Last Projects of  <?php echo $category->name; ?></button></a>
						<!-- end English -->
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

</section>
<section id="proyectos">
	<div class="container">

		<div class="txt-proyectos">
			<?php if($currentlang=="es-ES"):?>
				<!-- español-->
				<h4>Astivik Shipyard cuenta con <span class="color-negro">4 Diques flotantes y 2 trojas</span> de alto rendimiento </h4>
				<h4>con capacidades diferentes, buscando atender diferentes proyectos</h4>
				<p class="color-negro texto-capacidad"><span class="color-azul ">Capacidad de levante de</span> Astivik Shipyard-Diques</p>
				<!-- end español -->
			<?php else: ?>
				<!-- english -->
				<h4>Astivik Shipyard has<span class="color-negro texto-capacidad"> 4 floating docks and 2 high performance docks</span> for small vessels </h4>
				<h4>with different capacities, with an aim at offering support to different types of projects</h4>
				<p class="color-negro texto-capacidad"><span class="color-azul">Lifting Capacity</span> Astivik Shipyard-Floating Docks</p>
				<!-- end English -->
			<?php endif; ?>

		</div>
		<div class="row">
			<?php $the_query = new WP_Query('post_type=diques&order=ASC'); ?>
			<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

				<div class="col-md-3">
					<div class="img-proyecto">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php $pag_name = get_the_title(); ?>
					<?php $title = explode (' ',$pag_name);?>
					<h1 class="color-azul"><?php echo $title[0]; ?><span><?php echo $title[1]; ?></span></h1>
					<div class="text-proyecto">
						<?php if($currentlang=="es-ES"):?>
							<!-- español-->
							<p>Capacidad: <span><?php echo the_field('capacidad').' ton.'; ?></span></p>
							<p>Eslora: <span></span><?php echo the_field('eslora').' mts.'; ?></p>
							<p>Manga interna: <span></span><?php echo the_field('manga_interna').' mts.'; ?></p>
							<!-- end español -->
						<?php else: ?>
							<!-- english -->
							<p>Capacity: <span><?php echo the_field('capacidad').' ton.'; ?></span></p>
							<p>Lenght: <span></span><?php echo the_field('eslora').' mts.'; ?></p>
							<p>Beam: <span></span><?php echo the_field('manga_interna').' mts.'; ?></p>
							<!-- end English -->
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<?php if($currentlang=="es-ES"):?>
			<!-- español-->
			<p class="color-negro texto-capacidad" style="padding: 25px 40px;"><span class="color-azul">Capacidad de levante de</span> Astivik Shipyard-Trojas</p>
			<!-- end español -->
		<?php else: ?>
			<!-- english -->
			<p class="color-negro texto-capacidad"  style="padding: 25px 40px;"><span class="color-azul">Lifting Capacity</span> Astivik Shipyard-Dry Docks</p>
			<!-- end English -->
		<?php endif; ?>
		<div class="centrado_2">
			<div class="row">
				<?php $the_query = new WP_Query('post_type=trojas&order=ASC'); ?>
				<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
					<?php $pag_troja = get_the_title(); ?>
					<?php $title = explode (' ',$pag_troja);?>
					<div class="col">
						<div class="img-proyecto">
							<?php the_post_thumbnail() ?>
						</div>

						<h1 class="color-azul"><?php echo $title[0].' '; ?><span class="span-naranja"><?php echo $title[1].$title[2]; ?></span></h1>
						<div class="text-proyecto">
							<?php if($currentlang=="es-ES"):?>
								<!-- español-->
								<p>Calado Máximo Popa: <span><?php echo the_field('calado_maximo_popa').' mts.'; ?></span></p>
								<p>Capacidad: <span><?php echo the_field('capacidad').' ton.'; ?></span></p>
								<p>Eslora Máxima: <span><?php echo the_field('eslora_maxima').' mts.'; ?></span></p>
								<p>Manga Máxima: <span><?php echo the_field('manga_maxima').' mts.'; ?></span></p>
								<!-- end español -->
							<?php else: ?>
								<!-- english -->
								<p>Maximum Draft <span><?php echo the_field('calado_maximo_popa').' mts.'; ?></span></p>
								<p>Capacity: <span><?php echo the_field('capacidad').' ton.'; ?></span></p>
								<p>Maximum Lenght: <span><?php echo the_field('eslora_maxima').' mts.'; ?></span></p>
								<p>Maximum Beam: <span><?php echo the_field('manga_maxima').' mts.'; ?></span></p>
								<!-- end English -->
							<?php endif; ?>

						</div>
					</div>
				<?php endwhile; endif; ?>
				<div class="col-md-6">
				</div>
			</div>
		</div>

	</section>
	<?php break;endif; ?>
<?php endforeach; ?>
<?php get_footer(); ?>
