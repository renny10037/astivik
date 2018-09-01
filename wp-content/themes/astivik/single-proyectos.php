<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<div id="detalle-proyecto">
		<div class="dt-proyect">
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endwhile; endif; ?>
	<?php include ('ayuda.php') ?>
	<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
		<div class="container">
			<div class="txt-detalle-pro list-none">
				<div class="container">
					<h1><?php the_title(); ?></h1>
					<h2><?php the_category(); ?></h2>
					<div class="row">
						<div class="col-sm-6">
							<?php the_content(); ?>
							<?php echo the_field('descripcion_2'); ?>
						</div>
						<div class="col-sm-6">
							<div id="demo" class="carousel slide" data-ride="carousel">

								<?php 
								$gallery = 0;
								$images = get_field('slider_proyecto');

								if( $images ): ?>
								<ul>
									<div class="carousel-inner">
										<?php foreach( $images as $image ): ?>
											<?php $gallery++; ?>
											<?php if ($gallery == 1): ?>
												<div class="carousel-item active">
													<img data-srcset="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="lazy img-responsive">
												</div>
											<?php else: ?>
												<div class="carousel-item">
													<img data-srcset="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="lazy img-responsive">
												</div>
											<?php endif; ?>
											
										<?php endforeach; ?>
									</div>
								</ul>
							<?php endif; ?>

							<!-- The slideshow -->
							<style>
							
						</style>
						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<section class="testimonio" style="margin-top: 3em;">
	<div class="container">
		<?php if($currentlang=="es-ES"):?>
			<!-- español-->
			<h2>Testimonio del <span>cliente</span></h2>							
			<!-- end español -->
		<?php else: ?>
			<!-- english -->
			<h2>Customers' <span>Testimony</span></h2>		
			<!-- end English -->
		<?php endif; ?>
		<?php echo the_field('testimonio'); ?>
	</div>
</section>
</div>
<!--<a href="<?php //echo 'whatsapp://send?text='.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Whatsapp</a>-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>