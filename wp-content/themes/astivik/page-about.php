<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php $contador= 0;

$string_one = $string_two = '';?>
<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
	<div id="about">
		<div class="about">
			<?php $post_thumbnail_id = get_post_thumbnail_id();
			$url_img = wp_get_attachment_url( $post_thumbnail_id);?>
			<div class="" style="background-image: url(<?php echo $url_img; ?>);
			height: 800px;
			background-position: bottom;
			background-size: cover;">
			<div class="txt-about">
				<?php $pag_name = get_the_title();?>

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
				<h1> <span class="color-azul"><?php echo $string_one; ?></span><?php echo $string_two; ?></h1>
				<p><span style="font-weight: bold; "></span><?php the_content();?></p>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<?php include ('ayuda.php') ?>

	<section id="quienes-somos">
		<div class="quienes-somos">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="comparte ">
							<?php if($currentlang=="es-ES"):?>
								<!-- español-->
								<p>Comparte</p>
								<!-- end español -->
							<?php else: ?>
								<!-- english -->
								<p>Share</p>
								<!-- end English -->
							<?php endif; ?>
							<div class="iconos-comparte">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"> <i class="fa fa-facebook fa-2x "></i></a>
								<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank"> <i class="fa fa-linkedin fa-2x "></i></a><span>

								</div>

							</div>
						</div>
						<?php if($currentlang=="es-ES"):?>
							<!-- Español-->
							<div class="col-md-6">
								<h2 class="color-azul">trabajamos para</h2>
								<h1>la industria marítima y fluvial</h1>
								<h4 class="color-naranja">Quienes somos</h4>
								<p>Desde 1972 prestamos servicio de calidad a embarcaciones nacionales e internacionales, Utilizando nuestra infraestructura y nuestro experto y calificado equipo humano. Astivik promueve la conservación del medio ambiente, la satisfacción de nuestros clientes y el mejoramiento continuo de los procesos.</p><br>
								<p>Somos un equipo dedicado a cubrir las necesidades de diseño, construcción, Reparación y mantenimiento de embarcaciones.</p>
							</div>
							<div  class="col-md-6 espacios">
								<h4 class="color-naranja">	<span><img style="width: 30px;
								height: 30px;" data-srcset="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt="" class="lazy img-responsive"></span>Optimizamos nuestros procesos</h4>
								<p>Trabajamos de manera eficiente y eficaz.Definimos</p>
								<p>nuestros proyectos con objetivos y proyección,</p>
								<p>siempre buscando la optimización de tiempos y recursos.</p>

								<h4 class="color-naranja"><span><img style="width: 30px;
								height: 30px;" data-srcset="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt="" class="lazy img-responsive"></span> Una empresa con Enfoque Mundial</h4>
								<p>Inspiramos nuestra labor en estándares internacionales,</p>
								<p>contamos con personal y procedimientos certificados</p>
								<p>por casas clasificadoras IACS como ABS y LLOYD’S REGISTER,</p>
								<p>enfocados en innovar y mejorar nuestra calidad.</p>
							</div>
							<!-- End Español -->
						<?php else: ?>
							<!-- English -->
							<div class="col-md-6">
								<h2 class="color-azul">WE HAVE COMMERCIAL RELATIONS </h2>
								<h1>WITH THE MARITIME AND FLUVIAL INDUSTRY</h1>
								<h4 class="color-naranja">About Us</h4>
								<p>Since 1972, we have been offering high-quality service to domestic and international vessels by making use of our infrastructure and our expert and highly qualified staff. Astivik promotes the conservation of the environment, the satisfaction of our customers and the continuous improvement of our processes.</p><br>
								<p>Our team is committed to exceeding needs in terms of design, shipbuilding, repair and maintenance of our customer’s vessels.</p>
							</div>
							<div  class="col-md-6 espacios">
								<h4 class="color-naranja">	<span><img style="width: 30px;
								height: 30px;" data-srcset="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt="" class="lazy img-responsive"></span>We optimize our processes</h4>
								<p>Always pursuing to be more efficient and effective.</p>
								<p> We define our projects with objectives and planning,</p>
								<p>seeking the optimization of timeframes and resources at all times.</p>

								<h4 class="color-naranja"><span><img style="width: 30px;
								height: 30px;" data-srcset="<?php echo get_template_directory_uri();?>/assets/img/cotizador.png" alt="" class="lazy img-responsive"></span>A company with a global profile</h4>
								<p>Our work is aligned with international standards;</p>
								<p>both our staff and procedures have been certified by</p>
								<p>IACS classification societies, such as ABS and LLOYD’S REGISTER,</p>
								<p>where the focus is innovation and quality improvement.</p>
							</div>
							<!-- End English -->
						<?php endif; ?>
					</div>
				</div>

			</div>
		</section>

		<section id="buscanos" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/about/03_map_background.jpg);    background-repeat: no-repeat;
		height: 700px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/02_map_blue_without_back.png" alt="" class="lazy img-responsive">
				</div>

				<div class="col-md-6">
					<?php if($currentlang=="es-ES"):?>
						<!-- Español-->
						<br>
						<h2 class="color-azul">Buscamos</h2>
						<h1>Contribuir</h1>
						<h2 class="color-azul">Al crecimiento y desarrollo</h2>
						<h1 style="margin-bottom: 40px;">del caribe y el mundo</h1>
						<p>Actualmente somos uno de los Astilleros más importantes del Caribe con enfoque mundial.</p>
						<p>Astivik shipyard cuenta con un equipo de especialistas que garantizan nuestro trabajo y que brindan soluciones efectivas a nuestros clientes.
						Gracias al buen servicio hemos construido relaciones con clientes en Panamá, Costa Rica, Estados Unidos, República Dominicana, Puerto rico, Tortola (BVI), Santa Cruz (USVI), Trinidad y Tobago, Ecuador y Venezuela.</p>
						<p class="alto-p">
						También atendemos empresas Europeas (Grecia, Alemania, Holanda, entre otras) que operan sus embarcaciones en el Mar Caribe. </p>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/servicios'; ?>"><p class="color-azul">Ver servicios</p></a>
						<!-- End Español -->
					<?php else: ?>
						<!-- English -->
						<br>
						<h2 class="color-azul">WE STRIVE</h2>
						<h1>TO CONTRIBUTE INTO</h1>
						<h2 class="color-azul">THE GROWTH AND DEVELOPMENT OF</h2>
						<h1 style="margin-bottom: 40px;">THE CARIBBEAN REGION AND THE WHOLE WORLD</h1>
						<p>Nowadays, we are one of the most important shipyards in the Caribbean Region with a global focus.</p>
						<p>Astivik shipyard is supported by a team of specialists that support our processes, ensuring our work and providing our customers with effective solutions.
						Throughout the quality of our services, we have built commercial relationships in Panama, Costa Rica, the United States, the Dominican Republic, Puerto Rico, Tortola (BVI), Santa Cruz (USVI), Trinidad and Tobago, Ecuador and Venezuela.</p>
						<p class="alto-p">
						We also have commercial relationship with European companies (in Greece, Germany, Netherlands, among other) that operate in the Caribbean Sea.</p>
						<a href="<?php echo bloginfo('url').'/index.php/index.php/servicios'; ?>"><p class="color-azul">See Our Services</p></a>
						<!-- End English -->
					<?php endif; ?>
					<div class="txt-buscanos ">
					</div>
				</div>
			</div>
		</div>

	</section>
	<section id="team">
		<div class="team">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php if($currentlang=="es-ES"):?>
							<!-- Español-->
							<h2>Nuestro equipo</h2>
							<h2>trabaja <span class="color-negro">Feliz y seguro</span></h2>
							<p>Por lo tanto, hoy <span>Astivik Shipyard</span></p>
							<h3 class="color-naranja">es más efectivo</h3>
							<span>Entendemos su necesidad y queremos generar desarrollo en la industria naval del mundo. Somos una empresa que ayuda y contribuye a generar valor, cuidado al ecosistema marino y al planeta. </span>
							<!-- End Español -->
						<?php else: ?>
							<!-- English -->
							<h2>Our Team Works</h2>
							<h2><span class="color-negro">blissful and safe</span></h2>
							<p>Therefore, today <span>Astivik Shipyard</span></p>
							<h3 class="color-naranja">is more effective</h3>
							<span>We understand your need and we want to generate development in the world's naval industry. We are a company that helps and contributes to generate value, care for the marine ecosystem and the planet.</span>
							<!-- End English -->
						<?php endif; ?>
					</div>
					<div class="col-md-6">
						<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/galeria_pic.jpeg" alt="" class="lazy img-responsive">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="mision" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/about/05_blue_big_banner.jpg);    width: 100%;height: 100vh;background-size: cover; position:relative;
	">
	<div class="mask-about"></div>
	<div class="container-fluid">
		<div class="text-mision">
			<?php if($currentlang=="es-ES"):?>
				<!-- español-->
				<h1>Misión y <span>visión</span></h1><br>
				<h5 class="color-naranja">Entendemos su necesidad y <br>queremos generar desarrollo en<br>la industria naval del mundo</h5>
				<p>Somos una empresa que ayuda y contribuye</p>
				<p>a generar valor, cuidado al ecosistema marino</p>
				<p class="linea-about">y al planeta.</p><br><br>
				<div class="text-vision">
					<h5 class="color-naranja">Nuestra Visión</h5><br>
					<p>Nuestra experiencia nos permite generar valor </p>
					<p>al sector maritimo, fluvial e industrial</p>
					<p>garantizando un servicio ágil con precios</p>
					<p>competitivos.</p>
				</div>
				<div class="icon-about">
					<div class="color-icon">
						<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab1'; ?>" class="color-icon" >
							<div class="imagen-opciones"  class="color-icon" style="padding-bottom: 10px">

								<div class="box-icon">
									<center>
										<svg
										xmlns:dc="http://purl.org/dc/elements/1.1/"
										xmlns:cc="http://creativecommons.org/ns#"
										width="40%"
										height="50px"
										viewBox="0 0 285.89118 301.63502"
										id="svg4816"
										version="1.1">
										<defs
										id="defs4818" />

										<metadata
										id="metadata4821">

									</metadata>
									<g
									inkscape:label="Capa 1"
									inkscape:groupmode="layer"
									id="layer1"
									transform="translate(-237.05439,-450.11613)">
									<path
									style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.44827858px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:0"
									d="m 383.59992,494.54647 c -15.28205,-0.0771 -30.3568,1.50145 -45.39521,3.37346 -24.03122,10.25075 -40.43119,23.77182 -56.15128,37.58449 -10.13428,19.26448 -16.37217,41.63305 -21.24769,62.36325 a 16.528286,17.433946 0 0 0 -8.639,15.19771 16.528286,17.433946 0 0 0 16.38668,17.53277 16.528286,17.433946 0 0 0 16.66862,-17.23334 l 0.002,-0.2005 a 16.528286,17.433946 0 0 0 -6.9562,-14.19694 c 4.09104,-15.77634 8.35963,-31.6416 16.46549,-49.42535 12.90501,-11.80586 28.23932,-23.59244 51.16944,-35.32032 16.20003,-2.75363 36.03057,-3.43321 60.67957,-1.35885 26.3105,13.53496 40.19432,28.31278 54.79243,43.01898 9.54905,14.95311 13.62318,29.22215 16.22647,43.30704 a 16.528286,17.433946 0 0 0 -6.67429,13.87651 16.528286,17.433946 0 0 0 16.38669,17.53277 16.528286,17.433946 0 0 0 16.66861,-17.23334 l 0.002,-0.2005 a 16.528286,17.433946 0 0 0 -8.64864,-15.3194 l -6.33894,-33.3591 c -16.00756,-26.30267 -41.28631,-50.60148 -69.28368,-66.11321 -12.21662,-2.70481 -24.22753,-3.76614 -36.1136,-3.82613 z m -38.15009,42.76946 c -19.59044,9.8769 -34.13762,25.30096 -41.66014,48.4526 0,0 -11.87449,5.25607 -17.76129,4.80324 l -0.9053,42.85789 13.04562,7.12255 c 13.83648,34.01492 44.62475,62.64778 76.37547,77.89542 l 8.82984,-0.33971 c 34.23315,-10.40602 68.57743,-54.59363 71.20712,-75.2828 l 0.0166,-0.077 17.53455,-8.31592 -3.57748,-41.59623 -15.33167,-4.80323 c -15.24508,-37.269 -30.49051,-39.37552 -45.73578,-50.71681 l -62.03755,0 z m 12.74004,53.63757 -8.32552,27.21717 39.06416,-19.53251 c 5.02355,11.18801 11.30644,19.01726 18.89158,23.3744 l 34.58228,2.24139 c -6.40488,12.10335 -9.69013,24.83134 -11.84787,37.78411 l -38.16496,-1.78961 c -2.50781,-6.35947 -8.38595,-10.5131 -14.9158,-10.5398 -8.94123,-0.0267 -16.21724,7.58256 -16.26848,17.01357 -0.0511,9.43139 7.14247,17.12815 16.08375,17.20882 6.15576,0.0467 11.80626,-3.58564 14.58833,-9.37795 l 24.26832,0.29243 -37.1432,28.81766 c -22.87965,-12.47536 -44.52697,-27.76712 -61.4781,-53.79343 -5.32836,-13.44835 -6.12039,-26.89671 -6.40374,-40.34508 11.16953,-7.01238 26.50994,-13.26603 47.06925,-18.57117 z"
									id="path4469"
									inkscape:connector-curvature="0" />
								</g>
							</svg>
							<p>asistencia <br>Inmediata</p>

						</center>

					</div>
				</div>
			</a>
		</div>

	</div>
	<!-- end español -->
<?php else: ?>
	<!-- english -->
	<h1>Mission and <span>Vision</span></h1><br>
	<h5 class="color-naranja">We understand your needs and <br>we strive to contribute into the growth<br>and development of the Caribbean region<br>and the whole world</h5>
	<p>Astivik promotes a positive and safe environment,</p>
	<p>which has been key to the growth both</p>
	<p class="linea-about">the personnel and processes</p><br><br>
	<div class="text-vision">
		<h5 class="color-naranja">Our Vision</h5><br>
		<p>Our experience enables us to generate value</p>
		<p>into the maritime, fluvial and industrial sectors,</p>
		<p>translating in swift services at</p>
		<p>competitive prices.</p>
	</div>
	<div class="icon-about">
		<div class="color-icon">
			<a href="<?php echo bloginfo('url').'/index.php/index.php/ayuda/#tab1'; ?>" class="color-icon" >
				<div class="imagen-opciones"  class="color-icon" style="padding-bottom: 10px">

					<div class="box-icon">
						<center>
							<svg
							xmlns:dc="http://purl.org/dc/elements/1.1/"
							xmlns:cc="http://creativecommons.org/ns#"
							width="40%"
							height="50px"
							viewBox="0 0 285.89118 301.63502"
							id="svg4816"
							version="1.1">
							<defs
							id="defs4818" />

							<metadata
							id="metadata4821">

						</metadata>
						<g
						inkscape:label="Capa 1"
						inkscape:groupmode="layer"
						id="layer1"
						transform="translate(-237.05439,-450.11613)">
						<path
						style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.44827858px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:0"
						d="m 383.59992,494.54647 c -15.28205,-0.0771 -30.3568,1.50145 -45.39521,3.37346 -24.03122,10.25075 -40.43119,23.77182 -56.15128,37.58449 -10.13428,19.26448 -16.37217,41.63305 -21.24769,62.36325 a 16.528286,17.433946 0 0 0 -8.639,15.19771 16.528286,17.433946 0 0 0 16.38668,17.53277 16.528286,17.433946 0 0 0 16.66862,-17.23334 l 0.002,-0.2005 a 16.528286,17.433946 0 0 0 -6.9562,-14.19694 c 4.09104,-15.77634 8.35963,-31.6416 16.46549,-49.42535 12.90501,-11.80586 28.23932,-23.59244 51.16944,-35.32032 16.20003,-2.75363 36.03057,-3.43321 60.67957,-1.35885 26.3105,13.53496 40.19432,28.31278 54.79243,43.01898 9.54905,14.95311 13.62318,29.22215 16.22647,43.30704 a 16.528286,17.433946 0 0 0 -6.67429,13.87651 16.528286,17.433946 0 0 0 16.38669,17.53277 16.528286,17.433946 0 0 0 16.66861,-17.23334 l 0.002,-0.2005 a 16.528286,17.433946 0 0 0 -8.64864,-15.3194 l -6.33894,-33.3591 c -16.00756,-26.30267 -41.28631,-50.60148 -69.28368,-66.11321 -12.21662,-2.70481 -24.22753,-3.76614 -36.1136,-3.82613 z m -38.15009,42.76946 c -19.59044,9.8769 -34.13762,25.30096 -41.66014,48.4526 0,0 -11.87449,5.25607 -17.76129,4.80324 l -0.9053,42.85789 13.04562,7.12255 c 13.83648,34.01492 44.62475,62.64778 76.37547,77.89542 l 8.82984,-0.33971 c 34.23315,-10.40602 68.57743,-54.59363 71.20712,-75.2828 l 0.0166,-0.077 17.53455,-8.31592 -3.57748,-41.59623 -15.33167,-4.80323 c -15.24508,-37.269 -30.49051,-39.37552 -45.73578,-50.71681 l -62.03755,0 z m 12.74004,53.63757 -8.32552,27.21717 39.06416,-19.53251 c 5.02355,11.18801 11.30644,19.01726 18.89158,23.3744 l 34.58228,2.24139 c -6.40488,12.10335 -9.69013,24.83134 -11.84787,37.78411 l -38.16496,-1.78961 c -2.50781,-6.35947 -8.38595,-10.5131 -14.9158,-10.5398 -8.94123,-0.0267 -16.21724,7.58256 -16.26848,17.01357 -0.0511,9.43139 7.14247,17.12815 16.08375,17.20882 6.15576,0.0467 11.80626,-3.58564 14.58833,-9.37795 l 24.26832,0.29243 -37.1432,28.81766 c -22.87965,-12.47536 -44.52697,-27.76712 -61.4781,-53.79343 -5.32836,-13.44835 -6.12039,-26.89671 -6.40374,-40.34508 11.16953,-7.01238 26.50994,-13.26603 47.06925,-18.57117 z"
						id="path4469"
						inkscape:connector-curvature="0" />
					</g>
				</svg>
				<p>asistencia <br>Inmediata</p>

			</center>

		</div>
	</div>
</a>
</div>

</div>
<!-- end English -->
<?php endif; ?>
</div>
</div>
</section>
<section id="valores">
	<div class="container">
		<div class="row">

			<?php if($currentlang=="es-ES"):?>
				<div class="col-md-6">
					<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/helice_valores_español.png" alt="Helice de valores" class="lazy img-responsive">
				</div>

				<!-- Español-->
				<div class="col-md-3">
					<div class="txt-valores">
						<h3>Compromiso</h3>
						<p>Sentimos como propios la misión y la visión
							de la organizacion y nos enfocamos en el
							cumplimiento de obligaciones personales,
						profesionales y organizacionales</p>
					</div>
					<div class="txt-valores">
						<h3 class="verde">Sentido de pertenencia</h3>
						<p>Creeemos en el valor que tenemos para la
							organización y nos esforzamos por ser parte de ella.
						Todos somos uno.</p>
					</div>
					<div class="txt-valores lealtad">
						<h3>Lealtad</h3>
						<p>	Mostramos respeto por la políticas de la
							organizacion y nos aseguramos de actuar
						de manera consecuentes a ellas</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="txt-valores">
						<h3 class="blue">Honestidad</h3>
						<p>Estamos comprometido a ser actores éticos
							y a actuar de acuerdo a las conductas que son
						consideradas apropiadas moral y socialmente</p>
					</div>

					<div class="txt-valores">
						<h3 class="naranja">Comunicación</h3>
						<p>Basamos nuestra comunicación en la confianza,
							por esto ponemos en común toda la información,
							experiencia y conocimiento, para que fluya hacia
							todas las áreas de la organización. Somos abiertos
							y receptivos al escucharnos entre nosotros, mostrando
						respeto por las diferencias</p>
					</div>

					<div class="txt-valores">
						<h3 class="width">Trabajo en equipo</h3>
						<p>Estamos dispuestos a colaborar con los demás, formar
							parte de un grupo y trabajar con otras áreas de la
							organización, con el propósito de alcanzar en conjunto
						los objetivos grupales</p>
					</div>
				</div>
				<!-- End Español -->
			<?php else: ?>
				<div class="col-md-6">
					<img data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/helice_valores_english.png" alt="Helice de valores" class="lazy img-responsive">
				</div>
				<!-- English -->
				<div class="col-md-3">
					<div class="txt-valores">
						<h3>Commitment</h3>
						<p>We feel the mission and vision of the
							organization as our own and we focus on
							the fulfillment of personal, professional,
						and organizational obligations.</p>
					</div>
					<div class="txt-valores">
						<h3 class="verde">Sense of belonging</h3>
						<p>We believe in the value we have for the organization
							and we strive to be part of it.
						We are all one.</p>
					</div>
					<div class="txt-valores lealtad">
						<h3>Loyalty</h3>
						<p>	We show respect for the organization's
							policies and make sure to act in a
						manner consistent with them</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="txt-valores">
						<h3 class="blue">Honesty</h3>
						<p>We are committed to be ethical actors 
							and to act according to the behaviors that are 
						considered morally and socially appropriate.</p>
					</div>

					<div class="txt-valores">
						<h3 class="naranja">Comunication</h3>
						<p>We base our communication on trust, by this we
							put in common all the information, experience and 
							knowledge, so that it flows to all areas of the organization.
							We are open and receptive to listen to each other,
						showing respect for differences</p>
					</div>

					<div class="txt-valores">
						<h3 class="width">Teamwork</h3>
						<p>We are willing to collaborate with others,
							be part of a group and work with other areas of
							the organization, in order to achieve group
						objectives together.</p>
					</div>
				</div>
				<!-- End English -->
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="historia" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/about/historia_background.jpeg);    width: 100%;height: 100vh;
">
<div class="lenea-history">
	<div class="ano">
		<h1><span class="title-gray" >1980</span><span class="color-azul title-blue " style="margin: 80px;">1972</span></h1>
	</div>
	<div class="container">
		<div class="txt-historia">
			<section style="border-right: 1px solid #bebebe;">
				<?php if($currentlang=="es-ES"):?>
					<!-- Español-->
					<h1 class="color-negro">La historia</h1>
					<h1 class="color-azul">Astivik shipyard</h1>
					<h5 class="color-naranja">1970-2018</h5>
					<p><b>FUNDADA EN 1972</b> Con el objetivo de cubrir las necesidades de reparación y mantenimiento de todas las embarcaciones afiliadas o de propiedad de C.I Vikingos Colombia S.A, una importante empresa pesquera.<br><br> <b>EN LOS AÑOS 80</b> Astivik shipyard abre sus servicios a embarcaciones marítimas y fluviales a nivel nacional.</p>

					<a class="history" data-toggle="collapse" data-target="#demo">Ver más</a>
					<div id="demo" class="collapse">
						<p><b>AÑOS 90</b> Inicia la internacionalización del astillero atendiendo las primeras embarcaciones de USA y Panamá.<br>
							<b>AÑO 2004</b> entra en funcionamiento el primer dique flotante diseñado y construido en Colombia, con una capacidad de levante de 1.300 toneladas.<br> <br>
							<b>AÑO 2005</b> entra en funcionamiento el dique flotante Astivik II con una capacidad de levante de 2.000 toneladas.<br> <br>
							<b>AÑO 2008</b> Astivik shipyard se certifica en calidad ISO 9001 Versión 2008, certificación avalada por Bureau Veritas Certification, en ese mismo año se certifican nuestras instalaciones en la aplicación del código internacional de protección de buques e instalaciones portuarias (PBIP).<br> <br>
							<b>AÑOS 2010 Y 2011</b> entran en funcionamiento los diques flotantes Astivik III (2700 Toneladas de levante) y Astivik IV (4000 Toneladas de levante) respectivamente, convirtiéndonos con esto en el astillero con mayor capacidad de levante en Colombia y la mejor alternativa nacional y del Caribe para el sector naval.<br> <br>
							<b>AÑO 2017</b> Astivik shipyard obtuvo la recertificación de calidad ISO 9001 Versión 2015.
						</p>
					</div>
					<!-- End Español -->
				<?php else: ?>
					<!-- English -->
					<h1 class="color-negro">Astivik Shipyard's</h1>
					<h1 class="color-azul"> History</h1>
					<h5 class="color-naranja">1970-2018</h5>
					<p><b>FOUNDED IN 1972</b> With the aim of covering the repair and maintenance needs of all vessels affiliated or owned by C.I Vikingos Colombia S.A., an important fishing company in the country.<br><br> <b>80's</b> Astivik shipyard opens for business within the maritime and fluvial vessel market nationwide.</p>

					<a class="history" data-toggle="collapse" data-target="#demo">See More</a>
					<div id="demo" class="collapse">
						<p><b>90's</b> The internationalization process of the shipyard begins by attending its first few vessels from USA and Panama.<br>
							<b>2004</b> The first floating dock designed and built in Colombia is commissioned with a lifting capacity of 1,300 tons.<br> <br>
							<b>2005</b> The Astivik II floating dock comes into operation with a lifting capacity of 2,000 tons.<br> <br>
							<b>2008</b> Astivik Shipyard becomes certified in ISO 9001 Version 2008, through Bureau Veritas; also, our facilities became certified in the application of the international code for ships and port facilities protection (ISPS). <br> <br>
							<b>2010 & 2011</b> Floating docks Astivik III and Astivik IV ((2700-ton and 4000-ton lifting capacity, respectively), are commissioned, becoming the shipyard with the highest lifting capacity in Colombia and the best alternative for the naval sector both nationally and in the Caribbean.<br> <br>
							<b>2017</b> Astivik Shipyard achieved the ISO 9001 Version 2015 quality certification.
						</p>
					</div>
					<!-- End English -->
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>

</section>
<script>
	$(document).ready(function() {
		$('.history').click(function(){
			$(this).css('display','none');
			$('.title-blue').css('color','gray');
			$('.title-gray').css('color','#0051db');
		})
	});
</script>
<section id="informativa">
	<div class="container">
		<div class="row">
			<?php $the_query = new WP_Query('post_type=post&category_name=about&orderby=rand&showposts=2'); ?>
			<?php if ($the_query -> have_posts()) : while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
				<a href="<?php the_permalink(); ?>">
					<div class="col-md-6">
						<div class="imagen-informativa">
							<?php the_post_thumbnail();?>
						</div>

						<h1><?php the_title();?></h1>
						<a href="" class="color-naranja">conocer más</a>
					</div>
				</a>
			<?php endwhile; endif; ?>
		</div>
	</section>
</div>
</div>
<?php get_footer(); ?>
