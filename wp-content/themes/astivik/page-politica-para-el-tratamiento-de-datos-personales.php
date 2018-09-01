<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<div id="politica">
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
		</div>
	</div>
	<div id="proyecto-card">
		<div class="container">
			<div class="text-proyecto">
				<?php the_content();?>
			</div>			
		</div>
	</div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>