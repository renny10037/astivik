<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php $contador= 0; 
$string_one = $string_two = '';?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<div id="proyecto">
		<div class="proyectos">
			<?php $post_thumbnail_id = get_post_thumbnail_id();
			$url = wp_get_attachment_url( $post_thumbnail_id);?>
			<div class="container-fluid" style="background-image: linear-gradient(#fff,transparent),url(<?php echo $url; ?>);
			height: 700px;
			background-position: bottom;
			background-size: cover;">
			<div class="txt-proyecto">
				<h1><?php the_title();?></h1>
			</div>
			<!-- 		<?php //include ('ayuda.php') ?> -->
		</div>
	</div>

	<div id="proyecto-card">
		<div class="container">
			<div class="text-proyecto">
				<?php the_content();?>
			</div>
			<div class="row">
				<?php $the_query = new WP_Query('category_name=noticias&post_type=post&order=ASC'); ?> 
				<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						<a href="<?php the_permalink(); ?>">
							<div class="card-proyecto">
								<?php the_post_thumbnail() ?>
								<div class="card-txt">
									<h4 class="color-azul"><?php the_title(); ?></h4>
									<ul>
										<?php if($currentlang=="es-ES"):?>
											<!-- español-->
											<li>fecha: <?php echo get_the_date(); ?></li>		
											<!-- end español -->
										<?php else: ?>
											<!-- english -->
											<li>Date: <?php echo get_the_date(); ?></li>
											<!-- end English -->
										<?php endif; ?>
										<li><p><?php the_excerpt(); ?></p></li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; endif; ?>		
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
