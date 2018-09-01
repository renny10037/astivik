<?php get_header(); 
$currentlang = get_bloginfo('language'); ?>
<?php if($currentlang=="es-ES"){
// español-->
	$dique = 'Dique';
	$troja = 'Troja';
	$astivik = 'ASTIVIK';
	$ton = 'TON';
// end español -->
}else{
// english -->
	$dique = 'Floating Dock';
	$troja = 'Dry Dock';
	$astivik = 'ASTIVIK';
	$ton = 'TON';
// end English -->
}?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php  $pages = get_pages();?>
<?php foreach($pages as $page):?>
	<?php if ($page->ID == 15):?>

		<div id="capacidad-detalle">
			<?php $post_thumbnail_id = get_post_thumbnail_id($page);
			$url = wp_get_attachment_url( $post_thumbnail_id);?>
			<div class="capacidad-detalle" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/detalle-serv/01_big_banner_map_background.jpg');
			height: 100vh;
			background-position:top;
			background-size: cover;">

			<div class="dique-hover diques" id="hover-dique1">
				<span><?php echo $troja; ?></span>
				<h1 >220 <span color-azul><?php echo $ton; ?></span></h1>
			</div>
		</div>
		<div class="point" id="dique1" data-toggle="" data-placement="top" title="Tooltip on top">

			<div class="point2">
				<div class="">
					<!-- Trigger the modal with a button -->
					<button type="button" class="btn point3" data-toggle="modal" data-target="#myModal-91"></button>

					<!-- Modal -->

					<?php $the_query = new WP_Query('post_type=diques&order=ASC'); ?>
					<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
						<div class="modal fade" id="myModal-<?php echo the_ID();?>" role="dialog">
							<div class="modal-dialog modal-dialog-mapa">

								<!-- Modal content-->

								<div class="">
									<div class="txt-astivik">

										<img class="img-dique" style="height: 200px!important;" src="<?php echo the_field('imagen_diques-trojas'); ?>" alt="Imagen Diques">
										<div class="modal-content">

											<div class="modal-body">
												<div class="dique-troja" id="">
													<?php if ((get_the_ID() ==79) || (get_the_ID() ==81)|| (get_the_ID() ==83)  || (get_the_ID() ==87)):?>
														<?php $pag_name = get_the_title(); ?>
														<?php $title = explode (' ',$pag_name);?>
														<h1 class="color-azul"><?php echo $title[0];?> <span class="color-naranja"><?php echo $title[1];?></span></h1>
														<ul>
															<?php if($currentlang=="es-ES"):?>
																<!-- español-->
																<li>Capacidad: <?php echo the_field('capacidad').' ton.'; ?></li>
																<li>Eslora: <?php echo the_field('eslora').' mts.'; ?></li>
																<li>Manga interna: <?php echo the_field('manga_interna').' mts.'; ?></li>
																<?php $cotizar = 'Cotizar servicios'; ?>
																<!-- end español -->
															<?php else: ?>
																<!-- english -->
																<li>Capacity: <?php echo the_field('capacidad').' ton.'; ?></li>
																<li>Lenght: <?php echo the_field('eslora').' mts.'; ?></li>
																<li>Beam: <?php echo the_field('manga_interna').' mts.'; ?></li>
																<?php $cotizar = 'Quote Services'; ?>
																<!-- end English -->
															<?php endif; ?>
														</ul>
													<?php endif;?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					<?php endwhile; endif; ?>

					<?php $the_query = new WP_Query('post_type=trojas&order=ASC'); ?>
					<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
						<div class="modal fade" id="myModal-<?php echo the_ID();?>" role="dialog">
							<div class="modal-dialog modal-dialog-mapa">

								<!-- Modal content-->

								<div class="">
									<div class="txt-astivik">

										<img class="img-dique" style="height: 200px!important;" src="<?php echo the_field('imagen_diques-trojas'); ?>" alt="Imagen Trojas">
										<div class="modal-content">

											<div class="modal-body">
												<div class="dique-troja" id="">
													<?php if (get_the_ID() == 91):?>
														<?php $pag_name = get_the_title(); ?>
														<ul>
															<?php $title = explode (' ',$pag_name);?>
															<h1 class="color-azul"><?php echo $title[0].$title[1];?> <span class="color-naranja"><?php echo $title[2];?></span></h1>
															<?php if($currentlang=="es-ES"):?>
																<!-- español-->
																<li>Calado Máximo Popa: <?php echo the_field('calado_maximo_popa').' mts.'; ?></li>
																<li>Capacidad: <?php echo the_field('capacidad').' ton.'; ?></li>
																<li>Eslora Máxima: <?php echo the_field('eslora_maxima').' mts.'; ?></li>
																<li>Manga Máxima:<?php echo the_field('manga_maxima').' mts.'; ?></li>
																
																<!-- end español -->
															<?php else: ?>
																<!-- english -->
																<li>Maximum Draft: <?php echo the_field('calado_maximo_popa').' mts.'; ?></li>
																<li>Capacity: <?php echo the_field('capacidad').' ton.'; ?></li>
																<li>Maximum Lenght: <?php echo the_field('eslora_maxima').' mts.'; ?></li>
																<li>Maximum Beam:<?php echo the_field('manga_maxima').' mts.'; ?></li>
																<!-- end English -->
															<?php endif; ?>

														</ul>
													<?php endif;?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="dique-hover diques" id="hover-dique3">

			<span><?php echo $dique; ?></span>
			<h1 ><?php echo $astivik; ?> <span color-azul> IV</span></h1>
		</div>
		<div class="point" id="dique3">
			<div class="point2">
				<button type="button" class="btn point3" data-toggle="modal" data-target="#myModal-87"></button>
			</div>
		</div>
	</div>

	<div>
		<div class="dique-hover diques" id="hover-dique5">
			<span><?php echo $dique; ?></span>
			<h1 ><?php echo $astivik; ?> <span color-azul> I</span></h1>
		</div>
		<div class="point" id="dique5">
			<div class="point2">
				<button type="button" class="btn point3" data-toggle="modal" data-target="#myModal-79"></button>
			</div>
		</div>
	</div>

	<div>
		<div class="dique-hover diques" id="hover-dique4">
			<span><?php echo $dique; ?></span>
			<h1 ><?php echo $astivik; ?> <span color-azul> II</span></h1>
		</div>
		<div class="point" id="dique4">
			<div class="point2">
				<button type="button" class="btn point3" data-toggle="modal" data-target="#myModal-81"></button>
			</div>
		</div>
	</div>

	<div>

		<div class="dique-hover diques" id="hover-dique2">
			<span><?php echo $dique; ?></span>
			<h1 ><?php echo $astivik; ?> <span color-azul> III</span></h1>
		</div>
		<div class="point" id="dique2">
			<div class="point2">
				<button type="button" class="btn point3" data-toggle="modal" data-target="#myModal-83"></button>
			</div>
		</div>
	</div>

</div>

</div>



</div>


<?php include ('ayuda.php') ?>
<!--************************************************section uno************************************************-->
</div>
<section id="servicion">
	<div class="container">
		<div class="txt-servicion">
			<?php if($currentlang=="es-ES"):?>
				<!-- Español-->
				<h1 class="color-azul">SERVICIOS A SU MEDIDA</h1>
				<h1>EN EL MOMENTO QUE <span>LO NECESITE</span></h1>
				<!-- End Español -->
			<?php else: ?>
				<!-- English -->
				<h1 class="color-azul">TAILORED SERVICES</h1>
				<h1>THE MOMENT YOU <span>NEED THEM</span></h1>
				<!-- End English -->
			<?php endif; ?>
		</div>

		<div class="row">

			<?php $the_query = new WP_Query('post_type=capacidades&orderby=ASC'); ?>
			<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
				<div class="col-md-4">
					<h4><img style="width: 30px;
					height: 30px;margin-right: 10px;" src="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt=""></i><?php the_title(); ?></h4>
					<?php echo the_field('descripcion_del_contenido');?>
					<a class="color-naranja" href="<?php echo bloginfo('url').'/index.php/ayuda#tab1'; ?>"><?php echo $cotizar; ?></a>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<?php break;endif; ?>
<?php endforeach; ?>
<?php get_footer(); ?>

<style>
@media (min-width: 576px)
{
	.modal-dialog-mapa {
		max-width: 300px!important;
		margin: 1.75rem auto;
		top: 20em!important;
		right: -23%!important;
	}
}
.dique-troja ul{
	list-style: none;
}


.dique-hover{
	position: absolute;
	top: 68%;
left: 22%;
	background: #fff;
	padding: 2px 4px 1px;
	border-radius: 9px;
	border: 2px solid rgba(128, 128, 128, 0.27);
	width: 8%;
	/* height: 43px; */
	text-align: center;
}
.dique-hover h1:before{
	content: "";
	/* top: 0; */
	bottom: -7px;
	position: absolute;
	left: 40%;
	/* background: red; */
	color: #fff;
	z-index: 4;
	border-top: .6em solid;
	border-right: .6em solid rgba(0, 0, 0, 0);
	border-bottom: 0;
	border-left: .6em solid rgba(0, 0, 0, 0);
}
#hover-dique2{
	top: 47%;
left: 28%;
}
#hover-dique3{
	top: 34%;
left: 39%;
}
#hover-dique4{
	top: 44%;
left: 46%;
}

#hover-dique5 {

	top: 62%;
	left: 58%;

}
#hover-dique6{
	top: 50%;
	left: 47%;
}


.dique-hover h1{
	font-size: 12px;
	color: #000;
	text-transform: uppercase;
}
.dique-hover span{
	color: #0051db ;
	font-family: ubuntu;
	text-transform: uppercase;
}
#servicion h1{
	color: #000;
}
#servicion .color-azul{
	color: #0051db!important;
}

.txt-servicion{
	padding: 10px 0 50px;
}
</style>