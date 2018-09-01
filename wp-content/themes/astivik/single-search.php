<?php get_header(); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<div id="detalle-proyecto">
		<div class="dt-proyect">
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
		</div>
		<!-- <?php //include ('ayuda.php') ?> -->
		<div class="container" style=" padding: 4rem 0;">
			<div class="txt-detalle-pro list-none">
				<div class="container">
					
					<div class="row">
						<div class="col-sm-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<a href="<?php //echo 'whatsapp://send?text='.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Whatsapp</a>-->
<?php endwhile; endif; ?>


<?php get_footer(); ?>
