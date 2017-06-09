<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="icon" type="image/png" href="img/favicon-03.png"/>
	<title>Luisina Fernández Long</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="AOS/aos.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/fernandez_long.css">
	<link rel="stylesheet" href="css/responsive-chico.css" media="handheld, screen and (min-width:230px) and (max-width:768px)"/>  
	<link rel="stylesheet" href="css/responsive-medio.css" media="handheld, screen and (min-width:769px) and (max-width:1360px)"/> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script src="js/fernandezlong.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
		$('.nav_active').click(function(e) {	
			$('.nav_active').removeClass('bold');
				$("."+this.className.split(/\s+/)[0]).addClass('bold');});
	});


	// 	function(){
	// 		$('.filter').click(function(e){
	// 			$('.filter').removeClass('item');
	// 		$("."+this.className.split(/\s+/)[0]).addClass('itemgrande');
	
	</script>		
</head>


<body><!-- 					INICIO 						-->

		<a name="home"> </a>
		<div class="fotofondo" ></div> <!-- esta es mi foto --> 
		<a name="home_responsive">
			<div class="fondo_inicio">
				<center><img src="img/logo-01.png" alt="logo" class="logo_chico" /><!-- este mi logo --></center>
				<div class="holder"> 
					<div class="frase">
						<span class="cita"> “El diseño es el embajador silencioso de una marca”</span>
						<span class="autor"> -Paul Rand</span>
					</div>
					<a href="#home_responsive"></a><nav class="nav_home">
						<ul>
							<li><a href="#portfolio" title="" class=" foc_port nav_izquierda nav_active">PORTFOLIO<hr class="portfolio"></a></li><li><a href="#quien_soy" class="foc_qs  nav_centro nav_active">QUIEN SOY<hr class="quien_soy"></a></li><li><a href="#servicios" title="" class="foc_s nav_centro nav_active">SERVICIOS<hr class="servicios2"></a></li><li><a href="#contacto" title="" class="foc_con nav_derecha nav_active">CONTACTO<hr class="contacto"></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</a>

	
	<!-- 					FIN DE INICIO  				-->

	<!--			HEAD 							-->
	<?php
		include('inc/nav_sitio.php');
	?>
		<!--			HEAD 							-->

	
	<section class="contenido_portfolio portfolio">
		<a name="portfolio"></a>
		<div class="holder">
			<div class="adentro_portfolio">
				<ul id="filters">

					<li class="circulo"><span href="#portfolio" class="filter active serv4" data-filter=".branding, .editorial, .webotros">TODOS</span></li>
					<li class="circulo"><span href="#portfolio" class="filter serv1" data-filter=".branding"><a name="branding"></a>BRANDING</span></li>
					<li class="circulo"><span href="#portfolio" class="filter serv2" data-filter=".editorial">EDITORIAL</span></li>
					<li class="circulo"><span href="#portfolio" class="filter serv3" data-filter=".webotros">WEB Y OTROS</span></li>
				</ul>	
			</div>
						
			<div id ="portfoliolist">		  
				<a href="portfolio_extras.php?nombre=Lactum&tipo=Identidad corporativa&descripcion=...&foto=img/portfolio/lact2.png">    
				    <div class="portfolio item branding" data-cat="branding">
				 	  	<h3>Lactum</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Camino de los Jesuitas&tipo=Branding y piezas editoriales&descripcion=...&foto=img/portfolio/lact2.png" title="">
				    <div class="portfolio  item branding"  data-cat="branding">
				    	<h3>Camino de los...</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Camino de los Jesuitas&tipo=Branding y piezas editoriales&descripcion=...&foto=img/portfolio/lact2.png">
				    <div class="portfolio item  branding"  data-cat="branding">
				 	    	<h3>Cañada</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Zenitram&tipo=Branding y piezas gráficas&descripcion=...&foto=img/portfolio/lact2.png" title="">
				    <div class="portfolio item  branding item4"  data-cat="branding">
				 	      <h3>Zenitram</h3>
				    </div>
				</a>
			     <a href="portfolio_extras.php?nombre=Cañada&tipo=Diseño de diario&descripcion=...&foto=img/portfolio/lact2.png" title="">
				    <div class="portfolio item  editorial"  data-cat="editorial">
				 	      <h3>Cañada</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Polina Ivanova&tipo=Diseño de libro de texto e imágenes&descripcion=...&foto=img/portfolio/lact2.png" title="">
				    <div class="portfolio item  editorial"  data-cat="editorial">
				 	      <h3>Polina Ivanova</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Grito!&tipo=Branding y diseño de revista&descripcion=...&foto=img/portfolio/lact2.png" title="">
					<div class="portfolio item  editorial" data-cat="editorial">
				     		<h3>Grito!</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Camino de los Jesuitas&tipo=Branding y piezas editoriales&descripcion=...&foto=img/portfolio/lact2.png" title="">
			    	<div class="portfolio item  editorial item4" data-cat="editorial">
			       		<h3>Camino de los...</h3>
				    </div>
			    </a>
			    <a href="portfolio_extras.php?nombre=Televisión Pública&tipo=Branding e identidad corporativa&descripcion=...&foto=img/portfolio/lact2.png" title="">
					<div class="portfolio item  webotros" data-cat="webotros">
					     <h3>TVP</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Televisión Pública&tipo=Branding y piezas de video&descripcion=...&foto=img/portfolio/lact2.png" title="">
				    <div class="portfolio item  webotros" data-cat="webotros">
					    	<h3>TVP - video</h3>
					</div>
				</a>
				<a href="portfolio_extras.php?nombre=&tipo=Afiches de distintas temáticas&descripcion=...&foto=img/portfolio/lact2.png" title="">
				    <div class="portfolio item webotros" data-cat="webotros">
					   		 <h3>Afiches</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=&tipo=Fotografías de distintas temáticas&descripcion=...&foto=img/portfolio/lact2.png" title="">
				    <div class="portfolio  item webotros item4" data-cat="webotros">
					     <h3>Fotografías</h3>
				    </div>
			    </a>	    
			</div> 
		</div>
	</section>

<!-- 																			QUIEN SOY 						--> 
	<a name="quien_soy"></a>
		<div class="holder quien_soy">
			<div class="contenido_qs">
				<div class="descripcionpropia">
					<!-- <div class="forma_textoqs" -->
					<h3 class="titulo_qs">Desde que recuerdo amo dibujar, expresarme por medio del arte gráfica. Muchas veces pinté paredes, hice collages e inventé historias.Así me convertí en una apasionada por el diseño, amante de la fotografía y del arte en general.</h3>
					<img src="img/quien_soy/quien_soy.png" alt="Quien soy" class="foto_qs">
					<p class="texto_qs">Soy estudiante de la <span class="bolditalic"> Licenciatura en Diseño y Comunicación Visual</span>, actualmente me encuentro realizando el Trabajo Integrador Final.
					Mis pilares son la <span class="bold">responsabilidad</span>, la<span class="bold"> simpleza</span>, la <span class="bold">funcionalidad </span>y la <span class="bold">diversión</span>. Una pieza bien diseñada debería llamar la atención y divertir, ¿no?
					</p>



					<div class="botoncontactame">
						<a href="#contacto" title="" class="contactame">¡CONTACTAME!</a>
						<div class="fondocontactame">
							<div class="boton_circulo"></div>
						</div>	
					</div>

					<div class="botoncv">
						<a href="#" title="" class="cv">¿Querés ver mi CV?</a>
						<div class="fondo_botoncv">
							<div class="boton_circulo2"></div>
						</div>
					</div>	
				</div>
				
					<img src="img/quien_soy/cuerpocompleto-07.png" class="dibujoentero" alt="">
				
			</div>
		</div>
								<!-- 	<div class="caricatura">
										
									
									<video width="30%">
									  <source src="img/quien_soy/gif.mp4" type="video/mp4">
									 
									</video>
									</div>	
						 -->
							<!-- 		<div id="videosList">           
										<div class="video">
										    <video class="thevideo" loop >
										      <source src="img/quien_soy/gif.mp4" type="video/mp4">
										      <!-- <source src="https://giant.gfycat.com/VerifiableTerrificHind.webm" type="video/webm"> 
										    </video>
										  </div>
									</div>
											 -->	<!-- <div class="dibujo">
											<img src="img/caricatura--03.png" class="cuerpo" alt="">
										<img src="img/caricatura_antebrazo-06.png" alt="" class="antebrazo">

										<img src="img/caricatura_brazo-04.png" alt="" class="brazo">
										<img src="img/caricatura_mano-05.png" class="mano">	
										
												
										</div>		 -->
		



	<a name="servicios"></a>
		<div class="holder servicios">
			
				<section class="contenido_servicios">
					<div class="trabajos"  data-aos="fade-up">
						<div class="trabajo ">
							
								<img src="img/servicios/branding.png" class="img_servicios">
								<h3>BRANDING</h3>
								<ul>
									<li>Diseño de marca</li>
									<li>Identidad corporativa</li>
									<li>Rediseños</li>
								</ul>
								
							
						</div>

						<div class="trabajo">
							<img src="img/servicios/editorial.png" alt=""class="img_servicios">
							<h3>GRÁFICA</h3>
							<ul>
								<li>Diseño de catálogos</li>
								<li>Posters</li>
								<li>Diseño editorial</li>
							</ul>
						</div>

						<div class="trabajo">
							<img src="img/servicios/digital.png" alt="" class="img_servicios">
							<h3>DIGITAL</h3>
							<ul>
								<li>Diseño web</li>
								<li>Responsive Design</li>
								<li>Integración con redes</li>
							</ul>
							
						</div>

						<div class="trabajo">
							<img src="img/servicios/com_visual.png" alt="" class="img_servicios">
							<h3>COMUNICACIÓN VISUAL</h3>
							<ul>
								<li>Diseño gráfico</li>
								<li>Ilustración</li>
								<li>Fotografía</li>
							</ul>
						</div>		
						</div>
						<center>
						<div class="software"> SOFTWARE <br>
							<div class="soft_graficos1">
								<img src="img/software/1-06.png" alt="">
								<img src="img/software/2-07.png" alt="">
								<img src="img/software/3-08.png" alt="">
								<img src="img/software/Layout sitio-09.png" alt="">
								<img src="img/software/Layout sitio-10.png" alt="">
								<img src="img/software/Layout sitio-11.png" alt="">
								<img src="img/software/Layout sitio-12.png" alt="">

							</div>
							<div class="soft_graficos2">
								<img src="img/software/Layout sitio-13.png" alt="">
								<img src="img/software/Layout sitio-14.png" alt="">
								<img src="img/software/Layout sitio-15.png" alt="">
								<img src="img/software/Layout sitio-16.png" alt="">
								<img src="img/software/Layout sitio-17.png" alt="">
								<img src="img/software/Layout sitio-18.png" alt="">
								<img src="img/software/Layout sitio-19.png" alt="">
								<img src="img/software/Layout sitio-20.png" alt="">
							</div>
						</div>
					</center>
				</section>
		
		</div>

	<a name="contacto"></a>
		<div class="contenido_contacto contacto">
		
			<center>
				<div class="formulario">
					<h2 id="contacto">Contacto</h2>
					<form action="mailto:luisina.fl@hotmail.com?" method="post" name="formulario" id="section_formulario">
						<p>
							<label for="Nombre">Nombre y apellido: <br></label> 
							<input name="Nombre" type="text" required class="campos">
						</p>
						<p>
							<label for="email">Mail:<br></label>
							<input name="email" type="email" required class="campos" id="email">
						</p>

						<p>
							<label for="Pais">País:<br></label>
							<select name="Pais" class="campos" id="pais">
								<option>Argentina</option>
								<option>Brasil</option>
								<option>Bolivia</option>
								<option>Chile</option>
								<option>Estados Unidos</option>
								<option>México</option>
								<option>Paraguay</option>
								<option>Peru</option>
								<option>Uruguay</option>
								<option>Venezuela</option>
								<option>Otro estado americano</option>
								<option> Otro continente </option>
							</select>
						</p>
						<p>
							<label for="comentarios">Comentarios:<br></label></td>
							<textarea name="comentarios" id="comentarios" placeholder="Escribime tu comentario..."></textarea></td>
						</p>
						<input type="submit" value="Enviar" class="boton1" />
						<input type="submit" value="Restablecer" class="boton2" />

					</form>
				</div>
			</center>	
		</div>


	<footer>
		<span class="sp_foot">¿Queres otra forma para contactarme?</span><br>
		<div class="botones_footer">
			
			
			<a class="boton_footer icon-celular">(+54) 15 2645- 5369</a>
			<a href="https://www.behance.net/luisinafl" target="_blank" class="boton_footer icon-behance">/luisinafl</a>
			<a href="https://www.linkedin.com/in/luisinafl-disenadora/" class="boton_footer icon-linkedin" target="_blank">/luisinafl-disenadora</a>
			<a href="https://github.com/luifernandezlong" class="boton_footer icon-github" target="_blank">/luifernandezlong</a>
		</div>
		<br>
		<span class="copyright">© Luisina Fernández Long 2017</span>
	</footer>

	<script src="AOS/aos.js"></script>
	<script>

	AOS.init();

	</script>

</body>
</html>