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
					<h2>Mercadotecnia</h2>
					<ul>
						<li class="title">Los alumnos aprenderán a:</li>
						<li>Administrar el proceso de  ventas, compras y control de suministros.</li>
						<li>Desarrollar estrategias de mercado, identificando oportunidades de negocio.</li>
						<li>Diseñar campañas publicitarias que ayuden a aumentar las ventas de cualquier organización.</li>
						<li>Diseñar la imagen corporativa de cualquier empresa.</li> 
					</ul>
					<ul>
						<li class="title">Podrán trabajar en:</li>
						<li>En empresas comercializadoras y distribuidoras, tiendas de autoservicio, área de comercialización de empresas agroindustriales.</li>
						<li>Producción de comerciales para radio y televisión (Publicidad).</li>
						<li>Por cuenta propia realizando estudios de mercado, promoción y campañas publicitarias</li>
					</ul>
				</div>
				<p class="gallery-link" style="display: inline-block;"><a href="<?php echo site_url("career");?>">Volver</a></p>
				<p class="gallery-link" style="display: inline-block;"><a href="<?php echo base_url();?>documentos/1_Perfil_IngresoMerca.pdf">Perfil de Ingreso</a></p>
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
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/DE-CO-57 Matemáticas.pdf">Matemáticas</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/DE-CO-60 Estadistica para Negocios.pdf">Estadistica para negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-71 Finanzas.pdf">Finanzas</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_4/DE-CO-76 Plan de Negocios.pdf">Plan de negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/DE-CO-89 Planeación Estratégica de Mercadotecnia.pdf">Planeación estratégica de mercadotecnia</a></td>
						<td rowspan="11"><strong>Estadía</strong></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/7 Estadística para negocios.pdf">Estadística para negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/1 Administracion Financiera.pdf">Administración financiera</a></td>	
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Técnicas para la innovación.pdf">Técnicas para la innovación</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/11 Ingenieria Financiera.pdf">Ingeniería financiera</a></td>
						<td rowspan="11"><strong>Estadía</strong></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/DE-CO-52 Entorno de la Empresa.pdf">Entorno de la empresa</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/DE-CO-64 Informática para Negocios II.pdf">Informática para negocios 2</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-67 Estrategias de Venta.pdf">Estrategias de venta</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_4/DE-CO-77 Investigación de Mercados II.pdf">Investigación de mercados 2</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/DE-CO-85 Plan de Exportación.pdf">Plan de exportación</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/6 Economia para negocios.pdf">Economía para los negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/9 Estrategias para nuevos negocios.pdf">Estrategias para nuevos negocios</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Sistemas de Control Administrativo.pdf">Sistemas de control administrativo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/3 Desarrollo Empresarial.pdf">Desarrollo empresarial</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/DE-CO-50 Administración.pdf">Administración</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/DE-CO-61 Estudio del Consumidor.pdf">Estudio del consumidor</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-74 Administración de Almacén.pdf">Administración de almacén</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_4/DE-CO-80 Mezcla de Mercadotecnia.pdf">Mezcla de mercadotecnia</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/DE-CO-87 Comercio Electrónico.pdf">Comercio electrónico</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/10 Gestión de Compras.pdf">Gestión de compras</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/4 Dirección de Capital humano I.pdf">Dirección de capital humano 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/8 Estrategias corporativas de ventas.pdf">Estrategias corporativas de ventas</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/5 Dirección de Capital Humano II.pdf">Dirección de capital humano 2</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/DE-CO-56 Informática para Negocios I.pdf">Informática para negocios 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/DE-CO-59 Compras.pdf">Compras</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-69 Integradora I.pdf">Integradora 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_4/DE-CO-79 Producción Publicitaria I.pdf">Producción publicitaria 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/DE-CO-86 Producción Publicitaria II.pdf">Producción publicitaria 2</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/2 Derecho Corporativo.pdf">Derecho corporativo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/Creatividad_Empresarial_60[1].pdf">Creatividad empresarial</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Integradora I.pdf">Integradora 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/Reingeniería organizacional.pdf">Reingeniería organizacional</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/DE-CO-55 Fundamentos de Mercadotecnia.pdf">Fundamentos de mercadotecnia</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/DE-CO-66 Presupuestos.pdf">Presupuestos</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-72 Investigación de Mercados.pdf">Investigación de mercados 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_4/DE-CO-81 Comercio Internacional.pdf">Comercio internacional</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/DE-CO-90 Relaciones Humanas.pdf">Relaciones humanas</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/Inglés I.pdf">Inglés 6</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/Inglés II.pdf">Inglés 7</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/DE-AD-91 Metodología de la Investigación.pdf">Metodología de la investigación</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/Integradora II.pdf">Integradora 2</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/DE-CO-51 Calidad.pdf">Calidad</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/DE-CO-63 Gestión de Ventas.pdf">Gestión de ventas</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-68 Mercadotecnia Estratégica.pdf">Mercadotecnia estratégica</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_4/INGLES-IV.pdf">Inglés 4</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/DE-CO-88 Integradora II.pdf">Integradora 2</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/1 Administracion del tiempo.pdf">Administración del tiempo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/2 Planeacion y organizacion del trabajo.pdf">Planeación y organización del trabajo</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/Inglés III.pdf">Inglés 8</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/Inglés IV.pdf">Inglés 9</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/INGLES-I.pdf">Inglés 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/INGLES-II.pdf">Inglés 2</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-70 Comunicación Integral de Mercadotecnia.pdf">Comunicación integral de mercadotecnia</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_4/DE-CO-82 Formación Sociocultural IV.pdf">Formación sociocultural 4</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/INGLES-V.pdf">Inglés 5</a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/"></a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_2/"></a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/3 Direccion de equipos de alto rendimiento.pdf">Dirección de equipos de alto rendimiento</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/4 Negociacion empresarial.pdf">Negociación empresarial</a></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/Expresión Oral y Escrita I.pdf">Expresión oral y escrita 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/DE-CO-62 Formación Sociocultural II.pdf">Formación sociocultural 2</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/INGLES-III.pdf">Inglés 3</a></td>
						<td></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/DE-CO-84 Expresión Oral y Escrita II.pdf">Expresión oral y escrita 2</a></td>
						<!-- <td></td> -->
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_1/DE-CO-54 Formación Sociocultural I.pdf">Formación sociocultural 1</a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_2/"></a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_3/DE-CO-73 Formación Sociocultural III.pdf">Formación sociocultural 3</a></td>
						<td></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/tsu/cuatri_5/"></a></td>
						<!-- <td></td> -->
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_1/"></a></td>
						<td></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_3/"></a></td>
						<td><a href="<?php echo base_url(); ?>mapa_cuatrimestral/merca/ing/cuatri_4/"></a></td>
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