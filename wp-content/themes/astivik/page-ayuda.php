<?php

//$url2=parse_url("http://domain.com/site/gallery/1#photo45 ");
//echo $url2["fragment"]; //This variable contains the fragment

?>
<?php get_header(); ?>
<?php $currentlang = get_bloginfo('language'); ?>
<?php if($currentlang=="es-ES"){
// español-->
	$ayudar = '¿Cómo te podemos ayudar?';
	$cotizar = 'Cotizar servicios';
	$working = 'Trabaje con Nosotros';
	$asistencia = 'Asistencia Inmediata';
	$proveedores = 'Proveedores';
	$directorio = 'Directorio Corporativo';
	$preguntas = 'Preguntas Frecuentes';
	$pqrs = 'Formulario PQRS';
	$corrupcion = 'Denuncias Anticorrupción';
// end español -->
}else{
// english -->
	$ayudar = 'How can we help you?';
	$cotizar = 'Quote Services';
	$working = 'Work With Us';
	$asistencia = 'Immediate Assistance';
	$proveedores = 'Suppliers';
	$directorio = 'Corporate Directory';
	$preguntas = 'FAQs';
	$pqrs = 'Quality Survey';
	$corrupcion = 'Anti-corruption complaint';
// end English -->
}?>
<section id="ayuda">
	<div class="page-ayuda">
		<div class="ayuda-txt separacion-01 text-center">
			<?php $contador= 0;
			$string_one = $string_two = '';?>
			<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
				<p><?php $pag_name = get_the_title();?></p>
				<?php //echo the_field('descripcion_1',the_ID()); ?>

				<?php $strings = explode (' ',$pag_name);?>
				<?php $count_string = round((count($strings)/2)); ?>
				<?php foreach ($strings as $string) {
					$contador++;
					if($contador < $count_string) {
						$string_one.= $string.' ';
					}else{
						$string_two.= $string.' ';
					}
				} ?>
				<h1><?php echo $string_one; ?><span style="font-weight:  lighter; 	font-family: 'Russo One', sans-serif; text-transform: uppercase;    text-shadow: 2px 2px #4444449c;"><?php echo $string_two; ?></span></h1>
				<p><span style="font-weight: bold; "></span><?php the_content();?></p>
			</div>
			<?php the_post_thumbnail(); ?>
			<div class="container">
				<p class="text-center separacion-02"><?php echo $ayudar; ?></p>
			</div>
		</div>
		<!-- iconos -->
		<div class="container-fluid text-center">
			<div class="row icons-arriba text-center">
				<div class="tabs">
					<div class="tab-links">
						<div class="li active primary">
							<a href="#tab1">
								<div class="fondo-iconos text-center max-alto">
									<div class="imagen-opciones color-icon">
										<div class="box-icon">
											<center>
												<svg
												xmlns:dc="http://purl.org/dc/elements/1.1/"
												xmlns:cc="http://creativecommons.org/ns#"
												width="60%"
												height="50px"
												viewBox="0 0 285.89118 301.63502"
												id="svg4816"
												version="1.1"
												inkscape:version="0.91 r13725"
												sodipodi:docname="icono-1.svg">
												<metadata
												id="metadata7">
											</metadata>
											<defs
											id="defs5" />
											<path
											style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:1.9902581;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0"
											d="m 120.21185,18.815423 c -3.74569,0 -6.7609,3.015214 -6.7609,6.760906 l 0,17.798552 A 111.0473,109.55673 0 0 0 85.960186,54.484072 L 71.297645,41.051689 c -2.761917,-2.530224 -7.022885,-2.344577 -9.553109,0.41734 L 33.983485,71.773866 c -2.530224,2.761916 -2.344577,7.022884 0.41734,9.553108 l 12.216134,11.190671 a 111.0473,109.55673 0 0 0 -12.58379,29.444315 l -11.975667,0.12719 c -3.74548,0.04 -6.727374,3.08896 -6.687375,6.83444 l 0.439201,41.09605 c 0.04,3.74548 3.086969,6.72738 6.832449,6.68738 L 34.1067,176.58381 a 111.0473,109.55673 0 0 0 12.665271,29.57349 l -11.673592,13.73049 c -2.426454,2.85351 -2.082429,7.10479 0.771085,9.53125 l 31.30844,26.62429 c 2.853515,2.42645 7.104793,2.08243 9.531248,-0.77109 l 9.501438,-11.17477 a 111.0473,109.55673 0 0 0 28.59572,11.3755 l 0.36965,17.26197 c 0.0803,3.74484 3.16115,6.69411 6.90597,6.61384 l 41.08811,-0.88039 c 3.74483,-0.0803 6.69611,-3.15916 6.61584,-6.90399 l -0.35375,-16.50083 a 111.0473,109.55673 0 0 0 27.29204,-10.9343 l 9.97442,11.77694 c 2.42073,2.85837 6.6709,3.20969 9.52927,0.78897 l 31.36209,-26.56071 c 2.85838,-2.42073 3.21169,-6.67088 0.79095,-9.52926 l -12.19228,-14.39624 a 111.0473,109.55673 0 0 0 12.78452,-29.75831 l 18.07876,-0.4869 c 3.74434,-0.10064 6.67876,-3.19543 6.57807,-6.93977 l -1.10496,-41.08413 c -0.10063,-3.74435 -3.19542,-6.67677 -6.93976,-6.57609 l -16.72142,0.44914 A 111.0473,109.55673 0 0 0 235.49902,91.166259 l 12.4566,-12.088945 c 2.68801,-2.608603 2.7517,-6.873047 0.14309,-9.561058 L 219.47715,40.024238 c -2.60861,-2.68801 -6.87305,-2.751693 -9.56107,-0.143088 L 195.6371,53.736834 A 111.0473,109.55673 0 0 0 168.07081,42.983376 l 0,-17.407047 c 0,-3.745692 -3.01521,-6.760906 -6.76091,-6.760906 l -41.09805,0 z m 22.10511,55.299522 a 75.48472,73.373839 0 0 1 75.48486,73.374315 75.48472,73.373839 0 0 1 -11.89816,39.53002 c 0.14458,-0.25488 0.29374,-0.50412 0.43523,-0.76313 l -1.19638,-1.62961 -31.35415,-32.5386 3.21749,-23.68106 -31.03617,-30.575107 -26.66802,4.137627 20.69211,23.45052 -3.45001,15.8629 -19.08038,2.98695 -23.219992,-20.69012 -1.37921,33.56605 27.357622,23.67907 32.87445,-1.3792 26.89855,27.81669 2.75246,2.08869 a 75.48472,73.373839 0 0 1 -40.4303,11.51063 75.48472,73.373839 0 0 1 -75.484852,-73.37232 75.48472,73.373839 0 0 1 75.484852,-73.374315 z"
											id="rect4236"
											inkscape:connector-curvature="0" />
										</svg>
									</center>
								</div>
								<div class="itemcon">
									<p><?php echo $cotizar; ?></p>
								</div>
							</div>

						</div>
					</a>
				</div>

				<div class="li">
					<a id="#tab2" href="#tab2">
						<div class="fondo-iconos text-center max-alto color-icon">
							<div class="imagen-opciones color-icon">
								<div class="box-icon">
									<center>
										<svg
										xmlns:dc="http://purl.org/dc/elements/1.1/"
										xmlns:cc="http://creativecommons.org/ns#"
										xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
										xmlns:svg="http://www.w3.org/2000/svg"
										xmlns="http://www.w3.org/2000/svg"
										xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
										xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
										width="60%"
										height="50px"
										viewBox="0 0 683.32587 738.19831"
										id="svg2"
										version="1.1"
										inkscape:version="0.91 r13725"
										sodipodi:docname="proovedores.svg">
										<defs
										id="defs4" />
										<sodipodi:namedview
										id="base"
										pagecolor="#ffffff"
										bordercolor="#666666"
										borderopacity="1.0"
										inkscape:pageopacity="0.0"
										inkscape:pageshadow="2"
										inkscape:zoom="0.24748738"
										inkscape:cx="160.35521"
										inkscape:cy="316.37886"
										inkscape:document-units="px"
										inkscape:current-layer="layer1"
										showgrid="false"
										inkscape:showpageshadow="false"
										fit-margin-top="0"
										fit-margin-left="0"
										fit-margin-right="0"
										fit-margin-bottom="0"
										inkscape:window-width="1600"
										inkscape:window-height="850"
										inkscape:window-x="0"
										inkscape:window-y="0"
										inkscape:window-maximized="1" />
										<metadata
										id="metadata7">
										<rdf:RDF>
										<cc:Work
										rdf:about="">
										<dc:format>image/svg+xml</dc:format>
										<dc:type
										rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
										<dc:title></dc:title>
									</cc:Work>
								</rdf:RDF>
							</metadata>
							<g
							inkscape:label="Capa 1"
							inkscape:groupmode="layer"
							id="layer1"
							transform="translate(-28.354651,-133.23534)">
							<ellipse
							ry="64.930023"
							rx="66.030533"
							cy="312.11868"
							cx="370.61444"
							id="ellipse4205"
							style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:8.01398087;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" />
							<ellipse
							style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:7.03451681;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1"
							id="ellipse4207"
							cx="622.68634"
							cy="397.57977"
							rx="57.96032"
							ry="56.994308" />
							<ellipse
							ry="56.994308"
							rx="57.96032"
							cy="397.57977"
							cx="123.71903"
							id="ellipse4209"
							style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:7.03451681;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" />
							<path
							style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
							d="m 75.592729,460.9451 48.246991,37.35251 38.90887,-40.46521 46.69064,35.79615 3.1127,133.84649 -20.23261,21.78897 1.55636,136.95921 L 72.480019,789.33593 67.810956,660.15849 28.90209,611.9115 30.458444,501.41033 Z"
							id="path4211"
							inkscape:connector-curvature="0" />
							<path
							inkscape:connector-curvature="0"
							id="path4213"
							d="m 578.09786,461.48147 47.35198,38.48081 39.85307,-39.53563 45.83279,36.88816 -0.0472,133.88267 -20.74123,21.30537 -1.67654,136.9578 -121.43531,0.2467 -1.61896,-129.25165 -37.75933,-49.15186 4.16393,-110.43366 z"
							style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
							<path
							style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
							d="m 309.51283,414.09883 59.91965,134.62468 62.25419,-136.18104 38.90887,37.35251 4.66906,184.42803 -34.05099,47.06827 2.92389,189.49763 -146.29733,0 -3.11271,-191.43162 -35.79616,-46.69063 0.24412,-184.96209 z"
							id="path4215"
							inkscape:connector-curvature="0"
							sodipodi:nodetypes="cccccccccccc" />
							<path
							style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
							d="m 356.50476,414.2934 c 1.92589,0 21.18479,-0.27512 21.18479,-0.27512 l -7.42843,100.1463 z"
							id="path4217"
							inkscape:connector-curvature="0" />
							<path
							style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:6.45985031;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1"
							d="m 374.2073,136.66307 c -123.12409,-3.84025 -212.79711,47.607 -251.03324,156.62767 64.91338,-73.3567 144.45763,-119.24908 253.62946,-115.8603 94.8825,3.12673 187.43344,64.89572 249.29162,126.37904 C 585.3492,206.15968 486.1279,140.31893 374.2073,136.66307 Z"
							id="path4224"
							inkscape:connector-curvature="0"
							sodipodi:nodetypes="ccccc" />
						</g>
					</svg>

				</center>
			</div>
			<div class="item-in">

				<p><?php  echo $working; ?></p>
			</div>
		</div>



	</div>
</a>
</div>

<div class="li">
	<a href="#tab3">
		<div class="fondo-iconos text-center max-alto color-icon">
			<svg
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:cc="http://creativecommons.org/ns#"
			width="60%"
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
<div class="itemicon">
	<p><?php  echo $asistencia; ?></p>
</div>

</div>
</a>
</div>

<div class="li">
	<a href="#tab4">
		<div class="fondo-iconos text-center max-alto color-icon">
			<div class="imagen-opciones color-icon">
				<div class="box-icon">
					<center>
						<svg
						xmlns:dc="http://purl.org/dc/elements/1.1/"
						xmlns:cc="http://creativecommons.org/ns#"
						xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
						xmlns:svg="http://www.w3.org/2000/svg"
						xmlns="http://www.w3.org/2000/svg"
						xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
						xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
						width="60%"
						height="50px"
						viewBox="0 0 683.32587 738.19831"
						id="svg2"
						version="1.1"
						inkscape:version="0.91 r13725"
						sodipodi:docname="proovedores.svg">
						<defs
						id="defs4" />
						<sodipodi:namedview
						id="base"
						pagecolor="#ffffff"
						bordercolor="#666666"
						borderopacity="1.0"
						inkscape:pageopacity="0.0"
						inkscape:pageshadow="2"
						inkscape:zoom="0.24748738"
						inkscape:cx="160.35521"
						inkscape:cy="316.37886"
						inkscape:document-units="px"
						inkscape:current-layer="layer1"
						showgrid="false"
						inkscape:showpageshadow="false"
						fit-margin-top="0"
						fit-margin-left="0"
						fit-margin-right="0"
						fit-margin-bottom="0"
						inkscape:window-width="1600"
						inkscape:window-height="850"
						inkscape:window-x="0"
						inkscape:window-y="0"
						inkscape:window-maximized="1" />
						<metadata
						id="metadata7">
						<rdf:RDF>
						<cc:Work
						rdf:about="">
						<dc:format>image/svg+xml</dc:format>
						<dc:type
						rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
						<dc:title></dc:title>
					</cc:Work>
				</rdf:RDF>
			</metadata>
			<g
			inkscape:label="Capa 1"
			inkscape:groupmode="layer"
			id="layer1"
			transform="translate(-28.354651,-133.23534)">
			<ellipse
			ry="64.930023"
			rx="66.030533"
			cy="312.11868"
			cx="370.61444"
			id="ellipse4205"
			style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:8.01398087;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" />
			<ellipse
			style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:7.03451681;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1"
			id="ellipse4207"
			cx="622.68634"
			cy="397.57977"
			rx="57.96032"
			ry="56.994308" />
			<ellipse
			ry="56.994308"
			rx="57.96032"
			cy="397.57977"
			cx="123.71903"
			id="ellipse4209"
			style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:7.03451681;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" />
			<path
			style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
			d="m 75.592729,460.9451 48.246991,37.35251 38.90887,-40.46521 46.69064,35.79615 3.1127,133.84649 -20.23261,21.78897 1.55636,136.95921 L 72.480019,789.33593 67.810956,660.15849 28.90209,611.9115 30.458444,501.41033 Z"
			id="path4211"
			inkscape:connector-curvature="0" />
			<path
			inkscape:connector-curvature="0"
			id="path4213"
			d="m 578.09786,461.48147 47.35198,38.48081 39.85307,-39.53563 45.83279,36.88816 -0.0472,133.88267 -20.74123,21.30537 -1.67654,136.9578 -121.43531,0.2467 -1.61896,-129.25165 -37.75933,-49.15186 4.16393,-110.43366 z"
			style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
			<path
			style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
			d="m 309.51283,414.09883 59.91965,134.62468 62.25419,-136.18104 38.90887,37.35251 4.66906,184.42803 -34.05099,47.06827 2.92389,189.49763 -146.29733,0 -3.11271,-191.43162 -35.79616,-46.69063 0.24412,-184.96209 z"
			id="path4215"
			inkscape:connector-curvature="0"
			sodipodi:nodetypes="cccccccccccc" />
			<path
			style="fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.08944821px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
			d="m 356.50476,414.2934 c 1.92589,0 21.18479,-0.27512 21.18479,-0.27512 l -7.42843,100.1463 z"
			id="path4217"
			inkscape:connector-curvature="0" />
			<path
			style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#ffffff;stroke-width:6.45985031;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1"
			d="m 374.2073,136.66307 c -123.12409,-3.84025 -212.79711,47.607 -251.03324,156.62767 64.91338,-73.3567 144.45763,-119.24908 253.62946,-115.8603 94.8825,3.12673 187.43344,64.89572 249.29162,126.37904 C 585.3492,206.15968 486.1279,140.31893 374.2073,136.66307 Z"
			id="path4224"
			inkscape:connector-curvature="0"
			sodipodi:nodetypes="ccccc" />
		</g>
	</svg>

</center>
</div>
<div class="item-in">
	<p><?php echo $proveedores; ?></p>
</div>
</div>
</div>
</a>
</div>

<div class="li">
	<a href="#tab5">
		<div class="fondo-iconos text-center max-alto color-icon">
			<svg
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:cc="http://creativecommons.org/ns#"
			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
			xmlns:svg="http://www.w3.org/2000/svg"
			xmlns="http://www.w3.org/2000/svg"
			xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
			xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
			width="65%"
			height="50px"
			viewBox="0 0 285.89118 301.63502"
			id="svg4816"
			version="1.1"
			inkscape:version="0.91 r13725"
			sodipodi:docname="icono-5.svg">
			<defs
			id="defs4818" />
			<sodipodi:namedview
			id="base"
			pagecolor="#ffffff"
			bordercolor="#666666"
			borderopacity="1.0"
			inkscape:pageopacity="0.0"
			inkscape:pageshadow="2"
			inkscape:zoom="0.7"
			inkscape:cx="-33.296832"
			inkscape:cy="206.62817"
			inkscape:document-units="px"
			inkscape:current-layer="layer1"
			showgrid="false"
			inkscape:showpageshadow="false"
			fit-margin-top="0"
			fit-margin-left="0"
			fit-margin-right="0"
			fit-margin-bottom="0"
			inkscape:window-width="1366"
			inkscape:window-height="717"
			inkscape:window-x="0"
			inkscape:window-y="0"
			inkscape:window-maximized="1" />
			<metadata
			id="metadata4821">
			<rdf:RDF>
			<cc:Work
			rdf:about="">
			<dc:format>image/svg+xml</dc:format>
			<dc:type
			rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
			<dc:title></dc:title>
		</cc:Work>
	</rdf:RDF>
</metadata>
<g
inkscape:label="Capa 1"
inkscape:groupmode="layer"
id="layer1"
transform="translate(-237.05439,-450.11613)">
<path
style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:0.82645994;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0"
d="M 73.923828 65.513672 L 73.923828 99.767578 L 57.40625 99.767578 L 57.40625 125.45703 L 73.923828 125.45703 L 73.923828 145.40234 L 57.40625 145.40234 L 57.40625 171.09375 L 73.923828 171.09375 L 73.923828 189.49023 L 57.40625 189.49023 L 57.40625 215.18164 L 73.923828 215.18164 L 73.923828 250.04297 L 104.86328 250.04297 L 104.86328 65.513672 L 73.923828 65.513672 z M 111.49414 67.169922 L 111.49414 251.14844 L 226.96289 251.14844 L 226.96289 67.169922 L 111.49414 67.169922 z M 169.70117 121.03711 A 20.856249 18.922557 0 0 1 190.49805 139.95898 L 190.49805 140.17578 A 20.856249 18.922557 0 0 1 169.46289 158.88281 A 20.856249 18.922557 0 0 1 148.78711 139.85156 A 20.856249 18.922557 0 0 1 169.70117 121.03711 z M 170.45898 164.45898 A 29.858275 30.993626 88.526704 0 1 201.25391 193.89844 A 29.858275 30.993626 88.526704 0 1 201.26562 194.27148 L 139.28125 194.02539 A 29.858275 30.993626 88.526704 0 1 139.2832 193.99219 A 29.858275 30.993626 88.526704 0 1 170.45898 164.45898 z "
transform="translate(237.05439,450.11613)"
id="rect4693" />
</g>
</svg>
<p><?php echo $directorio; ?></p>
</div>
</a>
</div>

<div class="li">
	<a href="#tab6">
		<div class="fondo-iconos text-center max-alto color-icon">
			<svg
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:cc="http://creativecommons.org/ns#"
			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
			xmlns:svg="http://www.w3.org/2000/svg"
			xmlns="http://www.w3.org/2000/svg"
			xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
			xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
			width="65%"
			height="50px"
			viewBox="0 0 285.89118 301.63502"
			id="svg4816"
			version="1.1"
			inkscape:version="0.91 r13725"
			sodipodi:docname="icono-6.svg">
			<defs
			id="defs4818" />
			<sodipodi:namedview
			id="base"
			pagecolor="#ffffff"
			bordercolor="#666666"
			borderopacity="1.0"
			inkscape:pageopacity="0.0"
			inkscape:pageshadow="2"
			inkscape:zoom="0.7"
			inkscape:cx="-33.296832"
			inkscape:cy="206.62817"
			inkscape:document-units="px"
			inkscape:current-layer="layer1"
			showgrid="false"
			inkscape:showpageshadow="false"
			fit-margin-top="0"
			fit-margin-left="0"
			fit-margin-right="0"
			fit-margin-bottom="0"
			inkscape:window-width="1366"
			inkscape:window-height="717"
			inkscape:window-x="0"
			inkscape:window-y="0"
			inkscape:window-maximized="1" />
			<metadata
			id="metadata4821">
			<rdf:RDF>
			<cc:Work
			rdf:about="">
			<dc:format>image/svg+xml</dc:format>
			<dc:type
			rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
			<dc:title></dc:title>
		</cc:Work>
	</rdf:RDF>
</metadata>
<g
inkscape:label="Capa 1"
inkscape:groupmode="layer"
id="layer1"
transform="translate(-237.05439,-450.11613)">
<path
style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:0.80702102;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0"
d="M 143.20312 26.974609 A 123.65815 119.93785 0 0 0 19.195312 146.22656 A 123.65815 119.93785 0 0 0 141.79102 266.8457 A 123.65815 119.93785 0 0 0 266.50195 148.28516 L 266.50977 146.9082 A 123.65815 119.93785 0 0 0 143.20312 26.974609 z M 143.3457 49.027344 A 101.02085 97.98161 0 0 1 244.08008 147.00391 L 244.07422 148.12891 A 101.02085 97.98161 0 0 1 142.19336 244.98438 A 101.02085 97.98161 0 0 1 42.041016 146.44727 A 101.02085 97.98161 0 0 1 143.3457 49.027344 z M 141.33594 71.009766 C 133.33016 71.009766 127.27539 77.25799 127.27539 85.654297 C 127.27539 94.245867 133.72073 100.10352 141.53125 100.10352 C 149.73229 100.10352 155.98047 94.050505 155.98047 85.263672 C 155.98047 77.257891 150.12277 71.009766 141.33594 71.009766 z M 143.48242 115.5293 L 115.95117 124.70703 L 115.95117 132.51758 L 128.83789 132.51758 L 128.83789 199.88281 L 126.10547 202.8125 L 115.56055 203.5918 L 115.56055 212.37891 L 166.71875 212.37891 L 166.71875 203.5918 L 155.78516 202.8125 L 152.85547 199.88281 L 152.85547 115.5293 L 143.48242 115.5293 z "
transform="translate(237.05439,450.11613)"
id="path4807" />
<path
id="path4807"
transform="translate(237.05439,450.11613)"
d="M 143.20312 26.974609 A 123.65815 119.93785 0 0 0 19.195312 146.22656 A 123.65815 119.93785 0 0 0 141.79102 266.8457 A 123.65815 119.93785 0 0 0 266.50195 148.28516 L 266.50977 146.9082 A 123.65815 119.93785 0 0 0 143.20312 26.974609 z M 143.3457 49.027344 A 101.02085 97.98161 0 0 1 244.08008 147.00391 L 244.07422 148.12891 A 101.02085 97.98161 0 0 1 142.19336 244.98438 A 101.02085 97.98161 0 0 1 42.041016 146.44727 A 101.02085 97.98161 0 0 1 143.3457 49.027344 z M 141.33594 71.009766 C 133.33016 71.009766 127.27539 77.25799 127.27539 85.654297 C 127.27539 94.245867 133.72073 100.10352 141.53125 100.10352 C 149.73229 100.10352 155.98047 94.050505 155.98047 85.263672 C 155.98047 77.257891 150.12277 71.009766 141.33594 71.009766 z M 143.48242 115.5293 L 115.95117 124.70703 L 115.95117 132.51758 L 128.83789 132.51758 L 128.83789 199.88281 L 126.10547 202.8125 L 115.56055 203.5918 L 115.56055 212.37891 L 166.71875 212.37891 L 166.71875 203.5918 L 155.78516 202.8125 L 152.85547 199.88281 L 152.85547 115.5293 L 143.48242 115.5293 z "
style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-width:0.80702102;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:0" />

</g>
</svg>
<p><?php echo $preguntas; ?></p>
</div>
</a>
</div>
<div class="li">
	<a href="#tab7">
		<div class="fondo-iconos text-center max-alto color-icon">
			<svg
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:cc="http://creativecommons.org/ns#"
			width="60%"
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
<div class="itemicon">
	<p><?php  echo $pqrs; ?></p>
</div>
</div>
</a>
</div>

<div class="li">
	<a href="#tab8">
		<div class="fondo-iconos text-center max-alto color-icon">
			<svg
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:cc="http://creativecommons.org/ns#"
			width="60%"
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
<div class="itemicon">
	<p><?php echo $corrupcion; ?></p>
</div>
</div>
</a>
</div>

</div>
<div class="text-center secundario section-white">
	<div class="container">
		<div class="text-left separacion-03">
			<?php if($currentlang=="es-ES"):?>
				<!-- español-->
				<p>Estos son los servicios que Astivik Shipyard ofrece y usted podrá solicitar una cotización.</p>
				<p>Si deseas agendar una cita para subir a dique.</p>

				<!-- end español -->
			<?php else: ?>
				<!-- english -->
				<p>This are the services Astivik provides. Feel free to ask for an estimate</p>
				<p>Schedule your next docking</p>

				<!-- end English -->
			<?php endif; ?>
		</div>
	</div>
</div>

<section id="formulario">
	<div class="container">
		<div class="tab-content">
			<div id="tab1" class="tab active">
				<div class="txt-formulario">
					<?php if($currentlang=="es-ES"):?>
						<!-- Español-->
						<h1>Cotiza y agenda tu próxima <span>subida a dique</span> </h1>
						<p>Estamos para atender su necesidad y trabajar en su proyecto. llene los campos a continuacion</p>
						<p>recibirá informacion de su servicio</p>
						<!-- End Español -->
					<?php else: ?>
						<!-- English -->
						<h1>Quote and Schedule <span>your next docking</span> </h1>
						<p>We are here to attend to your need and work on your project. fill in the fields below</p>
						<p>and you'll receive information about your service</p>
						<!-- End English -->
					<?php endif; ?>
				</div>
				<div class="items-tabs">
					<?php echo do_shortcode('[formidable id=5]'); ?>
				</div>
				<div class="img-form d-none d-md-block">
					<img  src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
				</div>

			</div>
			<div id="tab2" class="tab">
				<div class="txt-formulario">
					<?php if($currentlang=="es-ES"):?>
						<!-- Español-->
						<h1>Trabaja con Nosotros </h1>
						<p>Tu puedes ser la pieza que falta en nuestro equipo</p>
						<p>Envíanos tu hoja de vida</p>
						<!-- End Español -->
					<?php else: ?>
						<!-- English -->
						<h1>Work with us </h1>
						<p>You may be the missing piece in out team</p>
						<p>Send us your Resume</p>
						<!-- End English -->
					<?php endif; ?>
				</div>
				<div class="items-tabs">
					<?php echo do_shortcode('[formidable id=10]'); ?>
				</div>
				<div class="img-form">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
				</div>

			</div>

			<div id="tab3" class="tab">
				<div class="txt-formulario">
					<?php if($currentlang=="es-ES"):?>
						<!-- Español-->
						<h1>Asistencia Inmediata</h1>
						<p>Estamos para atender su necesidad y trabajar en su proyecto. llene los campos a continuacion</p>
						<p>y contacte a uno de nuestros agentes</p>
						<?php $providers = 'Proveedores'; ?>
						<!-- End Español -->
					<?php else: ?>
						<!-- English -->
						<h1>Immediate Assistance</h1>
						<p>We are here to attend to your need and work on your project. fill in the fields below</p>
						<p>And Contact one of our agents</p>
						<?php $providers = 'Proveedores'; ?>
						<!-- End English -->
					<?php endif; ?>
				</div>
				<div class="items-tabs">
					<?php echo do_shortcode('[formidable id=12]'); ?>
				</div>
				<div class="img-form">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
				</div>
			</div>

			<div id="tab4" class="tab">
				<div class="">

					<h1><?php echo $providers; ?></h1>

				</div>
				<div id="proveedores" class="items-tabs">
					<?php echo the_field('proveedores'); ?>
				</div>



			</div>
			<?php if($currentlang=="es-ES"):?>
				<!-- Español-->
				<div id="tab5" class="tab">
					<div class="">

						<h1>Directorio Corporativo</h1>
						<p>Nuestro equipo siempre está dispuesto a ayudarlo y atender sus necesidades</p>

					</div>
					<div id="directorio-corporativo" class="items-tabs">
						<?php echo the_field('directorio_corporativo'); ?>
					</div>

				</div>

				<div id="tab6" class="tab">
					<div class="txt-formulario">

						<h1>Preguntas Frecuentes</h1>
						<p>Acá respondemos algunas de las dudas frecuentes de nuestros clientes</p>

					</div>
					<div id="preguntas-frecuentes" class="items-tabs">
						<?php echo the_field('preguntas_frecuentes'); ?>
					</div>

				</div>

				<div id="tab7" class="tab">
					<div class="txt-formulario">

						<h1>Formulario PQRS</h1>
						<p>Su opinión nos ayuda a mejorar, por favor deje en el siguiente formulario cualquier</p>
						<p>pregunta, queja, reclamo o sugerencia</p>
					</div>
					<div class="items-tabs">
						<?php echo do_shortcode('[formidable id=11]'); ?>
					</div>
					<div class="img-form">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
					</div>

				</div>

				<div id="tab8" class="tab">
					<div class="txt-formulario">

						<h1>Denuncias Anticorrupción</h1>
						<p>Si conoces algún caso de corrupción que involucre a Industrias Astivik y/o su personal,</p> <p>por favor llena el siguiente formulario anónimo</p>
					</div>
					<div class="items-tabs">
						<?php echo do_shortcode('[formidable id=13]'); ?>
					</div>
					<div class="img-form">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
					</div>

				</div>
				<!-- End Español -->
			<?php else: ?>
				<!-- English -->
				<div id="tab5" class="tab">
					<div class="">

						<h1>Corporate Directory</h1>
						<p>Our team is eager to help you and attend your needs</p>

					</div>
					<div id="directorio-corporativo" class="items-tabs">
						<?php echo the_field('directorio_corporativo'); ?>
					</div>

				</div>

				<div id="tab6" class="tab">
					<div class="txt-formulario">

						<h1>FAQs</h1>
						<p>Here we answer some of the frequent doubts of our clients</p>

					</div>
					<div id="preguntas-frecuentes" class="items-tabs">
						<?php echo the_field('preguntas_frecuentes'); ?>
					</div>

				</div>

				<div id="tab7" class="tab">
					<div class="txt-formulario">

						<h1>Quality Survey</h1>
						<p>Your opinion helps us to improve, please leave any question, complaint, claim </p>
						<p>or suggestion in the following form</p>
					</div>
					<div class="items-tabs">
						<?php echo do_shortcode('[formidable id=11]'); ?>
					</div>
					<div class="img-form">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
					</div>

				</div>

				<div id="tab8" class="tab">
					<div class="txt-formulario">

						<h1>Anti-corruption complaint</h1>
						<p>If you know of any case of corruption involving Industrias Astivik and / or its staff,</p> <p>please fill out the following anonymous form</p>
					</div>
					<div class="items-tabs">
						<?php echo do_shortcode('[formidable id=13]'); ?>
					</div>
					<div class="img-form">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/detalle-capacidad/03_background_ship.png" alt="" class="lazy img-responsive">
					</div>

				</div>
				<!-- End English -->
			<?php endif; ?>
		</div>
	</div>
</div>
</div>
</div>

<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5b365ceaeba8cd3125e34f3b/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
	})();
</script>







<!-- iconos -->
<style>
.color-icon:hover #path4807 {
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path44697 {
	fill:#0051db!important;
	transition: .35s;
}




.color-icon:hover #rect4693 {
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #rect4236 {
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path4217{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path4215{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path4211{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path4213{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path4211{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path4211{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #path4224{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #ellipse4209{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #ellipse4207{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #layer1{
	fill:#0051db!important;
	transition: .35s;
}
.color-icon:hover #ellipse4205{
	fill:#0051db!important;
	transition: .35s;
}
</style>

<!--************************************************FORMULARIO************************************************-->
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
<script>
// In your Javascript (external .js resource or <script> tag)

jQuery(document).ready(function() {
	jQuery('.tabs .tab-links a').on('click', function(e) {
		var currentAttrValue = jQuery(this).attr('href');

// Show/Hide Tabs
jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

// Change/remove current tab to active
jQuery(this).parent('.li').addClass('active').siblings().removeClass('active');
$('.section-white').addClass('hidden');


e.preventDefault();
});

});
var hash = window.location.hash;
if (hash != '') {
	urlHash(hash);
}
function urlHash(hash){
	$('.tab-links').find('.active').removeClass('active');
	$('.tab-content').find('.active').removeClass('active');
	$(hash).addClass('active');
	if (hash != '#tab1'){
		$('.section-white').addClass('hidden');
	}

}
$('.primary').click(function(){
	$('.section-white').removeClass('hidden');
})

</script>

