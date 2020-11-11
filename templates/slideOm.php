<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>OSFE</title>
	<link rel="stylesheet" href="sliderOm.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:200,300,400,500,600|Fira+Sans+Extra+Condensed:200,300,600,700" rel="stylesheet">
</head>
<body onload="dalePlay()" >
	<header class="header">
		<section class="carousel">

			<input name="ancla" id="cr_item_0" type="radio" class="cr_ancla slide" checked="">
			<input name="ancla" id="cr_item_1" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_2" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_3" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_4" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_5" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_6" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_7" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_8" type="radio" class="cr_ancla slide">

			<!-- Para 10 slides
			<input name="ancla" id="cr_item_9" type="radio" class="cr_ancla slide"> -->

			<!-- Para 12 slides -->
			<!-- <input name="ancla" id="cr_item_10" type="radio" class="cr_ancla slide">
			<input name="ancla" id="cr_item_11" type="radio" class="cr_ancla slide"> -->

			<input name="ancla" id="cr_play" type="radio" class="cr_ancla">
			
			<input name="ancla" id="cr_pause_0" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_1" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_2" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_3" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_4" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_5" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_6" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_7" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_8" type="radio" class="cr_ancla pause">

			<!-- Para 10 slides
			<input name="ancla" id="cr_pause_9" type="radio" class="cr_ancla pause"> -->

			<!-- Para 12 slides
			<input name="ancla" id="cr_pause_10" type="radio" class="cr_ancla pause">
			<input name="ancla" id="cr_pause_11" type="radio" class="cr_ancla pause"> -->

			<div class="cr_indicadores">
				<label for="cr_item_0" class="raya num0"></label>
				<label for="cr_item_1" class="raya num1"></label>
				<label for="cr_item_2" class="raya num2"></label>
				<label for="cr_item_3" class="raya num3"></label>
				<label for="cr_item_4" class="raya num4"></label>
				<label for="cr_item_5" class="raya num5"></label>
				<label for="cr_item_6" class="raya num6"></label>
				<label for="cr_item_7" class="raya num7"></label>
				<label for="cr_item_8" class="raya num8"></label>

				<!-- Para 10 slides
				<label for="cr_item_9" class="raya num7"></label> -->

				<!-- Para 12 slides
				<label for="cr_item_10" class="raya num6"></label>
				<label for="cr_item_11" class="raya num7"></label> -->
			</div>

			<ul>
				<li class="cr_item slide num0">
					<label for="cr_item_0" class="raya num0">
						<article class="item">
							<a href="http://osfetabasco.gob.mx/siteapp/pix" target="_blank" class="item_desc">
								<h3 class="item_tit">Toma de protesta del Fiscal Superior</h3>
								<p>Asume el Mtro. Alejandro Álvarez González y Mtra. Elia Magdalena de la Cruz León, como Fiscal Superior y Fiscal Especial respectivamente
								<br><b>Diciembre 12, 2017 - Villahermosa, Tabasco</b></p>
							</a>	
							<img src="1-protesta.jpg" alt="">
						</article>
					</label>
				</li>
				<li class="cr_item slide num1">
					<label for="cr_item_1" class="raya num1">
						<article class="item">
							<a href="/site/mensaje-de-bienvenida" target="_blank" class="item_desc">
								<h3 class="item_tit">Bienvenidos</h3>
								<p>Continúa lenyendo el <strong>Mensaje de Bienvenida</strong> y su traducción al español.
									<br>Nota: Algunos de los contenidos de este sitio se encuentran escritos en la lengua materna del Estado de Tabasco, Yokot’an.
								</p>
							</a>
							<img src="2-portada.jpg" alt="">
						</article>
					</label>
				</li>
				<li class="cr_item slide num2">
					<label for="cr_item_2" class="raya num2">
                        <article class="item">
							<a href="/site/track-ir2019-slide/" target="_blank" class="item_desc">
								<h3 class="item_tit">Informe de Resultados</h3>
								<p>Revisa el Informe de Resultados de la Cuenta Pública 2019
								<br><b>Septiembre 30, 2020 - Villahermosa, Tabasco</b></p>
							</a>	
							<img src="ir2019.png" alt="">
						</article>					
					</label>
				</li>
				<li class="cr_item slide num3">
					<label for="cr_item_3" class="raya num3">
						<article class="item">
							<a href="http://osfetabasco.gob.mx/site/inc/doc/difusion/acuerdos/acuerdoAmpDeclaracionOSFE-520.pdf" target="_blank" class="item_desc">
								<h3 class="item_tit">Acuerdo</h3>
								<p>Por el que se amplían los plazos para presentar la Declaración de Situación Patrimonial y de Intereses 2020
								<br><b>Villahermosa, Tabasco</b></p>
							</a>
							<img src="avisoDeclaracion.jpg" alt="">							
						</article>
                        
					</label>
				</li>
				<li class="cr_item slide num4">
					<label for="cr_item_4" class="raya num4">
						<article class="item">
							<a href="http://osfetabasco.gob.mx/site/inc/doc/difusion/acuerdos/reinicioActividades0620.pdf" target="_blank" class="item_desc">
								<h3 class="item_tit">Lineamientos</h3>
								<p>Lineamientos para el Reinicio de Actividades bajo la Nueva Normalidad en el OSFE
								<br><b>Villahermosa, Tabasco</b></p>
							</a>
							<img src="reinicioActividades.jpg" alt="">							
						</article>
						
					</label>
				</li>
				<li class="cr_item slide num5">
					<label for="cr_item_5" class="raya num5">
                        <article class="item">
							<a target="_blank" class="item_desc">
								<h3 class="item_tit">Firma de Convenio</h3>
								<p>Firma de Convenio de Colaboración con la Secretaría de la Función Pública
								<br><b>Villahermosa, Tabasco
								</b></p>
							</a>
							<img src="5-convenio.jpg" alt="">
						</article>
						
					</label>
				</li>
				<li class="cr_item slide num6">
					<label for="cr_item_6" class="raya num6">
						<article class="item">
							<a target="_blank" class="item_desc">
								<h3 class="item_tit">Sesión Ordinaria</h3>
								<p>Primer Sesión Ordinaria del Grupo Interdisciplinario de Trabajo en Materia Archivística
								<br><b>Villahermosa, Tabasco</b></p>
							</a>	
							<img src="7-ordinaria.jpg" alt="">
						</article>
						
					</label>
				</li>
				<li class="cr_item slide num7">
					<label for="cr_item_7" class="raya num7">
						<article class="item">
							<a target="_blank" class="item_desc">
								<h3 class="item_tit">Reunión de Trabajo</h3>
								<p>Reunión de Trabajo del Comité de Fiscalización
								<br><b>Villahermosa, Tabasco</b></p>
							</a>	
							<img src="3-reunion.jpg" alt="">
						</article>
					</label>
				</li>
				<li class="cr_item slide num8">
					<label for="cr_item_8" class="raya num8">
						
					</label>
				</li> 



				<!-- RAM Mak

				<article class="item">
							<a href="http://osfetabasco.gob.mx/siteapp/pix" target="_blank" class="item_desc">
								<h3 class="item_tit">JORNADA DE CAPACITACIÓN REGIONAL</h3>
								<p>SOBRE AUDITORÍA Y LA LEY GENERAL DE RESPONSABILIDADES ADMINISTRATIVAS
								<br>ASOFIS CENTRO GOLFO
								<br><b>Marzo 15, 2019 - Villahermosa, Tabasco</b></p>
							</a>
							<img src="9.jpg" alt="">
						</article>




				-->


				<!-- Para 10 slides

				<li class="cr_item slide num9">
					<label for="cr_item_9" class="raya num9">
						<article class="item">
							<a target="_blank" class="item_desc">
								<h3 class="item_tit">10</h3>
								<p>AAA
								<br>...
								</p>
							</a>
							<img src="10.jpg" alt="">
						</article>
					</label>
				</li> -->



				<!-- Para 12 slides
				
				<li class="cr_item slide num10">
					<label for="cr_item_10" class="raya num10">
						<article class="item">
							<a target="_blank" class="item_desc">
								<h3 class="item_tit">11</h3>
								<p>AAA
								<br>...
								</p>
							</a>
							<img src="11.jpg" alt="">
						</article>
					</label>
				</li>
				<li class="cr_item slide num11">
					<label for="cr_item_11" class="raya num11">
						<article class="item">
							<a target="_blank" class="item_desc">
								<h3 class="item_tit">12</h3>
								<p>AAA
								<br>...
								</p>
							</a>
							<img src="12.jpg" alt="">
						</article>
					</label>
				</li> -->
			</ul>
		</section>
	</header>
	<script>
		function dalePlay(){
			document.getElementById("cr_item_3").checked = false;
			document.getElementById("cr_play").checked = true;
		}
	</script>
</body>
</html>
