<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<div class="container">
		<?php $this->load->view('navigation'); ?>
		
		<div id="content">
			<h1>División de Ingeniería Económico Administrativa</h1>
			
			<article>
				<div class="carreras">
					<h2>Administración</h2>
					<ul>
						<li class="title">Los alumnos aprenderán a:</li>
						<li>Formular la planeación estratégica de acuerdo a las necesidades de la organización y su entorno.</li>
						<li>Administrar el capital humano de acuerdo a la estructura, necesidades y normatividad de la organización.</li>
						<li>Evaluar la situación financiera presente y futura de una organización.</li>
						<li>Trabajar en equipo analizando información y tomando decisiones importantes, que favorezcan el buen manejo de una empresa.</li> 
						<li>Elaborar planes y estrategias para la solución creativa de problemas empresariales.</li> 
					</ul>
					<ul>
						<li class="title">Podrán trabajar en:</li>
						<li>En empresas de cualquier giro, principalmente agroindustriales, en las áreas de: administración, recursos humanos, planeación, ventas y finanzas.</li>
						<li>Asesoría a empresas agroindustriales y sociedades de producción privada en cuanto a optimización de recursos, reducción de costos y administración.</li>
						<li>Negocios familiares y empresas propias de nueva creación</li>
					</ul>
				</div>
				<p class="gallery-link" style="display: inline-block;"><a href="<?php echo site_url("career");?>">Volver</a></p>
				<p class="gallery-link" style="display: inline-block;"><a href="<?php echo base_url();?>documentos/1_Perfil_IngresoAdmi.pdf">Perfil de Ingreso</a></p>	
			</article>

			<br><br>

			<style>
				table{
					border-radius: 4px;
					font-family: 'OpenSansLight';
					font-size: 0.8em;
					margin: 0 auto;
					text-align: center;
					width: 950px;
				}
				table a{
					text-decoration: none;
					color: black;
				}
				table a:hover{
					color: #777;
				}
				table th{
					background: #ddd;
					border: 2px solid #ccc;
					font-size: 14px;
					padding: 5px;
				}
				table td{
					border: 1px solid #ccc;
					padding: 2px;
				}
			</style>

			<article>
				
				<h1>Mapa cuatrimestral</h1>
				<table>
					<tr>
						<th>1°</th>
						<th>2°</th>
						<th>3°</th>
						<th>4°</th>
						<th>5°</th>
						<th>6°</th>
						<th>7°</th>
						<th>8°</th>
						<th>9°</th>
						<th>10°</th>
						<th>11°</th>
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_1/DE-AD-54 Informatica.pdf">Informática</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_2/DE-AD-85 Contabilidad II.pdf">Contabilidad 2</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/DE-AD-105 Teoría y Desarrollo Organizacional.pdf">Teoría de desarrollo organizacional</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_4/DE-AD-109 Administración de Capital Humano.pdf">Administración del capital humano</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_5/DE-AD-117 Organización y Control de Calidad.pdf">Organización y control de la calidad</a></td>
						<td rowspan="11"><strong>Estadía</strong></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/7 Estadística para negocios.pdf">Estadística para negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/1 Administracion Financiera.pdf">Administración financiera</a></td>	
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Técnicas para la innovación.pdf">Técnicas para la innovación</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/11 Ingenieria Financiera.pdf">Ingeniería financiera</a></td>
						<td rowspan="11"><strong>Estadía</strong></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_1/DE-AD-50 Estadistica.pdf">Estadistica</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_2/DE-AD-89 Planeación Estratégica.pdf">Planeación estratégica</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/DE-AD-100 Administración del Capital de Trabajo.pdf">Administración del capital de trabajo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_4/DE-AD-107 Desarrollo de Capital Humano I.pdf">Desarrollo de capital humano 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_5/DE-AD-114 Desarrollo de Capital Humano.pdf">Desarrollo de capital humano 2</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/6 Economia para negocios.pdf">Economía para los negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/9 Estrategias para nuevos negocios.pdf">Estrategias para nuevos negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Sistemas de Control Administrativo.pdf">Sistemas de control administrativo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/3 Desarrollo Empresarial.pdf">Desarrollo empresarial</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_1/DE-AD-49 Contabilidad.pdf">Contabilidad 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_2/DE-AD-90 Procedimientos Administrativos.pdf">Procedimientos administrativos</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/DE-AD-104 Planeación Financiera.pdf">Planeación financiera</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_4/DE-AD-112 Sueldos y Salarios.pdf">Sueldos y salarios 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_5/DE-AD-119 Sueldos y Salarios II.pdf">Sueldos y salarios 2</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/10 Gestión de Compras.pdf">Gestión de compras</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/4 Dirección de Capital humano I.pdf">Dirección de capital humano 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/8 Estrategias corporativas de ventas.pdf">Estrategias corporativas de ventas</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/5 Dirección de Capital Humano II.pdf">Dirección de capital humano 2</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_1/DE-AD-53 Fundamentos de Administración.pdf">Fundamentos de administración</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_2/DE-AD-87 Fundamentos de Mercadotecnia.pdf">Fundamentos de mercadotecnia</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/DE-AD-102 Integradora I.pdf">Integradora 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_4/DE-AD-111 Previsión y Seguridad Social.pdf">Previsión y seguridad social</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_5/DE-AD-118 Seguridad e Higiene.pdf">Seguridad e Higiene laboral</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/2 Derecho Corporativo.pdf">Derecho corporativo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/Creatividad_Empresarial_60[1].pdf">Creatividad empresarial</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Integradora I.pdf">Integradora 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/Reingeniería organizacional.pdf">Reingeniería organizacional</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_1/INGLES-I.pdf">Inglés 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_2/DE-AD-84 Análisis e Interpretación de Edos. Financieros.pdf">Análisis e interpretación de estados financieros</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/DE-AD-103 Legislación Laboral.pdf">Legislación laboral</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_4/DE-AD-110 Integración de Capital Humano.pdf">Integración de capital humano</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_5/DE-AD-116 Integradora II.pdf">Integradora 2</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/Inglés I.pdf">Inglés 6</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/Inglés II.pdf">Inglés 7</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/DE-AD-91 Metodología de la Investigación.pdf">Metodología de la investigación</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/Integradora II.pdf">Integradora 2</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_1/Expresión Oral y Escrita I.pdf">Expresión oral y escrita 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_2/INGLES-II.pdf">Inglés 2</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/DE-AD-101 Análisis y Valuación de Puestos.pdf">Análisis y valuación de puestos</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_4/INGLES-IV.pdf">Inglés 4</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_5/INGLES-V.pdf">Inglés 5</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/1 Administracion del tiempo.pdf">Administración del tiempo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/2 Planeacion y organizacion del trabajo.pdf">Planeación y organización del trabajo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Inglés III.pdf">Inglés 8</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/Inglés IV.pdf">Inglés 9</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_1/DE-AD-52 Formación Socio Cultural I.pdf">Formación sociocultural 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_2/DE-AD-86 Formación Sociocultural II.pdf">Formación sociocultural 2</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/INGLES-III.pdf">Inglés 3</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_4/DE-AD-106 Formación Sociocultural IV.pdf">Formación sociocultural 4</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_5/DE-AD-115 Expresión Oral y Escrita II.pdf">Expresión oral y escrita 2</a></td>
						<!-- <td></td> -->
						<td></td>
						<td></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/3 Direccion de equipos de alto rendimiento.pdf">Dirección de equipos de alto rendimiento</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/4 Negociacion empresarial.pdf">Negociación empresarial</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/admi/tsu/cuatri_3/DE-AD-98 Formación Sociocultural III.pdf">Formación sociocultural 3</a></td>
						<td></td>
						<td></td>
						<!-- <td></td> -->
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<!-- <td></td> -->
					</tr>
				</table>
				<br>
				
				<p class="gallery-link"><a href="<?php echo site_url("career");?>">Volver</a></p>
				<br><br><br><br>
			</article>
			
		</div>
		<?php $this->load->view('footer'); ?>
	</div>
</body>
</html>