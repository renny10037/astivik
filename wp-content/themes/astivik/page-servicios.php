<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php $contador= 0;
$string_one = $string_two = '';?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<?php $pag_name = get_the_title(); ?>
	<div id="servicio-general">
		<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
		$url = wp_get_attachment_url( $post_thumbnail_id);?>
		<div class="servicio" style="background-image: linear-gradient(#fff,transparent),url(<?php echo $url;?>);
		height: 700px;
		background-position: bottom;
		background-size: cover;">

		<div class="txt-general">

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
			<h2><span><?php echo $string_one; ?></span><?php echo $string_two; ?></h2>

			<p><?php the_content(); ?></p>

		</div>
	</div>
	<?php include ('ayuda.php') ?>

	<section  class="servico-card ">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php if($currentlang=="es-ES"):?>
						<!-- español-->
						<H1>Estos son los servicios que astivik Shipyard ofrece, <br>Haga clic en la imagen del servicio que más le interese <br>y encuentra descripcion con más detalle.</H1>

						<p>Si desea agendar una cita para subir a dique</p>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda#tab3'; ?>">haga clic aquí</a>
						<!-- end español -->
					<?php else: ?>
						<!-- english -->
						<H1>Astivik Shipyard performs the following services. <br>Click on the picture of the service you require.</H1>

						<p>If you want to schedule an appointment for docking</p>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda#tab3'; ?>">Click Here</a>
						<!-- end English -->
					<?php endif; ?>
				</div>
				<!--************************************************cARDS************************************************-->
				<div class="col-md-6" style="margin-top: -30px;">
					<div class="cards">
						<div class="row">
							<?php
// Listado de categorias
							$categories = get_categories( array(
								'taxonomy' => 'Servicios',
								'hide_empty' => false,
								'orderby' => 'name',
								'order'   => 'DES',
								'posts_per_page' => 7
							) );
							?>
							<?php $idcategoria = get_query_var('cat');?>
							<?php  $idcategoria; ?>

							<?php foreach ($categories as $category):?>
								<?php if ($category->term_id != 15): ?>
									<div class="col-md-6 title-cards" id="servicio">
										<div>
											<a href="<?php echo get_term_link( $category->term_id ); ?>">
												<div class="img-contenedor">
													<img data-srcset="<?php echo the_field('imagen_del_servicio', $category); ?>" alt="" class="lazy img-responsive">
												</div></a>
												<h3><?php echo $category->name; ?></h3>
											</div>
										</div>
									<?php endif ?>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<!--************************************************ ENDcARDS************************************************-->
			</div>
		</section>
	<?php endwhile; endif; ?>
	<?php get_footer(); ?>
