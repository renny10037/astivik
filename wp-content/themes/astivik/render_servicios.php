<section id="servicio" style="margin-top: 60px;">
	<div class="container">
		<div class="row">
			<?php if($currentlang=="es-ES"):?>
				<!-- español-->
				<?php $service = 'Ver Servicio'; ?>
				<!-- end español -->
			<?php else: ?>
				<!-- english -->
				<?php $service = 'See Service'; ?>
				<!-- end English -->
			<?php endif; ?>
			<?php $count_category =0; ?>
			<?php $duration = 500; ?>
			<?php
			// Listado de categorias
			$categories = get_categories( array(
				'taxonomy' => 'Servicios',
				'hide_empty' => false,
				'orderby' => 'name',
				'order'   => 'DES',
				'posts_per_page' => 1
			) );
			?>
			<?php //var_dump($categories); ?>
			<?php foreach ($categories as $category):?>
				<?php if ($count_category < 4): ?>
					
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 wow flipInYUp animated" data-wow-duration="<?php echo $duration.'ms';?>" data-wow-delay="500ms">
						<div class="card-contenedor">
							<a href="<?php echo get_term_link( $category->term_id ); ?>"><div class="img-contenedor">
								<img data-srcset="<?php echo the_field('imagen_del_servicio', $category); ?>" alt="" class="lazy img-responsive">
								<div class="title-img-contenedor">
									<h3><?php echo $category->name; ?></h3>
								</div>
							</div></a>
							<a href="<?php echo get_term_link( $category->term_id ); ?>"><p><?php echo $service; ?></p></a>
						</div>
					</div>
					
				<?php else: break;?>
				<?php endif; ?>
				<?php $count_category++; ?>
				<?php $duration += 300; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>



