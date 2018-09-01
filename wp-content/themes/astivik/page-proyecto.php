<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php  $pages = get_pages();?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<div id="proyecto">
		<div class="proyectos">
			<?php $post_thumbnail_id = get_post_thumbnail_id();
			$url = wp_get_attachment_url( $post_thumbnail_id);?>
			<div class="container-fluid" style="background-image: linear-gradient(#fff,transparent),url(<?php echo $url;?>);
			height: 700px;
			background-position: bottom;
			background-size: cover;">
			<div class="txt-proyecto">
				<h1><?php the_title();?></h1>
				<?php $content = get_the_content();?>
			</div>
		</div>
	</div>
	<?php include ('ayuda.php') ?>
	<div id="proyecto-card">
		<div class="container">
			<div class="text-proyecto">
				<?php echo $content;?>
			</div>
			<div class="row">
				<?php $the_query = new WP_Query('post_type=proyectos&order=ASC'); ?> 
				<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
					<div class="col-md-4">
						<a href="<?php the_permalink(); ?>">
							<div class="card-proyecto">
								
								<img sizes="100vw" data-srcset="<?php the_post_thumbnail_url('480x200'); ?> 991w, <?php the_post_thumbnail_url('255x200'); ?> 767w, <?php the_post_thumbnail_url('482x200'); ?> 479w,<?php the_post_thumbnail_url('482x200'); ?>" class="lazy img-responsive" alt="<?php the_title(); ?>">
								<div class="card-txt list-none gray">
									<h4 class="color-azul"><?php the_title(); ?></h4>
									<ul>
										<?php if($currentlang=="es-ES"):?>
											<!-- español-->
											<li>fecha: <?php echo get_the_date(); ?></li>
											<li>Capacidad: <?php echo the_field('capacidad'); ?></li>
											<!--<li>Servicio: <?php //the_category(); ?></li>-->
											<!-- end español -->
										<?php else: ?>
											<!-- english -->
											<li>Date: <?php echo get_the_date(); ?></li>
											<li>Capacity: <?php echo the_field('capacidad'); ?></li>
											<!--<li>Service: <?php //the_category(); ?></li>	-->			
											<!-- end English -->
										<?php endif; ?>
									</ul>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

