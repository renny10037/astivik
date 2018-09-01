<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php $contador= 0;
$string_one = $string_two = '';?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>

	<?php $pag_name = get_the_title(); ?>
	<div id="about">
		<div class="about">
			<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
			$url = wp_get_attachment_url( $post_thumbnail_id);?>
			<div  style="background-image: url(<?php echo $url; ?>);
			height: 700px;
			background-position: bottom;
			background-size: cover;">
		<?php endwhile; endif; ?>
		<?php $pag_name = get_the_title(); ?>
		<?php $strings = explode (' ',$pag_name);?>
		<?php $count_string = round((count($strings)/2)); ?>
		<?php foreach ($strings as $string) {
			if($contador < $count_string) {
				$string_one.= $string.' ';
			}else{
				$string_two.= $string.' ';
			}
			$contador++;
		} ?>

		<div class="txt-about contenido-p">
			<h1> <span class="color-azul"><?php echo $string_one; ?></span><?php echo $string_two; ?></h1>
			<p> <span class="color-negro"><p><?php the_content(); ?></span></p>
		</div>
	</div>
	<?php include ('ayuda.php') ?>
	<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
		<section id="quienes-somos">
			<div class="quienes-somos seguridad">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="comparte ">
								<?php if($currentlang=="es-ES"):?>
									<!-- español-->
									<p>Comparte</p>
									<!-- end español -->
								<?php else: ?>
									<!-- english -->
									<p>Share</p>
									<!-- end English -->
								<?php endif; ?>
								<div class="iconos-comparte">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"> <i class="fa fa-facebook fa-2x "></i></a>
									<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"> <i class="fa fa-linkedin fa-2x "></i></a><span>

									</div>

								</div>
							</div>
							<div class="col-md-6 contenido-p">
								<?php echo get_field('descripcion_de_seguridad',get_the_ID()); ?>
							</div>
							<div  class="col-md-6">
								<img data-srcset="<?php echo get_field('imagen_de_seguridad',get_the_ID()) ?>" alt="" class="lazy img-responsive">
							</div>
						</div>
					</div>
				</div>
			</section >
			<section id="seguridad-info" style="background-image: url(<?php echo the_field('imagen_naturaleza')?>);
			width: 100%;height: 100vh;background-size: cover; position: relative;">
			<div class="mask-seguridad"></div>

			<div class="text-seguridad contenido-p" style="margin-top: 100px; width: 32%;">
				<?php echo the_field('descripcion_naturaleza'); ?>
			</div>
		</section>
	</div>
	<section id="seguridad-informativa">
		<div class="container">
			<?php if($currentlang=="es-ES"):?>
				<!-- Español-->
				<h2 class="color-naranja gestion-ambiente">Gestión ambiental</h2>
				<p>Conocemos el impacto de nuestros servicios en el <span class="color-azul">medio ambiente</span>,<br> por esa razón nuestro equipo se esfuerza al máximo para además de mitigar dichos impactos,<br> compensarlos con planes que nos permitan <b>salvaguardar nuestro planeta</b></p>
				<!-- End Español -->
			<?php else: ?>
				<!-- English -->
				<h2 class="color-naranja gestion-ambiente">Environmental Management</h2>
				<p>We are aware of the impact of our services may cause on <span class="color-azul">the environment;</span>,<br> for that reason, our team makes every effort to mitigate such possible impacts and respond<br> with plans that allow us <b>to safeguard the enviroment.</b></p>
				<!-- End English -->
			<?php endif; ?>
			<br>
			<div class="row">
				<!-- columna1-->
				<div class="col-md-4">
					<div class="seguridad-img">
						<img data-srcset="<?php echo the_field('imagen_columna_1');?>" alt="Imagen Columna1" class="lazy img-responsive">
					</div>
					<div class="excerpt">
						<h5 class="color-naranja">
							<span>
								<img style="width: 30px;
								height: 30px;" src="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt="" class="lazy img-responsive">
							</span><?php echo the_field('titulo_columna_1');?>
						</h5>
						<p><?php echo the_field('descripcion_columna_1');?></p>
					</div>
				</div>
				<!-- end columna1-->
				<!-- columna2-->
				<div class="col-md-4">
					<div class="seguridad-img">
						<img data-srcset="<?php echo the_field('imagen_columna_2');?>" alt="Imagen Columna2" class="lazy img-responsive">
					</div>
					<div class="excerpt">
						<h5 class="color-naranja">
							<span>
								<img style="width: 30px;
								height: 30px;" src="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt="" class="lazy img-responsive">
							</span><?php echo the_field('titulo_columna_2');?>
						</h5>
						<p><?php echo the_field('descripcion_columna_2');?></p>
					</div>
				</div>
				<!-- end columna2-->
				<!-- columna3-->
				<div class="col-md-4">
					<div class="seguridad-img">
						<img data-srcset="<?php echo the_field('imagen_columna_3');?>" alt="Imagen Columna3" class="lazy img-responsive">
					</div>
					<div class="excerpt">
						<h5 class="color-naranja">
							<span>
								<img style="width: 30px;
								height: 30px;" src="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt="" class="lazy img-responsive">
							</span><?php echo the_field('titulo_columna_3');?>
						</h5>
						<p><?php echo the_field('descripcion_columna_3');?></p>
					</div>
				</div>
				<!-- end columna3-->
			</div>
			<div class="comunicar">
				<?php if($currentlang=="es-ES"):?>
					<!-- Español-->
					<p class="color-negro"><span class="color-azul">Puedes comunicarte con el equipo de </span>control ambiental de Astivik Shipyard escribiendo a <span class="color-azul">comunicaciones@astivik.com.co</span></p>
					<!-- End Español -->
				<?php else: ?>
					<!-- English -->
					<p class="color-negro"><span class="color-azul">You can talk to Astivik Shipyard's </span>enviromental control team at <span class="color-azul">comunicaciones@astivik.com.co</span></p>
					<!-- End English -->
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>