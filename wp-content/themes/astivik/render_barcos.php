<style>
.items{
	flex:1;
	padding: 0 20px;
}
.barcos{
	display:flex;
	justify-content:center;
	flex:1;
	width:100%;
}
</style>
<section id="anuncio">
	<div class="container">
		<div class="row anuncioss">
			<?php if($currentlang=="es-ES"):?>
			<!-- español-->
				<div class="row anuncioss barcos">
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/06_icon1_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Barcazas</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/06_icon2_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Tanqueros</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/07_icon3_embarcacion.png" alt="" class="lazy img-responsive">
						<div>
							<p>Remolcadores</p>
						</div>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/08_icon4_embarcacion.png" alt="" class="lazy img-responsive" style="margin-top: 13px;">
						<p style="margin-top: 12px;">Dragas</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/09_icon5_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Supply Vessel</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/10_icon6_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Jack Up</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/cargueros.png" alt="" class="lazy img-responsive">
						<p>Cargueros</p>
					</div>

				</div>
						
			<!-- end español -->
			<?php else: ?>
			<!-- english -->
				<<div class="row anuncioss" style="display: flex;">
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/06_icon1_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Barges</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/06_icon2_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Tankers</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/07_icon3_embarcacion.png" alt="" class="lazy img-responsive">
						<div>
							<p>Tugboats</p>
						</div>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/08_icon4_embarcacion.png" alt="" class="lazy img-responsive" style="margin-top: 13px;">
						<p style="margin-top: 12px;">Dredgers</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/09_icon5_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Supply Vessels</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/10_icon6_embarcacion.png" alt="" class="lazy img-responsive">
						<p>Jack Up Vessels</p>
					</div>
					<div class="items">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inicio/cargueros.png" alt="" class="lazy img-responsive">
						<p>Cargo Vessels</p>
					</div>

				</div>
			<!-- end English -->
			<?php endif; ?>
		</div>
	</div>
</section>