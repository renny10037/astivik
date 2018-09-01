<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php 
// Listado de categorias
$categories = get_categories( array(
	'taxonomy' => 'tipo_proyectos',
	'hide_empty' => false,
	) );?>

	<?php // para las categorias $idcategoria = get_query_var('cat');?>
	<?php //var_dump($categories); ?>
	<?php $idcategoria = get_queried_object()->term_id;//para las taxonomias ?>
	<?php foreach ($categories as $category):?>
		<?php if ($idcategoria == $category->term_id):?>
			<div id="proyecto">
				<div class="proyectos">
					<div class="container-fluid" style="background-image: linear-gradient(#fff,transparent),url(<?php echo the_field('imagen-banner', $category); ?>);
					height: 700px;
					background-position: bottom;
					background-size: cover;">
					<div class="txt-proyecto">
						<h1><?php echo($category->name);?></h1>
					</div>
				</div>


			</div>
			<?php include ('ayuda.php') ?>
			<div id="proyecto-card">
				<div class="container">
					<div class="text-proyecto">
						<?php echo($category->post_content);?>
					</div>
					<div class="row">
						<?php		
						$args = array(
							'post_type' => 'proyectos',
							'posts_per_page' => 5,
							'tax_query' => array(
								array(
									'taxonomy' => 'tipo_proyectos',
									'field' => 'slug',
									'terms' => $category->slug
								))
						);
						$loop = new WP_Query( $args );
						if ($loop -> have_posts()) : while( $loop -> have_posts() ) : $loop -> the_post(); ?> 
						<div class="col-md-4">
							<a href="<?php the_permalink(); ?>">
								<div class="card-proyecto">
									<?php the_post_thumbnail() ?>
									<div class="card-txt list-none gray">
										<h4 class="color-azul"><?php the_title(); ?></h4>
										<ul>
											<?php if($currentlang=="es-ES"):?>
												<!-- español-->
												<li>fecha: <?php echo get_the_date(); ?></li>
												<li>Capacidad: <?php echo the_field('capacidad'); ?></li>
												<!-- <li>Tipo de :  <?php //echo get_the_term_list( $category->term_id, 'tipo_proyectos', '', ', ' ); ?></li> -->
												<!-- end español -->
											<?php else: ?>
												<!-- english -->
												<li>Date: <?php echo get_the_date(); ?></li>
												<li>Capacity: <?php echo the_field('capacidad'); ?></li>
												<!-- <li>Type of : <?php //the_category(); ?></li>				 -->
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
	<?php break;endif; ?>
<?php endforeach; ?>
<?php get_footer(); ?>